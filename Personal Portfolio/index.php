<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Honcho Dev | Full Stack Wizard</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --bg-color: #0f172a;
            --card-bg: rgba(30, 41, 59, 0.7);
            --primary: #38bdf8;
            --secondary: #818cf8;
            --text: #e2e8f0;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text);
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }

        .icon-html { color: #e34c26; }
        .icon-css { color: #264de4; }

        .blob {
            position: absolute;
            filter: blur(80px);
            z-index: -1;
            opacity: 0.6;
            animation: float 10s infinite ease-in-out;
        }
        .blob-1 { top: 10%; left: 10%; width: 300px; height: 300px; background: var(--primary); }
        .blob-2 { bottom: 20%; right: 10%; width: 250px; height: 250px; background: var(--secondary); animation-delay: 2s; }

        @keyframes float {
            0%, 100% { transform: translate(0, 0); }
            50% { transform: translate(30px, -30px); }
        }

        .glass-card {
            background: var(--card-bg);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .glass-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(56, 189, 248, 0.2);
            border-color: var(--primary);
        }

        .neon-text {
            color: #fff;
            text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 20px var(--primary), 0 0 30px var(--primary);
        }

        .navbar {
            backdrop-filter: blur(10px);
            background: rgba(15, 23, 42, 0.8);
        }

        /* Styling for the new Honcho Dev Logo */
        .brand-logo {
            height: 100px;
            width: 100px;
            margin-right: 10px;
        }

        .btn-cyber {
            background: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
            padding: 10px 30px;
            border-radius: 5px;
            font-weight: bold;
            position: relative;
            overflow: hidden;
            z-index: 1;
            transition: 0.3s;
        }
        .btn-cyber::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 0%; height: 100%;
            background: var(--primary);
            z-index: -1;
            transition: 0.3s;
        }
        .btn-cyber:hover::before { width: 100%; }
        .btn-cyber:hover { color: #000; box-shadow: 0 0 20px var(--primary); }
    </style>
</head>
<body>

    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>

    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center fw-bold neon-text" href="#">
                <img src="./img/Honcho's Logo.PNG" alt="Honcho Dev Logo" class="brand-logo" onerror="this.style.display='none'">
            </a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link text-light" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home" class="min-vh-100 d-flex align-items-center position-relative">
        <div class="container text-center" data-aos="fade-up">
            <h6 class="text-primary mb-3">HONCHO DEV | FULL STACK DEVELOPER</h6>
            <h1 class="display-3 fw-bold mb-4">I Build <span class="neon-text">Digital Experiences</span></h1>
            <p class="lead mb-5 text-secondary w-75 mx-auto">
                Specialized in PHP/MySQL Backends & Modern JS Frontends. 
                Turning ideas into clean code and complex problems into elegant solutions.
            </p>
            <div data-aos="fade-up" data-aos-delay="200">
                <a href="#projects" class="btn btn-cyber me-3">View Work</a>
                <a href="#contact" class="btn btn-outline-light rounded-pill px-4 py-2">Hire Me</a>
            </div>
        </div>
    </section>

    <section id="skills" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold" data-aos="fade-down">TECH STACK</h2>
            <div class="row g-4 justify-content-center">
                <div class="col-6 col-md-4 col-lg-2 text-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="glass-card p-4">
                        <i class="fab fa-php fa-3x text-primary mb-3"></i>
                        <h5>PHP</h5>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 text-center" data-aos="zoom-in" data-aos-delay="200">
                    <div class="glass-card p-4">
                        <i class="fas fa-database fa-3x text-danger mb-3"></i>
                        <h5>MySQL</h5>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 text-center" data-aos="zoom-in" data-aos-delay="300">
                    <div class="glass-card p-4">
                        <i class="fab fa-js fa-3x text-warning mb-3"></i>
                        <h5>JS</h5>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 text-center" data-aos="zoom-in" data-aos-delay="400">
                    <div class="glass-card p-4">
                        <i class="fab fa-html5 fa-3x mb-3 icon-html"></i>
                        <h5>HTML5</h5>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 text-center" data-aos="zoom-in" data-aos-delay="500">
                    <div class="glass-card p-4">
                        <i class="fab fa-css3-alt fa-3x mb-3 icon-css"></i>
                        <h5>CSS3</h5>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 text-center" data-aos="zoom-in" data-aos-delay="600">
                    <div class="glass-card p-4">
                        <i class="fab fa-bootstrap fa-3x text-primary mb-3"></i>
                        <h5>Bootstrap</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold" data-aos="fade-up">LATEST PROJECTS</h2>
            <div class="row g-4">
                <?php
                    $conn = new mysqli("localhost", "root", "", "portfolio_db");
                    if ($conn->connect_error) {
                        echo "<div class='alert alert-danger'>Database Error (Check XAMPP)</div>";
                    } else {
                        $sql = "SELECT * FROM projects";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $delay = 100;
                            while($row = $result->fetch_assoc()) {
                                $title = htmlspecialchars($row["title"]);
                                $desc = htmlspecialchars($row["description"]);
                                $tech = htmlspecialchars($row["tech_stack"]);
                                echo '
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="'.$delay.'">
                                    <div class="glass-card h-100 overflow-hidden">
                                        <img src="'.$row["image_url"].'" class="card-img-top" alt="'.$title.'" style="height: 200px; object-fit: cover;">
                                        <div class="card-body">
                                            <h5 class="card-title text-primary">'.$title.'</h5>
                                            <p class="card-text text-secondary small">'.$desc.'</p>
                                            <div class="mb-3">
                                                <span class="badge bg-secondary text-dark">'.$tech.'</span>
                                            </div>
                                            <a href="'.$row["link"].'" class="btn btn-sm btn-outline-light w-100">View Code</a>
                                        </div>
                                    </div>
                                </div>
                                ';
                                $delay += 100;
                            }
                        } else {
                            echo "<p class='text-center'>No projects found in DB.</p>";
                        }
                        $conn->close();
                    }
                ?>
            </div>
        </div>
    </section>

<?php if(isset($_SESSION['alert_msg'])): ?>
    <div class="alert alert-<?php echo ($_SESSION['alert_type'] == 'success') ? 'success' : 'danger'; ?> alert-dismissible fade show" role="alert">
        <?php 
            echo $_SESSION['alert_msg']; 
            unset($_SESSION['alert_msg']); // Clear message after showing
            unset($_SESSION['alert_type']);
        ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>
    <section id="contact" class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="zoom-in">
                    <div class="glass-card p-5">
                        <h2 class="text-center mb-4">GET IN TOUCH</h2>
                        <form action="send_mail.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="user_email" class="form-control bg-transparent text-light border-secondary" placeholder="name@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <textarea name="user_message" class="form-control bg-transparent text-light border-secondary" rows="4" placeholder="Tell me about your project..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-cyber w-100">SEND MESSAGE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="text-center py-4 border-top border-secondary">
        <p class="mb-0 text-secondary">&copy; <?php echo date("Y"); ?> Honcho Dev | Built with <i class="fas fa-heart text-danger"></i> using PHP & Bootstrap</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        AOS.init({ duration: 800, once: true, easing: 'ease-in-out' });

        const navLinks = document.querySelectorAll('.nav-link');
        const menuToggle = document.getElementById('navbarNav');
        const bsCollapse = new bootstrap.Collapse(menuToggle, {toggle:false});
        navLinks.forEach((l) => {
            l.addEventListener('click', () => {
                if(menuToggle.classList.contains('show')){
                    bsCollapse.hide();
                }
            });
        });
    </script>
</body>
</html>