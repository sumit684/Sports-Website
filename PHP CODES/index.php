
<!DOCTYPE html>
<html lang="en">
    <head>

        <title>HOME | Diretorate of Physical Edu and Sports</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/jpg" href="images/logo.jpg">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" media="screen" href="stylesheets/m.css">
        <link rel="stylesheet" type="text/css" media="screen" href="stylesheets/news.css">
        <link rel="stylesheet" type="text/css" media="screen" href="stylesheets/carausel.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Black+And+White+Picture|Lato|Montserrat|PT+Sans|Patrick+Hand|Playfair+Display:700|Poor+Story|Slabo+27px" rel="stylesheet">

        <style>

            .dd{
                background-image: url(images/vision-mission/skyy.png);
                background-size: cover;

                background-repeat: no-repeat;
                background-attachment: fixed;
            }
            .news:hover{
                text-shadow: 3px 3px 20px #f4ebeb;
                transition: 2s;
            }

            .no-js #loader { display: none;  }
            .js #loader { display: block; position: absolute; left: 100px; top: 0; }
            .se-pre-con {
                position: fixed;
                left: 0px;
                top: 0px;
                width: 100%;
                height: 100%;
                z-index: 9999;
                display: flex;
                background: url(images/loader.gif) center no-repeat #fff;

            }


        </style>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
        <script>
            //paste this code under the head tag or in a separate js file.
            // Wait for window load
            $(window).load(function() {
                // Animate loader off screen
                $(".se-pre-con").fadeOut("slow");;
            });

            $(window).scroll(function(){
                if ($(window).scrollTop() >=550) {
                    $('nav').addClass('fixed-top');
                }
                else {
                    $('nav').removeClass('fixed-top');
                }
            });

        </script>



    </head>
    <body>
     
       
         <?php include 'include/nav.html';?>
         <?php include 'include/header.html';?>
        <!-- **********************CARAUSEL STARTS**************************   -->


        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/1.JPG" alt="image 1" >
                </div>
                <div class="carousel-item">
                    <img src="images/2.JPG" alt="image 2" >
                </div>
                <div class="carousel-item">
                    <img src="images/3.JPG" alt="image 3" >
                </div>
                <div class="carousel-item">
                    <img src="images/4.JPG" alt="image 4" >
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>


        <!-- **********************CARAUSEL ENDS**************************   -->   


        <!--**************************************NEWS and Events START*******************************************-->


        <!-- <*****news start****> -->
        <div class="container-fluid" style="/*background-color:white;*/ padding: 0px;">
            <div class="container-fluid" style="background-color: #2f2424; padding: 27px; width:100vw; padding-top: 5px;">
                <h1 class="display-4 news" style="text-align: center; color: white; padding-bottom: 5px; ">News and Events</h1>
                <div class="card-deck">
                    <div class="card" >
                        <img class="card-img-top img-fluid" src="images/news.gif" alt="Card image" style="width:100%">
                        <div style="position: relative; top: -24px; left: 18px; background-color: #2f2424; height: 50px; width: 50px; text-align: center;  color: white;">
                            <span>Nov</span>
                            <span>29</span>
                        </div>
                        <div class="card-body" style="padding-top: 0px;">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text some example text. John Doe is an architect and engineer.Some example text some example text. John Doe is an architect and engineer.Some example text some example text. John Doe is an architect and engineer.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top img-fluid" src="images/tenor.gif" alt="Card image" style="width:100%; height:170px;">
                        <div style="position: relative; top: -24px; left: 18px; background-color: #2f2424; height: 50px; width: 50px; text-align: center;  color: white;">
                            <span>Nov</span>
                            <span>29</span>
                        </div>
                        <div class="card-body" style="padding-top: 0px;">
                            <h4 class="card-title" >John Doe</h4>
                            <p class="card-text">Some example text some example text. John Doe is an architect and engineer.Some example text some example text. John Doe is an architect and engineer.Some example text some example text. John Doe is an architect and engineer.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                    <div class="card" >
                        <img class="card-img-top img-fluid" src="images/news2.gif" alt="Card image" style="width:100%">
                        <div style="position: relative; top: -24px; left: 18px; background-color: #2f2424; height: 50px; width: 50px; text-align: center;  color: white;">
                            <span>Nov</span>
                            <span>29</span>
                        </div>
                        <div class="card-body" style="padding-top: 0px;">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text some example text. John Doe is an architect and engineer.Some example text some example text. John Doe is an architect and engineer.Some example text some example text. John Doe is an architect and engineer.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                    <div class="card" >
                        <img class="card-img-top img-fluid" src="images/clock.gif" alt="Card image" style="width:100%; height:169px;">
                        <div style="position: relative; top: -24px; left: 18px; background-color: #2f2424; height: 50px; width: 50px; text-align: center;  color: white;">
                            <span>Nov</span>
                            <span>29</span>
                        </div>
                        <div class="card-body" style="padding-top: 0px;">
                            <h4 class="card-title">John Doe </h4>
                            <p class="card-text">Some example text some example text. John Doe is an architect and engineer.Some example text some example text. John Doe is an architect and engineer.Some example text some example text. John Doe is an architect and engineer.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div></div>
            <!-- ************ -->
            <div class="container-fluid dd" id="aboutdavv" style="" align="center">

                <a href="vision-mission.html"> <img class="img-fluid" src="images/vision-mission/vision-mission.png" alt=""  ></a>


            </div>

        </div>
        <!--**************************************NEWS and Events ENDS*******************************************-->



        <?php include 'include/footer.html';?>
    </body>
</html>
