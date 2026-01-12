
    function costCalculator() {
        return {
            users: 1000,
            promptsPerDay: 10,
            model: 'gpt-4-turbo',
            useRAG: false,
            avgPromptTokens: 500,
            avgResponseTokens: 1000,
            modelPricing: {
                'gpt-4-turbo': { input: 10, output: 30, name: 'GPT-4 Turbo' },
                'gpt-4o': { input: 2.5, output: 10, name: 'GPT-4o' },
                'gpt-4o-mini': { input: 0.15, output: 0.6, name: 'GPT-4o Mini' },
                'claude-sonnet-4': { input: 3, output: 15, name: 'Claude Sonnet 4' },
                'claude-opus-4': { input: 15, output: 75, name: 'Claude Opus 4' },
                'claude-haiku-4.5': { input: 0.8, output: 4, name: 'Claude Haiku 4.5' },
            },
            formatCurrency(val, decimals = 2) {
                return '$' + val.toLocaleString(undefined, { minimumFractionDigits: decimals, maximumFractionDigits: decimals });
            },
            calcs() {
                const pricing = this.modelPricing[this.model];
                const monthlyPrompts = this.users * this.promptsPerDay * 30;
                
                const apiInput = (monthlyPrompts * this.avgPromptTokens / 1_000_000) * pricing.input;
                const apiOutput = (monthlyPrompts * this.avgResponseTokens / 1_000_000) * pricing.output;
                const apiTotal = apiInput + apiOutput;

                const ragVector = this.useRAG ? (this.users * 0.05 + (monthlyPrompts / 10000) * 0.1) : 0;
                const ragEmbed = this.useRAG ? (monthlyPrompts * this.avgPromptTokens / 1_000_000) * 0.1 : 0;
                const ragTotal = ragVector + ragEmbed;

                const infraTotal = Math.max(50, this.users / 100 * 10) + Math.max(20, monthlyPrompts / 100000 * 5) + 30;
                const devOpsTotal = 8000 + 3000 + 500;

                const grandTotal = apiTotal + ragTotal + infraTotal + devOpsTotal;

                return {
                    apiInput, apiOutput, apiTotal,
                    ragVector, ragEmbed, ragTotal,
                    infraTotal, devOpsTotal,
                    monthlyPrompts, grandTotal,
                    costPerUser: grandTotal / Math.max(1, this.users),
                    costPerPrompt: grandTotal / Math.max(1, monthlyPrompts)
                };
            },
            init() {
                // Initialize Lucide icons after Alpine renders
                lucide.createIcons();
            }
        }
    }
