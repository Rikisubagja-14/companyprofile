<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/landingcompany.css') }}">
</head>

<body>


    {{-- Headers start --}}
    <header class="header-container">
        <a href="#" class="logo">
            <img src="{{ asset('assets/img/logo.jpg') }}" alt="">

        </a>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#">About</a>
            <a href="#">Product</a>
            <a href="#">Career</a>
            <a href="#">Services</a>
            <a href="#" class="btn"> <span>Contact</span></a>
        </nav>
        <div class="fas fa-bars" id="menu-btn"></div>
    </header>

    {{-- Headers end --}}


    {{-- Section Home start --}}
    <section class="home" id=home>
        <div class="content">
            <h3>Business for distributor</h3>
            <p>To be one of the textile companies in Indonesia that stimulates and grows the industrial sector in
                Indonesia</p>
            <a href="#" class="btn">Next to product</a>
        </div>
    </section>

    {{-- Section Home end --}}

    <section class="about" id="about">
        <h1 class="heading"><span>Why</span> Company</h1> 
        <div class="row">
            <div class="image">
                <img src="{{ asset('assets/img/img-about.jpg') }}" alt=""/>
            </div>
            <div class="content">
                <h3>what makes our Company?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus qui ea ullam, enim tempora ipsum fuga alias quae ratione a officiis id temporibus autem? Quod nemo facilis cupiditate. Ex, vel?</p>
                <a href="#" class="btn">learn more details about</a>
            </div>
        </div>
    </section>


    <script src="{{asset('assets/js/functionscript.js')}}" ></script>
</body>

</html>
