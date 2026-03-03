 document.addEventListener('DOMContentLoaded', () => {

    const safe = (id) => document.getElementById(id);

    const yearSpan = safe('year');
    if (yearSpan) {
        yearSpan.textContent = new Date().getFullYear();
    }

    const calculateBtn = safe('calculate-btn');
    const resultsContainer = safe('results-container');
    const churnRiskIncrease = safe('churnRiskIncrease');
    const churnRiskValue = safe('churnRiskValue');

    if (churnRiskIncrease && churnRiskValue) {
        churnRiskIncrease.addEventListener('input', (e) => {
            churnRiskValue.textContent = e.target.value;
        });
    }

    const currencyFormatter = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD',
        maximumFractionDigits: 0
    });

    const calculate = () => {

        const getVal = (id) => {
            const el = safe(id);
            return el ? Number(el.value || 0) : 0;
        };

        const inputs = {
            plannedFrequency: getVal('plannedFrequency'),
            avgRevenuePerRelease: getVal('avgRevenuePerRelease'),
            avgDelayWeeks: getVal('avgDelayWeeks'),
            delayedReleasesLastYear: getVal('delayedReleasesLastYear'),
            teamSize: getVal('teamSize'),
            monthlyCostPerEngineer: getVal('monthlyCostPerEngineer'),
            revenueImpactPerWeek: getVal('revenueImpactPerWeek'),
            churnRiskIncrease: getVal('churnRiskIncrease'),
            competitiveLostDeals: getVal('competitiveLostDeals'),
            avgDealSize: getVal('avgDealSize'),
            marketingSpend: getVal('marketingSpend'),
            enterpriseWaiting: safe('enterpriseWaiting')?.checked || false
        };

        if (!calculateBtn) return;

        calculateBtn.disabled = true;

        setTimeout(() => {

            const revenueDelayCost = inputs.revenueImpactPerWeek * inputs.avgDelayWeeks * inputs.delayedReleasesLastYear;
            const momentumLossCost = inputs.marketingSpend * 0.4;
            const teamBurnCost = inputs.teamSize * inputs.monthlyCostPerEngineer * (inputs.avgDelayWeeks / 4);
            const competitiveLossCost = inputs.competitiveLostDeals * inputs.avgDealSize;

            const totalImpact = revenueDelayCost + momentumLossCost + teamBurnCost + competitiveLossCost;
            const annualProjectedImpact = totalImpact * (12 / (inputs.avgDelayWeeks > 0 ? inputs.avgDelayWeeks : 12));

            const totalDevYearly = inputs.teamSize * inputs.monthlyCostPerEngineer * 12;
            const riskFactor = (totalImpact / (totalDevYearly || 1)) * 100;

            let riskLevel = 'low';
            if (riskFactor > 16) riskLevel = 'high';
            else if (riskFactor > 5) riskLevel = 'medium';

            updateUI({
                revenueDelayCost,
                momentumLossCost,
                teamBurnCost,
                competitiveLossCost,
                totalImpact,
                annualProjectedImpact,
                riskLevel,
                benchmarkDiff: riskFactor + 3
            }, inputs);

            calculateBtn.disabled = false;

            if (resultsContainer) {
                resultsContainer.classList.remove('hidden');
                resultsContainer.scrollIntoView({ behavior: 'smooth' });
            }

        }, 800);
    };

    const updateUI = (results, inputs) => {

        const setText = (id, val) => {
            const el = safe(id);
            if (el) el.textContent = val;
        };

        const setWidth = (id, val) => {
            const el = safe(id);
            if (el) el.style.width = val;
        };

        const riskCard = safe('risk-card');
        const riskIcon = safe('risk-icon');

        const configMap = {
            low: { bg: 'bg-green-50', border: 'border-green-200', text: 'text-green-600', iconBg: 'bg-green-500', icon: '✓', status: 'STABLE' },
            medium: { bg: 'bg-yellow-50', border: 'border-yellow-200', text: 'text-yellow-600', iconBg: 'bg-yellow-500', icon: '⚡', status: 'NEEDS OPTIMIZATION' },
            high: { bg: 'bg-red-50', border: 'border-red-200', text: 'text-red-600', iconBg: 'bg-red-500', icon: '⚠️', status: 'CRITICAL ACTION REQUIRED' }
        };

        const config = configMap[results.riskLevel];

        if (riskCard && config) {
            riskCard.className = `p-6 rounded-2xl border-2 ${config.bg} ${config.border} ${config.text} flex flex-col md:flex-row items-center justify-between gap-4`;
        }

        if (riskIcon && config) {
            riskIcon.className = `p-3 rounded-full ${config.iconBg} text-white font-bold`;
            riskIcon.textContent = config.icon;
        }

        setText('risk-level-text', results.riskLevel);
        setText('benchmark-diff', results.benchmarkDiff.toFixed(1));
        setText('status-text', config?.status || '');

        setText('total-impact', currencyFormatter.format(results.totalImpact));
        setText('annual-impact', currencyFormatter.format(results.annualProjectedImpact));

        const maxVal = Math.max(
            results.revenueDelayCost,
            results.momentumLossCost,
            results.teamBurnCost,
            results.competitiveLossCost,
            1
        );

        const updateBar = (barId, val, labelId) => {
            setWidth(barId, `${(val / maxVal) * 100}%`);
            setText(labelId, currencyFormatter.format(val));
        };

        updateBar('bar-rev', results.revenueDelayCost, 'val-rev');
        updateBar('bar-mom', results.momentumLossCost, 'val-mom');
        updateBar('bar-burn', results.teamBurnCost, 'val-burn');
        updateBar('bar-comp', results.competitiveLossCost, 'val-comp');

        setText(
            'insight-text',
            results.teamBurnCost > results.revenueDelayCost
                ? "Engineering burn is your biggest hidden leak. Your cost to wait is higher than your cost to build."
                : "Opportunity cost is crippling your growth. Every week of delay is direct revenue out of your pockets."
        );

        const recList = safe('recommendations-list');
        if (!recList) return;

        recList.innerHTML = '';
    };

    if (calculateBtn) {
        calculateBtn.addEventListener('click', calculate);
    }
});