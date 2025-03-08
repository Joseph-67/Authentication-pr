<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySchool - Empowering Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Hero Section */
        .hero {
            background: url('https://source.unsplash.com/1600x900/?school,classroom,students') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            position: relative;
        }
        .hero::before {
            content: "";
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.6); /* Dark overlay */
        }
        .hero .container {
            position: relative;
            z-index: 2;
        }
        .btn-custom {
            padding: 12px 24px;
            font-size: 1.2rem;
            transition: 0.3s ease-in-out;
        }
        .btn-custom:hover {
            transform: scale(1.1);
        }
        /* Sections */
        section {
            padding: 60px 0;
        }
        .icon-box {
            font-size: 40px;
            color: #007bff;
        }
        /* Footer */
        footer {
            background: #222;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">MySchool</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#courses">Courses</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
                <a href="register.php" class="btn btn-light me-2">Register</a>
                <a href="login.php" class="btn btn-outline-light">Login</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero">
        <div class="container">
            <h1 class="display-3 fw-bold">Welcome to MySchool</h1>
            <p class="lead">Empowering students for a brighter future through quality education.</p>
            <a href="#" class="btn btn-warning btn-lg btn-custom">Get Started</a>
        </div>
    </header>

    <!-- About Us Section -->
    <section id="about" class="bg-light">
        <div class="container text-center">
            <h2>About Us</h2>
            <p class="lead">MySchool is dedicated to providing high-quality education, fostering innovation, and nurturing young minds for a brighter tomorrow.</p>
        </div>
    </section>

    <!-- Courses Section -->
    <section id="courses">
        <div class="container text-center">
            <h2>Our Courses</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow">
                        <span class="icon-box">📚</span>
                        <h4>Science</h4>
                        <p>Explore the wonders of physics, chemistry, and biology.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow">
                        <span class="icon-box">💻</span>
                        <h4>Computer Science</h4>
                        <p>Learn programming, AI, and web development.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow">
                        <span class="icon-box">📖</span>
                        <h4>Humanities</h4>
                        <p>History, literature, and social sciences to broaden your perspective.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section id="why-us" class="bg-light">
        <div class="container text-center">
            <h2>Why Choose Us?</h2>
            <p>We provide world-class education with top-notch facilities.</p>
            <div class="row mt-4">
                <div class="col-md-4"><h4>🏫 Modern Facilities</h4><p>State-of-the-art classrooms and labs.</p></div>
                <div class="col-md-4"><h4>👨‍🏫 Expert Teachers</h4><p>Qualified and experienced faculty.</p></div>
                <div class="col-md-4"><h4>🎓 Career Opportunities</h4><p>Strong university and job placement.</p></div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials">
        <div class="container text-center">
            <h2>What Our Students Say</h2>
            <div class="row mt-4">
                <div class="col-md-6">
                    <p>"MySchool has changed my life. The teachers are amazing!" - <strong>John Doe</strong></p>
                </div>
                <div class="col-md-6">
                    <p>"Best decision ever! I learned so much and made great friends." - <strong>Jane Smith</strong></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="bg-light">
        <div class="container text-center">
            <h2>Contact Us</h2>
            <p>Email: contact@myschool.com | Phone: +123 456 7890 | Address: 123 Main St, City</p>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2025 MySchool. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
