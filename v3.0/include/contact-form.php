<div class="container">
  <div class="dis-flex justify-sb">
    <div class="left-box">
      <h2>Book Free Consultation</h2>
      <p>Guaranteed response within 8 business hours.</p>
      <div class="side-dash1 list-box">
        <h3>Fill up your details</h3>
        <p>Get Custom Solutions, Recommendations, Estimates.</p>
      </div>
      <div class="side-dash2 list-box">
        <h3>What's next?</h3>
        <p>One of our Account Managers will contact you shortly</p>
        <div class="dis-flex  items-center award-logo">
          <div class="logo-box">
            <picture>
              <img loading="lazy" src="images/footer-aw-01.svg" alt="Valuecoders" width="75" height="46"> 
            </picture>
          </div>
          <div class="logo-box">
            <picture>
              <img loading="lazy" src="images/footer-aw-02.svg" alt="Valuecoders" width="90" height="22"> 
            </picture>
          </div>
          <div class="logo-box">
            <picture>
              <img loading="lazy" src="images/footer-aw-03.svg" alt="Valuecoders" width="114" height="35"> 
            </picture>
          </div>
          <div class="logo-box">
            <picture>
              <img loading="lazy" src="images/footer-aw-04.svg" alt="Valuecoders" width="84" height="34"> 
            </picture>
          </div>
        </div>
      </div>
    </div>
    <div class="right-box">
      <?php require_once 'form-footer.php'; ?>
    </div>
  </div>
</div>
<script>
  function validateMquiz(){
  	let que     = document.getElementById("j-quiz").textContent;
  	let ans     = document.getElementById("j-quiz-ans").value;
  	let qerror  = document.getElementById("captchaerror");
  	if( eval(que) == ans ){
  		qerror.textContent = "";
  		return true;
  	}else{
  		qerror.textContent = "Invalid Answer";
  		return false;
  	}
  }
  
  var jQuizExists = document.getElementById("j-quiz");
  if (jQuizExists) {
  	generateWsQuiz();
  }
  function generateWsQuiz() {
  	let n1 = Math.floor(Math.random() * 9) + 1;
  	let n2 = Math.floor(Math.random() * 9) + 1;
  	document.getElementById("j-quiz").textContent = n1 + " + " + n2;
  }
</script>