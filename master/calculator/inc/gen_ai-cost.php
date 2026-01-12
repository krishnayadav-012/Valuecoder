<div  x-data="costCalculator()">
    <div class="bg-white rounded-2xl shadow-xl p-8 my-20">
        
        <div class="flex items-center gap-3 mb-8">
            <i data-lucide="calculator" class="w-8 h-8 text-indigo-600"></i>
            <h1 class="text-3xl font-bold text-gray-800">LLM / GenAI Cost Calculator</h1>
        </div>

        <div class="grid md:grid-cols-2 gap-8 mb-8">
            <div class="space-y-6">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Input Parameters</h2>
                
                <div>
                    <label class="flex items-center gap-2 text-sm font-medium text-gray-700 mb-2">
                        <i data-lucide="users" class="w-4 h-4"></i> Number of Users
                    </label>
                    <input type="number" x-model.number="users" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
                </div>

                <div>
                    <label class="flex items-center gap-2 text-sm font-medium text-gray-700 mb-2">
                        <i data-lucide="message-square" class="w-4 h-4"></i> Prompts per User per Day
                    </label>
                    <input type="number" x-model.number="promptsPerDay" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
                </div>

                <div>
                    <label class="text-sm font-medium text-gray-700 mb-2 block">LLM Model</label>
                    <select x-model="model" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
                        <template x-for="(value, key) in modelPricing" :key="key">
                            <option :value="key" x-text="value.name"></option>
                        </template>
                    </select>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="text-sm font-medium text-gray-700 mb-2 block">Avg Prompt Tokens</label>
                        <input type="number" x-model.number="avgPromptTokens" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
                    </div>
                    <div>
                        <label class="text-sm font-medium text-gray-700 mb-2 block">Avg Response Tokens</label>
                        <input type="number" x-model.number="avgResponseTokens" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <input type="checkbox" id="rag" x-model="useRAG" class="w-5 h-5 text-indigo-600 rounded">
                    <label htmlFor="rag" class="flex items-center gap-2 text-sm font-medium text-gray-700 cursor-pointer">
                        <i data-lucide="database" class="w-4 h-4"></i> Use RAG (Retrieval Augmented Generation)
                    </label>
                </div>
            </div>

            <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-xl p-6">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Monthly Cost Breakdown</h2>
                
                <div class="space-y-4">
                    <div class="bg-white rounded-lg p-4 shadow-sm">
                        <h3 class="font-semibold text-gray-700 mb-2">API Costs</h3>
                        <div class="space-y-1 text-sm">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Input tokens:</span>
                                <span class="font-medium" x-text="formatCurrency(calcs().apiInput)"></span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Output tokens:</span>
                                <span class="font-medium" x-text="formatCurrency(calcs().apiOutput)"></span>
                            </div>
                            <div class="flex justify-between pt-2 border-t mt-2">
                                <span class="font-semibold">Subtotal:</span>
                                <span class="font-bold text-indigo-600" x-text="formatCurrency(calcs().apiTotal)"></span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg p-4 shadow-sm" x-show="useRAG">
                        <h3 class="font-semibold text-gray-700 mb-2">RAG Costs</h3>
                        <div class="space-y-1 text-sm">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Vector DB:</span>
                                <span class="font-medium" x-text="formatCurrency(calcs().ragVector)"></span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Embeddings:</span>
                                <span class="font-medium" x-text="formatCurrency(calcs().ragEmbed)"></span>
                            </div>
                            <div class="flex justify-between pt-2 border-t mt-2">
                                <span class="font-semibold">Subtotal:</span>
                                <span class="font-bold text-indigo-600" x-text="formatCurrency(calcs().ragTotal)"></span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg p-4 shadow-sm">
                        <h3 class="font-semibold text-gray-700 mb-2">Infrastructure & DevOps</h3>
                        <div class="space-y-1 text-sm">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Hosting & Ops:</span>
                                <span class="font-medium" x-text="formatCurrency(calcs().infraTotal + calcs().devOpsTotal)"></span>
                            </div>
                            <div class="flex justify-between pt-2 border-t mt-2">
                                <span class="font-semibold">Monthly Total:</span>
                                <span class="font-bold text-indigo-600" x-text="formatCurrency(calcs().grandTotal)"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid md:grid-cols-4 gap-4">
            <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-xl p-6 text-white shadow-lg">
                <div class="text-sm opacity-90 mb-1">Total Monthly</div>
                <div class="text-3xl font-bold" x-text="formatCurrency(calcs().grandTotal, 0)"></div>
            </div>
            <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl p-6 text-white shadow-lg">
                <div class="text-sm opacity-90 mb-1">Cost per User</div>
                <div class="text-3xl font-bold" x-text="formatCurrency(calcs().costPerUser)"></div>
            </div>
            <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl p-6 text-white shadow-lg">
                <div class="text-sm opacity-90 mb-1">Cost per Prompt</div>
                <div class="text-2xl font-bold" x-text="'$' + calcs().costPerPrompt.toFixed(4)"></div>
            </div>
            <div class="bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl p-6 text-white shadow-lg">
                <div class="text-sm opacity-90 mb-1">Monthly Prompts</div>
                <div class="text-3xl font-bold" x-text="(calcs().monthlyPrompts / 1000).toFixed(0) + 'K'"></div>
            </div>
        </div>

        <div class="mt-6 p-4 bg-blue-50 rounded-lg border border-blue-200">
            <p class="text-sm text-blue-800">
                <strong>Note:</strong> Estimates based on 2025 pricing. 
                Includes amortized dev costs ($11,500/mo) and variable infrastructure.
            </p>
        </div>
    </div>
</div>