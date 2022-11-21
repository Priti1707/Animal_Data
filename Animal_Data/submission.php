<?php
require 'connection.php';
if(isset($_POST["submit"]) && $_POST['g-recaptcha-response'] !=""){
$secret = '6LdgUh4jAAAAAJ_O2vCSx1W3aB9tsswsbF8lybGz';
$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
$responseData = json_decode($verifyResponse);
if ($responseData->success) {
  $name = $_POST["name"];
  $category = $_POST['category'];
  $description = $_POST['description'];
  $life = $_POST['life'];
  if($_FILES["image"]["error"] == 4){
    echo
    "<script> alert('Image Does Not Exist'); </script>"
    ;
  }
  else{
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if ( !in_array($imageExtension, $validImageExtension) ){
      echo
      "
      <script>
        alert('Invalid Image Extension');
      </script>
      ";
    }
    else if($fileSize > 1000000){
      echo
      "
      <script>
        alert('Image Size Is Too Large');
      </script>
      ";
    }
    else{
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, 'img/' . $newImageName);
      $query = "INSERT INTO animal VALUES('', '$name','$category','$description','$life','$newImageName')";
      mysqli_query($conn, $query);
      echo
      "
      <script>
        alert('Successfully Added');
        document.location.href = 'index.php';
      </script>
      ";
    }
  }
}
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animal Page</title>
    <link href="CSS/insert.css" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
   
  </head>
  
  <body>
   
  
  <div class="maindiv">
    <!--HTML Form -->
    <div class="form_div">
    <a href="index.php">Display List</a>
    <form  action="submission.php" method="post" autocomplete="off" enctype="multipart/form-data">
    <h2>Animal Data</h2>
      <label for="name">Name of the animal: </label>
      <input class="input" type="text" name="name" id = "name" required value=""> <br>
      
      <label>Category</label>   
      <br>     
      <label>
      <input  type="radio" value="h" name="category"> Herbivores</label>
      <br>
      <label>
      <input  value="o" type="radio" name="category"> Omnivores</label>
      <br>
      <label>
      <input value="c" type="radio" name="category"> carnivores</label>
      <br>    
      <br>       
      <label for="image">Image</label>
      <input class="input" type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value=""> <br> <br>
      <label>Description</label>
      <textarea rows="4" name="description" cols="40"></textarea>
      <br><br>
      <label for="Life Expectency"> Life Expectency</label>
      <select class="input" id="Life Expectency" name="life">
      <option disabled selected>--Choose--</option>
      <optgroup label="year">
      <option>0-1 year</option>
      <option>1-5 year</option>
      <option>5-10 year</option>
      <option>10+ year</option>
      </optgroup>
      </select> 
      <br>
      <div class="g-recaptcha" data-sitekey="6LdgUh4jAAAAAE_A5trPCGSsG0BfZerPnWH56fZ7"></div>
        <br>

      <button class= "input" type = "submit" name = "submit">Submit</button>
    </form>
    </div>
    </div>
    <br>
    
  </body>
</html>
