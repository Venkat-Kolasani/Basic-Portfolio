<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
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
    
    <section id="gallery" class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="gallery-card">
                        <img src="https://srmap.edu.in/wp-content/uploads/2024/04/srmap-paari.jpg" alt="Gallery Image 1" class="card-img-top">
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="gallery-card">
                        <img src="https://media.collegedekho.com/media/img/institute/crawled_images/None/z%2C%20masl.jpg" alt="Gallery Image 2" class="card-img-top">
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="gallery-card">
                        <img src="https://college4u.in/wp-content/uploads/2019/01/amb.jpg" alt="Gallery Image 3" class="card-img-top">
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="gallery-card">
                        <img src="https://india-press-release.com/wp-content/uploads/2024/05/srm.jpg" alt="Gallery Image 4" class="card-img-top">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>