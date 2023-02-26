<script type="text/javascript" src="scrapping.js"></script>
<?php


//get what user searched in the input
$search = $_GET["search"];

//save each word from search into new array element
$searchExploded = explode(" ", $search);


// //final gallery at the end
// $gallery = array();

$final = array();

// for each keyword
foreach ($searchExploded as $keyword) {

    //$urlArray = array();

    //iterating through different websites(picking 1) and searching for keyword
    $unsplash =  "https://api.unsplash.com/search/photos?page=1&per_page=20&query=$keyword&client_id=JojUaUfQxi31o5H8eGCgwdp8TeAiytEdWFZEEnxpzOQ";
    $oldBookIllustrations = "https://www.oldbookillustrations.com/?s=$keyword&post_type%5B%5D=illustration";


    $url = $unsplash;
    $obj = array();
    

   if ($url === $unsplash){
    //get json file of results from url (search results)
    $response = file_get_contents($url);

    //decode json 
    $list = json_decode($response); // array of objects\


    $gallery = array();
    


    //save all results as objects with parameters and add into gallery
    foreach($list->results as $item){

 
        //put in object parameters from item object
        $obj["url"] = $item->urls->regular;
        $obj["title"] = strtolower($keyword);
        $obj["downloadUrl"] = $item->links->download_location;
        $obj["id"] = $item->id;
        $obj["description"] = $item->description;
        $obj["user"] = $item->user->name;

        // var_dump($item);

        // var_dump($item->links);
        // var_dump($item->links->download_location);
        // var_dump($item->links);
        // var_dump($item->links);
        // var_dump($item->links);
        // var_dump($item->links);
        // var_dump($item->links);


        //put object into gallery
        $gallery[]= $obj;
        }
    
            // now you have a search gallery of 1 keyword


        //generate random object from that gallery

    $galleryLength = count($gallery);
    $galleryLength = $galleryLength - 1;  
    $randomElement = rand(0, $galleryLength);
    
    
    // Add random object into final 
    array_push($final, $gallery[$randomElement]);
   //$final = $gallery[$randomElement];
}

}



// function randomize() {

//     $dom = new DOMDocument;
//     $dom->loadXML($xml);
//     $collageDiv = $dom->getElementsByTagName('collageDiv');

//     //FOR EACH DIV, CHECK STATUS
//     foreach ($collageDiv as $item) {

//         //GET CURRENT STATUS
//        $status =  $item->getAttribute('data-locked');

//        //IF UNLOCKED
//        if($status == false){
//            //CHANGE IMAGE
//            //get item image > change it
//        }

//     }

    
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

?>
