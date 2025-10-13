<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Welcome</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1>Project Welcome</h1>
    <ul>
        <?php
        $profiles = scandir("./profiles",SCANDIR_SORT_ASCENDING);
        foreach($profiles as $profile) {
            if ($profile === "." || $profile === ".."){
                continue;
            }
            echo "<div>";
            $name = substr($profile,0,-5);
            echo "<a href='profile/$profile'>";
            $img = glob("images/$name.*");
            $img = $img ? $img[0] : "";
            echo "<img src='$img' width='130' alt='$name'>";
            echo $name."</a>";
            echo "</div>";
        }
        ?>
    </ul>
</body>
</html>




