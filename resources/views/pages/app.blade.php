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
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/website.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    {{-- animate on scroll --}}
    <link rel="stylesheet" href="css/animate.css">

    <title>My Website</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        /* Google Fonts */
        @import url('https://fonts.googleapis.com/css?family=Acme|Lobster&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Dancing+Script&display=swap');

        /* border-bottom input */
        .input {
            border: 0;
            outline: 0;
            border-bottom: 2px solid #d5c455;
            background-color: transparent;
            color: #d5c455;
            width: 90%;

        }

        /* input background color */
        input[type=text]:active,
        input[type=text]:focus {
            background-color: transparent;
            border: 2px solid #d5c455;
            color: #f0f0f0;

        }

        .textarea:active,
        .textarea:focus {
            background-color: transparent;
            border: 2px solid #d5c455;
            color: #f0f0f0;
        }

        /* textarea */
        .textarea {
            border: 0;
            outline: 0;
            border: 2px solid #d5c455;
            background-color: #1a1a1a;
            color: #d5c455;
            width: 90%;
        }

        .formbutton {
            background-color: #d5c455;
            color: black;
            margin-left: 62%;
        }

        .about {
            width: 35%;
            height: 90vh;
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
            border-color: #EDEDED
        }

        .achievement {
            width: 99%;
            margin-bottom: 0%;
            min-height: 100vh;
            background-color: #EDEDED;
            background-image:url('{{ asset('images/achieve.png') }}');
            background-size: contain;
            background-repeat: no-repeat;
            border-color: #EDEDED
        }

        .education1 {
            width: 100%;
            margin-bottom: 0%;
            min-height: 90vh;
            background-repeat: no-repeat;
            background-size: cover;
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
            background-image:url('{{ asset('images/circle.png') }}');
            background-size: cover;
            background-repeat: no-repeat;
            border-color: #ededed;
        }

        .charRef1 {
            width: 100%;
            margin-bottom: 0%;
            min-height: 80vh;
            background-color: #ededed;
            border-color: #ededed
        }

        .char {
            width: 70vw;
            background: radial-gradient(131.38% 102.75% at 61.8% 112.4%, #FFE3BE 41.54%, #EDEDED 41.55%);
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
            border-color: #ededed
        }

        .contact1 {
            width: 99%;
            margin-bottom: 0%;
            min-height: 100vh;
            background-color: #ededed;
            border-color: #ededed
        }

        /* alert message */
        .alert {
            background-color: #d5c455;
            color: #0d0d0d;
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

    <script>
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
    
        // Automatic Slideshow - change image every 3 seconds
        var myIndex = 0;
        carousel();

        function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 3000);
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