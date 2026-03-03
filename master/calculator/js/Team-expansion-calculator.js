
        function updateLabel(id, suffix) {
            document.getElementById(`val-${id}`).innerText = document.getElementById(id).value + suffix;
        }
                
        function setToggle(id, val) {
            document.getElementById(id).value = val;
            const yesBtn = document.getElementById('lead-yes');
            const noBtn = document.getElementById('lead-no');
            if(val) {
                yesBtn.className = "px-6 py-2 rounded-lg text-sm font-bold bg-white shadow-sm text-black transition-all";
                noBtn.className = "px-6 py-2 rounded-lg text-sm font-bold text-slate-500 transition-all";
            } else {
                noBtn.className = "px-6 py-2 rounded-lg text-sm font-bold bg-white shadow-sm text-black transition-all";
                yesBtn.className = "px-6 py-2 rounded-lg text-sm font-bold text-slate-500 transition-all";
            }
        }

        function runAudit() {
            const size = parseInt(document.getElementById('teamSize').value) || 10;
            const growth = parseInt(document.getElementById('newHires').value) || 2;
            const cost = parseInt(document.getElementById('monthlyCost').value) || 8000;
            const stability = parseInt(document.getElementById('predict').value);
            const lead = document.getElementById('hasLead').value === 'true';
            const oh = parseInt(document.getElementById('overhead').value);
            const months = parseInt(document.getElementById('hireTime').value) || 2;

            let score = 100;
            score -= (100 - stability) * 0.4;
            score -= (oh * 0.2);
            if (!lead) score -= 15;
            if (growth > size * 0.3) score -= 10;
            score = Math.max(10, Math.min(100, Math.round(score)));

            const direct = (growth * cost).toLocaleString();
            const hiringLoss = (months * (cost * 0.4) * size).toLocaleString();
            const rampDelay = Math.round(cost * (oh / 100)).toLocaleString();

            const results = document.getElementById('results');
            results.classList.remove('hidden');
            
            setTimeout(() => {
                results.classList.remove('opacity-0', 'translate-y-8');
                document.getElementById('scoreCircle').style.strokeDashoffset = 283 - (283 * (score / 100));
            }, 50);

            document.getElementById('scoreVal').innerText = score;

            let title, desc, body, tags;
            if(score > 75) {
                title = "Scale Ready";
                desc = "Your velocity is stable and leadership is in place. Expansion risk is low.";
                tags = ['Low Risk', 'Stable Foundation', 'Ready'];
                body = `With a ${score} readiness index, adding ${growth} engineers is statistically safe. Your predictable sprint velocity suggests that onboarding will not break current delivery commitments.`;
            } else if(score > 45) {
                title = "Proceed with Caution";
                desc = "Process debt and management overhead will likely slow down your delivery.";
                tags = ['Medium Risk', 'Onboarding Drag', 'Warning'];
                body = `A score of ${score} suggests that for every new hire, you lose approximately ${oh}% of a senior's time. You should document key architectures before adding all ${growth} planned members.`;
            } else {
                title = "High Expansion Risk";
                desc = "Structural weaknesses suggest scaling now will cause a net loss in output.";
                tags = ['Critical Risk', 'Restructure Needed', 'High Friction'];
                body = `Scaling now is high risk. The lack of leadership and unstable velocity means ${growth} new hires will likely cost $${hiringLoss} in lost productivity. Consider a "Managed Pod" approach instead.`;
            }

            document.getElementById('resTitle').innerText = title;
            document.getElementById('resDesc').innerText = desc;
            document.getElementById('recBody').innerText = body;
            document.getElementById('resTags').innerHTML = tags.map(t => `<span class="bg-slate-800 text-slate-300 px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider">${t}</span>`).join('');

            const dataMap = [
                { l: "New Monthly Spend", v: `$${direct}`, s: "Salary impact" },
                { l: "Productivity Sink", v: `$${hiringLoss}`, s: "Over 6 months" },
                { l: "Ramp Cost / Hire", v: `$${rampDelay}`, s: "Knowledge transfer" }
            ];

            document.getElementById('gridReport').innerHTML = dataMap.map(d => `
                <div class="bg-white p-8 rounded-3xl border border-slate-200">
                    <p class="text-[10px] font-bold uppercase text-slate-400 tracking-[0.15em] mb-2">${d.l}</p>
                    <p class="text-3xl font-extrabold  text-black">${d.v}</p>
                    <p class="text-sm text-slate-500 mt-1">${d.s}</p>
                </div>
            `).join('');

            setTimeout(() => {
                window.scrollTo({ top: results.offsetTop - 50, behavior: 'smooth' });
            }, 150);
        }
    