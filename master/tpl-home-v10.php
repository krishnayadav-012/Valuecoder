<?php 
/*
Template Name: Home Page V10.0 Template
*/ 
global $post;
$thisPostID = $post->ID; 
get_header();
?>
<section class="hero-section">
<div class="container">
    <div class="dis-flex">
        <div class="left-box">
            <?php the_content(); ?>

            <div class="master-btn button-v10">
                <!-- TEXT -->
                <a href="<?php echo site_url('/contact'); ?>" class="btn-circle">
                    <span class="text" data-text="Get in Touch">
                        <span class="text-default">Get in Touch</span>
                    </span>
                    <!-- ARROW -->
                    <span class="circle">
                        <span class="arrow-default"><img src="<?php bloginfo('template_url'); ?>/v6.0/images/index-v10/move-right.svg" alt=""></span>
                    </span>
                </a>
            </div>
        </div>

        <div class="for-client-logo-box  dis-flex">
            <div class="logo-box logo1"></div>
            <div class="logo-box logo2"></div>
            <div class="logo-box logo3"></div>
            <div class="logo-box logo4"></div>
        </div>
    </div>
</div>
</section>
<section class="award-section-vten  ">
<div class="container">
    <div class="award-image">
        <div class="dis-flex">
            <div class="award-heading">
                <h4><span>Trusted by startups and Fortune <strong>500</strong> companies</span></h4>
            </div>
            <div class="award-section">
                <picture>
                    <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/v6.0/images/index-v10/award.webp">
                    <img loading="lazy" alt="valuecoders" src="<?php bloginfo('template_url'); ?>/v6.0/images/index-v10/award.webp" width="1200"
                        height="185">
                </picture>
            </div>
        </div>
    </div>
</div>
</section>
<?php 
$dpSection = get_field('dp-section');
if( isset($dpSection['required']) && ($dpSection['required'] == "yes") ) :
?>
<section class="delivery-section">
<!-- Left: copy -->
<div class="container">
    <div class="inner-part">
        <div class="delivery-section__left">
            <span><?php echo isset($dpSection['eyebrow']) ? $dpSection['eyebrow'] : ''; ?></span>
            <?php echo isset($dpSection['content']) ? $dpSection['content'] : ''; ?>
        </div>
        <!-- Right: stats grid -->
        <div class="delivery-section__right">
            <!-- Card 1 -->
            <div class="stat-card">
                <div class="stat-card__number"><h3>700+</h3></div>
                <div class="stat-card__label"><p>In-House Engineers</p></div>
            </div>

            <!-- Card 2 -->
            <div class="stat-card">
                <div class="stat-card__number"><h3>2,500+</h3></div>
                <div class="stat-card__label"><p>Projects Delivered</p></div>
            </div>

            <!-- Card 3 -->
            <div class="stat-card">
                <div class="stat-card__number"><h3>20+</h3></div>
                <div class="stat-card__label"><p>Years in Operation</p></div>
            </div>

            <!-- Card 4: Rating -->
            <div class="stat-card">
                <div class="stat-card__platforms">
                    <span><img src="<?php bloginfo('template_url'); ?>/v6.0/images/index-v10/c-icon.png" alt=""></span>
                    <span><img src="<?php bloginfo('template_url'); ?>/v6.0/images/index-v10/g-icon.png" alt=""></span>
                    <span><img src="<?php bloginfo('template_url'); ?>/v6.0/images/index-v10/f-icon.png" alt=""></span>
                </div>
                <div class="stat-card__number"><h4>4.5/5<strong class="star">★</strong> </h4></div>
                <div class="stat-card__label"><p>19,000+ reviews</p></div>
            </div>
        </div>
    </div>
</div>
</section>
<?php endif; ?>
<!-- delevery end -->


