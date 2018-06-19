var slideIndex = 0;
var slideIndex2 = 0;
showSlides();
showSlides2(slideIndex2);

function showSlides() {
	var i;
	var slides = document.getElementsByClassName('mySlides');
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";  
	}
	slideIndex++;
	if (slideIndex > slides.length) {slideIndex = 1}    
	
	slides[slideIndex-1].style.display = "block"; 
	setTimeout(showSlides, 5000); // Change image every 5 seconds
}

function plusSlides(n) {
  showSlides2(slideIndex2 += n);
}

function currentSlide(n) {
  showSlides2(slideIndex2 = n);
}

function showSlides2(n) {
  var i;
  var slides2 = document.getElementsByClassName("mySlides2");
  if (n > slides2.length) {slideIndex2 = 1}    
  if (n < 1) {slideIndex2 = slides2.length}
  for (i = 0; i < slides2.length; i++) {
      slides2[i].style.display = "none";  
  }
  slides2[slideIndex2-1].style.display = "block"; 
}