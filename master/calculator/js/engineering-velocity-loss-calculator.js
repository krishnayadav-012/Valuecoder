
    // Initial State
let state = {
    hasCalculatedOnce: false,
    inputs: {
        totalEngineers: 25,
        avgMonthlyCost: 12000,
        openPositions: 3,
        timeToHire: 3,
        reworkPercent: 15,
        productivityLossPercent: 10,
        monthlyRevenueInfluenced: 500000,
        roadmapDelay: 2,
        velocityDropPercent: 12,
        missedDeadlines: true
    },
    results: null
};

// --- DOM References ---
const calculatorSection = document.getElementById('calculator-section');
const resultsDisplay = document.getElementById('results-display');
const stickyMobileCalc = document.getElementById('sticky-mobile-calc');
const initialCalcTrigger = document.getElementById('initial-calc-trigger');

// --- Helper Functions ---
const formatCurrency = (val) => 
    new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD', maximumFractionDigits: 0 }).format(val);

const formatLargeCurrency = (val) => {
    if (val >= 1000000) return `$${(val / 1000000).toFixed(2)}M`;
    return formatCurrency(val);
};

const calculate = () => {
    const { totalEngineers, avgMonthlyCost, openPositions, reworkPercent, productivityLossPercent, monthlyRevenueInfluenced, velocityDropPercent } = state.inputs;

    // Direct Costs
    const unfilledRoleCost = openPositions * avgMonthlyCost;
    const reworkCost = totalEngineers * avgMonthlyCost * (reworkPercent / 100);
    const governanceLeakage = totalEngineers * avgMonthlyCost * (productivityLossPercent / 100);
    
    // Revenue impact logic
    const revenueImpact = (monthlyRevenueInfluenced * (velocityDropPercent / 100)) / 4; 

    const monthlyLoss = unfilledRoleCost + reworkCost + governanceLeakage + revenueImpact;
    const annualLoss = monthlyLoss * 12;
    
    const industryAvgRework = 10;
    const industryAvgProdLoss = 5;
    const benchmarkComparison = Math.max(12, Math.round(((reworkPercent - industryAvgRework) + (productivityLossPercent - industryAvgProdLoss)) * 1.5));

    state.results = {
        monthlyLoss,
        annualLoss,
        recoverableOpportunity: 35,
        breakdown: {
            unfilledRoleCost,
            reworkCost,
            governanceLeakage,
            revenueImpact
        },
        benchmarkComparison
    };

    updateResultsUI();
    
    if (!state.hasCalculatedOnce) {
        state.hasCalculatedOnce = true;
        initialCalcTrigger.classList.add('hidden');
        resultsDisplay.classList.remove('hidden');
        stickyMobileCalc.classList.add('hidden');
        
        setTimeout(() => {
            resultsDisplay.scrollIntoView({ behavior: 'smooth' });
        }, 100);
    }
};

