<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>KidCare</title>

    <?php include "commoncode.php" ?>
</head>

<body>
    
    <section class="header_info">
        <?php include "headernav.html" ?>
    </section>

    <section class="carousel_info">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" data-bs-interval="2000">
                <div class="carousel-item active">
                    <img src="resources/Carousel 1.jpg" class="d-block w-100" alt="Kids doing fun activity at KidCare">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="carousel-text">Enjoy</h3>
                        <p class="carousel-text text-center">At KidCare, your child won't have any shortages of fun activites.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="resources/Carousel 2.jpg" class="d-block w-100" alt="Kids brainstorming with legos at KidCare">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="carousel-text">Think</h3>
                        <p class="carousel-text text-center">At KidCare, our curriculum is designed to make your child think.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="resources/Carousel 3.jpg" class="d-block w-100" alt="Kids asking questions at KidaCare">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="carousel-text">Question</h3>
                        <p class="carousel-text text-center">At KidCare, we encourage your child to ask more questions. </p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="welcome_info">
        <div class="container welcome-container">
            <h1 class="display-2 fw-bold text-center">Welcome to KidCare</h1>
            <p>
                We are excited to welcome your little one at KidCare, on a journey of imagination and learning through play in our child-centred flexible approach.

                We have created a safe and comforting environment where children feel encouraged to develop positive relationships, grow in confidence, and feel happy to learn through their new experiences.

                Our team are passionate about your little individuals’ holistic development and are dedicated to supporting each child's unique needs in every step of their learning journey with us. You can find out more about our nurseries, book a
                show-around, read our blog and more below.
            </p>
        </div>
    </section>

    <section class="activity_info">
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm">
                    <h2>Physical Activity</h2>
                    <p>
                        Active play and games are encouraged, developing core skills and supporting physical development. For 3-5 year-olds swimming lessons are offered, while infants benefit from baby massage and yoga.
                    </p>
                    <!-- <img class="activity-img" src="resources/kidcare-physical-activity.jpg" /> -->
                </div>
                <div class="col-sm">
                    <h2>Mindfulness & learning</h2>
                    <p>A programme of stimulating activities and structured quiet time enables your child to engage with new ideas and principles. Our nurseries follow the Early Years Foundation Stage curriculum.</p>
                    <!-- <img class="activity-img" src="resources/kidcare-mindfulness.jpg" ; /> -->
                </div>
                <div class="col-sm">
                    <h2>High-quality nutrition</h2>
                    <p>Daily changing menus, healthy snacks and expert-led sessions to discover new food will stimulate your child's senses. All dietary needs are considered and fussy eating support is available.</p>
                    <!-- <img class="activity-img" src="resources/kidcare-nutrition.jpg" ; /> -->
                </div>
            </div>
        </div>
    </section>
    <section class="activity_info_photos">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <img class="activity-img" src="resources/kidcare-physical-activity.jpg" />
                </div>
                <div class="col-sm">
                    <img class="activity-img" src="resources/kidcare-mindfulness.jpg" ; />
                </div>
                <div class="col-sm">
                    <img class="activity-img" src="resources/kidcare-nutrition.jpg" ; />
                </div>
            </div>
        </div>
    </section>

    <section class="address_info_index">
        <div class="container">
            <h3 class="text-center pt-2 pb-2">Contact Us</h3>
            <div class="row">
                <div class="col-sm">
                    <p>Salts Street, Shaw and Crompton</p>
                    <p>Oldham</p>
                    <p>OL2 7SY</p>
                    <p>Get Directions</p>
                </div>
                <div class="col-sm">
                    <p>0800 307 0155</p>
                    <p>Send us an email</p>
                </div>
                <div class="col-sm">
                    <p>Mon to Fri - 9am-3:30pm</p>
                    <p>BC - 7.30-8.45am, ASC - 3.15-6.00pm</p>
                </div>
            </div>
        </div>
    </section>

    <section class="footer_info">
        <?php include "footer.html" ?>
    </section>

</body>

</html>
