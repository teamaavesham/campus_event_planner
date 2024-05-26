<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>cems</title>
    <?php require 'utils/styles.php'; ?>
    <style>
        /* Body styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* Container styles */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header styles */
        header {
            background-color: #343a40;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        /* Content styles */
        .content {
            padding: 20px 0;
        }

        h1 {
            color: #000080;
            font-size: 42px;
            font-weight: bold;
            text-align: center;
            margin-top: 0;
        }

        /* Horizontal line styles */
        hr {
            border: none;
            border-top: 1px solid #ddd;
            margin: 20px 0;
        }

        /* Subcontent styles */
        .subcontent {
            padding-left: 20px;
        }

        .subcontent h1 {
            color: #003300;
            font-size: 38px;
            margin-top: 0;
        }

        .subcontent p {
            font-size: 18px;
        }

        /* Button styles */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        /* Image styles */
        .img-responsive {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <?php require 'utils/header.php'; ?>
    <div class="content">
        <div class="container">
            <div class="col-md-12">
                <h1>Register for your Favourite events:</h1>
            </div>
            <div class="container">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6">
                            <img src="images/technical.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6">
                            <h1><u>Technical Events</u></h1>
                            <p>EMBRACE YOUR TECHNICAL SKILLS BY PARTICIPATING IN DIFFERENT TECHNICAL EVENTS!</p>
                            <?php $id=1; ?>
                            <a class="btn btn-default" href="viewEvent.php?id=<?php echo $id; ?>">
                                <span class="glyphicon glyphicon-circle-arrow-right"></span>View Technical Events
                            </a>
                        </div>
                    </div>
                </section>
            </div>
            <div class="container">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6">
                            <img src="images/gaming.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6">
                            <h1><u>Gaming Events</u></h1>
                            <p>EMBRACE YOUR GAMING SKILLS BY PARTICIPATING IN DIFFERENT GAMING EVENTS!</p>
                            <?php $id=2; ?>
                            <a class="btn btn-default" href="viewEvent.php?id=<?php echo $id; ?>">
                                <span class="glyphicon glyphicon-circle-arrow-right"></span>View Gaming Events
                            </a>
                        </div>
                    </div>
                </section>
            </div>
            <div class="container">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6">
                            <img src="images/onstage.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6">
                            <h1><u>On-Stage Events</u></h1>
                            <p>EMBRACE YOUR CONFIDENCE BY PARTICIPATING IN DIFFERENT ON-STAGE EVENTS!</p>
                            <?php $id=3; ?>
                            <a class="btn btn-default" href="viewEvent.php?id=<?php echo $id; ?>">
                                <span class="glyphicon glyphicon-circle-arrow-right"></span>View On-Stage Events
                            </a>
                        </div>
                    </div>
                </section>
            </div>
            <div class="container">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6">
                            <img src="images/offstage.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6">
                            <h1><u>Off-Stage Events</u></h1>
                            <p>EMBRACE YOUR TALENT BY PARTICIPATING IN DIFFERENT OFF-STAGE EVENTS!</p>
                            <?php $id=4; ?>
                            <a class="btn btn-default" href="viewEvent.php?id=<?php echo $id; ?>">
                                <span class="glyphicon glyphicon-circle-arrow-right"></span>View Off-Stage Events
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <?php require 'utils/footer.php'; ?>
</body>
</html>
