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
            <img src="<?php echo BASE_URL ;?>/images/banner.webp" alt="Banner" class="img-fluid rounded-4 mt-3">
        </section>
        <section>
            <div class="container pb-5 pt-4">
                <div class="row pt-lg-4">
                    <div class="col-lg-6 px-sm-5 d-none d-lg-block">
                        <img src="<?php echo BASE_URL ;?>/images/banner.webp" alt="Banner" class="img-fluid rounded-4">
                    </div>

                    <div class="col-lg-6 d-flex align-items-center justify-content-center pb-lg-4">
                        <form class="d-flex flex-column align-items-center justify-content-center pb-xl-4 gap-3">
                            <h3 class="fs-5 px-md-4 fw-medium">Fill in your details to start your journey towards a
                                pain-free
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

                        <!-- if form is submitted hide the form and show below -->

                        <div class="booking-confirmed d-none">

                            <h4 class="d-flex align-items-center gap-2 mb-3 justify-content-center"><img
                                    src="<?php echo BASE_URL;?>/images/tick.svg" alt="tick" class="img-fluid"
                                    style="width:30px;"> Consultation Confirmed!</h4>
                            <p>Thank you for booking your consultation. Details of your consultation are as follows: 
                            </p>
                            <div class="bookingdetail mb-3">
                                <div class="date">
                                    <span>Date:</span>
                                    <h4>13 Jan 2025</h4>
                                </div>
                                <div class="time">
                                    <span>Time:</span>
                                    <h4>10:30am</h4>
                                </div>
                                <div class="location">
                                    <span>Clinic Location:</span>
                                    <h4>Andheri, Mumbai</h4>
                                </div>
                            </div>
                            <p>Your journey towards a pain-free life begins Now!</p>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <dialog>
            <img src="<?php echo BASE_URL;?>/images/tick.svg" alt="tick" class="img-fluid mb-3" style="width:30px;">
            <h4>Consultation Confirmed!</h4>
            <p>Thank you for booking your consultation. Details of your consultation are as follows: 
            </p>
            <div class="bookingdetail mb-3">
                <div class="date">
                    <span>Date:</span>
                    <h4>13 Jan 2025</h4>
                </div>
                <div class="time">
                    <span>Time:</span>
                    <h4>10:30am</h4>
                </div>
                <div class="location">
                    <span>Clinic Location:</span>
                    <h4>Andheri, Mumbai</h4>
                </div>
            </div>
            <p>Your journey towards a pain-free life begins Now!</p>
            <button class="closedialog btn-prime">OK</button>
        </dialog>

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
            const today = new Date();
            today.setHours(0, 0, 0, 0);
            const firstDayOfMonth = new Date(year, month, 1);
            const lastDayOfMonth = new Date(year, month + 1, 0);
            const maxDate = new Date(today);
            maxDate.setDate(today.getDate() + 6);

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

            const firstDayOfMonthDay = firstDayOfMonth.getDay();
            const daysInMonth = lastDayOfMonth.getDate();

            for (let i = 0; i < firstDayOfMonthDay; i++) {
                const emptyCell = document.createElement("div");
                emptyCell.className = "day empty";
                daysContainer.appendChild(emptyCell);
            }

            for (let day = 1; day <= daysInMonth; day++) {
                const currentDate = new Date(year, month, day);
                const dayCell = document.createElement("div");
                dayCell.textContent = day.toString().padStart(2, "0");
                dayCell.className = "day";

                if (currentDate.getTime() === today.getTime()) {
                    dayCell.classList.add('today');
                }
                if (currentDate < today || currentDate > maxDate) {
                    dayCell.classList.add('disabled');
                }
                daysContainer.appendChild(dayCell);
            }

            container.appendChild(daysContainer);
            const footer = document.createElement("div");
            footer.className =
                "calendar-footer mt-2";
            footer.innerHTML = `
            <div style="font-size:14px; font-weight:300;">*Appointment booking only available for the next 7 days</div>
            <button class="calendar-ok  d-block ms-auto me-4 mt-3 text-prime border-0 bg-transparent">OK</button>
        `;
            container.appendChild(footer);

            header.querySelector(".prev-month").addEventListener("click", (e) => {
                e.preventDefault();
                if (!hasActiveDates) return;
                const newMonth = month === 0 ? 11 : month - 1;
                const newYear = month === 0 ? year - 1 : year;
                createCalendar(containerSelector, newYear, newMonth);
            });

            header.querySelector(".next-month").addEventListener("click", (e) => {
                e.preventDefault();
                if (!hasActiveDates) return;
                const newMonth = month === 11 ? 0 : month + 1;
                const newYear = month === 11 ? year + 1 : year;
                createCalendar(containerSelector, newYear, newMonth);
            });

            document.querySelector(".calendar-ok").addEventListener("click", (e) => {
                e.preventDefault();
                const selectedDay = $('.calendar .day.selected');
                if (!selectedDay.length) {
                    $('.calendar .day.today').click();
                    e.preventDefault();
                }
                $("details[open]").removeAttr("open");
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

        $("details").on("click", function() {
            $("details").not($(this)).removeAttr("open");
        });

        $(document).on('click', 'input[name="location"], input[name="city"], input[name="time"]', function() {
            const selectedLabel = $(this).parent().text().trim();
            const type = $(this).attr('name');
            $('details[open] summary').text(
                `Selected ${type.charAt(0).toUpperCase() + type.slice(1)} : ${selectedLabel}`);
            $("details[open]").removeAttr("open");
        });

        $(document).on('click', '.calendar .day:not(.disabled)', function() {
            const day = $(this).text().trim();
            const monthyear = $('.calendar .month-name').text().trim();
            const formattedDate = `${day} ${monthyear}`;
            $('details[open] summary').text(`Selected Date : ${formattedDate}`);
            $('.calendar .day').removeClass('selected');
            $(this).addClass('selected');
        });

        $(document).on('click', '.calendar-ok', function(e) {
            e.preventDefault();
            const selectedDay = $('.calendar .day.selected');
            if (!selectedDay.length) {
                $('.calendar .day.today').click();
                e.preventDefault();
            }
            $("details[open]").removeAttr("open");
        });

        $('.closedialog').on('click', function() {
            $('dialog')[0].close();
        });

        $(".submit").on("click", function(e) {
            e.preventDefault();
            const selectedCity = $('input[name="city"]:checked').parent().text().trim();
            const selectedLocation = $('input[name="location"]:checked').parent().text().trim();
            const selectedTime = $('input[name="time"]:checked').parent().text().trim();
            const selectedDay = $('.calendar .day.selected');
            const selectedDate = selectedDay.length ?
                `${selectedDay.text()} ${$('.calendar .month-name').text()}` : 'Today';
            $('.bookingdetail .date h4').text(selectedDate);
            $('.bookingdetail .time h4').text(selectedTime);
            $('.bookingdetail .location h4').text(`${selectedLocation}, ${selectedCity}`);
            if ($(window).width() < 768) {
                $('dialog')[0].showModal();
            } else {
                $('form').addClass('d-none');
                $('.booking-confirmed').removeClass('d-none');
            }
        });
    });
    </script>

</body>

</html>