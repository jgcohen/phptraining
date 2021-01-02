<?php
///Check if the image is received

if(isset($_FILES['image'])&& $_FILES['image']['error']==0){
    /// Variable hat will change if success
    $error=1;
    ///define the max size

    if($_FILES['image']['size']<= 3000000){
        ///Checkd the extension
        $informationImage = pathinfo($_FILES['image']['name']);
        $extensionImage = $informationImage['extension'];

        $extensionArray = array('png','gif','jpg', 'jpeg');

        if (in_array($extensionImage, $extensionArray)){
            $adress = 'upload/'.time().rand().rand().'.'.$extensionImage ;
            move_uploaded_file($_FILES['image']['tmp_name'],$adress ); 
            $error =0;      
    }
}
}
include 'index.php'
?>