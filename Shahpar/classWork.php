<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/classwork.css">
    <title>Classwork PHP Day2</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">PHP DAY 2</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#classwork-1">Classwork</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#classwork-2">Advanced</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main id="main-container">
        <div id="panels-wrapper" class="row">
            <div class="col-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-classwork1" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Classwork 1</a>
                    <a class="list-group-item list-group-item-action" id="list-classwork2" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Classwork 2</a>
                    <a class="list-group-item list-group-item-action" id="list-classwork3" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Classwork 3</a>
                    <a class="list-group-item list-group-item-action" id="list-classwork4" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Classwork 4</a>
                    <a class="list-group-item list-group-item-action" id="list-classwork5" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Classwork 5</a>
                    <a class="list-group-item list-group-item-action" id="list-classwork6" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Classwork 6</a>
                </div>
            </div>
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                    <!-- Classwork 1 - Print name from a form. -->
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-classwork1">
                        <form method="POST">
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="input" class="form-control" id="inputEmail3" name="name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Surname</label>
                                <div class="col-sm-10">
                                    <input type="input" class="form-control" id="inputPassword3" name="surname">
                                </div>
                            </div>

                            <button type="button" class="btn btn-primary" name="submitBtn" onclick="test()">Print</button>
                        </form>

                        <?php

                        function test()
                        {
                            if (isset($_POST['submitBtn'])) {
                                if (isset($_POST["name"]) && isset($_POST["surname"])) {
                                    echo "<br><br>Welcome  " . $_POST['name'] . "  " .  $_POST['surname'] . "!";
                                } else {
                                    echo "<br><br>Please insert your name, or please insert your surname.";
                                }
                            }
                        }



                        ?>
                    </div>

                    <!-- Classwork 2 - Function divide. -->
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-classwork2">
                        <form method="POST">
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Number 1</label>
                                <div class="col-sm-10">
                                    <input type="input" class="form-control" id="inputEmail3" name="int1">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Number 2</label>
                                <div class="col-sm-10">
                                    <input type="input" class="form-control" id="inputPassword3" name="int2">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary" name="submitBTnDivide">Divide</button>
                        </form>
                        <?php

                        function divide($int1, $int2)
                        {
                            return  $int1 / $int2;
                        }

                        if (isset($_POST['submitBTnDivide'])) {
                            if ($_POST["int1"] && $_POST["int2"]) {
                                echo "<br><br>Division result is:  " . divide($_POST["int1"], $_POST["int2"]);
                            } else {
                                echo "<br><br>Please insert all numbers.";
                            }
                        }


                        ?>
                    </div>

                    <!-- Classwork 3 - Function calculate sum & average-->
                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-classwork3">
                        <form method="POST">
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Math</label>
                                <div class="col-sm-10">
                                    <input type="input" class="form-control" id="inputEmail3" name="math">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Physics</label>
                                <div class="col-sm-10">
                                    <input type="input" class="form-control" id="inputPassword3" name="physics">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">English</label>
                                <div class="col-sm-10">
                                    <input type="input" class="form-control" id="inputPassword3" name="english">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary" name="sumAndAverage">Calculate</button>
                        </form>
                        <?php

                        function sumAndAverage($math, $physics, $english)
                        {
                            $sum = $math + $physics + $english;
                            $avg = $sum / 3;
                            return  [$sum, $avg];
                        }

                        if (isset($_POST['submitBTnSum'])) {
                            if (isset($_POST["math"]) && isset($_POST["physics"]) && isset($_POST["physics"])) {
                                $calculate = sumAndAverage($_POST["math"], $_POST["physics"], $_POST["english"]);
                                echo "<br><br> Sum:  " . $calculate[0] . "<br><br>";
                                echo "Average:  " . $calculate[1];
                            } else {
                                echo "<br><br>Please insert all numbers.";
                            }
                        }


                        ?>
                    </div>

                    <!-- Classwork 4 - Function calculate area & volume of a box-->
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-classwork4">
                        <form method="POST">
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Width</label>
                                <div class="col-sm-10">
                                    <input type="input" class="form-control" id="inputEmail3" name="width">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Height</label>
                                <div class="col-sm-10">
                                    <input type="input" class="form-control" id="inputPassword3" name="height">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Depth</label>
                                <div class="col-sm-10">
                                    <input type="input" class="form-control" id="inputPassword3" name="depth">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary" name="submitBTnArea">Calculate</button>
                        </form>
                        <?php

                        function areaAndVolume($width, $height, $depth)
                        {
                            $area = $width * $height * $depth;
                            $volume = $width * $height * $depth;

                            return  [$area, $volume];
                        }

                        if (isset($_POST['submitBTnArea'])) {
                            if (isset($_POST["width"]) && isset($_POST["height"]) && isset($_POST["depth"])) {
                                $calculate = areaAndVolume($_POST["width"], $_POST["height"], $_POST["depth"]);
                                echo "<br><br> Area:  " . $calculate[0] . "<br><br>";
                                echo "Volume:  " . $calculate[1];
                            } else {
                                echo "<br><br>Please insert all numbers.";
                            }
                        }

                        ?>
                    </div>
                    <!-- Classwork 5 - Function convert min to hours-->
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-classwork5">
                        <form method="POST">
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Minutes</label>
                                <div class="col-sm-10">
                                    <input type="input" class="form-control" id="inputEmail3" name="min">
                                </div>
                            </div>
                        

                            <button type="submit" class="btn btn-primary" name="areaAndVolume2">Convert</button>
                        </form>
                        <?php

                        function convertMinToHour($minutes)
                        {
                            $hour = $minutes / 60;
                            $min = $minutes - ($hour * 60);

                            return  [$hour, $min];
                        }

                        if (isset($_POST['submitBTnArea'])) {
                            if (isset($_POST["width"]) && isset($_POST["height"]) && isset($_POST["depth"])) {
                                $calculate = areaAndVolume($_POST["width"], $_POST["height"], $_POST["depth"]);
                                echo "<br><br> Area:  " . $calculate[0] . "<br><br>";
                                echo "Volume:  " . $calculate[1];
                            } else {
                                echo "<br><br>Please insert all numbers.";
                            }
                        }

                        ?>
                    </div>
                    <!-- Classwork 6 - Function changing style -->
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-classwork6">
                        <form method="POST">
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">First name</label>
                                <div class="col-sm-10">
                                    <input type="input" class="form-control" id="inputEmail3" name="firstname">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Last name</label>
                                <div class="col-sm-10">
                                    <input type="input" class="form-control" id="inputPassword3" name="lastname">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Age</label>
                                <div class="col-sm-10">
                                    <input type="input" class="form-control" id="inputPassword3" name="age">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary" name="displayInfo">Calculate</button>
                        </form>
                        <?php

                        function displayInfo($width, $height, $depth)
                        {
                            $area = $width * $height * $depth;
                            $volume = $width * $height * $depth;

                            return  [$area, $volume];
                        }

                        if (isset($_POST['submitBTnArea'])) {
                            if (isset($_POST["width"]) && isset($_POST["height"]) && isset($_POST["depth"])) {
                                $calculate = areaAndVolume($_POST["width"], $_POST["height"], $_POST["depth"]);
                                echo "<br><br> Area:  " . $calculate[0] . "<br><br>";
                                echo "Volume:  " . $calculate[1];
                            } else {
                                echo "<br><br>Please insert all numbers.";
                            }
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>