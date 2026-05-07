// 
document.addEventListener("DOMContentLoaded", function () {
  const slider = document.querySelector("#home-tpl-logoslide");

  if (slider) {
    new Glide(slider, {
      type: "carousel",
      autoplay: 6000,
      animationDuration: 6000,
      animationTimingFunc: "linear",
      perView: 1,
      gap: 30,
      hoverpause: false
    }).mount();
  }
});




// progress line section fintech delivery



 const section = document.querySelector(".fintech-delivery");

        if (section) {

            const items = section.querySelectorAll(".ai-item");

            let current = 0;
            let duration = 4000;
            let timer;

            function startProgress(index) {

                clearTimeout(timer);

                items.forEach(item => {

                    item.classList.remove("active");

                    let bar = item.querySelector(".progress");

                    if (bar) {
                        bar.style.transition = "none";
                        bar.style.width = "0%";
                    }

                });

                let activeItem = items[index];

                if (!activeItem) return;

                activeItem.classList.add("active");

                let progress = activeItem.querySelector(".progress");

                setTimeout(() => {
                    if (progress) {
                        progress.style.transition = `width ${duration}ms linear`;
                        progress.style.width = "100%";
                    }
                }, 50);

                timer = setTimeout(() => {

                    current++;

                    if (current >= items.length) {
                        current = 0;
                    }

                    startProgress(current);

                }, duration);

            }

            items.forEach((item, index) => {

                item.addEventListener("click", () => {

                    current = index;
                    startProgress(current);

                });

            });

            startProgress(0);
        }



        // build slider`````````````````````````````````````````````````````````````````````````````````````````````````````````
          // build section 

       (function () {
    function initFintechSlider() {
        const section = document.querySelector('.fintech-section');
        if (!section) return;

        const slider = section.querySelector('.cards');
        const prevBtn = section.querySelector('.glider-prev');
        const nextBtn = section.querySelector('.glider-next');
        const menuItems = section.querySelectorAll('#menu li');

        if (!slider) return;

        // Destroy existing instance if re-initializing
        if (slider._glider) {
            slider._glider.destroy();
        }

        const glider = new Glider(slider, {
            slidesToShow: 1,
            slidesToScroll: 1,
            draggable: true,
            scrollLock: true,
            scrollLockDelay: 150,
            resizeLock: true,
            arrows: {
                prev: prevBtn || null,
                next: nextBtn || null
            }
        });

        // AUTOPLAY
        let autoplayInterval;
        const autoplayDelay = 3000; // 3 seconds

        function startAutoplay() {
            stopAutoplay();
            autoplayInterval = setInterval(() => {
                const totalSlides = slider.querySelectorAll('.slide-card').length;
                const currentIndex = glider.slide || 0;
                const nextIndex = (currentIndex + 1) % totalSlides;
                glider.scrollItem(nextIndex);
            }, autoplayDelay);
        }

        function stopAutoplay() {
            clearInterval(autoplayInterval);
        }

        // Pause on hover/drag, resume on leave
        slider.addEventListener('mouseenter', stopAutoplay);
        slider.addEventListener('mouseleave', startAutoplay);
        slider.addEventListener('glider-drag-start', stopAutoplay);
        slider.addEventListener('glider-drag-end', startAutoplay);

        // MENU CLICK
        menuItems.forEach((item) => {
            item.addEventListener('click', () => {
                const index = parseInt(item.getAttribute('data-i'), 10);
                glider.scrollItem(index);
                setActiveMenu(index);
                stopAutoplay();
                startAutoplay(); // reset timer on manual click
            });
        });

        // Arrow click — reset autoplay timer
        [prevBtn, nextBtn].forEach(btn => {
            if (btn) {
                btn.addEventListener('click', () => {
                    stopAutoplay();
                    startAutoplay();
                });
            }
        });

        // SYNC MENU on slide change
        ['glider-slide-visible', 'glider-slide-shown'].forEach(eventName => {
            slider.addEventListener(eventName, (e) => {
                const index = e.detail && e.detail.slide !== undefined
                    ? e.detail.slide
                    : 0;
                setActiveMenu(index);
            });
        });

        function setActiveMenu(index) {
            menuItems.forEach(i => i.classList.remove('active'));
            if (menuItems[index]) {
                menuItems[index].classList.add('active');
            }
        }

        // Set first item active by default
        setActiveMenu(0);

        // Start autoplay
        startAutoplay();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initFintechSlider);
    } else {
        initFintechSlider();
    }

})();


// ```````````````````````````````````````````````````

 // ~~~~~~~~~~~~~~ delivery works ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        document.addEventListener('DOMContentLoaded', () => {
            // Select the trigger divs within right-part
            const triggers = document.querySelectorAll('.right-part .accordion-trigger');

            triggers.forEach(trigger => {
                trigger.addEventListener('click', function () {
                    const currentItem = this.parentElement;
                    const isOpen = currentItem.classList.contains('active');

                    // Condition: Close all other open items in this section
                    const allItems = document.querySelectorAll('.right-part .accordion-item');
                    allItems.forEach(item => {
                        item.classList.remove('active');
                    });

                    // Toggle current: Open if it was closed
                    if (!isOpen) {
                        currentItem.classList.add('active');
                    }
                });
            });
        });
        // `````````~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


 // `````````~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


       (function () {

    const buttons = document.querySelectorAll('.production-tech button');
    const logoLists = document.querySelectorAll('.logos-part ul');

    function showTab(key) {
        logoLists.forEach(ul => {
            ul.classList.toggle('active', ul.getAttribute('data-tab') === key);
        });
    }

    buttons.forEach(btn => {
        btn.addEventListener('click', () => {
            buttons.forEach(b => b.setAttribute('data-active', 'false'));
            btn.setAttribute('data-active', 'true');

            const key = btn.textContent.trim()
                .replace(/&amp;/g, '&')
                .replace(/\u00a0/g, ' ');
            showTab(key);
        });
    });

    // Load first tab by default
    if (buttons.length > 0) {
        buttons[0].setAttribute('data-active', 'true');
        const defaultKey = buttons[0].textContent.trim()
            .replace(/&amp;/g, '&')
            .replace(/\u00a0/g, ' ');
        showTab(defaultKey);
    }

})();