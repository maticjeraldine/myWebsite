<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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

        html,
        body {
            background-color: #0d0d0d;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;

        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .imground {
            border-radius: 50%;
        }

        /* .card {
            margin: 0 auto;
             Added 
        float: none;
         Added 
        margin-bottom: 10px;
         Added 
        }*/

        */ .dropbtn {
            background-color: black;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #e0e0d1;
            color: black;
            border-color: black;
        }

        .header {
            padding: 10px 16px;
            background: #f0f0f0;
            color: #f0f0f0;
        }

        .content {
            padding: 16px;
        }

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
        }

        .sticky+.content {
            padding-top: 102px;
        }

        /* text show when hover in image */
        .image {
            opacity: 1;
            display: block;
            width: 100%;
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%)
        }

        .container:hover .image {
            opacity: 0.3;
        }

        .container:hover .middle {
            opacity: 1;
        }

        .text {
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            padding: 16px 32px;
        }

        /* flip image */
        .img:hover {
            transform: scaleX(-1);
        }

        /* gallery */
        .gallery {
            background-color: #f0f0f0;
        }

        .CI {
            max-width: 750px;
            max-height: 750px;
            min-width: 100%;
            min-height: 100%;
            /* border: 1px solid #ddd; */
            border-radius: 4px;
            /* padding: 0px; */
            width: 150px;
        }

        .charRef {
            max-width: 350px;
            max-height: 300px;
            min-width: 350px;
            min-height: 300px;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            margin-right: 1%;
            border-color: #f0f0f0;
            object-fit: cover
        }

        /* projects */
        .project {
            max-width: 300px;
            max-height: 300px;
            min-width: 300x;
            min-height: 300px;
            border-radius: 4px;
        }

        /* animated paragraph */
        .pa {
            animation-duration: 5s;
            animation-name: slidein;
            animation-iteration-count: 1;
        }

        @keyframes slidein {
            from {
                margin-left: 100%;
                width: 300%;
            }

            to {
                margin-left: 0%;
                width: 100%;
            }
        }

        /* moving background */
        .div {

            background-color: #c9485b;
            position: relative;
            animation-name: example;
            animation-duration: 4s;
            animation-iteration-count: infinite;
        }

        @keyframes example {
            0% {
                background-color: #c9485b;
                right: 0px;
                left: 0px;
            }

            25% {
                background-color: #c9485b;
                right: 50px;
                left: 0px;
            }

            50% {
                background-color: #c9485b;
                right: 0px;
                left: 0px;
            }

            75% {
                background-color: #c9485b;
                right: 50px;
                left: 50px;
            }

            100% {
                background-color: #c9485b;
                right: 0px;
                top: 0px;
            }
        }

        /* animation, blink letter */
        .blinking {
            animation: blinkingText 0.5s infinite;
        }

        @keyframes blinkingText {
            0% {
                color: #000;
            }

            49% {
                color: #000;
            }

            60% {
                color: transparent;
            }

            99% {
                color: transparent;
            }

            100% {
                color: #000;
            }
        }

        /* paragraph format */
        .prg {
            text-indent: 50px;
            text-align: justify;
            letter-spacing: 3px;
            color: black;
        }

        /* animated background */
        .body {
            background: linear-gradient(-45deg, #81f5ff, #f1c6d3, #fae3d9, #81f5ff);
            background-size: 400% 400%;
            animation: gradient 5s ease infinite;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* HORIZONTAL */
        .horizontal {
            background: linear-gradient(to right, rgb(26, 26, 26, 1) 0%, rgb(26, 26, 26, 1) 50%, rgba(13, 13, 13, 1) 20%, rgba(13, 13, 13, 1) 50%);
        }

        /* WHY ME */
        .whyMe {
            /* max-width: 500px; 
            
            min-width: 500px; 
            min-height: 500px; */
            width: 1000px;
            height: 500px;
            margin-top: 3%;
            background: linear-gradient(to right, rgba(13, 13, 13, 1) 20%, rgba(13, 13, 13, 1) 50%, rgb(26, 26, 26, 1) 0%, rgb(26, 26, 26, 1) 50%);
        }

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

        /* btn to go to top page  */
        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: #d5c455;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 100px;
        }

        #myBtn:hover {
            background-color: #555;
        }

        /* insert google map */
        #map {

            background-color: grey;
        }


        /* slide */
        .slide {
            max-width: 100%;
            min-width: 100%;
            max-height: 100%;
            min-height: 100%;
        }

        /* text inside image */
        .container {
            position: relative;
            text-align: center;
            color: white;
        }


        .centered {

            /* position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%); */
            margin: 0%;
            padding: 0%;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 100%;
            text-align: center;
            /* color: #ffa41b; */
            color: white;
            font-size: 5em;
            font-family: Acme;
            letter-spacing: 0.2em;
        }

        .centered span {
            display: inline-block;
            /* animation: animate 1s linear infinite; */
            animation: animate 1s linear forwards;

        }

        @keyframes animate {
            0% {
                opacity: 0;
                transform: rotateY(90deg);
                filter: blur(10px)
            }

            100% {
                opacity: 1;
                transform: rotateY(0deg);
                filter: blur(0px)
            }
        }

        video {
            object-fit: cover;
        }

        /* alert message */
        .alert {
            background-color: #d5c455;
            color: #0d0d0d;
        }

        /* neon color text */
        .glow {
            font-family: Dancing Script;
            font-size: 20px;
            color: #fff;
            text-align: center;
            -webkit-animation: glow 1s ease-in-out infinite alternate;
            -moz-animation: glow 1s ease-in-out infinite alternate;
            animation: glow 1s ease-in-out infinite alternate;
        }

        @-webkit-keyframes glow {
            from {
                text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
            }

            to {
                text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
            }
        }

        /* text fixed position */
        .fixed {
            position: fixed;
            top: 0;
            right: 0;
            width: 300px;
            /* border: 3px solid #73AD21; */
            padding-top: 3%;
        }

        .scale-down {
            object-fit: contain;
            width: 200px;
            height: 800px;
            repeat: repeat-x;
        }

        /* hover to text show image */
        .hiddentxt {
            font-weight: bold;
            color: #F00;
        }

        .hiddentxt a {
            color: white;
            text-decoration: none;
        }

        .hiddentxt:hover~.hiddenimg {
            display: block;
        }

        .hiddenclickimg {
            display: none;
        }

        .hiddenimg {
            display: none;
        }

        .zoom:hover {
            transform: scale(1.2);
        }
    </style>