<!-- Build for team section start -->
<?php 
$helpCards = get_field('help-cards');
if( isset($helpCards['required']) && ($helpCards['required'] == "yes") ) :
?>
<section class="help-section padding-t-120 padding-b-120">
<div class="container">
    <!-- Heading -->
    <div class="section-head">
        <?php echo $helpCards['content']; ?>
    </div>
    <?php if($helpCards['cards']) : ?>
    <!-- Cards -->
    <div class="help-grid">

        <?php foreach($helpCards['cards'] as $card) : ?>    
        <div class="help-card">
            <div class="icon">
                <?php 
                if($card['icon']){
                echo '<img src="'.$card['icon']['url'].'" class="normal" alt="">';    
                }
                if($card['hicon']){
                echo '<img src="'.$card['hicon']['url'].'" class="hover" alt="">';    
                }
                ?>
            </div>
            <?php echo isset($card['body']) ? $card['body'] : ''; ?>

            <div class="border-line"></div>
            <?php 
            if($card['link']){
                echo '<a href="'.vc_siteurl($card['link']).'" class="learn-more">Learn More</a>';
            }
            ?>
            
        </div>
        <?php endforeach; ?>    
    </div>
    <?php endif; ?>        
</div>
</section>
<!-- help section end -->
<?php endif; ?>


<!-- ai section start -->

