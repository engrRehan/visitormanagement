<?php 
// include_once 'includes/session.php';
session_start();
include('header.php');?>

    <section class="site-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-6">
                    <h1>Contact Us</h1>
                </div>
            </div>
            <div class="row blog-entries">
                <div class="col-md-12 col-lg-8 main-content">

                    <form id="contact-form" name="contact-form" action="includes/main.php" method="POST">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" class="form-control" required >
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="company">Company</label>
                                <input type="text" id="company" name="company" class="form-control" required >
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control " required>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="phone">Phone</label>
                                <input type="email" id="phone" name="phone" class="form-control " required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="message">Write Message</label>
                                <textarea name="message" id="message" class="form-control " cols="30" rows="8" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="submit" value="Send Message" class="btn btn-primary">
                            </div>
                        </div>
                    </form>


                </div>

                <!-- END main-content -->

                <div class="col-md-12 col-lg-4 sidebar">
                    <h3>Where to find us</h3><br>
                    <div class="span12">
                        <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
                    </div>

                    <div class="span12">
                        <h2>Send mail</h2>
                        <address>
                            <strong>Hythe Window Cleaning</strong><br>
                            15 Springfield Way<br>
                            Hythe<br>
                            Kent<br>
                            United Kingdon<br>
                            CT21 5SH<br>
                            <abbr title="Phone">P:</abbr> 01234 567 890
                        </address>
                    </div>
                </div>
                <!-- END sidebar -->

            </div>
        </div>
    </section>
<script>
$(document).ready(function(){
    $('#contact-form').validate();
});
</script>
<?php include('footer.php');?>