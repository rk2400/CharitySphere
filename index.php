<?php
require('connection.php');
require('functions.php');
date_default_timezone_set("Asia/Kolkata");
// $date=date('Y-m-d');
$date = date('Y-m-d');
$last_month_first_day = date("Y-n-j", strtotime("first day of previous month"));

include('header.php');
?>

<main role="main">

    <header id="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="fund-heading text-center">
                        <h1>CharitySphere</h1>
                        <h2>A Non Profit Organisation System Management Platform</h2>
                        <h2>We Belive In Change, Join us To Create An Impact</h3>
                            <!-- <div class="typed_wrap">
                                <h2> <span class="typed"></span></h2>
                            </div> -->
                            <!-- <div class="typed_wrap">
                            <h2> <span class="typed"></span></h2>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- welcome -->
    <br>
    <br>


    <div class="wel" style="color:#FFCC00; text-align: center">
        <h5>WELCOME TO CharitySphere</h5>
        <div style="color: #FFCC00; text-align: center">
            <h3>We are Building a new World<br> Come Join Us..</h3>
        </div>
    </div>


    <!-- boxes -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="power_iconbox type_2 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                        <div class="power_iconbox_icon">
                            <i class="fas fa-dove primary-img"></i>
                        </div>
                        <div class="power_iconbox_content">
                            <h5>MISSION</h5>
                            <p>To empower and serve the underprivileged communities by providing them with
                                education, healthcare, and basic necessities, while encouraging volunteerism and
                                creating awareness on social issues.

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="power_iconbox type_2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                        <div class="power_iconbox_icon">
                            <div class="primary-img">
                                <i class="far fa-heart"></i>
                            </div>
                        </div>
                        <div class="power_iconbox_content">
                            <h5>VISION</h5>
                            <p>To create a just and equitable society where everyone has access to basic needs and
                                opportunities for growth and development, and where volunteerism and social
                                responsibility are integral parts of the community.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="power_iconbox type_2 wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                        <div class="power_iconbox_icon">
                            <div class="primary-img">
                                <i class="fas fa-hands-helping"></i>
                            </div>
                        </div>
                        <div class="power_iconbox_content">
                            <h5>PERMANENT DONOR</h5>
                            <p>Become a permanent donor and make a lasting impact on the lives of those in need.
                                Join us in our mission to create a better world, one act of kindness at a time.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="power_iconbox type_2 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="power_iconbox_icon">
                            <div class="primary-img">
                                <i class="fas fa-child"></i>
                            </div>
                        </div>
                        <div class="power_iconbox_content">
                            <h5>BECOME VOLUNTEER</h5>
                            <p>Join our team of enthusiastic and passionate volunteers. Whether you have a few hours
                                a week or a few hours a month, your time and
                                skills can help us create a better world for everyone.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- boxes_end -->

    <div id="aboutus"></div>

    <div class="container marketing">
        <hr class="featurette-divider">

        <div class="section-head col-sm-12">
            <h4><span>About</span> Us</h4>
            <p>Welcome to CharitySphere, where we strive to make a positive impact in the world through our volunteer work.
                Our dedicated team of volunteers come from all walks of life and are committed to serving those in
                need. Whether it's providing food and shelter to the homeless, conducting medical camps, or raising
                funds for critical medical cases, we believe that even small acts of kindness can make a big
                difference. Join us in our mission to spread love, compassion, and hope to those who need it the
                most.</p>
            <div class="typed_wrap"> <h2>Our Motive-</h2>
                <h2> <span class="typed"></span></h2>
            </div>
        </div>

        <hr class="featurette-divider">
        <div id="themes" class="themescls">
            <div class="feat bg-gray pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="section-head col-sm-12">
                            <h4><span>Our</span> Themes</h4>
                            <p>Join us in making a difference through our diverse themes</p>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="item"> <span class="icon feature_box_col_one"><img class="themeicon" src="images/icons/rupee.png" width="50" height="50"></img></span>
                                <h6>A Rupee A Day</h6>
                                <p>Change the world with just a rupee a day! Your small contribution
                                    can go a long way in providing food, shelter, and education to those who need it
                                    most.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="item"> <span class="icon feature_box_col_two"><img class="themeicon" src="images/icons/research.png" width="50" height="50"></span>
                                <h6>Donate Useful Items</h6>
                                <p>Be a part of our team in conducting research, surveys, and drives to make a
                                    positive impact in the society</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="item"> <span class="icon feature_box_col_three"><img class="themeicon" src="images/icons/blood.png" width="50" height="50"></span>
                                <h6>360-Charity Services</h6>
                                <p>Be a hero, save a life. Join us in our mission to donate blood and help those in
                                    need. Your one pint of blood can save up to three lives.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="item"> <span class="icon feature_box_col_four"><img class="themeicon" src="images/icons/gift.png" width="50" height="50"></span>
                                <h6>Event Celebrations</h6>
                                <p>Celebrate your special occasions with the less fortunate. Make their day as
                                    special as yours.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="item"> <span class="icon feature_box_col_five"><img class="themeicon" src="images/icons/animal.png" width="50" height="50"></span>
                                <h6>Animal Care</h6>
                                <p>Be a hero for the voiceless. Join us in our mission to provide care and love for
                                    our furry friends.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="item"> <span class="icon feature_box_col_six"><i class="fa fa-camera"></i></span>
                                <h6>ChatBot</h6>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                    eget dolor Aenean massa.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- sponsers & partners -->
        <!-- <hr class="featurette-divider">
        <div id="themes" class="themescls">
            <div class="feat bg-gray pt-5 pb-5">
                <div class="container">
                    <div class="row" style="justify-content: center;">
                        <div class="section-head col-sm-12">
                            <h4><span>Our</span> Sponsors & Partners</h4>
                            <p>Empowering Change Through Generosity and Support</p>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <a href="https://weber.cottonseeds.org">
                                <img class="themeicon" src="images/sponsers/weber_technologies.png" width="350" alt="Weber Technologies"></img>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <a href="https://aims.ac.in/">
                                <img class="themeicon" src="https://aims.ac.in/wp-content/uploads/2023/04/logo-1024x319.png" width="260" alt="Weber Technologies"></img>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div> -->

        <hr class="featurette-divider">


        <!-- /AYdonate .... -->

        <!--donation centre-->
        <section>
            <div>
                <!-- <h1>Dashboard</h1> -->
                <div class="themes">DASHBOARD</div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Donation Summary</h4>
                                        <h5 class="card-subtitle">Overview of Latest Month</h5>
                                    </div>

                                    <div class="col-lg-4">
                                        <h1 class="mb-0 mt-4">Rs. <?php echo get_total_price_by_month($con, $date); ?>
                                        </h1>
                                        <h6 class="font-light text-muted">
                                            Current Month Donations
                                        </h6>
                                        <h3 class="mt-4 mb-0">Rs.
                                            <?php echo get_total_price_by_date($con, $date); ?></h3>
                                        <h6 class="font-light text-muted">This Day</h6>

                                        <a class="btn btn-info mt-3 p-15 pl-4 pr-4 mb-3" href="donation.html">
                                            Donate</a>
                                    </div>
                                    <!-- column -->
                                    <div class="col-lg-8">
                                        <div class="campaign ct-charts">
                                            <div class="chartist-tooltip"></div>
                                            <svg class="dashgra" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 741 450">
                                                <defs>
                                                </defs>
                                                <line fill="none" stroke="#4AC900" stroke-width="4" stroke-miterlimit="10" x1="77" y1="11" x2="10" y2="11" />
                                                <line fill="none" stroke="#4AC900" stroke-width="4" stroke-miterlimit="10" x1="171" y1="11" x2="77" y2="11" />
                                                <line fill="none" stroke="#4AC900" stroke-width="4" stroke-miterlimit="10" x1="238" y1="11" x2="171" y2="11" />
                                                <line fill="none" stroke="#4AC900" stroke-width="4" stroke-miterlimit="10" x1="292" y1="11" x2="238" y2="11" />
                                                <line fill="none" stroke="#4AC900" stroke-width="4" stroke-miterlimit="10" x1="367" y1="11" x2="292" y2="11" />
                                                <line fill="none" stroke="#4AC900" stroke-width="4" stroke-miterlimit="10" x1="466" y1="11" x2="367" y2="11" />
                                                <line fill="none" stroke="#4AC900" stroke-width="4" stroke-miterlimit="10" x1="512" y1="11" x2="466" y2="11" />
                                                <line fill="none" stroke="#4AC900" stroke-width="4" stroke-miterlimit="10" x1="588" y1="11" x2="511" y2="11" />
                                                <line fill="none" stroke="#4AC900" stroke-width="4" stroke-miterlimit="10" x1="645" y1="11" x2="588" y2="11" />
                                                <line fill="none" stroke="#4AC900" stroke-width="4" stroke-miterlimit="10" x1="731" y1="11" x2="645" y2="11" />
                                                <g>
                                                    <circle fill="#FF8300" cx="10.5" cy="10.5" r="10.5" />
                                                    <circle fill="#FF8300" cx="77.5" cy="10.5" r="10.5" />
                                                    <circle fill="#FF8300" cx="171.5" cy="10.5" r="10.5" />
                                                    <circle fill="#FF8300" cx="238.5" cy="10.5" r="10.5" />
                                                    <circle fill="#FF8300" cx="292.5" cy="10.5" r="10.5" />
                                                    <circle fill="#FF8300" cx="367.5" cy="10.5" r="10.5" />
                                                    <circle fill="#FF8300" cx="466.5" cy="10.5" r="10.5" />
                                                    <circle fill="#FF8300" cx="510.5" cy="10.5" r="10.5" />
                                                    <circle fill="#FF8300" cx="588.5" cy="10.5" r="10.5" />
                                                    <circle fill="#FF8300" cx="645.5" cy="10.5" r="10.5" />
                                                    <circle fill="#FF8300" cx="730.5" cy="10.5" r="10.5" />
                                                </g>
                                                <path id="graph-measurement" fill="none" stroke="#741E00" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
	M731,127H10 M10,127v-18 M113,127v-9.1 M731,109v18 M216,127v-9.1 M319,127v-9.1 M422,127v-9.1 M525,127v-9.1 M628,127v-9.1" />
                                            </svg>

                                        </div>
                                    </div>
                                    <!-- column -->
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- Info Box -->
                            <!-- ============================================================== -->
                            <div class="card-body border-top">
                                <div class="row mb-0">
                                    <!-- col -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3 dashion">
                                                <span class="text-orange display-5"><i class="fas fa-calendar-alt"></i></span>
                                            </div>
                                            <div class='dahionc'>
                                                <span>Last Month</span>
                                                <h3 class="font-medium mb-0">Rs.
                                                    <?php echo get_total_price_by_month($con, $last_month_first_day); ?>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- col -->
                                    <!-- col -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3 dashion">
                                                <span class="text-cyan display-5"><i class="fas fa-calendar-check"></i></span>
                                            </div>
                                            <div class='dahionc'>
                                                <span>This Year</span>
                                                <h3 class="font-medium mb-0">
                                                    Rs.<?php echo get_total_price_by_year($con, $date); ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- col -->
                                    <!-- col -->
                                    <!-- <div class="col-lg-3 col-md-6">
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3 dashion">
                                                <span class="text-info display-5"><i class="fas fa-award"></i></span>
                                            </div>
                                            <div class='dahionc'>
                                                <span>Permanent Donors</span>
                                                <h3 class="font-medium mb-0">104</h3>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- col -->
                                    <!-- col -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="d-flex align-items-center">
                                            <div class="mr-3 dashion">
                                                <span class="text-primary display-5"><i class="fas fa-rupee-sign"></i></span>
                                            </div>
                                            <div class='dahionc'>
                                                <span>Total</span>
                                                <h3 class="font-medium mb-0">
                                                    Rs.<?php echo get_total_donations($con, $date); ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- col -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--join with us-->


        <!--social acc-->
        <div class="social-index">
            <h1>Let's Connect</h1>

            <div class="social-btns">
                <a class="sofab btn facebook" href="#"><i class="sofa fab fa-facebook-f"></i></a>
                <a class="sofab btn twitter" href="#"><i class="sofa fab fa-twitter"></i></a>
                <a class="sofab btn google" href="#"><i class="sofa fab fa-instagram"></i></a>
                <a class="sofab btn dribbble" href="#"><i class="sofa fab fa-youtube"></i></a>
            </div>


        </div>

    </div><!-- /.container -->

    <?php include('footer.php') ?>


