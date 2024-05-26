<div class="container">
    <div class="col-md-12">
        <hr style="border-top: 1px solid #ddd;">
    </div>

    <div class="row">
        <section>
            <div class="container">
                <div class="col-md-6">
                    <img src="<?php echo $row['img_link']; ?>" class="img-responsive">
                </div>
                <div class="subcontent col-md-6">
                    <h1 style="color: #003300; font-size: 38px; margin-top: 0;"><u><strong><?php echo $row['event_title']; ?></strong></u></h1>
                    <p style="color: #003300; font-size: 20px;">
                        Date: <?php echo $row['Date']; ?><br>
                        Time: <?php echo $row['time']; ?><br>
                        Location: <?php echo $row['location']; ?><br>
                        Student Co-ordinator: <?php echo $row['st_name']; ?><br>
                        Staff Co-ordinator: <?php echo $row['name']; ?><br>
                        Event Price: <?php echo $row['event_price']; ?><br>
                    </p>
                    <br><br>
                    <a class="btn btn-default" href="register.php">
                        <span class="glyphicon glyphicon-circle-arrow-right"></span> Register
                    </a>
                </div><!--subcontent div-->
            </div><!--container div-->
        </section>
    </div><!--row div-->
</div><!--container div-->
