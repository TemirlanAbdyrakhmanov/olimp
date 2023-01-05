<!-- Contact -->
<div id="contact" class="section md-padding">

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Section-header -->
            <div class="section-header text-center">
                <h2 class="title">Our Contacts</h2>
            </div>
            <!-- /Section-header -->

            <!-- contact -->
            <div class="col-sm-4">
                <div class="contact">
                    <i class="fa fa-phone"></i>
                    <h3>Contact Number</h3>
                    <p><a class="contact-tel" href="tel:+996505757757">+996 505 757 757</a></p>
                    <p><a class="contact-tel" href="tel:+996550212757">+996 550 212 757</a></p>
                </div>
            </div>
            <!-- /contact -->

            <!-- contact -->
            <div class="col-sm-4">
                <div class="contact">
                    <i class="fa fa-calendar"></i>
                    <h3>Operation Hours</h3>
                    <p>Every Day</p>
                    <p>08:00AM (GMT+6) To 02:00AM (GMT+6)</p>
                </div>
            </div>
            <!-- /contact -->

            <!-- contact -->
            <div class="col-sm-4">
                <div class="contact">
                    <i class="fa fa-map-marker"></i>
                    <h3>Адрес</h3>
                    <p>Frunze st., 255, Bishkek, Kyrgyzstan</p>
                </div>
            </div>
            <!-- /contact -->
            <div class="col-md-12">
                <hr>
            </div>
            <!-- contact form -->
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4323.037427300993!2d74.48709153415345!3d42.87635026168362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smy!4v1672755534148!5m2!1sen!2smy" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <br><br>
            </div>
            <div class="col-md-6">
                <h2 class="text-center" id="contact-form" >Feedback</h2>
                <form class="contact-form">
                <?php
                if(!isset($_SESSION['name']) && !isset($_SESSION['user_type'])) {
                ?>
                    <input type="text" name="name" class="col-md-6 input" placeholder="Your Name" required />
                    <input type="email" name="mail" class="col-md-6 input" placeholder="Your Email" required />
                    <input type="text" name="phone" class="col-md-6 input" placeholder="Your Phone Number" required />
                <?php
                }else{
                ?>
                    <input type="text" name="name" value="<?=$_SESSION['name'];?>" class="col-md-6 input" placeholder="Your Name" required />
                    <input type="email" name="mail" value="<?=$_SESSION['email'];?>" class="col-md-6 input" placeholder="Your Email" required />
                    <input type="text" name="phone" value="<?=$_SESSION['phone'];?>" class="col-md-6 input" placeholder="Your Phone Number" required />

                <?php
                }
                ?>
                    <textarea class="col-md-6 input" name="message" cols="30" rows="10" placeholder="Type in your question here..." required></textarea>
                    <button class="main-btn">Submit</button>
                </form>
                <legend>Submitted.</legend>
                <br>
            </div>
            <!-- /contact form -->

        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

</div>
<!-- /Contact -->
