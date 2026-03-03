
    <main class="max-w-7xl mx-auto px-6 py-12 space-y-12">
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            
            <section class="bg-white border border-slate-200 rounded-3xl p-8 md:p-10 shadow-sm flex flex-col justify-between">
                <div>
                    <div class="flex items-center gap-4 mb-10">
                        <span class="flex items-center justify-center w-10 h-10 rounded-full bg-black text-white font-bold text-sm">01</span>
                        <h2 class="text-2xl font-bold tracking-tight">Team Foundation</h2>
                    </div>

                    <div class="grid sm:grid-cols-2 gap-6 mb-8">
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-slate-700">Current Engineers</label>
                            <input type="number" id="teamSize" placeholder="12" class="w-full bg-slate-50 border-2 border-transparent focus:border-black focus:bg-white rounded-xl p-4 transition-all outline-none">
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-slate-700">Planned Hires</label>
                            <input type="number" id="newHires" placeholder="4" class="w-full bg-slate-50 border-2 border-transparent focus:border-black focus:bg-white rounded-xl p-4 transition-all outline-none">
                        </div>
                    </div>

                    <div class="space-y-8">
                        <div class="space-y-4">
                            <div class="flex justify-between items-end">
                                <label class="text-sm font-bold text-slate-700">Sprint Predictability</label>
                                <span id="val-predict" class="text-xs font-bold bg-slate-900 text-white px-2 py-1 rounded">80%</span>
                            </div>
                            <input type="range" id="predict" min="0" max="100" value="80" class="w-full" oninput="updateLabel('predict', '%')">
                        </div>

                        <div class="pt-4">
                            <label class="text-sm font-bold text-slate-700 block mb-4">Dedicated Tech Leadership?</label>
                            <div class="inline-flex bg-slate-100 p-1 rounded-xl border border-slate-200">
                                <button id="lead-yes" onclick="setToggle('hasLead', true)" class="px-6 py-2 rounded-lg text-sm font-bold transition-all">Yes</button>
                                <button id="lead-no" onclick="setToggle('hasLead', false)" class="px-6 py-2 rounded-lg text-sm font-bold bg-white shadow-sm text-black transition-all">No</button>
                            </div>
                            <input type="hidden" id="hasLead" value="false">
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-white border border-slate-200 rounded-3xl p-8 md:p-10 shadow-sm flex flex-col justify-between">
                <div>
                    <div class="flex items-center gap-4 mb-10">
                        <span class="flex items-center justify-center w-10 h-10 rounded-full bg-black text-white font-bold text-sm">02</span>
                        <h2 class="text-2xl font-bold tracking-tight">Growth Friction</h2>
                    </div>

                    <div class="grid sm:grid-cols-2 gap-6 mb-8">
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-slate-700">Avg. Monthly Cost/Eng</label>
                            <input type="number" id="monthlyCost" placeholder="10000" class="w-full bg-slate-50 border-2 border-transparent focus:border-black focus:bg-white rounded-xl p-4 transition-all outline-none">
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-slate-700">Time-to-Hire (Months)</label>
                            <input type="number" id="hireTime" placeholder="3" class="w-full bg-slate-50 border-2 border-transparent focus:border-black focus:bg-white rounded-xl p-4 transition-all outline-none">
                        </div>
                    </div>

                    <div class="space-y-8">
                        <div class="space-y-4">
                            <div class="flex justify-between items-end">
                                <label class="text-sm font-bold text-slate-700">Onboarding Overhead</label>
                                <span id="val-overhead" class="text-xs font-bold bg-slate-900 text-white px-2 py-1 rounded">30%</span>
                            </div>
                            <input type="range" id="overhead" min="0" max="100" value="30" class="w-full" oninput="updateLabel('overhead', '%')">
                        </div>
                        
                        <div class="pt-4 opacity-0 pointer-events-none hidden sm:block">
                            <label class="text-sm font-bold block mb-4">Spacer</label>
                            <div class="py-2">Spacer</div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="flex justify-center">
            <button onclick="runAudit()" class="w-full max-w-2xl bg-black text-white py-6 rounded-3xl text-xl font-bold hover:bg-slate-800 active:scale-[0.98] transition-all shadow-xl shadow-slate-200">
                Generate Readiness Report
            </button>
        </div>

        <section id="results" class="hidden space-y-6 opacity-0 translate-y-8 transition-all duration-700">
            <div class="bg-slate-900 rounded-[2.5rem] p-10 text-white">
                <div class="flex flex-col md:flex-row items-center gap-12">
                    <div class="relative w-40 h-40 shrink-0">
                        <svg class="w-full h-full -rotate-90" viewBox="0 0 100 100">
                            <circle cx="50" cy="50" r="45" stroke="currentColor" stroke-width="8" fill="transparent" class="text-slate-800"/>
                            <circle id="scoreCircle" cx="50" cy="50" r="45" stroke="white" stroke-width="8" fill="transparent" 
                                stroke-dasharray="283" stroke-dashoffset="283" stroke-linecap="round" class="transition-all duration-1000"/>
                        </svg>
                        <div class="absolute inset-0 flex flex-col items-center justify-center">
                            <span id="scoreVal" class="text-5xl font-extrabold tracking-tighter ">0</span>
                            <span class="text-[8px] uppercase tracking-[0.2em] text-slate-400 font-bold">Index</span>
                        </div>
                    </div>

                    <div class="text-center md:text-left space-y-4">
                        <h2 id="resTitle" class="text-3xl font-bold text-white">Results Title</h2>
                        <p id="resDesc" class="text-slate-400 max-w-md leading-relaxed"></p>
                        <div id="resTags" class="flex flex-wrap gap-2 justify-center md:justify-start"></div>
                    </div>
                </div>
            </div>

            <div id="gridReport" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4"></div>

            <div class="bg-white border-2 border-black rounded-[2.5rem] p-8 md:p-12">
                <div class="flex items-center gap-4 mb-6">
                    <span class="text-3xl">🚀</span>
                    <h3 class="text-2xl font-bold tracking-tight">Next Steps</h3>
                </div>
                <p id="recBody" class="text-slate-600 text-lg leading-relaxed mb-10"></p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                    <button class="bg-black text-white px-10 py-4 rounded-2xl font-bold hover:bg-slate-800 transition">Strategy Call</button>
                    <button onclick="window.scrollTo({top:0, behavior:'smooth'})" class="border border-slate-200 px-10 py-4 rounded-2xl font-bold hover:bg-slate-50 transition">Reset Data</button>
                </div>
            </div>
        </section>
    </main>