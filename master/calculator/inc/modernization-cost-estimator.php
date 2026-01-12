  <div class=" py-20">
        <div class="bg-white rounded-2xl shadow-xl p-8">

            <!--  -->
            <div class="flex items-center gap-3 mb-6">
                <i data-lucide="calculator" class="w-8 h-8 text-indigo-600"></i>
                <h1 class="text-3xl font-bold text-gray-800">
                    Application Modernization Cost Estimator
                </h1>
            </div>

            <!-- Inputs -->
            <div class="grid md:grid-cols-3 gap-6 mb-8">
                <!-- App Size -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Application Size
                    </label>
                    <select id="appSize"
                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:outline-none">
                        <option value="small">Small (1–5K LOC)</option>
                        <option value="medium" selected>Medium (5–50K LOC)</option>
                        <option value="large">Large (50–500K LOC)</option>
                        <option value="enterprise">Enterprise (500K+ LOC)</option>
                    </select>
                </div>

                <!-- Tech Age -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Tech Stack Age
                    </label>
                    <select id="techStackAge"
                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:outline-none">
                        <option value="0-5">0–5 years</option>
                        <option value="5-10" selected>5–10 years</option>
                        <option value="10-15">10–15 years</option>
                        <option value="15+">15+ years</option>
                    </select>
                </div>

                <!-- Target Arch -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Target Architecture
                    </label>
                    <select id="targetArch"
                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:outline-none">
                        <option value="cloud-native" selected>Cloud-Native</option>
                        <option value="microservices">Microservices</option>
                        <option value="serverless">Serverless</option>
                        <option value="containerized">Containerized</option>
                    </select>
                </div>
            </div>

            <!-- Results -->
            <div class="grid md:grid-cols-3 gap-6" id="results"></div>

            <!-- Info -->
            <div class="mt-8 bg-blue-50 border-l-4 border-blue-500 p-6 rounded-lg">
                <div class="flex gap-3">
                    <i data-lucide="info" class="w-5 h-5 text-blue-600 mt-1"></i>
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-2">About This Estimate</h4>
                        <p class="text-sm text-gray-700">
                            This calculator provides rough cost estimates based on industry averages.
                            Actual costs may vary depending on technical debt, integrations, compliance,
                            and team expertise.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>