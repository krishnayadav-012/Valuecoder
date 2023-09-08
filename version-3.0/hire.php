<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preload stylesheet" type="text/css" href="./css-3.0/hire.3.0.css" defer />

</head>
<body>
<?php 
            require_once './include/menu-v3.12.php'; // For Blog & Case Studies
            //require_once '../include/menu-v3.12inner.php'; // for Inner pages
            ?>
    <section class="hire-soft-banner">
 
            <div class="container">
            <div class="breadcrumbs">
		<a href="https://www.valuecoders.com/v2wp">Home</a>Hire Software Developers		</div>
        <div class="row-flex">
            <div class="col5">
                <ul>
                    <li>
                        <picture>
                            <img src="./images/bnr-img1.png" alt="">
                        </picture>
                    </li>
                    <li>
                        <picture>
                            <img src="./images/bnr-img2.png" alt="">
                        </picture>
                    </li>
                    <li>
                        <picture>
                            <img src="./images/bnr-img3.png" alt="">
                        </picture>
                    </li>
                    <li>
                        <picture>
                            <img src="./images/bnr-img4.png" alt="">
                        </picture>
                    </li>
                </ul>
                <div class="banner-heading">
                    <h2>Hire <span>Software Developers</span> In India</h2>
                    <p>Top 1% Pre-Vetted, In-house & Dedicated Software Programmers</p>
                </div>
                <p>We are an India-based software development firm offering software developers/programmers for hire on an hourly, part-time, or monthly basis. ValueCoders is your go-to partner if you want to work with the best programming talent and want it to be part of your software development team. As per your project requirements, hire India’s best ready-to-join software developers trained to follow quality development practices.</p>
                <ul class="list">
                    <li>Language/time zone compatibility</li>
                    <li>No employment regulatory liability</li>
                    <li>No recruitment expenses</li>
                    <li>Quick on-boarding</li>
                </ul>
            </div>
            <div class="col5">
            <div class="form-right-box">
              <div class="head">
                <h3>Build Your Remote Team</h3>
                <p>Get 2 week risk-free trial <span class="open-free-trial"></span></p>
              </div>
              <div class="top-right-form-box">
                <form id="contact-form-section" action="https://www.valuecoders.com/sendmail1.php"
                  class="contact-form-section" enctype="multipart/form-data" method="POST">
                  <div class="form-inner dis-flex">
                    <div class="form-text-cont">
                      <div class="lbl-row">
                        <label for="cont_name">Full Name*</label>
                      </div>
                      <div class="user-input verror">
                        <input type="text" autocomplete="off" id="cont_name" placeholder="Full Name"
                          class="input-field" value="" name="user-name">
                        <small>Please Fill Name</small>
                      </div>
                    </div>
                    <div class="form-text-cont">
                      <div class="lbl-row">
                        <label for="cont_email">Email Address*</label>
                      </div>
                      <div class="user-input">
                        <input type="text" autocomplete="off" id="cont_email"
                          placeholder="Email Address" class="input-field" value=""
                          name="user-email">
                        <small>Error Message</small>
                      </div>
                    </div>
                    <div class="form-text-cont">
                      <div class="lbl-row">
                        <label for="cont_phpne">Phone no*</label>
                      </div>
                      <div class="user-input">
                        <input type="text" autocomplete="off" class="input-field" id="cont_phpne"
                          placeholder="Phone Number" value="" name="user-phone">
                        <small>Please Fill Phone</small>
                      </div>
                    </div>
                    <div class="form-text-cont cont_country_section">
                      <div class="lbl-row">
                        <label for="cont_country">Country*</label>
                      </div>
                      <div class="user-input">
                        <input class="input-field input-skype" autocomplete="off" id="cont_country"
                          type="text" placeholder="Country" value="" name="user-country">
                        <small>Please Fill Country</small>
                        <!-- country box -->
                        <div id="cont_countryautocomplete-list" class="autocomplete-items has-data">
                          <div><strong>A</strong>fghanistan<input type="hidden"
                            value="Afghanistan"></div>
                          <div><strong>A</strong>lbania<input type="hidden" value="Albania"></div>
                          <div><strong>A</strong>lgeria<input type="hidden" value="Algeria"></div>
                          <div><strong>A</strong>ndorra<input type="hidden" value="Andorra"></div>
                          <div><strong>A</strong>ngola<input type="hidden" value="Angola"></div>
                          <div><strong>A</strong>nguilla<input type="hidden" value="Anguilla">
                          </div>
                          <div><strong>A</strong>ntigua &amp; Barbuda<input type="hidden"
                            value="Antigua &amp; Barbuda"></div>
                          <div><strong>A</strong>rgentina<input type="hidden" value="Argentina">
                          </div>
                          <div><strong>A</strong>rmenia<input type="hidden" value="Armenia"></div>
                          <div><strong>A</strong>ruba<input type="hidden" value="Aruba"></div>
                          <div><strong>A</strong>ustralia<input type="hidden" value="Australia">
                          </div>
                          <div><strong>A</strong>ustria<input type="hidden" value="Austria"></div>
                          <div><strong>A</strong>zerbaijan<input type="hidden" value="Azerbaijan">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="textarea-box">
                      <div class="form-text-cont width-full">
                        <div class="lbl-row">
                          <label for="cont_brief">Project Brief</label>
                        </div>
                        <div class="user-input verror">
                          <textarea class="input-field comment-input" autocomplete="off"
                            id="user-req" placeholder="Enter your Project Brief"
                            name="user-req"></textarea>
                          <small>Please Fill Requirement</small>
                          <div class="drop-input attachment_brw" id="uploadcontact">
                            <div id="dropcontact"></div>
                          </div>
                          <div id="drop-area" class="drop-area">
                            <input type="file" name="files[]" id="fileElem" class="fileElem"
                              multiple
                              accept="image/*,application/pdf,.psd,.zip,.docx,.xlsx,.xls,.txt"
                              onchange="if (!window.__cfRLUnblockHandlers) return false; handleFiles(this.files)"
                              data-cf-modified-a09047a294114ce6b67051e1-="">
                            <button class="button" id="browse-btn" type="button"
                              onclick="if (!window.__cfRLUnblockHandlers) return false; document.getElementById('fileElem').click()"
                              data-cf-modified-a09047a294114ce6b67051e1-="">BROWSE | DROP
                            FILES HERE</button>
                            <input type="hidden" name="up-counter" id="uplcounter" value="0">
                            <progress style="display: none;" id="progress-bar" max=100
                              value=0></progress>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="gloader" class="gal-loader show-me active">
                    <div class="loader"></div>
                    <div id="gallery" class="gallery">
                      <div>
                        <img src="https://www.valuecoders.com/wp-content/themes/valuecoders/dev-img/def-thumb.png"
                          height="55" width="55">
                        <button type="button" onclick="return removeMe(this,this.value);"
                          value="1662016272_agile-dev-img-1.jpg,">X</button>
                      </div>
                    </div>
                  </div>
                  <div class="user-input checkout text-center">
                    <input type="hidden" name="Uploadedfilename" id="Uploadedfilename" value="">
                    <input type="hidden" name="frmqueryString" value="">
                    <input type="hidden" name="page_url" value="https://www.valuecoders.com/">
                    <input type="hidden" name="vc_csrf" value="">
                    <button type="submit" id="submitButton" class="checkout-submit green-bdr-btn"
                      value="Hire Software Developers ">Hire Software Developers <i
                      class="arrow-icon green"></i></a></button>
                  </div>
                </form>
              </div>
            </div>
            </div>
        </div>
            </div>
    </section>
