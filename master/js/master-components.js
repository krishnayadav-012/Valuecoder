/* Pain points toggle */
function togglePain(el){
  const wasAct=el.classList.contains('act');
  document.querySelectorAll('.pain-card').forEach(c=>c.classList.remove('act'));
  if(!wasAct)el.classList.add('act');
  else el.classList.add('act'); // keep at least one open
}