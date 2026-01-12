<div id="app" class="py-6 sm:py-10 md:py-20 bg-gray-50/50 min-h-screen">
  <section id="calculator" class="max-w-7xl mx-auto px-3 sm:px-6">

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 sm:gap-8 lg:gap-12">

      <!-- LEFT COLUMN -->
      <div class="lg:col-span-7 space-y-8 order-1">

        <div class="bg-white p-5 sm:p-6 md:p-10 rounded-2xl sm:rounded-[2rem] shadow-xl border border-gray-100">
          <h3 class="text-lg sm:text-xl md:text-2xl font-bold mb-6 sm:mb-8 flex items-center gap-3">
            <span class="w-9 h-9 sm:w-10 sm:h-10 bg-blue-100 text-blue-600 rounded-xl sm:rounded-2xl flex items-center justify-center text-base">
              🏗️
            </span>
            Configure Infrastructure
          </h3>

          <div class="space-y-10 sm:space-y-12">

            <!-- GROUP 1 -->
            <section>
              <h4 class="text-[9px] sm:text-[10px] font-black text-blue-500 uppercase tracking-[0.18em] sm:tracking-[0.2em] mb-4 sm:mb-6 flex items-center gap-2">
                <span class="w-1.5 h-1.5 bg-blue-500 rounded-full"></span>
                Group 1 — Footprint
              </h4>

              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5">
                <div>
                  <label class="block text-sm font-bold text-gray-700 mb-2">
                    Number of models
                  </label>
                  <input
                    type="number"
                    v-model.number="inputs.numModels"
                    class="w-full px-4 py-3 sm:py-3.5 rounded-xl border border-gray-200 focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 outline-none text-sm"
                  />
                </div>

                <div>
                  <label class="block text-sm font-bold text-gray-700 mb-2">
                    Monthly predictions
                  </label>
                  <input
                    type="number"
                    v-model.number="inputs.monthlyPredictions"
                    class="w-full px-4 py-3 sm:py-3.5 rounded-xl border border-gray-200 focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 outline-none text-sm"
                  />
                </div>

                <div class="sm:col-span-2">
                  <label class="block text-sm font-bold text-gray-700 mb-2">
                    Retraining Frequency
                  </label>
                  <div class="relative">
                    <select
                      v-model="inputs.retrainingFreq"
                      class="w-full px-4 py-3 sm:py-3.5 rounded-xl border border-gray-200 focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 outline-none bg-white appearance-none text-sm"
                    >
                      <option v-for="opt in retrainingOptions" :value="opt">
                        {{ opt }}
                      </option>
                    </select>

                    <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-gray-400">
                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M19 9l-7 7-7-7"></path>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <!-- GROUP 2 -->
            <section>
              <h4 class="text-[9px] sm:text-[10px] font-black text-blue-500 uppercase tracking-[0.18em] sm:tracking-[0.2em] mb-4 sm:mb-6 flex items-center gap-2">
                <span class="w-1.5 h-1.5 bg-blue-500 rounded-full"></span>
                Group 2 — Hosting & Team
              </h4>

              <div class="space-y-6">
                <div class="flex flex-wrap gap-2 sm:gap-3">
                  <button
                    v-for="type in hostingTypes"
                    @click="inputs.hostingType = type"
                    :class="inputs.hostingType === type
                      ? 'border-blue-600 bg-blue-600 text-white shadow-lg shadow-blue-200'
                      : 'border-gray-100 bg-gray-50 text-gray-500 hover:bg-gray-100'"
                    class="px-4 sm:px-5 py-2.5 rounded-xl text-[11px] sm:text-xs font-bold border-2 transition-all"
                  >
                    {{ type }}
                  </button>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5">
                  <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">
                      Model Complexity
                    </label>
                    <select
                      v-model="inputs.modelSize"
                      class="w-full px-4 py-3 sm:py-3.5 rounded-xl border border-gray-200 focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 outline-none bg-white text-sm"
                    >
                      <option v-for="size in modelSizes" :value="size">
                        {{ size }}
                      </option>
                    </select>
                  </div>

                  <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">
                      Team Size (Engineers)
                    </label>
                    <input
                      type="number"
                      v-model.number="inputs.teamSize"
                      class="w-full px-4 py-3 sm:py-3.5 rounded-xl border border-gray-200 focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 outline-none text-sm"
                    />
                  </div>
                </div>
              </div>
            </section>

            <!-- GROUP 3 -->
            <section>
              <h4 class="text-[9px] sm:text-[10px] font-black text-blue-500 uppercase tracking-[0.18em] sm:tracking-[0.2em] mb-4 sm:mb-6 flex items-center gap-2">
                <span class="w-1.5 h-1.5 bg-blue-500 rounded-full"></span>
                Group 3 — Compliance
              </h4>

              <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">
                  Regulatory Requirement
                </label>
                <select
                  v-model="inputs.compliance"
                  class="w-full px-4 py-3 sm:py-3.5 rounded-xl border border-gray-200 focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 outline-none bg-white text-sm"
                >
                  <option v-for="lvl in complianceLevels" :value="lvl">
                    {{ lvl }}
                  </option>
                </select>
              </div>
            </section>

          </div>
        </div>
      </div>

      <!-- RIGHT COLUMN -->
      <div class="lg:col-span-5 order-2 mt-8 lg:mt-0">
        <div class="bg-slate-900 text-white p-6 sm:p-8 md:p-10 rounded-2xl sm:rounded-[2.5rem] shadow-2xl lg:sticky lg:top-10 overflow-hidden relative">

          <div class="absolute -top-24 -right-24 w-64 h-64 bg-blue-600/20 blur-[100px] rounded-full"></div>

          <div class="relative z-10">
            <header class="mb-8 sm:mb-10">
              <p class="text-blue-400 text-[9px] sm:text-[10px] font-black uppercase tracking-[0.2em] mb-2">
                Annual Operational Cost
              </p>
              <div class="text-3xl sm:text-4xl md:text-5xl font-black tracking-tight break-all sm:break-normal">
                ${{ formatNum(outputs.annualCost) }}
              </div>
            </header>

            <div class="p-5 sm:p-6 rounded-2xl bg-white/5 border border-white/10 mb-6 sm:mb-8">
              <p class="text-red-400 text-[9px] sm:text-[10px] font-black uppercase tracking-[0.2em] mb-2">
                Risk Exposure
              </p>
              <div class="text-lg sm:text-xl md:text-2xl font-bold">
                ${{ formatNum(outputs.riskExposure.low) }}
                <span class="text-slate-500 mx-1">—</span>
                ${{ formatNum(outputs.riskExposure.high) }}
              </div>
            </div>

            <div class="h-44 sm:h-48 md:h-64 mb-6 sm:mb-8 bg-slate-800/50 rounded-2xl p-3 sm:p-4">
              <canvas id="riskChart"></canvas>
            </div>

            <div class="p-4 sm:p-5 bg-blue-600/10 rounded-2xl border border-blue-500/20">
              <p class="text-sm text-blue-100/70 italic leading-relaxed">
                {{ insightMessage }}
              </p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>
</div>