</main>

<script src='js/boostrap-4.5.js'></script>
<script src='js/popper.js'></script>
<script src='js/tweenmax.js'></script>
<script src="main-js/main.js"></script>
<script>
    var container = document.getElementById('container');
    var graphMeasurement = document.getElementById('graph-measurement');

    var allCircles = document.getElementsByTagName('circle');
    var allLines = document.getElementsByTagName('line');

    var destArray = [0, 52, 28, 170, 105, 93, 44, 122, 179, 170, 220];


    TweenMax.set(allCircles, {
        attr: {
            fill: '#954CE9',
            r: 5
        },
        transformOrigin: '50% 50%',
        scale: 0
    })
    TweenMax.set([allLines], {
        attr: {
            stroke: '#18B5DD'
        },
        drawSVG: '100% 100%',
        strokeWidth: 2
    })
    TweenMax.set([graphMeasurement], {
        attr: {
            stroke: '#18B5DD'
        },
        drawSVG: '100% 100%',
        strokeWidth: 1
    })

    TweenMax.set([allCircles, allLines], {
        y: '+=300'
    })

    TweenMax.set(graphMeasurement, {
        y: '+=280',
        alpha: 0.3
    })
    TweenMax.to(graphMeasurement, 3, {
        drawSVG: '0% 100%',
        delay: 1,
        ease: Power2.easeInOut
    })
    TweenMax.set('svg', {
        alpha: 1
    })
    for (var i = 0; i < allCircles.length; i++) {

        TweenMax.to(allCircles[i], 2, {
            attr: {
                cy: '-=' + destArray[i]
            },
            onUpdate: moveLines,
            onUpdateParams: [i],
            delay: i / 5,
            ease: Power4.easeInOut
        })
        if (allLines[i]) {

            TweenMax.to(allLines[i], 1, {
                drawSVG: '400',
                delay: i / 5,
                ease: Power4.easeInOut
            })
        }

        TweenMax.to(allCircles[i], 1, {
            scale: 1,
            delay: i / 5,
            ease: Power4.easeInOut
        })

    }

    function moveLines(i) {

        if (allLines[i]) {

            TweenMax.set(allLines[i], {
                attr: {
                    x2: allCircles[i].getAttribute('cx'),
                    y2: allCircles[i].getAttribute('cy')
                }
            })
            TweenMax.set(allLines[i], {
                attr: {
                    x1: allCircles[i + 1].getAttribute('cx'),
                    y1: allCircles[i + 1].getAttribute('cy')
                }
            })


        }
    }
</script>

</body>

</html>