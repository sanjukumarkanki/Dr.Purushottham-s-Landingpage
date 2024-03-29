<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="dr. purushottam landing page" content="landing page">
    <title>Dr Purushottam About</title>
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="styles\patientReviews.css">
    <link rel="stylesheet" href="styles\expertiseSection.css">
    <link rel="stylesheet" href="styles\getInTouch.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="./javaScript/index.js" defer></script>
</head>

<body>
    <?php include('components\connectDB.php') ?>
    <?php include('components\array.php') ?>
    <div class="main-app">
        <div class="types-of-cancer-main-container">
            <h2> Surgical oncologist <br />
                <span>Dr. Purushotham Area of Expertise</span>
            </h2>
            <?php include('components\expertiseSection.php') ?>
        </div>
        <?php include('components\patentsReviewsSection.php') ?>
        <?php include('components\getInTouch.php') ?>
    </div>
</body>

</html>