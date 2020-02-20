<nav class="navbar navbar-expand-md fixed-top">

    <div class="float-left" style="margin-right:auto">
        <div class="dropdown">

            <button class="dropbtn btn p-2 border-light" style="background-color:#d5c455">
                <i class="fas fa-bars"></i> &nbsp; Menu</button>
            <div class="dropdown-content" style="background-color:#d8c962">
                <a href="#about" class="border border-bottom-dark">About Me</a>
                <a href="#education" class="border border-bottom-dark">Education</a>
                <a href="#achievements" class="border border-bottom-dark">Achievements</a>
                <a href="#skills" class="border border-bottom-dark">Skills</a>
                <a href="#projects" class="border border-bottom-dark">Projects</a>
                <a href="#photo" class="border border-bottom-dark">Photo Galery </a>
                <a href="#whyMe" class="border border-bottom-dark">Why Me?</a>
                <a href="#charRef" class="border border-bottom-dark">Character Reference</a>
                <a href="#contact" class="border border-bottom-dark">Contact</a>

            </div>
        </div>
        {{-- <button class="dropbtn btn p-2 border-light" style="background-color:#d5c455">
            <a href="#landing"> <i class="fas fa-home text-dark"></i></button></a> --}}
        <button class="dropbtn btn p-2 border-light" style="background-color:#d5c455" title="Get the copy of my resume">
            <a href="{{ asset('images/Matic,Jeraldine.pdf') }}" download="" class="text-dark blinking">
                <span class="font-weight-bold">HIRE ME &nbsp; <i class="fas fa-download"></i> </span></button></a>

    </div>

</nav>