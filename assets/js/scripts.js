
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))

// Get the value of the dir=""
var textDirectionOfTheDom = document.querySelector('html').getAttribute('dir');



/*  
  -------------------------------------------
  -----      JS for loader-wrapper      -----
  -------------------------------------------
*/

window.addEventListener("load", function(event){
    var loaderWrapper = document.querySelector('.loader-wrapper');
    if (loaderWrapper) {
        loaderWrapper.style.display = "none";
    } 

    // initialize the AOS
    if (typeof AOS === 'object') {
        AOS.init({
            offset: 0,
            once: true,
        });
    }
})



/*  
  ---------------------------------------------------------------------
  -----      JS to update all the current year automatically      -----
  ---------------------------------------------------------------------
*/

var currentYear = new Date().getFullYear();
var currentYearTag = document.getElementsByClassName("current-year");

if (currentYearTag.length > 0) {
    for (var i = 0; i < currentYearTag.length; i++) {
        currentYearTag[i].innerHTML = currentYear;
    }
}



/*  
  --------------------------------------------------
  -----      JS for scroll to the section      -----
  --------------------------------------------------
*/

function scrollToSection(sectionId) {
    // Hide the navigation menu
    var navCollapse = document.querySelector('.offcanvas.show');
    if (navCollapse) {
        navCollapse.classList.remove('show');
    }

    // Scroll to the target section
    var section = document.querySelector(sectionId);
    var offset = 0; // Adjust this value to account for fixed headers
    if (section) {
        var top = section.offsetTop - offset;
        window.scrollTo({
            top: top,
            behavior: 'smooth'
        });
    }
}



/*  
  -----------------------------------------------
  -----      JS for button back to top      -----
  -----------------------------------------------
*/

let btnBackToTop = document.querySelector(".btn-back-to-top");

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

// When the user scrolls down 800px from the top of the document, show the button
function scrollbtnBackToTopFun() {
    if ( document.body.scrollTop > 800 || document.documentElement.scrollTop > 800 ) {
        btnBackToTop.style.display = "inline-flex";
    } else {
        btnBackToTop.style.display = "none";
    }
}

window.onscroll = function () {
    if (btnBackToTop) {
        scrollbtnBackToTopFun();
    }
};

// When the user clicks on the button, scroll to the top of the document
if (btnBackToTop) {
    btnBackToTop.addEventListener("click", backToTop);
}



/*  
  --------------------------------------------------
  -----      JS for header top navigation      -----
  --------------------------------------------------
*/

const navigation = document.querySelector('.navigation');
if (navigation) {
    
    navigation.style.transition = 'top 2s';
    let lastScrollTop = 0;

    window.addEventListener('scroll', () => {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop) {
            // Scrolling down
            if (scrollTop > 300) {
                navigation.classList.add("fixed-top");
                navigation.classList.remove("position-absolute");
                navigation.style.top = '-190px'; // Hide the navigation menu
            }
        } else {
            // Scrolling up
            if (scrollTop > 300) {
                navigation.classList.add("fixed-top");
                navigation.classList.remove("position-absolute");
                navigation.style.top = '0'; // Show the navigation menu
            } else {
                navigation.classList.remove("fixed-top");
                navigation.classList.add("position-absolute");
                navigation.style.top = ''; // Reset top style
            }
        }

        lastScrollTop = scrollTop;
    });
}





