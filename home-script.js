function overBox(){
    var elmt_bg = document.getElementById("bg-carousel");
    elmt_bg.classList.remove("unfade");
    refresh = false;
    cursor = true;
    var elmt_bg = document.getElementById("bg-carousel");
    elmt_bg.classList.add("overlay-no-filter")
    elmt_bg.classList.remove("overlay-filter")

    clearInterval(refreshIntervalId)    
}

function outBox(){
    cursor = false;
    refreshIntervalId = setInterval(RepeatAction, 5000);
    refresh = true;

    var elmt_bg = document.getElementById("bg-carousel");
    elmt_bg.classList.add("overlay-filter")
    elmt_bg.classList.remove("overlay-no-filter")
}

function RepeatAction(){
    if (refresh) {
        slideIndex = (slideIndex === images.length) ? 1 : slideIndex + 1;
        if (slideIndex > images.length){
            slideIndex = 1;
        }
        
        var dots = document.getElementsByClassName("dot-carousel");
        for (i = 0; i < images.length; i++){
            dots[i].classList.remove("dot-initial");
        }
        dots[slideIndex-1].classList.add("dot-initial")

        var elmt_bg = document.getElementById("bg-carousel");
        elmt_bg.src =images[slideIndex-1];
        if (!cursor) {
            setTimeout(function(){
                elmt_bg.classList.add("fade");
                elmt_bg.classList.remove("unfade");
            }, 1000);
        }
        elmt_bg.classList.add("unfade");
        elmt_bg.classList.remove("fade");
    }
}


function goToImage1(){
    refresh = true;
    slideIndex = 0;
    RepeatAction();

}

function goToImage2(){
    refresh = true;
    slideIndex = 1;
    RepeatAction();
}

function goToImage3(){
    refresh = true;
    slideIndex = 2;
    RepeatAction();
}

function goToImage4(){
    refresh = 3;
    slideIndex = 3;
    RepeatAction();
}


function extendArticle1() {
    var article = document.getElementById("article-1");
    var overlay = article.getElementsByClassName("overlay")[0];
    var text = document.getElementById("article-1-text");
    if (!article1Extended) {
        overlay.style = "width: 100vh; transition: 150ms ease-in-out;"
        setTimeout(function() {
        text.innerHTML = "With BestKorea, it is easy to travel around Korea. You are a solo traveler or want to travel with a party, no problem, we can find you the best accomodation around hundreds of places because you deserve the right to stay in a good place. Please make sure to specify the number of people when you are reserving so our system can detect the best location for you.<br> For more information, please contact us via the form <a href='#contact' style='color: black;'>here</a>."
        }, 150)
        article1Extended = true;
    } else {
        overlay.style = "width: 30vh; transition: 150ms ease-in-out"
        article1Extended = false;
        text.innerHTML = "Give the best to your loved ones and share fabulous moments in Korea!"
    }
}


function extendArticle2() {
    var article = document.getElementById("article-2");
    var overlay = article.getElementsByClassName("overlay")[0];
    var text = document.getElementById("article-2-text");
    if (!article2Extended) {
        overlay.style = "width: 100vh; transition: 150ms ease-in-out"
        setTimeout(function() {
        text.innerHTML = "With BestKorea, it is easy to travel around Korea. You are a solo traveler or want to travel with a party, no problem, we can find you the best accomodation around hundreds of places because you deserve the right to stay in a good place. Please make sure to specify the number of people when you are reserving so our system can detect the best location for you.<br> For more information, please contact us via the form <a href='#contact' style='color: black;'>here</a>."
        }, 150)
        article2Extended = true;
    } else {
        overlay.style = "width: 30vh; transition: 150ms ease-in-out"
        article2Extended = false;
        text.innerHTML = "Want to escape the big cities, check out our best recommendations to enjoy the Korean landscape";

    }
}

var images = [];
var refreshIntervalId = [];
var refresh = true;
var cursor = false;
var i = 0;
var slideIndex = 0;
var article1Extended = true;
var article2Extended = true;

images[3] = "images/main-4.jpg";
images[2] = "images/main-3.jpg";
images[1] = "images/main-2.jpg";
images[0] = "images/main.jpg";

RepeatAction();
outBox();
extendArticle1();
extendArticle2();