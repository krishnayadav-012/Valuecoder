
        // Constants & Data
        const ROLES = [
            { name: 'Product Manager', salary: 12000, alloc: 1 },
            { name: 'Product Designer', salary: 10000, alloc: 0.5 },
            { name: 'Frontend Engineer', salary: 11000, alloc: 1 },
            { name: 'Backend Engineer', salary: 11000, alloc: 1 },
            { name: 'QA Engineer', salary: 8000, alloc: 0.5 },
        ];

        const POD_TEMPLATES = {
            standard: { cost: 35000, velocity: 45 },
            advanced: { cost: 55000, velocity: 80 },
            enterprise: { cost: 85000, velocity: 120 }
        };

        let myChart;

        // Initialize Traditional Roles UI
        function initRoles() {
            const container = document.getElementById('rolesList');
            ROLES.forEach((role, i) => {
                container.innerHTML += `
                    <div class="grid grid-cols-12 gap-4 items-center bg-white p-3 rounded-xl border border-slate-100 shadow-sm">
                        <div class="col-span-6 text-sm font-semibold">${role.name}</div>
                        <div class="col-span-4">
                            <input type="number" value="${role.salary}" class="role-salary w-full p-1 text-sm border-b" data-index="${i}">
                        </div>
                        <div class="col-span-2 text-[10px] text-slate-400 font-bold">${role.alloc * 100}%</div>
                    </div>
                `;
            });
        }

        function calculate() {
            const itemCount = Number(document.getElementById('itemCount').value);
            const complexityMult = Number(document.getElementById('complexity').value);
            const podMonthlyCost = Number(document.getElementById('podCost').value);
            const podType = document.getElementById('podType').value;
            const podVelocityPerSprint = POD_TEMPLATES[podType].velocity;

            const totalPointsNeeded = itemCount * complexityMult;
            const sprintsPerMonth = 2; // Assuming 2-week sprints

            // Pod Calcs
            const podVelocityPerMonth = podVelocityPerSprint * sprintsPerMonth;
            const podTime = totalPointsNeeded / podVelocityPerMonth;

            // Traditional Calcs
            let salaryBase = 0;
            document.querySelectorAll('.role-salary').forEach((input, i) => {
                salaryBase += Number(input.value) * ROLES[i].alloc;
            });

            const overhead = Number(document.getElementById('overhead').value) / 100;
            const tradMonthlyCost = salaryBase * (1 + overhead);
            const tradVelocityPerMonth = podVelocityPerMonth * 0.8; // Coordination drag
            const hiringDelay = Number(document.getElementById('hiringDelay').value);
            const tradTime = (totalPointsNeeded / tradVelocityPerMonth) + hiringDelay + 1; // +1 for ramp

            // Results
            const totalCostPod = podMonthlyCost * podTime;
            const totalCostTrad = tradMonthlyCost * tradTime;
            const savingsTotal = totalCostTrad - totalCostPod;
            const savingsPercent = (savingsTotal / totalCostTrad) * 100;
            const velAdvantage = ((tradTime - podTime) / tradTime) * 100;

            // Update UI
            document.getElementById('resPodMonthly').innerText = `$${podMonthlyCost.toLocaleString()}`;
            document.getElementById('resPodTime').innerText = `${podTime.toFixed(1)} months`;
            document.getElementById('resSavingsTotal').innerText = `$${Math.round(savingsTotal).toLocaleString()}`;
            document.getElementById('resSavingsPercent').innerText = `${Math.round(savingsPercent)}% cost reduction`;
            document.getElementById('resVelocityAdv').innerText = `+${Math.round(velAdvantage)}%`;
            document.getElementById('velocityBar').style.width = `${Math.min(100, velAdvantage)}%`;

            updateChart(podTime, tradTime, podMonthlyCost, tradMonthlyCost);
        }

        function updateChart(pTime, tTime, pCost, tCost) {
            const ctx = document.getElementById('comparisonChart').getContext('2d');
            if (myChart) myChart.destroy();

            myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Time (Mo)', 'Cost ($k)'],
                    datasets: [
                        { label: 'Pod', data: [pTime, pCost / 1000], backgroundColor: '#0693e3', borderRadius: 5 },
                        { label: 'Trad', data: [tTime, tCost / 1000], backgroundColor: '#abb8c3', borderRadius: 5 }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: { y: { display: false }, x: { ticks: { color: '#64748b', font: { size: 10 } } } },
                    plugins: { legend: { display: false } }
                }
            });
        }

        // Listeners
        document.getElementById('podType').addEventListener('change', (e) => {
            const temp = POD_TEMPLATES[e.target.value];
            document.getElementById('podCost').value = temp.cost;
            calculate();
        });

        document.addEventListener('input', calculate);

        // Run
        initRoles();
        calculate();
    