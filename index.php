<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('include/header-link.php')?>
    <title><?php echo SITE_NAME ;?></title>
</head>

<body>
    <?php include('include/header.php')?>

    <main>
        <section class="bg-light d-lg-none">
            <img src="<?php echo BASE_URL ;?>/images/banner.webp" alt="Banner" class="img-fluid rounded-4 my-3">
        </section>
        <section>
            <div class="container pb-5 pt-4">
                <div class="row pt-lg-4">
                    <div class="col-lg-6 px-sm-5 d-none d-lg-block">
                        <img src="<?php echo BASE_URL ;?>/images/banner.webp" alt="Banner" class="img-fluid rounded-4">
                    </div>

                    <div class="col-lg-6 d-flex align-items-center justify-content-center pb-lg-4">
                        <form class="d-flex flex-column align-items-center justify-content-center pb-xl-4 gap-3">
                            <h3 class="fs-5 px-md-4">Fill in your details to start your journey towards a pain-free
                                life!
                            </h3>
                            <div class="step">
                                <input type="text" name="name" placeholder="Name">
                                <input type="tel" name="phon" placeholder="Phone Number">
                                <div class="next-step gap-3">
                                    <button class="btn-prime">Next</button>
                                </div>
                            </div>

                            <div class="step">
                                <details>
                                    <summary>Select Your City</summary>
                                    <hr>
                                    <label><input type="radio" name="city" hidden>Mumbai</label>
                                    <hr>
                                    <label><input type="radio" name="city" hidden>Delhi</label>
                                    <hr>
                                    <label><input type="radio" name="city" hidden>Pune</label>
                                    <hr>
                                    <label><input type="radio" name="city" hidden>Hyderabad</label>
                                    <hr>
                                    <label><input type="radio" name="city" hidden>Bangalore</label>
                                </details>

                                <details>
                                    <summary>Select Your Location</summary>
                                    <div class="location">
                                        <label><input type="radio" name="location" hidden>Andheri</label>
                                        <label><input type="radio" name="location" hidden>Ghatkopar</label>
                                        <label><input type="radio" name="location" hidden>Powai</label>
                                        <label><input type="radio" name="location" hidden>Linking Road</label>
                                        <label><input type="radio" name="location" hidden>Marine Lines</label>
                                        <label><input type="radio" name="location" hidden>Borivali</label>
                                        <label><input type="radio" name="location" hidden>Navi Mumbai</label>
                                    </div>
                                </details>
                                <div class="next-step gap-3">
                                    <button class="btn-sec">Back</button>
                                    <button class="btn-prime">Next</button>
                                </div>
                            </div>


                            <div class="step">
                                <details>
                                    <summary>Select Date</summary>
                                    <div class="calendar">
                                    </div>
                                </details>

                                <details>
                                    <summary>Select Preferred Time Slot</summary>
                                    <div class="time">
                                        <label><input type="radio" name="time" hidden>08:00am</label>
                                        <label><input type="radio" name="time" hidden>08:30am</label>
                                        <label><input type="radio" name="time" hidden>09:00am</label>
                                        <label><input type="radio" name="time" hidden>09:30am</label>
                                        <label><input type="radio" name="time" hidden>10:00am</label>
                                        <label><input type="radio" name="time" hidden>10:30am</label>
                                        <label><input type="radio" name="time" hidden>11:00am</label>
                                        <label><input type="radio" name="time" hidden>11:30am</label>
                                        <label><input type="radio" name="time" hidden>12:00pm</label>
                                        <label><input type="radio" name="time" hidden>12:30pm</label>
                                        <label><input type="radio" name="time" hidden>01:00pm</label>
                                        <label><input type="radio" name="time" hidden>01:30pm</label>
                                        <label><input type="radio" name="time" hidden>02:00pm</label>
                                        <label><input type="radio" name="time" hidden>02:30pm</label>
                                        <label><input type="radio" name="time" hidden>03:00pm</label>
                                        <label><input type="radio" name="time" hidden>03:30pm</label>
                                        <label><input type="radio" name="time" hidden>04:00pm</label>
                                        <label><input type="radio" name="time" hidden>04:30pm</label>
                                        <label><input type="radio" name="time" hidden>05:00pm</label>
                                        <label><input type="radio" name="time" hidden>05:30pm</label>
                                        <label><input type="radio" name="time" hidden>06:00pm</label>
                                        <label><input type="radio" name="time" hidden>06:30pm</label>
                                        <label><input type="radio" name="time" hidden>07:00pm</label>
                                        <label><input type="radio" name="time" hidden>07:30pm</label>
                                    </div>
                                </details>
                                <div class="next-step gap-3 d-flex">
                                    <button class="btn-sec">Back</button>
                                    <button class="btn-prime submit">Submit</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>


    </main>
    <?php include('include/footer.php')?>
    <?php include('include/footer-link.php')?>
    <script>
    $(document).ready(function() {
        function createCalendar(containerSelector, year, month) {
            const container = document.querySelector(containerSelector);
            container.innerHTML = "";

            const daysOfWeek = ["S", "M", "T", "W", "T", "F", "S"];
            const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
                "Dec"
            ];

            const header = document.createElement("div");
            header.className = "calendar-header";
            header.innerHTML = `
                <button class="prev-month">&lt;</button>
                <span class="month-name">${monthNames[month]} ${year}</span>
                <button class="next-month">&gt;</button>
            `;
            container.appendChild(header);

            const daysHeader = document.createElement("div");
            daysHeader.className = "days-header";
            daysOfWeek.forEach((day) => {
                const dayElement = document.createElement("div");
                dayElement.textContent = day;
                dayElement.className = "day-label";
                daysHeader.appendChild(dayElement);
            });
            container.appendChild(daysHeader);

            const daysContainer = document.createElement("div");
            daysContainer.className = "days-container";

            const firstDayOfMonth = new Date(year, month, 1).getDay();
            const daysInMonth = new Date(year, month + 1, 0).getDate();

            for (let i = 0; i < firstDayOfMonth; i++) {
                const emptyCell = document.createElement("div");
                emptyCell.className = "day empty";
                daysContainer.appendChild(emptyCell);
            }

            for (let day = 1; day <= daysInMonth; day++) {
                const dayCell = document.createElement("div");
                dayCell.textContent = day.toString().padStart(2, "0");
                dayCell.className = "day";
                daysContainer.appendChild(dayCell);
            }

            container.appendChild(daysContainer);

            header.querySelector(".prev-month").addEventListener("click", () => {
                const newMonth = month === 0 ? 11 : month - 1;
                const newYear = month === 0 ? year - 1 : year;
                createCalendar(containerSelector, newYear, newMonth);
            });

            header.querySelector(".next-month").addEventListener("click", () => {
                const newMonth = month === 11 ? 0 : month + 1;
                const newYear = month === 11 ? year + 1 : year;
                createCalendar(containerSelector, newYear, newMonth);
            });
        }

        const today = new Date();
        createCalendar(".calendar", today.getFullYear(), today.getMonth());

        $(".step").hide();
        $(".step").first().show();

        function adjustForScreenSize() {
            if ($(window).width() < 768) {
                $(".step").show();
                $(".next-step button:not(.submit)").hide();
            } else {
                $(".step").hide();
                $(".step").first().show();
                $(".next-step button").show();
            }
        }

        adjustForScreenSize();
        $(window).resize(adjustForScreenSize);

        $(".btn-prime").on("click", function(e) {
            e.preventDefault();
            const currentStep = $(this).closest(".step");
            const nextStep = currentStep.next(".step");

            if (nextStep.length) {
                currentStep.hide();
                nextStep.show();
            }
        });

        $(".btn-sec").on("click", function(e) {
            e.preventDefault();
            const currentStep = $(this).closest(".step");
            const prevStep = currentStep.prev(".step");

            if (prevStep.length) {
                currentStep.hide();
                prevStep.show();
            }
        });

        $(".submit").on("click", function(e) {
            e.preventDefault();
            alert("Form submitted!");
        });

        $("details").on("click", function() {
            $("details").not($(this)).removeAttr("open");
        });

        // selections

        $(document).on('change', 'input[name="location"]', function() {
            const selectedLabel = $(this).parent().text().trim();
            $('details[open] summary').text(`Selected Location : ${selectedLabel}`);
            $("details[open]").removeAttr("open");
        });

        $(document).on('change', 'input[name="city"]', function() {
            const selectedLabel = $(this).parent().text().trim();
            $('details[open] summary').text(`Selected City : ${selectedLabel}`);
            $("details[open]").removeAttr("open");
        });

        $(document).on('change', 'input[name="time"]', function() {
            const selectedLabel = $(this).parent().text().trim();
            $('details[open] summary').text(`Selected Time : ${selectedLabel}`);
            $("details[open]").removeAttr("open");
        });

        $(document).on('click', '.calendar .day', function() {
            const day = $(this).text().trim();
            const monthyear = $('.calendar .month-name').text().trim();
            const formattedDate = `${day} ${monthyear}`;
            $('details[open] summary').text(`Selected Date : ${formattedDate}`);
            $('.calendar .day').removeClass('selected');
            $(this).addClass('selected');
            $("details[open]").removeAttr("open");
        });

    });
    </script>

</body>

</html>