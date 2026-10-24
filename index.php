
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AL-AMIN ACADEMY | school Management System</title>

    <link rel="stylesheet" href="css/style.css">

</head>


<body>


<!-- =========================================
     NAVIGATION
========================================= -->

<header class="public-navbar">

    <div class="public-logo">
        <span>AL-AMIN</span>ACADEMY
    </div>


    <nav>

        <a href="#home">Home</a>

        <a href="#about">About</a>

        <a href="#services">Services</a>

        <a href="#contact">Contact</a>

        <a href="intro.php" class="dashboard-btn">
            Dashboard
        </a>

    </nav>

</header>



<!-- =========================================
     HERO SECTION
========================================= -->

<section id="home" class="hero">

    <div class="hero-content">

        <div class="hero-text">

            <span class="welcome-text">
                WELCOME TO AL-AMIN ACADEMY
            </span>

            <h1>
                Education Made easy
                <span>Simple & fun</span>
            </h1>

            <p>
                Your trusted banking partner providing reliable,
                secure and convenient financial services for
                individuals and businesses.
            </p>


            <div class="hero-buttons">

                <a href="#services" class="primary-btn">
                    Explore Our Services
                </a>

                <a href="#contact" class="secondary-btn">
                    Contact Us
                </a>

            </div>

        </div>


        <!-- =================================
             IMAGE SLIDER
        ================================== -->

        <div class="bank-slider">

            <div class="slide active">

                <img
                    src="mag.jpg"
                    alt="Modern Bank Building"
                >

            </div>


            <div class="slide">

                <img
                    src="ham.jpg"
                    alt="Modern Banking Building"
                >

            </div>


            <div class="slide">

                <img
                    src="mag.jpg"
                    alt="Bank Building"
                >

            </div>

        </div>

    </div>

</section>



<!-- =========================================
     ABOUT SECTION
========================================= -->

<section id="about" class="about-section">

    <div class="section-container">

        <div class="section-title">

            <span>ABOUT US</span>

            <h2>a school You Can Trust</h2>

            <p>
                At al-amin academy, we are committed to providing
                good education and great learning and understanding.
            </p>

        </div>


        <div class="about-content">

            <div class="about-card">

                <h3>Our Mission</h3>

                <p>
                    To provide secure, convenient and reliable
                    education while building long-lasting
                    relationships with our students.
                </p>

            </div>


            <div class="about-card">

                <h3>Our Vision</h3>

                <p>
                    To become a great student.
             
                  
                </p>

            </div>


            <div class="about-card">

                <h3>Our Values</h3>

                <p>
                    education,learning ,fun
                    
                </p>

            </div>

        </div>

    </div>

</section>



<!-- =========================================
     SERVICES SECTION
========================================= -->

<section id="services" class="services-section">

    <div class="section-container">

        <div class="section-title">

            <span>OUR SERVICES</span>

            <h2>What We Offer</h2>

            <p>
                Simple and easier way to learn.
            </p>

        </div>


        <div class="services-grid">


            <div class="service-card">

                <div class="service-icon">
                    💳
                </div>

                <h3>student Accounts</h3>

                <p>
                    Monitor your kids in school
                </p>

            </div>


            <div class="service-card">

                <div class="service-icon">
                    💰
                </div>

                <h3>school facility</h3>

                <p>
                    sporting gear,fields and labs.
                </p>

            </div>


            <div class="service-card">

                <div class="service-icon">
                    💸
                </div>

                <h3>easy paying of school fees</h3>

                <p>
                    Enjoy convenient easy paying of school fees.
                </p>

            </div>


            <div class="service-card">

                <div class="service-icon">
                    🔐
                </div>

                <h3>Secure school ground</h3>

                <p>
                    We ensure that every student is safe.
                </p>

            </div>


        </div>

    </div>

</section>



<!-- =========================================
     CONTACT SECTION
========================================= -->

<section id="contact" class="contact-section">

    <div class="section-container">

        <div class="section-title">

            <span>CONTACT US</span>

            <h2>We Are Here To Help</h2>

            <p>
                Have a question? Our team is ready to assist you.
            </p>

        </div>


        <div class="contact-grid">


            <div class="contact-card">

                <div class="contact-icon">
                    📍
                </div>

                <h3>Our Address</h3>

                <p>
                    gwarimpa, abuja fct across 13 street
                </p>

            </div>


            <div class="contact-card">

                <div class="contact-icon">
                    📞
                </div>

                <h3>Phone</h3>

                <p>
                    +234 9060803881
                </p>

            </div>


            <div class="contact-card">

                <div class="contact-icon">
                    ✉️
                </div>

                <h3>Email</h3>

                <p>
                    info@al-amin.com
                </p>

            </div>


        </div>

    </div>

</section>



<!-- =========================================
     FOOTER
========================================= -->





<!-- =========================================
     IMAGE SLIDER JAVASCRIPT
========================================= -->

<script>

    let currentSlide = 0;

    const slides = document.querySelectorAll(".slide");


    function showSlide(index) {

        slides.forEach(function(slide) {

            slide.classList.remove("active");

        });


        slides[index].classList.add("active");

    }


    function nextSlide() {

        currentSlide++;

        if (currentSlide >= slides.length) {

            currentSlide = 0;

        }

        showSlide(currentSlide);

    }


    setInterval(nextSlide, 5000);

</script>


</body>

</html>

