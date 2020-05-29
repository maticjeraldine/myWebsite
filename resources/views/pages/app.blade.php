<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/website.js') }}"></script>
    {{-- WOW.JS SCRIPT --}}
    {{-- <script src="wow.js"></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/website.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>



    <title>My Website</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        /* Google Fonts */
        @import url('https://fonts.googleapis.com/css?family=Acme|Lobster&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Dancing+Script&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Akronim|Bungee+Inline|Fredericka+the+Great|Lobster|Monoton|Press+Start+2P|Trade+Winds|Vast+Shadow&display=swap');

        /* responsive styling, phone size */
        @media only screen and (min-width: 375px) {
            .land {
                display: none;
            }

            .landing1 {
                display: none;
            }

            .about {
                display: none;
            }



            .myBtn {
                display: none
            }

            .roundedBg {
                background: radial-gradient(104.17% 90.14% at -4.17% 25.84%, rgba(255, 222, 214, 0.8125) 0%, #FFE2DB 62.13%, #FFE3BE 62.43%);
                border-color: #EDEDED;
                box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
                width: 100%;
                min-height: 93vh;
                margin-bottom: auto;
                padding-left: 10px;
                padding-top: 60%;

            }

            .roundedBg-h1 {
                margin-top: 20%;
            }

            /* paragraph format */
            .prg {
                text-indent: 50px;
                text-align: justify;
                color: black;
            }

            .education {
                background: radial-gradient(88.1% 88.1% at 86.96% -2.38%, #EDEDED 49.37%, #FFE2DB 49.37%);
                border-color: #EDEDED;
                box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
                width: 100%;
                margin-bottom: 0%;
                margin: auto;

            }

            .edu-width {
                text-align: justify;
                padding: 0% 4% 4% 4%;
            }

            .edu-level {
                padding: 0% 4% 0% 4%;
            }

            .edu-desk {
                display: none;
            }

            .edu-phone {
                display: block;
            }
        }

        /* styling for computer screen */
        @media only screen and (min-width: 1000px) {
            .land {
                display: block;
            }

            .landing1 {
                display: block;
            }

            .about {
                display: block;
            }


            .myBtn {
                display: block
            }

            .roundedBg {
                background: radial-gradient(104.17% 90.14% at -4.17% 25.84%, rgba(255, 222, 214, 0.8125) 0%, #FFE2DB 62.13%, #FFE3BE 62.43%);
                border-color: #EDEDED;
                box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
                width: 35%;
                margin-bottom: 0%;
                min-height: 93vh;
                margin-bottom: auto;
                padding-left: 10px;
            }

            .roundedBg-h1 {
                margin-top: 0%;
            }

            /* paragraph format */
            .prg {
                text-indent: 50px;
                text-align: justify;
                letter-spacing: 3px;
                color: black;
            }

            .education {
                background: radial-gradient(88.1% 88.1% at 86.96% -2.38%, #EDEDED 49.37%, #FFE2DB 49.37%);
                border-color: #EDEDED;
                box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
                margin-bottom: 0%;
                margin: auto;
            }

            .education1 {
                width: 100%;
                margin-bottom: 0%;
                min-height: 90vh;
                background-repeat: no-repeat;
                background-size: cover;
                border-color: #EDEDED;
                padding: 3%;
            }

            .edu-margin {
                margin: auto;
                margin-left: 14%;
            }

            .edu-width {
                max-width: 50vw;
                padding: 2%;
            }

            .edu-level {
                padding: 2%;
            }

            .edu-desk {
                display: block;
            }

            .edu-phone {
                display: none;
            }
        }


        /* border-bottom input */
        .input {
            border: 0;
            outline: 0;
            border-bottom: 2px solid black;
            background-color: transparent;
            color: #d5c455;
            width: 90%;
        }

        /* input background color */
        input[type=text]:active,
        input[type=text]:focus {
            background-color: transparent;
            border: 2px solid black;
            color: black;
        }

        .textarea:active,
        .textarea:focus {
            background-color: transparent;
            border: 2px solid black;
            color: black;
        }

        /* textarea */
        .textarea {
            border: 0;
            outline: 0;
            border: 2px solid black;
            background-color: #FFFBED;
            color: #d5c455;
            width: 90%;
        }

        .formbutton {
            background-color: black;
            color: white;
            margin-left: 62%;
        }

        .about {
            width: 35%;
            height: 93vh;
            background-image:url('{{ asset('images/about.jpg') }}');
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
            border-color: #EDEDED;
            margin-top: auto;
        }

        .about1 {
            width: 100%;
            margin-bottom: 0%;
            min-height: 90vh;
            background-color: #EDEDED;
            border-color: #EDEDED;

        }

        .achievement {
            width: 99%;
            margin-bottom: 0%;
            min-height: 75vh;
            background-color: #EDEDED;
            background-image:url('{{ asset('images/achieve.png') }}');
            background-size: contain;
            background-repeat: no-repeat;
            border-color: #EDEDED
        }


        .skill1 {
            width: 99%;
            margin-bottom: 0%;
            min-height: 90vh;
            background-color: #EDEDED;
            background-image:url('{{ asset('images/girlBook.png') }}');
            background-size: contain;
            background-repeat: no-repeat;
            border-color: #EDEDED
        }

        .whyMe1 {
            width: 99%;
            margin-bottom: 0%;
            min-height: 80vh;
            background-image:url('{{ asset('images/me.png') }}');
            background-size: cover;
            background-repeat: no-repeat;
            border-color: #ededed;
        }

        .charRef1 {
            width: 100%;
            margin-bottom: 0%;
            min-height: 60vh;
            background-color: #ededed;
            border-color: #ededed;
            padding-top: %;
        }

        .char {
            width: 70vw;
            background: radial-gradient(131.38% 102.75% at 61.8% 112.4%, #FFDED6 41.54%, #EDEDED 41.55%);
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
            border-color: #ededed
        }

        .contact1 {
            width: 99%;
            margin-bottom: 0%;
            min-height: 80vh;
            background-color: #ededed;
            border-color: #ededed;
            padding-top: 4%
        }

        /* alert message */
        .alert {
            background-color: #d5c455;
            color: #0d0d0d;
        }

        .name {
            font-family: 'Dancing Script';
            font-size: 20px;
            padding-top: 5%;
            padding-right: 5%;
        }

        /* page preloader */
        .main {
            width: 100%;
            height: 100vh;
            background: linear-gradient(80deg, #110e1f, #1b1730);
            position: fixed;
            top: 0px;
            left: 0px;
            z-index: 9999;
        }

        .text {
            width: 100%;
            height: 100vh;
            /* background-image: url('{{ asset('images/1.jpg') }}'); */
            background-color: red;
            background-position: center;
            font-family: Monoton;
            font-size: 90px;
            text-align: center;
            line-height: 650px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(-5deg);
            color: transparent;
            -webkit-background-clip: text;
            pointer-events: none;
            animation: example 1s infinite;
            transition: opacity 0.5s ease;
        }

        @keyframes example {
            0% {
                background-color: #ffb6b9;
            }

            10% {
                background-color: #0f4c75;
            }

            20% {
                background-color: #f8b400;
            }

            30% {
                background-color: #bbe1fa;

            }

            40% {
                background-color: #2c786c;

            }

            50% {
                background-color: #ff7315;
            }

            60% {
                background-color: #916dd5;

            }

            70% {
                background-color: #015668;


            }

            80% {
                background-color: #ee8572;
            }

            90% {
                background-color: #4a47a3;
            }

            100% {
                background-color: #f9fcfb;
            }
        }

        .preload-finish {
            opacity: 0;
            pointer-events: none;
        }
    </style>
</head>

<body>
    @include('auth.navbar')
    <div class="overflow-hidden">
        @yield('content')
    </div>

    {{-- PAGE SCRIPT --}}

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"></script>
    {{-- WOW.JS SCRIPT --}}
    <script src="{{ asset('js/wow.js') }}"></script>
    <script>
        new WOW().init();
    </script>




    <script>
        // GET RID OF PRELOADER WHEN DONE LOADING THE WEBPAGE
        window.addEventListener('load',() => {
            const main = document.querySelector('.main')
            main.classList.add('preload-finish');

        });


        //Smooth scroll on desktop
        //   botton to go to top page  
        //Get the button
        var mybutton = document.getElementById("myBtn");
        
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }
        
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
    
       
        //    smooth scroll 
        // go to top page
        const target = document.getElementById('landing'),
		button = document.getElementById('myBtn');
        button.addEventListener('click', function(){
            target.scrollIntoView({
                block: 'start',
                behavior: 'smooth',
                inline: 'nearest' 
            });
	
	    // Because scrollIntoView doesn't have callback.
            setTimeout(function(){
                window.location.hash = '#landing';
            }, 2000);
        });



        //smmoth scroll about
        const targetAbout = document.getElementById('about'),
		buttonAbout = document.getElementById('btnAbout');
        buttonAbout.addEventListener('click', function(){
            targetAbout.scrollIntoView({
                block: 'start',
                behavior: 'smooth',
                inline: 'nearest' 
            });
	
	    // Because scrollIntoView doesn't have callback.
            setTimeout(function(){
                window.location.hash = '#about';
            }, 1000);
        });


        //smmoth scroll education
        const targetEducation = document.getElementById('education'),
                buttonEducation = document.getElementById('btnEduc');
        buttonEducation.addEventListener('click', function(){
            targetEducation.scrollIntoView({
                block: 'start',
                behavior: 'smooth',
                inline: 'nearest' 
            });
	
	    // Because scrollIntoView doesn't have callback.
            setTimeout(function(){
                window.location.hash = '#education';
            }, 1000);
        });
        //smmoth scroll achievement
        const targetAchievement = document.getElementById('achievements'),
                buttonAchievement = document.getElementById('btnAchieve');
        buttonAchievement.addEventListener('click', function(){
            targetAchievement.scrollIntoView({
                block: 'start',
                behavior: 'smooth',
                inline: 'nearest' 
            });
            
            // Because scrollIntoView doesn't have callback.
            setTimeout(function(){
                window.location.hash = '#achievements';
            }, 1000);
        });
        //smmoth scroll skills
        const targetSkills = document.getElementById('skills'),
                buttonSkills = document.getElementById('btnSkills');
        buttonSkills.addEventListener('click', function(){
            targetSkills.scrollIntoView({
                block: 'start',
                behavior: 'smooth',
                inline: 'nearest' 
            });
            
            // Because scrollIntoView doesn't have callback.
            setTimeout(function(){
                window.location.hash = '#skills';
            }, 1000);
        });
        //smmoth scroll project
        const targetProjects = document.getElementById('projects'),
                buttonProjects = document.getElementById('btnProjects');
        buttonProjects.addEventListener('click', function(){
            targetProjects.scrollIntoView({
                block: 'start',
                behavior: 'smooth',
                inline: 'nearest' 
            });
            
            // Because scrollIntoView doesn't have callback.
            setTimeout(function(){
                window.location.hash = '#projects';
            }, 1000);
        });
        //smmoth scroll photo
        const targetPhotos = document.getElementById('photo'),
                buttonPhotos = document.getElementById('btnPhotos');
        buttonPhotos.addEventListener('click', function(){
            targetPhotos.scrollIntoView({
                block: 'start',
                behavior: 'smooth',
                inline: 'nearest' 
            });
            
            // Because scrollIntoView doesn't have callback.
            setTimeout(function(){
                window.location.hash = '#photo';
            }, 1000);
        });
        //smmoth scroll whyMe
        const targetWhyMe = document.getElementById('whyMe'),
                buttonWhyMe = document.getElementById('btnWhyMe');
        buttonWhyMe.addEventListener('click', function(){
            targetWhyMe.scrollIntoView({
                block: 'start',
                behavior: 'smooth',
                inline: 'nearest' 
            });
            
            // Because scrollIntoView doesn't have callback.
            setTimeout(function(){
                window.location.hash = '#whyMe';
            }, 1000);
        });
         //smmoth scroll character reference
         const targetcharRef = document.getElementById('charRef'),
                buttoncharRef = document.getElementById('btncharRef');
        buttoncharRef.addEventListener('click', function(){
            targetcharRef.scrollIntoView({
                block: 'start',
                behavior: 'smooth',
                inline: 'nearest' 
            });
            
            // Because scrollIntoView doesn't have callback.
            setTimeout(function(){
                window.location.hash = '#charRef';
            }, 2000);
        });
         //smmoth scroll contact
         const targetContact = document.getElementById('contact'),
                buttonContact = document.getElementById('btnContact');
        buttonContact.addEventListener('click', function(){
            targetContact.scrollIntoView({
                block: 'start',
                behavior: 'smooth',
                inline: 'nearest' 
            });
            
            // Because scrollIntoView doesn't have callback.
            setTimeout(function(){
                window.location.hash = '#contact';
            }, 2000);
        });
    </script>
</body>

</html>