var scrollpos = window.scrollY;

document.addEventListener("scroll", function () {
    scrollpos = window.scrollY;
    if (scrollpos > 10) {
        document.getElementById('topnav').style.backgroundColor='#FFFFFF';
        document.getElementById('home').style.color='#000000';
    }
    else {
        document.getElementById('topnav').style.backgroundColor='transparent';
        document.getElementById('home').style.color='#FFFFFF';
    }
});
