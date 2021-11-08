<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdvancedEx</title>
</head>
<body>
    
<!-- //Define an associative array and output array elements on the screen -->
<?php
$characters = array (
    "Mickey_Mouse" =>"cartoon character",
    "Super_Mario"=>"game character",
    "Pokemon"=>"video game character"
);

echo "Mickey Mouse is a $characters[Mickey_Mouse]<br>Super Mario is a $characters[Super_Mario]<br>Pokemon is a $characters[Super_Mario]";

?>

<!-- Transform this code into a solution done with multidimensional arrays to track different properties of the characters.  -->

<?php
$characters = array (
    "Mickey_Mouse" =>array
        (
            "what_is"=>"cartoon character",
            "genre"=>"cartoons",
            "composer"=>"Walt Disney"
        ),
    "Super_Mario"=> array
        (
            "what_is"=>"platform game character",
            "genre"=>"Platform game",
            "composer"=>"Koji Kondo"
        ),
    "Pokemon"=>array
        (
            "what_is"=>"video game character",
            "genre"=>"Role-playing Video Game",
            "composer"=>"Junichi Masuda"
        )
);
echo '<br>';

echo 
    "<p>Mickey Mouse is a {$characters["Mickey_Mouse"]["what_is"]} created by {$characters["Mickey_Mouse"]["composer"]}.</p>
    <p>Super Mario is a {$characters["Super_Mario"]["what_is"]} created by {$characters["Super_Mario"]["composer"]}.</p>
    <p>Pokemon is a {$characters["Pokemon"]["what_is"]} created by {$characters["Pokemon"]["composer"]}.</p>";

?>

</body>
</html>

