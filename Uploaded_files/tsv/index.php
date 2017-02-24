<?php 
if(isset($_FILES['file']['type'])){
    $sourcePath = $_FILES['file']['tmp_name'];       // Storing source path of the file in a variable
    $targetPath = "../uploads/".$_FILES['file']['name']; // Target path where file is to be stored
    if(move_uploaded_file($sourcePath,$targetPath)){   // Moving Uploaded file
        echo 'Successfully Transfer!';
    }
}
?>
