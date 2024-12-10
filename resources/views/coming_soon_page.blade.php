<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coming Soon Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>

        body{
            margin: 0px;
        }
        .coming-soon {
            font-family: 'Poppins', sans-serif;
            background: url('asset/AdobeStock_530303855 (1) (2).webp') ;
            height: 100vh;
            display: flex;
            width: 100%;
            justify-content: center;
            align-items: center;
            color: white;
            background-size: cover;
        }

        .wrapper {
            text-align: center;

            background:rgb(0 0 0 / 42%);;
            /* border-radius: 15px; */
            width: 100%;
            height: 100%;
        }

        header img {
            width: 230px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .timer {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 30px;
        }

        .time-box {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 100px;
        }

        .time-box span {
            display: block;
            font-size: 2.5rem;
            font-weight: 600;
        }

        .time-box p {
            margin-top: 10px;
            font-weight: 300;
            font-size: 1rem;
        }

        .buttons {
            margin-top: 20px;
        }

        .btn {
            background: #FBB249;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1rem;
            margin: 0 10px;
            display: inline-block;
            transition: background 0.3s;
        }



    </style>
</head>
<body>
    <div class="coming-soon">
        <div class="wrapper">
            <header>
                <img src="asset/adcore logo-03.png" alt="WP ShopMart Logo">
            </header>
            <div class="content">
                <h1>Coming Soon</h1>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id dolor dui, dapibus gravida elit. Donec consectetuer laoreet massa. Suspendisse ultricies ultricies viverra.</p>
                <div class="timer">
                    <div class="time-box">
                        <span id="days">150</span>
                        <p>DAYS</p>
                    </div>
                    <div class="time-box">
                        <span id="hours">04</span>
                        <p>HOURS</p>
                    </div>
                    <div class="time-box">
                        <span id="minutes">06</span>
                        <p>MINUTES</p>
                    </div>
                    <div class="time-box">
                        <span id="seconds">04</span>
                        <p>SECONDS</p>
                    </div>
                </div> -->
                <div class="buttons">

                    <a href="https://adcorewestwood.com/" target="_blank" class="btn">Visit our latest Project</a>
                </div>
            </div>
            <header>
                <img src="asset/WWArtboard 1.png" alt="WP ShopMart Logo">
            </header>
        </div>

    </div>

    <script src="script.js"></script>
    <!-- <script>
        // Countdown Timer Script
const targetDate = new Date('Dec 31, 2024 23:59:59').getTime();

const countdown = setInterval(function() {
    const now = new Date().getTime();
    const distance = targetDate - now;

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById('days').innerHTML = days;
    document.getElementById('hours').innerHTML = hours;
    document.getElementById('minutes').innerHTML = minutes;
    document.getElementById('seconds').innerHTML = seconds;

    if (distance < 0) {
        clearInterval(countdown);
        document.querySelector('.timer').innerHTML = "We are live!";
    }
}, 1000);

    </script> -->
</body>
</html>
