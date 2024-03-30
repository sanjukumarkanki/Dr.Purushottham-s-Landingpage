<div class="patientsReview-main-section">
    <h2>Patient testimonials about
        <br />
        <span>Dr. Purushottam Surgical Oncologist</span>
    </h2>
    <p>We make sure our patients are empowered to take control of their health and make informed choices.
        Their words of appreciation keep us going.</p>
    <!-- Swiper JS -->
    <div class="swiper-main-container">
        <div class="swiper-button-next-custom">
            <img src="assets/leftarrow.png" alt="" />
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php
                $sql = "SELECT * FROM patientreviews";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='swiper-slide'>";
                        echo "<img src='" . $row["carouselImageUrl"] . "' alt='Patient Image' />";
                        echo "<div>";
                        echo "<span>" . $row["CarouselText"] . "</span>"; // Assuming reviewText holds the surgery information
                        echo "<button>";
                        echo "<img src='assets/playIcon.png' alt='Play Icon' />";
                        echo "<span>Watch Full Video</span>";
                        echo "</button>";
                        echo "</div>";
                        echo "</div>";

                        // Modal for each video

                    }
                } else {
                    echo "No reviews found";
                }
                $conn->close();
                ?>
            </div>
        </div>
        <div class="swiper-button-prev-custom">
            <img src="assets/rightarrow.png" alt="" />
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            keyboard: {
                enabled: true,
            },
            navigation: {
                nextEl: ".swiper-button-prev-custom",
                prevEl: ".swiper-button-next-custom",
            },
            breakpoints: {
                768: {
                    slidesPerView: 3,
                    spaceBetween: 35,

                }
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            var modal = document.getElementById('videoModal');
            var videoFrame = document.getElementById('videoFrame');

            // Get all play buttons
            var playBtns = document.querySelectorAll('.play-btn');
            playBtns.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    var videoUrl = this.getAttribute('data-video-url');
                    videoFrame.src = videoUrl;
                    modal.style.display = 'block';
                });
            });

            // Close modal when the close button or outside modal area is clicked
            var closeBtn = document.querySelector('.close');
            closeBtn.addEventListener('click', function() {
                videoFrame.src = ''; // Clear video source
                modal.style.display = 'none';
            });

            window.addEventListener('click', function(event) {
                if (event.target === modal) {
                    videoFrame.src = ''; // Clear video source
                    modal.style.display = 'none';
                }
            });
        });
    </script>
</div>