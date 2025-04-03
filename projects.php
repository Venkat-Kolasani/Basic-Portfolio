<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,700;1,400&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header-nav">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-custom">
                <div class="container-fluid justify-content-center">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-3"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item mx-3"><a class="nav-link" href="projects.php">Projects</a></li>
                        <li class="nav-item mx-3"><a class="nav-link" href="gallery.php">Gallery</a></li>
                        <li class="nav-item mx-3"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    
    <section id="projects" class="py-4">
        <div class="container">
            <div class="card mb-4">
                <div class="card-body">
                    <h3>
                        <a href="https://github.com/Venkat-Kolasani/Knight-s-Tour-Based-Cryptographic-Key-Generation" class="project-title">Knight's Tour Encryption System</a>
                        <a href="https://github.com/Venkat-Kolasani/Knight-s-Tour-Based-Cryptographic-Key-Generation" class="github-link">
                            <img src="github-mark.svg" alt="GitHub">
                        </a>
                    </h3>
                    <ul class="list-group list-group-flush bg-transparent">
                        <li class="list-group-item bg-transparent">Developed a cryptographic application leveraging the Knight's Tour problem to generate unique encryption keys for XOR-based encryption and decryption.</li>
                        <li class="list-group-item bg-transparent">Features a menu-driven CLI for key generation, encryption/decryption, and report generation.</li>
                        <li class="list-group-item bg-transparent">Utilized C++17, OpenSSL Library, Knight's Tour Algorithm, XOR-based encryption, and back-tracking with Warnsdorff's Rule.</li>
                        <li class="list-group-item bg-transparent">Achievements: Successfully implemented and optimized the Knight's Tour algorithm, developing a robust encryption and decryption system.</li>
                    </ul>
                </div>
            </div>
            
            <div class="card mb-4">
                <div class="card-body">
                    <h3>
                        <a href="https://github.com/Venkat-Kolasani/Hotel-Booking-System" class="project-title">Hotel Booking System</a>
                        <a href="https://github.com/Venkat-Kolasani/Hotel-Booking-System" class="github-link">
                            <img src="github-mark.svg" alt="GitHub">
                        </a>
                    </h3>
                    <ul class="list-group list-group-flush bg-transparent">
                        <li class="list-group-item bg-transparent">Developed a C++ console-based application for efficient hotel room bookings and customer reward management.</li>
                        <li class="list-group-item bg-transparent">Features include room management, customer tracking, and a robust loyalty program.</li>
                        <li class="list-group-item bg-transparent">Utilized standard libraries, OOP concepts (classes, inheritance, polymorphism), file handling, templates, and custom exception handling for seamless functionality.</li>
                        <li class="list-group-item bg-transparent">Achievements: Designed a dual login system for admin and user, implemented robust loyalty rewards, and ensured error-free execution with exception handling.</li>
                    </ul>
                </div>
            </div>
            
            <div class="card mb-4">
                <div class="card-body">
                    <h3>
                        <a href="https://github.com/Venkat-Kolasani/SIH_2024_FertiWise" class="project-title">FertiWise (In progress)</a>
                        <a href="https://github.com/Venkat-Kolasani/SIH_2024_FertiWise" class="github-link">
                            <img src="github-mark.svg" alt="GitHub">
                        </a>
                    </h3>
                    <p class="card-text">
                        Problem Description:<br>
                        Background: Excessive and improper use of fertilizers leads to soil degradation and reduced agricultural productivity, negatively impacting farmers' income.<br>
                        Description: Create a data-driven solution that recommends optimal fertilizer types and quantities based on soil health, crop type, and weather patterns, ensuring sustainable agricultural practices.<br>
                        Expected Solution: An application that analyzes soil data and provides tailored fertilizer recommendations, promoting sustainable farming while enhancing crop yield and farmer income.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>