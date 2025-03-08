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
    } elseif(!preg_match($name_pattern, $first_name) || !preg_match($name_pattern, $last_name)) {
      $error_message = "Names Should Only Contains Letters";
    } elseif (!preg_match($username_pattern, $username)) {
      # code...
      $error_message="username should only contain letters, numbers and underscores";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      # code...
      $error_message="invalid email format";
    } elseif (!empty($mobile_number) && !preg_match($mobile_pattern, $mobile_number)) {
      # code...
      $error_message="mobile number should only contain digits (10-15 characters)!";
    } elseif ($password !== $confirm_password) {
      # code...
      $error_message="passwords do not match";
    } elseif (!preg_match($password_pattern, $password)) {
      # code...
      $error_message="Password must be at least 8 characters long, include at least one uppercase letter, and one symbol!";
    } else {
      // hash the password
      $hashed_password=password_hash($password, PASSWORD_BCRYPT);
      // insert user data in the user database
      $stmt = $pdo->prepare("INSERT INTO users (first_name, last_name, username, email, mobile_number, address, date_of_birth, password) 
                               VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                               if ($stmt->execute([$first_name, $last_name, $username, $email, $phone, $address, $date_of_birth, $hashed_password])) {
                                // Automatically log the user in after registration
                                $_SESSION['user_id'] = $pdo->lastInsertId();
                                $_SESSION['email'] = $email;
                        
                                // Redirect to the dashboard
                                header("Location: dashboard.php");
                                exit();
                            } else {
                                echo "Registration failed!";
                            }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
      .card-registration .select-input.form-control[readonly]:not([disabled]) {
    font-size: 1rem;
    line-height: 2.15;
    padding-left: .75em;
    padding-right: .75em;
    }
    .card-registration .select-arrow {
    top: 13px;
    }
    .error-message {
        background-color: #ffebee; /* Light red background */
        color: #d32f2f; /* Dark red text */
        border: 1px solid #d32f2f;
        padding: 10px;
        margin: 10px 0;
        border-radius: 5px;
        text-align: center;
        font-weight: bold;
    }
    
    </style>
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
                  <div class="d-flex"><p>Have an account?</p>
                  <a href="login.php">Login</a></div>
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