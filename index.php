<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Akesha Chandrasekara</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Portfolio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
    
    <!-- Home Section -->
    <section id="home" class="d-flex align-items-center text-center" style="min-height: 100vh; background-color: #0a0b1e; color: white; padding: 60px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-9 text-left mb-5 content-center-mobile" style="margin-top: 20px;">
                    <h1 class="mb-4" style="margin-bottom: 20px;">Hi, It's Me</h1>
                    <h2 class="mb-3" style="margin-bottom: 20px;">Akesha Chandrasekara</h2>
                    <h3 class="mb-4" style="margin-bottom: 20px;">And I'm a <span class="animated-text" style="color: #00bfff;">Software Developer</span></h3>
                    <p class="mb-4" style="margin-bottom: 30px;">Hello! I'm Akesha Chandrasekara, a skilled Software Developer passionate about crafting elegant digital solutions. With expertise in web and mobile development, I specialize in creating user-centric experiences that drive results. Let's work together to turn your ideas into reality!</p>
                    <div class="social-icons mb-4" style="margin-bottom: 30px;">
                        <a href="https://www.facebook.com/profile.php?id=100090652808200&mibextid=ZbWKwL" target="_blank" class="text-white mr-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/ANawanjali46779?s=09" target="_blank" class="text-white mr-2"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/akesha_2001?igsh=MXB6cTgyOHR3MzV6MA==" target="_blank" class="text-white mr-2"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/akesha-chandrasekara-98454b266?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app " target="_blank" class="text-white mr-2"><i class="fab fa-linkedin-in"></i></a>
                    </div>

                    <button class="btn btn-primary mt-2 custom-button" onclick="scrollToSection('#about')">View More About Me</button>
                </div>
                <div class="col-md-3 text-right">
                    <div class="profile-pic">
                        <img src="p4.jpg" alt="Profile Picture">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5" style="background-color: #0a0b1e; color: white;">
        <div class="container">
            <h2 class="mt-0">About Me</h2>
            <p style="text-align: justify;">Hello! I'm Akesha Chandrasekara, a skilled Software Developer passionate about crafting elegant digital solutions. With expertise in web and mobile development, I specialize in creating user-centric experiences that drive results. I hold a BSc (Hons) degree in Software Engineering and have a solid foundation in software engineering principles.</p>
            <p style="text-align: justify;">My services include Website Development, UI/UX design, and Mobile App development. In addition to these core services, I am continuously expanding my expertise and exploring emerging technologies.  I am eager to learn and adapt to new challenges and technologies. Furthermore, I have a keen interest in project management and quality assurance, ensuring that deliverables meet high standards and are completed efficiently. My dedication to professional growth ensures that I remain agile and capable of delivering innovative solutions that meet the evolving needs of clients</p>
            <p style="text-align: justify;">Driven by a commitment to excellence and a passion for innovation, I'm dedicated to delivering solutions that exceed your expectations and drive tangible results for your business. Let's collaborate to bring your ideas to life!</p>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-5 skills-section" style="background-color: #0a0b1e; color: white;">
        <div class="container">
            <h2>Skills</h2>
            <div class="row">
                <div class="col-md-3 text-center">
                    <img src="https://img.icons8.com/color/64/000000/html-5.png" alt="HTML" class="skill-icon"> 
                    <p class="skill-text">HTML</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="https://img.icons8.com/color/64/000000/css3.png" alt="CSS" class="skill-icon">
                    <p class="skill-text">CSS</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="https://img.icons8.com/color/64/000000/javascript.png" alt="JavaScript" class="skill-icon">
                    <p class="skill-text">JavaScript</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="https://img.icons8.com/color/64/000000/java-coffee-cup-logo.png" alt="Java" class="skill-icon">
                    <p class="skill-text">Java</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="https://img.icons8.com/officel/64/000000/php-logo.png" alt="PHP" class="skill-icon">
                    <p class="skill-text">PHP</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="https://img.icons8.com/color/64/000000/react-native.png" alt="React Native" class="skill-icon">
                    <p class="skill-text">React Native</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="https://img.icons8.com/color/64/000000/mysql-logo.png" alt="MySQL" class="skill-icon">
                    <p class="skill-text">MySQL</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="https://img.icons8.com/color/64/000000/mongodb.png" alt="MongoDB" class="skill-icon">
                    <p class="skill-text">MongoDB</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-5" style="background-color: #0a0b1e; color: white;">
        <div class="container">
            <h2 class="mb-4">Services</h2>
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="service-box border-warning">
                        <i class="fas fa-laptop-code fa-3x mb-3" style="color: #FFD700;"></i>
                        <h3>Website Development</h3>
                        <p>Building responsive and robust websites to enhance your online presence.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="service-box border-primary">
                        <i class="fas fa-pencil-ruler fa-3x mb-3" style="color: #00bfff;"></i>
                        <h3>UI/UX Design</h3>
                        <p>Creating intuitive and engaging user interfaces for better user experiences.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="service-box border-success">
                        <i class="fas fa-mobile-alt fa-3x mb-3" style="color: #32cd32;"></i>
                        <h3>Mobile App Development</h3>
                        <p>Developing mobile applications that offer seamless performance across all devices.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
<!-- Contact Section -->
<section id="contact" class="py-5" style="background-color: #0a0b1e; color: white;">
    <div class="container">
        <h2>Contact Me</h2>
        <form action="https://api.web3forms.com/submit" method="POST">

<input type="hidden" name="access_key" value="8ef4ba74-d1b7-44eb-94b7-849a6bf31ee6">
           

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control custom-input" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="tel" class="form-control custom-input" id="mobile" name="mobile" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control custom-input" id="message" name="message" rows="5" required></textarea>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-md-5 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <span id="fillMessage" style="color: red; display: none;">Please fill out all fields.</span>
                </div>
            </div>
        </form>
        <div id="formResponse"></div>
    </div>
</section>


    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <h5>Contact</h5>
                    <p>Email: akeshanawanjali23@gmail.com</p>
                </div>
                <div class="col-md-6 mb-3">
                    <h5>Follow Me</h5>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/profile.php?id=100090652808200&mibextid=ZbWKwL" target="_blank" class="text-white mr-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/ANawanjali46779?s=09" target="_blank" class="text-white mr-2"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/akesha_2001?igsh=MXB6cTgyOHR3MzV6MA==" target="_blank" class="text-white mr-2"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/akesha-chandrasekara-98454b266?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app " target="_blank" class="text-white mr-2"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <hr class="bg-white">
            <p>&copy; 2024 Akesha | All rights reserved.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="script.js"></script>
   
</body>
</html>
