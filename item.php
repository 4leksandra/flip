<div class="collageDivContainer">
    <link href="style.css" rel="stylesheet">

    <div class="collageDiv" data-locked="false">
        <!-- <img class="collageImg" style="background-image: url(<?php echo $finalObj["url"] ?>);"></img> -->
        <img src="<?php echo $finalObj["url"] ?>" alt=""  class="collageImg">
        <h6 class="unlock" style="display: none;"><i class="fas fa-lock-open"></i></i> <?php echo $finalObj["title"] ?></h6>
        <h6 class="lock" style="display: none;"><i class="fa fa-lock"></i> <?php echo $finalObj["title"] ?></h6>
        <div class="linkBox">
            <a class="unlock lock download"  style="display: none;" href="<?php echo $finalObj["downloadUrl"] ?>" download="<?php echo $finalObj["downloadUrl"] ?>">Download</a>
            <a class="unlock lock original" style="display: none;" href="<?php echo $finalObj["url"] ?>">Original</a>
        </div>
    </div>

    <!-- <h6><?php echo $finalObj["user"] ?></h6>
<p><?php echo $finalObj["description"] ?></p> -->
</div>

<!-- <script>
    function save2(url) {
        var gh = url;

        var a = document.createElement('a');
        a.href = gh;
        a.download = 'image.png';

        a.click()

    }
</script> -->