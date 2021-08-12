
// selector =============
const selectElement = function (element) {
    return document.querySelector(element);
};
// selector end=============

// timing ====================
function sleep(time) {
    return new Promise((resolve) => setTimeout(resolve, time));
}
// timing ====================


//  Fixed header
window.onscroll = function () {
    scrollFunc();
};

let header = document.getElementById("header");
let fix = header.nextElementSibling;
function scrollFunc() {
    if (window.pageYOffset > fix.offsetTop) {
        header.classList.add("fixed");
    } else {
        header.classList.remove("fixed");
    }
}

// Window click 
window.onclick = function (e) {
    if (selectElement('.navs_bg').classList.contains('active') && !e.target.closest('.navs')) {
        selectElement('.navs_bg').classList.remove('active')
    }

    if (selectElement('.navs').classList.contains('active') && !e.target.closest('.navs')) {
        selectElement('.navs').classList.remove('active')
    }

}

selectElement('.burger').addEventListener('click', function () {
    sleep(2).then(() => {
        selectElement('.navs_bg').classList.toggle('active');
        selectElement('.navs').classList.toggle('active');
    });
});