<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>cems</title>
    <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            margin-top: 50px;
        }

        .form-container {
            background-color: rgba(128, 128, 128, 0.5); /* Grey color with 50% opacity */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .form-container label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        .form-container input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-container button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
        }

        .form-container button:hover {
            background-color: #45a049;
        }

        .form-container a {
            display: inline-block;
            margin-top: 15px;
            color: #00004d;
            text-decoration: underline;
        }

        .form-container a:hover {
            text-decoration: none;
        }

        .error {
            color: red;
            margin-top: 5px;
        }
    </style>
    <script>
        function validateForm() {
            const email = document.forms["registrationForm"]["email"].value;
            const phone = document.forms["registrationForm"]["phone"].value;
            const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            const phonePattern = /^\d{10}$/;
            let valid = true;

            if (!emailPattern.test(email)) {
                document.getElementById('emailError').textContent = "Please enter a valid email address.";
                valid = false;
            } else {
                document.getElementById('emailError').textContent = "";
            }

            if (!phonePattern.test(phone)) {
                document.getElementById('phoneError').textContent = "Please enter a valid 10-digit phone number.";
                valid = false;
            } else {
                document.getElementById('phoneError').textContent = "";
            }

            return valid;
        }
    </script>
</head>
<body>
    <?php require 'utils/header.php'; ?>
    <div class="content"><!--body content holder-->
        <div class="container">
            <div class="col-md-6 col-md-offset-3 form-container">
                <form name="registrationForm" method="POST" onsubmit="return validateForm()">
                    <label>Student USN:</label>
                    <input type="text" name="usn" class="form-control" required>

                    <label>Student Name:</label>
                    <input type="text" name="name" class="form-control" required>

                    <label>Branch:</label>
                    <input type="text" name="branch" class="form-control" required>

                    <label>Semester:</label>
                    <input type="text" name="sem" class="form-control" required>

                    <label>Email:</label>
                    <input type="email" name="email" class="form-control" required>
                    <span id="emailError" class="error"></span>

                    <label>Phone:</label>
                    <input type="text" name="phone" pattern="\d{10}" class="form-control" required>
                    <span id="phoneError" class="error"></span>

                    <label>College:</label>
                    <input type="text" name="college" class="form-control" required>

                    <button type="submit" name="update">Submit</button>
                    <br>
                    <a href="usn.php"><u>Already registered?</u></a>
                </form>
            </div>
        </div>
    </div>

    <?php require 'utils/footer.php'; ?>
</body>
</html>

<?php
if (isset($_POST["update"])) {
    $usn = $_POST["usn"];
    $name = $_POST["name"];
    $branch = $_POST["branch"];
    $sem = $_POST["sem"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $college = $_POST["college"];

    if (!empty($usn) && !empty($name) && !empty($branch) && !empty($sem) && !empty($email) && !empty($phone) && !empty($college)) {
        include 'classes/db1.php';     
        $INSERT = "INSERT INTO participent (usn, name, branch, sem, email, phone, college) VALUES ('$usn', '$name', '$branch', $sem, '$email', '$phone', '$college')";
            

        if ($conn->query($INSERT) === TRUE) {
            echo "<script>
                alert('Registered Successfully!');
                window.location.href='usn.php';
                </script>";
        } else {
            echo "<script>
                alert('Already registered this USN');
                window.location.href='usn.php';
                </script>";
        }

        $conn->close();
    } else {
        echo "<script>
            alert('All fields are required');
            window.location.href='register.php';
            </script>";
    }
}
?>
