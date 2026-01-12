
        lucide.createIcons();

        const sizeMultipliers = {
            small: 1,
            medium: 2.5,
            large: 5,
            enterprise: 10
        };

        const ageMultipliers = {
            "0-5": 1,
            "5-10": 1.3,
            "10-15": 1.7,
            "15+": 2.2
        };

        const archMultipliers = {
            "cloud-native": 1.5,
            microservices: 1.8,
            serverless: 1.4,
            containerized: 1.3
        };

        const baseCosts = {
            rehost: 50000,
            refactor: 150000,
            rebuild: 300000
        };

        function formatCurrency(value) {
            return new Intl.NumberFormat("en-US", {
                style: "currency",
                currency: "USD",
                maximumFractionDigits: 0
            }).format(value);
        }

        function getRecommendation(size, age, arch) {
            if (age === "15+" && arch === "cloud-native") return "rebuild";
            if (age === "0-5" && size === "small") return "rehost";
            return "refactor";
        }

        function calculate() {
            const size = document.getElementById("appSize").value;
            const age = document.getElementById("techStackAge").value;
            const arch = document.getElementById("targetArch").value;

            const multiplier =
                sizeMultipliers[size] *
                ageMultipliers[age] *
                archMultipliers[arch];

            const recommendation = getRecommendation(size, age, arch);
            const container = document.getElementById("results");
            container.innerHTML = "";

            ["rehost", "refactor", "rebuild"].forEach(strategy => {
                const base = baseCosts[strategy];
                const min = Math.round(base * multiplier * 0.8);
                const max = Math.round(base * multiplier * 1.2);

                const isRecommended = strategy === recommendation;

                container.innerHTML += `
          <div class="border-2 rounded-xl p-6 transition-all
            ${isRecommended ? "border-indigo-500 bg-indigo-50 shadow-lg scale-105" : "border-gray-200"}">
            <div class="flex justify-between items-center mb-3">
              <h3 class="text-xl font-bold capitalize">${strategy}</h3>
              ${isRecommended ? `<span class="bg-indigo-600 text-white text-xs px-3 py-1 rounded-full">Recommended</span>` : ""}
            </div>

            <div class="text-3xl font-bold text-indigo-600 mb-4">
              ${formatCurrency(min)} – ${formatCurrency(max)}
            </div>

            <div class="text-sm space-y-2">
              <div class="flex justify-between">
                <span class="text-gray-600">Timeline</span>
                <span class="font-semibold">
                  ${strategy === "rehost" ? "2–4 months" :
                        strategy === "refactor" ? "6–12 months" : "12–24 months"}
                </span>
              </div>
              <div class="flex justify-between">
                <span class="text-gray-600">Risk</span>
                <span class="font-semibold
                  ${strategy === "rehost" ? "text-green-600" :
                        strategy === "refactor" ? "text-yellow-600" : "text-red-600"}">
                  ${strategy === "rehost" ? "Low" :
                        strategy === "refactor" ? "Medium" : "High"}
                </span>
              </div>
            </div>

            <p class="text-xs text-gray-600 mt-4 pt-4 border-t">
              ${strategy === "rehost" && "Lift-and-shift with minimal changes"}
              ${strategy === "refactor" && "Optimize code while retaining core architecture"}
              ${strategy === "rebuild" && "Complete redesign using modern technologies"}
            </p>
          </div>
        `;
            });
        }

        document.querySelectorAll("select").forEach(el =>
            el.addEventListener("change", calculate)
        );

        calculate();
    