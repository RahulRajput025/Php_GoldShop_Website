<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Gold Website</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">


    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />

    <style>
        #slider {
            background-image: url(images/bg1.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
            padding: 100px 40px 90px 40px;
            color: white;
        }

        #row1 {
            background-color: #bbb9bf;
        }

        #ringimage {
            mix-blend-mode: multiply;
        }

        #button2 {
            background-color: white;
            color: #9c8d24;
            border-radius: 19px;
            border: 2px solid #9c8d24;
            padding: 8px;
            width: 140px
        }

        #row2 {
            background-color: #e7e3cd;
        }

        #row3 {
            background-color: #e7e3cd;
            height: 200px;
        }

        #row4 {
            margin-top: 290px;
            padding: 60px;
            color: white;
        }

        #buttonhover:hover {
            background-color: goldenrod;
        }
    </style>

</head>

<body>

    <?php include 'header.php' ?>

    <!--slider starts here-->
    <div class="row justify-content-center background">
        <div class="col-12" id="carouselsize">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>

                <div class="carousel-inner" style="height=400px;">
                    <div class="carousel-item active text-center" id="slider">
                        <h1 class="my-4">State-of-The-Art Precious Metals Testing</h1>
                        <h5 class="my-4">We but gold, silver, diamonds, watches and other precious stones and metals
                        </h5>
                      <a href="about.php">  <button class="btn btn-warning">Learn More</button></a>
                    </div>
                    <div class="carousel-item text-center" id="slider">
                        <h1 class="my-4">Get Cash Fast: No Appointment Necessary</h1>
                        <h5 class="my-4">We but gold, silver, diamonds, watches and other precious stones and metals
                        </h5>
                       <a href="about.php"> <button class="btn btn-warning">Learn More</button></a>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <i class="fa fa-hand-o-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!--slider ends here-->

    <!--FOUR LINKS-->
    <?php include 'links.php' ?>




    <div class="container-fluid">
        <div class="row" id="row1">
            <div class="col-md-6 text-center" style="margin-top:80px">
                <img src="images/img2.png" alt="">
                <h4 style="color: #9c8d24; font-style: italic;">Your Premier Gold Buyer For Over 10 Years</h4>
                <h5 style="font-style: italic;">welcome to smart gold calgary</h5>
               <a href="whatwepay.php"><button class="btn" id="button2">Learn More</button></a> 
            </div>

            <div class="col-md-6">
                <img src="images/imagerign1.jpg" id="ringimage" class="img-fluid" alt="">
            </div>
        </div>

        <div class="row my-5 text-center justify-content-center mx-5">
            <div class="col-md-3">
                <img src="images/img3.png" alt="">
                <h5>HONEST BUSINESS MODEL</h5>
                <p>Smart gold will pay up to 100% of the daily spot price of gold! We always note the gold price today
                    in Calgary. Our company goal is to foster relationships with clients and offer transparency in our
                    service. We want to offer you the best possible deals! Contact us to buy and sell gold near you!</p>
            </div>
            <div class="col-md-3">
                <img src="images/img4.png" alt="">
                <h5>INDUSTRY KNOW-HOW</h5>
                <p>Our knowledgeable diamond buyers have the experience to make sure you get more money for your
                    diamond! The staff within Smart Gold Calgary receive extensive training so they can answer all of
                    your questions and ease any stress you have.</p>
            </div>


            <div class="col-md-3">
                <img src="images/img5.png" alt="">
                <h5>GET QUICK CASH</h5>
                <p>Get cash in 15 minutes or less for your unwanted Calgary gold, silver, watches and diamonds. That’s
                    our guarantee. Our gold buyers in Calgary want to offer you quick, reliable cash! Did you know that
                    recycling your unwanted items to a reputable company is good for the environment? Smart Gold works
                    to counter the negative effects that mining has on the planet!</p>
            </div>

            <div class="col-md-3">
                <img src="images/img6.png" alt="">
                <h5>WE PAY YOUR VALUE</h5>
                <p>With 99.9% accuracy, Smart Gold uses the latest technology to test the purity of your unwanted
                    jewelry. We always know the gold price today in Calgary. You can trust our accurate testing
                    technology when you’re looking to buy and sell gold near you! Our gifted and hardworking team will
                    explain the entire gold-for-cash exchange process so you can feel better about parting with your
                    valuable items.</p>
            </div>

        </div>

        <div class="row text-center justify-content-center" id="row2">
            <div class="col-md-9 text-center">
                <img src="images/img7.webp" class="mt-5" alt="">
                <h1>WELCOME TO SMART GOLD CALGARY</h1>
                <p>Smart Gold is your Calgary gold buyer, providing you with top dollar for your gold. Our gold buyers
                    in Calgary offer cash today without all the hassle. You can get an appraisal in 15 minutes or less
                    and get paid in cash. As one of the most established and trusted gold buyers in Calgary, we test
                    your gold in front of you using state-of-the-art gold purity testing machinery. Smart Gold ensures
                    that we have the trust of our clients because we are nothing without your precious metals! We are
                    100% transparent and want to give you the exact value of your Calgary gold. We also specialize in
                    buying silver, platinum, jewelry, diamonds, coins and luxury watches. We do not buy “plated” items
                    but will purchase multiple other items. Our company doesn’t mind if your items are broken or
                    pristine; we will still offer you cash! If you are wondering about other items that we accept or
                    cannot purchase, we encourage you to contact our customer service team. They are always ready to
                    help!<br><br>

                    Your old gold and jewelry are our treasures, and we ensure you get your money’s worth. We always
                    make sure we know the gold price today in Calgary. That way, when you’re looking to buy and sell
                    gold near you, our team can answer any of your questions.</p>
            </div>
        </div>


        <div class="row text-center justify-content-center">
            <div class="col-md-12" id="row3">
                <img src="images/jwellery.webp" class="img-fluid" alt="">
            </div>
        </div>


        <!-- TESTIMONIAL CAROUSEL STARTS -->
        <div class="row justify-content-center text-center bg-secondary" id="row4">
            <div class="col-md-12">
                <h1>TESTIMONIALS</h1>
                <!-- Carousel wrapper -->
                <div id="carouselExampleControls" class="carousel slide text-center carousel-dark"
                    data-mdb-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                        <li><i class="far fa-star fa-sm"></i></li>
                                        <li><i class="far fa-star fa-sm"></i></li>
                                        <li><i class="far fa-star fa-sm"></i></li>
                                        <li><i class="far fa-star fa-sm"></i></li>
                                        <li><i class="far fa-star fa-sm"></i></li>
                                    </ul>
                                    <p class=" text-light">
                                        <i class="fas fa-quote-left pe-2 text-light "></i>
                                        A friend recommended Smart Gold to me wow was I happy I decided to stop in. My
                                        old engagement ring was sitting a box for over 2 years collecting dust. The
                                        diamond buyer provided me with information on my diamond ring and offered to
                                        purchase the ring for a price. After a few weeks and a bit of research I was
                                        confident that I was receiving a fair price.
                                    </p>
                                    <img src="images/img3.png" height="60px" alt="">
                                    <h5 class="mb-3 text-light">Thomas Bouchard</h5>
                                </div>
                            </div>
                        </div>


                        <div class="carousel-item">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                        <li><i class="far fa-star fa-sm"></i></li>
                                        <li><i class="far fa-star fa-sm"></i></li>
                                        <li><i class="far fa-star fa-sm"></i></li>
                                        <li><i class="far fa-star fa-sm"></i></li>
                                        <li><i class="far fa-star fa-sm"></i></li>
                                    </ul>
                                    <p class=" text-light">
                                        <i class="fas fa-quote-left pe-2 text-light"></i>
                                        I stumbled across Smart Gold Calgary on my way to work and decided to stop in.
                                        They appraised an old broken watch for me a few days later. I was more than
                                        happy with what they were willing to give me for my broken watch.
                                    </p>
                                    <img src="images/img3.png" height="60px" alt="">
                                    <h5 class="mb-3 text-light">Steven Ceacour</h5>
                                </div>
                            </div>
                        </div>


                        <div class="carousel-item ">
                            <div class="row d-flex justify-content-center">
                                <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                    <li><i class="far fa-star fa-sm"></i></li>
                                    <li><i class="far fa-star fa-sm"></i></li>
                                    <li><i class="far fa-star fa-sm"></i></li>
                                    <li><i class="far fa-star fa-sm"></i></li>
                                    <li><i class="far fa-star fa-sm"></i></li>
                                </ul>
                                <div class="col-lg-8">
                                    <p class=" text-light">
                                        <i class="fas fa-quote-left pe-2 text-light"></i>
                                        I had some of my wife’s old jewelry that she didn’t wear anymore sold at smart
                                        gold. It was more than enough to buy her a new necklace and earrings. The staff
                                        at smart gold were very easy to deal with. The gold specialist used a gold
                                        testing device to appraise the old jewelry. In less than 30 minutes I was fully
                                        satisfied with the money they were giving me.
                                    </p>
                                    <img src="images/img3.png" height="60px" alt="">
                                    <h5 class="mb-3 ">Michelle Oskizeeka</h5>
                                </div>
                            </div>
                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls"
                        data-mdb-slide="prev">
                        <i class="fa fa-hand-o-left" aria-hidden="true"></i>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls"
                        data-mdb-slide="next">
                        <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- Carousel wrapper -->
            </div>
        </div>
        <!-- TESTIMONIAL CAROUSEL ENDS  -->

        <div class="row" style="background-color: #f6f6f2;">
            <div class="col-md-6 pt-2">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.2266202689993!2d77.59024971482252!3d13.021235690823366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae173e481245c9%3A0xf8983376e6b9d0f3!2sSmart%20Gold%20Point!5e0!3m2!1sen!2sin!4v1689088087864!5m2!1sen!2sin"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="img-fluid h-100"></iframe>
            </div>

            <div class="col-md-6 text-center pt-5 pb-3">
                <h2>Get in Touch</h2>
                <p>Let Smart Gold Help You Get What You Deserve</p>
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="First Name">
                    </div>
                    <div class="mb-3">
                        <input type="number" class="form-control" placeholder="Phone">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" placeholder="Message" id="exampleFormControlTextarea1"
                            rows="4"></textarea>
                    </div>

                    <button type="submit" class="btn btn-dark" id="buttonhover">Submit</button>
                </form>
            </div>
        </div>
    </div>


    <?php include 'footer.php' ?>












    <!-- JAVA SCRIPT LINK  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script src="js/jquery.hislide.js"></script>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>

</body>

</html>