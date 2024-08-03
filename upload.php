<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
   
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Indie+Flower&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Special+Elite&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@300..700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@300..700&family=Marhey:wght@300..700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Margarine&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
</head>
<body style="text-align: center; background-repeat: no-repeat;background-position: center; background-size: cover;">
    <h1 id="upload-head">publish now</h1>
    <div class="publish">

    <div class="image"></div>
    <form action="datahandle.php" method="post" enctype="multipart/form-data" >
    <label for="name">place name</label>
    <input type="text" name="placename">
    <label for="location" id="map">paste the   goole map location</label>
    <input type="text" id="maptext" name="map">
    <br>

    <label for="textarea">enter some discription</label>
    <br>
    <textarea name="discription" id="" rows="10" cols="30"></textarea>
    <br>

    <label for="imageUpload">select the image</label>
    <input type="file" id="imageUpload"  name="image">
    <br>
    <input type="submit" value="UPLOAD"  name="submit">
</form>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
    <script src="./script.js"></script>
</body>
</html>