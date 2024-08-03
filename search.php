<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hidden-heaven</title>
    <link rel="icon" href="Journey-cuate.png">
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Special+Elite&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@300..700&family=Marhey:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Margarine&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet">
</head>
<body>
    <div class="search">
        <h1>hidden-heaven</h1>
        <span class="material-symbols-outlined">
            <input type="search" id="search1"> search
        </span> 
        <input type="button" value="waterfalls" id="b1" onclick="autofill('b1')">
        <input type="button" value="hill-station" id="b2" onclick="autofill('b2')">
        <input type="button" value="beauty-spot" id="b3" onclick="autofill('b3')">
        <input type="button" value="temples" id="b4" onclick="autofill('b4')">
    </div>
    <div>
        <?php
        include_once("connect.php");
        $query = "SELECT * FROM images";
        $result = mysqli_query($conn, $query);
        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $name = $row["name"];
                $map = $row["map"];
                $dis = $row["discription"];
                $filename = $row["filename"];
                $imageurl = "uploads/" . $filename;
                echo "<div class='com'>";
                echo "<p id='name'>Place Name: $name</p>";
                echo "<p>Location:</p>";
                echo "<div class='map'><input type='text' value='$map'/></div>";
                echo "<p id='dishead'>Description:</p>";
                echo "<div class='dis'><p>$dis</p></div>";
                echo "<img src='$imageurl' width='500px' alt='Image'>";
                echo "</div><br>";
            }
        }
        ?>
    </div>
    <script src="./script.js"></script>
</body>
</html>
