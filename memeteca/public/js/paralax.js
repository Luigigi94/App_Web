window.onscroll=function () {
    $('.parallax-img').css({
        top: "-" + (window.scrollY/5)+"px"
    });
};
