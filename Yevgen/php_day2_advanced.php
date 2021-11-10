<!--Day 2 | Advanced
Advanced Exercise

Functions:

1- Create a function that can convert °F in °C and show the result on the screen.

2- You can play with the results creating conditionals and showing on the screen a different img and message depending on the temp:

From 0°C to 5°C: Very cold
From 6°C to 10°C: Cold
From 11°C to 15°C: Pleasant
From 16°C to 20°C: Warm
Above 21°C: Hot

Use Bootstrap to show yours results on the screen.-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DAY 2 Advanced</title>
<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
</head>
<body>
    
    <?php 
        function getConvertedFinC(int $fahrenheit)
        {
            $celsius = ($fahrenheit - 32) * 5/9;
            $roundTemp = round($celsius);
            if (0 >= $roundTemp && $roundTemp < 6) {
                echo "<h1><i class='bi bi-snow2'></i> Very cold by $roundTemp C°<i class='bi bi-snow2'></i></h1>";
            } elseif (6 >= $roundTemp && $roundTemp < 11)
            {
                echo "<h1><i class='bi bi-thermometer-snow'></i> Cold by $roundTemp C°<i class='bi bi-thermometer-snow'></i></h1>";
            } elseif (11 >= $roundTemp && $roundTemp < 16)
            {
                echo "<h1><i class='bi bi-person-check-fill'></i> Pleasant by $roundTemp C°<i class='bi bi-person-check-fill'></i></h1>";
            } elseif (16 >= $roundTemp && $roundTemp < 21)
            {
                echo "<h1><i class='bi bi-person-plus-fill'></i> Warm by $roundTemp C°<i class='bi bi-person-plus-fill'></i></h1>";
            } elseif ($roundTemp > 20)
            {
                echo "<h1><i class='bi bi-emoji-sunglasses-fill'></i><i class='bi bi-thermometer-sun'></i> Hot by $roundTemp C°<i class='bi bi-thermometer-sun'></i><i class='bi bi-emoji-sunglasses-fill'></i></h1>";
            } else {
                echo "<h1>No information available at this moment!</h1>";
            }
        }
        echo getConvertedFinC(rand(0, 150));
    ?>

<!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

