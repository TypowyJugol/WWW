<?php
include "0begin.php";
?>

<form method="post" enctype="multipart/form-data">
    Wybierz obraz do wysłania:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>


<?php
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "Plik nie jest obrazem.";
        echo "<br>";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Plik już istnieje.";
    echo "<br>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Plik jest za duży.";
    echo "<br>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Tylko pliki o rozszerzeniach JPG, JPEG, PNG & GIF są dozwolone.";
    echo "<br>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Plik nie został wysłany.";
    echo "<br>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Plik ". basename( $_FILES["fileToUpload"]["name"]). " został wysłany.";
    } else {
        echo "Wystąpił błąd podczas wysyłania pliku.";
    }
}
?>


<?php
include "0end.php";
