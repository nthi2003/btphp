<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./main.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 
</head>
<body>
    <center>
        <div class="main">
        <form action="insert.php" method="POST" enctype="multipart/form-data" >  
            <div class="style-box">
            <label for="">Name: </label>
            <input  class="name-box" placeholder="Name" type="text" name="name">
            </div>
           <div class="style-box">
           <label for="">Price:</label>
            <input class="name-box" placeholder="Price" type="text" id="" name="price">
           </div>
           <div class="style-box">
           <label for="">Image:</label>
            <input class="name-box" placeholder="Image" type="file" id="" name="image">
           </div>
            <button name="upload" class="box-upload">Upload</button>
         </form>
       
        </div>
    </center>
</body>
</html>