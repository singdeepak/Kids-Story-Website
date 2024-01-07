<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- =======Hero-Section-Start=======
    ================================== -->
    <div class="container-fluid">
        <?php 
            include "partials/header.php";
        ?>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/img10.jpg" class="d-block w-100" alt="slider-1">
                </div>
                <div class="carousel-item">
                    <img src="images/img11.jpg" class="d-block w-100" alt="slider-2">
                </div>
                <div class="carousel-item">
                    <img src="images/img63.jpg" class="d-block w-100" alt="slider-3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- =======Hero-Section-End=========
    ================================== -->


    <!-- =======Header-Section-Start=======
    ================================== -->
    
    <!-- =======Header-Section-End=========
    ================================== -->


    <!-- Bootstrap JavaScript -->
    <script src="<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>