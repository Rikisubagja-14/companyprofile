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

    {{-- start section why Company --}}

    <section class="about" id="about">
        <h1 class="heading"><span>Why Company</span></h1>
        <div class="row">
            <div class="image">
                <img src="{{ asset('assets/img/img-about.jpg') }}" alt="" />
            </div>
            <div class="content">
                <h3>what makes our Company?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus qui ea ullam, enim tempora
                    ipsum fuga alias quae ratione a officiis id temporibus autem? Quod nemo facilis cupiditate. Ex, vel?
                </p>
                <a href="#" class="btn">learn more</a>
            </div>
        </div>
    </section>

    {{-- end section why Company --}}


    {{-- start section testimonial --}}

    <section class="testimonial" id="testimonial">
        <h1 class="heading"><span>Testimonial Client</span></h1>
        <div class="testi">

            <div class="row">
                <div class="image">
                    <img src="{{ asset('assets/img/pic-1.png') }}" />
                </div>
                <div class="content">
                    <h1>Fazri</h1>
                    <P>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, nemo adipisci! Cumque
                        autem
                        atque ducimus cupiditate, consectetur sit placeat assumenda? Est nam corporis officiis vero
                        sit
                        quibusdam eius veniam ullam?</P>
                </div>
                <div class="icons">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>


            <div class="row">
                <div class="image">
                    <img src="{{ asset('assets/img/pic-2.png') }}" />
                </div>
                <div class="content">
                    <h1>Rangga</h1>
                    <P>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, nemo adipisci! Cumque
                        autem
                        atque ducimus cupiditate, consectetur sit placeat assumenda? Est nam corporis officiis vero
                        sit
                        quibusdam eius veniam ullam?</P>

                </div>
                <div class="icons">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>


            <div class="row">
                <div class="image">
                    <img src="{{ asset('assets/img/pic-3.png') }}" />
                </div>
                <div class="content">
                    <h1>Riki</h1>
                    <P>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, nemo adipisci! Cumque
                        autem
                        atque ducimus cupiditate, consectetur sit placeat assumenda? Est nam corporis officiis vero
                        sit
                        quibusdam eius veniam ullam?</P>

                </div>
                <div class="icons">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

        </div>
    </section>

    {{-- end section testimonial --}}


    {{-- start section footer --}}
    <section class="footer">
        <div class="icons-container">
            
            <div class="icons">
                <i class="fas fa-clock"></i>
                <h3>opening hours</h3>
                <p>08:00am to 17:00pm</p>
            </div>

            <div class="icons">
                <i class="fas fa-phone"></i>
                <h3>phone number</h3>
                <p>+622-9273-9839</p>
                
            </div>

            <div class="icons">
                <i class="fas fa-envelope"></i>
                <h3>email</h3>
                <p>Pt.xxxxxxx@gmail.com</p>
            </div>

            <div class="icons">
                <i class="fas fa-map"></i>
                <h3>address</h3>
                <p> Jl.Baranangsiang 40, Bandung, indonesia - 40141</p>
            </div>

        </div>

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         
      
         <div class="credit"> Power by <span>Riki Subagja</span> | all rights reserved! </div>
    </section>
    {{-- end section Footer --}}

    <script src="{{ asset('assets/js/functionscript.js') }}"></script>
</body>

</html>
