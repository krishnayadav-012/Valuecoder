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
    <link rel="preload stylesheet" type="text/css" href="./css/contact-usv9.css" defer />
    <link rel="preload stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.1/css/glide.core.css" defer />
    <!-- add -->
    <link rel="preload stylesheet" type="text/css" href="css/form-county.css" defer/>
    <link rel="preload stylesheet" type="text/css" href="css/nice-select2.css" />
    <script src="/valuecoders-v2/js/intlTelInput.js"></script>
    <script src="/valuecoders-v2/js/select-bx.js"></script>
  </head>
  <body id="themeAdd">
    <section class="contact-us-section full-width-form padding-t-150 padding-b-150">
      <div class="container">
        <div class="dis-flex form-outer">
          <div class="form-left">
            <div class="bg-voilet">
              <div class="form-box-outer right-box">
                <div class="lf-top">
                  <div class="head-txt">
                    <div class="logo-box"><a href="https://www.valuecoders.com"></a></div>
                    <div class="head-box">
                      <h1>Get In Touch</h1>
                      <p>Our consultants will respond back within 8 business hours or less.</p>
                    </div>
                  </div>
                  <div class="lf-right"> <img loading="lazy" src="images/lf-01.svg" alt="pixel" width="94" height="84"><img loading="lazy" src="images/lf-02.svg" alt="pixel" width="95" height="84">
                  </div>
                </div>
                <div class="soc-box dis-flex items-center">
                  <a href="https://www.valuecoders.com/contact"><i><img loading="lazy" src="images/soc-01.svg" alt="valuecoders" width="20" height="20"></i><span>Book A Call</span></a>
                  <a href="https://wa.me/918882108080"><i><img loading="lazy" src="images/soc-02.svg" alt="valuecoders" width="20" height="20"> </i><span>WhatsApp</span></a>
                  <a href="#"><i><img loading="lazy" src="images/soc-03.svg" alt="valuecoders" width="20" height="20"></i><span>Email us</span></a>
                </div>
                <form action="https://www.valuecoders.com/sendmail1.php" enctype="multipart/form-data" method="POST" id="contact-form-section" onsubmit="if (!window.__cfRLUnblockHandlers) return false; return vcCmnFormValidation();">
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
                          <div class="lbl-row-new">
                            <label id="lbl-requirement">
                              <div class="info-wrap">
                                How can we help?*
                                <div class="info-tip">
                                  <div class="info-content">
                                    <h4>What happens after you contact us? </h4>
                                    <p>Our solution experts will answer your questions in a
                                      secure online meeting.
                                    </p>
                                    <a class="kmore" href="https://www.valuecoders.com/hire-developers/7-day-trial">Know More</a>
                                  </div>
                                </div>
                              </div>
                            </label>
                          </div>
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
          <div class="right-contactbox">
            <p>Trusted by startups and Fortune 500 companies</p>
            <div class="row-box">
              <div class="col-box dis-flex">
                <div class="icon"><img loading="lazy" src="images/cont-01.svg" alt="pixel" width="40" height="40"></div>
                <div class="desp">
                  <h4>19+ years of experience</h4>
                  <p>We can handle projects of all complexities.</p>
                </div>
              </div>
              <div class="col-box dis-flex">
                <div class="icon"><img loading="lazy" src="images/cont-02.svg" alt="pixel" width="40" height="40"></div>
                <div class="desp">
                  <h4>2500+ satisfied customers</h4>
                  <p>Startups to Fortune 500, we have worked with all.</p>
                </div>
              </div>
              <div class="col-box dis-flex">
                <div class="icon"><img loading="lazy" src="images/cont-03.svg" alt="pixel" width="40" height="40"></div>
                <div class="desp">
                  <h4>675+ in-house team</h4>
                  <p>Top 1% industry talent to ensure your digital success.</p>
                </div>
              </div>
            </div>


           <div class="client-section">
            <div class="client-row">
              <div class="client-stack award-animate-slide-to-left hover:pause">
                <ul>
                  <li>
                    <picture>
                      <img loading="lazy" src="images/cont-cl01.svg" alt="Valuecoders" width="55" height="22">
                    </picture>
                  </li>
                  <li>
                    <picture>
                      <img loading="lazy" src="images/cont-cl02.svg" alt="Valuecoders" width="78" height="22">
                    </picture>
                  </li>
                  <li>
                    <picture>
                      <img loading="lazy" src="images/cont-cl03.svg" alt="Valuecoders" width="80" height="13">
                    </picture>
                  </li>
                  <li>
                    <picture>
                      <img loading="lazy" src="images/cont-cl04.svg" alt="Valuecoders" width="81" height="20">
                    </picture>
                  </li>
                  <li>
                    <picture>
                    <img loading="lazy" src="images/cont-cl05.svg" alt="Valuecoders" width="86" height="28">
                    </picture>
                  </li>
                  <li>
                    <picture>
                      <img loading="lazy" src="images/cont-cl06.svg" alt="Valuecoders" width="82" height="29">
                    </picture>
                  </li>
                  <li>
                    <picture>
                      <img loading="lazy" src="images/cont-cl07.svg" alt="Valuecoders" width="76" height="17">
                    </picture>
                  </li>
                  <li>
                    <picture>
                      <img loading="lazy" src="images/cont-cl01.svg" alt="Valuecoders" width="55" height="22">
                    </picture>
                  </li>
                </ul>
              </div>
            </div>

            <!--
            <div class="client-row">
              <div class="client-stack award-animate-slide-to-right hover:pause">
              <ul>
                  <li>
                    <picture>
                      <img loading="lazy" src="images/cont-cl08.svg" alt="Valuecoders" width="77" height="19">
                    </picture>
                  </li>
                  <li>
                    <picture>
                      <img loading="lazy" src="images/cont-cl09.svg" alt="Valuecoders" width="86" height="14">
                    </picture>
                  </li>
                  <li>
                    <picture>
                      <img loading="lazy" src="images/cont-cl10.svg" alt="Valuecoders" width="72" height="36">
                    </picture>
                  </li>
                  <li>
                    <picture>
                      <img loading="lazy" src="images/cont-cl11.svg" alt="Valuecoders" width="81" height="21">
                    </picture>
                  </li>
                  <li>
                    <picture>
                    <img loading="lazy" src="images/cont-cl12.svg" alt="Valuecoders" width="67" height="25">
                    </picture>
                  </li>
                  <li>
                    <picture>
                      <img loading="lazy" src="images/cont-cl13.svg" alt="Valuecoders" width="82" height="20">
                    </picture>
                  </li>
                  <li>
                    <picture>
                      <img loading="lazy" src="images/cont-cl14.svg" alt="Valuecoders" width="81" height="22">
                    </picture>
                  </li>
                  <li>
                    <picture>
                      <img loading="lazy" src="images/cont-cl15.svg" alt="Valuecoders" width="85" height="22">
                    </picture>
                  </li>
                </ul>
              </div>
            </div>-->
            
          </div>


          </div>
        </div>
      </div>
    </section>
   
    <section class="address-details bg-light padding-t-120 padding-b-120">
      <div class="container">
        <div class="head-txt text-center">
          <h2>Serving Clients in 38+ Countries</h2>
          <p>We are making an impact worldwide with our global presence and exceptional software solutions.
          </p>
        </div>
        <div class="dis-flex add-flex">
          <div class="left-column">
            <div class="flex-wrap">
              <div class="dis-flex phone-box">
                <div class="country"><img loading="lazy" src="images/vflag-01.svg" alt="valuecoders" width="25" height="25">India</div>
                <div class="phone"><a href="tel:+918882108080">+91 888 210 8080 <span>(Sales)</span></a>
                  <a href="tel:+917042020782">+91 704 202 0782 <span>(HR)</span></a>
                </div>
              </div>
            </div>
            <div class="flex-wrap">
              <div class="dis-flex phone-box">
                <div class="country"><img loading="lazy" src="images/vflag-02.svg" alt="valuecoders" width="25" height="25">USA</div>
                <div class="phone"><a href="tel:+1 415 230 0123">+1 415 230 0123</a>
                </div>
              </div>
            </div>
            <div class="flex-wrap">
              <div class="dis-flex phone-box">
                <div class="country"><img loading="lazy" src="images/vflag-03.svg" alt="valuecoders" width="25" height="25">UK</div>
                <div class="phone"><a href="tel:+44 20 3239 2299">+44 20 3239 2299</a>
                </div>
              </div>
            </div>
            <div class="flex-wrap">
              <div class="dis-flex phone-box">
                <div class="country"><img loading="lazy" src="images/vflag-04.svg" alt="valuecoders" width="25" height="25">UAE</div>
                <div class="phone"><a href="tel:+44 20 3239 2299">+44 20 3239 2299</a>
                </div>
              </div>
            </div>
            <div class="flex-wrap">
              <div class="dis-flex phone-box">
                <div class="country"><img loading="lazy" src="images/vflag-05.svg" alt="valuecoders" width="25" height="25">AUS</div>
                <div class="phone"><a href="tel:+61 2 8005 8080">+61 2 8005 8080</a>
                </div>
              </div>
            </div>
          </div>
          <div class="right-column">
            <div class="address-row dis-flex">
              <div class="address-col two-line">
                <span class="bold">Gurugram: </span>
                <p>10th Floor, Tower-B, Unitech Cyber Park, Sector - 39, Gurugram, Haryana- 122001</p>
              </div>
              <div class="address-col two-line">
                <span class="bold">Noida: </span>
                <p>11th Floor, Max Square, Noida-Greater Noida Expy, Sector 129, Noida, Uttar Pradesh 201304</p>
              </div>
            </div>
            <div class="address-row">
              <div class="address-col">
                <span class="bold">USA:  </span>
                <p>5900 Balcones Drive, STE 100, Austin , TX 78731, USA</p>
              </div>
            </div>
            <div class="address-row">
              <div class="address-col">
                <span class="bold">UK: </span>
                <p>167-169 Great Portland Street, 5th Floor, London W1W 5PF, United Kingdom</p>
              </div>
            </div>
            <div class="address-row">
              <div class="address-col">
                <span class="bold">UAE: </span>
                <p>541, 8W, Level 5, Dubai Airport Free Zone, Dubai, United Arab Emirates</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php require_once '../include/footer.php'; ?>
    <script src="../js/form-validation.js"></script>
    <script defer src="https://www.valuecoders.com/wp-content/themes/valuecoders/js/glider.min-v2.js?ver=11.22.1" id="vc-glider-js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.1/glide.js"></script>
    <script>
            new Glide('.logoslide', {
                             type: 'carousel',
                             autoplay: 1,
                             animationDuration: 10000,
                             animationTimingFunc: 'linear',
                             gap: 0,
                             startAt: 0,
                             perView: 1 }).
                           mount();
                           //# sourceURL=pen.js
      
      
      
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