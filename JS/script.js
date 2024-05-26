let slideIndex = 0;
showSlides();

function showSlides() {
    let i;

    let slides = document.getElementsByClassName("mySlides");

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slideIndex++;

    if (slideIndex > slides.length) {
        slideIndex = 1
    }

    slides[slideIndex - 1].style.display = "block";
    
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}

function openPage(pageName, elmnt, color) {
    var i, tabcontent, tablinks;

    tabcontent = document.getElementsByClassName("tabcontent");

    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    document.getElementById(pageName).style.display = "block";

    elmnt.style.backgroundColor = color;
}

document.getElementById("defaultOpen").click();