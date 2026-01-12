
        function complianceCalculator() {
            return {
                companySize: 'small',
                currentMaturity: 'low',
                frameworks: { soc2: false, iso27001: false, hipaa: false },
                scope: { infrastructure: true, application: true, data: true, personnel: true },
                
                companySizes: {
                    small: { employees: '1-50', multiplier: 1 },
                    medium: { employees: '51-200', multiplier: 1.5 },
                    large: { employees: '201-1000', multiplier: 2.5 },
                    enterprise: { employees: '1000+', multiplier: 4 }
                },
                
                maturityLevels: {
                    low: { label: 'Start-up (No controls)', multiplier: 1.5 },
                    medium: { label: 'Mid-Level', multiplier: 1 },
                    high: { label: 'Mature', multiplier: 0.6 }
                },

                frameworkCosts: {
                    soc2: { base: 45000, time: 4, effort: 800 },
                    iso27001: { base: 55000, time: 6, effort: 1000 },
                    hipaa: { base: 65000, time: 5, effort: 900 }
                },

                hasSelections() {
                    return Object.values(this.frameworks).some(f => f);
                },

                results() {
                    let totalCost = 0;
                    let totalTime = 0;
                    let totalEffort = 0;
                    const breakdown = [];
                    const selected = Object.keys(this.frameworks).filter(f => this.frameworks[f]);

                    selected.forEach(fw => {
                        const base = this.frameworkCosts[fw];
                        const sizeMult = this.companySizes[this.companySize].multiplier;
                        const matMult = this.maturityLevels[this.currentMaturity].multiplier;
                        
                        let cost = base.base * sizeMult * matMult;
                        let time = base.time * matMult;
                        let effort = base.effort * sizeMult * matMult;

                        breakdown.push({
                            name: fw.toUpperCase().replace('ISO27001', 'ISO 27001'),
                            cost: Math.round(cost),
                            time: Math.round(time),
                            effort: Math.round(effort)
                        });

                        totalCost += cost;
                        totalTime = Math.max(totalTime, time);
                        totalEffort += effort;
                    });

                    if (selected.length > 1) {
                        totalCost *= 0.85; // Multi-framework discount
                    }

                    return { totalCost: Math.round(totalCost), totalTime: Math.round(totalTime), totalEffort: Math.round(totalEffort), breakdown };
                },
                init() {
                    lucide.createIcons();
                }
            }
        }
    