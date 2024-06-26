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
            <img src="assets\leftarrow.png" alt="" />
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php
                $sql = "SELECT * FROM patientreviews";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='swiper-slide' onclick='openVideo(\"" . $row['CarouselVideoLink'] . "\")' >";
                        echo "<img src='" . $row["carouselImageUrl"] . "' alt='Patient Image' />";
                        echo "<div>";
                        echo "<span>" . $row["CarouselText"] . "</span>"; // Assuming reviewText holds the surgery information
                        echo "<button onclick='openVideo(\"" . $row['CarouselVideoLink'] . "\")'>";
                        echo "<img src='assets/playIcon.png' alt='Play Icon' />";
                        echo "<span>Watch Full Video</span>";
                        echo "</button>";
                        echo "</div>";
                        echo "</div>";
                    }
                } else {
                    echo "No reviews found";
                }

                ?>
            </div>
        </div>
        <div class="swiper-button-prev-custom">
            <img src="assets\rightarrow.png" alt="" />
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




        // When the User Clicks On The Carousel Video Link This function Will get's triggered
        function openVideo(videoUrl) {
            // Display SweetAlert dialog with iframe content
            const iframeHtml = `
                <iframe width="90%" height="200" src="${videoUrl}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <button class="iframe__button" onclick="closeVideo()">Close Video</button>`;
            Swal.fire({
                html: iframeHtml,
                width: '95%',
                padding: '1rem',
                showCloseButton: false,
                showConfirmButton: false,
                showCloseButton: false,
            });
        }


        function closeVideo() {
            Swal.close(); // Close the SweetAlert dialog
        }

        // When the User Clicks On The epertise Card Section Link This function Will get's triggered

        function displayPopup() {
            const popupContainer = `
                <button class="popupbtn1" onclick="closeVideo()"><img src="assets/CancelButtonSmallDevices.webp" alt="cancel-button-icon" /></button>
                <button class="popupbtn2" onclick="closeVideo()"><img src="assets/Cancel.webp" alt="cancel-button-icon" /></button>
                <div class="popup-container">
                <img src="assets/popupBanner.webp" alt="" />
                <div class="popup__text__container">
                    <h3>To Know More About The Doctor</h3>
                    <form method="POST" action="components/formData.php">
                        <input name="username" required pattern="[A-Za-z ]{3,}" minlength="3" maxlength="25" title="Please enter at least 3 alphabetic characters" type="text" placeholder="Enter Your Name Here" name="name" />
                        <input name="userPassword" type="tel" required minlength="10" maxlength="14" title="Minimum 10 Numbers Required" placeholder="Enter Your Phone Number Here" name="phone" />
                        <button type="submit">Submit</button>
                        <label >Call us at:</label>
                    <a href="tel:1800 120 2676"><button type="button">1800 120 2676</button></a>
                    </form>
                </div>
            </div>
    `;

            Swal.fire({
                html: popupContainer,
                width: '100%',
                padding: '0px',
                showCloseButton: false,
                showConfirmButton: false,
            });
        }
    </script>




</div>