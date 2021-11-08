<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>advanced exercises</title>
    <link rel="stylesheet" href="advance.css">
</head>

<body>


    <?php

$peaky_blinders_main_charecters= array (
    "main"=> "tommy",
    "fav"=>"arthur",
    "hate"=>"micheal"

);

echo "my fav charecter is pb is   $peaky_blinders_main_charecters[fav]";



$series = array(

    "peakyBlinders"=> array(
        "genre"=>"thriller/drama/criminal",
        "producer"=>" David Caffrey, Tim Mielants",
        "seasons"=>6
    ),

    "bigBangTheory"=> array(
    "genre"=>"comedy",
    "producer"=>"Chuck Lorre, Bill Prady",
    "seasons"=>12

    ),
    "Suits"=> array(
        "genre"=>"Dramedy",
        "producer"=>" Gene Klein",
        "seasons"=>9
    
        )
          
        

    );

    echo "
<h2> Series</h2>
<ul>   
    <p> pb is   {$series["peakyBlinders"]["genre"]} produced by {$series["peakyBlinders"]["producer"]}  and has {$series["peakyBlinders"]["seasons"]} seasons</p>
    <p> bbt is   {$series["bigBangTheory"]["genre"]} produced by {$series["bigBangTheory"]["producer"]}  and has {$series["bigBangTheory"]["seasons"]} seasons</p>
    <p> suits is   {$series["Suits"]["genre"]} produced by {$series["Suits"]["producer"]}  and has {$series["Suits"]["seasons"]} seasons</p>
    </ul>"
    ;





?>



</body>

</html>