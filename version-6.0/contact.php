<?php require_once '../common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us - Software Solutions Firm - @ValueCoders</title>
    <meta name="description" content="Contact Us - Software Solutions Firm - @ValueCoders" />
    <meta name="keywords"
      content="software outsourcing company, software development outsourcing, software engineering company in india, software outsourcing company India, offshore software development, software outsourcing services" />
    <meta property="og:title" content="Contact Us - Software Solutions Firm - @ValueCoders" />
    <?php require_once 'include/header-files.php'; ?>
    <link rel="preload stylesheet" type="text/css" href="./css/contact-min.css" defer />
    <!-- add -->
    <link rel="preload stylesheet" type="text/css" href="css/form-county.css" defer/>
    <link rel="preload stylesheet" type="text/css" href="css/nice-select2.css" />
    <script src="/valuecoders-v2/js/intlTelInput.js"></script>
    <script src="/valuecoders-v2/js/select-bx.js"></script>
  </head>
  <body id="themeAdd">
    <div class="contact-wrap">
      <section class="contact-us-section full-width-form padding-t-150 padding-b-150">
        <div class="container">
          <div class="dis-flex form-outer">
            <div class="form-left">
              <div class="bg-voilet">
                <div class="form-box-outer right-box" style="padding-top:100px;">
                  <div class="head-txt">
                    <div class="logo-box"><a href="https://www.valuecoders.com"></a></div>
                    <div class="head-box">
                      <h1>Get In Touch</h1>
                      <p>Our consultants will respond back within 8 business hours or less.</p>
                    </div>
                  </div>
                  <form action="https://www.valuecoders.com/sendmail1.php" enctype="multipart/form-data" method="POST" id="contact-form-section" onsubmit="if (!window.__cfRLUnblockHandlers) return false; return vcCmnFormValidation();" style="margin-top:40px;">
                    <div id="vc-fstep1" class="step-one version-8">
                      <div class="step-head active">
                        <div>
                          <h2 id="uinfo">Your Information</h2>
                          <span>(Step 1 of 2)</span>
                        </div>
                        <span class="req-block">Required Fields*</span>
                      </div>
                      <div class="form-inner dis-flex">
                        <div class="form-text-cont verror">
                          <div class="lbl-row">
                            <label for="cont_name">Full Name *</label>
                          </div>
                          <div class="user-input form-control">
                            <input type="text" id="cont_name" class="input-field" value="" maxlength="50" name="user-name">
                            <small>Please input valid name.</small>
                          </div>
                        </div>
                        <div class="form-text-cont verror">
                          <div class="lbl-row">
                            <label for="cont_email">Email Address *</label>
                          </div>
                          <div class="user-input form-control">
                            <input type="text" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,10}$" class="input-field" value="" maxlength="50" name="user-email" id="cont_email">
                            <small>Please Fill Email</small>
                          </div>
                        </div>
                        <div class="form-text-cont">
                          <div class="lbl-row">
                            <label for="cont_country">Country *</label>
                          </div>
                          <div class="user-input">
                            <input type="text" class="input-field" id="cont_country" value="" name="user-country" maxlength="50" autocomplete="off">
                            <small>Error Message</small>
                          </div>
                        </div>
                        <div class="form-text-cont">
                          <div class="lbl-row">
                            <label for="cont_phpne">Phone Number *</label>
                          </div>
                          <div class="user-input">
                            <input id="cont_phpne" type="tel" maxlength="30" name="user-phone" class="input-field flg-input">
                            <small>Error Message</small>
                          </div>
                        </div>
                        <div class="form-text-cont step-one-select">
                          <div class="user-input">
                            <label for="select-wehelp">How can we help? *</label>
                            <select class="wide selectize" name="we-help" id="select-wehelp" style="display:none;">
                              <option value="">Select</option>
                              <option value="Software Development" title="For custom software development and fixed cost projects.">Software Development</option>
                              <option value="Team Extension" title="Augment your team with expert software engineers.">Team Extension (Staff Augmentation)</option>
                              <option value="Dedicated Software Team" title="Dedicated autonomous software product engineering teams comprising of multiple skills.">Dedicated Software Team</option>
                              <option value="Other Technology Needs" title="Any other world-class technology solution that you may need.">Other Technology Needs</option>
                              <option value="None of the above" title="Connect with our business consultant to discuss your requirements.">None of the above</option>
                            </select>
                            <div class="nice-select wide selectize" tabindex="0">
                              <span class="current">Please Select from the dropdown</span>
                              <div class="nice-select-dropdown">
                                <ul class="list">
                                  <li data-value="Software Development" class="option null">
                                    Software Development
                                    <div class="info-box"><em>i</em><span class="info">For custom software development and fixed cost projects.</span></div>
                                  </li>
                                  <li data-value="Team Extension" class="option null">
                                    Team Extension (Staff Augmentation)
                                    <div class="info-box"><em>i</em><span class="info">Augment your team with expert software engineers.</span></div>
                                  </li>
                                  <li data-value="Dedicated Software Team" class="option null">
                                    Dedicated Software Team
                                    <div class="info-box"><em>i</em><span class="info">Dedicated autonomous software product engineering teams comprising of multiple skills.</span></div>
                                  </li>
                                  <li data-value="Other Technology Needs" class="option null">
                                    Other Technology Needs
                                    <div class="info-box"><em>i</em><span class="info">Any other world-class technology solution that you may need.</span></div>
                                  </li>
                                  <li data-value="None of the above" class="option null">
                                    None of the above
                                    <div class="info-box"><em>i</em><span class="info">Connect with our business consultant to discuss your requirements.</span></div>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <small>Error Message</small>
                          </div>
                        </div>
                        <div class="nxt-btn-box">
                          <input type="hidden" name="z-leadid" id="zlead-id" value="0">
                          <button class="nxt-btn" id="btn-step-one" type="button" onclick="if (!window.__cfRLUnblockHandlers) return false; return vcStepOneCheckert();">Continue</button>
                        </div>
                      </div>
                      <br>
                      <br>
                    </div>
                    <div id="vc-fstep2" class="step-two" style="display:none;">
                      <div class="step-head-outer">
                        <div class="step-head contact-info">
                          <div class="h2-spn">
                            <h2>Contact Information</h2>
                            <span>(Step 1 of 2)</span>
                          </div>
                          <a href="javascript:void(0);" onclick="if (!window.__cfRLUnblockHandlers) return false; dovcstep_one();" tabindex="-1" class="edit-txt">Edit</a>
                        </div>
                        <div class="form-text-selected-outer dis-flex">
                          <div class="form-text-selected sml-col">
                            <label>Full Name:</label>
                            <div class="user-input-selected">
                              <span id="span-name"></span>
                            </div>
                          </div>
                          <div class="form-text-selected">
                            <label>Email Address:</label>
                            <div class="user-input-selected">
                              <span id="span-email"></span>
                            </div>
                          </div>
                          <div class="form-text-selected sml-col">
                            <label>Phone No :</label>
                            <div class="user-input-selected">
                              <span id="span-phone"></span>
                            </div>
                          </div>
                          <div class="form-text-selected">
                            <label>How can we help :</label>
                            <div class="user-input-selected">
                              <span id="span-wehelp"></span>
                            </div>
                          </div>
                          <div class="form-text-selected sml-col">
                            <label>Country :</label>
                            <div class="user-input-selected">
                              <span id="span-country"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="step-head active">
                        <div>
                          <h2>Your Requirements</h2>
                          <span>(Step 2 of 2)</span>
                        </div>
                      </div>
                      <div class="form-text-cont width-full">
                        <div class="exp-div-row">
                          <label>What is the expected start date?*</label>
                          <select name="expected-date" id="inp-expdate" style="display: none;">
                            <option value="">Select</option>
                            <option value="I am already late">I am already late</option>
                            <option value="Immediately">Immediately</option>
                            <option value="When I get internal funding/approval">When I get internal funding/approval</option>
                            <option value="Specify a date">Specify a date</option>
                            <option value="I don't know">I don't know</option>
                          </select>
                          <div class="nice-select" tabindex="0">
                            <span class="current">Please Select from the dropdown</span>
                            <div class="nice-select-dropdown">
                              <ul class="list">
                                <li data-value="I am already late" class="option null">I am already late</li>
                                <li data-value="Immediately" class="option null">Immediately</li>
                                <li data-value="When I get internal funding/approval" class="option null">When I get internal funding/approval</li>
                                <li data-value="Specify a date" class="option null">Specify a date</li>
                                <li data-value="I don't know" class="option null">I don't know</li>
                              </ul>
                            </div>
                          </div>
                          <small></small>
                        </div>
                        <div class="radio-date opt-div" id="radio-date" style="display:none;margin-bottom:30px;">
                          <div class="radio-date-list">
                            <input type="radio" id="oneMonth" name="expected-month" value="1 month" checked="">
                            <label for="oneMonth">1 month</label>
                          </div>
                          <div class="radio-date-list">
                            <input type="radio" id="twoMonth" name="expected-month" value="2 months">
                            <label for="twoMonth">2 months</label>
                          </div>
                          <div class="radio-date-list">
                            <input type="radio" id="threeMonth" name="expected-month" value="3 months">
                            <label for="threeMonth">3 months</label>
                          </div>
                          <div class="radio-date-list">
                            <input type="radio" id="sixMonth" name="expected-month" value="6 months">
                            <label for="sixMonth">6 months</label>
                          </div>
                        </div>
                      </div>
                      <div style="clear:both;"></div>
                      <div id="team-ext-col" style="display:none;">
                        <div class="form-text-cont width-full">
                          <div class="lbl-row-new"><label>How many engineers would you like to add?*</label></div>
                          <select id="inp-resources" name="count-resources" style="display: none;">
                            <option value="">Select</option>
                            <option value="1">1</option>
                            <option value="2-5">2-5</option>
                            <option value="6-10">6-10</option>
                            <option value="11-20">11-20</option>
                            <option value="More than 20">More than 20</option>
                            <option value="I don't Know">I don't Know</option>
                          </select>
                          <div class="nice-select" tabindex="0">
                            <span class="current">Please Select from the dropdown</span>
                            <div class="nice-select-dropdown">
                              <ul class="list">
                                <li data-value="1" class="option null">1</li>
                                <li data-value="2-5" class="option null">2-5</li>
                                <li data-value="6-10" class="option null">6-10</li>
                                <li data-value="11-20" class="option null">11-20</li>
                                <li data-value="More than 20" class="option null">More than 20</li>
                                <li data-value="I don't Know" class="option null">I don't Know</li>
                              </ul>
                            </div>
                          </div>
                          <small></small>
                        </div>
                        <div id="how-long" class="form-text-cont width-full">
                          <div class="lbl-row-new">
                            <label>For how long will you need these engineers?*</label>
                          </div>
                          <select id="inp-howlong" name="howlong" style="display: none;">
                            <option value="">Select</option>
                            <option value="1-3 Months">1-3 Months</option>
                            <option value="3-6 Months">3-6 Months</option>
                            <option value="6+ Months">6+ Months</option>
                          </select>
                          <div class="nice-select" tabindex="0">
                            <span class="current">Please Select from the dropdown</span>
                            <div class="nice-select-dropdown">
                              <ul class="list">
                                <li data-value="1-3 Months" class="option null">1-3 Months</li>
                                <li data-value="3-6 Months" class="option null">3-6 Months</li>
                                <li data-value="6+ Months" class="option null">6+ Months</li>
                              </ul>
                            </div>
                          </div>
                          <small></small>
                        </div>
                      </div>
                      <div id="temp-tem-ext-dv"></div>
                      <div class="form-text-cont width-full">
                        <div class="lbl-row-new">
                          <label>Requirement*</label>
                        </div>
                        <div class="user-input">
                          <textarea class="input-field comment-input" id="user-req" name="user-req"></textarea>
                          <small>Error Message</small>
                          <div class="drop-input attachment_brw" id="uploadcontact">
                            <div id="dropcontact"></div>
                          </div>
                          <div id="drop-area">
                            <input type="file" name="files[]" id="fileElem" multiple="" accept="image/*,application/pdf,.psd,.zip,.docx,.xlsx,.xls,.txt" onchange="if (!window.__cfRLUnblockHandlers) return false; handleFiles(this.files)">
                            <button class="button" id="browse-btn" type="button" onclick="if (!window.__cfRLUnblockHandlers) return false; document.getElementById('fileElem').click()">BROWSE | DROP FILES HERE</button>
                            <input type="hidden" name="up-counter" id="uplcounter" value="0">
                            <progress style="display:none;" id="progress-bar" max="100" value="0"></progress>
                          </div>
                        </div>
                      </div>
                      <div id="gloader" class="gal-loader">
                        <div class="loader"></div>
                        <div id="gallery"></div>
                      </div>
                      <p id="file-type-error"></p>
                      <div class="nda-button">
                        <input type="checkbox" id="ndaButton" name="nda" value="Send me NDA">
                        <label for="ndaButton">Send me NDA
                        <span class="info-box">
                        <em>i</em>
                        <span class="info">A Non Disclosure Agreement is a legally binding contract that establishes a confidential relationship. The party or parties signing the agreement agree that sensitive information they may obtain will not be made available to any others. An NDA may also be referred to as a confidentiality agreement. (credit: Investopedia)</span>
                        </span>
                        </label>
                      </div>
                      <div class="user-input checkout">
                        <input type="hidden" name="Uploadedfilename" id="Uploadedfilename" value="">
                        <input type="hidden" name="frmqueryString" value="https://www.valuecoders.com/contact">
                        <input type="hidden" name="page_url" value="https://www.valuecoders.com/contact">
                        <input type="hidden" name="vform-type" value="contact">
                        <input type="submit" id="submitButton" class="checkout-submit" value="Send your request">
                      </div>
                      <p class="note">Note : We Respect Your Privacy! Your details will never be shared with anyone for marketing purposes.</p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="slider-right">
              <span class="client-head">TRUSTED BY STARTUPS AND FORTUNE 500 COMPANIES</span>
              <picture>
                <img src="images/contact-client-logo-image.svg" class="Client Logo" width="364" height="274">
              </picture>
            </div>
            <div class="trusted-logos">
              <div class="dis-flex items-center justify-sb">
                <span class="text-box">Trusted By</span>
                <div class="logo-box">
                  <picture>
                    <source type="image/webp" srcset="/images/trusted-logos.webp">
                    <source type="image/png" srcset="/images/trusted-logos.png">
                    <img loading="lazy" src="/images/trusted-logos.png" alt="Valuecoders" width="786"
                      height="104">
                  </picture>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    </section>
    <section class="form-footer-section">
      <div class="container">
        <div class="form-footer dis-flex">
          <div class="mid-block dis-flex">
            <div class="flex-3">
              <a href="tel:+918882108080"><span class="title">INDIA</span> +91 888 210 8080 (Sales)</a>
              <a href="tel:+917042020782" style="margin-top: 5px; ">+91 704 202 0782 (HR)</a>
            </div>
            <div class="flex-3">
              <a href="tel:+442032392299"><span class="title">UK</span> +44 20 3239 2299</a>
            </div>
            <div class="flex-3">
              <a href="https://wa.me/918882108080"><span class="title">WhatsApp</span> +91 888 210 8080</a>
            </div>
            <div class="flex-3">
              <a href="tel:+14152300123"><span class="title">USA</span> +1 415 230 0123</a>
            </div>
            <div class="flex-3">
              <a href="tel:+61280058080"><span class="title">AUS</span> +61 2 8005 8080</a>
            </div>
            <div class="flex-3">
            </div>
          </div>
          <div class="last-block">
            <ul class="faddress-col">
              <li><strong>Gurugram :</strong> 2nd Floor, 55P, Sector 44, Gurugram 122003, Haryana</li>
              <li><strong>Noida :</strong> 3rd Floor, Fusion Square, 5A &amp; 5B, Sector 126, Noida 201303</li>
              <li><strong>US :</strong> 5900 Balcones Drive, STE 100, Austin , TX 78731, USA</li>
              <li><strong>UK :</strong> 167-169 Great Portland Street, 5th Floor, London W1W 5PF, United Kingdom</li>
              <li><strong>UAE :</strong> Central One District, C1 Building, Level 1, Dubai World Trade Centre, Level 1 P.O.Box 114142, Dubai, United Arab Emirates</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    </div>
    <?php require_once '../include/footer.php'; ?>
    <script src="../js/form-validation.js"></script>
    <script>
      var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","zMonaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
      function autocomplete(inp, arr) {
      var currentFocus;
      inp.addEventListener("input", function(e) {
        var a, b, i, val = this.value;
        closeAllLists();
        if (!val) { return false;}
        currentFocus = -1;
        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        this.parentNode.appendChild(a);
        for (i = 0; i < arr.length; i++) {
          var re = new RegExp(val, 'i');
          if (arr[i].match(re))
           {
            b = document.createElement("DIV");
            b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
            b.innerHTML += arr[i].substr(val.length);
            b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
            b.addEventListener("click", function(e) {
                inp.value = this.getElementsByTagName("input")[0].value;
                closeAllLists();
            });
            a.appendChild(b);
          }
        }
      });
      inp.addEventListener("keydown", function(e) {
        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40) {
          currentFocus++;
          addActive(x);
        } else if (e.keyCode == 38) { //up
          currentFocus--;
          addActive(x);
        } else if (e.keyCode == 13) {
          e.preventDefault();
          if (currentFocus > -1) {
            if (x) x[currentFocus].click();
          }
        }
      });
      function addActive(x) {
      if (!x) return false;
      removeActive(x);
      if (currentFocus >= x.length) currentFocus = 0;
      if (currentFocus < 0) currentFocus = (x.length - 1);
      x[currentFocus].classList.add("autocomplete-active");
      }
      function removeActive(x) {
      for (var i = 0; i < x.length; i++) {
        x[i].classList.remove("autocomplete-active");
      }
      }
      function closeAllLists(elmnt) {
      var x = document.getElementsByClassName("autocomplete-items");
      for (var i = 0; i < x.length; i++) {
        if (elmnt != x[i] && elmnt != inp) {
          x[i].parentNode.removeChild(x[i]);
        }
      }
      }
      document.addEventListener("click", function (e) {
        closeAllLists(e.target);
      });
      }
      autocomplete(document.getElementById("cont_country"), countries);
    </script>
    <script>
      let hasHomeaslder = document.getElementById("contact-slider");
      if (hasHomeaslder) {
          window.addEventListener("load", function() {
              document.querySelector(".contact-slider .glider").addEventListener("glider-slide-visible",
                  function(event) {
                      var glider = Glider(this);
                  });
              document.querySelector(".contact-slider .glider").addEventListener("glider-slide-hidden",
                  function(event) {});
              document.querySelector(".contact-slider .glider").addEventListener("glider-refresh", function(
                  event) {});
              document.querySelector(".contact-slider .glider").addEventListener("glider-loaded", function(
                  event) {});
              window._ = new Glider(document.querySelector(".contact-slider .glider"), {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  draggable: true,
                  scrollLock: false,
                  dots: ".contact-us-section .dots",
                  dragDistance: false,
              });
      
      
      
          });
      
      
      
      
      }
      
      
    </script>
  </body>
</html>