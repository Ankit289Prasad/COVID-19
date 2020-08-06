<!DOCTYPE html>
<html>

<head>
    <meta name="author" content="Ankit Prasad">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="rgba(22, 21, 63, 0.952)">
    <title>COVID-19 Outbreaks</title>
    <link rel="icon" href="imes.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'CSS/style.php'; ?>
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Recursive:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Code|Ubuntu:400,600|Dancing+Script:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script>
        var stickySocialBar = $('#sticky-social-icon');
        var coverHeight = $('.pad').height;
        var dFlex = "d-flex";
        var dNone = "d-none";

        /*Check on scroll*/

        $(window).scroll(function() {
            if ($(window).scrollTop() > coverHeight) {
                stickySocialBar.removeClass(dNone);
                stickySocialBar.addClass(dFlex);
            } else {
                stickySocialBar.removeClass(dFlex);
                stickySocialBar.addClass(dNone);
            }
        })

        /*Check on refresh*/

        if ($(window).scrollTop() > coverHeight) {
            stickySocialBar.removeClass(dNone);
            stickySocialBar.addClass(dFlex);
        } else {
            stickySocialBar.removeClass(dFlex);
            stickySocialBar.addClass(dNone);
        }
    </script>
</head>

<body id="top" data-spy="scroll" data-target=".navbar" data-offset="60">
    <div class="wrapper fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark nav_style p-0">
            <a class="navbar-brand pl-4 py-3" href="#">COVID-19<i class="fa fa-atom pl-2"></i></a>
            <div class="pr-2">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon dark-bg"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-around" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link px-4 " href="#header">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4 " href="#aboutid1">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4 " href="#aboutid">Symptoms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="#prevention">Prevention</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="wrapper main_header" id="header">
        <div class="row w-100 h-100 pad">
            <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
                <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                    <img src="Images/unity.png" alt="UNITY" width="300" height="300" id="mainheader">
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
                <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
                    <h1>Let's Stay Safe & Fight Together Against Cor<span class="corona_rotate"><img src="Images/corona.png" height="53rem" width="53rem"></span>na Virus</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <section class="corona_update">
            <div class="mb-3">
                <h3 class="text-center pt-3">COVID-19 UPDATES</h3>
            </div>

            <div class="d-flex justify-content-around align-items-center pt-3">
                <div>
                    <h1 class="count">1,524,890</h1>
                    <p>Passenger Screened At Airport</p>
                </div>

                <div>
                    <h1 class="count">890</h1>
                    <p>Active COVID-19 Cases</p>
                </div>
                <div>
                    <h1 class="count">89</h1>
                    <p>Recovered COVID-19 Cases</p>
                </div>
                <div>
                    <h1 class="count">9</h1>
                    <p>Death Cases</p>
                </div>
            </div>
        </section>

        <div class="container-fluid sub_section pt-5 pb-5" id="aboutid1">
            <div class="section_header text-center mb-5 mt-4">
                <h1>About COVID-19</h1>
            </div>

            <div class="row pt-4">
                <div class="col-lg-5 col-md-6 col-12 ml-5">
                    <img src="Images/abot.jpg" alt="ABOUT" class="img-fluid">
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <h2>What is COVID-19 (Corona Virus)?</h2>
                    <p>COVID-19 is the infectious disease caused by the most recently discovered coronavirus. This new
                        virus and disease were unknown before the outbreak began in Wuhan, China, in December 2019.
                    </p>
                    <p>Coronavirus are a large family of a viruses which may cause illness in animals and humans.
                        In humans, several coronavirusare known to cause respiratory infections ranging from the common cold
                        to more severe diseases such as Middle East Respiratory Syndrome (MERS) and Severe Acute Respiratory Syndrome
                        (SARS). The most recently discovered coronavirus causes coronavirus disease COVID-19.
                    </p>
                </div>
            </div>
        </div>

        <div class="container-fluid pt-5 pb-5" id="aboutid">
            <div class="scetion_header text-center nb-5 mt-4">
                <h1>Coronavirus Symptoms</h1>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-6 mt-5">
                        <figure class="text-center">
                            <img src="Images/cough.jpg" alt="Cough" class="image-fluid" width="150" height="150">
                            <figcaption>Cough</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6 mt-5">
                        <figure class="text-center">
                            <img src="Images/runny.png" alt="nossy" class="image-fluid" width="150" height="150">
                            <figcaption>Runny Nose</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6 mt-5">
                        <figure class="text-center">
                            <img src="Images/fever.jpg" alt="fever" class="image-fluid" width="150" height="150">
                            <figcaption>Fever</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6 mt-5">
                        <figure class="text-center">
                            <img src="Images/cold.jpg" alt="Cold" class="image-fluid" width="150" height="150">
                            <figcaption>Cold</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6 mt-5">
                        <figure class="text-center">
                            <img src="Images/weak.jpg" alt="weak" class="image-fluid" width="150" height="150">
                            <figcaption>Tiredness</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6 mt-5">
                        <figure class="text-center">
                            <img src="Images/breathe.jpg" alt="breathe" class="image-fluid" width="150" height="150">
                            <figcaption>Difficulty Breathing</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid sub_section pt-5 pb-5" id="prevention">
            <div class="scetion_header text-center nb-5 mt-4 mb-4">
                <h1>6 Steps Prevention Against Coronavirus</h1>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <figure class="text-center">
                                    <img src="Images/wash.png" alt="breathe" class="image-fluid" width="100" height="100">
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <p>Wash your hands regularly for 20 seconds, with soap and water or alcohol-based hand rub.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <figure class="text-center">
                                    <img src="Images/sneze.png" alt="breathe" class="image-fluid" width="100" height="100">
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <p>Cover your nose and mouth with a disposalble tissue or flexed elbow when you cough or sneeze.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <figure class="text-center">
                                    <img src="Images/dis.png" alt="breathe" class="image-fluid" width="100" height="100">
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <p>Avoid close contact (1 meter) or maintain social distancing with prople who are unwell.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mt-5 mb-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <figure class="text-center">
                                    <img src="Images/shome.png" alt="breathe" class="image-fluid" width="100" height="100">
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <p>Stay home and self-isolated from others in the household if you feel unwell.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mt-5 mb-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <figure class="text-center">
                                    <img src="Images/news.png" alt="breathe" class="image-fluid" width="100" height="100">
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <p>Stay informed by watching news & follow the recommended practices.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mt-5 mb-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <figure class="text-center">
                                    <img src="Images/hos.png" alt="breathe" class="image-fluid" width="100" height="100">
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <p>If you have fever, cough and difficulty breathing, seek doctor or medical care early.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="wrapper" id="sticky-social-icon">
            <ul class="float-sticky-bar">
                <li class="position-fb faicon-facebook">
                    <a href="#">Like Us!</a>
                    <i class="fab fa-facebook"></i>
                </li>
                <li class="position-in faicon-instagram">
                    <a href="#">Follow!</a>
                    <i class="fab fa-instagram"></i>
                </li>
                <li class="position-tw faicon-twitter">
                    <a href="#">Tweet!</a>
                    <i class="fab fa-twitter"></i>
                </li>
                <li class="position-yt faicon-youtube">
                    <a href="#">Watch!</a>
                    <i class="fab fa-youtube"></i>
                </li>
                <li class="position-gt faicon-github">
                    <a href="#">Join Us!</a>
                    <i class="fab fa-github"></i>
                </li>
            </ul>
        </div>




    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="scripts/jquery.backtotop.js"></script>
    <script type="text/javascript" src="scripts/jquery.navbar-fix-top.js"></script>
    <script type="text/javascript" src="scripts/jquery.sticky-social-bar.js"></script>
</body>

</html>