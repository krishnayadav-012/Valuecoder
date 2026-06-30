<?php 
function site_url( $url ){
  return 'https://www.valuecoders.com/staging'.$url;
}
?>

<div class="scrim" id="scrim" aria-hidden="true"></div>
<div class="drawer__ov" id="drawer-ov" aria-hidden="true"></div>

<header class="nav nav-v9" id="nav">
  <nav class="nav__bar" aria-label="Primary">
    <!-- LOGO PLACEHOLDER → replace .logo contents with production brand asset. See README §3. -->
    <a class="logo" href="https://www.valuecoders.com/staging" data-nav="logo" data-placeholder="logo" aria-label="ValueCoders — Home">
      <img loading="lazy" src="https://www.valuecoders.com/staging/wp-content/themes/valuecoders/dev-img/logo-valucoders-light.svg" alt="ValueCoders Logo" width="400" height="88" class="site-logo-dark">        
      <img loading="lazy" src="https://www.valuecoders.com/staging/wp-content/themes/valuecoders/dev-img/logo-valucoders-light-v9.svg" alt="ValueCoders Logo" width="400" height="88" class="site-logo-light">
    </a>

    <div class="nav__links">
      <button class="trigger" data-panel="p-services" aria-expanded="false" aria-controls="p-services" data-nav="trigger" data-nav-id="services">Services <svg class="chev" viewBox="0 0 12 12" fill="none" aria-hidden="true"><path d="M2.5 4.5L6 8l3.5-3.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path></svg></button>
      <button class="trigger" data-panel="p-solutions" aria-expanded="false" aria-controls="p-solutions" data-nav="trigger" data-nav-id="solutions">Solutions <svg class="chev" viewBox="0 0 12 12" fill="none" aria-hidden="true"><path d="M2.5 4.5L6 8l3.5-3.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path></svg></button>
      <button class="trigger" data-panel="p-hire" aria-expanded="false" aria-controls="p-hire" data-nav="trigger" data-nav-id="hire">Hire &amp; Teams <svg class="chev" viewBox="0 0 12 12" fill="none" aria-hidden="true"><path d="M2.5 4.5L6 8l3.5-3.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path></svg></button>
      <button class="trigger" data-panel="p-company" aria-expanded="false" aria-controls="p-company" data-nav="trigger" data-nav-id="company">Company <svg class="chev" viewBox="0 0 12 12" fill="none" aria-hidden="true"><path d="M2.5 4.5L6 8l3.5-3.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path></svg></button>
    </div>

    <div class="nav__spacer"></div>

    <div class="search" id="search-trigger" role="button" tabindex="0" aria-label="Search" data-nav="search">
      <svg width="15" height="15" viewBox="0 0 16 16" fill="none" aria-hidden="true"><circle cx="7" cy="7" r="5" stroke="currentColor" stroke-width="1.6"></circle><path d="M11 11l3 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"></path></svg>
      <span class="search__txt">Search or describe what you need…</span>
      <span class="kbd">⌘K</span>
    </div>

  

    <!-- <a class="cta" href="https://www.valuecoders.com/staging/contact" data-nav="cta" data-nav-id="talk-to-us">Talk to Us <svg class="arr" width="14" height="14" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8h9M9 4.5L12.5 8 9 11.5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path></svg></a> -->
     <div class="get-connect">
          <a href="/contact" class="btn-circle">
            <span class="text" data-text="talk-to-us">talk-to-us</span>

            <span class="circle">
              <img src="images/index-v10/move-right.svg" alt="">
            </span>
          </a>
        </div>
    

    <button class="hamb" id="hamb" aria-label="Open menu" aria-expanded="false"><span></span><span></span><span></span></button>
  </nav>

  <!-- ═══ PANEL: SERVICES ═══ -->
  <div class="panel" id="p-services" role="region" aria-label="Services">
    <div class="panel__inner">
      <div class="band rv">
        <div class="band__top">
          <div class="band__eyebrow">Services</div>
          <a class="band__viewall" href="<?php echo site_url('/services'); ?>" data-nav="link" data-nav-id="services-all">View all services <span class="arr">→</span></a>
        </div>
        <div class="band__lead">
          <span class="band__h">Governed delivery in the AI era.</span>
          <span class="band__p">675+ senior engineers — faster than in-house, safer than ungoverned AI.</span>
        </div>
      </div>
      <div class="cols">
        <div class="col rv">
          <a class="col__head" href="javascript:void(0);" data-nav="link">AI &amp; Automation <span class="arr">→</span></a>
          <ul>
            <li><a class="lnk" href="<?php echo site_url('/ai/consulting-services-company'); ?>" data-nav="link"><span class="dot"></span>AI Consulting</a></li>
            <li><a class="lnk" href="<?php echo site_url('ai/ai-augmented-software-development'); ?>" data-nav="link"><span class="dot"></span>AI-Augmented Development</a></li>
            <li><a class="lnk" href="<?php echo site_url('/ai/generative-ai-services'); ?>" data-nav="link"><span class="dot"></span>Generative AI &amp; LLMs</a></li>
            <li><a class="lnk" href="<?php echo site_url('/ai/custom-ai-agent-development'); ?>" data-nav="link"><span class="dot"></span>AI Agents &amp; Automation</a></li>
            <li><a class="lnk" href="<?php echo site_url('/ai/production-assurance'); ?>" data-nav="link"><span class="dot"></span>Production Assurance</a></li>
            <!-- <li><a class="lnk" href="<?php echo site_url('#'); ?>" data-nav="link"><span class="dot"></span>Managed AI Services</a></li> -->
          </ul>
          <a class="viewall-col" href="<?php echo site_url('/ai'); ?>" data-nav="viewall">View all <span class="arr">→</span></a>
        </div>
        <div class="col rv">
          <a class="col__head" href="javascript:void(0);" data-nav="link">Product Engineering <span class="arr">→</span></a>
          <ul>
            <li><a class="lnk" href="<?php echo site_url('/custom-software-development-services-company'); ?>" data-nav="link"><span class="dot"></span>Custom Software Development</a></li>
            <li><a class="lnk" href="<?php echo site_url('/web-application-development'); ?>" data-nav="link"><span class="dot"></span>Web App Development</a></li>
            <li><a class="lnk" href="<?php echo site_url('/mobile-application-development'); ?>" data-nav="link"><span class="dot"></span>Mobile App Development</a></li>
            <li><a class="lnk" href="<?php echo site_url('/mvp-app-development-company'); ?>" data-nav="link"><span class="dot"></span>MVP Development</a></li>
            <li><a class="lnk" href="<?php echo site_url('/outsource-software-product-development-services'); ?>" data-nav="link"><span class="dot"></span>SaaS Development</a></li>
            <li><a class="lnk" href="<?php echo site_url('/product-ui-ux-design'); ?>" data-nav="link"><span class="dot"></span>UI/UX &amp; Product Design</a></li>
          </ul>
          <a class="viewall-col" href="<?php echo site_url('/outsource-software-product-development-services'); ?>" data-nav="viewall">View all <span class="arr">→</span></a>
        </div>
        <div class="col rv">
          <a class="col__head" href="javascript:void(0);" data-nav="link">Data &amp; Cloud <span class="arr">→</span></a>
          <ul>
            <li><a class="lnk" href="<?php echo site_url('/data-engineering'); ?>" data-nav="link"><span class="dot"></span>Data Engineering</a></li>
            <li><a class="lnk" href="<?php echo site_url('/data-analytics'); ?>" data-nav="link"><span class="dot"></span>Analytics &amp; BI</a></li>
            <li><a class="lnk" href="<?php echo site_url('/data/warehouse'); ?>" data-nav="link"><span class="dot"></span>Data Warehouse</a></li>
            <li><a class="lnk" href="<?php echo site_url('/cloud-services/cloud-migration'); ?>" data-nav="link"><span class="dot"></span>Cloud Migration</a></li>
            <li><a class="lnk" href="<?php echo site_url('/cloud-services/devops-automation'); ?>" data-nav="link"><span class="dot"></span>DevOps &amp; DevSecOps</a></li>
            <!-- <li><a class="lnk" href="https://www.valuecoders.com/staging/cloud" data-nav="link"><span class="dot"></span>AWS, Azure &amp; GCP</a></li> -->
          </ul>
          <a class="viewall-col" href="<?php echo site_url('/cloud-services'); ?>" data-nav="viewall">View all <span class="arr">→</span></a>
        </div>
        <div class="col rv">
          <a class="col__head" href="javascript:void(0);" data-nav="link">Enterprise &amp; ERP <span class="arr">→</span></a>
          <ul>
            <li><a class="lnk" href="<?php echo site_url('/salesforce'); ?>" data-nav="link"><span class="dot"></span>Salesforce</a></li>
            <li><a class="lnk" href="<?php echo site_url('/hire/sap-developers'); ?>" data-nav="link"><span class="dot"></span>SAP</a></li>
            <li><a class="lnk" href="<?php echo site_url('/servicenow-development'); ?>" data-nav="link"><span class="dot"></span>ServiceNow</a></li>
            <li><a class="lnk" href="<?php echo site_url('/microsoft-dynamics'); ?>" data-nav="link"><span class="dot"></span>Microsoft Dynamics</a></li>
            <!-- <li><a class="lnk" href="https://www.valuecoders.com/staging/services/oracle" data-nav="link"><span class="dot"></span>Oracle</a></li> -->
            <li><a class="lnk" href="<?php echo site_url('/services/system-integration'); ?>" data-nav="link"><span class="dot"></span>System Integration</a></li>
          </ul>
          <a class="viewall-col" href="<?php echo site_url('/enterprise-software-development-services'); ?>" data-nav="viewall">View all <span class="arr">→</span></a>
        </div>
        <div class="col rv">
          <a class="col__head" href="javascript:void(0);" data-nav="link">Modernise &amp; Advisory <span class="arr">→</span></a>
          <ul>
            <li><a class="lnk" href="<?php echo site_url('/modernization-services'); ?>" data-nav="link"><span class="dot"></span>Legacy Modernisation</a></li>
            <li><a class="lnk" href="<?php echo site_url('/digital-transformation-services'); ?>" data-nav="link"><span class="dot"></span>Digital Transformation</a></li>
            <li><a class="lnk" href="<?php echo site_url('/it-strategy-consulting-firms'); ?>" data-nav="link"><span class="dot"></span>Technology Consulting</a></li>
            <li><a class="lnk" href="<?php echo site_url('/services/cybersecurity'); ?>" data-nav="link"><span class="dot"></span>Cybersecurity &amp; Pen Testing</a></li>
            <li><a class="lnk" href="<?php echo site_url('/services/quality-engineering'); ?>" data-nav="link"><span class="dot"></span>Quality Engineering</a></li>
          </ul>
          <a class="viewall-col" href="<?php echo site_url('/modernization-services'); ?>" data-nav="viewall">View all <span class="arr">→</span></a>
        </div>
      </div>
    </div>
    <div class="panel__foot">
      <span class="lead"><b>Not sure where to start?</b> Project Scoping is a fixed-fee 2–4 week engagement that de-risks any build — proof before estimate.</span>
      <span class="push"></span>
      <a class="btn2" href="javascript:void(0);" data-nav="cta" data-nav-id="scope-your-project">Scope Your Project <span class="arr">→</span></a>
    </div>
  </div>

  <!-- ═══ PANEL: SOLUTIONS ═══ -->
  <div class="panel" id="p-solutions" role="region" aria-label="Solutions">
    <div class="panel__inner">
      <div class="band rv">
        <div class="band__top">
          <div class="band__eyebrow">Solutions</div>
          <a class="band__viewall" href="javascript:void(0);" data-nav="link" data-nav-id="solutions-all">See all solutions <span class="arr">→</span></a>
        </div>
        <div class="band__lead">
          <span class="band__h">Start where you are.</span>
          <span class="band__p">A governed path for every situation — MVP to enterprise scale.</span>
        </div>
      </div>
      <div class="sol-wrap">
        <div class="sols rv">
          <a class="sol" href="<?php echo site_url('/solutions/ship-your-roadmap'); ?>" data-nav="link"><span class="sol__icon" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 20 20" fill="none"><path d="M3 15l5-8 4 5 5-9" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path></svg></span><span><span class="sol__eyebrow">Software Product</span><h3>Ship Your Roadmap</h3><p>Behind a deadline — ship faster with senior engineers.</p></span></a>
          <a class="sol" href="<?php echo site_url('/solutions/build-your-product'); ?>" data-nav="link"><span class="sol__icon" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 20 20" fill="none"><path d="M14 3l3 3-9.5 9.5L4 17l1.5-3.5L15 4z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"></path></svg></span><span><span class="sol__eyebrow">Founder, Funded</span><h3>Build Your Product</h3><p>A clear vision and capital, but no team yet.</p></span></a>
          <a class="sol" href="<?php echo site_url('/modernization-services'); ?>" data-nav="link"><span class="sol__icon" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 20 20" fill="none"><path d="M10 2l7 3v5c0 4.5-3 7.5-7 8.5C6 17.5 3 14.5 3 10V5l7-3z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"></path></svg></span><span><span class="sol__eyebrow">Established Business</span><h3>Modernise Legacy Systems</h3><p>Evolve a revenue-critical system without downtime.</p></span></a>
          <a class="sol" href="<?php echo site_url('/offshore-software-development-center-india'); ?>" data-nav="link"><span class="sol__icon" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 20 20" fill="none"><path d="M3 17V8l7-5 7 5v9M8 17v-5h4v5" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"></path></svg></span><span><span class="sol__eyebrow">GCC / Captive</span><h3>Scale Your India Centre</h3><p>Grow your captive arm, governed to HQ standards.</p></span></a>
          <a class="sol" href="<?php echo site_url('/solutions/build-your-mvp'); ?>" data-nav="link"><span class="sol__icon" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 20 20" fill="none"><path d="M10 3a5 5 0 015 5c0 2-1.2 3.4-2.4 4.4l-.6 2.6H8l-.6-2.6C6.2 11.4 5 10 5 8a5 5 0 015-5zM8 17h4" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"></path></svg></span><span><span class="sol__eyebrow">Early Stage</span><h3>Build Your MVP</h3><p>Concept to a working first version, validated fast.</p></span></a>
          <a class="sol sol--accent" href="<?php echo site_url('/solutions/ai-built-rescue'); ?>" data-nav="link"><span class="sol__icon" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 20 20" fill="none"><circle cx="10" cy="10" r="6.5" stroke="currentColor" stroke-width="1.6"></circle><path d="M10 1.5v3M10 15.5v3M1.5 10h3M15.5 10h3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"></path></svg></span><span><span class="sol__eyebrow">AI-Built</span><h3>AI-Built Rescue</h3><p>Built with AI tools and hitting scaling or audit walls.</p></span></a>
        </div>
        <div class="siderail rv">
          <div class="siderail__head">Not sure where to start</div>
          <ul>
            <li><a class="lnk" href="<?php echo site_url('/project-discovery-phase'); ?>" data-nav="link"><span class="dot"></span>Project Scoping</a></li>
            <!-- <li><a class="lnk" href="https://www.valuecoders.com/staging/solutions/codebase-assessment" data-nav="link"><span class="dot"></span>Codebase Assessment</a></li> -->
            <!-- <li><a class="lnk" href="https://www.valuecoders.com/staging/solutions/team-trial" data-nav="link"><span class="dot"></span>Team Trial</a></li> -->
            <!-- <li><a class="lnk" href="https://www.valuecoders.com/staging/pricing" data-nav="link"><span class="dot"></span>Transparent Pricing</a></li> -->
          </ul>
          <div class="siderail__head">By industry</div>
          <div class="chips">
            <a class="chip" href="<?php echo site_url('/industries/fintech/bfsi'); ?>" data-nav="link">FinTech &amp; BFSI</a><a class="chip" href="<?php echo site_url('/industries/healthcare'); ?>" data-nav="link">Healthcare</a><a class="chip" href="<?php echo site_url('/industries/insurance'); ?>" data-nav="link">Insurance</a><a class="chip" href="<?php echo site_url('/industries/retail-ecommerce'); ?>" data-nav="link">eCommerce</a><a class="chip" href="<?php echo site_url('/industries/edtech'); ?>" data-nav="link">EdTech</a><a class="chip" href="<?php echo site_url('/industries/logistics'); ?>" data-nav="link">Logistics</a><a class="chip chip--more" href="<?php echo site_url('/industries'); ?>" data-nav="link">All industries ›</a>
          </div>
        </div>
      </div>
    </div>
    <div class="panel__foot">
      <span class="lead"><b>Unsure which fits?</b> Project Scoping is the universal first step.</span>
      <span class="push"></span>
      <a class="btn2" href="<?php echo site_url('/project-discovery-phase'); ?>" data-nav="cta" data-nav-id="start-project-scoping">Start Project Scoping <span class="arr">→</span></a>
    </div>
  </div>

  <!-- ═══ PANEL: HIRE & TEAMS ═══ -->
  <div class="panel" id="p-hire" role="region" aria-label="Hire and Teams">
    <div class="panel__inner">
      <div class="band rv">
        <div class="band__top">
          <div class="band__eyebrow">Hire &amp; Teams</div>
          <a class="band__viewall" href="<?php echo site_url('/hire'); ?>" data-nav="link" data-nav-id="hire-all">Browse all 60+ roles <span class="arr">→</span></a>
        </div>
        <div class="band__lead">
          <span class="band__h">Pre-vetted engineers, governed from day one.</span>
          <span class="band__p">Not a marketplace — senior talent, shortlisted in 48 hours.</span>
        </div>
      </div>
      <div class="cols">
        <div class="col rv"><span class="col__head">Frontend &amp; Mobile</span><ul>
          <li><a class="lnk" href="<?php echo site_url('/hire-developers/hire-reactjs-developers'); ?>" data-nav="link"><span class="dot"></span>React Developers</a></li>
          <li><a class="lnk" href="<?php echo site_url('/hire-developers/hire-react-native-developers'); ?>" data-nav="link"><span class="dot"></span>React Native Developers</a></li>
          <li><a class="lnk" href="<?php echo site_url('/hire-developers/hire-angularjs-developers'); ?>" data-nav="link"><span class="dot"></span>Angular Developers</a></li>
          <li><a class="lnk" href="<?php echo site_url('/hire-developers/hire-vuejs-developers'); ?>" data-nav="link"><span class="dot"></span>Vue.js Developers</a></li>
          <li><a class="lnk" href="<?php echo site_url('/hire-developers/hire-android-developers'); ?>" data-nav="link"><span class="dot"></span>Android Developers</a></li>
          <li><a class="lnk" href="<?php echo site_url('/hire-developers/hire-flutter-developers'); ?>" data-nav="link"><span class="dot"></span>Flutter Developers</a></li>
          <li><a class="lnk" href="<?php echo site_url('/hire-developers/hire-ios-developers'); ?>" data-nav="link"><span class="dot"></span>iOS Developers</a></li>
        </ul></div>
        <div class="col rv"><span class="col__head">Backend &amp; Full-Stack</span><ul>
          <li><a class="lnk" href="<?php echo site_url('/hire-developers/hire-php-developers'); ?>" data-nav="link"><span class="dot"></span>PHP Developers</a></li>
          <li><a class="lnk" href="<?php echo site_url('/hire-developers/hire-python-developers'); ?>" data-nav="link"><span class="dot"></span>Python Developers</a></li>
          <li><a class="lnk" href="<?php echo site_url('/hire-developers/hire-java-developers'); ?>" data-nav="link"><span class="dot"></span>Java Developers</a></li>
          <li><a class="lnk" href="<?php echo site_url('/hire-developers/hire-dotnet-developers'); ?>" data-nav="link"><span class="dot"></span>.NET Developers</a></li>
          <li><a class="lnk" href="<?php echo site_url('/hire-developers/hire-full-stack-developers'); ?>" data-nav="link"><span class="dot"></span>Full-Stack Developers</a></li>
          <li><a class="lnk" href="<?php echo site_url('/hire-developers/hire-golang-web-developers'); ?>" data-nav="link"><span class="dot"></span>Go Developers</a></li>
          <li><a class="lnk" href="<?php echo site_url('/hire-developers/hire-nodejs-developers'); ?>" data-nav="link"><span class="dot"></span>Node.js Developers</a></li>
          <!-- <li><a class="lnk" href="https://www.valuecoders.com/staging/hire/ruby-developers" data-nav="link"><span class="dot"></span>Ruby on Rails Developers</a></li> -->
        </ul></div>
        <div class="col rv"><span class="col__head">AI, Cloud &amp; QA</span><ul>
          <li><a class="lnk" href="<?php echo site_url('/hire-developers/hire-ai-engineers'); ?>" data-nav="link"><span class="dot"></span>AI Engineers</a></li>
          <li><a class="lnk" href="<?php echo site_url('/hire-developers/hire-azure-developers'); ?>" data-nav="link"><span class="dot"></span>Azure Engineers</a></li>
          <li><a class="lnk" href="<?php echo site_url('/hire/salesforce-developer'); ?>" data-nav="link"><span class="dot"></span>Salesforce Developers</a></li>
          <li><a class="lnk" href="<?php echo site_url('/hire/sap-developers'); ?>" data-nav="link"><span class="dot"></span>SAP Consultants</a></li>
          <li><a class="lnk" href="<?php echo site_url('/hire-developers/hire-aws-developers'); ?>" data-nav="link"><span class="dot"></span>AWS Engineers</a></li>
          <li><a class="lnk" href="<?php echo site_url('/hire/data-engineers'); ?>" data-nav="link"><span class="dot"></span>Data Engineers</a></li>
          <li><a class="lnk" href="<?php echo site_url('/hire-developers/hire-devops-developers'); ?>" data-nav="link"><span class="dot"></span>DevOps Engineers</a></li>
          <li><a class="lnk" href="<?php echo site_url('/hire-developers/software-qa-testers-india'); ?>" data-nav="link"><span class="dot"></span>QA Engineers</a></li>
        </ul></div>
        <div class="col rv">
          <a class="col__head" href="javascript:void(0);" data-nav="link">Engagement Models <span class="arr">→</span></a>
          <ul>
            <li><a class="lnk" href="<?php echo site_url('/it-staff-augmentation-services'); ?>" data-nav="link"><span class="dot"></span>Team Extension</a></li>
            <li><a class="lnk" href="<?php echo site_url('/dedicated-development-teams/product-pods'); ?>" data-nav="link"><span class="dot"></span>Delivery Pods</a></li>
            <!-- <li><a class="lnk" href="https://www.valuecoders.com/staging/dedicated-teams/ai-engineering-pods" data-nav="link"><span class="dot"></span>AI Engineering Pods</a></li> -->
            <li><a class="lnk" href="<?php echo site_url('/offshore-software-development-center-india'); ?>" data-nav="link"><span class="dot"></span>Development Centres</a></li>
            <!-- <li><a class="lnk" href="https://www.valuecoders.com/staging/solutions/team-trial" data-nav="link"><span class="dot"></span>Team Trial</a></li> -->
          </ul>
          <!-- <a class="viewall-col" href="https://www.valuecoders.com/staging/dedicated-teams" data-nav="viewall">How engagement works <span class="arr">→</span></a> -->
        </div>
      </div>
    </div>
    <div class="panel__foot">
      <span class="lead"><b>Know the stack you need?</b> Get matched to pre-vetted engineers in days.</span>
      <span class="push"></span>
      <a class="btn2" href="javascript:void(0);" data-nav="cta" data-nav-id="get-matched">Get Matched <span class="arr">→</span></a>
    </div>
  </div>

  <!-- ═══ PANEL: COMPANY ═══ -->
  <div class="panel" id="p-company" role="region" aria-label="Company">
    <div class="panel__inner">
      <div class="band rv">
        <div class="band__top">
          <div class="band__eyebrow">Company</div>
          <a class="band__viewall" href="javascript:void(0);" data-nav="link" data-nav-id="company-about">About ValueCoders <span class="arr">→</span></a>
        </div>
        <div class="band__lead">
          <span class="band__h">Two decades of software that ships.</span>
          <span class="band__p">ISO 27001 · CMMi Level 3 — not a body shop.</span>
        </div>
      </div>
      <div class="cols">
        <div class="col rv"><span class="col__head">About ValueCoders</span><ul>
          <li><a class="lnk" href="<?php echo site_url('/how-it-works'); ?>" data-nav="link"><span class="dot"></span>How We Work</a></li>
          <li><a class="lnk" href="<?php echo site_url('/gdpr-compliance'); ?>" data-nav="link"><span class="dot"></span>Security &amp; Compliance</a></li>
          <li><a class="lnk" href="<?php echo site_url('/in-media'); ?>" data-nav="link"><span class="dot"></span>Credentials &amp; Awards</a></li>
          <li><a class="lnk" href="<?php echo site_url('/about'); ?>" data-nav="link"><span class="dot"></span>Life at ValueCoders</a></li>
          <li><a class="lnk" href="<?php echo site_url('/careers'); ?>" data-nav="link"><span class="dot"></span>Careers</a></li>
        </ul></div>
        <div class="col rv"><span class="col__head">Case Studies &amp; Proof</span><ul>
          <li><a class="lnk" href="<?php echo site_url('/case-studies/'); ?>" data-nav="link"><span class="dot"></span>Case Studies</a></li>
          <li><a class="lnk" href="<?php echo site_url('/testimonials'); ?>" data-nav="link"><span class="dot"></span>Client Reviews</a></li>
          <!-- <li><a class="lnk" href="https://www.valuecoders.com/staging/company/benchmarks" data-nav="link"><span class="dot"></span>Delivery Benchmarks</a></li> -->
          <!-- <li><a class="lnk" href="https://www.valuecoders.com/staging/company/vs-toptal" data-nav="link"><span class="dot"></span>ValueCoders vs. Others</a></li> -->
          <!-- <li><a class="lnk" href="https://www.valuecoders.com/staging/pricing" data-nav="link"><span class="dot"></span>Transparent Pricing</a></li> -->
        </ul></div>
        <div class="col rv"><span class="col__head">Guides &amp; Insights</span><ul>
          <!-- <li><a class="lnk" href="https://www.valuecoders.com/staging/resources/guides" data-nav="link"><span class="dot"></span>Guides &amp; Reports</a></li> -->
          <li><a class="lnk" href="<?php echo site_url('/blog/'); ?>" data-nav="link"><span class="dot"></span>Blog</a></li>
          <!-- <li><a class="lnk" href="https://www.valuecoders.com/staging/webinars" data-nav="link"><span class="dot"></span>Webinars</a></li> -->
          <li><a class="lnk" href="<?php echo site_url('/partnership-program'); ?>" data-nav="link"><span class="dot"></span>Partner Programme</a></li>
          <li><a class="lnk" href="<?php echo site_url('/contact'); ?>" data-nav="link"><span class="dot"></span>Contact Us</a></li>
        </ul></div>
      </div>
    </div>
    <div class="panel__foot">
      <span class="trust-foot"><span><b><i>4.8</i> on Clutch</b> across <i>19k+</i> reviews</span><span class="sep"></span><span>ISO 27001</span><span class="sep"></span><span>CMMi Level 3</span><span class="sep"></span><span>NASSCOM member</span></span>
      <span class="push"></span>
      <a class="btn2" href="<?php echo site_url('/contact'); ?>" data-nav="cta" data-nav-id="talk-to-us-panel">Talk to Us <span class="arr">→</span></a>
    </div>
  </div>
