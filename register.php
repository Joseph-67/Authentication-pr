<?php
require 'db.php';
session_start();
$error_message = ''; // Initialize the error message

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve user input
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $mobile_number = trim($_POST['mobile_number']);
    $address = trim($_POST['address']);
    $date_of_birth = trim($_POST['date_of_birth']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Regular expressions
    $password_pattern = "/^(?=.*[A-Z])(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/";
    $name_pattern = "/^[a-zA-Z]+$/";
    $username_pattern = "/^[a-zA-Z0-9_]+$/";
    $mobile_pattern = "/^[0-9]{10,15}$/";

    // Validation checks
    if (empty($first_name) || empty($last_name) || empty($username) || empty($email) || empty($date_of_birth) || empty($password) || empty($confirm_password)) {
        $error_message = "All Required Fields Must Be Filled";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 ">
              <img src="img\college_class_stock.jpg"
                alt="Sample photo" class="img-fluid"
                style="height: 400px; width: 100%; border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Student registration form</h3>
                <?php if (!empty($error_message)): ?>
    <div class="error-message">
        <p><?php echo htmlspecialchars($error_message); ?></p>
    </div>
<?php endif; ?>

                <!-- Start of form element -->
                <form action="#" method="POST">

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form3Example1m" name="first_name" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example1m">First name</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form3Example1n" name="last_name" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example1n">Last name</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form3Example1m1" name="username" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example1m1">Username</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="email" id="form3Example1n1" name="email" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example1n1">Email</label>
                      </div>
                    </div>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="tel" id="form3Example8" name="mobile_number" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example8">Mobile Number</label>
                  </div>
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="tel" id="form3Example8" name="address" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example8">Address</label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="date" id="form3Example9" name="date_of_birth" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example9">Date Of Birth</label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="form3Example90" name="password" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example90">Password</label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="form3Example91" name="confirm_password" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example91">Confirm Password</label>
                  </div>

                  <div class="d-flex justify-content-end pt-3">
                    <button type="submit" class="btn btn-warning btn-lg ms-2">Submit</button>
                  </div>

                </form>
                <!-- End of form element -->

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>