<div id="has-tpa" class="client-logo-box-section dis-flex items-center justify-sb">
<div class="container">
<div class="dis-flex">
<div class="logo-heading">
<h4>Trusted by startups<br> and Fortune 500 companies</h4>
</div>
<div class="logo-box-outer dis-flex">
<div class="logo-box logo1"></div>
<div class="logo-box logo2"></div>
<div class="logo-box logo3"></div>
<div class="logo-box logo4"></div>
<div class="logo-box logo5"></div>
<div class="logo-box logo6"></div>
<div class="logo-box logo7"></div>
<div class="logo-box logo8"></div>
</div>
</div>
</div>
</div>
<section class="why-hire">
    <div class="container">
    <div class="heading">
    <h2>Why Hire Developers From ValueCoders?</h2>
    <p>If you aspire to accelerate business growth using cutting-edge software, our Indian software programmers and developers can transform your vision into reality. Hire a software programmer from us and get tailored solutions that grow your business by improving overall ROI, enhancing productivity, and slashing operational costs.</p>
    </div>

    <div class="row">
    <div class="col5">
        <h4>High quality/cost ratio</h4>
        <ul>
            <li>
                    <h5>Hire Silicon Valley caliber at half the cost</h5>
                    <p>Hire the top 1% of 1.5 million+ developers from 150+ countries who have applied to Turing.</p>
            </li>
            <li>
                    <h5>100+ skills available</h5>
                    <p>Hire the top 1% of 1.5 million+ developers from 150+ countries who have applied to Turing.</p>
            </li>
            <li>
                    <h5>Zero risk (2 weeks risk )</h5>
                    <p>If you decide to stop within two weeks, you pay nothing.</p>
            </li>
        </ul>
    </div>
    <div class="col5">
        <picture>
            <img src="./images/tech.png" alt="">
        </picture>
    </div>

    </div>
    <div class="row">
    <div class="col5">
        <picture>
            <img src="./images/tech2.png" alt="">
        </picture>
    </div>
    <div class="col5">
        <h4>Rigorous Vetting</h4>
        <ul>
            <li>
                    <h5>5+ hours of tests and interviews</h5>
                    <p>More rigorous than Silicon Valley job interviews. We test for 100+ skills, data structures, algorithms, systems design, software specializations & frameworks.</p>
            </li>
            <li>
                    <h5>Seniority tests</h5>
                    <p>We select excellent communicators who can proactively take ownership of business and product objectives without micromanagement.</p>
            </li>
            
        </ul>
    </div>


    </div>
    <div class="row">
    <div class="col5">
        <h4>Effective collaboration</h4>
        <ul>
            <li>
                    <h5>Daily updates</h5>
                    <p>Turing’s Workspace gives you even more visibility into your remote developer’s work with automatic time tracking & virtual daily stand-ups.</p>
            </li>
            <li>
                    <h5>Easy to manage</h5>
                    <p>High visibility makes Turing developers easy to manage and ensures that they constantly work on what’s most valuable to you.</p>
            </li>
            
        </ul>
    </div>
    <div class="col5">
        <picture>
            <img src="./images/tech3.png" alt="">
        </picture>
    </div>

    </div>
    </div>
