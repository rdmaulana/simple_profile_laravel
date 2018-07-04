<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#2196F3">
    <title>My Profile | Raden Maulana</title>

    <!-- CSS  -->
    <link href="{{ url('min/plugin-min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ url('min/custom-min.css') }}" type="text/css" rel="stylesheet" >
    <style>
      #map {
        width: 100%;
        height: 400px;
        background-color: grey;
      }
    </style>

</head>
<body id="top" class="scrollspy">
    <!-- Pre Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
    
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <!--Navigation-->
    <div class="navbar-fixed">
        <nav id="nav_f" class="default_color" role="navigation">
            <div class="container">
                <div class="nav-wrapper">
                <a href="#" id="logo-container" class="brand-logo"></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#intro">About</a></li>
                        <li><a href="#work">Work</a></li>
                        <li><a href="#team">Skills</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    <ul id="nav-mobile" class="side-nav">
                        <li><a href="#intro">About</a></li>
                        <li><a href="#work">Work</a></li>
                        <li><a href="#team">Skills</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                </div>
            </div>
        </nav>
    </div>

    <!--Slogan-->
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <div class="row">
            <!-- <div class="col s4">
                <br> <br>
                    <img src="img/welcome.png">
                </div> -->
                <div class="col l12 s12 m12">
                    <h2 class="text_h center header cd-headline letters type">
                        <span class="">Hoola!</span> <br>
                        <span>" I'm a</span>
                        <span class="cd-words-wrapper waiting">
                            <b class="is-visible">Developer</b>
                            <b>Designer</b>
                            <b>Videographer</b>
                            <b>Editor</b>
                        </span>
                        <span>"</span>
                    </h2>
                </div> 
            </div>
            
            
        </div>
    </div>

    <!--Intro and service-->
    <div id="intro" class="section scrollspy">
        <div class="container">
            <div class="row">
                <div  class="col s12 m12 l12">
                    <center>
                        <img  class="responsive-img circle center" src="img/22.jpg">
                    </center>
                    <h4 class="center header text_h2"> Hi! my name is <span class="span_h2">Raden Maulana.</span><br> I'm the guy who love<span class="span_h2"> developing, </span>creating some beautiful <span class="span_h2">design,</span> and editing awsome <span class="span_h2">videos.</span> <br> 
                    <span class="">With the skill that I have, I hope to make an <span class="span_h2">IT solution</span> for you.</span>
                    </h4>
                </div>
            </div>
        </div>
    </div>

    <!--Parallax-->
    <div class="parallax-container">
        <div class="parallax"><img src="img/mount1.jpg"></div>
    </div>

    <!--Work-->
    <div class="section scrollspy" id="work">
        <div class="container">
            <h2 class="header text_b text_h2">My Work </h2>
            <div class="row">
                <div class="col s6 m4 l4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/HW.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Hello World<i class="mdi-navigation-more-vert right"></i></span>
                            <p><a href="#">View</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Hello World Logo<i class="mdi-navigation-close right"></i></span>
                            <p>Here is the logo of Hello World, Hello World is clothing company in Bogor, Indonesia.</p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m4 l4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/PS.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">The Exposure <i class="mdi-navigation-more-vert right"></i></span>
                            <p><a href="#">View</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">The Exposure <i class="mdi-navigation-close right"></i></span>
                            <p>This is the double exposure combination.</p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m4 l4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/BS.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Start with Basmalah <i class="mdi-navigation-more-vert right"></i></span>
                            <p><a href="#">View</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Start with Basmalah <i class="mdi-navigation-close right"></i></span>
                            <p>This is great Basmalah wallpaper i made with for any desktop or laptop wallpaper.</p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m4 l4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/yello.JPG">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Yelo Eatery Profile<i class="mdi-navigation-more-vert right"></i></span>
                            <p><a href="#">Watch Video</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Yelo Eatery Profile <i class="mdi-navigation-close right"></i></span>
                            <p>This is video profile of Yelo Eatery. Yelo Eatery is a fastfood restaurant in Bogor, Indonesia.</p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m4 l4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/pacitan.JPG">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Explore Pacitan <i class="mdi-navigation-more-vert right"></i></span>
                            <p><a href="#">Watch Video</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Explore Pacitan <i class="mdi-navigation-close right"></i></span>
                            <p>I create this video when i went on vacation to Pacitan - East Java, Indonesia. </p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m4 l4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/asset.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Management Asset App <i class="mdi-navigation-more-vert right"></i></span>
                            <p><a href="#">View</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Management Asset App <i class="mdi-navigation-close right"></i></span>
                            <p>This is first Web Application by me. This application can do anything like CRUD, Statistic, etc.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Parallax-->
    <div class="parallax-container">
        <div class="parallax"><img src="img/mount1.jpg"></div>
    </div>

    <!--Team-->
    <div class="section scrollspy" id="team">
        <div class="container">
            <h2 class="header text_b text_h2"> My Skills </h2> <br>
            <!-- Languages -->
            <div class="row">
                <div class="col s6 m2">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/skill/html5-logo.png">
                        </div>
                        <div class="card-content">
                            <p style="text-align: center;">HTML5</p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m2">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/skill/css3-logo.png">
                        </div>
                        <div class="card-content">
                            <p style="text-align: center;">CSS3</p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m2">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/skill/javascript-logo.png">
                        </div>
                        <div class="card-content">
                            <p style="text-align: center;">Javascript</p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m2">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/skill/php-logo.png">
                        </div>
                        <div class="card-content">
                            <p style="text-align: center;">PHP</p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m2">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/skill/node-logo.jpg">
                        </div>
                        <div class="card-content">
                            <p style="text-align: center;">Node.js</p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m2">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/skill/java.png">
                        </div>
                        <div class="card-content">
                            <p style="text-align: center;">Java</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Framework -->
            <div class="row">
                <div class="col s6 m2">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/skill/bootstrap.jpg">
                        </div>
                        <div class="card-content">
                            <p style="text-align: center;">Bootstrap</p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m2">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/skill/react.png" style="height: auto">
                        </div>
                        <div class="card-content">
                            <p style="text-align: center;">React Native</p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m2">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/skill/jQurery.gif" style="height: auto">
                        </div>
                        <div class="card-content">
                            <p style="text-align: center;">Jquery</p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m2">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/skill/angular-logo.png">
                        </div>
                        <div class="card-content">
                            <p style="text-align: center;">Angular JS</p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m2">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/skill/sails-preview-400-2.jpg">
                        </div>
                        <div class="card-content">
                            <p style="text-align: center;">Sails.js</p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m2">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/skill/laravel2.png">
                        </div>
                        <div class="card-content">
                            <p style="text-align: center;">Laravel</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Software -->
            <div class="row">
                <div class="col s6 m2">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/skill/ps.svg">
                        </div>
                        <div class="card-content">
                            <p style="text-align: center;">Photoshop</p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m2">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/skill/pr.svg">
                        </div>
                        <div class="card-content">
                            <p style="text-align: center;">Premiere Pro</p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m2">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/skill/ae.svg">
                        </div>
                        <div class="card-content">
                            <p style="text-align: center;">After Effect</p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m2">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/skill/dw.svg">
                        </div>
                        <div class="card-content">
                            <p style="text-align: center;">Dreamweaver</p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m2">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/skill/id.svg">
                        </div>
                        <div class="card-content">
                            <p style="text-align: center;">Indesign</p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m2">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/skill/ai.svg">
                        </div>
                        <div class="card-content">
                            <p style="text-align: center;">Illustrator</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--Footer-->
    <footer id="contact" class="default_color scrollspy">
        <div class="">  
            <div class="">
                <div class="col l8 s12">
                    <div id="map"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col l12 s12">
                        <h2 class="text_h2 text_b white-text">Contact Me</h2>

                        @if(Session::has('status'))
                            <!-- <div class="alert alert-success">{{ Session::get('status') }}</div> -->
                            <!-- <div class="">{{ Session::get('status') }}</div> -->
                            <div class="row">
                                <div class="col s12 m12">
                                <div class="card green darken-1">
                                    <div class="card-content white-text">
                                        <span class="card-title">Message Sent!</span>
                                        <p>{{ Session::get('status') }}</p>
                                    </div>
                                </div>
                                </div>
                            </div>
                        @endif

                        <form class="col s12" action="" method="post">

                            {{ csrf_field() }}

                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="mdi-action-account-circle prefix white-text"></i>
                                    <input id="icon_prefix" name="name" type="text" class="validate white-text">
                                    <label for="icon_prefix" class="white-text">Name</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="mdi-communication-email prefix white-text"></i>
                                    <input id="icon_email" name="email" type="email" class="validate white-text">
                                    <label for="icon_email" class="white-text">Email</label>
                                </div>
                                <div class="input-field col s12">
                                    <i class="mdi-editor-mode-edit prefix white-text"></i>
                                    <textarea id="icon_prefix2" name="message" class="materialize-textarea white-text"></textarea>
                                    <label for="icon_prefix2" class="white-text">Message</label>
                                </div>
                                <div class="col offset-s7 s5">
                                    <button class="btn waves-effect waves-light red darken-1" type="submit">Submit
                                    <i class="mdi-content-send right white-text"></i>
                                </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>    
            </div>
        </div>

        <div class="footer-copyright default_color">
            <div class="container">
                <div class="center">
                    <a href="mailto:rdmaulana01@gmail.com" class="white-text" >
                                <i class="small fa fa-envelope-square white-text"></i> </a> &nbsp;
                    <a class="white-text" href="https://www.facebook.com/Bogor.home">
                                    <i class="small fa fa-facebook-square white-text"></i> 
                                </a> &nbsp;
                    <a class="white-text" href="https://www.instagram.com/rdmaulanaa">
                                    <i class="small fa fa-instagram white-text"></i> 
                                </a> &nbsp;
                    <a class="white-text" href="https://www.twitter.com/rdmaulanaa">
                                    <i class="small fa fa-twitter-square white-text"></i> 
                                </a> &nbsp;
                    <a class="white-text" href="https://github.com/rdmaulana">
                                    <i class="small fa fa-github-square white-text"></i> 
                                </a> &nbsp;
                    <a class="white-text" href="https://www.linkedin.com/in/rdmaulana">
                                    <i class="small fa fa-linkedin-square white-text"></i> 
                                </a> &nbsp;
                </div>
                
            </div>
        </div>
    </footer>


    <!--  Scripts-->
    <script src="{{ url('min/plugin-min.js') }}"></script>
    <script src="{{ url('min/custom-min.js') }}"></script>
    <script src="{{ url('js/mod.js') }}"></script>
    <script>
      function initMap() {
        var bogor = {lat: -6.5656887, lng: 106.8078833};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: bogor
        });
        var marker = new google.maps.Marker({
          position: bogor,
          map: map
        });
      } 
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6eRnAMBQ1TaAfzDibhta9yDfZBzES-dQ&callback=initMap">
    </script>
</body>
</html>