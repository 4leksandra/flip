$(document).on("click", "#load", search);
// $(document).on("click", "a.download", downloadImg);



// function downloadImg(id){

//   $.ajax({
//     type: "GET",
//     url: "https://api.unsplash.com/photos/nDV6ahWLvEg?client_id=" + id,
//     cache: false,
//     success:function success(hml) {

//         console.log(id);

      
//     }});

// }


function search(e) {
  //PREVENT PAGE FROM RELOADING
  e.preventDefault();
  var search = $("input[name='search']").val().replace(/ /g, "%20");
  //search: eyeball%20Toronto%20dragonfly%20newspaper%20graphic%20stupid%20hello

  $.ajax({
    type: "GET",
    url: "./load.php?search=" + search,
    cache: false,

    //IF REQUEST SUCCEEDS
    success: function (html) {

      //IF NOT LOCKED - REMOVE MODULE
      $(".collageDiv[data-locked='false']").closest(".collageDivContainer").remove();

      //APPEND IMAGE TO HTML
      $(".imgContainer").append(html);

      // if there are locked elements on screen

      if ($(".collageDiv[data-locked='true']").length != 0) {

        //for each locked item, go through unlocked items
        for (var i = 0; i < $(".collageDiv[data-locked='true']").length; i++) {


          console.log($($(".collageDiv[data-locked='true']")[i]).children("h6.lock").text().trim());

          //get text for locked item
          lockedText = $($(".collageDiv[data-locked='true']")[i]).children("h6.lock").text().trim();

          //if there are unlocked items on page
          if ($(".collageDiv[data-locked='false']").length != 0) {

            //for each unlocked item, compare text with locked item
            for (var j = 0; j < $(".collageDiv[data-locked='false']").length; j++) {

              //save unlocked text
              unlockedText = $($(".collageDiv[data-locked='false']")[j]).children("h6.unlock").text().trim();

              // console.log("locked: ", lockedText);
              // console.log("unlocked: ", unlockedText);


              if (unlockedText == lockedText) {

                $($(".collageDiv[data-locked='false']")[j]).attr("style", "display: none !important");
                $($(".collageDiv[data-locked='false']")[j]).parent(".collageDivContainer").attr("style", "display: none !important");

              }

            }
          }





        }

      }

     








    },
  });

}
