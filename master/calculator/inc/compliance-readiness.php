<div class=" px-4 py-8 md:py-16" x-data="complianceCalculator()" x-cloak>
    
    <div class="mb-10 text-center lg:text-left">
        <h1 class="text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight mb-3">Compliance Cost Calculator</h1>
        <p class="text-slate-500 max-w-2xl">Estimate the investment, time, and human effort required to achieve and maintain industry-standard security certifications.</p>
    </div>

    <div class="grid lg:grid-cols-12 gap-8 lg:items-start">
        
        <div class="lg:col-span-7 space-y-10">
            
            <section>
                <h3 class="flex items-center gap-2 font-bold text-slate-800 mb-5">
                    <i data-lucide="users" class="w-5 h-5 text-blue-600"></i>
                    1. Company Size
                </h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <template x-for="(value, key) in companySizes" :key="key">
                        <label class="relative flex flex-col p-5 border-2 rounded-2xl cursor-pointer transition-all active:scale-95 sm:hover:border-blue-200"
                            :class="companySize === key ? 'border-blue-600 bg-blue-50/50 ring-4 ring-blue-600/5' : 'border-slate-100 bg-white shadow-sm'">
                            <input type="radio" name="size" :value="key" x-model="companySize" class="absolute top-5 right-5 w-5 h-5 text-blue-600 border-slate-300 focus:ring-blue-500">
                            <span class="text-base font-bold capitalize text-slate-900" x-text="key"></span>
                            <span class="text-sm text-slate-500 mt-1" x-text="value.employees + ' employees' shadow-sm"></span>
                        </label>
                    </template>
                </div>
            </section>

            <section>
                <h3 class="flex items-center gap-2 font-bold text-slate-800 mb-5">
                    <i data-lucide="layers" class="w-5 h-5 text-blue-600"></i>
                    2. Target Frameworks
                </h3>
                <div class="grid grid-cols-1 gap-3">
                    <template x-for="(info, key) in frameworkCosts" :key="key">
                        <label class="flex items-center p-5 border-2 rounded-2xl cursor-pointer transition-all active:scale-[0.99]"
                            :class="frameworks[key] ? 'border-blue-600 bg-blue-50/50' : 'border-slate-100 bg-white hover:border-slate-200 shadow-sm'">
                            <div class="relative flex items-center justify-center">
                                <input type="checkbox" x-model="frameworks[key]" class="w-6 h-6 rounded-lg border-slate-300 text-blue-600 focus:ring-blue-500 transition-all">
                            </div>
                            <div class="ml-5">
                                <span class="block font-bold text-slate-900 text-lg leading-tight uppercase" x-text="key === 'iso27001' ? 'ISO 27001' : key.toUpperCase()"></span>
                                <span class="text-sm text-slate-500" x-text="'Professional ' + key.toUpperCase() + ' implementation & external audit path'"></span>
                            </div>
                        </label>
                    </template>
                </div>
            </section>

            <section class="p-6 bg-slate-50 rounded-3xl border border-slate-100">
                <h3 class="font-bold text-slate-800 mb-4 flex items-center gap-2">
                    <i data-lucide="shield-check" class="w-5 h-5 text-blue-600"></i>
                    3. Security Maturity
                </h3>
                <div class="flex flex-wrap gap-2">
                    <template x-for="(value, key) in maturityLevels" :key="key">
                        <button @click="currentMaturity = key" 
                            :class="currentMaturity === key ? 'bg-blue-600 text-white shadow-lg shadow-blue-200 scale-105' : 'bg-white text-slate-600 border border-slate-200 hover:bg-slate-50'"
                            class="px-5 py-2.5 rounded-xl text-sm font-bold transition-all duration-200"
                            x-text="value.label">
                        </button>
                    </template>
                </div>
                <p class="mt-4 text-xs text-slate-400 italic">Lower maturity levels increase implementation effort and consulting costs.</p>
            </section>
        </div>

        <div class="lg:col-span-5">
            <div class="lg:sticky lg:top-8 space-y-6">
                
                <div class="bg-slate-900 rounded-[2rem] p-8 text-white shadow-2xl relative overflow-hidden group">
                    <div class="relative z-10">
                        <h2 class="text-xs font-bold text-blue-400 mb-6 uppercase tracking-[0.2em]">Budget Estimate</h2>
                        
                        <div x-show="hasSelections()" x-transition:enter="transition ease-out duration-300" class="space-y-8">
                            <div>
                                <div class="flex items-baseline gap-2">
                                    <span class="text-5xl md:text-6xl font-black tracking-tighter text-white" x-text="'$' + results().totalCost.toLocaleString()"></span>
                                    <span class="text-slate-500 font-bold">USD</span>
                                </div>
                                <p class="text-slate-400 text-sm mt-2">Combined implementation & audit fees</p>
                            </div>

                            <div class="grid grid-cols-2 gap-6 border-t border-slate-800 pt-8">
                                <div class="space-y-1">
                                    <p class="text-slate-500 text-xs font-bold uppercase tracking-widest">Est. Timeline</p>
                                    <div class="flex items-center gap-2">
                                        <i data-lucide="calendar" class="w-4 h-4 text-blue-500"></i>
                                        <p class="text-2xl font-bold italic"><span x-text="results().totalTime"></span> <span class="text-sm font-normal not-italic text-slate-400">Months</span></p>
                                    </div>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-slate-500 text-xs font-bold uppercase tracking-widest">Internal Effort</p>
                                    <div class="flex items-center gap-2">
                                        <i data-lucide="timer" class="w-4 h-4 text-blue-500"></i>
                                        <p class="text-2xl font-bold italic"><span x-text="results().totalEffort.toLocaleString()"></span> <span class="text-sm font-normal not-italic text-slate-400">Hours</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div x-show="!hasSelections()" class="py-10 text-center">
                            <div class="w-16 h-16 bg-slate-800 rounded-2xl flex items-center justify-center mx-auto mb-4 border border-slate-700">
                                <i data-lucide="calculator" class="w-8 h-8 text-slate-600"></i>
                            </div>
                            <p class="text-slate-500 font-medium">Select a framework to generate your customized estimate.</p>
                        </div>
                    </div>
                    
                    <div class="absolute -bottom-12 -left-12 w-48 h-48 bg-blue-500/10 blur-[80px] rounded-full group-hover:bg-blue-500/20 transition-all"></div>
                </div>

                <div x-show="hasSelections()" x-transition class="bg-white border border-slate-100 rounded-[2rem] p-8 shadow-sm">
                    <h4 class="font-bold text-slate-900 mb-6 flex items-center justify-between">
                        <span>Cost Breakdown</span>
                        <i data-lucide="pie-chart" class="w-4 h-4 text-slate-400"></i>
                    </h4>
                    <div class="space-y-4">
                        <template x-for="item in results().breakdown">
                            <div class="flex justify-between items-center py-3 border-b border-slate-50 last:border-0">
                                <div class="flex items-center gap-3">
                                    <div class="w-2 h-2 rounded-full bg-blue-500"></div>
                                    <span class="font-bold text-slate-700 text-sm uppercase tracking-wide" x-text="item.name"></span>
                                </div>
                                <span class="font-mono font-bold text-slate-900" x-text="'$' + item.cost.toLocaleString()"></span>
                            </div>
                        </template>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <div class="mt-16 border-t border-slate-100 pt-16">
        <h3 class="text-center text-2xl font-bold text-slate-900 mb-12">The Path to Certification</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="relative text-center">
                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-bold mx-auto mb-4">1</div>
                <h4 class="font-bold text-slate-800 mb-2">Gap Analysis</h4>
                <p class="text-sm text-slate-500 px-4">Identifying the delta between current controls and framework requirements.</p>
            </div>
            <div class="relative text-center">
                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-bold mx-auto mb-4">2</div>
                <h4 class="font-bold text-slate-800 mb-2">Remediation</h4>
                <p class="text-sm text-slate-500 px-4">Implementing policies, technical controls, and evidence collection.</p>
            </div>
            <div class="relative text-center">
                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-bold mx-auto mb-4">3</div>
                <h4 class="font-bold text-slate-800 mb-2">Internal Audit</h4>
                <p class="text-sm text-slate-500 px-4">Testing effectiveness of controls before the final assessment.</p>
            </div>
            <div class="relative text-center">
                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-bold mx-auto mb-4">4</div>
                <h4 class="font-bold text-slate-800 mb-2">Certification</h4>
                <p class="text-sm text-slate-500 px-4">Official third-party audit and issuance of compliance report/certificate.</p>
            </div>
        </div>
    </div>
</div>