</header>
<div class="cmdk" id="cmdk" role="dialog" aria-modal="true" aria-label="Search">
  <div class="cmdk__scrim" data-cmdk-close=""></div>
  <div class="cmdk__box" role="combobox" aria-expanded="true" aria-haspopup="listbox" aria-controls="cmdk-results">
    <div class="cmdk__head">
      <svg width="18" height="18" viewBox="0 0 16 16" fill="none" aria-hidden="true"><circle cx="7" cy="7" r="5" stroke="currentColor" stroke-width="1.6"></circle><path d="M11 11l3 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"></path></svg>
      <input class="cmdk__input" id="cmdk-input" type="text" placeholder="Search services, solutions, roles, pages…" autocomplete="off" spellcheck="false" aria-label="Search" aria-autocomplete="list" aria-controls="cmdk-results">
      <span class="cmdk__esc">Esc</span>
    </div>
    <div class="cmdk__results" id="cmdk-results" role="listbox" aria-label="Search results"></div>
    <div class="cmdk__empty" id="cmdk-empty" style="display:none">No results for "<span id="cmdk-empty-q"></span>"</div>
    <div class="cmdk__foot"><span><kbd>↑</kbd><kbd>↓</kbd> navigate</span><span><kbd>↵</kbd> open</span><span><kbd>esc</kbd> close</span></div>
  </div>
