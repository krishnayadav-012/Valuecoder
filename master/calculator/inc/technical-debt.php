<div class="grid grid-cols-1 lg:grid-cols-2 gap-8 my-20  ">
    
    <div class="space-y-6">
        <div class="bg-black rounded-2xl p-6 md:p-8 border-2 border-gray-300 shadow-sm">
            <h2 class="text-xl font-bold text-white mb-6 flex items-center gap-2">
                <i data-lucide="users" class="w-5 h-5"></i> Team Information
            </h2>

            <div class="space-y-8">
                <div>
                    <div class="flex justify-between items-center mb-3">
                        <label class="text-gray-300 font-medium text-sm md:text-base">Team Size</label>
                        <span class="text-white font-bold bg-gray-800 px-3 py-1 rounded-full border border-gray-600">
                            <span id="teamSizeVal">10</span> devs
                        </span>
                    </div>
                    <input type="range" id="teamSize" min="1" max="100" value="10" 
                        class="w-full h-2 bg-gray-700 rounded-lg appearance-none cursor-pointer">
                </div>
                <div>
                    <div class="flex justify-between items-center mb-3">
                        <label class="text-gray-300 font-medium text-sm md:text-base">Avg. Yearly Salary</label>
                        <span id="avgSalaryVal" class="text-white font-bold bg-gray-800 px-3 py-1 rounded-full border border-gray-600">$120,000</span>
                    </div>
                    <input type="range" id="avgSalary" min="50000" max="250000" step="5000" value="120000" 
                        class="w-full h-2 bg-gray-700 rounded-lg appearance-none cursor-pointer">
                </div>
            </div>
        </div>

        <div class="bg-black rounded-2xl p-6 md:p-8 border-2 border-gray-300 shadow-sm">
            <h2 class="text-xl font-bold text-white mb-6 flex items-center gap-2">
                <i data-lucide="bar-chart-3" class="w-5 h-5"></i> Debt Factors
            </h2>
            <div class="space-y-8">
                <div>
                    <div class="flex justify-between items-center mb-2">
                        <div class="flex items-center gap-2">
                            <i data-lucide="code" class="w-4 h-4 text-gray-400"></i>
                            <label class="text-gray-300 font-medium text-sm md:text-base">Bug Rate</label>
                        </div>
                        <span id="bugRateVal" class="text-white font-bold text-lg">15%</span>
                    </div>
                    <input type="range" id="bugRate" min="0" max="50" value="15" 
                        class="w-full h-2 bg-gray-700 rounded-lg appearance-none cursor-pointer">
                    <p class="text-xs text-gray-500 mt-2 italic">Time spent on fixes vs new features</p>
                </div>

                <div>
                    <div class="flex justify-between items-center mb-2">
                        <div class="flex items-center gap-2">
                            <i data-lucide="trending-down" class="w-4 h-4 text-gray-400"></i>
                            <label class="text-gray-300 font-medium text-sm md:text-base">Velocity Loss</label>
                        </div>
                        <span id="velocityLossVal" class="text-white font-bold text-lg">20%</span>
                    </div>
                    <input type="range" id="velocityLoss" min="0" max="50" value="20" 
                        class="w-full h-2 bg-gray-700 rounded-lg appearance-none cursor-pointer">
                    <p class="text-xs text-gray-500 mt-2 italic">Drag caused by complexity and legacy code</p>
                </div>

                <div>
                    <div class="flex justify-between items-center mb-2">
                        <div class="flex items-center gap-2">
                            <i data-lucide="server" class="w-4 h-4 text-gray-400"></i>
                            <label class="text-gray-300 font-medium text-sm md:text-base">Infra Inefficiency</label>
                        </div>
                        <span id="infraInefficiencyVal" class="text-white font-bold text-lg">10%</span>
                    </div>
                    <input type="range" id="infraInefficiency" min="0" max="50" value="10" 
                        class="w-full h-2 bg-gray-700 rounded-lg appearance-none cursor-pointer">
                    <p class="text-xs text-gray-500 mt-2 italic">Manual deployments, downtime, and waste</p>
                </div>
            </div>
        </div>
    </div>

    <div class="lg:sticky lg:top-10 h-fit">
        <div class="bg-white rounded-2xl p-6 md:p-10 shadow-xl border-2 border-black">
            <h2 class="text-2xl font-bold text-black mb-8 text-center uppercase tracking-widest">Estimated Annual Loss</h2>

            <div class="bg-black text-white rounded-xl p-8 mb-8 text-center shadow-lg transform transition hover:scale-[1.01]">
                <p class="text-gray-400 text-sm md:text-base uppercase font-semibold mb-2 text-white">Total Technical Debt Cost</p>
                <p id="totalAnnualCost" class="text-4xl md:text-6xl font-black mb-4 text-white">$0</p>
                <div class="inline-block px-4 py-1 bg-white text-black text-sm font-bold rounded-full" id="percentageOfBudget">
                    0% of Engineering Budget
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">
                <div class="p-5 border-2 border-black rounded-xl text-center md:text-left">
                    <p class="text-xs font-bold text-gray-500 uppercase mb-1">Bug Fixing</p>
                    <p id="bugCostResult" class="text-xl font-bold text-black">$0</p>
                </div>
                <div class="p-5 border-2 border-black rounded-xl text-center md:text-left">
                    <p class="text-xs font-bold text-gray-500 uppercase mb-1">Velocity Loss</p>
                    <p id="velocityCostResult" class="text-xl font-bold text-black">$0</p>
                </div>
                <div class="p-5 border-2 border-black rounded-xl text-center md:text-left">
                    <p class="text-xs font-bold text-gray-500 uppercase mb-1">Infrastructure</p>
                    <p id="infraCostResult" class="text-xl font-bold text-black">$0</p>
                </div>
            </div>

            <div class="bg-gray-100 rounded-xl p-5 border-l-8 border-black">
                <div class="flex gap-4">
                    <span class="text-2xl">💡</span>
                    <p id="insightText" class="text-sm md:text-base text-gray-800 font-medium">
                        Adjust the sliders to see how technical debt impacts your bottom line.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>