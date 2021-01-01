<?php


// $_FILES['image']['name'];// define the name
// $_FILES['image']['type'];// define the type(png, jpeg...)
// $_FILES['image']['size'];// define the size
// $_FILES['image']['tmp_name'];// define the temporary name of the file
// $_FILES['image']['error'];// define if the file was upladed correctly

if (isset($_FILES['image'])&& $_FILES['image']['error']==0){
///if the image exists and is sent
    if ($_FILES['image']['size'] <= 3000000){
///if the file is less than 3mo

$informationImage = pathinfo($_FILES['image']['name']);
$extensionImage = $informationImage['extension'];

$extensionArray = array('png','gif','jpg', 'jpeg');

if (in_array($extensionImage, $extensionArray)){
    move_uploaded_file($_FILES['image']['tmp_name'],'upload/'.time().rand().rand().'.'.$extensionImage );// Pour avoir un vrai identifiant unique
    //////////////////////////////////////////////////////////////////.time().basename($_FILES['image']['name']) ) pour recuprer le nom du fichier
    echo 'Sent Correctly';
}
    }
};

echo'<form method="post" action = "upload.php"
    enctype="multipart/form-data">
    <p>
    <h1>Formulaire</h1>
    <input type="file" name="image" /><br/>
    <button type ="submit">Upload</button>
    </p>
    </form>';

    ?>