<?php header('access-control-allow-origin: *'); ?>
<?php header('access-control-allow-headers: *'); ?>
<?php
$target_file = "/var/www/html/intoMe/all_video/" . basename($_FILES["fileToUpload"]["name"]);
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    echo $_FILES["fileToUpload"]["tmp_name"];
    ?><a href="/intoMe">Click me to go back</a><?php
    exit();
}
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    header ("Location: /intoMe");
}
else {echo "upload failed";} 

?>
