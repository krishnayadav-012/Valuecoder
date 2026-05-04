<?php require_once 'common/inc/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>indestry page</title>
    <meta name="description"
        content="Want to hire PHP developers for your web development project? Hire PHP programmers / developers from us & build scalable & secure web apps. 17+ Yrs | 4200+ projects | Strict NDAs | dedicated PHP Programmers." />
    <meta name="keywords"
        content="Hire PHP developers, Hire PHP programmers, Hire PHP developers India, Hire PHP programmers India, Offshore PHP developers, Offshore PHP programmers, Offshore PHP developers India, Offshore PHP programmers India, Dedicated PHP developers, dedicated PHP Programmers" />
    <meta property="og:title"
        content="" />
    <?php require_once './include/header-files.php'; ?>
    <link rel="preload stylesheet" type="text/css" href="./css/industries-v11.css" defer />

    <link rel="preload stylesheet" type="text/css"
        href=" https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.1/css/glide.core.css" defer />
    <script>
        var vcObj = {
            "_version": "1763614476",
            "tpl_url": "http://localhost/markup-dom/valuecoders/master",
            "web_url": "http://localhost/markup-dom/valuecoders/master",
            "admin_ajax": "https://www.valuecoders.com/staging/wp-admin/admin-ajax.php",
            "page_tpl": "tpl-homev6.0.php",
            "is_mobile": "false",
            "_env": "staging",
            "_v3_blog_post": "",
            "_post_id": "19655",
            "_cs_data": null,
            "_blog_tag": ""
        };
    </script>

    <script defer src="menu.js"></script>
</head>

