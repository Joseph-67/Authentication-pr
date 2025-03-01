<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
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
            <div class="col-xl-6 d-none d-xl-block">
              <img src="img\college_class_stock.jpg"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Login Form</h3>

                <!-- Start of form element -->
                <form action="#" method="POST">

                 

                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form3Example1m1" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example1m1">Username</label>
                      </div>
                    </div>
                   

                 

                  <div class="col-md-6">
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="form3Example90" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example90">Password</label>
                  </div>
                  </div>
                  <div class="d-flex"><p>Don't have an account?</p>
                  <a href="register.php">Register</a></div>

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
