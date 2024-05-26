<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>cems</title>
        <style>
            .btn btn-default {
                background-color: green; /* Change button color to green */
                color: white; /* Change button text color to white */
                margin: 0 auto; /* Center the button horizontally */
                display: block; /* Ensure the button takes up the full width */
            }
        </style>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->    
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->

        <div class ="content"><!--body content holder-->
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
                    <form action="RegisteredEvents.php" class ="form-group" method="POST">

                        
                        <div class="form-group">
                            <label for="usn"> Student USN: </label>
                            <input type="text"
                                   id="usn"
                                   name="usn"
                                   class="form-control">
                        </div>
                        <button type="submit" class="btn btn-default">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