</section>

<section class="tech-stack-updated-section bg-gray padding-t-150 padding-b-150 for-tech-icons">
      <div class="container">
      <div class="heading">
    <h2>Our Diverse Technology Competency</h2>
    <p>ValueCoders is dedicated to engineering optimal technology solutions that augment overall gains for our global clients. We have a strong team of software programmers experienced in diverse technology sets ranging from mobility, web development, Blockchain, AI, and more, fulfilling all your development needs. Take a look at the core technologies our developers hold comprehensive expertise in.</p>
    </div>
    <div class="tab-nav">
			<a href="javascript:void(0);" id="hptechnology" onclick="swapTabTechnology('hptechnology', 'hprole')" class="tab-link is-active">Technology</a>
			<a href="javascript:void(0);" id="hprole" onclick="swapTabTechnology('hprole', 'hptechnology')" class="tab-link">By Role</a>
		</div>

        <div class="dis-flex col-box-outer for-tech-stack-icon">
          <div class="flex-2 col-box ">
            <div class="logo-box for-box-effect">
              <div class="content-box">
                <h3>
                  <a href="https://www.valuecoders.com/v2wp/hire-developers/hire-backend-developers">Backend</a>
                </h3>
              </div>
             <ul>
                        <li class="icon-box">
                           <a href="" class="text"> Angular</a>
                        </li>
                        <li class="icon-box">
                           <a href="" class="text">Angular</a>
                        </li>
                        <li class="icon-box">
                           <a href="" class="text">Angular</a>
                        </li>
                        <li class="icon-box">
                           <a href="" class="text">Angular</a>
                        </li>
                     </ul>
            </div>
          </div>
          <div class="flex-2 col-box ">
            <div class="logo-box for-box-effect">
              <div class="content-box">
                <h3>
                  <a href="https://www.valuecoders.com/v2wp/hire-developers/hire-backend-developers">Backend</a>
                </h3>
              </div>
             <ul>
                        <li class="icon-box">
                           <a href="" class="text"> Angular</a>
                        </li>
                        <li class="icon-box">
                           <a href="" class="text">Angular</a>
                        </li>
                        <li class="icon-box">
                           <a href="" class="text">Angular</a>
                        </li>
                        <li class="icon-box">
                           <a href="" class="text">Angular</a>
                        </li>
                     </ul>
            </div>
          </div>
          <div class="flex-2 col-box ">
            <div class="logo-box for-box-effect">
              <div class="content-box">
                <h3>
                  <a href="https://www.valuecoders.com/v2wp/hire-developers/hire-backend-developers">Backend</a>
                </h3>
              </div>
             <ul>
                        <li class="icon-box">
                           <a href="" class="text"> Angular</a>
                        </li>
                        <li class="icon-box">
                           <a href="" class="text">Angular</a>
                        </li>
                        <li class="icon-box">
                           <a href="" class="text">Angular</a>
                        </li>
                        <li class="icon-box">
                           <a href="" class="text">Angular</a>
                        </li>
                     </ul>
            </div>
          </div>
          <div class="flex-2 col-box ">
            <div class="logo-box for-box-effect">
              <div class="content-box">
                <h3>
                  <a href="https://www.valuecoders.com/v2wp/hire-developers/hire-backend-developers">Backend</a>
                </h3>
              </div>
             <ul>
                        <li class="icon-box">
                           <a href="" class="text"> Angular</a>
                        </li>
                        <li class="icon-box">
                           <a href="" class="text">Angular</a>
                        </li>
                        <li class="icon-box">
                           <a href="" class="text">Angular</a>
                        </li>
                        <li class="icon-box">
                           <a href="" class="text">Angular</a>
                        </li>
                     </ul>
            </div>
          </div>
          <div class="flex-2 col-box ">
            <div class="logo-box for-box-effect">
              <div class="content-box">
                <h3>
                  <a href="https://www.valuecoders.com/v2wp/hire-developers/hire-backend-developers">Backend</a>
                </h3>
              </div>
             <ul>
                        <li class="icon-box">
                           <a href="" class="text"> Angular</a>
                        </li>
                        <li class="icon-box">
                           <a href="" class="text">Angular</a>
                        </li>
                        <li class="icon-box">
                           <a href="" class="text">Angular</a>
                        </li>
                        <li class="icon-box">
                           <a href="" class="text">Angular</a>
                        </li>
                     </ul>
            </div>
          </div>
          <div class="flex-2 col-box ">
            <div class="logo-box for-box-effect">
              <div class="content-box">
                <h3>
                  <a href="https://www.valuecoders.com/v2wp/hire-developers/hire-backend-developers">Backend</a>
                </h3>
              </div>
             <ul>
                        <li class="icon-box">
                           <a href="" class="text"> Angular</a>
                        </li>
                        <li class="icon-box">
                           <a href="" class="text">Angular</a>
                        </li>
                        <li class="icon-box">
                           <a href="" class="text">Angular</a>
                        </li>
                        <li class="icon-box">
                           <a href="" class="text">Angular</a>
                        </li>
                     </ul>
            </div>
          </div>

        </div>
      </div>
    </section>
    <section class="free-trail">
        <div class="container">
           <div class="heading">
           <h2>Hire Top 1% Software Developers</h2>
            <p>95%+ of our clients give us either a Raving Fan or Most Satisfied Rating. Hire your offshore team with us today!</p>
           </div>
           <div class="text-center margin-t-50">
        <a class="green-btn" href="#">Start Your 2 Weeks Free Trial Now<i class="arrow-icon"></i>
		</a>
        </div>
        </div>
    </section>
    <section class="sftwre-serv">
      <div class="sftwre-dev">
                <div class="content">
                <h2>Why Hire Software Developers 