<body>
    <?php require_once './include/menu-v8.php'; ?>

    <section class="hero-section">
        <div class="container">
            <div class="dis-flex">
                <div class="left-box">
                    <h1>Build Faster. Ship with Confidence. <span>Scale Without Hiring Delays.</span></h1>
                    <p>We help engineering-led companies design, build, and scale software using dedicated development
                        teams, product engineering pods, and staff augmentation services — onboarded in 2–4 weeks with
                        full IP ownership and predictable delivery.</p>

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

   

    <!-- feedback section start -->


    <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>

    <script>


        // scroll functoin
        document.addEventListener('DOMContentLoaded', () => {
            const listItems = document.querySelectorAll('.content-side ul li');
            const serviceCards = document.querySelectorAll('.service-card');
            const cardsContainer = document.querySelector('.cards-side');

            // --- 1. CLICK FUNCTIONALITY ---
            listItems.forEach((li, index) => {
                li.addEventListener('click', () => {
                    // Scroll the specific card into view
                    serviceCards[index].scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });

                    // Update active state manually (optional, as observer will also catch it)
                    updateActiveState(index);
                });
            });

            // --- 2. SCROLL / INTERSECTION OBSERVER ---
            const observerOptions = {
                root: null, // relative to viewport
                rootMargin: '-10% 0px -70% 0px', // Adjusts the "trigger" zone
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Find index of the card currently in view
                        const index = Array.from(serviceCards).indexOf(entry.target);
                        updateActiveState(index);
                    }
                });
            }, observerOptions);

            serviceCards.forEach(card => observer.observe(card));

            // Helper function to sync classes
            function updateActiveState(index) {
                if (index === -1) return;

                // Reset all
                listItems.forEach(li => li.classList.remove('active'));
                serviceCards.forEach(card => card.classList.remove('active-card'));

                // Set active
                listItems[index].classList.add('active');
                serviceCards[index].classList.add('active-card');
            }
        });









        // industruies start```````````````````````````````````````````````````````````````````````

        window.addEventListener('load', function () {
            new Glider(document.querySelector('.glider'), {
                slidesToShow: 1.2, // Mobile
                slidesToScroll: 1,
                draggable: true,
                arrows: {
                    prev: '.glider-prev',
                    next: '.glider-next'
                },
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2.4,
                        }
                    },
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3.5, // Matches the "peek" effect in your image
                            slidesToScroll: 1,
                        }
                    }
                ]
            });


            // expertise slider ````````````````````````````````````````````````````````````
            new Glider(document.querySelector('.stack-grid.glider'), {
                // Mobile first defaults
                slidesToShow: 1,
                slidesToScroll: 1,
                draggable: true,
                // dots: '#dots',
                arrows: {
                    prev: '.stack-prev',
                    next: '.stack-next'
                },
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                        }
                    }
                ]
            });

            // feedback section```````````````````````````````````````````````````````
            
                const glider = new Glider(document.querySelector('.testimonial-cards.glider'), {
                    slidesToShow: 1,
                    draggable: true,
                    dots: '#dots',
                    scrollLock: true,
                    centerMode: true,
                    responsive: [
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 1,
                                duration: 0.5
                            }
                        }
                    ]
                });
                
                const avatars = [
                    'images/feedback-slid-icon.png',
                    'images/feedback-slid-icon.png',
                    'images/feedback-slid-icon.png',
                    'images/feedback-slid-icon.png',
                    
                    
                ];

                const dots = document.querySelectorAll('.glider-dot');
                dots.forEach((dot, index) => {
                    if (avatars[index]) {
                        dot.style.backgroundImage = `url(${avatars[index]})`;
                        dot.innerText = ''; // Clear the default dot text
                    }
                });
            




        });

        // industruies end

        // feedback start
        // Use a self-invoking function or window.onload to ensure the library is ready
        window.addEventListener('load', function () {
            const sliderElement = document.querySelector('.v-testimonial-glider');

            if (sliderElement && typeof Glider === 'function') {
                new Glider(sliderElement, {
                    slidesToShow: 1.05, // Peek on mobile
                    slidesToScroll: 1,
                    draggable: true,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 1.2, // Professional peek on desktop as per image
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
                console.log("Slider initialized successfully.");
            } else {
                console.error("Glider.js not found or slider element missing.");
            }
        });
        // feedback end

        // <!-- new sections js start-->

        document.addEventListener("DOMContentLoaded", () => {
            const faqItems = document.querySelectorAll(".faq-item");

            faqItems.forEach((item) => {
                const question = item.querySelector(".faq-question");

                question.addEventListener("click", () => {
                    // 1. Check if the clicked item is already active
                    const isActive = item.classList.contains("active");

                    // 2. Remove 'active' class from ALL items
                    faqItems.forEach((el) => el.classList.remove("active"));

                    // 3. If the clicked item wasn't active, open it
                    if (!isActive) {
                        item.classList.add("active");
                    }
                });
            });
        });
    </script>

    <!-- new sections js end -->




    <section class="contact-us-section padding-t-120 padding-b-120">
        <?php require_once 'include/contact-form.php'; ?>
    </section>
    <?php require_once 'include/footer.php'; ?>



    <script>
        // Function to initialize tabs
        function initializeTabs(sectionSelector) {
            const sections = document.querySelectorAll(sectionSelector);

            sections.forEach((section) => {
                const tabs = section.querySelectorAll(".tab");
                const contents = section.querySelectorAll(".content");
                const images = section.querySelectorAll(".tab-image");

                tabs.forEach((tab) => {
                    tab.addEventListener("click", () => {
                        const target = tab.getAttribute("data-target");

                        // Reset active state for tabs, content, and images
                        tabs.forEach((t) => t.classList.remove("active"));
                        contents.forEach((content) => content.classList.remove("active"));
                        images.forEach((image) => image.classList.remove("active"));

                        // Set active state for clicked tab, content, and image
                        tab.classList.add("active");
                        section.querySelector(`#${target}`).classList.add("active");
                        section.querySelector(`#img-${target}`).classList.add("active");
                    });
                });
            });
        }

        // Initialize all tab sections
        document.addEventListener("DOMContentLoaded", () => {
            initializeTabs(".tabs-section");
        });



        document.addEventListener('DOMContentLoaded', () => {
            const section = document.querySelector('.service-scroller');
            if (section) {
                window.addEventListener('scroll', () => {
                    const rect = section.getBoundingClientRect();
                    const inViewport = rect.top >= 0 && rect.bottom <= window.innerHeight;
                });
            }

        });




        if (document.getElementById("solution-slide")) {
            window.addEventListener("load", () => {
                const gliderElement = document.querySelector(".solution-slider .glider");
                const progressBar = document.querySelector(".solution-progress-bar");

                if (gliderElement && progressBar) {
                    let glider; // Declare glider variable

                    glider = new Glider(gliderElement, {
                        slidesToShow: 5,
                        slidesToScroll: 1,
                        draggable: true,
                        duration: 2.25,
                        dots: ".dots",
                        arrows: {
                            prev: ".tail-prev",
                            next: ".tail-next",
                        },
                        responsive: [
                            {
                                breakpoint: 1024,
                                settings: {
                                    slidesToShow: 5,
                                    slidesToScroll: 1,
                                },
                            },
                            {
                                breakpoint: 768,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 1,
                                },
                            },
                            {
                                breakpoint: 480,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1,
                                },
                            },
                        ],
                    });

                    // Update progress bar
                    function updateProgress() {
                        const currentSlide = glider.slide;
                        const totalSlides = glider.slides.length;
                        const slidesToShow = glider.opt.slidesToShow;
                        const maxSlides = totalSlides - slidesToShow;
                        const progress = (currentSlide / maxSlides) * 100;
                        progressBar.style.width = `${Math.min(100, Math.max(0, progress))}%`;
                    }

                    // Initialize progress bar
                    updateProgress();

                    // Update progress bar when slides change
                    gliderElement.addEventListener("glider-slide-visible", updateProgress);

                    // Add smooth transition when slides move
                    gliderElement.addEventListener("glider-refresh", () => {
                        gliderElement.style.transition = "transform 0.5s ease";
                    });

                    // Handle arrow clicks
                    const prevArrow = document.querySelector(".tail-prev");
                    const nextArrow = document.querySelector(".tail-next");

                    prevArrow.addEventListener("click", () => {
                        setTimeout(updateProgress, 50); // Small delay to ensure glider state is updated
                    });

                    nextArrow.addEventListener("click", () => {
                        setTimeout(updateProgress, 50); // Small delay to ensure glider state is updated
                    });

                    // Handle window resize
                    let resizeTimer;
                    window.addEventListener("resize", () => {
                        clearTimeout(resizeTimer);
                        resizeTimer = setTimeout(() => {
                            glider.refresh(true);
                            updateProgress();
                        }, 250);
                    });
                }
            });
        }



        if (document.getElementById("industries-glider")) {
            window.addEventListener("load", function () {
                var gliderElement = document.querySelector(".industries-slider .glider");
                if (gliderElement) {
                    new Glider(gliderElement, {
                        slidesToShow: 6, // Default for large screens
                        slidesToScroll: 1,
                        draggable: true,
                        scrollLock: true,
                        duration: 2.25,
                        dots: ".industries-slider .dots",
                        arrows: { prev: "#industries-glider .test-prev", next: "#industries-glider .test-next" },
                        responsive: [
                            { breakpoint: 320, settings: { slidesToShow: 1, slidesToScroll: 1, itemWidth: '100%', duration: 2.25 } },
                            { breakpoint: 767, settings: { slidesToShow: 1, slidesToScroll: 1, itemWidth: '100%', duration: 2.25 } },
                            { breakpoint: 1024, settings: { slidesToShow: 2, slidesToScroll: 1, itemWidth: '50%', duration: 2.25 } },
                            { breakpoint: 1400, settings: { slidesToShow: 6, slidesToScroll: 1, itemWidth: '16.66%', duration: 2.25 } }
                        ]
                    });
                }
            });
        }





        if (document.getElementById("client-slider")) {
            window.addEventListener("load", () => {
                const gliderElement = document.querySelector(".client-slider .glider");
                const progressBar = document.querySelector(".client-progress-bar");

                if (gliderElement && progressBar) {
                    let glider; // Declare glider variable

                    glider = new Glider(gliderElement, {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        draggable: true,
                        duration: 2.25,
                        dots: ".dots",
                        arrows: {
                            prev: ".cl-prev",
                            next: ".cl-next",
                        },
                        responsive: [
                            {
                                breakpoint: 1024,
                                settings: {
                                    slidesToShow: 3,
                                    slidesToScroll: 1,
                                },
                            },
                            {
                                breakpoint: 979,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 1,
                                },
                            },
                            {
                                breakpoint: 767,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 1,
                                },
                            },
                        ],
                    });

                    // Update progress bar
                    function updateProgress() {
                        const currentSlide = glider.slide;
                        const totalSlides = glider.slides.length;
                        const slidesToShow = glider.opt.slidesToShow;
                        const maxSlides = totalSlides - slidesToShow;
                        const progress = (currentSlide / maxSlides) * 100;
                        progressBar.style.width = `${Math.min(100, Math.max(0, progress))}%`;
                    }

                    // Initialize progress bar
                    updateProgress();

                    // Update progress bar when slides change
                    gliderElement.addEventListener("glider-slide-visible", updateProgress);

                    // Add smooth transition when slides move
                    gliderElement.addEventListener("glider-refresh", () => {
                        gliderElement.style.transition = "transform 0.5s ease";
                    });

                    // Handle arrow clicks
                    const prevArrow = document.querySelector(".cl-prev");
                    const nextArrow = document.querySelector(".cl-next");

                    prevArrow.addEventListener("click", () => {
                        setTimeout(updateProgress, 50); // Small delay to ensure glider state is updated
                    });

                    nextArrow.addEventListener("click", () => {
                        setTimeout(updateProgress, 50); // Small delay to ensure glider state is updated
                    });

                    // Handle window resize
                    let resizeTimer;
                    window.addEventListener("resize", () => {
                        clearTimeout(resizeTimer);
                        resizeTimer = setTimeout(() => {
                            glider.refresh(true);
                            updateProgress();
                        }, 250);
                    });
                }
            });
        }





        if (document.getElementById("success-glider")) {
            window.addEventListener("load", function () {
                var gliderElement = document.querySelector(".success-slider .glider");
                if (gliderElement) {
                    new Glider(gliderElement, {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        draggable: true,
                        scrollLock: true,
                        duration: 2.25,
                        dots: ".success-slider .dots",
                        arrows: {
                            prev: "#success-glider .test-prev",
                            next: "#success-glider .test-next"
                        },
                        responsive: [
                            // Mobile first: 320px and below
                            {
                                breakpoint: 320,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1,
                                    duration: 2.25,
                                },
                            },
                            // Tablets: 767px and below
                            {
                                breakpoint: 767,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1,
                                    duration: 2.25,
                                },
                            },
                            // Laptops: 1024px and below
                            {
                                breakpoint: 1024,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 2,
                                    duration: 2.25,
                                },
                            },
                            // Large screens: 1400px and below
                            {
                                breakpoint: 1400,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 2,
                                    duration: 2.25,
                                },
                            },
                        ],
                    });
                }
            });
        }







    </script>
</body>

</html>



























<!-- 
section prempt 

create this section 



same design as image 



section top 

left part has title and right part has section discription 



and the slider part has 



slide card has left and right part 

the left part has slide data like (h3) heading and card discription and list 



please create list stylecheck icon by before  and fint out more ancter tag right icon should also use by css







and card right side has h image 



and bottom has slide menu and CARD slide arrow  and when i click 



which are showing bottom in section the card is active  so the menu also active 



if i use muntupal card  and card menu so it will be scroll on slide byy button and when i clisk on card menu which are showing in bottom so the slide will change 



and the slide should show both slide of 10% 



before and after slide should visiable  visiable 10%  like in image  -->