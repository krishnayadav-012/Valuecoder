const items = document.querySelectorAll(".ai-item");

let current = 0;
let duration = 4000; // 4 sec per item
let timer;

function startProgress(index) {

    clearTimeout(timer);

    items.forEach(item => {

        item.classList.remove("active");

        let bar = item.querySelector(".progress");
        bar.style.width = "0%";
        bar.style.transition = "none";

    });

    let activeItem = items[index];
    activeItem.classList.add("active");

    let progress = activeItem.querySelector(".progress");

    setTimeout(() => {

        progress.style.transition =
            `width ${duration}ms linear`;

        progress.style.width = "45%";

    }, 50);

    timer = setTimeout(() => {

        current++;

        if (current >= items.length) {
            current = 0;
        }

        startProgress(current);

    }, duration);

}

/* CLICK FUNCTION */

items.forEach((item, index) => {

    item.addEventListener("click", () => {

        current = index;
        startProgress(current);

    });

});

/* AUTO START */

startProgress(current);