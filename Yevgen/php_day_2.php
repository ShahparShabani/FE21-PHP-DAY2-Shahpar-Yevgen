<!--Exercise 1

Create a PHP script which will accept two parameters from the form (name and surname). The user must insert name and surname into the form to get the output: "Welcome Name Surname!" otherwise you will output the message: please insert your name, or please insert your surname. -->

<!DOCTYPE html>
<html lang="en">
   <head>
        <meta charset="UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
        <title>PHP Day 2 Exercises 1-6</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   </head>
   <body>
       <p>Insert your Name and Surname</p>
       <form action="php_day_2.php" method="POST" name="name_input">

            <label for="name">Name:</label>
            <input type="text" name="name" id="name"/>

            <label for="surname">Surname:</label>
            <input type= "text" name="surname" id="surname"/>

           <input type="submit" name="submit"/>
        </form>
       <?php
            if( isset($_POST['submit']) )
            {
                if( empty($_POST["name"]) && empty($_POST["surname"]) ) 
                {
                    echo "Please provide your name and surname";

                } elseif( empty($_POST["name"]) )
                {
                    echo "Please provide your name!";

                } elseif( empty($_POST["surname"]) )
                {
                    echo "Please provide your surname!";

                } elseif( !empty($_POST["name"]) && !empty($_POST["surname"]) ) 
                {
                    echo "<h1>Welcome {$_POST["name"]} {$_POST["surname"]}!</h1>";
                } 
            }
       ?>


<!--Exercise 2

Create a function which takes two integer parameters - divide them and output the result on the screen. -->

    <?php 
    
        function devideIntegers($int1, $int2) 
        {
            return "<hr><br> <h2>Exercise 2</h2> <h3>Integer $int1 / integer $int2 = ". $int1 / $int2. "</h3>";
        }

        echo devideIntegers(9, 3);
    ?>

<!--Exercise 3

Make a function that will accept 3 parameters, which are the grades from Math, Physics and English. then make the calculation and print them on the screen. Make sure that the variables are numbers.
E.g. If you put the following grades 3, 4, 5 the result should be:
Sum:12
Average: 4 -->

    <?php 
        function getSumAvarageOfGrades(int $num1, int $num2, int $num3) 
        {
            $sum = $num1 + $num2 + $num3;
            $avarage = $sum / 3;

            return "<hr><br> <h2>Exercise 3</h2> <h3>Sum of Grades: $sum </h3> <h3>Avarage: $avarage </h3>";
        }
        echo getSumAvarageOfGrades(3,4,5);
    ?>

<!--Exercise 4

Create a function that calculates the area and volume of a box.
Formulas:
area = width x height
volume = width x height x depth
Pass three different numbers as arguments and get calculated results using the return statement.
You should get the following results:
The area of the box is: 14
The volume of the box is: 70 -->

    <?php 
        function getAreaAndVolume(float $width,float $height, float $depth)
        {
            $area = $width * $height;
            $volume = $width * $height * $depth;

            return "<hr><br> 
            <h2>Exercise 4</h2> 
            <h3>The area of the box is: $area</h3> 
            <h3>The volume of the box is: $volume</h3>";
        }
        echo getAreaAndVolume(2, 7, 5);
    ?>

<!--Exercise 5

Create a function that will return the number of minutes, in hours and minutes. The function should accept only one argument.
E.g. If we call the function and pass the number of minutes 200 we should get the message "200 minutes = 3 hour(s) and 20 minute(s)." -->


<?php 
    function getTimeInHandMinutes(int $sumMinutes)
    {
        $hours = $sumMinutes / 60;
        $restMinutes = $sumMinutes % 60;
        return "<hr><br> 
        <h2>Exercise 5</h2>
        <h3>$sumMinutes minutes = ".round($hours)." hour(s) and $restMinutes minute(s).</h3>";
    }
    echo getTimeInHandMinutes(200);
?>

<!--Exercise 6

Create a form with input fields for your firstname, lastname and age. Extract the values from each input field and display them all in a separate div. Use the POST method.
If the length of your name is larger than 5 characters, change the text colour to green. Otherwise, change the text-colour to red.Now extend with adding a new input field "hobbies". Use the GET method to extract and display the hobbies -->
<hr>
<br>

<h2>Exercise 6</h2>
<p>Insert your Firstname, Lastname and Age</p>
       <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" name="form2">

            <label for="firstname">Firstname:</label>
            <input type="text" name="firstname" id="firstname"/>

            <label for="lastname">Lastname:</label>
            <input type= "text" name="lastname" id="lastname"/>

            <label for="age">Age:</label>
            <input type= "number" name="age" id="age"/>

           <input type="submit" name="submit"/>
        </form>

        <form action="<?php $_SERVER['PHP_SELF']?>" method="GET" name="formGEThobbies">
            <label for="hobbies">Hobbies</label>
            <input type="text" name="hobbies" id="hobbies">

            <input type="submit" name="submit">
        </form>
        <br>
        <br>

       <?php
            if(isset($_POST['submit'])) 
            {
                // initiate variables for better readability
                $firstname = $_POST["firstname"];
                $lastname = $_POST["lastname"];
                $age = $_POST["age"];

                // conditions for the input values
                if( empty($firstname) && empty($lastname) && empty($age) ) 
                {
                    echo "Please provide your firstname, lastname and age";

                } elseif( empty($firstname) )
                {
                    echo "Please provide your firstname!";

                } elseif( empty($lastname) ) 
                {
                    echo "Please provide your lastname!";

                } elseif( empty($age) )
                {
                    echo "Please provide your age!"; 

                } elseif( !empty($firstname) && !empty($lastname) && !empty($age) ) 
                {
                    if(mb_strlen($firstname) > 5 ? $color="text-success" : $color="text-danger")
                    echo "<br> <div>Welcome</div><div class='$color'>Firstname: {$firstname}</div> <div>Lastname: {$lastname}</div> <div>You are: {$age} old</div>";
                }
            }

            // for GET-method form
            if( isset($_GET['submit']) ) 
            {
                // initiate variables for better readability
                $hobbies = $_GET["hobbies"];

                // conditions for the input values
                if( empty($hobbies) ) 
                {
                    echo "Please provide your hobbie";

                } else {
                    echo "<br> <div>Hobbie: {$hobbies}</div>";
                }
            }
       ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