In India?</h2>
                <p class="serv-text">India is a global hub of IT talent, so hiring talented developers from India has many benefits</p>
                
                </div>
                <picture>
					<img loading="lazy" src="./images/hire-soft-dev.png" alt=""> 
				</picture>
      </div>
    
      <div class="sftwre-prdct">
        <div class="content">
          <h4>A Pool of Expert Developers</h4>
          <p class="serv-text">When you decide to hire software developers in India, you actually get access to a large pool of certified & talented, software programmers</p>
        </div>
        <ul>
          <li class="accordin-list">
            <h5 class="accordionItem">English Speaking Programmers <span class="accordionItem"></span></h5>
            <p class="accordin-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita hic aliquam ratione accusamus voluptatem ut, porro ad quo modi earum minus dicta quidem, recusandae quaerat cupiditate! Perspiciatis repudiandae vero accusantium!</p>
          </li>
          <li class="accordin-list">
            <h5 class="accordionItem">Flexible Work Hours <span class="accordionItem"></span></h5>
            <p class="accordin-text">  Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita hic aliquam ratione accusamus voluptatem ut, porro ad quo modi earum minus dicta quidem, recusandae quaerat cupiditate! Perspiciatis repudiandae vero accusantium!</p>
          </li>
          <li class="accordin-list">
            <h5 class="accordionItem">Rapid Onboarding Process <span class="accordionItem"></span></h5>
            <p class="accordin-text">  Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita hic aliquam ratione accusamus voluptatem ut, porro ad quo modi earum minus dicta quidem, recusandae quaerat cupiditate! Perspiciatis repudiandae vero accusantium!</p>
          </li>
          <li class="accordin-list">
            <h5 class="accordionItem">Expertise with Most Top Technologies <span class="accordionItem"></span></h5>
            <p class="accordin-text">   Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita hic aliquam ratione accusamus voluptatem ut, porro ad quo modi earum minus dicta quidem, recusandae quaerat cupiditate! Perspiciatis repudiandae vero accusantium!</p>
          </li>
          <li class="accordin-list">
            <h5 class="accordionItem">Reliable Partner Credentials <span class="accordionItem"></span></h5>
<p class="accordin-text clas">  Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita hic aliquam ratione accusamus voluptatem ut, porro ad quo modi earum minus dicta quidem, recusandae quaerat cupiditate! Perspiciatis repudiandae vero accusantium!</p>
          </li>
          
        </ul>
      </div>

    </section>
    <section class="we-have-worked">
<div class="row-flex">
  
  <div class="col2">
    <div class="content">
      <h2>Top Companies World Wide Trust ValueCoders For Hiring Software Developers</h2>
      <p>We have helped companies of all sizes and industries set up offshore software development teams. From startups to software companies and digital transformation agencies – you name it! Here, you can get a glimpse of some of our satisfied clients. We provide them with:</p>
    </div>
   <div class="flx">
   <ul>
      <li>Client-Centric Approach</li>
      <li>Best-In-Class Project Management</li>
      <li>Global Quality Standards</li>
      
    </ul>
    <ul>
      <li>Cost-effective solutions</li>
      <li>Time-zone compatibility</li>
    
    </ul>
   </div>
  </div>
  <div class="col1">
    <picture>
      <img src="./images/we-have-wrked.png" alt="">
    </picture>
  </div>
</div>
  </section>
  <section class="free-trail">
        <div class="container">
           <div class="heading">
           <h2>Access top software developers to achieve new milestones</h2>
            <p>Get access to an exclusive pool of the most talented software developers to develop a variety of applications</p>
           </div>
           <div class="text-center margin-t-50">
        <a class="green-btn" href="#">Hire Software Experts<i class="arrow-icon"></i>
		</a>
        </div>
        </div>
    </section>
