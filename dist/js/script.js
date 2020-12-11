<!-- import enquire from 'enquire.js';-->



(function(){

const submit = document.getElementsByClassName("submitBtn");
const contactForm = document.getElementsByClassName("contactFormArea");
const btnGetUserAgentString = document.getElementById("getUserAgentString");
const divUAS = document.getElementById("divUAS");
const divTimeStamp = document.getElementById("divTimeStamp");

const $menuIcon = $('#openNav');
const $mySql = $('#mysql');
const $openWindow = $('#openWindow');


/**
 * This code is to display the .documents block using JQuery
 */
/* $(function() {*/
$(document).ready(function () {
    $mySql.click(function () {
        $openWindow.toggle("fast");
    });
});

/** 
 * This code is to display user agent string and the timestamp of accessing the URL
 * and redirecting to viewUserAgent.html page with querystring
 */
function getUserAgentInformation() {
    //Get timestamp of accessing URL
    let timestamp = Date.now();

    //Create QueryString
    let qs = "?";
    qs += "bcn=" + navigator.appCodeName + "&";
    qs += "bn=" + navigator.appName + "&";
    qs += "bv=" + navigator.appVersion + "&";
    qs += "ce=" + navigator.cookieEnabled + "&";
    qs += "bl=" + navigator.language + "&";
    qs += "bo=" + navigator.onLine + "&";
    qs += "p=" + navigator.platform + "&";
    qs += "uas=" + navigator.userAgent + "&";
    qs += "timestamp=" + timestamp;

    //Redirect to viewUserAgent.html page with querystring
    window.location.href = "./viewUserAgent.html" + qs;
}//getUserAgentInformation


/**
 * This function is to get value of key in a querystring
 * @param {type} name
 * @param {type} url
 * @returns {String}
 * window.location.href returns the href (URL) of the current page
 */
function getParameterByName(name, url = window.location.href) {

    // Explicitly replace any square braces in the name of the attribute you are looking for
    // i.e. foo[] => foo\[\] so that it can be used in a regular expression later
    //Here name returns key names like uas, bcn, bn etc. In our case there is no change in 'name'. 
    //This is just for sanitation.    
    name = name.replace(/[\[\]]/g, '\\$&');

    //Explaination:
    //regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)');
    //RegExp object is used for matching text with a pattern. 
    // Build an expression that will use your value 
    //that is proceeded by either a '?' or '&' character and a group to match its value
    //in our case regex would return /[?&]uas(=([^&#]*)|&|#|$)/  for name 'uas'

    //results = regex.exec(url);
    //The exec() method searches a string(here url) for the specified character(regex), and returns the matched text
    // if it finds a match, otherwise it returns null. 
    // Attempt to find a match in the URL  
    //The results query is an array something like [0]="&bn=Netscape", [1]="=Netscape", [2]="Netscape"
    //therefore we are specifically interested in results[2]
    let regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
            results = regex.exec(url);

    // If none were found, then return null 
    if (!results)
        return null;

    // If a second group was empty, return an empty string (i.e. a parameter with no value like ?foo)
    if (!results[2])
        return '';

    //The decodeURIComponent() function decodes a URI component.
    // Decode it and replace any + characters with spaces
    //Here it returns value of key e.g.  Mozilla, Netscape etc    
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}//getParameterByName

/** 
 * This code is to display user agent string and the timestamp of accessing the URL
 * and displaying it on the viewUserAgent.html page
 */
function displayUserAgent() {
    //Get values from querystring
    let uas = getParameterByName('uas');
    let bcn = getParameterByName('bcn');
    let bn = getParameterByName('bn');
    let bv = getParameterByName('bv');
    let ce = getParameterByName('ce');
    let bl = getParameterByName('bl');
    let bo = getParameterByName('bo');
    let p = getParameterByName('p');

    //console.log(uas);
    let timestamp = getParameterByName('timestamp');
    //console.log(timestamp);

    //Display Values in div
    if (divUAS !== null)
        divUAS.innerHTML = "<p>Browser Codename: " + bcn + "</p><p>Browser Name: " + bn + "</p><p>Browser version: " + bv + "</p><p>Cookies Enabled : " + ce + "</p><p>Browser language: " + bl + "</p><p>Browser online: " + bo + "</p><p>Platform: " + p + "</p><p>User Agent Header: " + uas;
    if (divTimeStamp !== null)
        divTimeStamp.innerHTML = timestamp;
}//displayUserAgent()

/**
 * @name validation
 * @desc CONTACT FORM SUBMIT BUTTON VALIDATION - validation for name, phone and email
 */
function validation()
{
    console.log(submit);
    if (submit) {
        /*submit is a HTMlCollection, therefore we start a loop, for click event*/
        for (let j = 0; j < submit.length; j++) {
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
    if (btnGetUserAgentString)
        btnGetUserAgentString.addEventListener("click", getUserAgentInformation);
    displayUserAgent();
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
