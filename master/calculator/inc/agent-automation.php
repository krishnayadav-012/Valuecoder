<div class="my-10 md:my-20 px-4 max-w-6xl mx-auto" x-data="{
        hoursPerTask: 2,
        tasksPerWeek: 10,
        hourlyRate: 50,
        errorRate: 5,
        errorCostPerIncident: 500,
        implementationCost: 10000,
        monthlyMaintenanceCost: 500,

        get weeklyHours() { return this.hoursPerTask * this.tasksPerWeek },
        get annualHours() { return this.weeklyHours * 52 },
        get annualLaborSavings() { return this.annualHours * this.hourlyRate },
        get annualTasks() { return this.tasksPerWeek * 52 },
        get errorsPerYear() { return this.annualTasks * (this.errorRate / 100) },
        get annualErrorCost() { return this.errorsPerYear * this.errorCostPerIncident },
        get errorReduction() { return this.annualErrorCost * 0.8 },
        get totalAnnualSavings() { return this.annualLaborSavings + this.errorReduction },
        get annualMaintenanceCost() { return this.monthlyMaintenanceCost * 12 },
        get netAnnualSavings() { return this.totalAnnualSavings - this.annualMaintenanceCost },
        get paybackMonths() { 
            const monthly = this.netAnnualSavings / 12;
            return monthly <= 0 ? 0 : (this.implementationCost / monthly);
        },
        get threeYearROI() { 
            return ((this.netAnnualSavings * 3 - this.implementationCost) / this.implementationCost) * 100;
        }
    }">

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
        
        <div class="bg-white rounded-2xl shadow-xl p-5 md:p-8 border border-gray-100">
            <h2 class="text-xl md:text-2xl font-bold text-gray-800 mb-6 flex items-center gap-3">
                <i data-lucide="settings-2" class="w-6 h-6 text-indigo-600"></i>
                Input Parameters
            </h2>
            
            <div class="space-y-4 md:space-y-5">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Hours per Task</label>
                        <input type="number" x-model.number="hoursPerTask" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:bg-white outline-none transition-all">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Tasks per Week</label>
                        <input type="number" x-model.number="tasksPerWeek" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:bg-white outline-none transition-all">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Hourly Rate ($)</label>
                    <input type="number" x-model.number="hourlyRate" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:bg-white outline-none transition-all">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Error Rate (%)</label>
                        <input type="number" step="0.1" x-model.number="errorRate" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:bg-white outline-none transition-all">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Cost per Error ($)</label>
                        <input type="number" x-model.number="errorCostPerIncident" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:bg-white outline-none transition-all">
                    </div>
                </div>

                <div class="pt-4 border-t border-gray-100">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Setup Cost ($)</label>
                            <input type="number" x-model.number="implementationCost" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:bg-white outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Monthly Maint. ($)</label>
                            <input type="number" x-model.number="monthlyMaintenanceCost" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:bg-white outline-none transition-all">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="space-y-6">
            <div class="bg-gradient-to-br from-emerald-500 to-teal-600 rounded-2xl shadow-xl p-6 md:p-8 text-white">
                <h2 class="text-xl font-bold mb-6 flex items-center gap-2 text-white">
                    <i data-lucide="trending-up" class="w-6 h-6"></i>
                    Annual Savings
                </h2>
                <div class="space-y-4">
                    <div class="flex justify-between items-center pb-3 border-b border-white/20">
                        <span class="text-emerald-100 text-sm md:text-base">Labor Savings</span>
                        <span class="text-xl md:text-2xl font-bold" x-text="'$' + annualLaborSavings.toLocaleString()"></span>
                    </div>
                    <div class="flex justify-between items-center pb-3 border-b border-white/20">
                        <span class="text-emerald-100 text-sm md:text-base">Error Reduction</span>
                        <span class="text-xl md:text-2xl font-bold" x-text="'$' + errorReduction.toLocaleString()"></span>
                    </div>
                    <div class="flex justify-between items-center pb-3 border-b border-white/20">
                        <span class="text-emerald-100 text-sm md:text-base">Maintenance</span>
                        <span class="text-xl md:text-2xl font-bold text-emerald-200" x-text="'-$' + annualMaintenanceCost.toLocaleString()"></span>
                    </div>
                    <div class="flex justify-between items-center pt-2">
                        <span class="text-lg md:text-xl font-semibold">Net Annual Savings</span>
                        <span class="text-3xl md:text-4xl font-black" x-text="'$' + netAnnualSavings.toLocaleString()"></span>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100 text-center">
                    <h2 class="text-sm font-bold text-gray-400 uppercase tracking-widest mb-4">Payback Period</h2>
                    <div class="inline-flex items-baseline gap-2">
                        <span class="text-3xl font-black text-indigo-600" x-text="paybackMonths.toFixed(1)"></span>
                        <span class="text-gray-500 font-medium">mo</span>
                    </div>
                    <template x-if="paybackMonths > 12">
                        <p class="text-gray-400 text-xs mt-2" x-text="'~' + (paybackMonths / 12).toFixed(1) + ' years'"></p>
                    </template>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100 text-center">
                    <h2 class="text-sm font-bold text-gray-400 uppercase tracking-widest mb-4">3-Year ROI</h2>
                    <div class="inline-flex items-baseline gap-1">
                        <span class="text-3xl font-black text-indigo-600" x-text="threeYearROI.toFixed(0)"></span>
                        <span class="text-indigo-600 font-bold text-2xl">%</span>
                    </div>
                </div>
            </div>

            <div class="bg-slate-900 rounded-2xl p-6 text-white">
                <div class="grid grid-cols-1 gap-4">
                    <div class="flex justify-between items-center p-3 bg-white/5 rounded-xl">
                        <div class="flex items-center gap-3">
                            <i data-lucide="clock-3" class="w-4 h-4 text-blue-400"></i>
                            <span class="text-sm text-slate-300">Annual Hours Saved</span>
                        </div>
                        <span class="font-bold text-blue-400" x-text="annualHours.toLocaleString() + ' hrs'"></span>
                    </div>
                    <div class="flex justify-between items-center p-3 bg-white/5 rounded-xl">
                        <div class="flex items-center gap-3">
                            <i data-lucide="shield-check" class="w-4 h-4 text-orange-400"></i>
                            <span class="text-sm text-slate-300">Errors Prevented</span>
                        </div>
                        <span class="font-bold text-orange-400" x-text="(errorsPerYear * 0.8).toFixed(0)"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>