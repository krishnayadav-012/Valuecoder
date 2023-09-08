<?php
function vc_is_mobile() {
    if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // Many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;
    } else {
        $is_mobile = false;
    }
    return $is_mobile;
}
$is_staging = ( isset( $_SERVER['PHP_SELF'] ) && (strpos( $_SERVER['PHP_SELF'], 'v2wp' ) !== false) )  ?  true : false;
if( $is_staging ){
$site_url   = 'https://www.valuecoders.com/v2wp/';
}else{
$site_url   = 'https://www.valuecoders.com/';
}  
$tpl_url    = $site_url.'wp-content/themes/valuecoders';
$mcat       = (isset( $args['pcat']) && !empty($args['pcat']) ) ? $args['pcat'] : 'master';


/*
Main MenuCategories >>>
engineering : Product Engineering
app-development : Application Development
demand-teams : On Demand Teams
ecommerce : eCommerce
qa-testing : QA & Testing
devops : Analytics & DevOps
startups : For Startups
enterprises : For Enterprises
agencies : For Agencies
*/
$mcat     = 'demand-teams';
?>
<?php //if( !vc_is_mobile() ) : ?>
<header class="header-two" data-nosnippet>
  <div class="container">
    <div class="wrapper">
      <div class="header-item-left">
        <a href="<?php echo $site_url; ?>" class="brand">
          <div class="large">
            <img loading="lazy" src="<?php echo $tpl_url; ?>/images/logo-v2.svg" alt="Valuecoders" class="dark-theme-logo" width="276" height="47">
            <img loading="lazy" src="<?php echo $tpl_url; ?>/images/logo-blue.svg" alt="Valuecoders" class="day-theme-logo" width="425" height="54">
          </div>
          <div class="small">
            <img loading="lazy" src="<?php echo $tpl_url; ?>/images/vc-logo-dark.png" alt="Valuecoders" 
              class="dark-theme-logo sm" width="66" height="66">
            <img loading="lazy" src="<?php echo $tpl_url; ?>/images/vc-logo-light.png" alt="Valuecoders" 
              class="day-theme-logo sm" width="66" height="66">
          </div>
        </a>
        <div class="hamberger-menu">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </div>
      </div>
      <!-- Navbar Section -->
      <?php if( !isset( $_GET['l'] ) ) : ?>
      <div class="header-item-center">
        <nav class="menu mob-nav" id="menu">
          <a href="<?php echo $site_url; ?>" class="brand">
          <img loading="lazy" src="<?php echo $tpl_url; ?>/images/logo.svg" alt="Logo" class="dark-theme-logo" width="301" height="52">
          <img loading="lazy" src="<?php echo $tpl_url; ?>/images/logo-blue.svg" alt="Logo" 
            class="day-theme-logo" width="301" height="52">
          </a>
          <ul>
            <li class="menu-item-has-children">
              <a href="<?php echo $site_url; ?>software-development-services-company">Services</a> <span class="arrow-btn"></span>
              <div class="menu-mega container">
                <?php 
                if( $mcat == "master" ){
                ?>
                <div class="container landing-menu" id="landing-menu">
                  <div class="dis-flex">
                    <div class="flex-3">
                      <span class="head">by TEAM Expertise</span>
                      <a href="#"><span class="title">Product Engineering</span>
                      Consulting, Product Development, Digital Tansformation</a>
                      <a href="#"><span class="title">On Demand Teams</span>
                      Outsourcing, Staff Augmentation, Dedicated Teams, Hire Indian Developers In different Technologies etc.</a>
                      <a href="#"><span class="title">QA & Testing</span>
                      From Consulting to Automation, usibility to Perforamnce Testing</a>
                    </div>
                    <div class="flex-3">
                      <a href="#"><span class="title">Application Development</span>
                      Web, Mobile App development , Full Stack Development, Front end & Backend Development</a>
                      <a href="#"><span class="title">eCommerce</span>
                      Consulting, B2b & B2C Solutions, Digital Marketing & Dedicated Team Setup</a>
                      <a href="#"><span class="title">Analytics & DevOps</span>
                      Big Data, Business Process Automation, Analytics, Business Intelligence etc</a>
                    </div>
                    <div class="flex-3">
                      <span class="head">BY CLIENT TYPE</span>
                      <a href="#"><span class="title">For Startups</span>
                      Consulting to Product[MVP & SAAS] Development & Dedicated Team Setup</a>
                      <a href="#"><span class="title">For Enterprises</span>
                      Digital Transformation to Modernization, Migration, Maintainace, Testing QA,  DevOps & Technologies</a>
                      <a href="#"><span class="title">For Agencies</span>
                      White Label Services for Custom software, Frontend, Backend, CMS, eCommerce, Staff Sugmentation</a>
                    </div>
                  </div>
                </div>

                <?php }elseif( $mcat == "engineering"){ ?>
                <div class="container w-14 prod-eng" id="m-product-engineering">
                  <div class="dis-flex">
                    <div class="flex-3">
                      <a href="#"><span class="title">Product Consulting</span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">Product UI/UX Design</span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">Software Product Development</span>
                      Plan, build, & ship quality products</a>
                    </div>
                    <div class="flex-3">  
                      <a href="#"><span class="title">MVP Development </span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">Saas Development </span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">Digital Transformation </span>
                      Operate securely and reliably</a>
                    </div>
                    <div class="flex-3">
                      <a href="#"><span class="title">Application Modernization </span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">Application Maintainance</span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">Analytics & DevOps</span>
                      Plan, build, & ship quality products</a>
                    </div>
                  </div>
                </div>  
                
                <?php }elseif( $mcat == "app-development"){ ?>
                <div class=" container w-14 landing-menu app-development" id="m-app-development">
                  <div class="dis-flex">
                    <div class="flex-3">
                      <span class="head">Our Expertise</span>
                      <a href="#"><span class="title">Web App Development</span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">Backend Development</span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">Website & Portal Development</span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">Frontend Development</span>
                      Plan, build, & ship quality products</a>
                    </div>
                    <div class="flex-3">
                      <a href="#"><span class="title">Mobile App Development</span>
                      WPlan, build, & ship quality products</a>
                      <a href="#"><span class="title">Cross Platform App Development</span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">API Development</span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">Full Stack Development</span>
                      Plan, build, & ship quality products</a>
                    </div>
                    <div class="flex-3">
                      <span class="head">OTHER services</span>
                      <a href="#"><span class="title">App Maintainance & Support</span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">Application Modernization</span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">OTT App Development</span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">Cloud Application Development</span>
                      Plan, build, & ship quality products</a>
                    </div>
                  </div>
                </div>
                <?php }elseif( $mcat == "startups"){ ?>        
                <div class="container w-14 startups" id="m-startups">
                  <div class="dis-flex">
                    <div class="flex-3">
                      <a href="#"><span class="title">MVP Development & Consulting</span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">SAAS Consulting & Development</span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">Software Product Development </span>
                      Plan, build, & ship quality products</a>
                    </div>
                    <div class="flex-3">  
                      <a href="#"><span class="title">Product UI/UX Design  </span>
                      Operate securely and reliably</a>
                      <a href="#"><span class="title">Dedicated Development Teams </span>
                      Operate securely and reliably</a>
                      <a href="#"><span class="title">Staff Augmentation Services  </span>
                      Operate securely and reliably</a>
                    </div>
                    <div class="flex-3">
                      <a href="#"><span class="title">QA & Testing </span>
                      Operate securely and reliably</a>
                      <a href="#"><span class="title">Cloud Application Development</span>
                      Operate securely and reliably</a>
                      <a href="#"><span class="title">Analytics & DevOps</span>
                      Operate securely and reliably</a>
                    </div>
                  </div>                  
                </div>
                <!-- // For Startups  Ends  -->
                <?php }elseif( $mcat == "demand-teams"){ ?>                
                <div class="container w-900 demand-teams" id="m-demand-team">
                  <div class="dis-flex">
                    <div class="flex-3">
                      <a href="#"><span class="title">Dedicated Development Teams</span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">Staff Augmentation Services</span>
                      Operate securely and reliably</a>
                    </div>
                    <div class="flex-3">
                      <a href="#"><span class="title">Offshore Development Center</span>
                      Operate securely and reliably</a>
                      <a href="#"><span class="title">Offshore Software Development</span>
                      Plan, build, & ship quality products</a>
                    </div>
                  </div>
                </div>
                <!-- //On Demand Teams Ends -->
                <?php }elseif( $mcat == "ecommerce"){ ?>
                <div class=" container w-14 landing-menu ecom" id="m-ecommerce">
                  <div class="dis-flex">
                    <div class="flex-3">
                      <span class="head">our expertise</span>
                      <a href="#"><span class="title">Custom eCommerce</span>
                      Operate securely and reliably</a>
                      <a href="#"><span class="title">eCommerce Consulting</span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">Digital Consulting</span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">eCommerce Web Design</span>
                      Operate securely and reliably</a>
                    </div>
                    <div class="flex-3">
                    <span class="head">Technology</span>
                      <a href="#"><span class="title">Magento</span>
                      Operate securely and reliably</a>
                      <a href="#"><span class="title">Shopify</span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">WooCommerce</span>
                      Operate securely and reliably</a>
                      <a href="#"><span class="title">OpenCart</span>
                      Plan, build, & ship quality products</a>
                    </div>
                    <div class="flex-3">
                      <span class="head">Solutions</span>
                      <a href="#"><span class="title">B2C eCommerce</span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">B2B eCommerce</span>
                      Operate securely and reliably</a>
                      <a href="#"><span class="title">Web Portal</span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">Supply Chain Automation</span>
                      Plan, build, & ship quality products</a>
                    </div>
                  </div>
                </div>
                <?php }elseif( $mcat == "qa-testing"){ ?>
                  <!-- QA Testing Menu Here -->
                  <div class="container w-900 qaconsult" id="m-qaconsult">
                  <div class="dis-flex">
                    <div class="flex-3">
                      <a href="#"><span class="title">QA Consulting</span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">Application Testing</span>
                      Operate securely and reliably</a>
                      <a href="#"><span class="title">Mobile App Testing</span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">Web App Testing</span>
                      Operate securely and reliably</a>
                    </div>
                    <div class="flex-3">
                      <a href="#"><span class="title">Testing Teams</span>
                      Operate securely and reliably</a>
                      <a href="#"><span class="title">Hire Software QA</span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">QA Outsourcing</span>
                      Operate securely and reliably</a>
                    </div>
                  </div>
                </div>
                <?php }elseif( $mcat == "devops"){ ?>
                  <!-- DevOps Menu Here -->
                  <div class=" container w-14 landing-menu analytics" id="m-analytics">
                  <div class="dis-flex">
                    <div class="flex-3">
                      <span class="head">Dashboards & Analytics</span>
                      <a href="#"><span class="title">Big Data Consulting</span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">BI Consulting Services</span>
                      Operate securely and reliably</a>
                    </div>
                    <div class="flex-3">
                      <a href="#"><span class="title">BI Implementation</span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">Microsoft Power BI</span>
                      Operate securely and reliably</a>
                    </div>
                    <div class="flex-3">
                      <span class="head">DevOps</span>
                      <a href="#"><span class="title">DevOps Consulting</span>
                      Operate securely and reliably</a>
                      <a href="#"><span class="title">Amazon AWS</span>
                      Plan, build, & ship quality products</a>
                    </div>
                  </div>
                </div>
                <!-- //Analytics Ends -->

                <?php }elseif( $mcat == "enterprises"){ ?>
                  <!-- Enterprises Menu Here -->
                  <div class="container w-14 enterprises" id="m-enterprises">
                  <div class="dis-flex">
                    <div class="flex-3">
                      <a href="#"><span class="title">Digital Transformation</span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">Application Modernization</span>
                      Operate securely and reliably</a>
                      <a href="#"><span class="title">Application Maintainance & Support</span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title"> Analytics & DevOps</span>
                      Operate securely and reliably</a>
                    </div>
                    <div class="flex-3">  
                      <a href="#"><span class="title">Software Consulting </span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">Custom Software Development </span>
                      Operate securely and reliably</a>
                      <a href="#"><span class="title">Web App Development </span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">Mobile App Development </span>
                      Plan, build, & ship quality products</a>
                    </div>
                    <div class="flex-3">
                      <a href="#"><span class="title">Staff Augmentation Services </span>
                      Operate securely and reliably</a>
                      <a href="#"><span class="title">Software Outsourcing services</span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">QA & Testing</span>
                      Operate securely and reliably</a>
                      <a href="#"><span class="title">Cloud Application Development</span>
                      Operate securely and reliably</a>
                    </div>
                  </div>
                </div>
                <?php }elseif( $mcat == "agencies"){ ?>  
                <div class="container w-14 agencies" id="m-agencies">
                  <div class="dis-flex">
                    <div class="flex-3">
                      <a href="#"><span class="title">White Label Services</span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">Frontend Development</span>
                      Operate securely and reliably</a>
                      <a href="#"><span class="title">Backend Development</span>
                      Plan, build, & ship quality products</a>
                    </div>
                    <div class="flex-3">  
                      <a href="#"><span class="title">Software Consulting </span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">Custom Software Development </span>
                      Operate securely and reliably</a>
                      <a href="#"><span class="title">Application Development</span>
                      Plan, build, & ship quality products</a>
                    </div>
                    <div class="flex-3">
                      <a href="#"><span class="title">QA & Testing </span>
                      Operate securely and reliably</a>
                      <a href="#"><span class="title">Software Outsourcing services</span>
                      Operate securely and reliably</a>
                    </div>
                  </div>
                </div>
                <?php } ?>  
              </div>
              <!-- //Mega-Menu -->
            </li>
            <!-- Solutions -->
            <li class="menu-item-has-children">
              <a href="<?php echo $site_url; ?>hire-developers">Solutions</a> <span class="arrow-btn"></span>
              <div class="menu-mega container">
                <div class="container">
                  <div class="dis-flex">
                    <div class="width-45 detail-list without-icon">
                      <span class="head">Industries</span>
                      <div class="dis-flex">
                        <div class="flex-2">
                          <a href="#"><span class="title">Healthcare</span>
                          Plan, build, & ship quality products</a>
                          <a href="#"><span class="title">ISV</span>
                          Operate securely and reliably</a>
                          <a href="#"><span class="title">Automative</span>
                          Plan, build, & ship quality products</a>
                          <a href="#"><span class="title">Fintech</span>
                          Operate securely and reliably</a>
                          <a href="#"><span class="title">Retail & eCommerce</span>
                          Plan, build, & ship quality products</a>
                        </div>
                        <div class="flex-2">
                          <a href="#"><span class="title">Education & E-Learning</span>
                          Plan, build, & ship quality products</a>
                          <a href="#"><span class="title">Travel & Tourism</span>
                          Plan, build, & ship quality products</a>
                          <a href="#"><span class="title">Banking & Financial Services</span>
                          Plan, build, & ship quality products</a>
                          <a href="#"><span class="title">Logistic & Transportation</span>
                          Plan, build, & ship quality products</a>
                          <a href="#"><span class="title">Media & Entertaintainment</span>
                          Plan, build, & ship quality products</a>
                        </div>
                      </div>
                    </div>
                    <div class="width-55 detail-list without-icon">
                      <span class="head">Solutions</span>
                      <div class="dis-flex">
                        <div class="flex-2">
                          <a href="#"><span class="title">Financial Management</span>
                          Operate securely and reliably</a>
                          <a href="#"><span class="title">Workforce Management</span>
                          Operate securely and reliably</a>
                          <a href="#"><span class="title">Human Resource Management</span>
                          Plan, build, & ship quality products</a>
                          <a href="#"><span class="title">eLearning</span>
                          Operate securely and reliably</a>
                          <a href="#"><span class="title">Supply Chain Management</span>
                          Plan, build, & ship quality products</a>
                          <a href="#"><span class="title">Fleet Management</span>
                          Plan, build, & ship quality products</a>
                        </div>
                        <div class="flex-2">
                          <a href="#"><span class="title">Operations Management</span>
                          Plan, build, & ship quality products</a>
                          <a href="#"><span class="title">Asset Management</span>
                          Plan, build, & ship quality products</a>
                          <a href="#"><span class="title">Web Portals</span>
                          Plan, build, & ship quality products</a>
                          <a href="#"><span class="title">Content Management Sysrem (CRM)</span>
                          Operate securely and reliably</a>
                          <a href="#"><span class="title">Enterprise Resource Planning (ERP)</span>
                          Operate securely and reliably</a>
                          <a href="#"><span class="title">Document Management</span>
                          Operate securely and reliably</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <!-- Technology -->
            <li class="menu-item-has-children">
              <a href="javascript:void(0)">Technologies</a> <span class="arrow-btn"></span>
              <div class="menu-mega width-menu">
                <div class="container">
                  <div class="dis-flex" id="active_Current_Tabs8">
                    <div class="width-100 header-menu active for-padding">
                      <div class="dis-flex" id="active_Current_Tabs8a">
                        <div class="width-40 last-list">
                          <div class="hr-list-item">
                            <span class="head">Programming</span> <span class="hr-arrow-btn"></span>
                          </div>
                          <div class="dis-flex two-col hr-menu-mega">
                            <div class="width-50">
                              <a href="<?php echo $site_url; ?>android-app-development-company-india">Andoid</a>
                              <a href="<?php echo $site_url; ?>angular-js-development-company-india">Angular</a>
                              <a href="<?php echo $site_url; ?>top-drupal-development-services-company-india">Drupal</a>
                              <a href="<?php echo $site_url; ?>flutter-app-development-company">Flutter</a>
                              <a href="<?php echo $site_url; ?>ios-application-development-company-india">iOS / iPhone</a>
                              <a href="<?php echo $site_url; ?>java-web-application-development-company">Java</a>
                              <a href="<?php echo $site_url; ?>top-laravel-development-services-company-india">Laravel</a>
                            </div>
                            <div class="width-50 padding-l-40">
                              <a href="<?php echo $site_url; ?>aspdotnet-development-company-india">.NET</a>
                              <a href="<?php echo $site_url; ?>node-js-development-company-india">Node</a>
                              <a href="<?php echo $site_url; ?>php-development-services-company">PHP</a>
                              <a href="<?php echo $site_url; ?>python-web-development-services-company">Python</a>
                              <a href="<?php echo $site_url; ?>react-js-development-services-company">React</a>
                              <a href="<?php echo $site_url; ?>best-react-native-development-services-company-india">React Native</a>
                              <a href="<?php echo $site_url; ?>top-wordpress-development-services-company-india">Wordpress</a>
                            </div>
                          </div>
                        </div>
                        <div class="width-35 last-list for-platform">
                          <div class="hr-list-item">
                            <span class="head">Trending</span> <span class="hr-arrow-btn"></span>
                          </div>
                          <div class="hr-menu-mega">
                            <a href="<?php echo $site_url; ?>ar-vr-development-company">AR/ VR</a>
                            <a href="<?php echo $site_url; ?>blockchain-development-company">Blockchain</a>
                            <a href="<?php echo $site_url; ?>iot-development-company">Internet of Things</a>
                            <a href="<?php echo $site_url; ?>ai-ml-development-services-company">Machine Learning</a>
                            <a href="<?php echo $site_url; ?>ott-development">OTT</a>
                            <a href="<?php echo $site_url; ?>rpa-development-services-company">RPA</a>
                            <a href="<?php echo $site_url; ?>serverless-development">Serverless</a>
                          </div>
                        </div>
                        <div class="width-25 last-list">
                          <div class="hr-list-item">
                            <span class="head">Platforms</span> <span class="hr-arrow-btn"></span>
                          </div>
                          <div class="hr-menu-mega">
                            <a href="<?php echo $site_url; ?>microsoft-power-bi-development-services-company">Microsoft Power BI</a>
                            <a href="<?php echo $site_url; ?>sharepoint-application-development-services-company">SharePoint</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <!-- Solutions -->
            <li class="menu-item-has-children for-case">
              <a href="https://www.valuecoders.com/case-studies/" target="_blank">Case Studies</a> <span class="arrow-btn"></span>
            </li>
            <li class="menu-item-has-children small-menu for-company">
              <a href="<?php echo $site_url; ?>about">Company</a> <span class="arrow-btn"></span>
              <div class="small-menu-inner menu-mega">
                <a href="<?php echo $site_url; ?>about">Overview</a>
                <a href="<?php echo $site_url; ?>in-media">In Media</a>
                <a href="<?php echo $site_url; ?>testimonials">Clients & Testimonials</a>
                <a href="<?php echo $site_url; ?>why-agencies-choose-us">Why Agencies Choose Us</a>
                <a href="<?php echo $site_url; ?>careers">Careers</a>
                <a href="https://www.valuecoders.com/blog/" target="_blank">Blog</a>
              </div>
            </li>
            <li class="contact-nav"><a href="<?php echo $site_url; ?>contact">Contact Us <i class="arrow-icon"></i></a></li>
          </ul>
        </nav>
      </div>
      <?php endif; ?>
    </div>
  </div>
</header>
<?php //endif; ?>