<section class="hire-process">
    <div class="container">
    <div class="heading">
    <h2>Our Hiring Process</h2>
    <p>Hire the best Sitecore developers from ValueCoders to get the best solutions by following a simple process.</p>
    </div>
    <div class="row">
        <div class="col4">
        <div class="card">
            <picture>
                <img src="./images/hire-process1.png" alt="">
            </picture>
            <h4>Inquiry</h4>
            <p>We get on a call to understand your requirements and evaluate mutual fitment.</p>
            <span>Step 1</span>
        </div>
        </div>
        <div class="col4">
        <div class="card">
            <picture>
                <img src="./images/hire-process2.png" alt="">
            </picture>
            <h4>Select Sitecore Developers</h4>
            <p>We give you access to our 100+ skilled Sitecore developers to personally interview and select the best candidate for your team.</p>
            <span>Step 2</span>
        </div>
        </div>
        <div class="col4">
        <div class="card">
            <picture>
                <img src="./images/hire-process3.png" alt="">
            </picture>
            <h4>Team Integration</h4>
            <p>Our developers are now a part of your team. Assign tasks and receive daily updates for seamless collaboration and accountability.</p>
            <span>Step 3</span>
        </div>
        </div>
        <div class="col4">
        <div class="card lst">
            <picture>
                <img src="./images/hire-process4.png" alt="">
            </picture>
            <h4>Team Scaling</h4>
            <p>We provide you with the flexibility to scale your team, whether it be expanding or reducing team size.</p>
            <span>Step 4</span>
        </div>
        </div>
    </div>
    </div>
