
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
        <link rel="stylesheet" type="text/css" media="screen" href="stylesheet/m.css">
        <link rel="stylesheet" type="text/css" media="screen" href="stylesheet/news.css">
        <link rel="stylesheet" type="text/css" media="screen" href="stylesheet/carausel.css">
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
                if ($(window).scrollTop() >= 680) {
                    $('nav').addClass('fixed-top');
                }
                else {
                    $('nav').removeClass('fixed-top');
                }
            });

        </script>



    </head>
    <body>
    <?php include 'include/header.html'?>
    </body>
</html>
