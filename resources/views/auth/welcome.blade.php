@extends('pages.app')

@section('content')



{{-- btn to go to top page --}}

<button onclick="topFunction()" id="myBtn" title="Go to top" class="rounded-circle"><i
        class="fas fa-arrow-circle-up"></i></button>

<div class="">

    <div class="flex-center position-ref full-height" id="landing" style="min-width:100%">
        <div class="" style="width:100%; margin-bottom:0%;height:100vh; background-color:#000;">

            <div class="">
                <center>
                    <div class="w3-content w3-section " style="">

                        <section style="height:100vh;backgroud:#000">
                            <video src="{{ asset('images/smoke.mp4') }}" autoplay muted></video>
                            <div class="centered">
                                <span>M</span>
                                <span>A</span>
                                <span>T</span>
                                <span>I</span>
                                <span>C</span>
                            </div>
                        </section>
                    </div>
                </center>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="card p-5"
            style="width:50%; margin-bottom:0%; min-height:100vh;max-height:100vh;background-color:#0d0d0d;" id="about">

            <div class="m-auto">
                <img src="{{ asset('images/9.jpg') }}" alt="Avatar" class="image imground img mx-auto"
                    style="width:14vw;height:30vh">
                <h1 class="h1 text-center mt-2" style="font-family:Acme;text-shadow: 3px 2px black;color:#d5c455;"> <i
                        class="fas fa-user mr-2"></i> About Me</h1>
                <span>
                    <p style="font-family: 'Acme', cursive;color:#d5c455" class="text-center ">"Good,
                        Better, Best.
                        Never let it rest. <br>
                        'Til your good is better and your better is best. "</p>
                </span>

            </div>

        </div>
        <div class="card p-5" style="width:49%; margin-bottom:0%; min-height:100vh;background-color:#0d0d0d;"
            id="about">
            <div class="m-auto">


                <p class="prg pa text-light m-auto">
                    <p class="prg pa text-light m-auto">
                        I am a graduate of Bachelor of Science in Information Technology at Inforamatics
                        College Manila.
                        Being shy, My best memory as a
                        student is to represent my school in quiz bee contest during the 8th I.T. skill olympics at
                        University of Makati.
                    </p>
                    &nbsp;
                    <p class="prg pa text-light m-auto">
                        I considers myself a ‘forever student’, I'm eager to improve my academic foundation in
                        information technology and
                        at the same time to improve my technical skill. My passion for studying and being persistent
                        helped me to passed my thesis subject and get some award in school.

                    </p>
                    &nbsp;
                    <p class="prg pa text-light m-auto">
                        I am comfortable working alone and can also work with a group. Being part of the Student Council
                        as VP External and being a student assistant at Informatics College Manila helped me a lot to
                        improve my self
                        confidence and relationship with other people.
                    </p>
                    &nbsp;
                    {{-- <p class="prg pa text-light m-auto">
                        My goal and dream is to work as a
                        programmer in a company that develop computer programs that is beneficial to the community. </p>
                </p> --}}
                    {{-- <p style="margin-top:32%; color:#d5c455;" class="float-right">*Reload the page to see animation</p> --}}
            </div>
        </div>
    </div>

    <div class="card p-5" style="width:100%; margin-bottom:0%; min-height:100vh;background-color:#1a1a1a;"
        id="education">

        <div class="mx-auto">
            <div>
                <h1 class="h1 text-center" style="color:#d5c455;font-family:Acme;padding-top:2%"> <i
                        class="fas fa-graduation-cap"></i>
                    Education &nbsp; </h1>
            </div>

            <br>
            <div class="text-light p-3" style="min-width:50vw">
                <div class="row ">
                    <div class=" mr-1 p-3" style="min-width:10vw">
                        <p class="font-weight-bold text-light">Tertiary</p>
                        <span>2000 - 2000</span>

                    </div>
                    <div class="text-light p-3" style="max-width:50vw">


                        <span class="hiddentxt">
                            <a href="{{ asset('images/icm.jpg') }}">Informatics College Manila</a></span>
                        <span class="hiddenimg">
                            <img src="{{ asset('images/icm.jpg') }}" width="250" />
                        </span>
                        <br>
                        <span class="prg text-light">Informatics College Manila (IC Manila), established in 1997, is a
                            premier
                            educational
                            institution that has degree and diploma programs, and technical vocational courses in ICT
                            and Business Management. It is a member of the Informatics global group with its main
                            headquarters in Singapore. </span>
                    </div>
                </div>
                {{-- secondary --}}
                <div class="row">
                    <div class=" mr-1 p-3" style="min-width:10vw">
                        <p class="font-weight-bold text-light">Secondary</p>
                        <span>2000 - 2000</span>

                    </div>
                    <div class="text-light p-3" style="max-width:50vw">
                        <span class="hiddentxt">
                            <a href="{{ asset('images/raja.jfif') }}">Raja Soliman Science and Technology High School
                            </a></span>
                        <span class="hiddenimg">
                            <img src="{{ asset('images/raja.jfif') }}" width="250" />
                        </span>
                        <br>
                        <span class="prg text-light">Raja Soliman Science and Technology High School (RSSTHS) is a
                            public science and technology high school located in Binondo, Manila. It was established in
                            1981. It was one of the science high school in the city of Manila. </span>
                    </div>
                </div>
                {{-- elementary --}}
                <div class="row">
                    <div class=" mr-1 p-3" style="min-width:10vw">
                        <p class="font-weight-bold text-light">Elementary</p>
                        <span>2000 - 2000</span>

                    </div>
                    <div class="text-light p-3" style="max-width:50vw">
                        <span class="hiddentxt">
                            <a href="{{ asset('images/raes.jfif') }}">Rosauro Almario Elementary School
                            </a></span>
                        <span class="hiddenimg">
                            <img src="{{ asset('images/raes.jfif') }}" width="250" />
                        </span>
                        <br>
                        <span class="prg text-light">Rosauro Almario Elementary School is a public
                            elementary school
                            that is located in Zaragosa St. Tondo Manila </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card p-5 border border-dark"
            style="width:99%; margin-bottom:0%; min-height:100vh;background-color:#0d0d0d;" id="achievements">

            <div class="mx-auto">


                <h1 class="h1 text-center text-xs" style="font-family:Acme;text-shadow: 3px 2px black; color:#d5c455">
                    <i class="fas fa-award mr-2"></i> Achievements
                </h1>

                <div class="mt-5 prg text-light" style="max-width:60vw; margin-left:3%">
                    <p class="float-left"> - Dean's Lister (Second Semester, School Year: 2017 - 2018)</p>
                    <p class="float-left"> - Dean's Lister (Second Semester, School Year: 2018 - 2019)</p>
                    <p class="float-left"> - Dean's Lister (Third Semester, School Year: 2018 - 2019)</p>
                    <p class="float-left">- Best in Object Oriented Programming (School Year: 2018 - 2019)</p>
                    <p class="float-left">- Best in Program Design (School Year: 2018 - 2019)</p>
                    <p class="float-left">- Best in Data Communication (School Year: 2018 - 2019)</p>
                    <p class="float-left">- Best in Technical Writing and Presentation (School Year: 2018 - 2019)</p>
                    <p class="float-left"> - VP External: Student Council of Inforamtics College Manila (School Year:
                        2018 - 2019)</p>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="card p-5 border border-dark"
            style="width:99%; margin-bottom:0%; min-height:100vh;background-color:#1a1a1a;" id="skills">

            <div class="mx-auto">


                <h1 class="h1 text-center text-xs" style="font-family:Acme;text-shadow: 3px 2px black; color:#d5c455">
                    <i class="fas fa-pencil-ruler mr-3"></i>Skills
                </h1>
                <div class="mx-auto mt-5">
                    <div class="row">
                        <div class=" mr-1 p-3" style="min-width:10vw">

                            <p class="font-weight-bold text-light">
                                <i class="fas fa-circle mr-3"></i>
                                CSS ( Cascading Style Sheet )
                            </p>
                            <p class="font-weight-bold text-light">
                                <i class="fas fa-circle mr-3"></i>
                                HTML ( Hypertext Markup Language )
                            </p>
                            <p class="font-weight-bold text-light">
                                <i class="fas fa-circle mr-3"></i>
                                PHP Programming Language
                            </p>
                            <p class="font-weight-bold text-light">
                                <i class="fas fa-circle mr-3"></i>
                                MySQL
                            </p>
                            <p class="font-weight-bold text-light">
                                <i class="fas fa-circle mr-3"></i>
                                Bootstrap Framework
                            </p>
                            <p class="font-weight-bold text-light">
                                <i class="fas fa-circle mr-3"></i>
                                Laravel Framework
                            </p>

                        </div>
                        <div class="text-light p-3" style="max-width:50vw">

                            <p style="font-weight: 900;">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <p style="font-weight: 900;">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <p style="font-weight: 900;">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </p>

                            <p style="font-weight: 900;">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <p style="font-weight: 900;">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <p style="font-weight: 900;">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="card p-5 border border-dark"
            style="width:99%; margin-bottom:0%; min-height:100vh;background-color:#0d0d0d;" id="projects">

            <div class="mx-auto">


                <h1 class="h1 text-center text-xs" style="font-family:Acme;text-shadow: 3px 2px black; color:#d5c455">
                    <i class="fas fa-folder-open mr-3"></i>Projects
                </h1>
                <div class=" p-3" style="background-color:#0d0d0d;border-color:#1a1a1a">
                    <div class="row my-auto">
                        <div class="ml-auto">
                            <img src="{{ asset('images/gms.png') }}" class="project ml-auto mr-5 zoom"
                                style="border-bottom: 5px solid #feb72b">
                            <p class="text-light mt-3"
                                style="text-align: center; max-width:20vw;letter-spacing: 3px;color:#feb72b">
                                School Project: <br><br>
                                Guidance Management System</p>
                        </div>
                        <span class=""><img src="{{ asset('images/pic4.jpg') }}" class="project mr-5 zoom"
                                style="border-bottom: 5px solid #feb72b">
                            <p class="text-light mt-3"
                                style="text-align: center; max-width:20vw;letter-spacing: 3px;color:#feb72b">
                                School / Thesis Project: <br><br>
                                Sales and Marketing Performance Monitoring System with data Analytics
                                for Informatics College Manila</p>
                        </span>
                        <span class=""><img src="{{ asset('images/13.jpg') }}" class="project mr-5 zoom"
                                style="border-bottom: 5px solid #feb72b">
                            <p class="text-light mt-3"
                                style="text-align: center; max-width:20vw;letter-spacing: 3px;color:#feb72b">
                                Personal Project: <br><br> BlogApp</p>
                        </span>

                    </div>
                </div>
            </div>
        </div>
        <div class="card p-5 border border-dark"
            style="width:99%; margin-bottom:0%; min-height:100vh; background-color:#1a1a1a;" id="whyMe">
            <h1 class="h1 text-center" style="font-family:Acme;text-shadow: 3px 2px black;color:#d5c455;">
                <i class="fas fa-question-circle mr-3"></i>Why Me
            </h1>
            <div class="mx-auto mt-5" style="min-width:50vw;max-width:50vw;">


                <p class="prg text-light mx-auto">
                    <p class="prg text-light mx-auto">
                        As a fresh graduate, I have a good foundation in programming that I learned from school and
                        from self studying. I am also good at doing research and
                        documentation that I proved while doing thesis documentation where I got
                        the role of System
                        Analyst, at the same time I'm also responsible for the frontend design during the system
                        development.
                        Submitting project the meets the project speficication on the set deadline
                        is
                        what I always do while I was still a student.
                    </p>

                    &nbsp;
                    <p class="prg text-light m-auto">
                        I am willing to undergo training if needed to improve my skill and knowledge that I can use to
                        help the company in achieving it's mission.
                        Also, I value and respect people around me and their opinion.

                    </p>

            </div>

        </div>

        <div class="flex-center position-ref full-height" id="landing" style="min-width:100%;">
            <div class="" style="width:100%; margin-bottom:0%;height:100vh; background-color:#0d0d0d;" id="photo">

                <div class="">
                    <center>
                        <div class="w3-content w3-section" style="">
                            <img class="mySlides w3-animate-top scale-down" src="{{ asset('images/6.jpg') }}"
                                style="width:100%">
                            <img class="mySlides w3-animate-bottom scale-down" src="{{ asset('images/10.jpg') }}"
                                style="width:100%">
                            <img class="mySlides w3-animate-top scale-down" src="{{ asset('images/12.jpg') }}"
                                style="width:100%">
                            <img class="mySlides w3-animate-bottom scale-down" src="{{ asset('images/8.jpg') }}"
                                style="width:100%">
                            <img class="mySlides w3-animate-top scale-down" src="{{ asset('images/11.jpg') }}"
                                style="width:100%">
                            &nbsp;
                        </div>
                    </center>
                </div>
            </div>
        </div>

        <div class="row">


            <div class="card p-5 border border-dark"
                style="width:99%; margin-bottom:0%; min-height:100vh; background-color:#0d0d0d;" id="charRef">
                <h1 class="h1 text-center" style="font-family:Acme;text-shadow: 3px 2px black;color:#d5c455;">
                    <i class="fas fa-comments mr-3"></i>Character Reference
                </h1>

                <center>

                    <div class=" p-3" style="background-color:#0d0d0d;border-color:#1a1a1a">
                        <div class="row my-auto">
                            <span class="ml-auto mr-3">
                                <img src="{{ asset('images/jat.jpg') }}" class="charRef ml-auto">
                                <div class="mt-3">
                                    <p class="font-weight-bold text-light">
                                        Jatrina Liwanag Fontilla
                                    </p>
                                    <span class="font-weight-bold text-light">09275664107</span>
                                    <p class="font-weight-bold text-light">ERP Specialist / IT Support</p>
                                </div>
                            </span>
                            <span class="mr-3 ">
                                <img src="{{ asset('images/jenny.jpg') }}" class="charRef">
                                <div class="mt-3">
                                    <p class="font-weight-bold text-light">
                                        Jenny Rose Mejia
                                    </p>
                                    <span class="font-weight-bold text-light">09958864500</span>
                                    <p class="font-weight-bold text-light">Sales Assistant</p>
                                </div>

                            </span>
                            <span class="mr-auto"> <img src="{{ asset('images/jem.jpg') }}" class="charRef mr-auto"
                                    alt="...">
                                <div class="mt-3">
                                    <p class="font-weight-bold text-light">
                                        Jeremy Roaring
                                    </p>
                                    <span class="font-weight-bold text-light">09398067126</span>
                                    <p class="font-weight-bold text-light">Service Action Work PIC</p>
                                </div>
                            </span>
                        </div>

                </center>
            </div>

            <div class="card p-5 border border-dark right"
                style="width:99%; margin-bottom:0%; min-height:100vh; background-color:#1a1a1a;" id="contact">
                <h1 class="h1 mx-auto mb-4" style="font-family:Acme;text-shadow: 3px 2px black;color:#d5c455;"> <i
                        class="fas fa-phone-alt mr-2"></i> Contact Me
                </h1>
                <div class="row">
                    <div class="card p-5" style="width:30%;height:90%;background-color:#0d0d0d;margin-left:1%">
                        <h1 class="mr-auto" style="font-family:Acme;color:#d5c455;font-size:100%"> <i
                                class="fas fa-street-view"></i> &nbsp;
                            Tondo,
                            Manila
                        </h1>
                        <h1 class="mr-auto" style="font-family:Acme;color:#d5c455;font-size:100%"> <i
                                class="fas fa-phone"></i>
                            &nbsp;
                            0947 - 313 - 6393
                        </h1>
                        <h1 class="mr-auto" style="font-family:Acme;color:#d5c455;font-size:100%"> <i
                                class="fas fa-envelope"></i>
                            &nbsp;
                            jeraldinecitam@gmail.com
                        </h1>
                        <hr style="background-color:white">
                        {{-- alert message  --}}
                        @if(session()->has('message'))
                        <div class="alert alert-success text-center">
                            <strong>Success</strong>
                            {{ session()->get('message') }}
                        </div>
                        @endif
                        <div class="card"
                            style="width:100%;height:100%;background-color:#0d0d0d;padding-left:10%;padding-top:1%;">
                            <center>

                                <form action="/#contact" method="post">
                                    <div class="form-group row">
                                        <input type="text" class="form-control input" value="{{ old('name') }}"
                                            placeholder="Name" name="name" style="margin-bottom: 2%">
                                        {{-- error message --}}
                                        <div class="text-danger">{{ $errors->first('name') }}</div>
                                        <input type="text" class="form-control input" value="{{ old('email') }}"
                                            name="email" placeholder="Email">
                                        {{-- error message --}}
                                        <div class="text-danger">{{ $errors->first('email') }}</div>
                                        <textarea class="form-control textarea mt-3" name="message"
                                            placeholder="Message" rows="6"
                                            style="background-color:#0d0d0d;">{{ old('message') }}</textarea>
                                        {{-- error message --}}
                                        <div class="text-danger">{{ $errors->first('message') }}</div>
                                    </div>

                                    @csrf
                                    <button type="submit" class="btn mb-2 formbutton font-weight-bold">SEND</button>
                                </form>
                            </center>
                        </div>

                    </div>
                    <div style="margin-left:1%"></div>

                    @if( ! session()->has('message'))
                    <div class="card" style="width:68%;min-height:100%;max-height:100%;background-color:#0d0d0d;">
                        <!--The div element for the map -->
                        <div id="map" style=" width: 100%;
                    height: 540px;"></div>
                    </div>
                    @endif
                    @if(session()->has('message'))
                    <div class="card" style="width:68%;min-height:100;background-color:#0d0d0d;">
                        <!--The div element for the map -->
                        <div id="map" style="width: 100%;
                    height: 600px;"></div>
                    </div>
                    @endif
                </div>
            </div>
            @endsection