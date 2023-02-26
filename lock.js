$(document).on("load", ".collageDiv", mouseAway)
$(document).on("mouseover", ".collageDiv", showStatus)
$(document).on("mouseover", ".download", showStatus)
$(document).on("mouseover", ".original", showStatus)
$(document).on("mouseout", ".collageDiv", mouseAway)
$(document).on("click", ".collageDiv", lockUnlock)

// on enter key - randomize 
// on search button key - randomize
var currentImg;

// $(document).on("click", ".btn", randomizeImages)


function mouseAway() {

    //CHANGE IMAGE OPACITY
    $(this).find("img").css("opacity","1");

    // HIDE BOTH ELEMENTS
    // takes the object that triggered 
    $(this).find(".lock, .unlock").css("display", "none");

}

function lockUnlock() {

    // GET CURRENT STATUS
    var status = $(this).attr("data-locked");

    if (status == "true") {

        // IF LOCKED, SET TO UNLOCK
        $(this).attr("data-locked", "false");
        $(this).find(".lock").css("display", "none");
        $(this).find(".unlock").css("display", "block");
        $(this).find(".download").css("display", "block");
        $(this).find(".original").css("display", "block");


    } else {

        // IF UNLOCKED, SET TO LOCK
        $(this).attr("data-locked", "true");
        $(this).find(".lock").css("display", "block");
        $(this).find(".unlock").css("display", "none");
        $(this).find(".download").css("display", "block");
        $(this).find(".original").css("display", "block");


    }

}

function showStatus(){

    //CHANGE IMAGE OPACITY
    $(this).find("img").css("opacity","0.1");
       
    // HIDE BOTH ELEMENTS INITIALLY
    $(this).find(".lock, .unlock").css("display", "none");

    // CHECK STATUS
    var status = $(this).attr("data-locked");

    // SHOW ACCORDINGLY
    if (status == "true") {
        $(this).find(".lock").css("display", "block");
    } else {
        $(this).find(".unlock").css("display", "block");
    }

}




// function randomizeImages(){

//     // currentImg = $(this).find(".collageImg");

//     // GET CURRENT STATUS
//     var status = $(this).attr("data-locked");

//     //GET ALL DIVS ON SCREEN
//     var collageDivArray = document.getElementsByClassName(".collageDiv");


//     //FOR EACH DIV, CHECK STATUS
//     for(var i = 0; i < collageDivArray; i++){

//         var status = $(collageDivArray[i]).attr("data-locked");

//         //IF UNLOCKED
//         if (status == false){

//             //call php function on the image inside the div to replace it

//         }

//     }

// }

