let accpopup = document.getElementById('acc-popup'),
    accpopupToggle = document.getElementById('acc-Btn'),
    accpopupClose = document.querySelector('.acc-close');
    

accpopupToggle.onclick = function () {
    accpopup.style.display = "block";
};

accpopupClose.onclick = function () {
    accpopup.style.display = "none";
}

window.onclick = function (e) {
    if (e.target == accpopup) {
        accpopup.style.display = "none";
    }
};
let regpopup = document.getElementById('reg-popup'),
    regpopupToggle = document.getElementById('reg-Btn'),
    regpopupClose = document.querySelector('.reg-close');
    
regpopupToggle.onclick = function () {
    regpopup.style.display = "block";
};

regpopupClose.onclick = function () {
    regpopup.style.display = "none";
}

window.onclick = function (e) {
    if (e.target == regpopup) {
        regpopup.style.display = "none";
    }
}