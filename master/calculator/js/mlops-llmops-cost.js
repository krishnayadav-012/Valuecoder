
    const { createApp, ref, computed, watch, onMounted } = Vue;

    createApp({
        setup() {
            const inputs = ref({
                numModels: 5,
                monthlyPredictions: 1000000,
                retrainingFreq: 'Monthly',
                hostingType: 'Cloud-managed',
                modelSize: 'Medium (1–7B)',
                compliance: 'Internal Governance',
                teamSize: 3,
                latencyReq: 3,
                incidentTolerance: 2
            });

            const retrainingOptions = ['Quarterly', 'Monthly', 'Weekly', 'Continuous'];
            const hostingTypes = ['Cloud-managed', 'Self-hosted', 'Hybrid'];
            const modelSizes = ['Small (<1B)', 'Medium (1–7B)', 'Large (7B+)'];
            const complianceLevels = ['None', 'Internal Governance', 'Regulated'];

            const outputs = computed(() => {
                const modelMult = inputs.value.numModels * 1500;
                const predictionCost = (inputs.value.monthlyPredictions / 10000) * 5;
                
                let retrainCost = 5000;
                if(inputs.value.retrainingFreq === 'Quarterly') retrainCost = 2000;
                if(inputs.value.retrainingFreq === 'Weekly') retrainCost = 15000;
                if(inputs.value.retrainingFreq === 'Continuous') retrainCost = 45000;

                let sizeMult = 2.5;
                if(inputs.value.modelSize.includes('Small')) sizeMult = 1;
                if(inputs.value.modelSize.includes('Large')) sizeMult = 6;

                const teamCost = inputs.value.teamSize * 160000;
                const infraBase = inputs.value.hostingType === 'Cloud-managed' ? 12000 : 25000;
                
                const annualCost = (modelMult + predictionCost + retrainCost + infraBase) * sizeMult + teamCost;

                const compRisk = inputs.value.compliance === 'Regulated' ? 500000 : (inputs.value.compliance === 'None' ? 5000 : 50000);
                const baseRisk = (compRisk + (inputs.value.monthlyPredictions / 1000 * 0.5)) * (inputs.value.numModels * 0.2 + 1);

                return {
                    annualCost,
                    riskExposure: { low: baseRisk * 0.5, expected: baseRisk, high: baseRisk * 2.5 }
                };
            });

            const insightMessage = computed(() => {
                if (outputs.value.riskExposure.expected > outputs.value.annualCost) {
                    return "⚠️ High exposure. MLOps will likely save you money by mitigating financial risks.";
                }
                return "💡 Costs are balanced. Maintain lightweight monitoring to avoid over-engineering.";
            });

            const formatNum = (n) => Math.round(n).toLocaleString();

            // Chart Logic
            let chartInstance = null;
            const updateChart = () => {
                const ctx = document.getElementById('riskChart');
                if (!ctx) return;
                
                const data = {
                    labels: ['Mgmt Cost', 'Fin. Risk'],
                    datasets: [{
                        data: [outputs.value.annualCost, outputs.value.riskExposure.expected],
                        backgroundColor: ['#3b82f6', '#ef4444'],
                        borderRadius: 8
                    }]
                };

                if (chartInstance) {
                    chartInstance.data = data;
                    chartInstance.update();
                } else {
                    chartInstance = new Chart(ctx, {
                        type: 'bar',
                        data: data,
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: { legend: { display: false } },
                            scales: { y: { display: false }, x: { ticks: { color: '#fff' } } }
                        }
                    });
                }
            };

            watch(outputs, () => updateChart(), { deep: true });
            onMounted(() => updateChart());

            return { 
                inputs, outputs, formatNum, insightMessage,
                retrainingOptions, hostingTypes, modelSizes, complianceLevels 
            };
        }
    }).mount('#app');
