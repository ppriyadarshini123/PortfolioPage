/*import '../node_modules/bootstrap/dist/js/bootstrap.min.js';
import '../node_modules/pixi.js/dist/pixi.min.js';
import '../node_modules/pixi.js-legacy/dist/pixi-legacy.js';
import '../dist/js/pixi.js';
import '../node_modules/requestanimationframe/app/requestAnimationFrame.js';
import $ from 'jquery';
import '../node_modules/popper.js/dist/popper.min.js';
import '../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js';
import '../dist/js/jquery.carousel.js';
import '../dist/js/jcarousel.responsive.js';*/

import enquire from 'enquire.js';



(function(){

    const submit = document.getElementsByClassName("submitBtn");
    const contactForm = document.getElementsByClassName("contactFormArea");
    const $menuIcon = $('#openNav');
    const $mySql = $('#mysql');
    const $openWindow = $('#openWindow');

    /**
     * @name mobile
     * @desc code for the changing picture when the tabs are clicked, for the mobile viewport
     */
    /*  function mobile()
      {
          enquire.register("screen and (max-width:360px)", {
              match: function(){


              },/!*match*!/
              unmatch: function(){

              }/!*unmatch*!/
          });/!*enquire.register*!/
      }//mobile*/

    /**
     * This code is to dislay the .documents block using JQuery
     */
    /* $(function() {*/
    $(document).ready(function(){
        $mySql.click(function() {
            $openWindow.toggle("fast");
        });
    });
    /*});*/

    /*This is the javascript way of displayingblock*/
    /* function myFunction() {
         document.getElementById("openWindow").style.display = "block";
     }*/

    /**
     * @name validation
     * @desc CONTACT FORM SUBMIT BUTTON VALIDATION - validation for name, phone and email
     */
    function validation()
    {
        if(submit){
            /*submit is a HTMlCollection, therefore we start a loop, for click event*/
            for(let j=0; j< submit.length; j++) {
                submit[j].addEventListener("click", function () {
                        const txtBox = document.getElementsByClassName("txtBox");

                        /*Name*/
                        if (!txtBox[0].checkValidity()) {
                            if (txtBox[0].validity.valueMissing)
                                document.getElementsByClassName("formMessage")[0].innerHTML = txtBox[0].validationMessage;
                            else if (!isNaN(parseInt(document.getElementsByClassName("txtBox")[0].value)))
                                document.getElementsByClassName("formMessage")[0].innerHTML = "Please enter characters only.";
                            else
                                document.getElementsByClassName("formMessage")[0].innerHTML = "";
                        }/*if(!txtBox[0].checkValidity())*/

                        /*Email address*/
                        if (!txtBox[1].checkValidity()) {
                            if (txtBox[1].validity.valueMissing)
                                document.getElementsByClassName("formMessage")[1].innerHTML = txtBox[1].validationMessage;
                            else if (txtBox[1].validity.patternMismatch)
                                document.getElementsByClassName("formMessage")[1].innerHTML = "Please enter a valid email address.";

                        }/*if(!txtBox[1].checkValidity())*/
                        else
                        {
                            document.getElementsByClassName("formMessage")[2].innerHTML = "";
                        }/*else*/

                        /* Submit the form*/
                        /*TODO Using PHP send email about form submission. I need PHPStorm subsciption.*/
                        /*Display message after form submission*/
                        /*console.log(document.getElementsByClassName("submitMessage"));*/
                        document.getElementsByClassName("submitMessage")[0].innerHTML = "Sorry, this feature is not yet implemented. Please send an email to Payal at payal.priyadarshini@gmail.com";

                        /* document.contactForm.submit();*/
                    }/*submit.addEventListener*/
                )/*submit.addEventListener*/
            }/*For tabName*/
        }/*if*/
    }//validation

    /* /!**
      * @name postersSlider
      * @desc Sliding all posters on posters.html
      *!/
     function postersSlider()
     {
         var slideIndex = 1;
         showSlides(slideIndex);

 // Next/previous controls
         function plusSlides(n) {
             showSlides(slideIndex += n);
         }

 // Thumbnail image controls
         function currentSlide(n) {
             showSlides(slideIndex = n);
         }

         function showSlides(n) {
             var i;
             var slides = document.getElementsByClassName("mySlides");
             var dots = document.getElementsByClassName("dot");
             if (n > slides.length) {slideIndex = 1}
             if (n < 1) {slideIndex = slides.length}
             for (i = 0; i < slides.length; i++) {
                 slides[i].style.display = "none";
             }
             for (i = 0; i < dots.length; i++) {
                 dots[i].className = dots[i].className.replace(" active", "");
             }
             slides[slideIndex-1].style.display = "block";
             dots[slideIndex-1].className += " active";
         }
     }/!*postersSlider*!/*/

    /**
     * @name bindBtns
     * @desc this will bind all the elements to their events
     */
    function bindBtns() {
        validation();
        myFunction();
        postersSlider();
    }//bindBtns

    /**
     * @name init
     * @desc Initializing function
     */
    function init() {
        bindBtns();
    }//end init

    window.addEventListener("load", init);
})();//close iffy
