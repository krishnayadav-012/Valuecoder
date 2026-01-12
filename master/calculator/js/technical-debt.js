
        const inputs = ['teamSize', 'avgSalary', 'bugRate', 'velocityLoss', 'infraInefficiency'];
        const elements = {};
        
        inputs.forEach(id => {
            elements[id] = document.getElementById(id);
            elements[`${id}Val`] = document.getElementById(`${id}Val`);
        });

        const formatCurrency = (amount) => {
            return new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: 'USD',
                minimumFractionDigits: 0,
                maximumFractionDigits: 0
            }).format(amount);
        };

        function calculate() {
            const teamSize = Number(elements.teamSize.value);
            const avgSalary = Number(elements.avgSalary.value);
            const bugRate = Number(elements.bugRate.value);
            const velocityLoss = Number(elements.velocityLoss.value);
            const infraInefficiency = Number(elements.infraInefficiency.value);

            // Update Label Displays
            elements.teamSizeVal.innerText = teamSize;
            elements.avgSalaryVal.innerText = formatCurrency(avgSalary);
            elements.bugRateVal.innerText = `${bugRate}%`;
            elements.velocityLossVal.innerText = `${velocityLoss}%`;
            elements.infraInefficiencyVal.innerText = `${infraInefficiency}%`;

            // Business Logic
            const totalSalaryCost = teamSize * avgSalary;
            const bugCost = totalSalaryCost * (bugRate / 100);
            const velocityCost = totalSalaryCost * (velocityLoss / 100);
            const infraCost = totalSalaryCost * (infraInefficiency / 100);
            const totalAnnualCost = bugCost + velocityCost + infraCost;
            const percentage = ((totalAnnualCost / totalSalaryCost) * 100).toFixed(1);

            // Update Results UI
            document.getElementById('totalAnnualCost').innerText = formatCurrency(totalAnnualCost);
            document.getElementById('percentageOfBudget').innerText = `${percentage}% of Engineering Budget`;
            document.getElementById('bugCostResult').innerText = formatCurrency(bugCost);
            document.getElementById('velocityCostResult').innerText = formatCurrency(velocityCost);
            document.getElementById('infraCostResult').innerText = formatCurrency(infraCost);

            // Update Insight Section
            const recovery = totalAnnualCost * 0.25;
            const headcount = Math.floor(recovery / avgSalary);
            document.getElementById('insightText').innerHTML = `
                By reducing debt by 25%, you could save <span class="text-black font-bold">${formatCurrency(recovery)}</span> annually. 
                That's enough to hire <span class="text-black font-bold">${headcount}</span> additional full-time developer(s).
            `;
        }

        // Add Listeners
        inputs.forEach(id => elements[id].addEventListener('input', calculate));

        // Init
        lucide.createIcons();
        calculate();
    