const updateResultsUI = () => {
    const { results } = state;
    if (!results) return;

    document.getElementById('res-benchmark').textContent = results.benchmarkComparison;
    document.getElementById('res-monthly').textContent = formatCurrency(results.monthlyLoss);
    document.getElementById('res-annual').textContent = formatLargeCurrency(results.annualLoss);
    document.getElementById('res-opportunity').textContent = `${results.recoverableOpportunity}%+`;

    const chartContainer = document.getElementById('chart-container');
    const breakdownList = document.getElementById('breakdown-list');
    
    const items = [
        { label: "Unfilled Roles", value: results.breakdown.unfilledRoleCost, color: "#f43f5e", desc: "Revenue potential lost from missing engineering throughput." },
        { label: "Rework & Tech Debt", value: results.breakdown.reworkCost, color: "#ef4444", desc: "Sunk costs spent on redundant or poor quality cycles." },
        { label: "Governance Leakage", value: results.breakdown.governanceLeakage, color: "#dc2626", desc: "Friction from governance gaps and delivery blockers." },
        { label: "Revenue Impact", value: results.breakdown.revenueImpact, color: "#b91c1c", desc: "Business value delayed due to roadmap slippage." },
    ];

    const maxVal = Math.max(...items.map(i => i.value));

    chartContainer.innerHTML = items.map(item => `
        <div class="space-y-2">
            <div class="flex justify-between text-xs font-black uppercase text-slate-500">
                <span>${item.label}</span>
                <span>${formatCurrency(item.value)}</span>
            </div>
            <div class="h-6 bg-slate-100 rounded-full overflow-hidden">
                <div class="h-full rounded-full transition-all duration-1000" style="width: ${(item.value / maxVal) * 100}%; background-color: ${item.color}"></div>
            </div>
        </div>
    `).join('');

    breakdownList.innerHTML = items.map(item => `
        <div class="flex items-start gap-5 p-6 rounded-3xl bg-white border border-slate-100 hover:border-blue-200 hover:shadow-lg hover:shadow-blue-500/5 transition-all group">
            <div class="w-3.5 h-3.5 rounded-full mt-2 transition-transform shrink-0 shadow-lg group-hover:scale-125" style="background-color: ${item.color}"></div>
            <div class="flex-1">
                <div class="flex justify-between items-center mb-1">
                    <span class="font-black text-slate-800 tracking-tight">${item.label}</span>
                    <span class="font-black text-slate-900 text-lg">${formatCurrency(item.value)}</span>
                </div>
                <p class="text-slate-500 text-sm leading-relaxed">${item.desc}</p>
            </div>
        </div>
    `).join('');
};

// --- Initialization & Event Listeners ---
const init = () => {
    lucide.createIcons();

    // Setup input listeners
    const numericInputs = [
        'totalEngineers', 'avgMonthlyCost', 'openPositions', 
        'timeToHire', 'monthlyRevenueInfluenced', 'roadmapDelay'
    ];
    
    numericInputs.forEach(id => {
        const el = document.getElementById(`input-${id}`);
        el.addEventListener('input', (e) => {
            state.inputs[id] = Number(e.target.value);
            if (state.hasCalculatedOnce) calculate();
        });
    });

    const rangeInputs = ['reworkPercent', 'productivityLossPercent', 'velocityDropPercent'];
    rangeInputs.forEach(id => {
        const el = document.getElementById(`input-${id}`);
        const label = document.getElementById(`label-${id}`);
        el.addEventListener('input', (e) => {
            const val = Number(e.target.value);
            state.inputs[id] = val;
            label.textContent = `${val}%`;
            if (state.hasCalculatedOnce) calculate();
        });
    });

    const missedDeadlinesBtns = document.querySelectorAll('#missed-deadlines-container button');
    missedDeadlinesBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const val = btn.dataset.value === 'true';
            state.inputs.missedDeadlines = val;
            
            // Update UI
            missedDeadlinesBtns.forEach(b => {
                const isSelected = b.dataset.value === String(val);
                if (isSelected) {
                    b.className = val ? 'flex-1 py-4 rounded-2xl font-black transition-all border-2 bg-rose-600 border-rose-600 text-white shadow-xl shadow-rose-200 scale-[1.02]' 
                                    : 'flex-1 py-4 rounded-2xl font-black transition-all border-2 bg-emerald-600 border-emerald-600 text-white shadow-xl shadow-emerald-200 scale-[1.02]';
                } else {
                    b.className = 'flex-1 py-4 rounded-2xl font-black transition-all border-2 bg-white border-slate-100 text-slate-400 hover:border-slate-200';
                }
            });

            if (state.hasCalculatedOnce) calculate();
        });
    });

    document.getElementById('btn-calculate').addEventListener('click', calculate);
    document.getElementById('btn-calculate-mobile').addEventListener('click', calculate);

    // Handle Mobile Sticky Logic
    window.addEventListener('scroll', () => {
        if (!state.hasCalculatedOnce) {
            const rect = initialCalcTrigger.getBoundingClientRect();
            if (rect.top > window.innerHeight) {
                stickyMobileCalc.classList.remove('hidden');
            } else {
                stickyMobileCalc.classList.add('hidden');
            }
        }
    });
};

init();
    