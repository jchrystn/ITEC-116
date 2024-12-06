<?php
    // $errors = [];
    // $success_message = '';

    // if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //     $required_fields = [
    //         'card_number' => 'Student number',
    //         'name' => 'Name',
    //         'birthday' => 'Birthday',
    //         'sex' => 'Sex',
    //         'college' => 'first_name',
    //         'course' => 'Course',
    //         'address' => 'Address',
    //         'country' => 'Country',
    //         ' phone_number' => 'Phone number',
    //         'email' => 'Email'
    //     ];

    //     foreach ($required_fields as $field => $label) {
    //         if (empty($_POST[$field])) {
    //             $errors[] = "$label is required.";
    //         }
    //     }

    //     if (!empty($_POST['card_number']) && !preg_match("/^\d+$/", $_POST['card_number'])) {
    //         $errors[] = "Student number must be numeric.";
    //     }

    //     if (!empty($_POST['card_number']) && !preg_match("/^\d{9}$/", $_POST['card_number'])) {
    //         $errors[] = "Student number must be 9 digits.";
    //     }

    //     if (!empty($_POST['birthday']) && !preg_match("/^\d{4}-\d{2}-\d{2}$/", $_POST['birthday'])) {
    //         $errors[] = "Birthday must be in YYYY-MM-DD format.";
    //     }

    //     if (!empty($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    //         $errors[] = "Invalid email address.";
    //     }

    //     if (!empty($_POST['phone_number']) && !preg_match("/^\+?\d{11}$/", $_POST['phone_number'])) {
    //         $errors[] = "Phone number must be valid and have 11 digits.";
    //     }

    //     if (empty($errors)) {
    //         $success_message = "Registration Successful!";
    //     }
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
    <link rel="stylesheet" href="../css/registration.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 form-container">
                <h4 class="mb-4 mt-3">Registration Form</h4>
                
                <!-- ======================= ERROR ALERTS ==================== -->

                <?php
                    if (!empty($errors)) {
                        echo '<div class="alert alert-danger" role="alert">';
                        echo '<ul class="mb-0" style="list-style: none; padding-left: 0;">';
                        foreach ($errors as $error) {
                            echo "<li>$error</li>";
                        }
                        echo '</ul>';
                        echo '</div>';
                    }
                    if (!empty($success_message)) {
                        echo "<div class='alert alert-success' role='alert'>$success_message</div>";
                    }
                ?>
                
                <div class="error-messages"></div>
                <div class="success-messages"></div>
                <form method="POST" id="form" action="">
                    
                    <!-- ======================= REGISTRATION FORM ==================== -->

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="card_number" class="form-label">Student Number:</label>
                            <input class="form-control" type="text" id="card_number" name="card_number">
                        </div>
                        <div class="col-md-6">
                            <label for="birthday" class="form-label">Birthday:</label>
                            <input type="date" class="form-control" id="birthday" name="birthday" >
                        </div>
                        <div class="col-md-6">
                            <label for="last_name" class="form-label">Last Name:</label>
                            <input type="text" class="form-control" name="last_name" id="last_name" >
                        </div>
                        <div class="col-md-6">
                            <label for="first_name" class="form-label">First Name:</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" >
                        </div>
                        <div class="col-md-6 third">
                            <label for="sex" class="form-label">Sex:</label>
                            <select class="form-select" id="sex" name="sex" >
                                <option value="" disabled select>Select Sex:</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                        <div class="col-md-6 third">
                            <label for="college" class="form-label">College:</label>
                            <input type="text" class="form-control" id="college" name="college" >
                        </div>
                        <div class="col-md-6 third">
                            <label for="course" class="form-label">Course:</label>
                            <input type="text" class="form-control" id="course" name="course"  >
                        </div>

                        <div class="col-md-8 w-25">
                            <label for="city" class="form-label">City:</label>
                            <input type="text" class="form-control" id="city" name="city">
                        </div>
                        <div class="col-md-8 w-25">
                            <label for="province" class="form-label">Province:</label>
                            <input type="text" class="form-control" id="province" name="province">
                        </div>
                        <div class="col-md-8 w-25">
                            <label for="zip" class="form-label">Zip Code:</label>
                            <input type="text" class="form-control" id="zip" name="zip">
                        </div>
                        <div class="col-md-4 w-25">
                            <label for="country" class="form-label">Country:</label>
                            <input type="text" class="form-control" id="country" name="country"  >
                        </div>

                        <!-- ======================= CONTACT INFORMATION ========================= -->

                        <h4 class="mt-5">Contact Information</h4>
                        <div class="col-md-4 w-50">
                            <label for="phone_number" class="form-label">Phone Number:</label>
                            <input type="tel" class="form-control" id="phone_number" name="phone_number"  >
                        </div>
                        <div class="col-md-4 w-50">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email"  >
                        </div>
                        <div class="col-md-6">
                            <label for="registration_date" class="form-label">Registration Date:</label>
                            <input type="date" class="form-control" id="registration_date" name="registration_date" value="<?php echo date('Y-m-d'); ?>" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="expiry_date" class="form-label">Expiration Date:</label>
                            <input type="date" class="form-control" id="expiry_date" name="expiry_date" value="<?php echo date('Y-m-d', strtotime('+2 year')); ?>" readonly>
                        </div>

                        <!-- ======================= SUBMIT BUTTON ========================= -->

                        <div class="col-12"  >
                            <button type="submit" class="btn btn-outline-success mt-3 mb-3 w-100">Submit</button>
                        </div>
                    </div>
                </form>

                <script src="main.js"></script>

            </div>
        </div>
    </div>
</body>
</html>
