let btn = document.getElementById("top");

window.onscroll = function () { scroll() };

function scroll() {
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        btn.style.display = "block";
    }
    else {
        btn.style.display = "none";
    }
}

btn.addEventListener('click', function rTop(event) {
    document.body.scrollTop = 0; // Safari
    document.documentElement.scrollTop = 0; // Chrome, Firefox, IE and Opera
});