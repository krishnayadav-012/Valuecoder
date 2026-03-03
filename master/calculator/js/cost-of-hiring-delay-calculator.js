
       // Data State
const hiringInputs = {
    openRoles: 5,
    revPerEngineer: 15000,
    costPerEngineer: 8000,
    timeToHire: 4,
    hiringDelay: 2,
    costPerHire: 5000
};

const impactInputs = {
    projectDelayWeeks: 8,
    revenueImpactPerWeek: 12000,
    deadlinesMissed: true,
    overloaded: true
};

// Safe DOM Getter
function getEl(id) {
    return document.getElementById(id);
}

// Utility
function formatCurrency(val) {
    return new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD',
        maximumFractionDigits: 0
    }).format(val);
}

// Logic
function calculateResults() {
    const revenueLoss = hiringInputs.openRoles * hiringInputs.revPerEngineer * hiringInputs.hiringDelay;
    const projectDelayCost = hiringInputs.openRoles * impactInputs.revenueImpactPerWeek * impactInputs.projectDelayWeeks;
    const hiringProcessExpense = hiringInputs.openRoles * hiringInputs.costPerHire;
    const totalCost = revenueLoss + projectDelayCost + hiringProcessExpense;

    const projectedThreeMonthLoss =
        hiringInputs.openRoles * hiringInputs.revPerEngineer * (hiringInputs.hiringDelay + 3) +
        projectDelayCost +
        hiringProcessExpense;

    const dedicatedTeamCost = hiringInputs.openRoles * hiringInputs.costPerHire * 0.2;

    return { revenueLoss, projectDelayCost, hiringProcessExpense, totalCost, projectedThreeMonthLoss, dedicatedTeamCost };
}

function updateUI() {
    const results = calculateResults();

    const elements = {
        totalCost: getEl('total-cost'),
        projectedLossText: getEl('projected-loss-text'),
        revenueLoss: getEl('revenue-loss-val'),
        projectDelay: getEl('project-delay-val'),
        hiringExpense: getEl('hiring-expense-val'),
        delayScenario: getEl('delay-scenario-val'),
        dedicatedScenario: getEl('dedicated-scenario-val'),
        netSavings: getEl('net-savings-val')
    };

    // Only update if element exists
    if (elements.totalCost) elements.totalCost.textContent = formatCurrency(results.totalCost);

    if (elements.projectedLossText) {
        elements.projectedLossText.innerHTML =
            `📈 Opportunity Statement: "If these roles remain unfilled for 3 more months, your projected loss increases to 
            <span class="font-bold">${formatCurrency(results.projectedThreeMonthLoss)}</span>."`;
    }

    if (elements.revenueLoss) elements.revenueLoss.textContent = formatCurrency(results.revenueLoss);
    if (elements.projectDelay) elements.projectDelay.textContent = formatCurrency(results.projectDelayCost);
    if (elements.hiringExpense) elements.hiringExpense.textContent = formatCurrency(results.hiringProcessExpense);
    if (elements.delayScenario) elements.delayScenario.textContent = formatCurrency(results.totalCost);
    if (elements.dedicatedScenario) elements.dedicatedScenario.textContent = formatCurrency(results.dedicatedTeamCost);
    if (elements.netSavings) elements.netSavings.textContent =
        formatCurrency(results.totalCost - results.dedicatedTeamCost);

    if (typeof d3 !== "undefined") {
        renderChart(results);
    }
}

function renderChart(results) {
    if (!getEl("chart-container")) return;

    const data = [
        { name: 'Revenue Loss', value: results.revenueLoss, color: '#4F46E5' },
        { name: 'Project Delay', value: results.projectDelayCost, color: '#F43F5E' },
        { name: 'Hiring Process', value: results.hiringProcessExpense, color: '#10B981' },
    ];

    const width = 280, height = 280;
    const radius = Math.min(width, height) / 2;

    const container = d3.select("#chart-container");
    container.selectAll("*").remove();

    const svg = container.append("svg")
        .attr("width", width)
        .attr("height", height)
        .append("g")
        .attr("transform", `translate(${width / 2}, ${height / 2})`);

    const pie = d3.pie().value(d => d.value).sort(null);
    const arc = d3.arc().innerRadius(radius * 0.6).outerRadius(radius * 0.9);

    svg.selectAll(".arc")
        .data(pie(data))
        .enter()
        .append("path")
        .attr("d", arc)
        .attr("fill", d => d.data.color)
        .attr("stroke", "white")
        .style("stroke-width", "4px");
}

// Initialization
document.addEventListener('DOMContentLoaded', () => {

    const yearEl = getEl('year');
    if (yearEl) yearEl.textContent = new Date().getFullYear();

    // Inputs
    document.querySelectorAll('input[type="number"]').forEach(input => {
        input.addEventListener('input', (e) => {
            const id = e.target.id;
            const val = Number(e.target.value);

            if (id in hiringInputs) hiringInputs[id] = val;
            else if (id in impactInputs) impactInputs[id] = val;

            const resultsSection = getEl('results-section');
            if (resultsSection && !resultsSection.classList.contains('hidden')) {
                updateUI();
            }
        });
    });

    // Toggles
    document.querySelectorAll('.toggle-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const id = btn.dataset.id;
            impactInputs[id] = !impactInputs[id];

            const dot = btn.querySelector('.toggle-dot');

            if (impactInputs[id]) {
                btn.classList.replace('bg-slate-300', 'bg-red-500');
                dot?.classList.add('translate-x-6');
            } else {
                btn.classList.replace('bg-red-500', 'bg-slate-300');
                dot?.classList.remove('translate-x-6');
            }

            const resultsSection = getEl('results-section');
            if (resultsSection && !resultsSection.classList.contains('hidden')) {
                updateUI();
            }
        });
    });

    // Calculate Button
    const calculateBtn = getEl('calculate-btn');
    if (calculateBtn) {
        calculateBtn.addEventListener('click', () => {
            const resultsSection = getEl('results-section');
            if (!resultsSection) return;

            resultsSection.classList.remove('hidden');
            updateUI();
            resultsSection.scrollIntoView({ behavior: 'smooth' });
        });
    }
});
    