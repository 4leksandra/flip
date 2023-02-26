<?php

    //place form.php here
    include "api.php";

    //check if gallery is empty
    if (empty($gallery) == true) {

        include "empty.php";
    } else {
        //each object within $gallery array will be named item in this loop

        foreach ($final as $finalObj) {

            include "item.php";
        }
    }

?>
