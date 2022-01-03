<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Weather</title>
    <style>
        body {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            /* background-image: url(./img/cloud11.PNG); */
            background-size: cover;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1000%26quot%3b)' fill='none'%3e%3crect width='1440' height='560' x='0' y='0' fill='%231e3266'%3e%3c/rect%3e%3cpath d='M1536 560L0 560 L0 358.37Q24.41 262.78%2c 120 287.19Q199.1 246.29%2c 240 325.4Q265.63 279.03%2c 312 304.67Q387.83 260.5%2c 432 336.34Q504.34 288.68%2c 552 361.03Q584.55 273.58%2c 672 306.13Q714.86 276.99%2c 744 319.84Q830.76 286.6%2c 864 373.36Q886.35 275.71%2c 984 298.06Q1061.49 255.55%2c 1104 333.04Q1152.7 261.75%2c 1224 310.45Q1315.69 282.14%2c 1344 373.84Q1372.38 330.21%2c 1416 358.59Q1449.3 271.89%2c 1536 305.19z' fill='%23182f5d'%3e%3c/path%3e%3cpath d='M1560 560L0 560 L0 381.09Q68 377.08%2c 72 445.08Q108.09 361.17%2c 192 397.27Q265.69 350.95%2c 312 424.64Q341.44 382.07%2c 384 411.51Q390.77 346.28%2c 456 353.05Q525.71 302.76%2c 576 372.48Q635.91 360.39%2c 648 420.31Q689.31 341.62%2c 768 382.93Q814.65 357.58%2c 840 404.23Q890.11 382.34%2c 912 432.44Q913.5 361.94%2c 984 363.43Q1038.23 297.66%2c 1104 351.89Q1173.8 349.69%2c 1176 419.48Q1220.25 343.74%2c 1296 387.99Q1322.17 342.16%2c 1368 368.34Q1396.34 324.68%2c 1440 353.02Q1542.44 335.46%2c 1560 437.9z' fill='%2325467d'%3e%3c/path%3e%3cpath d='M1488 560L0 560 L0 427.04Q56.51 411.55%2c 72 468.06Q96.5 420.56%2c 144 445.07Q169.31 398.38%2c 216 423.7Q308.28 395.98%2c 336 488.26Q384.44 464.69%2c 408 513.13Q414.94 448.07%2c 480 455.02Q522.51 425.53%2c 552 468.05Q617.69 413.75%2c 672 479.44Q741.47 428.91%2c 792 498.38Q837 423.38%2c 912 468.37Q963.46 399.83%2c 1032 451.29Q1083.01 430.31%2c 1104 481.32Q1181.18 438.5%2c 1224 515.69Q1235.01 454.7%2c 1296 465.71Q1324.84 422.55%2c 1368 451.39Q1445.88 409.27%2c 1488 487.15z' fill='%23356cb1'%3e%3c/path%3e%3cpath d='M1512 560L0 560 L0 538.83Q68.07 486.9%2c 120 554.98Q185.31 500.29%2c 240 565.6Q287.83 493.43%2c 360 541.26Q377.29 486.55%2c 432 503.84Q478.1 477.94%2c 504 524.04Q557.91 505.95%2c 576 559.86Q601.6 513.46%2c 648 539.06Q664.65 483.71%2c 720 500.37Q787.22 447.59%2c 840 514.81Q911.92 514.73%2c 912 586.66Q942.55 545.21%2c 984 575.76Q1004.6 476.36%2c 1104 496.95Q1147.64 468.6%2c 1176 512.24Q1271.05 487.29%2c 1296 582.34Q1319.95 534.3%2c 1368 558.25Q1394.31 512.56%2c 1440 538.86Q1494.92 521.78%2c 1512 576.7z' fill='white'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1000'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3c/defs%3e%3c/svg%3e");
            background-attachment: fixed;
            font-family: poppin, 'Times New Roman', Times, serif;
            font-size: large;
            overflow: hidden;


        }

        .container h1 {
            color: floralwhite;
            text-shadow: 3px 3px 3px black;
            font-weight: 700;
            text-align: center;
            margin-top: 90px;
        }
        b{
            color:#0c347c;
            text-shadow:0px 1px 1px gray;
        }

        /* input {
            width: 350px;
            padding: 5px;
        } */


        /*  @media screen and (max-width:576px) {
            body{
                background-size:unset;
            }
        }*/
    </style>
</head>