</section>
<section class="tab-scroll-section padding-t-150 padding-b-150 bg-dark-theme">
         <div class="container">
            <div class="head-txt text-center">
               <h2>Lorem ipsum dolor sit amet, consectetuer</h2>
               <p>Adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna <br> nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
            </div>
            <div id="tabs1" class="dis-flex margin-t-100 tab-contents no-js">
               <div class="left-tabs">
                  <div class="sticky-tab">
                     <span class="tab-head clr-white">Guide Topics</span>
                     <div class="tab-nav">
                        <a href="#" class="tab-link is-active">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</a>
                        <a href="#" class="tab-link">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia</a>
                        <a href="#" class="tab-link">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas</a>
                        <a href="#" class="tab-link">Minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</a>
                        <a href="#" class="tab-link">Nim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia</a>
                        <a href="#" class="tab-link">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia</a>
                        <a href="#" class="tab-link">Psdm mollit non deserunt ullamco est sit aliqua dolor do amet sint.</a>
                        <a href="#" class="tab-link">Minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat.</a>
                        <a href="#" class="tab-link">Psdm mollit non deserunt ullamco est sit aliqua dolor do amet sint.</a>
                        <a href="#" class="tab-link">Psdm mollit non deserunt ullamco est sit aliqua dolor do amet sint.</a>
                        <a href="#" class="tab-link">Psdm mollit non deserunt ullamco est sit aliqua dolor do amet sint.</a>
                        <a href="#" class="tab-link">Psdm mollit non deserunt ullamco est sit aliqua dolor do amet sint.</a>
                        <a href="#" class="tab-link">Psdm mollit non deserunt ullamco est sit aliqua dolor do amet sint.</a>
                        <a href="#" class="tab-link">Psdm mollit non deserunt ullamco est sit aliqua dolor do amet sint.</a>
                     </div>
                  </div>
               </div>
               <div  class="right-tabs">
                  <div class="tab-content is-active">
                     <span class="tab-sub-head clr-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                     <h3><em>Lorem ipsum dolor sit amet, consectetur adipiscing elitMaecenas.</em></h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a elit congue eros malesuada posuere et a nibh. <span class="clr-white">Aliquam faucibus aliquam justo,</span> at fermentum lectus lacinia ut. Nam luctus enim ac ipsum venenatis viverra. Quisque eget egestas odio. Mauris iaculis ex ac finibus bibendum. Maecenas nec porta dui.</p>
                     <p>Proin lobortis pellentesque magna, ut posuere erat venenatis vel. Nunc gravida sagittis quam, vitae viverra metus sollicitudin eu. Fusce non elit id neque suscipit porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. In ut massa ipsum. Etiam nisl sapien, tristique non porttitor a, ornare scelerisque eros. Nullam malesuada, sapien ac fringilla consequat, risus massa mollis nunc, eget lacinia mi lacus sit amet leo. Sed enim libero, porta id mauris at, laoreet fringilla orci. Sed venenatis urna quis leo vulputate cursus. Vestibulum eget nunc non eros ornare fringilla et et ante.</p>
                     <p>Sit amet porta eros sagittis ut. Cras venenatis nisi enim, eu pellentesque nulla porta et. Sed convallis varius lorem. Donec lacus eros, convallis at consequat ut, commodo in est. Curabitur eleifend dictum nunc dignissim placerat. Cras facilisis justo non tempor accumsan.Cras venenatis nisi enim, eu pellentesque nulla porta et. Sed convallis varius lorem. Donec lacus eros, convallis at consequat ut,</p>
                     <h3>Nullam consectetur, felis quis consequat luctus, felis?</h3>
                     <p>Sit amet porta eros sagittis ut. Cras venenatis nisi enim, eu pellentesque;</p>
                     <ul>
                        <li>Nunc dignissim risus id metus.</li>
                        <li>Cras ornare tristique elit.</li>
                        <li>Praesent placerat risus quis eros.</li>
                        <li>Integer vitae libero ac risus egestas placerat.</li>
                     </ul>
                     <p>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</p>
                  </div>
                  <div class="tab-content">
                     <h3>Nullam consectetur, felis quis consequat luctus, felis?</h3>
                     <p>Sit amet porta eros sagittis ut. Cras venenatis nisi enim, eu pellentesque;</p>
                     <ul>
                        <li>Nunc dignissim risus id metus.</li>
                        <li>Cras ornare tristique elit.</li>
                        <li>Praesent placerat risus quis eros.</li>
                        <li>Integer vitae libero ac risus egestas placerat.</li>
                     </ul>
                     <p>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</p>
                  </div>
                  <div class="tab-content">
                     <span class="tab-sub-head">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                     <h3><em>Lorem ipsum dolor sit amet, consectetur adipiscing elitMaecenas.</em></h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a elit congue eros malesuada posuere et a nibh. <span class="clr-white">Aliquam faucibus aliquam justo,</span> at fermentum lectus lacinia ut. Nam luctus enim ac ipsum venenatis viverra. Quisque eget egestas odio. Mauris iaculis ex ac finibus bibendum. Maecenas nec porta dui.</p>
                     <p>Proin lobortis pellentesque magna, ut posuere erat venenatis vel. Nunc gravida sagittis quam, vitae viverra metus sollicitudin eu. Fusce non elit id neque suscipit porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. In ut massa ipsum. Etiam nisl sapien, tristique non porttitor a, ornare scelerisque eros. Nullam malesuada, sapien ac fringilla consequat, risus massa mollis nunc, eget lacinia mi lacus sit amet leo. Sed enim libero, porta id mauris at, laoreet fringilla orci. Sed venenatis urna quis leo vulputate cursus. Vestibulum eget nunc non eros ornare fringilla et et ante.</p>
                  </div>
                  <div class="tab-content">
                     <span class="tab-sub-head">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                     <h3><em>Lorem ipsum dolor sit amet, consectetur adipiscing elitMaecenas.</em></h3>
                     <p>Proin lobortis pellentesque magna, ut posuere erat venenatis vel. Nunc gravida sagittis quam, vitae viverra metus sollicitudin eu. Fusce non elit id neque suscipit porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. In ut massa ipsum. Etiam nisl sapien, tristique non porttitor a, ornare scelerisque eros. Nullam malesuada, sapien ac fringilla consequat, risus massa mollis nunc, eget lacinia mi lacus sit amet leo. Sed enim libero, porta id mauris at, laoreet fringilla orci. Sed venenatis urna quis leo vulputate cursus. Vestibulum eget nunc non eros ornare fringilla et et ante.</p>
                  </div>
                  <div class="tab-content">
                     <span class="tab-sub-head">Nullam ipsum dolor sit amet, consectetur adipiscing elit.</span>
                     <h3><em>Lorem ipsum dolor sit amet, consectetur adipiscing elitMaecenas.</em></h3>
                     <p>Proin lobortis pellentesque magna, ut posuere erat venenatis vel. Nunc gravida sagittis quam, vitae viverra metus sollicitudin eu. Fusce non elit id neque suscipit porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. In ut massa ipsum. Etiam nisl sapien, tristique non porttitor a, ornare scelerisque eros. Nullam malesuada, sapien ac fringilla consequat, risus massa mollis nunc, eget lacinia mi lacus sit amet leo. Sed enim libero, porta id mauris at, laoreet fringilla orci. Sed venenatis urna quis leo vulputate cursus. Vestibulum eget nunc non eros ornare fringilla et et ante.</p>
                  </div>
                  <div class="tab-content">
                     <span class="tab-sub-head">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                     <h3><em>Lorem ipsum dolor sit amet, consectetur adipiscing elitMaecenas.</em></h3>
                     <p>Proin lobortis pellentesque magna, ut posuere erat venenatis vel. Nunc gravida sagittis quam, vitae viverra metus sollicitudin eu. Fusce non elit id neque suscipit porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. In ut massa ipsum. Etiam nisl sapien, tristique non porttitor a, ornare scelerisque eros. Nullam malesuada, sapien ac fringilla consequat, risus massa mollis nunc, eget lacinia mi lacus sit amet leo. Sed enim libero, porta id mauris at, laoreet fringilla orci. Sed venenatis urna quis leo vulputate cursus. Vestibulum eget nunc non eros ornare fringilla et et ante.</p>
                  </div>
                  <div class="tab-content">
                     <span class="tab-sub-head">Nullam ipsum dolor sit amet, consectetur adipiscing elit.</span>
                     <h3><em>Lorem ipsum dolor sit amet, consectetur adipiscing elitMaecenas.</em></h3>
                     <p>Proin lobortis pellentesque magna, ut posuere erat venenatis vel. Nunc gravida sagittis quam, vitae viverra metus sollicitudin eu. Fusce non elit id neque suscipit porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. In ut massa ipsum. Etiam nisl sapien, tristique non porttitor a, ornare scelerisque eros. Nullam malesuada, sapien ac fringilla consequat, risus massa mollis nunc, eget lacinia mi lacus sit amet leo. Sed enim libero, porta id mauris at, laoreet fringilla orci. Sed venenatis urna quis leo vulputate cursus. Vestibulum eget nunc non eros ornare fringilla et et ante.</p>
                  </div>
                  <div class="tab-content">
                     <span class="tab-sub-head">Nullam ipsum dolor sit amet, consectetur adipiscing elit.</span>
                     <h3><em>Lorem ipsum dolor sit amet, consectetur adipiscing elitMaecenas.</em></h3>
                     <p>Proin lobortis pellentesque magna, ut posuere erat venenatis vel. Nunc gravida sagittis quam, vitae viverra metus sollicitudin eu. Fusce non elit id neque suscipit porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. In ut massa ipsum. Etiam nisl sapien, tristique non porttitor a, ornare scelerisque eros. Nullam malesuada, sapien ac fringilla consequat, risus massa mollis nunc, eget lacinia mi lacus sit amet leo. Sed enim libero, porta id mauris at, laoreet fringilla orci. Sed venenatis urna quis leo vulputate cursus. Vestibulum eget nunc non eros ornare fringilla et et ante.</p>
                  </div>
                  <div class="tab-content">
                     <span class="tab-sub-head">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                     <h3><em>Lorem ipsum dolor sit amet, consectetur adipiscing elitMaecenas.</em></h3>
                     <p>Proin lobortis pellentesque magna, ut posuere erat venenatis vel. Nunc gravida sagittis quam, vitae viverra metus sollicitudin eu. Fusce non elit id neque suscipit porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. In ut massa ipsum. Etiam nisl sapien, tristique non porttitor a, ornare scelerisque eros. Nullam malesuada, sapien ac fringilla consequat, risus massa mollis nunc, eget lacinia mi lacus sit amet leo. Sed enim libero, porta id mauris at, laoreet fringilla orci. Sed venenatis urna quis leo vulputate cursus. Vestibulum eget nunc non eros ornare fringilla et et ante.</p>
                  </div>
                  <div class="tab-content">
                     <span class="tab-sub-head">Nullam ipsum dolor sit amet, consectetur adipiscing elit.</span>
                     <h3><em>Lorem ipsum dolor sit amet, consectetur adipiscing elitMaecenas.</em></h3>
                     <p>Proin lobortis pellentesque magna, ut posuere erat venenatis vel. Nunc gravida sagittis quam, vitae viverra metus sollicitudin eu. Fusce non elit id neque suscipit porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. In ut massa ipsum. Etiam nisl sapien, tristique non porttitor a, ornare scelerisque eros. Nullam malesuada, sapien ac fringilla consequat, risus massa mollis nunc, eget lacinia mi lacus sit amet leo. Sed enim libero, porta id mauris at, laoreet fringilla orci. Sed venenatis urna quis leo vulputate cursus. Vestibulum eget nunc non eros ornare fringilla et et ante.</p>
                  </div>
                  <div class="tab-content">
                     <span class="tab-sub-head">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                     <h3><em>Lorem ipsum dolor sit amet, consectetur adipiscing elitMaecenas.</em></h3>
                     <p>Proin lobortis pellentesque magna, ut posuere erat venenatis vel. Nunc gravida sagittis quam, vitae viverra metus sollicitudin eu. Fusce non elit id neque suscipit porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. In ut massa ipsum. Etiam nisl sapien, tristique non porttitor a, ornare scelerisque eros. Nullam malesuada, sapien ac fringilla consequat, risus massa mollis nunc, eget lacinia mi lacus sit amet leo. Sed enim libero, porta id mauris at, laoreet fringilla orci. Sed venenatis urna quis leo vulputate cursus. Vestibulum eget nunc non eros ornare fringilla et et ante.</p>
                  </div>
                  <div class="tab-content">
                     <span class="tab-sub-head">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                     <h3><em>Ipsum dolor sit amet, consectetur adipiscing elitMaecenas.</em></h3>
                     <p>Proin lobortis pellentesque magna, ut posuere erat venenatis vel. Nunc gravida sagittis quam, vitae viverra metus sollicitudin eu. Fusce non elit id neque suscipit porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. In ut massa ipsum. Etiam nisl sapien, tristique non porttitor a, ornare scelerisque eros. Nullam malesuada, sapien ac fringilla consequat, risus massa mollis nunc, eget lacinia mi lacus sit amet leo. Sed enim libero, porta id mauris at, laoreet fringilla orci. Sed venenatis urna quis leo vulputate cursus. Vestibulum eget nunc non eros ornare fringilla et et ante.</p>
                  </div>
                  <div class="tab-content">
                     <span class="tab-sub-head">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                     <h3><em>Lorem ipsum dolor sit amet, consectetur adipiscing elitMaecenas.</em></h3>
                     <p>Proin lobortis pellentesque magna, ut posuere erat venenatis vel. Nunc gravida sagittis quam, vitae viverra metus sollicitudin eu. Fusce non elit id neque suscipit porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. In ut massa ipsum. Etiam nisl sapien, tristique non porttitor a, ornare scelerisque eros. Nullam malesuada, sapien ac fringilla consequat, risus massa mollis nunc, eget lacinia mi lacus sit amet leo. Sed enim libero, porta id mauris at, laoreet fringilla orci. Sed venenatis urna quis leo vulputate cursus. Vestibulum eget nunc non eros ornare fringilla et et ante.</p>
                  </div>
                  <div class="tab-content">
                     <span class="tab-sub-head">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                     <h3><em>Lorem ipsum dolor sit amet, consectetur adipiscing elitMaecenas.</em></h3>
                     <p>Proin lobortis pellentesque magna, ut posuere erat venenatis vel. Nunc gravida sagittis quam, vitae viverra metus sollicitudin eu. Fusce non elit id neque suscipit porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. In ut massa ipsum. Etiam nisl sapien, tristique non porttitor a, ornare scelerisque eros. Nullam malesuada, sapien ac fringilla consequat, risus massa mollis nunc, eget lacinia mi lacus sit amet leo. Sed enim libero, porta id mauris at, laoreet fringilla orci. Sed venenatis urna quis leo vulputate cursus. Vestibulum eget nunc non eros ornare fringilla et et ante.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
