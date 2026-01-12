<div class="py-6 md:py-20 px-4 max-w-6xl mx-auto">
    <div class="bg-white rounded-3xl shadow-xl p-6 md:p-10 border border-gray-100">
        <div class="flex flex-col sm:flex-row items-center gap-4 mb-10 text-center sm:text-left">
            <div class="p-3 bg-indigo-50 rounded-2xl">
                <i data-lucide="cloud" class="w-10 h-10 text-indigo-600"></i>
            </div>
            <div>
                <h1 class="text-2xl md:text-3xl font-bold text-gray-900">Cloud Migration Cost Calculator</h1>
                <p class="text-gray-500 text-sm">Estimate your infrastructure transition and monthly operational spend.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
            <div class="lg:col-span-7 space-y-8">
                
                <section>
                    <label class="block text-sm font-bold text-gray-700 uppercase tracking-wider mb-3">Cloud Provider</label>
                    <div class="grid grid-cols-3 gap-3" id="providerButtons">
                        <button onclick="updateProvider('aws')" id="btn-aws" class="py-3 rounded-xl font-bold transition bg-indigo-600 text-white shadow-md shadow-indigo-200">AWS</button>
                        <button onclick="updateProvider('azure')" id="btn-azure" class="py-3 rounded-xl font-bold transition bg-gray-50 text-gray-600 hover:bg-gray-100 border border-gray-200">AZURE</button>
                        <button onclick="updateProvider('gcp')" id="btn-gcp" class="py-3 rounded-xl font-bold transition bg-gray-50 text-gray-600 hover:bg-gray-100 border border-gray-200">GCP</button>
                    </div>
                </section>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-2">
                            <i data-lucide="server" class="w-4 h-4 text-indigo-500"></i> Number of Servers
                        </label>
                        <input type="number" id="servers" value="10" min="1" oninput="calculate()" class="w-full px-4 py-3 bg-gray-50 border-2 border-transparent rounded-xl focus:border-indigo-500 focus:bg-white focus:outline-none transition-all">
                    </div>

                    <div>
                        <label class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-2">
                            <i data-lucide="database" class="w-4 h-4 text-indigo-500"></i> Number of Databases
                        </label>
                        <input type="number" id="databases" value="2" min="0" oninput="calculate()" class="w-full px-4 py-3 bg-gray-50 border-2 border-transparent rounded-xl focus:border-indigo-500 focus:bg-white focus:outline-none transition-all">
                    </div>

                    <div>
                        <label class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-2">
                            <i data-lucide="network" class="w-4 h-4 text-indigo-500"></i> Data Transfer (TB/mo)
                        </label>
                        <input type="number" id="traffic" value="5" min="0" oninput="calculate()" class="w-full px-4 py-3 bg-gray-50 border-2 border-transparent rounded-xl focus:border-indigo-500 focus:bg-white focus:outline-none transition-all">
                    </div>

                    <div>
                        <label class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-2">
                            <i data-lucide="hard-drive" class="w-4 h-4 text-indigo-500"></i> Storage (GB)
                        </label>
                        <input type="number" id="storage" value="1000" min="0" oninput="calculate()" class="w-full px-4 py-3 bg-gray-50 border-2 border-transparent rounded-xl focus:border-indigo-500 focus:bg-white focus:outline-none transition-all">
                    </div>
                </div>

                <div class="p-6 bg-slate-50 rounded-2xl border border-slate-100">
                    <label class="flex items-center gap-2 text-sm font-bold text-gray-700 uppercase tracking-wider mb-4">
                        <i data-lucide="shield-check" class="w-4 h-4 text-indigo-500"></i> Advanced Options
                    </label>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-6">
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="checkbox" value="hipaa" onchange="calculate()" class="compliance-checkbox w-5 h-5 text-indigo-600 rounded-lg border-gray-300 focus:ring-indigo-500">
                            <span class="text-sm font-medium text-gray-600 group-hover:text-indigo-600 transition">HIPAA</span>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="checkbox" value="pci" onchange="calculate()" class="compliance-checkbox w-5 h-5 text-indigo-600 rounded-lg border-gray-300 focus:ring-indigo-500">
                            <span class="text-sm font-medium text-gray-600 group-hover:text-indigo-600 transition">PCI</span>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="checkbox" value="sox" onchange="calculate()" class="compliance-checkbox w-5 h-5 text-indigo-600 rounded-lg border-gray-300 focus:ring-indigo-500">
                            <span class="text-sm font-medium text-gray-600 group-hover:text-indigo-600 transition">SOX</span>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="checkbox" value="gdpr" onchange="calculate()" class="compliance-checkbox w-5 h-5 text-indigo-600 rounded-lg border-gray-300 focus:ring-indigo-500">
                            <span class="text-sm font-medium text-gray-600 group-hover:text-indigo-600 transition">GDPR</span>
                        </label>
                    </div>

                    <label class="flex items-center gap-3 cursor-pointer p-3 bg-white rounded-xl border border-gray-200">
                        <input type="checkbox" id="backupEnabled" checked onchange="calculate()" class="w-5 h-5 text-indigo-600 rounded-lg focus:ring-indigo-500">
                        <span class="text-sm font-bold text-gray-700">Enable Automated Backups (Daily)</span>
                    </label>
                </div>
            </div>

            <div class="lg:col-span-5">
                <div class="lg:sticky lg:top-8 space-y-4">
                    
                    <div class="bg-indigo-600 rounded-2xl p-6 text-white shadow-lg shadow-indigo-100">
                        <h2 class="text-xs uppercase tracking-widest font-bold opacity-80 mb-2">Migration (One-time)</h2>
                        <div class="text-4xl font-black" id="display-migration-cost">$0</div>
                        <p class="mt-2 text-xs opacity-70 text-white">Planning, transfer & compliance setup</p>
                    </div>

                    <div class="bg-slate-900 rounded-2xl p-6 text-white shadow-lg">
                        <h2 class="text-xs uppercase tracking-widest font-bold text-slate-400 mb-2">Monthly Cloud Spend</h2>
                        <div class="text-4xl font-black text-cyan-400" id="display-monthly-total">$0</div>
                        <div class="mt-4 pt-4 border-t border-slate-800 space-y-2 text-sm text-slate-400" id="breakdown">
                            </div>
                    </div>

                    <div class="bg-emerald-50 rounded-2xl p-6 border border-emerald-100">
                        <div class="flex items-center gap-2 mb-3">
                            <i data-lucide="trending-down" class="w-5 h-5 text-emerald-600"></i>
                            <h2 class="text-sm font-bold text-emerald-800 uppercase tracking-tight">Optimization Savings</h2>
                        </div>
                        <div class="text-3xl font-black text-emerald-600" id="display-savings">$0/mo</div>
                        <div class="mt-4 pt-4 border-t border-emerald-200">
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-emerald-700 font-medium">Optimized Cost:</span>
                                <span class="text-lg font-bold text-emerald-900" id="display-optimized">$0</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-6 border border-gray-200 shadow-sm">
                        <h3 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-4">12-Month Projection</h3>
                        <div class="space-y-3">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">Total Year 1 Cost:</span>
                                <span class="font-bold text-gray-900" id="display-year-total">$0</span>
                            </div>
                            <div class="flex justify-between text-sm p-2 bg-emerald-50 rounded-lg">
                                <span class="text-emerald-700">Potential Savings:</span>
                                <span class="font-bold text-emerald-600" id="display-year-savings">$0</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>