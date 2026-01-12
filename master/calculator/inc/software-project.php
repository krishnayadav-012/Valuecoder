<div class="py-10 sm:py-16 md:py-20 px-3 sm:px-4">
  <div class="bg-white rounded-2xl shadow-lg p-5 sm:p-6 md:p-8 mb-6 ">

    <!-- HEADER -->
    <div class="flex items-start sm:items-center gap-3 mb-4 sm:mb-6">
      <i data-lucide="alert-triangle" class="w-7 h-7 sm:w-8 sm:h-8 text-orange-600"></i>
      <h1 class="text-2xl sm:text-3xl font-bold text-slate-800 leading-tight">
        Project Delay Cost Calculator
      </h1>
    </div>

    <p class="text-slate-600 mb-6 sm:mb-8 text-sm sm:text-base">
      Calculate the true financial impact of software project delays including direct revenue,
      roadmap dependencies, and opportunity costs.
    </p>

    <!-- GRID -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

      <!-- LEFT COLUMN -->
      <div class="space-y-6">

        <!-- Monthly Revenue -->
        <div>
          <label class="block text-sm font-semibold text-slate-700 mb-2">
            Direct Monthly Revenue Impact
          </label>
          <div class="relative">
            <i data-lucide="dollar-sign" class="absolute left-3 top-3.5 w-5 h-5 text-slate-400"></i>
            <input
              type="number"
              id="monthlyRevenue"
              placeholder="50000"
              class="w-full pl-10 pr-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none text-sm"
            />
          </div>
          <p class="text-xs text-slate-500 mt-1">
            Expected monthly revenue from this project
          </p>
        </div>

        <!-- Delay Duration -->
        <div>
          <label class="block text-sm font-semibold text-slate-700 mb-2">
            Delay Duration (Months)
          </label>
          <div class="relative">
            <i data-lucide="calendar" class="absolute left-3 top-3.5 w-5 h-5 text-slate-400"></i>
            <input
              type="number"
              id="delayMonths"
              value="1"
              min="1"
              class="w-full pl-10 pr-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none text-sm"
            />
          </div>
        </div>

        <!-- Opportunity Cost -->
        <div>
          <label class="block text-sm font-semibold text-slate-700 mb-2">
            Opportunity Cost (Monthly)
          </label>
          <div class="relative">
            <i data-lucide="dollar-sign" class="absolute left-3 top-3.5 w-5 h-5 text-slate-400"></i>
            <input
              type="number"
              id="opportunityCost"
              placeholder="25000"
              class="w-full pl-10 pr-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none text-sm"
            />
          </div>
          <p class="text-xs text-slate-500 mt-1">
            Lost opportunities (market timing, competitors, etc.)
          </p>
        </div>

        <!-- TEAM COST -->
        <div class="border-t pt-4">
          <label class="block text-sm font-semibold text-slate-700 mb-3">
            Team Resource Cost
          </label>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
            <div>
              <input
                type="number"
                id="teamSize"
                placeholder="Team size"
                class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none text-sm"
              />
              <p class="text-xs text-slate-500 mt-1">Team members</p>
            </div>
            <div>
              <input
                type="number"
                id="avgSalary"
                placeholder="Avg salary"
                class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none text-sm"
              />
              <p class="text-xs text-slate-500 mt-1">Annual average</p>
            </div>
          </div>
        </div>

        <!-- DEPENDENT PROJECTS -->
        <div class="border-t pt-4">
          <label class="block text-sm font-semibold text-slate-700 mb-3">
            Dependent Projects
          </label>

          <div class="space-y-3">
            <div class="flex flex-col sm:flex-row gap-2">
              <input
                type="text"
                id="depName"
                placeholder="Project name"
                class="flex-1 px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none text-sm"
              />
              <input
                type="number"
                id="depRevenue"
                placeholder="Monthly revenue"
                class="w-full sm:w-40 px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none text-sm"
              />
              <button
                onclick="addDependency()"
                class="w-full sm:w-auto px-4 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-medium text-sm"
              >
                Add
              </button>
            </div>

            <div id="dependencyList" class="space-y-2"></div>
          </div>
        </div>
      </div>

      <!-- RIGHT COLUMN -->
      <div class="space-y-6">

        <!-- TOTAL -->
        <div class="bg-gradient-to-br from-red-50 to-orange-50 rounded-xl p-5 sm:p-6 border-2 border-red-200">
          <div class="flex items-center gap-2 mb-3">
            <i data-lucide="trending-down" class="w-5 h-5 sm:w-6 sm:h-6 text-red-600"></i>
            <h2 class="text-lg sm:text-xl font-bold text-red-900">
              Total Impact
            </h2>
          </div>

          <div
            id="grandTotal"
            class="text-3xl sm:text-4xl font-bold text-red-700 mb-1 break-all sm:break-normal"
          >
            $0
          </div>

          <p id="delayText" class="text-sm text-red-800">
            Total cost for 1 month delay
          </p>
        </div>

        <!-- BREAKDOWN -->
        <div class="bg-white rounded-xl border-2 border-slate-200 p-5 sm:p-6 space-y-4">
          <h3 class="font-bold text-slate-800 text-lg mb-3">
            Cost Breakdown
          </h3>

          <div class="flex justify-between text-sm pb-3 border-b">
            <span class="text-slate-600">Direct Revenue Loss</span>
            <span id="directLoss" class="font-semibold">$0</span>
          </div>

          <div id="dependentRow" class="hidden flex justify-between text-sm pb-3 border-b">
            <span class="text-slate-600">Dependent Projects Loss</span>
            <span id="dependentLoss" class="font-semibold">$0</span>
          </div>

          <div id="opportunityRow" class="hidden flex justify-between text-sm pb-3 border-b">
            <span class="text-slate-600">Opportunity Cost</span>
            <span id="opportunityLoss" class="font-semibold">$0</span>
          </div>

          <div id="teamRow" class="hidden flex justify-between text-sm pb-3 border-b">
            <span class="text-slate-600">Team Resource Cost</span>
            <span id="wastedTeamCost" class="font-semibold">$0</span>
          </div>

          <div class="flex justify-between items-center pt-2 font-bold">
            <span>Monthly Loss Rate</span>
            <span id="monthlyLossRate" class="text-red-600">$0</span>
          </div>
        </div>

        <!-- QUICK REFERENCE -->
        <div
          id="referenceCard"
          class="hidden bg-blue-50 rounded-xl p-5 border border-blue-200"
        >
          <h3 class="font-bold text-blue-900 mb-3">Quick Reference</h3>

          <div class="space-y-2 text-sm">
            <div class="flex justify-between">
              <span>Daily cost:</span>
              <span id="dailyCost" class="font-semibold">$0</span>
            </div>
            <div class="flex justify-between">
              <span>Weekly cost:</span>
              <span id="weeklyCost" class="font-semibold">$0</span>
            </div>
            <div class="flex justify-between">
              <span>Quarterly impact:</span>
              <span id="quarterlyCost" class="font-semibold">$0</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
