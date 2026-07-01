<div class="container">
  <div class="dis-flex justify-sb">
    <div class="left-box">
      <div class="soc-box dis-flex items-center">                
        <a href="javascript:void(0)" ;="" onclick="consultCTA_cb();"><i><img loading="lazy" src="images/home-images/connect-01.svg" alt="valuecoders" width="20" height="20"></i><span>Book A Call</span></a>
        <a href="https://wa.me/918882108080" target="_blank"><i><img loading="lazy" src="images/home-images/connect-02.svg" alt="valuecoders" width="20" height="20"> </i><span>WhatsApp</span></a>
        <a href="mailto:sales@valuecoders.com" target="_blank"><i><img loading="lazy" src="images/home-images/connect-03.svg" alt="valuecoders" width="20" height="20"></i><span>Email us</span></a>
      </div>
      <div class="award-box">
        <p>Trusted by startups and Fortune <strong>500</strong> companies</p>
        <div class="row-box">
          <div class="col-box dis-flex">
            <div class="icon"><img loading="lazy" src="images/home-images/cont-01.svg" alt="pixel" width="40" height="40"></div>
            <div class="desp">
              <h4>20+ years of experience</h4>
              <p>We can handle projects of all complexities.</p>
            </div>
          </div>
          <div class="col-box dis-flex">
            <div class="icon"><img loading="lazy" src="images/home-images/cont-02.svg" alt="pixel" width="40" height="40"></div>
            <div class="desp">
              <h4>2500+ satisfied customers</h4>
              <p>Startups to Fortune 500, we have worked with all.</p>
            </div>
          </div>
          <div class="col-box dis-flex">
            <div class="icon"><img loading="lazy" src="images/home-images/cont-03.svg" alt="pixel" width="40" height="40"></div>
            <div class="desp">
              <h4>675+ in-house team</h4>
              <p>Top 1% industry talent to ensure your digital success.</p>
            </div>
          </div>
        </div>
        <div class="client-stack">
          <ul>
            <li>
              <picture>
                <img loading="lazy" src="images/home-images/fot-one.svg" alt="Valuecoders" width="107" height="60">
              </picture>
            </li>
            <li>
              <picture>
                <img loading="lazy" src="images/home-images/fot-two.svg" alt="Valuecoders" width="107" height="60">
              </picture>
            </li>
            <li>
              <picture>
                <img loading="lazy" src="images/home-images/fot-three.svg" alt="Valuecoders" width="107" height="60">
              </picture>
            </li>
            <li>
              <picture>
                <img loading="lazy" src="images/home-images/fot-four.svg" alt="Valuecoders" width="107" height="60">
              </picture>
            </li>
            <li>
              <picture>
                <img loading="lazy" src="images/home-images/fot-five.svg" alt="Valuecoders" width="107" height="60">
              </picture>
            </li>
            <li>
              <picture>
                <img loading="lazy" src="images/home-images/fot-six.svg" alt="Valuecoders" width="107" height="60">
              </picture>
            </li>
            <li>
              <picture>
                <img loading="lazy" src="images/home-images/fot-seven.svg" alt="Valuecoders" width="107" height="60">
              </picture>
            </li>
            <li>
              <picture>
                <img loading="lazy" src="images/home-images/fot-eight.svg" alt="Valuecoders" width="107" height="60">
              </picture>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="right-box">
    <div class="top-section">
               <h2> Book Free Consultation</h2>
               <p>Guaranteed response within 8 business hours.
            </div>
      
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