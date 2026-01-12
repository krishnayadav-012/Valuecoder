
        // Pricing Data
        const pricing = {
            aws: { serverPerMonth: 73, dbPerMonth: 180, trafficPerTB: 90, storagePerGB: 0.023, migrationPerServer: 500, migrationPerDB: 1200, compliance: { hipaa: 500, pci: 400, sox: 600, gdpr: 350 } },
            azure: { serverPerMonth: 70, dbPerMonth: 175, trafficPerTB: 87, storagePerGB: 0.020, migrationPerServer: 480, migrationPerDB: 1150, compliance: { hipaa: 480, pci: 380, sox: 580, gdpr: 330 } },
            gcp: { serverPerMonth: 68, dbPerMonth: 170, trafficPerTB: 85, storagePerGB: 0.020, migrationPerServer: 460, migrationPerDB: 1100, compliance: { hipaa: 460, pci: 360, sox: 560, gdpr: 320 } }
        };

        let currentProvider = 'aws';

        function updateProvider(p) {
            currentProvider = p;
            document.querySelectorAll('.provider-btn').forEach(btn => {
                btn.classList.remove('bg-indigo-600', 'text-white');
                btn.classList.add('bg-gray-100', 'text-gray-700');
            });
            const activeBtn = document.getElementById(`btn-${p}`);
            activeBtn.classList.remove('bg-gray-100', 'text-gray-700');
            activeBtn.classList.add('bg-indigo-600', 'text-white');
            calculate();
        }

        function calculate() {
            const p = pricing[currentProvider];
            const servers = Math.max(0, parseInt(document.getElementById('servers').value) || 0);
            const databases = Math.max(0, parseInt(document.getElementById('databases').value) || 0);
            const trafficTB = Math.max(0, parseInt(document.getElementById('traffic').value) || 0);
            const storageGB = Math.max(0, parseInt(document.getElementById('storage').value) || 0);
            const backupEnabled = document.getElementById('backupEnabled').checked;

            // Get selected compliance
            let selectedCompliance = [];
            document.querySelectorAll('.compliance-checkbox:checked').forEach(cb => {
                selectedCompliance.push(cb.value);
            });

            // Calculations
            const complianceOneTime = selectedCompliance.reduce((sum, c) => sum + p.compliance[c], 0);
            const migrationCost = (servers * p.migrationPerServer) + (databases * p.migrationPerDB) + complianceOneTime;

            const monthlyServerCost = servers * p.serverPerMonth;
            const monthlyDBCost = databases * p.dbPerMonth;
            const monthlyTrafficCost = trafficTB * p.trafficPerTB;
            const monthlyStorageCost = storageGB * p.storagePerGB;
            const monthlyBackupCost = backupEnabled ? (storageGB * 0.01) : 0;
            const monthlyComplianceCost = selectedCompliance.reduce((sum, c) => sum + p.compliance[c], 0);

            const monthlyTotal = monthlyServerCost + monthlyDBCost + monthlyTrafficCost + monthlyStorageCost + monthlyBackupCost + monthlyComplianceCost;
            const optimizationSavings = monthlyTotal * 0.20;
            const optimizedMonthly = monthlyTotal - optimizationSavings;

            // Update UI
            document.getElementById('display-migration-cost').innerText = `$${migrationCost.toLocaleString()}`;
            document.getElementById('display-monthly-total').innerText = `$${Math.round(monthlyTotal).toLocaleString()}`;
            document.getElementById('display-savings').innerText = `$${Math.round(optimizationSavings).toLocaleString()}/mo`;
            document.getElementById('display-optimized').innerText = `$${Math.round(optimizedMonthly).toLocaleString()}`;
            
            // Year Projection
            document.getElementById('display-year-total').innerText = `$${Math.round(migrationCost + (optimizedMonthly * 12)).toLocaleString()}`;
            document.getElementById('display-year-savings').innerText = `$${Math.round(optimizationSavings * 12).toLocaleString()}`;

            // Update Breakdown HTML
            let breakdownHtml = `
                <div class="flex justify-between"><span>Servers:</span><span>$${monthlyServerCost.toLocaleString()}</span></div>
                <div class="flex justify-between"><span>Databases:</span><span>$${monthlyDBCost.toLocaleString()}</span></div>
                <div class="flex justify-between"><span>Data Transfer:</span><span>$${monthlyTrafficCost.toLocaleString()}</span></div>
                <div class="flex justify-between"><span>Storage:</span><span>$${monthlyStorageCost.toFixed(2)}</span></div>
            `;
            if (backupEnabled) {
                breakdownHtml += `<div class="flex justify-between"><span>Backups:</span><span>$${monthlyBackupCost.toFixed(2)}</span></div>`;
            }
            if (monthlyComplianceCost > 0) {
                breakdownHtml += `<div class="flex justify-between"><span>Compliance:</span><span>$${monthlyComplianceCost.toLocaleString()}</span></div>`;
            }
            document.getElementById('breakdown').innerHTML = breakdownHtml;
        }

        // Initialize
        lucide.createIcons();
        calculate();
    