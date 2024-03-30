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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <?php include('components\patentsReviewsSection.php') ?>

        <script>
            function openVideo(videoUrl) {
                // Specify the URL you want to open
                var url = videoUrl; // Change this to your desired URL

                // Specify window features such as width, height, and other options for the popup window
                var windowFeatures = 'width=500,height=500,resizable=yes,scrollbars=yes';

                // Open the window with the specified URL and features as a popup window
                var newWindow = window.open(url, 'VideoPopup', windowFeatures);

                // Focus the new window (optional)
                if (newWindow) {
                    newWindow.focus();
                }
            }
        </script>
        <?php include('components\getInTouch.php') ?>

    </div>
</body>

</html>