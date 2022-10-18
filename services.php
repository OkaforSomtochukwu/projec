<?php
if (isset($_POST['submit'])) {
    $name = $_POST['customer[name]'];
    $email = $_POST['customer[email]'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
    :root {
        --primary-color-alt: rgb(83, 83, 247);
    }

    .body-container {
        width: 100%;
    }

    .choose .title {
        align-items: center;
        text-align: center;
        font-size: 50px;
    }

    .from {
        color: var(--primary-color-alt);
        text-transform: capitalize;
        font-weight: 600;
        margin-bottom: 30px;
        margin-top: 10px;
    }

    .price {
        font-size: 40px;
        font-weight: 700;
        color: var(--primary-color-alt);
        margin-bottom: 20px;
    }

    .purchase-btn {
        background: var(--primary-color-alt);
        align-items: center;
        justify-content: center;
        border-radius: 30px;
        padding: 10px;
        font-size: 18px;
        color: #fff;
        border: none;
        font-weight: 200;
        cursor: pointer;
        width: 100%;
        margin-top: 30px;
    }

    .features {
        margin-bottom: 30px;
    }

    .features ul li {
        line-height: 25px;
    }

    .hero-container,
    .hero-img,
    .hero-gradient {
        margin-bottom: 80px;
        height: 60vh;
    }

    .icon img {
        width: 200px;
    }

    .about-container {
        margin-bottom: 100px;
    }
</style>

<body>
    <div class="body-container">
        <div class="nav-container">
            <div class="navbar">
                <div class="container">
                    <a href="#" class="logo">Remember<span>That</span></a>
                    <div id="mobile-cta" class="mobile-menu"><i class="fa fa-bars"></i></div>

                    <nav>
                        <div id="mobile-exit" class="mobile-menu-exit"><i class="fa fa-times"></i></div>
                        <ul class="primary-nav">
                            <li class="current"><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="get in touch/NIIT PROJECT/index.html">Contact</a></li>
                        </ul>

                        <!-- <ul class="secondary-nav">
                            <li class="go-premium-cta"><a href="#">Login</a></li>
                        </ul> -->
                    </nav>
                </div>
            </div>
        </div>

        <div class="hero-container">
            <div class="hero-img">
                <div class="hero-gradient">
                    <div class="hero-content">
                        <h1 class="hero-txt">Our Services</h1>
                    </div>
                </div>
            </div>
        </div>


        <div class="services-slider"></div>

        <div class="choose">
            <h1 class="title">Choose your Package</h1>
            <!-- <form action="https://checkout.flutterwave.com/v3/hosted/pay" method="POST">
                <input type="text" name="name" id="name">
                <input type="email" name="email" id="email">
                <div class="cards-container">

                    <div class="card">
                        <h2 class="event_type">Anniverseries</h2>
                        <p class="from">from</p>
                        <div class="price">N550</div>
                        <div class="features">
                            <ul>
                                <li>Scouting a venue</li>
                                <li>Developing a theme</li>
                                <li>Managing your guest list</li>
                            </ul>
                        </div>
                        <button type="submit" class="purchase-btn" name="option" id="option">Purchase</button>
                        <label class="purchase-btn">
                            <input type="radio" name="option" id="option" value="550"> Purchase
                        </label>
                    </div>

                    <div class="card">
                        <h2 class="event_type">Wedding</h2>
                        <p class="from">from</p>
                        <div class="price">N1500</div>
                        <div class="features">
                            <ul>
                                <li>Scouting a venue</li>
                                <li>Developing a theme</li>
                                <li>Florists and Photographers</li>
                            </ul>
                        </div>
                        <button type="submit" class="purchase-btn" name="option" id="option">Purchase</button>
                        <label class="purchase-btn">
                            <input type="radio" name="option" id="option" value="1500"> Purchase
                        </label>
                    </div>

                    <div class="card">
                        <h2 class="event_type">Graduations</h2>
                        <p class="from">from</p>
                        <div class="price">N750</div>
                        <div class="features">
                            <ul>
                                <li>Scouting a venue</li>
                                <li>Developing a theme</li>
                                <li>Assisting with rentals</li>
                            </ul>
                        </div>
                        <button type="submit" class="purchase-btn" name="option" id="option">Purchase</button>
                        <label class="purchase-btn">
                            <input type="radio" name="option" id="option" value="750"> Purchase
                        </label>
                    </div>

                    <div class="card">
                        <h2 class="event_type">Holiday parties</h2>
                        <p class="from">from</p>
                        <div class="price">N350</div>
                        <div class="features">
                            <ul>
                                <li>Scouting a venue</li>
                                <li>Developing a theme</li>
                                <li>lorem ipssum</li>
                            </ul>
                        </div>
                        <button type="submit" class="purchase-btn" name="option" id="option">Purchase</button>
                        <label class="purchase-btn">
                            <input type="radio" name="option" id="option" value="350"> Purchase
                        </label>
                    </div>
                </div>
                <button type="submit" name="donate" class="purchase-btn">Proceed to pay</button>
            </form> -->


            <form method="POST" action="https://checkout.flutterwave.com/v3/hosted/pay">
                <form action="process.php" class="card" method="post">
                    <input type="hidden" name="public_key" value="FLWPUBK_TEST-78dc271ba448d253faaf973b86970e77-X" />
                    <input type="email" name="customer[email]" placeholder="Enter your Email" />
                    <input type="text" name="customer[name]" placeholder="Enter your username" />
                    <input type="hidden" name="tx_ref" value="bitethtx-019203" />

                    <input type="date" name="date" id="date">
                    <button class="" name="check" type="submit">Check</button>
                </form>
                <div class="cards-container">

                    <div class="card">
                        <h2 class="event_type">Anniverseries</h2>
                        <p class="from">from</p>
                        <div class="price">N55000</div>
                        <div class="features">
                            <ul>
                                <li>Scouting a venue</li>
                                <li>Developing a theme</li>
                                <li>Managing your guest list</li>
                            </ul>
                        </div>
                        <label class="purchase-btn">
                            <input type="radio" name="amount" id="option" value="550"> Purchase
                        </label>
                    </div>

                    <div class="card">
                        <h2 class="event_type">Wedding</h2>
                        <p class="from">from</p>
                        <div class="price">N950000</div>
                        <div class="features">
                            <ul>
                                <li>Scouting a venue</li>
                                <li>Developing a theme</li>
                                <li>Florists and Photographers</li>
                            </ul>
                        </div>
                        <label class="purchase-btn">
                            <input type="radio" name="amount" id="option" value="1500"> Purchase
                        </label>
                    </div>

                    <div class="card">
                        <h2 class="event_type">Graduations</h2>
                        <p class="from">from</p>
                        <div class="price">N750000</div>
                        <div class="features">
                            <ul>
                                <li>Scouting a venue</li>
                                <li>Developing a theme</li>
                                <li>Assisting with rentals</li>
                            </ul>
                        </div>
                        <label class="purchase-btn">
                            <input type="radio" name="amount" id="option" value="750"> Purchase
                        </label>
                    </div>

                    <div class="card">
                        <h2 class="event_type">Holiday parties</h2>
                        <p class="from">from</p>
                        <div class="price">N35000</div>
                        <div class="features">
                            <ul>
                                <li>Scouting a venue</li>
                                <li>Developing a theme</li>
                                <li>lorem ipssum</li>
                            </ul>
                        </div>
                        <label class="purchase-btn">
                            <input type="radio" name="amount" id="option" value="350"> Purchase
                        </label>
                    </div>
                </div>
                <input type="hidden" name="currency" value="NGN" />
                <input type="hidden" name="meta[token]" value="54" />
                <input type="hidden" name="redirect_url" value="https://demoredirect.localhost.me/" />
                <button type="submit" name="submit" id="start-payment-button">Pay Now</button>
            </form>
        </div>
    </div>

</html>