
        // State
        let staffAug = { numEngineers: 5, avgMonthlyCostPerEngineer: 8000, internalManagerCost: 6000, productivityLossPercent: 20, hiringDelayMonths: 3, qaReworkPercent: 15 };
        let productPod = { podSize: 7, avgMonthlyPodCost: 45000, productivityImprovementPercent: 25, deliveryAccelerationWeeks: 6 };

        const formatCurrency = (val) => new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD', maximumFractionDigits: 0 }).format(val);

        function calculateResults() {
            const directEngCost = staffAug.numEngineers * staffAug.avgMonthlyCostPerEngineer;
            const coordinationCost = directEngCost * (staffAug.productivityLossPercent / 100);
            const reworkCost = directEngCost * (staffAug.qaReworkPercent / 100);
            const hiringDelayTotal = directEngCost * staffAug.hiringDelayMonths;
            
            const staffAugMonthly = directEngCost + staffAug.internalManagerCost + coordinationCost;
            const staffAugAnnual = (staffAugMonthly * 12) + hiringDelayTotal + (reworkCost * 12);

            const podMonthly = productPod.avgMonthlyPodCost;
            const podAnnual = podMonthly * 12;

            return {
                staffAugMonthly, staffAugAnnual, podMonthly, podAnnual,
                annualSavings: staffAugAnnual - podAnnual,
                hidden: { coordination: coordinationCost, hiringDelay: hiringDelayTotal / 12, rework: reworkCost },
                efficiency: { sa: 100 - staffAug.productivityLossPercent, pod: Math.min(100, 85 + (productPod.productivityImprovementPercent / 5)) },
                risk: staffAug.productivityLossPercent > 20 ? 'High' : (staffAug.productivityLossPercent > 10 ? 'Medium' : 'Low')
            };
        }

        function renderChart(results) {
            const container = document.getElementById('chart-container');
            container.innerHTML = '';
            const width = container.clientWidth, height = container.clientHeight;
            const svg = d3.select('#chart-container').append('svg').attr('width', width).attr('height', height);
            
            const data = [
                { name: 'Staff Aug', value: results.staffAugAnnual, color: '#94a3b8' },
                { name: 'Product Pod', value: results.podAnnual, color: '#2563eb' }
            ];

            const x = d3.scaleLinear().domain([0, d3.max(data, d => d.value)]).range([100, width - 20]);
            const y = d3.scaleBand().domain(data.map(d => d.name)).range([0, height]).padding(0.4);

            svg.selectAll('rect').data(data).enter().append('rect')
                .attr('x', 100).attr('y', d => y(d.name))
                .attr('width', d => x(d.value) - 100).attr('height', y.bandwidth())
                .attr('fill', d => d.color).attr('rx', 6);

            svg.selectAll('text.labels').data(data).enter().append('text')
                .attr('x', 90).attr('y', d => y(d.name) + y.bandwidth()/2 + 5)
                .attr('text-anchor', 'end').style('font-size', '12px').text(d => d.name);
        }

        function updateUI() {
            const res = calculateResults();
            document.getElementById('res-annual-savings').textContent = formatCurrency(res.annualSavings);
            document.getElementById('res-savings-desc').innerHTML = `Equivalent to <strong>${Math.round(res.annualSavings / 90000)}</strong> addl. engineers.`;
            
            const badge = document.getElementById('res-risk-badge');
            badge.textContent = res.risk + " Risk";
            badge.className = `px-2 py-0.5 rounded text-[10px] font-bold uppercase ${res.risk === 'High' ? 'bg-red-100 text-red-600' : 'bg-green-100 text-green-600'}`;

            document.getElementById('res-sa-monthly').textContent = formatCurrency(res.staffAugMonthly);
            document.getElementById('res-pod-monthly').textContent = formatCurrency(res.podMonthly);
            document.getElementById('res-sa-annual').textContent = formatCurrency(res.staffAugAnnual);
            document.getElementById('res-pod-annual').textContent = formatCurrency(res.podAnnual);
            document.getElementById('res-recommendation').textContent = res.annualSavings > 0 ? "Product Pod" : "Staff Aug";

            document.getElementById('res-sa-eff-val').textContent = res.efficiency.sa + "%";
            document.getElementById('res-sa-eff-bar').style.width = res.efficiency.sa + "%";
            document.getElementById('res-pod-eff-val').textContent = Math.round(res.efficiency.pod) + "%";
            document.getElementById('res-pod-eff-bar').style.width = res.efficiency.pod + "%";

            document.getElementById('hidden-costs-list').innerHTML = `
                <div class="flex justify-between text-red-800 text-sm"><span>Coordination</span><b>${formatCurrency(res.hidden.coordination)}/mo</b></div>
                <div class="flex justify-between text-red-800 text-sm"><span>Rework Debt</span><b>${formatCurrency(res.hidden.rework)}/mo</b></div>
            `;
            
            document.getElementById('res-impact-statement').innerHTML = `Switching could save <span class="text-blue-600 font-bold">${formatCurrency(res.annualSavings)}</span> annually.`;
            renderChart(res);
        }

        // Listeners
        document.getElementById('calculate-btn').addEventListener('click', () => {
            document.getElementById('results-section').classList.remove('hidden');
            updateUI();
            window.scrollTo({ top: document.getElementById('results-section').offsetTop - 100, behavior: 'smooth' });
        });

        const inputs = [
            { id: 'sa-num-engineers', key: 'numEngineers', obj: staffAug },
            { id: 'sa-cost-per-eng', key: 'avgMonthlyCostPerEngineer', obj: staffAug },
            { id: 'sa-manager-cost', key: 'internalManagerCost', obj: staffAug },
            { id: 'sa-hiring-delay', key: 'hiringDelayMonths', obj: staffAug },
            { id: 'sa-prod-loss', key: 'productivityLossPercent', obj: staffAug, valId: 'sa-prod-loss-val', suffix: '%' },
            { id: 'sa-qa-rework', key: 'qaReworkPercent', obj: staffAug, valId: 'sa-qa-rework-val', suffix: '%' },
            { id: 'pod-size', key: 'podSize', obj: productPod },
            { id: 'pod-cost', key: 'avgMonthlyPodCost', obj: productPod },
            { id: 'pod-prod-gain', key: 'productivityImprovementPercent', obj: productPod, valId: 'pod-prod-gain-val', suffix: '%' },
            { id: 'pod-accel', key: 'deliveryAccelerationWeeks', obj: productPod, valId: 'pod-accel-val', suffix: ' weeks/qtr' }
        ];

        inputs.forEach(input => {
            const el = document.getElementById(input.id);
            el.addEventListener('input', (e) => {
                input.obj[input.key] = Number(e.target.value);
                if (input.valId) document.getElementById(input.valId).textContent = e.target.value + input.suffix;
                if (!document.getElementById('results-section').classList.contains('hidden')) updateUI();
            });
        });

        window.addEventListener('resize', () => { if(!document.getElementById('results-section').classList.contains('hidden')) updateUI(); });
