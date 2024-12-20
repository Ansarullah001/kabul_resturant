<?php include "admin/connection.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="content/img/favicon.png" type="image/x-icon">
    <!-- ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <!-- css file -->
     <link rel="stylesheet" href="general.css">
    <link rel="stylesheet" href="styles.css">
    <title>Omnifood - Never Cook Again</title>
</head>
<body>
    <!-- ===========Start Narbar Start=========== -->
     <header>
        <nav class="navbar">
            <a href="#"><img src="content/img/omnifood-logo.png" alt=""></a>
            <ul class="">
                <li><a class="nav-link" href="#how-it-work">How it works</a></li>
                <li><a class="nav-link" href="#meals">Meals</a></li>
                <li><a class="nav-link" href="#testimonials">Testimonials</a></li>
                <li><a class="nav-link" href="#pricing-panel">Pricing</a></li>
                <li><a href="./admin"><button class="btn nav-btn">Login</button></a></li>
            </ul>
            <button type="button" id="navbar-expand"><ion-icon name="menu-outline" class="icon"></ion-icon></button>
        </nav>
     </header>
    <!-- ============End Narbar End============ -->

    <!-- ===========Start Hero Section========== -->
     <section class="hero">
        <div class="container hero-main">
            <div class="hero-content">
                <h1>A healthy meal delivered to your door, every single day</h1>
                <p>The smart 365-days-per-year food subscription that will make you eat healthy again. Tailored to your personal tastes and nutritional needs.</p>
                <div class="btns">
                    <a href="#meals"><button type="button" class="btn">Start eating well</button></a>
                    <button type="button" class="btn btn-light">Learn more !</button>
                </div>
                <div class="customers">
                    <div class="customer-images">
                        <img src="content/img/customers/customer-1.jpg" alt="">
                        <img src="content/img/customers/customer-2.jpg" alt="">
                        <img src="content/img/customers/customer-3.jpg" alt="">
                        <img src="content/img/customers/customer-4.jpg" alt="">
                        <img src="content/img/customers/customer-5.jpg" alt="">
                        <img src="content/img/customers/customer-6.jpg" alt="">
                    </div>
                    <span><span>250,000+</span> meals delivered last year!</span>
                </div>
            </div>
            <img src="content/img/hero.png" class="hero-img" alt="">
        </div>
     </section>
    <!-- ============END Hero Section=========== -->
    
    <!-- ===========Start Section 2=========== -->
     <section id="section-3" class="section-3">
        <h3>as featured in</h3>
        <div class="logos">
            <img src="content/img/logos/techcrunch.png" alt="">
            <img src="content/img/logos/business-insider.png" alt="">
            <img src="content/img/logos/the-new-york-times.png" alt="">
            <img src="content/img/logos/forbes.png" alt="">
            <img src="content/img/logos/usa-today.png" alt="">
        </div>
     </section>
    <!-- ============END Section 2============ -->
    
    <!-- =============Start Section how it work============= -->
    <section id="how-it-work" class="how-it-work">
        <div class="container">
            <div class="how-it-work-header headings">
                <h4 class="super-heading">HOW IT WORKS</h4>
                <h2 class="second-heading">Your daily dose of health in 3 simple steps</h2>
            </div>
            <div class="grids">
                <div class="col-1 content">
                    <h1>01</h1>
                    <h2>(BREAK FAST)</h2>
                    <p>Breakfast is the first meal of the day, typically eaten after waking up in the morning, usually within a few hours of waking.</p>
                    <br><p>It is typically consumed between 6:00 AM and 10:00 AM, depending on individual schedules</p>
                    <br></br><h4>Benefits of Breakfast:</h4>
                    <p>Boosts energy, improves concentration, kick-starts metabolism, and helps with weight management.</p>
                </div>
                <div class="col-2 image-container">
                    <img src="./content/img/gallery/gallery-1.jpg" alt="">
                    <div class="image-bg"></div>
                </div>
                <div class="col-3 image-container">
                    <img src="./content/img/gallery/gallery-2.jpg" alt="">
                    <div class="image-bg"></div>
                </div>
                <div class="col-4 content">
                    <h1>02</h1>
                    <h2>(LAUNCH)</h2>
                    <p> Lunch is the meal eaten during the middle of the day, typically between 12:00 PM and 2:00 PM.</p>
                    <p>It is often a break from work or school and serves as an opportunity to refuel the body.</p>
                    <BR></BR><h4>Benefits of Lunch:</h4>
                    <p>Maintains energy levels, helps with weight control, improves productivity, and boosts metabolism.</p>
                </div>
                <div class="col-5 content">
                    <h1>03</h1>
                    <h2>(DINNER)</h2>
                    <p> Dinner is the final meal of the day, typically consumed between 6:00 PM and 9:00 PM, after a day’s work or activities.</p>
                    <p>It is typically eaten in the evening, often with family or friends</p><br>
                    <h4>benefit of dinner </h4>
                    <p> Provides nutrients for recovery, aids in weight management, improves sleep quality, and prevents late-night overeating.</p>
                </div>
                <div class="col-6 image-container">
                    <div class="image-bg"></div>
                    <img src="./content/img/gallery/gallery-3.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- ==============End Section how it work============== -->

    <!-- ===========Start meals=========== -->
     <section id="meals" class="meals">
        <div class="container">
            <div class="meals-header headings">
                <h4 class="super-heading">MEALS</h4>
                <h2 class="second-heading">Omnifood AI chooses from 5,000+ recipes</h2>
            </div>
            <div class="meals-cards">
                <?php 
                    $query = "SELECT * FROM foods";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="card-1">
                        <img src="./images/<?= $row["image"] ?>" alt="">
                        <div class="content">
                            <!-- <span class="badge">Vegetarian</span> -->
                            <p><?= $row["name"]?></p>
                            <ul>
                                <li><ion-icon class="meal-icon" name="flame-outline"></ion-icon><span><strong><?= $row["calories"] ?></strong> calories</span></li>
                                <li><ion-icon class="meal-icon" name="restaurant-outline"></ion-icon><span>NutriScore ® <strong>74</strong></span></li>
                                <li><ion-icon class="meal-icon" name="star-outline"></ion-icon><span><strong>4.9</strong> rating (537)</span></li>
                            </ul><br><br>
                            <a href="order.php?id=<?= $row['id'] ?>">
                                <button style="background-color:var(--primary-color); width:100%;padding:1em 0px;border:none;color:white; border-radius: 1em; cursor: pointer; ">Order</button>
                            </a>
                        </div>
                    </div>
                <?php } ?>
                <!-- <div class="card-2">
                    <img src="content/img/meals/meal-2.jpg" alt="">
                    <div class="content">
                        <span class="badge">Vegan</span>
                        <span class="badge">Paleo</span>
                        <p>Avocado Salad</p>
                        <ul>
                            <li><ion-icon class="meal-icon" name="flame-outline"></ion-icon><span><strong>400</strong> calories</span></li>
                            <li><ion-icon class="meal-icon" name="restaurant-outline"></ion-icon><span>NutriScore ® <strong>92</strong></span></li>
                            <li><ion-icon class="meal-icon" name="star-outline"></ion-icon><span><strong>4.8</strong> rating (441)</span></li>
                        </ul>
                    </div>
                </div> -->
                <!-- <div class="card-3">
                    <h3 class="heading-card">Works with any diet:</h3>
                    <ul>
                        <li><ion-icon class="check-icon" name="checkmark-outline"></ion-icon><span>Vegetarian</span></li>
                        <li><ion-icon class="check-icon" name="checkmark-outline"></ion-icon><span>Vegan</span></li>
                        <li><ion-icon class="check-icon" name="checkmark-outline"></ion-icon><span>Pescatarian</span></li>
                        <li><ion-icon class="check-icon" name="checkmark-outline"></ion-icon><span>Gluten-free</span></li>
                        <li><ion-icon class="check-icon" name="checkmark-outline"></ion-icon><span>Lactose-free</span></li>
                        <li><ion-icon class="check-icon" name="checkmark-outline"></ion-icon><span>Keto</span></li>
                        <li><ion-icon class="check-icon" name="checkmark-outline"></ion-icon><span>Paleo</span></li>
                        <li><ion-icon class="check-icon" name="checkmark-outline"></ion-icon><span>Low FODMAP</span></li>
                        <li><ion-icon class="check-icon" name="checkmark-outline"></ion-icon><span>Kid-friendly</span></li>
                    </ul>
                </div> -->
            </div>
            <a href=""><p class="seee-recipes">
                See all recipes &RightArrow;
            </p></a>
        </div>
     </section>
    <!-- ============END meals============ -->

    <!-- ===========Start Gallery Section=========== -->
    <section id="testimonials" class="gallery">
        <div class="testimonials">
            <div class="gallery-header headings">
                <h4 class="super-heading">Testimonials</h4>
                <h2 class="second-heading">Once you try it, you can't go back</h2>
            </div>
            <div class="testiomns">
                <div class="item">
                    <img src="content/img/customers/dave.jpg" alt="">
                    <p>Inexpensive, healthy and great-tasting meals, without even having to order manually! It feels truly magical.</p>
                    <span>— Dave Bryson</span>
                </div>
                <div class="item">
                    <img src="content/img/customers/ben.jpg" alt="">
                    <p>The AI algorithm is crazy good, it chooses the right meals for me every time. It's amazing not to worry about food anymore!</p>
                    <span>— Ben Hadley</span>
                </div>
                <div class="item">
                    <img src="content/img/customers/steve.jpg" alt="">
                    <p>Omnifood is a life saver! I just started a company, so there's no time for cooking. I couldn't live without my daily meals now!</p>
                    <span>— Steve Miller</span>
                </div>
                <div class="item">
                    <img src="content/img/customers/hannah.jpg" alt="">
                    <p>I got Omnifood for the whole family, and it frees up so much time! Plus, everything is organic and vegan and without plastic.</p>
                    <span>— Hannah Smith</span>
                </div>
            </div>
        </div>
        <div class="gallery-images">
            <div class="gallery-item"><img src="content/img/gallery/gallery-1.jpg" alt=""></div>
            <div class="gallery-item"><img src="content/img/gallery/gallery-2.jpg" alt=""></div>
            <div class="gallery-item"><img src="content/img/gallery/gallery-3.jpg" alt=""></div>
            <div class="gallery-item"><img src="content/img/gallery/gallery-4.jpg" alt=""></div>
            <div class="gallery-item"><img src="content/img/gallery/gallery-5.jpg" alt=""></div>
            <div class="gallery-item"><img src="content/img/gallery/gallery-6.jpg" alt=""></div>
            <div class="gallery-item"><img src="content/img/gallery/gallery-7.jpg" alt=""></div>
            <div class="gallery-item"><img src="content/img/gallery/gallery-8.jpg" alt=""></div>
            <div class="gallery-item"><img src="content/img/gallery/gallery-9.jpg" alt=""></div>
            <div class="gallery-item"><img src="content/img/gallery/gallery-10.jpg" alt=""></div>
            <div class="gallery-item"><img src="content/img/gallery/gallery-11.jpg" alt=""></div>
            <div class="gallery-item"><img src="content/img/gallery/gallery-12.jpg" alt=""></div>
        </div>
    </section>
    <!-- ============END Gallery Section============ -->

    <!-- ============Start Pricing Panel Section============ -->
    <section id="pricing-panel" class="pricing-panel container">
    <div class="pricing-header headings">
        <h4 class="super-heading">pricing</h4>
        <h2 class="second-heading">Eating well without breaking the bank</h2>
    </div>
    <div class="panels">
        <div class="panel-starter">
            <h4>Starter</h4>
            <h1><span>$</span>399</h1>
            <p>per month. That's just $13 per meal!</p>
            <ul>
                <li><ion-icon class="check-icon" name="checkmark-outline"></ion-icon><span>1 meal per day</span></li>
                <li><ion-icon class="check-icon" name="checkmark-outline"></ion-icon><span>Order from 11am to 9pm</span></li>
                <li><ion-icon class="check-icon" name="checkmark-outline"></ion-icon><span>Delivery is free</span></li>
                <li><ion-icon name="close-outline"></ion-icon></li>
            </ul>
            <button type="button" class="btn">Start eating well</button>
        </div> 
        <div class="panel-complete">
            <h4>complete</h4>
            <h1><span>$</span>649</h1>
            <p>per month. That's just $11 per meal!</p>
            <ul>
                <li><ion-icon class="check-icon" name="checkmark-outline"></ion-icon><span>2 meals per day</span></li>
                <li><ion-icon class="check-icon" name="checkmark-outline"></ion-icon><span>Order 24/7</span></li>
                <li><ion-icon class="check-icon" name="checkmark-outline"></ion-icon><span>Delivery is free</span></li>
                <li><ion-icon class="check-icon" name="checkmark-outline"></ion-icon><span>Get access to latest recipes</span></li>
            </ul>
            <button type="button" class="btn">Start eating well</button>
        </div>
    </div>
    <p class="panel-footer">Prices include all applicable taxes. You can cancel at any time. Both plans include the following:</p>
    </section>
    <!-- ============Start Pricing Panel Section============ -->

    <!-- ============Start Feture Section============ -->
    <section class="feature-section container">
    <div class="feature">
        <ion-icon class="feature-icon" name="infinite-outline"></ion-icon>
        <h2>Never cook again!</h2>
        <p>Our subscriptions cover 365 days per year, even including major holidays.</p>
    </div>
    <div class="feature">
        <ion-icon class="feature-icon" name="nutrition-outline"></ion-icon>
        <h2>Local and organic</h2>
        <p>Our cooks only use local, fresh, and organic products to prepare your meals.</p>
    </div>
    <div class="feature">
        <ion-icon class="feature-icon" name="leaf-outline"></ion-icon>
        <h2>No waste</h2>
        <p>All our partners only use reusable containers to package all your meals.</p>
    </div>
    <div class="feature">
        <ion-icon class="feature-icon" name="pause-circle-outline"></ion-icon>
        <h2>Pause anytime</h2>
        <p>Going on vacation? Just pause your subscription, and we refund unused days.</p>
    </div>
    </section>
    <!-- =============End Feture Section============= -->

    <!-- =============Start Contact Section============= -->
    <section class="contact container">
    <div class="grid">
        <div class="contact-form">
            <h2 class="second-heading">Get your first meal for free!</h2>
            <p>Healthy, tasty and hassle-free meals are waiting for you. Start eating well today. You can cancel or pause anytime. And the first meal is on us!</p>
            <form action="https://formspree.io/f/xpwzwded" method="POST">
                <label>
                    <span>Full Name</span>
                    <input type="text" name="name" placeholder="John Smith">
                </label>
                <label>
                    <span>Email address</span>
                    <input type="email" name="email" placeholder="me@example.com">
                </label>
                <label>
                    <span>Where did you hear from us?</span>
                    <select name="Find us from" id="">
                        <option value="none">Please choose one option</option>
                        <option value="Friends and family">Friends and family</option>
                        <option value="YouTube Video">YouTube Video</option>
                        <option value="Podcast">Podcast</option>
                        <option value="Facebook ad">Facebook ad</option>
                        <option value="Other">Other</option>
                    </select>
                </label>
                <button type="submit" class="btn">Sign up now</button>
            </form>
        </div>  
        <img src="content/img/eating.jpg" alt="">
    </div>
    </section>
    <!-- ==============End Contact Section============== -->

    <!-- ============Start Footer Section============ -->
    <footer class="footer">
        <div class="container footer-grid">
            <div class="socials">
                <img src="content/img/omnifood-logo.png" alt="">
                <div class="links">
                    <ion-icon name="logo-facebook"></ion-icon>
                    <ion-icon name="logo-instagram"></ion-icon>
                    <ion-icon name="logo-twitter"></ion-icon>
                </div>
                <p>Copyright © 2024 by Omnifood, Inc. All rights reserved.</p>
            </div>
            <div class="contact">
                <h3>Contact us</h3>
                <p>623 Harrison St., 2nd Floor, San Francisco, CA 94107</p>
                <a href="">415-201-6370</a>
                <a href="">hello@omnifood.com</a>
            </div>
            <div class="acount">
                <h3>Account</h3>
                <a href="">Create account</a>
                <a href="">Sign in</a>
                <a href="">iOS app</a>
                <a href="">Android app</a>
            </div>
            <div class="company">
                <h3>Company</h3>
                <a href="">About Omnifood</a>
                <a href="">For Business</a>
                <a href="">Cooking partners</a>
                <a href="">Careers</a>
            </div>
            <div class="resource">
                <h3>Resource</h3>
                <a href="">Recipe directory</a>
                <a href="">Help center</a>
                <a href="">Privacy & terms</a>
            </div>
        </div>
    </footer>
    <!-- =============End Footer Section============= -->

    <script src="script.js"></script>
</body>
</html>