<?php include 'header.php'; ?>
<!-- BREADCRUMB AREA START -->

<?php
include 'connection.php';

function get_safe_value($db,$str)
{
    if($str!='')
    {
        $str=trim($str);
        return mysqli_real_escape_string($db,$str);
    }
}

if(isset($_POST['submit']))
{
    $name=get_safe_value($db,$_POST['name']);
    $email=get_safe_value($db,$_POST['email']);
    $service=get_safe_value($db,$_POST['service']);
    $phone=get_safe_value($db,$_POST['phone']);
    $message=get_safe_value($db,$_POST['message']);

    $sql=mysqli_query($db,"insert into contact_us(name,email,subject,phone,message,status) values('$name','$email','$service','$phone','$message','0')");

    if($sql)
    {
        echo " <div class='alert alert-success'>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                            <strong>Added Successfully!</strong>
                        </div>";
    }
}
?>
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Contact Us</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- CONTACT ADDRESS AREA START -->
    <div class="ltn__contact-address-area mb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="img/icons/10.png" alt="Icon Image">
                        </div>
                        <h3>Email Address</h3>
                        <p>businessdevelopment@bbproperties.com <br></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="img/icons/11.png" alt="Icon Image">
                        </div>
                        <h3>Phone Number</h3>
                        <p>+0123-456789 <br> +987-6543210</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="img/icons/12.png" alt="Icon Image">
                        </div>
                        <h3>Office Address</h3>
                        <p>2,13th East Cross Road, Gandhi Nagar,<br>
                            Vellore - 632 006 <br></p>
                           
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT ADDRESS AREA END -->

    <!-- CONTACT MESSAGE AREA START -->
    <div class="ltn__contact-message-area mb-120 mb--100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__form-box contact-form-box box-shadow white-bg">
                        <h4 class="title-2">Get A Quote</h4>
                        <form id="contact-form" action=""  enctype="multipart/form-data" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-item input-item-name ltn__custom-icon">
                                        <input type="text" name="name" id="name" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-email ltn__custom-icon">
                                        <input type="email" name="email"  id="email" placeholder="Enter email address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item">
                                        <select class="nice-select" name="service" id="service">
                                            <option>Select Service Type</option>
                                            <option>Property Management </option>
                                            <option>Mortgage Service </option>
                                            <option>Consulting Service</option>
                                            <option>Home Buying</option>
                                            <option>Home Selling</option>
                                            <option>Escrow Services</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-phone ltn__custom-icon">
                                        <input type="text" name="phone" id="phone" placeholder="Enter phone number">
                                    </div>
                                </div>
                            </div>
                            <div class="input-item input-item-textarea ltn__custom-icon">
                                <textarea name="message" id="message" placeholder="Enter message"></textarea>
                            </div>
                            <div class="btn-wrapper mt-0">
                                <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit"  name="submit" >SUBMIT</button>
                            </div>
                            <p class="form-messege mb-0 mt-20"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT MESSAGE AREA END -->
<br>
<br>
<br><br><br>
    <!-- GOOGLE MAP AREA START -->
    <div class="google-map mb-120">

        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15553.291211151594!2d79.1404583!3d12.9511842!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe672fc84805b1929!2sB%26B%20Developers%20%26%20Builders%20Private%20Limited!5e0!3m2!1sen!2sin!4v1670490845157!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    </div>
    <!-- GOOGLE MAP AREA END -->
    <?php include 'footer.php'; ?>
