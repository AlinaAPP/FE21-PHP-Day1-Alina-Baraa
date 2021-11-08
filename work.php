<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>ClassWork</title>
</head>
<body>
    <!--EX1 Print your name in an h1 HTML element using PHP -->
    <!-- <?php
        echo '<h1>Alina</h1>';
    ?> -->

    <h1><?="Alina"?></h1>



<!-- EX2 create a couple of variables, name, age, and job title, and after that, you print a message on the screen "hi, my name is NAME, and i am AGE, and i work as a JOB_TITLE" -->
    <?php
        $name='John';
        $age=28;
        $job_title='engineer';
        echo "Hi, my name is $name, I am $age and I work as $job_title";
    ?>

    <!-- EX3 create an array that has names Mark, John, Georg and Lisa, print the 3rd player on the screen like this: "the third player in the team is 3rd_player".
 -->
    <?php
        $details=array("mark","john","george");
        echo '<br>';
        echo $details[2];
    ?>

</body>
</html>