<a href="https://api.whatsapp.com/send?phone=918451846155&text=Hello%20YG%20Mart%20India%20Pvt.%20Ltd" class="float"
    target="_blank">
    <i class="fa fa-whatsapp my-float" aria-hidden="true"></i>
</a>
<a id="top_bottom_button"></a>
<footer class="footer">
    <div class="container">
        <div class="row text-left">
            <div class="col-md-4">
                <div class="footer__about">
                    <div class="ft_logo"> <h4>YG Mart India Pvt. Ltd</h4></div>
                    <p>You are now a part of the opportunity of the millennium. Company is an exciting "People
                        Business".
                        A business that has the potential to turn your dreams into reality. As you build your business,
                        you will establish lifelong friendship and develop support systems unparalleled in any other
                        business.</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="footer__widget">
                    <h6>Quick Link</h6>
                    <ul class="p-0">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="business.php">Business</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="footer__widget">
                    <h6>Kit</h6>
                    <ul class="p-0">
                    <li><a href="paydirect-card.php">PayDirect Card</a></li>
                        <li><a href="studentn-card.php">Student Prepaid Card</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60302.67383377029!2d72.8771070578077!3d19.155105108629225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b815b4b0b98f%3A0xc7c6c09470d90d5e!2sMumbai%2C%20Maharashtra%20400078!5e0!3m2!1sen!2sin!4v1714381460450!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center text-white">
                <div class="footer__copyright__text">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <p>Copyright © <script> document.write(new Date().getFullYear());</script> 
                    All rights reserved | Design by <a href="https://mobisoftseo.com/" class="text-white" target="_blank">Mobisoftseo
                            Technologies</a>
                    </p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </div>
</footer>






                


















<script src="./assets/js/jquery-3.7.1.min.js"></script>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="./assets/js/fontawesome.js"></script>
<script src="./assets/js/javascript.js"></script>
<script>
const inputs = document.querySelectorAll(".input");

function focusFunc() {
    let parent = this.parentNode;
    parent.classList.add("focus");
}

function blurFunc() {
    let parent = this.parentNode;
    if (this.value == "") {
        parent.classList.remove("focus");
    }
}

inputs.forEach((input) => {
    input.addEventListener("focus", focusFunc);
    input.addEventListener("blur", blurFunc);
});
</script>
</body>

</html>