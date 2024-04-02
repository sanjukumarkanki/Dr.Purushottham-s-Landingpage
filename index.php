<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="dr. purushottam landing page" content="landing page">
    <title>Dr Purushottam About</title>
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/navBar.css">
    <link rel="stylesheet" href="./styles/heroBanner.css">
    <link rel="stylesheet" href="./styles/DoctorsApproach.css">
    <link rel="stylesheet" href="styles\patientReviewSection.css">
    <link rel="stylesheet" href="styles\expertiseSection.css">
    <link rel="stylesheet" href="styles\getInTouch..css">
    <link rel=" stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="./javaScript/index.js" defer></script>
</head>

<body>
    <?php include('components\connectDB.php') ?>
    <div class="main-app">
        <?php include("components/navBar.php") ?>
        <!-- hero-banner -->
        <?php include("components/heroBanner.php") ?>
        <!-- Doctor’s approach to treatment -->
        <?php include("components/DoctorsApproach.php") ?>
        <!-- ExpertSection -->
        <div class="types-of-cancer-main-container">
            <h2> Surgical oncologist <br />
                <span>Dr. Purushotham Area of Expertise</span>
            </h2>
            <?php include('components\expertiseSection.php') ?>
            <!-- <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="assets\Gynocology.png" alt="">
                        <p>Gynocology</p>
                    </div>
                    <div class="flip-card-back">
                        <img src="assets\Gynocology.png" alt="">
                        <p>Sanju</p>
                    </div>
                </div>
            </div> -->

        </div>
        <!-- Patient Review Section -->
        <?php include('components\patentsReviewsSection.php') ?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <?php include('components\getInTouch.php') ?>
    </div>
</body>

</html>