<section class="book-free-consult">
    <div class="row-flex4">
      <div class="col1">
        <h2>
        Book Free Consultation
        </h2>
        <ul>
          <li class="line">
            <div class="number ">
              <span>1</span>
            </div>
            <div class="content">
              <h4>Fill up your details</h4>
              <p>Get Custom Solutions, Recommendations, Estimates. Confidentiality &amp; Same Day Response Guaranteed!</p>
            </div>

          </li>
          <li>
            <div class="number">
              <span>2</span>
            </div>
            <div class="content">
              <h4>What’s next?</h4>
              <p>One of our Account Managers will contact you shortly</p>
            </div>

          </li>
        </ul>
        <div class="profile">
          <ul>
            <li>
              <picture>
                <img src="./images/pic1.png" loading="lazy" alt="">
              </picture>
              <p> Atul </p>
            </li>
            <li>
              <picture>
                <img src="./images/pic2.png" loading="lazy" alt="">
              </picture>
              <p> Avi </p>
            </li>
            <li>
              <picture>
                <img src="./images/pic3.png" loading="lazy" alt="">
              </picture>
              <p> Akhil </p>
            </li>
          </ul>
        </div>
      </div>
      <div class="col2">
      <section class="contact-us-section ">
      <?php require_once 'include/contact-form.php'; ?>
    </section>
      </div>

    </div>
