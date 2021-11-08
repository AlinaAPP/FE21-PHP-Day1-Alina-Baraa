<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>ChallengeEx</title>
</head>
<body>
<?php

$car_agency = array(
'car1' => array
(
    'brand' => 'Audi', 
    'model' => 'M200',
    'price' => 100, 
    'img'=> './img/auto-gcd0611872_640.jpg',
    'availability'=>'yes',
    'location'=> 'Vienna, erdberg 20'
),
'car2' => array
(
    'brand' => 'Audi', 
    'model' => 'A540', 
    'price' => 80, 
    'img' => './img/car-g0f6322af6_640.jpg',
    'availability'=>'yes',
    'location'=> 'Vienna, reisnerstarsse 10'
),
'car3' => array
(
    'brand' => 'Mitsubishi', 
    'model' => 'Luxury',
    'price' => 120, 
    'img' => './img/car-g4ce17e466_640.jpg',
    'availability'=>'yes',
    'location'=> 'Vienna, strohgasse 13'
),
'car4' => array
(
    'brand' => 'BMW', 
    'model' => 'Sport Car 20', 
    'price' => 40, 
    'img' => './img/car-gabf76abff_640.jpg',
    'availability'=>'yes',
    'location'=> 'Vienna, landstrasse 16'
)
);
?>

    <div class="container">
        <h1 class="mt-5 text-center">Car Rental Agency</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, quam quaerat repudiandae eveniet possimus harum fugit debitis! Minima, beatae quas odio est architecto eos nemo magni amet corrupti! Quo, laudantium!</p>

            <table class="table table-dark table-hover text-center">
                <thead>
                    <tr>
                        <th scope="col">Brand</th>
                        <th scope="col">Model</th>
                        <th scope="col">Price</th>
                        <th scope="col w-25">Photo</th>
                        <th scope="col">Availability</th>
                        <th scope="col">Location</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    <tr>
                        <td ><?= $car_agency["car1"]["brand"]?></td>
                        <td><?= $car_agency["car1"]["model"]?></td>
                        <td><?= $car_agency["car1"]["price"]?></td>
                        <td class="w-25"><?= "<img src='{$car_agency["car1"]["img"]}' class='img-fluid'>" ?></td>
                        <td><?= $car_agency["car1"]["availability"]?></td>
                        <td><?= $car_agency["car1"]["location"]?></td>
                    </tr>
                    <tr>
                        <td><?= $car_agency["car2"]["brand"]?></td>
                        <td><?= $car_agency["car2"]["model"]?></td>
                        <td><?= $car_agency["car2"]["price"]?></td>
                        <td class="w-25"><?= "<img src='{$car_agency["car2"]["img"]}' class='img-fluid'>"?></td>
                        <td><?= $car_agency["car2"]["availability"]?></td>
                        <td><?= $car_agency["car2"]["location"]?></td>
                    </tr>
                    <tr>
                        <td><?= $car_agency["car3"]["brand"]?></td>
                        <td><?= $car_agency["car3"]["model"]?></td>
                        <td><?= $car_agency["car3"]["price"]?></td>
                        <td class="w-25"><?= "<img src='{$car_agency["car3"]["img"]}' class='img-fluid'>"?></td>
                        <td><?= $car_agency["car3"]["availability"]?></td>
                        <td><?= $car_agency["car3"]["location"]?></td>
                    </tr>
                    <tr>
                        <td><?= $car_agency["car4"]["brand"]?></td>
                        <td><?= $car_agency["car4"]["model"]?></td>
                        <td><?= $car_agency["car4"]["price"]?></td>
                        <td class="w-25"><?= "<img src='{$car_agency["car4"]["img"]}' class='img-fluid'>"?></td>
                        <td><?= $car_agency["car4"]["availability"]?></td>
                        <td><?= $car_agency["car4"]["location"]?></td>
                    </tr>
                </tbody>
            </table>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>