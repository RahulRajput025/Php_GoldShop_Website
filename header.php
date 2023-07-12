<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Header</title>

    <link rel="stylesheet" href="styles.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


    <style>
        /* heading 1 start */
        .head1 {
            color: white;
            font-size: 13px;
        }

        #icons {
            color: gold;
        }

        /* heading 1 end */


        /* NAVBAR START */
        .navbar {
            background-color: black;
        }

        .navbar ul li a:hover {
            color: black;
            text-decoration-color: black;
            background-color: goldenrod;
            border-radius: 2px;
        }

        /* DROPDOWN STYLING STARTS HERE */
        .dropbtn {
            color: white;
            border: none;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            color: black;
            display: none;
            position: absolute;
            background-color: black;
            min-width: 190px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 2px;
            border-top: 3px solid goldenrod;

        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            text-decoration: none;
            color: black;
            background-color: goldenrod;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            color: red;
        }

        /* DROPDOWN STYLING ENDS HERE */


        /* FONT SIZE OF NAV ITEMS */
        #navbarSupportedContent ul li a {
            font-size: 14px;
            color: white;
        }
    </style>

</head>

<body>

    <div class="container-fluid head1">
        <div class="row bg-dark py-2">
            <div class="col-md-4 my-2 text-center">
                <i class="fa fa-facebook mx-2" aria-hidden="true"></i>
                <i class="fa fa-google mx-2" aria-hidden="true"></i>
            </div>

            <div class="col-md-4 text-center" id="icons">
                <i class="fa fa-map-marker" id="icons" aria-hidden="true"></i>
                NO # 19/ 1 , FIRST FLOOR, 80 FEET RD, OPP. RT NAGAR POST OFFICE,
                ABOVE HIMALAYA HEALTH CENTER, RT NAGAR, BENGALURU, 560032
            </div>

            <div class="col-md-4 text-center my-2 " id="icons">
                <i class="fa fa-phone" id="icons" aria-hidden="true"></i>
                8818815511
            </div>
        </div>
    </div>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-xl text-center m-0">

        <a href="index.php"><img id="head_logo" class="mx-5 " style="cursor:pointer;" src="images/logo.jpg" alt="Magsol"
                width="75px" height="80px" data-width="96" data-height="26"></a>

        <button class="navbar-toggler btn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-caret-square-o-down" style="font-size:50px; background-color: grey; border-radius: 7px; " aria-hidden="true"></i>
            <span class="navbar-toggler-icon mr-0"></span>
        </button>

        <div class="collapse navbar-collapse navigation-bar mt-3" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto " id="navbarstyling">
                <li class="nav-item mx-3">
                    <a class="nav-link" href="index.php">HOME</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="about.php">ABOUT</a>
                </li>

                <li class="nav-item mx-3">
                    <div class="dropdown">
                        <a class="nav-link dropbtn" href="#"> WHAT WE BUY <i class="fa fa-chevron-down"
                                aria-hidden="true"></i>
                            <div class="dropdown-content">
                                <a href="goldjewellery.php">GOLD AND JEWELLERY</a>
                                <a href="diamonds.php">DIAMOND</a>
                                <a href="watches.php">WATCHES</a>
                                <a href="silvermetal.php">SILVER AND PRECIOUS METALS</a>
                        </a>
                    </div>
                </li>

                <li class="nav-item mx-3">
                    <a class="nav-link" href="whatwepay.php">WHAT WE PAY</a>
                </li>

                <li class="nav-item mx-3">
                    <a class="nav-link" href="hostaparty.php">HOST A PARTY</a>
                </li>

                <li class="nav-item mx-3">
                    <a class="nav-link" href="contact.php">CONTACT US</a>
                </li>

            </ul>
        </div>
    </nav>








    <!-- JAVA SCRIPT LINK  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>