</section>
<section class="related-services">
<h4>Related Services :</h4>
<div class="related-btn">
  <a href="#">MVP Development & Consulting</a>
  <a href="#">SaaS Consulting & Development</a>
  <a href="#">Startup Consulting</a>
  <a href="#">Product UI/UX Design</a>
  <a href="#">Startup Consulting</a>


  

</div>
                </section>
                <?php require_once '../include/footer.php'; ?>
    <script>
      let hasHomeaslder = document.getElementById("footer-client-slider");
      if( hasHomeaslder ){
      window.addEventListener("load", function () {
      	document.querySelector(".footer-client-slider .glider").addEventListener("glider-slide-visible", function (event) {
      		var glider = Glider(this);
      	});
      	document.querySelector(".footer-client-slider .glider").addEventListener("glider-slide-hidden", function (event) {});
      	document.querySelector(".footer-client-slider .glider").addEventListener("glider-refresh", function (event) {});
      	document.querySelector(".footer-client-slider .glider").addEventListener("glider-loaded", function (event) {});
      	window._ = new Glider(document.querySelector(".footer-client-slider .glider"), {
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
    <script>
      // Define variables
      var tabLabels = document.querySelectorAll("#tabs li");
      var tabPanes = document.getElementsByClassName("tab-contents");
      
      function activateTab(e) {
        e.preventDefault();
        
        // Deactivate all tabs
        tabLabels.forEach(function(label, index){
          label.classList.remove("active");
        });
        [].forEach.call(tabPanes, function(pane, index){
          pane.classList.remove("active");
        });
        
        // Activate current tab
        e.target.parentNode.classList.add("active");
        var clickedTab = e.target.getAttribute("href");
        document.querySelector(clickedTab).classList.add("active");
      }
      
      // Apply event listeners
      tabLabels.forEach(function(label, index){
        label.addEventListener("click", activateTab);
      });
      
         
    </script>
     <script src="./js/script_new.js"></script>
</body>
</html>