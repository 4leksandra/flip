
var images = document.getElementsByClassName("collageDiv");
console.log("working1");


for (var i = 0; i < images.length; i++){

    //check if image is landscape or portrait
    console.log("working2");
    
    var width = $(images[i]).children("img").width();
    var height = $(images[i]).children("img").height();

    if (width > height){
        
        $(images[i]).addClass("bigWidth");

    }

     else if (height > width){
        $(images[i]).addClass("bigHeight");
        
    }

    else {

        $(images[i]).addClass("square");
    }

    // $(this).find(".lock").css("display", "block");
    // $(this).find(".unlock").css("display", "none");
    

}