</div>
<div class="drawer" id="drawer" role="dialog" aria-modal="true" aria-label="Menu">
  <div class="drawer__hd">
    <a class="logo" href="/" aria-label="ValueCoders — Home">
       <img loading="lazy" src="https://www.valuecoders.com/staging/wp-content/themes/valuecoders/dev-img/logo-valucoders-light-v9.svg" alt="ValueCoders Logo" width="400" height="88" class="site-logo-light">
    </a>
    <button class="drawer__close" id="drawer-close" aria-label="Close menu"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M18 6L6 18M6 6l12 12"></path></svg></button>
  </div>
  <div class="drawer__scroll">
    <button class="acc" data-acc="m-services" aria-expanded="false">Services <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M4 6l4 4 4-4"></path></svg></button>
    <div class="acc-body" id="m-services">
      <div class="acc-sub">AI &amp; Automation</div>
      <a href="<?php echo site_url('/ai/consulting-services-company'); ?>">AI Consulting</a>
      <a href="<?php echo site_url('/ai/ai-augmented-software-development'); ?>">AI-Augmented Development</a>
      <a href="<?php echo site_url('/ai/generative-ai-services'); ?>">Generative AI &amp; LLMs</a>
      <a href="<?php echo site_url('/ai/custom-ai-agent-development'); ?>">AI Agents &amp; Automation</a>
      <a href="<?php echo site_url('/ai/production-assurance'); ?>">Production Assurance</a>
      <!-- <a href="https://www.valuecoders.com/staging/ai/managed-ai-services">Managed AI Services</a> -->
      <div class="acc-sub">Product Engineering</div>
      <a href="<?php echo site_url('/custom-software-development-services-company'); ?>">Custom Software Development</a>
      <a href="<?php echo site_url('/web-application-development'); ?>">Web App Development</a>
      <a href="<?php echo site_url('/mobile-application-development'); ?>">Mobile App Development</a>
      <a href="<?php echo site_url('/mvp-app-development-company'); ?>">MVP Development</a>
      <a href="<?php echo site_url('/outsource-software-product-development-services'); ?>">SaaS Development</a>
      <a href="<?php echo site_url('/product-ui-ux-design'); ?>">UI/UX &amp; Product Design</a>
      <div class="acc-sub">Data &amp; Cloud</div>
      <a href="<?php echo site_url('/data-engineering'); ?>">Data Engineering</a>
      <a href="<?php echo site_url('/data-analytics'); ?>">Analytics &amp; BI</a>
      <a href="<?php echo site_url('/data/warehouse'); ?>">Data Warehouse</a>
      <a href="<?php echo site_url('/cloud-services/cloud-migration'); ?>">Cloud Migration</a>
      <a href="<?php echo site_url('/cloud-services/devops-automation'); ?>">DevOps &amp; DevSecOps</a>
      <!-- <a href="https://www.valuecoders.com/staging/cloud">AWS, Azure &amp; GCP</a> -->
      <div class="acc-sub">Enterprise &amp; ERP</div>
      <a href="<?php echo site_url('/salesforce'); ?>">Salesforce</a>
      <a href="<?php echo site_url('/hire/sap-developers'); ?>">SAP</a>
      <a href="<?php echo site_url('/servicenow-development'); ?>">ServiceNow</a>
      <a href="<?php echo site_url('/microsoft-dynamics'); ?>">Microsoft Dynamics</a>
      <!-- <a href="https://www.valuecoders.com/staging/services/oracle">Oracle</a> -->
      <a href="<?php echo site_url('/services/system-integration'); ?>">System Integration</a>
      <div class="acc-sub">Modernise &amp; Advisory</div>
      <a href="<?php echo site_url('/modernization-services'); ?>">Legacy Modernisation</a>
      <a href="<?php echo site_url('/digital-transformation-services'); ?>">Digital Transformation</a>
      <a href="<?php echo site_url('/it-strategy-consulting-firms'); ?>">Technology Consulting</a>
      <a href="<?php echo site_url('/services/cybersecurity'); ?>">Cybersecurity &amp; Pen Testing</a>
      <a href="<?php echo site_url('/services/quality-engineering'); ?>">Quality Engineering</a>
      <a class="acc-all" href="<?php echo site_url('/services'); ?>">View all services →</a>
    </div>
    <button class="acc" data-acc="m-solutions" aria-expanded="false">Solutions <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M4 6l4 4 4-4"></path></svg></button>
    <div class="acc-body" id="m-solutions">
      <div class="acc-sub">Start with your goal</div>
      <a href="<?php echo site_url('/solutions/ship-your-roadmap'); ?>">Ship Your Roadmap</a>
      <a href="<?php echo site_url('/solutions/build-your-product'); ?>">Build Your Product</a>
      <a href="<?php echo site_url('/modernization-services'); ?>">Modernise Legacy Systems</a>
      <a href="<?php echo site_url('/offshore-software-development-center-india'); ?>">Scale Your India Centre</a>
      <a href="<?php echo site_url('/solutions/build-your-mvp'); ?>">Build Your MVP</a>
      <a href="<?php echo site_url('/solutions/ai-built-rescue'); ?>">AI-Built Rescue</a>
      <div class="acc-sub">Not sure where to start</div>
      <a href="<?php echo site_url('/project-discovery-phase'); ?>">Project Scoping</a>
      <!-- 
      <a href="https://www.valuecoders.com/staging/solutions/codebase-assessment">Codebase Assessment</a>
      <a href="https://www.valuecoders.com/staging/solutions/team-trial">Team Trial</a>
      <a href="https://www.valuecoders.com/staging/pricing">Transparent Pricing</a> 
      -->
      <div class="acc-sub">By industry</div>
      <a href="<?php echo site_url('/industries/fintech/bfsi'); ?>">FinTech &amp; BFSI</a>
      <a href="<?php echo site_url('/industries/healthcare'); ?>">Healthcare</a>
      <a href="<?php echo site_url('/industries/insurance'); ?>">Insurance</a>
      <a href="<?php echo site_url('/industries/retail-ecommerce'); ?>">eCommerce</a>
      <a href="<?php echo site_url('/industries/edtech'); ?>">EdTech</a>
      <a href="<?php echo site_url('/industries/logistics'); ?>">Logistics</a>
      <a class="acc-all" href="<?php echo site_url('/industries'); ?>">All industries →</a>
    </div>
    <button class="acc" data-acc="m-hire" aria-expanded="false">Hire &amp; Teams <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M4 6l4 4 4-4"></path></svg></button>
    <div class="acc-body" id="m-hire">
      <div class="acc-sub">Frontend &amp; Mobile</div>
      <a href="<?php echo site_url('/hire-developers/hire-reactjs-developers'); ?>">React Developers</a>
      <a href="<?php echo site_url('/hire-developers/hire-react-native-developers'); ?>">React Native Developers</a>
      <a href="<?php echo site_url('/hire-developers/hire-angularjs-developers'); ?>">Angular Developers</a>
      <a href="<?php echo site_url('/hire-developers/hire-vuejs-developers'); ?>">Vue.js Developers</a>
      <a href="<?php echo site_url('/hire-developers/hire-android-developers'); ?>">Android Developers</a>
      <a href="<?php echo site_url('/hire-developers/hire-flutter-developers'); ?>">Flutter Developers</a>
      <a href="<?php echo site_url('/hire-developers/hire-ios-developers'); ?>">iOS Developers</a>
      <div class="acc-sub">Backend &amp; Full-Stack</div>
      <a href="<?php echo site_url('/hire-developers/hire-php-developers'); ?>">PHP Developers</a>
      <a href="<?php echo site_url('/hire-developers/hire-python-developers'); ?>">Python Developers</a>
      <a href="<?php echo site_url('/hire-developers/hire-java-developers'); ?>">Java Developers</a>
      <a href="<?php echo site_url('/hire-developers/hire-dotnet-developers'); ?>">.NET Developers</a>
      <a href="<?php echo site_url('/hire-developers/hire-full-stack-developers'); ?>">Full-Stack Developers</a>
      <a href="<?php echo site_url('/hire-developers/hire-golang-web-developers'); ?>">Go Developers</a>
      <a href="<?php echo site_url('/hire-developers/hire-nodejs-developers'); ?>">Node.js Developers</a>
      <!-- <a href="https://www.valuecoders.com/staging/hire/ruby-developers">Ruby on Rails Developers</a> -->
      <div class="acc-sub">AI, Cloud &amp; QA</div>
      <a href="<?php echo site_url('/hire-developers/hire-ai-engineers'); ?>">AI Engineers</a>
      <a href="<?php echo site_url('/hire-developers/hire-azure-developers'); ?>">Azure Engineers</a>
      <a href="<?php echo site_url('/hire/salesforce-developer'); ?>">Salesforce Developers</a>
      <a href="<?php echo site_url('/hire/sap-developers'); ?>">SAP Consultants</a>
      <a href="<?php echo site_url('/hire-developers/hire-aws-developers'); ?>">AWS Engineers</a>
      <a href="<?php echo site_url('/hire/data-engineers'); ?>">Data Engineers</a>
      <a href="<?php echo site_url('/hire-developers/hire-devops-developers'); ?>">DevOps Engineers</a>
      <a href="<?php echo site_url('/hire-developers/software-qa-testers-india'); ?>">QA Engineers</a>
      <div class="acc-sub">Engagement Models</div>
      <a href="<?php echo site_url('/it-staff-augmentation-services'); ?>">Team Extension</a>
      <a href="<?php echo site_url('/dedicated-development-teams/product-pods'); ?>">Delivery Pods</a>
      <!-- <a href="https://www.valuecoders.com/staging/dedicated-teams/ai-engineering-pods">AI Engineering Pods</a> -->
      <a href="<?php echo site_url('/offshore-software-development-center-india'); ?>">Development Centres</a>
      <a href="<?php echo site_url('/solutions/team-trial'); ?>">Team Trial</a>
      <a class="acc-all" href="<?php echo site_url('/hire'); ?>">Browse all 60+ roles →</a>
    </div>
    <button class="acc" data-acc="m-company" aria-expanded="false">Company <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M4 6l4 4 4-4"></path></svg></button>
    <div class="acc-body" id="m-company">
      <div class="acc-sub">About ValueCoders</div>
      <a href="<?php echo site_url('/how-it-works'); ?>">How We Work</a>
      <a href="<?php echo site_url('/gdpr-compliance'); ?>">Security &amp; Compliance</a>
      <a href="<?php echo site_url('/in-media'); ?>">Credentials &amp; Awards</a>
      <a href="<?php echo site_url('/about'); ?>">Life at ValueCoders</a>
      <a href="<?php echo site_url('/careers'); ?>">Careers</a>
      <div class="acc-sub">Case Studies &amp; Proof</div>
      <a href="<?php echo site_url('/case-studies/'); ?>">Case Studies</a>
      <a href="<?php echo site_url('/testimonials'); ?>">Client Reviews</a>
      <!-- <a href="https://www.valuecoders.com/staging/company/benchmarks">Delivery Benchmarks</a> -->
      <!-- <a href="https://www.valuecoders.com/staging/company/vs-toptal">ValueCoders vs. Others</a> -->
      <!-- <a href="https://www.valuecoders.com/staging/pricing">Transparent Pricing</a> -->
      <div class="acc-sub">Guides &amp; Insights</div>
      <!-- <a href="https://www.valuecoders.com/staging/resources/guides"  >Guides &amp; Reports</a> -->
      <a href="<?php echo site_url('/blog/'); ?>">Blog</a>
      <!-- <a href="https://www.valuecoders.com/staging/webinars">Webinars</a> -->
      <a href="<?php echo site_url('/partnership-program'); ?>">Partner Programme</a>
      <a href="<?php echo site_url('/contact'); ?>">Contact Us</a>
    </div>
  </div>
  <div class="drawer__ft">
    <a class="drawer__cta" href="<?php echo site_url('/contact'); ?>">Talk to Us <svg width="14" height="14" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8h9M9 4.5L12.5 8 9 11.5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path></svg></a>
  </div>
</div>