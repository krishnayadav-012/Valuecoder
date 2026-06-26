const topIcon = document.querySelector(".fixed_top_icon");

window.addEventListener("scroll", function () {
    if (window.scrollY > 500) {
        topIcon.classList.add("active");
    } else {
        topIcon.classList.remove("active");
    }
});

topIcon.addEventListener("click", function () {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});



const items = document.querySelectorAll(".ai-item");

let current = 0;
let duration = 4000; // 4 sec
let timer;

function startProgress(index) {

    clearTimeout(timer);

    items.forEach(item => {

        item.classList.remove("active");

        let bar = item.querySelector(".progress");

        bar.style.transition = "none";
        bar.style.width = "0%";

    });

    let activeItem = items[index];

    activeItem.classList.add("active");

    let progress =
        activeItem.querySelector(".progress");

    /* small delay before animation */

    setTimeout(() => {

        progress.style.transition =
            `width ${duration}ms linear`;

        progress.style.width = "100%";

    }, 50);

    timer = setTimeout(() => {

        current++;

        if (current >= items.length) {
            current = 0;
        }

        startProgress(current);

    }, duration);

}

/* CLICK */

items.forEach((item, index) => {

    item.addEventListener("click", () => {

        current = index;

        startProgress(current);

    });

});


// ``````````````````````






    // faq section
    const faqItems = document.querySelectorAll(".faq-item");

    faqItems.forEach(item => {
      const button = item.querySelector(".faq-question");

      button.addEventListener("click", () => {
        const isActive = item.classList.contains("active");

        // close all
        faqItems.forEach(i => i.classList.remove("active"));

        // open clicked if it was closed
        if (!isActive) {
          item.classList.add("active");
        }
      });
    });




const circularProgress = document.querySelectorAll(".circular-progress");

Array.from(circularProgress).forEach((progressBar) => {
  const progressValue = progressBar.querySelector(".percentage");
  const innerCircle = progressBar.querySelector(".inner-circle");
  let startValue = 0,
    endValue = Number(progressBar.getAttribute("data-percentage")),
    speed = 50,
    progressColor = progressBar.getAttribute("data-progress-color");

  const progress = setInterval(() => {
    startValue++;
    progressValue.textContent = `${startValue}%`;
    progressValue.style.color = `${progressColor}`;

    innerCircle.style.backgroundColor = `${progressBar.getAttribute(
      "data-inner-circle-color"
    )}`;

    progressBar.style.background = `conic-gradient(${progressColor} ${
      startValue * 3.6
    }deg,${progressBar.getAttribute("data-bg-color")} 0deg)`;
    if (startValue === endValue) {
      clearInterval(progress);
    }
  }, speed);
});