function myFunction() {
    document.getElementById("demo").innerHTML = "Paragraph changed.";
}

                                                // Reservations Page.
var modal = document.getElementById('id01');

                                                // When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
                                                //Home Page - Slideshow
var slideIndex = 0;
showSlides();
function currentSlide(n) {
    slideIndex = n-1;
}
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000);                   // Change image every 4 seconds
}
function chooseRoom(r){
    var j;
    var room = document.getElementsByClassName("imghover");
    var radio = document.getElementsByName("roomType");
    for(j = 0; j < room.length; j++){
        room[j].style.backgroundColor = "#0e0d0d";
        room[j].style.color = "white";
    }
    room[r].style.backgroundColor = "hotpink";
    room[r].style.color = "#0e0d0d";
    radio[r].checked = true;
    /*switch (r) {
        case 1:
            room[1].style.backgroundColor = "#c9d700";
            room[1].style.color = "#0e0d0d";
    }*/
}