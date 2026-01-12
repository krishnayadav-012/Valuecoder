
        // State management
        let dependentProjects = [];

        // Formatting helper
        const formatCurrency = (value) => {
            return new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: 'USD',
                minimumFractionDigits: 0,
                maximumFractionDigits: 0,
            }).format(value);
        };

        // Add Dependency
        function addDependency() {
            const nameInput = document.getElementById('depName');
            const revenueInput = document.getElementById('depRevenue');
            
            if (nameInput.value && revenueInput.value) {
                dependentProjects.push({
                    name: nameInput.value,
                    monthlyRevenue: parseFloat(revenueInput.value)
                });
                nameInput.value = '';
                revenueInput.value = '';
                renderDependencies();
                calculateCosts();
            }
        }

        // Remove Dependency
        function removeDependency(index) {
            dependentProjects.splice(index, 1);
            renderDependencies();
            calculateCosts();
        }

        // Render Dependencies UI
        function renderDependencies() {
            const list = document.getElementById('dependencyList');
            list.innerHTML = '';
            
            dependentProjects.forEach((dep, index) => {
                const div = document.createElement('div');
                div.className = "flex items-center justify-between bg-slate-50 p-3 rounded-lg";
                div.innerHTML = `
                    <div>
                        <p class="font-medium text-slate-800">${dep.name}</p>
                        <p class="text-sm text-slate-600">${formatCurrency(dep.monthlyRevenue)}/month</p>
                    </div>
                    <button onclick="removeDependency(${index})" class="text-red-600 hover:text-red-700 font-medium text-sm">Remove</button>
                `;
                list.appendChild(div);
            });
        }

        // Calculation Logic
        function calculateCosts() {
            const monthlyRevenue = parseFloat(document.getElementById('monthlyRevenue').value) || 0;
            const delayMonths = Math.max(1, parseInt(document.getElementById('delayMonths').value) || 1);
            const opportunityCost = parseFloat(document.getElementById('opportunityCost').value) || 0;
            const teamSize = parseFloat(document.getElementById('teamSize').value) || 0;
            const avgSalary = parseFloat(document.getElementById('avgSalary').value) || 0;

            const dependentRevenue = dependentProjects.reduce((sum, dep) => sum + dep.monthlyRevenue, 0);
            const teamCostPerMonth = (teamSize * avgSalary) / 12;

            const monthlyLoss = monthlyRevenue + dependentRevenue + opportunityCost;
            const totalLoss = monthlyLoss * delayMonths;
            const wastedTeamCost = teamCostPerMonth * delayMonths;
            const grandTotal = totalLoss + wastedTeamCost;
            const totalMonthlyRate = monthlyLoss + teamCostPerMonth;

            // Update UI
            document.getElementById('grandTotal').innerText = formatCurrency(grandTotal);
            document.getElementById('delayText').innerText = `Total cost for ${delayMonths} month${delayMonths > 1 ? 's' : ''} delay`;
            document.getElementById('directLoss').innerText = formatCurrency(monthlyRevenue * delayMonths);
            document.getElementById('monthlyLossRate').innerText = formatCurrency(totalMonthlyRate);

            // Conditional Row visibility
            updateRow('dependentRow', 'dependentLoss', dependentRevenue * delayMonths);
            updateRow('opportunityRow', 'opportunityLoss', opportunityCost * delayMonths);
            updateRow('teamRow', 'wastedTeamCost', wastedTeamCost);

            // Reference Card
            const refCard = document.getElementById('referenceCard');
            if (totalMonthlyRate > 0) {
                refCard.classList.remove('hidden');
                document.getElementById('dailyCost').innerText = formatCurrency(totalMonthlyRate / 30);
                document.getElementById('weeklyCost').innerText = formatCurrency(totalMonthlyRate / 4.33);
                document.getElementById('quarterlyCost').innerText = formatCurrency(totalMonthlyRate * 3);
            } else {
                refCard.classList.add('hidden');
            }
        }

        function updateRow(rowId, valId, value) {
            const row = document.getElementById(rowId);
            if (value > 0) {
                row.classList.remove('hidden');
                document.getElementById(valId).innerText = formatCurrency(value);
            } else {
                row.classList.add('hidden');
            }
        }

        // Event Listeners for inputs
        const inputs = ['monthlyRevenue', 'delayMonths', 'opportunityCost', 'teamSize', 'avgSalary'];
        inputs.forEach(id => {
            document.getElementById(id).addEventListener('input', calculateCosts);
        });

        // Initialize Lucide icons
        lucide.createIcons();
    