<!-- import enquire from 'enquire.js';-->



(function(){

    const submit = document.getElementsByClassName("submitBtn");
    const contactForm = document.getElementsByClassName("contactFormArea");
    const $menuIcon = $('#openNav');
    const $mySql = $('#mysql');
    const $openWindow = $('#openWindow');

    /**
     * This code is to display the .documents block using JQuery
     */
    /* $(function() {*/
    $(document).ready(function(){
        $mySql.click(function() {
            $openWindow.toggle("fast");
        });
    });


    /**
     * @name validation
     * @desc CONTACT FORM SUBMIT BUTTON VALIDATION - validation for name, phone and email
     */
    function validation()
    {
        console.log(submit);
        if(submit){
            /*submit is a HTMlCollection, therefore we start a loop, for click event*/
            for(let j=0; j< submit.length; j++) {
                submit[j].addEventListener("click", function () {
                        const txtBox = document.getElementsByClassName("txtBox");                        
                        
//                        $(function(){
//    $("input[name=Password]")[0].oninvalid = function () {
//        this.setCustomValidity("Please enter at least 5 characters.");    };
//});
                        
//                        /*Name*/
//                        if (!txtBox[0].checkValidity()) {
//                            if (txtBox[0].validity.valueMissing)
//                                document.getElementsByClassName("formMessage")[0].innerHTML = "";
//                            else if (!isNaN(parseInt(document.getElementsByClassName("txtBox")[0].value)))
//                                document.getElementsByClassName("formMessage")[0].innerHTML = "";
//                            else
//                                document.getElementsByClassName("formMessage")[0].innerHTML = "";
//                        }/*if(!txtBox[0].checkValidity())*/
//
//                        /*Email address*/
//                        if (!txtBox[1].checkValidity()) {
//                            if (txtBox[1].validity.valueMissing)
//                                document.getElementsByClassName("formMessage")[1].innerHTML = "";
//                            else if (txtBox[1].validity.patternMismatch)
//                                document.getElementsByClassName("formMessage")[1].innerHTML = "";
//
//                        }/*if(!txtBox[1].checkValidity())*/
//                        else
//                        {
//                            document.getElementsByClassName("formMessage")[2].innerHTML = "";
//                        }/*else*/

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
    
  

    /**
     * @name bindBtns
     * @desc this will bind all the elements to their events
     */
    function bindBtns() {
        validation();
      
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
