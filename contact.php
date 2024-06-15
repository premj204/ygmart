<?php $nav = "contact";
$title = "Contact Us | YG Mart India Pvt. Ltd";
include "header.php"; ?>
<link rel="stylesheet" href="./assets/css/contactpage.css">
<section class="space">
    <div class="container">
        <div class="form">
            <div class="contact-info">
                <h3 class="title">Let's get in touch</h3>
                <p class="text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
                    dolorum adipisci recusandae praesentium dicta!
                </p>

                <div class="info">
                    <div class="information">
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i> &nbsp; &nbsp;

                        <p>Mumbai-400078, Maharashtra, India</p>
                    </div>
                    <div class="information">
                        <i class="fas fa-envelope" aria-hidden="true"></i> &nbsp; &nbsp;
                        <p>contact@ygmartindia.com</p>
                    </div>
                    <div class="information">
                        <i class="fas fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;
                        <p>+91-8355834859</p>
                    </div>
                    <div class="information">
                        <i class="fas fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;
                        <p>+91-9324083070</p>
                    </div>
                </div>

                <div class="social-media">
                    <p>Connect with us :</p>
                    <div class="social-icons">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"> <i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>
                <form class="contact-form" name="contactForm" id="contactForm" onsubmit="return validateForm(this)"
                    action="sendmail.php" method="POST">
                    <h3 class="title">Contact us</h3>
                    <div class="form-group input-container">
                        <input type="text" name="name" class="input" id="name">
                        <label for="name">Full Name</label>
                        <span class="sub">Full Name</span>
                    </div>
                    <div class="form-group input-container">
                        <input type="email" name="email" class="input" id="email">
                        <label for="email">Email</label>
                        <span class="sub">Email</span>
                    </div>
                    <div class="form-group input-container">
                        <input type="tel" name="mobile" class="input" id="mobile" onkeypress="if(this.value.length==10) return false;">
                        <label for="mobile">Phone</label>
                        <span class="sub">Phone</span>
                    </div>
                    <div class="form-group input-container textarea">
                        <textarea name="message" class="input" id="message"></textarea>
                        <label for="message">Message</label>
                        <span class="sub">Message</span>
                    </div>
                    <input type="submit" value="Send" class="btn w-100">
                </form>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>
<script src="./assets/js/form.js"></script>