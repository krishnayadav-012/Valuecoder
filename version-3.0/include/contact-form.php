<div class="container">
  <div class="dis-flex">
    <div class="form-box-outer ">
     
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