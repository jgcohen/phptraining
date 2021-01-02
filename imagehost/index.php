<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Host</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
   <header class="container-fluid bg-danger" >
       <h1 class="text-light text-center" >Photoshoot</h1>
   </header>

   <main class="container">
<!-- FORMULAIRE -->

<h3>Heberger une image</h3>

<?php 
if(isset($error) && $error==0){
    echo' <img class="w-75 rounded mx-auto d-block" src="'.$adress.'"/>';
}else if(isset($error) && $error==1){
    echo' Your file can\'t be upladed. Please verify the type or the size.';
}
?>
<form method="post" action="script.php" enctype="multipart/form-data">
<p>
<input class="form-control" type="file" required name="image"/><div class="invalid-feedback">Example invalid form file feedback</div>
  </div>
<button class="btn btn-success" type="submit">Upload</button>

</p>
</form>

   </main>
   <footer class="container-fluid bg-danger" >
<h3 class="text-light text-center ">Hebergeur d'image sous PHP</h3>
   </footer>
    <script src="script.php"></script>
</body>
</html>