</head>

<body>
    @include('auth.navbar')
    <div class="overflow-hidden">
        @yield('content')
    </div>
    <script>
        window.onscroll = function() {myFunction()};
        
        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;
        
        function myFunction() {
          if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
          } else {
            header.classList.remove("sticky");
          }
        }

        
    </script>

    <script>
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
      setTimeout(carousel, 2000);    
    }
    </script>

    {{-- botton to go to top page --}}
    <script>
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
    </script>
    {{-- script for google map --}}
    <script>
        // Initialize and add the map
        function initMap() {
          // The location of Uluru
          var uluru = {lat: 14.597, lng: 120.956};
          // The map, centered at Uluru
          var map = new google.maps.Map(
              document.getElementById('map'), {zoom: 4, center: uluru});
          // The marker, positioned at Uluru
          var marker = new google.maps.Marker({position: uluru, map: map});
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap">
    </script>

    <script>
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
    </script>
    {{--  hover to text show image --}}
    <script>
        function vidPlay() {  
  $("#video1").get(0).play();  
};
function vidPause() {
	$("#video1").get(0).pause();
};
$(document).ready(function(){
  $("#textToggler").click(function(){
    $(".toggleText").toggle();
  });
});
function toggleImage() {
  $(".hiddenclickimg").toggle();
};
    </script>


</body>

</html>