<?php 
$aiSection = get_field('ai-section');
if( isset($aiSection['required']) && ($aiSection['required'] == "yes") ) :
?>
<section class="ai-production-loop">
<!-- LEFT FULL IMAGE -->
        <div class="ai-left">
        <!-- <img src="<?php bloginfo('template_url'); ?>/v6.0/images/index-v10/ai-pro.webp" alt="AI"> -->
        <video autoplay muted loop playsinline>
        <source src="images/index-v10/ai-video.mp4" type="video/mp4">
        </video>

        </div>

        <!-- RIGHT CONTENT -->
        <div class="ai-right">

            <div class="container">
                <div class="ai-content">
                    <?php echo isset($aiSection['content']) ? $aiSection['content'] : ''; 
                    if( $aiSection['rows'] ){
                        echo '<div class="ai-list">';
                        $i = 0;
                        foreach($aiSection['rows'] as $row){ $i++;
                            $activeClass = ($i == 1) ? 'active' : '';
                            echo '<div class="ai-item '.$activeClass.'">';
                            echo '<div class="title"><h4>'.$row['title'].'</h4></div>';
                            echo '<div class="desc"><p>'.$row['text'].'</p></div>';
                            echo '<div class="progress"></div>';
                        echo '</div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
</section>
<?php endif; ?>
<!-- ai section end -->


<?php 
$emSection = get_field('em-section');
if( isset($emSection['required']) && ($emSection['required'] == "yes") ) :
    //highlighted
?>
<!-- new start -->
<section class="delivery-models padding-t-120 padding-b-120">
<div class="container">
<div class="section-header">
<?php echo isset($emSection['content']) ? $emSection['content'] : ''; ?>
</div>
<?php 
if(  $emSection['cards'] ){
    echo '<div class="models-grid">';
    $i = 0;
    foreach($emSection['cards'] as $card){ $i++;
        $hg = ($i == 2 ) ? 'highlighted' : '';
        echo '<article class="model-card '.$hg.'">';
        echo '<div class="card-top">';
        echo '<div class="icon-box">';
        if($card['icon']){
            echo '<img src="'.$card['icon']['url'].'" alt="">';    
        }
        echo '</div>';
        if( isset($card['tag']) && !empty($card['tag']) ){
            echo '<span class="badge">'.$card['tag'].'</span>';
        }
        echo '</div>';
        echo $card['body'];
        if( isset($card['ft-text']) && !empty($card['ft-text']) ){
            echo '<div class="card-footer">';
            echo '<p><strong>Best for:</strong> '.$card['ft-text'].'</p>';
            echo '</div>';
        }
        echo '</article>';
    }
    echo '</div>';
}
?>
</div>
</section>
<!-- new end -->
<?php endif; ?>


<!-- capblieties secton start -->
<?php 
$capSection = get_field('cap-section');
if( isset($capSection['required']) && ($capSection['required'] == "yes") ) :
?>
<section id="capabilities-section">
<div class="container">
    <div class="cap-wrapper">
    <div class="left-part">
    <?php echo isset($capSection['content']) ? $capSection['content'] : ''; ?>
    <div class="master-btn button-v10">
        
    <a href="<?php echo site_url('/contact'); ?>" class="btn-circle">
        <span class="text" data-text="Get in Touch">
            <span class="text-default">Get in Touch</span>
        </span>
        <span class="circle">
            <span class="arrow-default"><img src="<?php bloginfo('template_url'); ?>/v6.0/images/index-v10/move-right.svg" alt=""></span>
        </span>
    </a>
    </div>
    <div class="engineering-design"></div>
    </div>
    <div class="right-part">
        <?php 
        if($capSection['cards']){
            foreach($capSection['cards'] as $card){
                echo '<div class="card">';
                if($card['thumb']){
                    echo '<figure><img src="'.$card['thumb']['url'].'" alt=""></figure>';
                }
                echo $card['body'];
                echo '</div>';
            }
        }
        ?>    
    </div>
    </div>
</div>
</section>
<?php endif; ?>
<!-- capblieties secton end-->

<!-- success story start -->
<?php 
$csCards = get_field('cs-section');
if( isset($csCards['required']) && ($csCards['required'] == "yes") ) :
?>
<section class="stories-section padding-t-120 padding-b-120">
<div class="container">
<div class="inner-part">

<!-- Top row -->
<div class="stories-section__top">
    <div class="stories-section__heading-wrap">
    <?php echo isset($csCards['content']) ? $csCards['content'] : ''; ?>
    </div>
    <div class="master-btn button-v10 second">
    <!-- TEXT -->
    <a href="<?php echo site_url('/contact'); ?>" class="btn-circle">
        <span class="text" data-text="Get in Touch">
            <span class="text-default">Get in Touch</span>
        </span>

        <!-- ARROW -->
        <span class="circle">
            <span class="arrow-default"><img src="<?php bloginfo('template_url'); ?>/v6.0/images/index-v10/move-right.svg" alt=""></span>
        </span>
    </a>
    </div>
</div>
<!-- Cards grid -->
<div class="stories-section__grid">
    <?php 
    if($csCards['cards']){
        $i = 0;
        foreach($csCards['cards'] as $card){ $i++;
        $featuredClass = ($i == 1) ? 'story-card--featured' : 'story-card--small';    
        echo '<div class="story-card ' . $featuredClass . '">
        <div class="story-card__image-wrap">
        <div class="image-part"><img src="'.$card['thumb']['url'].'" alt=""></div>
        </div>
        <div class="story-card__content">
        <h3 class="story-card__name">'.$card['title'].'</h3>
        <p class="story-card__desc">'.$card['description'].'</p>
        <a href="'.$card['link'].'" class="story-card__link">Learn More </a>
        </div>
        </div>';
    }    
    }
    ?>    
</div>
</div>
</div>
</section>
<?php endif; ?>
<!-- success story end -->
<?php get_template_part('components/industries', 'v10'); ?>


<!-- new section  -->
<?php  
$ddSection = get_field('dd-section');
if( isset($ddSection['required']) && ($ddSection['required'] == "yes") ) :
?> 
<section class="delivery-discipline padding-t-120 padding-b-120">
<div class="container">
<div class="delivery-grid">
    <!-- LEFT PANEL -->
    <div class="delivery-left">
        <div class="left-content">
        <?php echo ($ddSection['content']) ? $ddSection['content'] : ''; ?>    
        </div>
        <div class="left-image">
            <img src="<?php bloginfo('template_url'); ?>/v6.0/images/index-v10/ai-circle.png" alt="">
        </div>
    </div>

    <!-- RIGHT CARDS -->
    <div class="delivery-right">
        <?php 
        if($ddSection['cards']){
            $i = 0;
            foreach($ddSection['cards'] as $card){ $i++;
                $link = (isset($card['link']) && !empty($card['link'])) ? vc_siteurl($card['link']) : '#';
                echo '<a href="'.$link.'" class="info-card">
                <span class="card-number">' . $i . '</span>
                <!-- Hidden Circle -->
                <div class="circular-progress circle-progress" data-inner-circle-color="#161722" 
                data-percentage="'.$card['percentage'].'" data-progress-color="#FFAD00" data-bg-color="#FFAD0033">
                <div class="inner-circle"></div>
                <p class="percentage">'.$card['pr-text'].'</p>
                </div>
                <span class="card-tag">'.$card['tag'].'</span>
                <h4>'.$card['title'].'</h4>
                <p>'.$card['text'].'</p>
                </a>';
            }
        }
        ?>        
    </div>
</div>
</div>
</section>
<?php endif; ?>

<!-- new section  -->



<!-- Engineering Stacks start -->
<section id="engineering-stacks-v10" class="stack-section padding-t-120 padding-b-120">
<div class="container">
    <div class="section-header">
        <div class="content-part">
            <h2>Engineering <em>Expertise.</em></h2>
            <p>Delivered through staff augmentation, product pods, or long-term engineering programs.</p>
        </div>

        <div class="glider-arrows">
            <button class="stack-prev starc-arrow" aria-label="Previous" aria-disabled="true"><img
                    src="<?php bloginfo('template_url'); ?>/v6.0/icons/arrow-right.svg" alt=""></button>
            <button class="stack-next starc-arrow" aria-label="Next" aria-disabled="false"><img
                    src="<?php bloginfo('template_url'); ?>/v6.0/icons/arrow-right.svg" alt=""></button>
        </div>
    </div>
    <div class="glider-contain">
                <div class="stack-grid glider">
                    <div class="stack-card">
                        <div class="card-head">
                            <h3>Frontend</h3>
                            <p>Immediate Bench Ready</p>
                        </div>
                        <ul class="tech-list">
                            <li>
                                <div class="tech-info"> <img src="images/index-v10/react.svg" alt="">
                                    <div class="text-part">
                                        <strong>React</strong><span>Enterprise SPA & Next.js</span>
                                    </div>
                                </div>
                                <div class="percentage">

                                </div>
                            </li>
                            <li>
                                <div class="tech-info"> <img src="images/index-v10/angular.svg" alt="">
                                    <div class="text-part">
                                        <strong>Angular</strong><span>Large-scale CRM/ERP</span>
                                    </div>
                                </div>
                                <div class="percentage">

                                </div>
                            </li>
                            <li>
                                <div class="tech-info">
                                <img src="images/index-v10/Vue.svg" alt="">  
                                    <div class="text-part">    
                                <strong>Vue.js</strong><span>Lightweight Dashboards</span></div>
                                </div>
                                <div class="percentage">

                                </div>
                            </li>
                            <li>
                                <div class="tech-info">
                                <img src="images/index-v10/sveltejs.svg" alt="">  
                                    <div class="text-part">    
                                <strong>Svelte</strong><span>Lightweight Dashboards</span></div>
                                </div>
                                <div class="percentage">

                                </div>
                            </li>
                            <li>
                                <div class="tech-info">
                                <img src="images/index-v10/github.svg" alt="">  
                                    <div class="text-part">    
                                <strong>GitHub</strong><span>Lightweight Dashboards</span></div>
                                </div>
                                <div class="percentage">

                                </div>
                            </li>
                        </ul>
                        <div class="card-footer">
                            <div class="avatars">
                                <img src="images/users-img.png" alt="Dev">

                            </div>
                            <p><strong>700+</strong> Senior Engineers available</p>
                            <a href="#" class="btn-secondry">View All </a>
                        </div>
                    </div>
                    <div class="stack-card">
                        <div class="card-head">
                            <h3>Backend</h3>
                            <p>Immediate Bench Ready</p>
                        </div>
                        <ul class="tech-list">
                            <li>
                                <div class="tech-info"> <img src="images/index-v10/nodejs.svg" alt="">
                                    <div class="text-part">
                                        <strong>Node.js</strong><span>Event-driven APIs</span>
                                    </div>
                                </div>
                                <div class="percentage">

                                </div>
                            </li>
                           <li>
                                <div class="tech-info"> <img src="images/index-v10/python.svg" alt="">
                                    <div class="text-part">
                                        <strong>Python</strong><span>Data-heavy services</span>
                                    </div>
                                </div>
                                <div class="percentage">

                                </div>
                            </li>
                            <li>
                                <div class="tech-info">
                                <img src="images/index-v10/java.svg" alt="">  
                                    <div class="text-part">    
                                <strong>Java</strong><span>Legacy enterprise core</span></div>
                                </div>
                                <div class="percentage">

                                </div>
                            </li>
                            <li>
                                <div class="tech-info">
                                <img src="images/index-v10/microsoft-dotnet.svg" alt="">  
                                    <div class="text-part">    
                                <strong>.NET</strong><span>Corporate ecosystems</span></div>
                                </div>
                                <div class="percentage">

                                </div>
                            </li>
                            <li>
                                <div class="tech-info">
                                <img src="images/index-v10/php.svg" alt="">  
                                    <div class="text-part">    
                                <strong>PHP</strong><span>Corporate ecosystems</span></div>
                                </div>
                                <div class="percentage">

                                </div>
                            </li>
                        </ul>
                        <div class="card-footer">
                            <div class="avatars">
                                <img src="images/users-img.png" alt="Dev">

                            </div>
                            <p><strong>700+</strong> Senior Engineers available</p>
                            <a href="#" class="btn-secondry">View All </a>
                        </div>
                    </div>
                    <div class="stack-card">
                        <div class="card-head">
                            <h3>Cloud & Ai</h3>
                            <p>Immediate Bench Ready</p>
                        </div>
                        <ul class="tech-list">
                            <li>
                                <div class="tech-info"> <img src="images/index-v10/aws.svg" alt="">
                                    <div class="text-part">
                                        <strong>AWS</strong><span>Serverless & K8s</span>
                                    </div>
                                </div>
                                <div class="percentage">

                                </div>
                            </li>
                            <li>
                                <div class="tech-info"> <img src="images/index-v10/azure.svg" alt="">
                                    <div class="text-part">
                                        <strong>Azure</strong><span>Enterprise Cloud</span>
                                    </div>
                                </div>
                                <div class="percentage">

                                </div>
                            </li>
                            <li>
                                <div class="tech-info">
                                <img src="images/index-v10/llms.svg" alt="">  
                                    <div class="text-part">    
                                <strong>LLMs</strong><span>RAG & Agentic AI</span></div>
                                </div>
                                <div class="percentage">

                                </div>
                            </li>
                            <li>
                                <div class="tech-info">
                                <img src="images/index-v10/tensorflow.svg" alt="">  
                                    <div class="text-part">    
                                <strong>TensorFlow</strong><span>Custom ML Models</span></div>
                                </div>
                                <div class="percentage">

                                </div>
                            </li>
                            <li>
                                <div class="tech-info">
                                <img src="images/index-v10/g-cloud.svg" alt="">  
                                    <div class="text-part">    
                                <strong>Google Cloud Platform</strong><span>Custom ML Models</span></div>
                                </div>
                                <div class="percentage">

                                </div>
                            </li>
                        </ul>
                        <div class="card-footer">
                            <div class="avatars">
                                <img src="images/users-img.png" alt="Dev">

                            </div>
                            <p><strong>700+</strong> Senior Engineers available</p>
                            <a href="#" class="btn-secondry">View All </a>
                        </div>
                    </div>
                    <div class="stack-card">
                        <div class="card-head">
                            <h3>Frontend</h3>
                            <p>Immediate Bench Ready</p>
                        </div>
                        <ul class="tech-list">
                            <li>
                                <div class="tech-info"> <img src="images/index-v10/react.svg" alt="">
                                    <div class="text-part">
                                        <strong>React</strong><span>Enterprise SPA & Next.js</span>
                                    </div>
                                </div>
                                <div class="percentage">
                                </div>
                            </li>
                            <li>
                                <div class="tech-info"><img src="images/index-v10/react.svg" alt="">
                                    <div class="text-part">
                                        <strong>Angular</strong><span>Large-scale CRM/ERP</span>
                                    </div>
                                    <div class="percentage">

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="tech-info">
                                <img src="images/index-v10/react.svg" alt="">  
                                    <div class="text-part">    
                                <strong>React</strong><span>Lightweight Dashboards</span></div>
                                </div>
                                <div class="percentage">

                                </div>
                            </li>
                            <li>
                                <div class="tech-info">
                                <img src="images/index-v10/react.svg" alt="">  
                                    <div class="text-part">    
                                <strong>React</strong><span>Type-safe delivery</span></div>
                                </div>
                                <div class="percentage">

                                </div>
                            </li>
                        </ul>
                        <div class="card-footer">
                            <div class="avatars">
                                <img src="images/users-img.png" alt="Dev">

                            </div>
                            <p><strong>700+</strong> Senior Engineers available</p>
                            <a href="#" class="btn-secondry">View All </a>
                        </div>
                    </div>
                   

                </div>
            </div>
</div>
</section>
<!-- Engineering Stacks end -->


<!-- new section -->
<section class="insights">
<div class="container">
<div class="insights__top-part">
<div>
    <h2>Insights for Growing Agencies</h2>
    <p>Practical reads on scaling delivery, protecting margins, and managing peak workload.</p>
</div>

<div class="master-btn button-v10 second">
                <!-- TEXT -->
                <a href="/contact" class="btn-circle">
                    <span class="text" data-text="Get in Touch">
                        <span class="text-default">Get in Touch</span>
                     
                    </span>

                    <!-- ARROW -->
                    <span class="circle">
                        <span class="arrow-default"><img src="<?php bloginfo('template_url'); ?>/v6.0/images/index-v10/move-right.svg" alt=""></span>
                    </span>
                </a>
            </div>
</div>

<div class="insights__grid">

<!-- Card 1 -->
<div class="blog-card">
    <div class="blog-card__image">
    <picture>
        <img src="<?php bloginfo('template_url'); ?>/v6.0/images/index-v10/growing-1.webp" alt="Blog Card 1">
    </picture>
    </div>

    <div class="blog-card__content">
    <span>WHITE LABEL SOLUTIONS</span>
    <h3>Scaling Delivery Without the Hiring Headaches</h3>

    <div class="blog-card__footer">
        <div class="author">
        <img src="<?php bloginfo('template_url'); ?>/v6.0/images/index-v10/users.webp" alt="">
        <div>
            <p>Kristi Ray</p>
            <span>Jan 22, 2026</span>
        </div>
        </div>

        <a href="#">Learn More </a>
    </div>
    </div>
</div>

<!-- Card 2 -->
<div class="blog-card">
    <div class="blog-card__image">
    <img src="<?php bloginfo('template_url'); ?>/v6.0/images/index-v10/growing-2.webp" alt="Blog Card 2">
    </div>
    <div class="blog-card__content">
    <span>ECOMMERCE</span>
    <h3>Protecting Your Agency Margins in 2025</h3>
    <div class="blog-card__footer">
        <div class="author">
        <img src="<?php bloginfo('template_url'); ?>/v6.0/images/index-v10/users.webp" alt="">
        <div>
            <p>Kristi Ray</p>
            <span>Jan 22, 2026</span>
        </div>
        </div>
        <a href="#">Learn More </a>
    </div>
    </div>
</div>

<!-- Card 3 -->
<div class="blog-card">
    <div class="blog-card__image">
    <picture>
        <img src="<?php bloginfo('template_url'); ?>/v6.0/images/index-v10/growing-3.webp" alt="Blog Card 3">
    </picture>
    </div>

    <div class="blog-card__content">
    <span>DIGITAL MARKETING</span>
    <h3>Managing Peak Workloads: A Guide for Agency Owners</h3>

    <div class="blog-card__footer">
        <div class="author">
        <img src="<?php bloginfo('template_url'); ?>/v6.0/images/index-v10/users.webp" alt="">
        <div>
            <p>Kristi Ray</p>
            <span>Jan 22, 2026</span>
        </div>
        </div>

        <a href="#">Learn More </a>
    </div>
    </div>
</div>
</div>
</div>
</section>

<?php 
$faqSection = get_field('faq-group');
if( isset($faqSection['is_enabled']) && ($faqSection['is_enabled'] == "yes") ) :
?>
<section class="faq-section-v10">
<div class="container">
<div class="inner-part">

<!-- LEFT CONTENT -->
<div class="faq-left">
    <?php echo ( $faqSection['content'] ) ? $faqSection['content'] : ''; ?>
</div>
<!-- RIGHT ACCORDION -->
<div class="faq-right">
    <?php 
    if( isset($faqSection['faq']) && !empty($faqSection['faq']) ){
        foreach($faqSection['faq'] as $index => $faq){
            $activeClass = ($index == 0) ? 'active' : '';
            echo '<div class="faq-item '.$activeClass.'">';
            echo '<div class="faq-question">';
            echo '<h3>'.$faq['question'].'</h3>';
            echo '<span class="icon"></span>';
            echo '</div>';
            echo '<div class="faq-answer">'.$faq['answer'].'</div>';
            echo '</div>';
        }
    }
    ?>   
</div>
</div>
</div>
</section>
<?php endif; ?>
<?php get_template_part('components/testimonails', 'v10'); ?>
<?php //get_template_part('components/industries', 'v10'); ?>
<!-- new section -->
<?php get_footer(); ?>