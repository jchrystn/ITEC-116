<?php
$errors = [];
$name = $bdate = $sex = $address = $houseNumber = $barangay = $city = $province = $primaryPhone = $secondaryPhone = $primaryEmail = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $errors['name'] = "Name is required.";
    } else {
        $name = htmlspecialchars($_POST["name"]);
    }

    if (empty($_POST["bdate"])) {
        $errors['bdate'] = "Birthday is required.";
    } else {
        $bdate = htmlspecialchars($_POST["bdate"]);
    }

    if (empty($_POST["sellist"])) {
        $errors['sellist'] = "Sex is required.";
    } else {
        $sex = htmlspecialchars($_POST["sellist"]);
    }

    if (empty($_POST["stud_num"])) {
        $errors['stud_num'] = "Student Number is required.";
    } else {
        $stud_num = htmlspecialchars($_POST["stud_num"]);
    }

    if (empty($_POST["houseNumber"])) {
        $errors['houseNumber'] = "House Number is required.";
    } else {
        $houseNumber = htmlspecialchars($_POST["houseNumber"]);
    }

    if (empty($_POST["barangay"])) {
        $errors['barangay'] = "Barangay is required.";
    } else {
        $barangay = htmlspecialchars($_POST["barangay"]);
    }

    if (empty($_POST["city"])) {
        $errors['city'] = "City is required.";
    } else {
        $city = htmlspecialchars($_POST["city"]);
    }

    if (empty($_POST["province"])) {
        $errors['province'] = "Province is required.";
    } else {
        $province = htmlspecialchars($_POST["province"]);
    }

    if (empty($_POST["primary"])) {
        $errors['primary'] = "Primary Phone is required.";
    } else {
        $primaryPhone = htmlspecialchars($_POST["primary"]);
    }

    if (empty($_POST["course"])) {
        $errors['course'] = "Course is required.";
    } else {
        $course = htmlspecialchars($_POST["course"]);
    }
    if (empty($_POST["college"])) {
        $errors['college'] = "College is required.";
    } else {
        $college = htmlspecialchars($_POST["college"]);
    }
    
    if (empty($_POST["priEmail"])) {
        $errors['priEmail'] = "Primary Email is required.";
    } elseif (!filter_var($_POST["priEmail"], FILTER_VALIDATE_EMAIL)) {
        $errors['priEmail'] = "Invalid email format.";
    } else {
        $primaryEmail = htmlspecialchars($_POST["priEmail"]);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/registration.css">
</head>
<body>

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
                
    <div class="container mt-5 pt-5 w-50 mx-auto">
        <div class="row w-100 mx-auto">
            <h3>Personal Information</h3>
            <div class="col mx-auto">
                <form action="" method="post">
                    <div class="form-floating mx-auto mt-3 mb-3">
                        <input type="text" class="form-control" id="stud_num" placeholder="Enter Address..." name="stud_num">
                        <label for="stud_num">Student Number</label>
                        <div class="text-danger"><?php echo $errors['stud_num'] ?? ''; ?></div>
                    </div>
                    <div class="form-floating mx-auto mb-3 mt-3">
                        <input type="text" class="form-control" id="name" placeholder="Enter Name..." name="name" >
                        <label for="name">Name</label>
                        <div class="text-danger"><?php echo $errors['name'] ?? ''; ?></div>
                    </div>
                    <div class="form-floating mx-auto mt-3 mb-3">
                        <input type="date" class="form-control" id="bdate" placeholder="Enter Birthday..." name="bdate">
                        <label for="bdate">Birthday</label>
                        <div class="text-danger"><?php echo $errors['bdate'] ?? ''; ?></div>
                    </div>
                    <div class="form-floating mx-auto mt-3 mb-3">
                        <select class="form-select" id="sel1" name="sellist">
                            <option></option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Not Specified</option>
                            <option>Others</option>
                        </select>
                        <label for="sex">Sex</label>
                        <div class="text-danger"><?php echo $errors['sellist'] ?? ''; ?></div>
                    </div>
                    
                    <br>
            </div>
                    
            <div class="col">
                <div class="form-floating mx-auto mb-3 mt-3">
                    <input type="text" class="form-control" id="houseNumber" placeholder="Enter House Number..." name="houseNumber" >
                    <label for="houseNumber">House No. / Street</label>
                    <div class="text-danger"><?php echo $errors['houseNumber'] ?? ''; ?></div>
                </div>
                
                <div class="form-floating mx-auto mt-3 mb-3">
                    <input type="text" class="form-control" id="barangay" placeholder="Enter Barangay..." name="barangay" >
                    <label for="barangay">Barangay</label>
                    <div class="text-danger"><?php echo $errors['barangay'] ?? ''; ?></div>
                </div>   
                <div class="form-floating mx-auto mb-3 mt-3">
                    <input type="text" class="form-control" id="city" placeholder="Enter City..." name="city" >
                    <label for="city">City</label>
                    <div class="text-danger"><?php echo $errors['city'] ?? ''; ?></div>
                </div>
                
                <div class="form-floating mx-auto mt-3 mb-3">
                    <input type="text" class="form-control" id="province" placeholder="Enter Province..." name="province" >
                    <label for="province">Province</label>
                    <div class="text-danger"><?php echo $errors['province'] ?? ''; ?></div>
                </div>   
            </div>

            <h3>Contact Info</h3>

            <div class="col">
            	<div class="form-floating mx-auto mb-3 mt-3">
            		<input type="text" class="form-control" id="primary" placeholder="Primary Phone" name="primary" >
            		<label for="primary">Primary Phone</label>
            		<div class="text-danger"><?php echo $errors['primary'] ?? ''; ?></div>
            	</div>
            	<div class="form-floating mx-auto mb-3 mt-3">
            		<input type="text" class="form-control" id="college" placeholder="college" name="college" >
            		<label for="college">College</label>
            		<div class="text-danger"><?php echo $errors['college'] ?? ''; ?></div>
            	</div>

           </div>

            <div class="col">
                <div class="form-floating mx-auto mb-3 mt-3">
  					<input type="email" class="form-control" id="priEmail" placeholder="name@example.com" name="priEmail">
  					<label for="priEmail">Primary Email</label>
  					<div class="text-danger"><?php echo $errors['priEmail'] ?? ''; ?></div>
  				</div>
            	
            	<div class="form-floating mx-auto mb-3 mt-3">
            	<input type="text" class="form-control" id="course" placeholder="course" name="course" >
            		<label for="course">Course</label>
            		<div class="text-danger"><?php echo $errors['course'] ?? ''; ?></div>
            	</div>	
            	
           </div>
           
           <button type="submit" class="btn btn-outline-success mt-3 mb-3 w-100">Submit</button>
                </form>
            
        </div>
    </div>

</body>
</html>