<body>
    <div class="container">
        <h1>Five Days Weather Forecasts For Your Location</h1>
        <div class="card shadow" style="background-color:#ffffff40; border-radius:50px;">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="card shadow mb-2" style="background-color:#ffffff40;border-radius:33px;">
                            <div class="card-body">
                                <div class="row ">
                                    <div class="col-12">
                                        <form class="row g-3">
                                            <div class="hstack gap-3">
                                                <input class="form-control" type="text" name="city" id="city" placeholder="Enter your city name">
                                                <button type="submit" name="submit" class="btn btn-primary">Search</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow " style="background-color:#ffffff40;border-radius:27px;">
                            <div class="card-body">

                                <div class="row ">
                                    <div class="col-12">

                                        <div class="output">

                                            <?php
                                            if (array_key_exists('submit', $_GET)) {
                                                //Cheecking if input is empty
                                                if ($_GET['city'] == "" or !$_GET['city']) {
                                                    $error = "Sorry, Your input field is empty";
                                                    if ($error) {
                                                        echo '<br> <div class="alert alert-danger" role="alert">' . $error . '</div>';
                                                    }
                                                }

                                                if ($_GET['city']) {

                                                    $apiData = file_get_contents("https://api.openweathermap.org/data/2.5/forecast?q=" . $_GET['city'] . "&appid=0e379f411e447d942d155a99c76481b9");
                                                    $weather_data = json_decode($apiData, true);



                                                    echo "
                                                         <div class='row'>
                                                            <div class = 'col-12'>
                                                               <div class='card shadow mt-3'  style='background-color:#ffffff40;border-radius:20px;'>
                                                                    <div class='card-body'>
                                                                        <div class='row justify-content-center'>
                                                                                    <div class='col-4'>
                                                                                    <div class='alert' role='alert'  style='background-color:#ffffff40;border-radius:10px;'>

                                                                                        <b>Today:</b>
                                                                                        <span class='badge bg-primary float-end'>
                                                                                        " . date('d-m-y') . "
                                                                                        </span>
                                                                                        
                                                                                        <span class='badge bg-success float-end'>
                                                                                        " . date('D') . "
                                                                                        </span>
                                        
                                                                                        <br>
            
                                                                                        <b>Temperature:</b>
                                                                                        <span class='badge bg-secondary float-end'>
                                                                                        " . $weather_data['list'][0]['main']['temp'] . "
                                                                                        
                                                                                        </span>
                                            
                                                                                        <br>
            
                                                                                        <b>Feels Like:</b>
                                                                                        <span class='badge bg-secondary float-end'>
                                                                                            " . $weather_data['list'][0]['main']['feels_like'] . "
                                                                                        </span>
            
                                                                                        <br>
            
                                                                                        <b>Max-Temperature:</b>
                                                                                        <span class='badge bg-secondary float-end'>
                                                                                            " . $weather_data['list'][0]['main']['temp_max'] . "
                                                                                        </span>
            
                                                                                        <br>
            
                                                                                        <b>Min-Temperature:</b>
                                                                                        <span class='badge bg-secondary float-end'>
                                                                                            " . $weather_data['list'][0]['main']['temp_min'] . "
                                                                                        </span>
            
                                                                                        <br>
            
                                                                                        <b>Humidity:</b>
                                                                                        <span class='badge bg-secondary float-end'>
                                                                                        " . $weather_data['list'][0]['main']['humidity'] . "
                                                                                        </span>
            
                                                                                        <br>
                                                                                        <b>Wind Speed:</b>
                                                                                        <span class='badge bg-secondary float-end'>
                                                                                        " . $weather_data['list'][0]['wind']['speed'] . "
                                                                                        </span>
            
                                                                                        
            
                                                                                        <br>
                                                                                        <b>Description:</b>
                                                                                        <span class='badge bg-secondary float-end'>
                                                                                        " . $weather_data['list'][0]['weather'][0]['description'] . "
                                                                                        </span>
                                                                                    </div>
                                                                                    </div>

                                                                                

                                                                                    <div class='col-4'>
                                                                                    <div class='alert' role='alert'  style='background-color:#ffffff40;border-radius:10px;'>

                                                                                        <b>Day:</b>
                                                                                        <span class='badge bg-primary float-end'>
                                                                                        " . date('d-m-y', strtotime('+1 days')) . "
                                                                                        </span>
                                                                                        
                                                                                        <span class='badge bg-success float-end'>
                                                                                        " . date('D', strtotime('+1 days')) . "
                                                                                        </span>
                                        
                                                                                        <br>
            
                                                                                        <b>Temperature:</b>
                                                                                        <span class='badge bg-secondary float-end'>
                                                                                        " . $weather_data['list'][8]['main']['temp'] . "
                                                                                        
                                                                                        </span>
                                            
                                                                                        <br>
            
                                                                                        <b>Feels Like:</b>
                                                                                        <span class='badge bg-secondary float-end'>
                                                                                            " . $weather_data['list'][8]['main']['feels_like'] . "
                                                                                        </span>
            
                                                                                        <br>
            
                                                                                        <b>Max-Temperature:</b>
                                                                                        <span class='badge bg-secondary float-end'>
                                                                                            " . $weather_data['list'][8]['main']['temp_max'] . "
                                                                                        </span>
            
                                                                                        <br>
            
                                                                                        <b>Min-Temperature:</b>
                                                                                        <span class='badge bg-secondary float-end'>
                                                                                            " . $weather_data['list'][8]['main']['temp_min'] . "
                                                                                        </span>
            
                                                                                        <br>
            
                                                                                        <b>Humidity:</b>
                                                                                        <span class='badge bg-secondary float-end'>
                                                                                        " . $weather_data['list'][8]['main']['humidity'] . "
                                                                                        </span>
            
                                                                                        <br>
                                                                                        <b>Wind Speed:</b>
                                                                                        <span class='badge bg-secondary float-end'>
                                                                                        " . $weather_data['list'][8]['wind']['speed'] . "
                                                                                        </span>
            
                                                                                        
            
                                                                                        <br>
                                                                                        <b>Description:</b>
                                                                                        <span class='badge bg-secondary float-end'>
                                                                                        " . $weather_data['list'][8]['weather'][0]['description'] . "
                                                                                        </span>
                                                                                    </div>
                                                                                    </div>


                                                                                    <div class='col-4'>
                                                                                    <div class='alert' role='alert' style='background-color:#ffffff40;border-radius:10px;'>

                                                                                        <b>Day:</b>
                                                                                        <span class='badge bg-primary float-end'>
                                                                                        " . date('d-m-y', strtotime('+2 days')) . "
                                                                                        </span>
                                                                                        
                                                                                        <span class='badge bg-success float-end'>
                                                                                        " . date('D', strtotime('+2 days')) . "
                                                                                        </span>
                                        
                                                                                        <br>
            
                                                                                        <b>Temperature:</b>
                                                                                        <span class='badge bg-secondary float-end'>
                                                                                        " . $weather_data['list'][16]['main']['temp'] . "
                                                                                        
                                                                                        </span>
                                            
                                                                                        <br>
            
                                                                                        <b>Feels Like:</b>
                                                                                        <span class='badge bg-secondary float-end'>
                                                                                            " . $weather_data['list'][16]['main']['feels_like'] . "
                                                                                        </span>
            
                                                                                        <br>
            
                                                                                        <b>Max-Temperature:</b>
                                                                                        <span class='badge bg-secondary float-end'>
                                                                                            " . $weather_data['list'][16]['main']['temp_max'] . "
                                                                                        </span>
            
                                                                                        <br>
            
                                                                                        <b>Min-Temperature:</b>
                                                                                        <span class='badge bg-secondary float-end'>
                                                                                            " . $weather_data['list'][16]['main']['temp_min'] . "
                                                                                        </span>
            
                                                                                        <br>
            
                                                                                        <b>Humidity:</b>
                                                                                        <span class='badge bg-secondary float-end'>
                                                                                        " . $weather_data['list'][16]['main']['humidity'] . "
                                                                                        </span>
            
                                                                                        <br>
                                                                                        <b>Wind Speed:</b>
                                                                                        <span class='badge bg-secondary float-end'>
                                                                                        " . $weather_data['list'][16]['wind']['speed'] . "
                                                                                        </span>
            
                                                                                        
            
                                                                                        <br>
                                                                                        <b>Description:</b>
                                                                                        <span class='badge bg-secondary float-end'>
                                                                                        " . $weather_data['list'][16]['weather'][0]['description'] . "
                                                                                        </span>
                                                                                    </div>
                                                                                    </div>


                                                                                    <div class='col-4'>
                                                                                            <div class='alert' role='alert' style='background-color:#ffffff40;border-radius:10px;'>

                                                                                                <b>Day:</b>
                                                                                                <span class='badge bg-primary float-end'>
                                                                                                " . date('d-m-y', strtotime('+3 days')) . "
                                                                                                </span>
                                                                                                
                                                                                                <span class='badge bg-success float-end'>
                                                                                                " . date('D', strtotime('+3 days')) . "
                                                                                                </span>
                                                
                                                                                                <br>

                                                                                                <b>Temperature:</b>
                                                                                                <span class='badge bg-secondary float-end'>
                                                                                                " . $weather_data['list'][24]['main']['temp'] . "
                                                                                                
                                                                                                </span>
                                                    
                                                                                                <br>

                                                                                                <b>Feels Like:</b>
                                                                                                <span class='badge bg-secondary float-end'>
                                                                                                    " . $weather_data['list'][24]['main']['feels_like'] . "
                                                                                                </span>

                                                                                                <br>

                                                                                                <b>Max-Temperature:</b>
                                                                                                <span class='badge bg-secondary float-end'>
                                                                                                    " . $weather_data['list'][24]['main']['temp_max'] . "
                                                                                                </span>

                                                                                                <br>

                                                                                                <b>Min-Temperature:</b>
                                                                                                <span class='badge bg-secondary float-end'>
                                                                                                    " . $weather_data['list'][24]['main']['temp_min'] . "
                                                                                                </span>

                                                                                                <br>

                                                                                                <b>Humidity:</b>
                                                                                                <span class='badge bg-secondary float-end'>
                                                                                                " . $weather_data['list'][24]['main']['humidity'] . "
                                                                                                </span>

                                                                                                <br>
                                                                                                <b>Wind Speed:</b>
                                                                                                <span class='badge bg-secondary float-end'>
                                                                                                " . $weather_data['list'][24]['wind']['speed'] . "
                                                                                                </span>

                                                                                                

                                                                                                <br>
                                                                                                <b>Description:</b>
                                                                                                <span class='badge bg-secondary float-end'>
                                                                                                " . $weather_data['list'][24]['weather'][0]['description'] . "
                                                                                                </span>
                                                                                        </div>
                                                                                        </div>


                                                                                        <div class='col-4'>
                                                                                        <div class='alert' role='alert' style='background-color:#ffffff40;border-radius:10px;'>

                                                                                            <b>Day:</b>
                                                                                            <span class='badge bg-primary float-end'>
                                                                                            " . date('d-m-y', strtotime('+4 days')) . "
                                                                                            </span>
                                                                                            
                                                                                            <span class='badge bg-success float-end'>
                                                                                            " . date('D', strtotime('+4 days')) . "
                                                                                            </span>
                                            
                                                                                            <br>

                                                                                            <b>Temperature:</b>
                                                                                            <span class='badge bg-secondary float-end'>
                                                                                            " . $weather_data['list'][32]['main']['temp'] . "
                                                                                            
                                                                                            </span>
                                                
                                                                                            <br>

                                                                                            <b>Feels Like:</b>
                                                                                            <span class='badge bg-secondary float-end'>
                                                                                                " . $weather_data['list'][32]['main']['feels_like'] . "
                                                                                            </span>

                                                                                            <br>

                                                                                            <b>Max-Temperature:</b>
                                                                                            <span class='badge bg-secondary float-end'>
                                                                                                " . $weather_data['list'][32]['main']['temp_max'] . "
                                                                                            </span>

                                                                                            <br>

                                                                                            <b>Min-Temperature:</b>
                                                                                            <span class='badge bg-secondary float-end'>
                                                                                                " . $weather_data['list'][32]['main']['temp_min'] . "
                                                                                            </span>

                                                                                            <br>

                                                                                            <b>Humidity:</b>
                                                                                            <span class='badge bg-secondary float-end'>
                                                                                            " . $weather_data['list'][32]['main']['humidity'] . "
                                                                                            </span>

                                                                                            <br>
                                                                                            <b>Wind Speed:</b>
                                                                                            <span class='badge bg-secondary float-end'>
                                                                                            " . $weather_data['list'][32]['wind']['speed'] . "
                                                                                            </span>

                                                                                            

                                                                                            <br>
                                                                                            <b>Description:</b>
                                                                                            <span class='badge bg-secondary float-end'>
                                                                                            " . $weather_data['list'][32]['weather'][0]['description'] . "
                                                                                            </span>
                                                                                        </div>
                                                                                        </div>


                                                                                    
                                                                        </div>
                                                                    </div>
                                                                </div>                           
                                                            </div>
                                                        </div>";
                                                }
                                            }

                                            ?>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>