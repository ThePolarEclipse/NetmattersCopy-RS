<?php
require 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['user-name'];
    $email = $_POST['user-email'];
    $telephone = $_POST['user-tel'];
    $company = $_POST['company'];
    $message = $_POST['user-message'];
    $marketing = isset($_POST['marketing-pref']) ? $_POST['marketing-pref'] : 0;
    
    $stmt = $conn->prepare("INSERT INTO messages (Name, Email, Telephone, Company, Message, Marketing) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $name, $email, $telephone, $company, $message, $marketing);

    if ($stmt->execute()) {
        echo '<div class="success-message" style="color: green; font-weight: bold;">Message sent successfully!</div>';
    } else {
        echo '<div class="error-message" style="color: red; font-weight: bold;">Error: ' . $stmt->error . '</div>';
    }

    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact Us | Netmatters</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="javascript/plugins/slick/slick.css">

        <link rel="stylesheet" href="javascript/plugins/jquery-SlideOutPanel-master/dist/css/slide-out-panel.css">
        
        <link rel="stylesheet" href="css\application.css">
    </head>
    <body>  
        <button type="button" class="btn-cookies btn">Manage Consent</button>
        <button type="button" class="btn-chat btn"><span class="icon-chat"></span></button>
        <div id="cookie-wrapper" style="display:none;">
            <div id="cookie-checker">
                <h3>Cookies Policy</h3>
                <p>
                    Our website uses cookies. This helps us provide you with a good experience on our website. To see what cookies we use and what they do, and to opt-in on non-essential cookies click "change settings". For a detailed explanation, click on "<a href="#">Privacy Policy</a>" otherwise click "Accept Cookies" to enter.
                </p>
                <div class="row">
                    <a class="btn btn-change">
                        Change Settings
                    </a>
                    <a class="btn btn-accept">
                        Accept Cookies
                    </a>
                </div>
            </div>
        </div>
            <?php include 'php/header.php'; ?>
            <div>
                <main id="contacts">
                    <div class="border-container">
                        <div class="container">
                            <p class="breadcrumb"><small><strong>Home</strong> / Our Offices</small></p>
                        </div>
                    </div>
                    <div class="section-head">
                        <div class="container">
                            <h1 class="our-offices">Our Offices</h1>
                        </div>
                    </div>
                    <div class="container">
                        <div class="office-list">
                            <div class="office-item cambridge">
                                <div class="image">
                                    <a href="#"><img src="images\cambridge.jpg" alt=""></a>
                                </div>
                                <div class="content">
                                    <h2><a href="#">Cambridge Office</a></h2>
                                    <p>
                                        Unit 1.31, <br>
                                        St John's Innovation Centre,<br>
                                        Cowley Road, Milton,<br>
                                        Cambridge,<br> CB4 0WS
                                    </p>
                                    <div class="tel">
                                        <a href="" class="text-web">01223 37 57 72</a>
                                    </div>
                                    <div class="view-more">
                                        <a href="#" class="btn btn-web">View More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="office-item wymondham">
                                <div class="image">
                                    <a href="#"><img src="images\wymondham.jpg" alt=""></a>
                                </div>
                                <div class="content">
                                    <h2><a href="#">Wymondham Office</a></h2>
                                    <p>
                                        Unit 15,  <br>
                                        Penfold Drive,<br>
                                        Gateway 11 Business Park,<br>
                                        Wymondham, Norfolk, <br>NR18 0WZ
                                    </p>
                                    <div class="tel">
                                        <a href="" class="text-web">01603 70 40 20</a>
                                    </div>
                                    <div class="view-more">
                                        <a href="#" class="btn btn-web">View More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="office-item yarmouth">
                                <div class="image">
                                    <a href="#"><img src="images\yarmouth.jpg" alt=""></a>
                                </div>
                                <div class="content">
                                    <h2><a href="#">Great Yarmouth Office</a></h2>
                                    <p>
                                        Suite F23,<br>
                                        Beacon Innovation Centre,<br>
                                        Beacon Park, Gorleston,<br>
                                        Great Yarmouth, Norfolk,<br> 7RA
                                    </p>
                                    <div class="tel">
                                        <a href="" class="text-web">01493 60 32 04</a>
                                    </div>
                                    <div class="view-more">
                                        <a href="#" class="btn btn-web">View More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- EMAIL SECTION -->

                        <div class="contacts">
                            <div class="dropdown-container">
                                <div class="contact-net">
                                    <p class="font500">Email us on:<br></p>
                                    <p><a href="mailto:sales@netmatters.com" class="h3 text-web scale-email">sales@netmatters.com</a></p>
                                    <p class="font500">Business hours:</p>
                                    <p class="font500">Monday - Friday 07:00 - 18:00&nbsp;</p>
                                </div>
                                <div class="out-of-hours">
                                    <div class="question out-of-hours">
                                            <details id="out-dropdown" class="details">
                                                <summary>
                                                    <h4 class="iconV-drop font500">Out of Hours IT Support</h4>
                                                </summary>
                                                <div class="details-content">
                                                    <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                                                    <p  class="font500">
                                                        Monday - Friday 18:00 - 22:00
                                                        Saturday 08:00 - 16:00<br>
                                                        Sunday 10:00 - 18:00
                                                    </p>
                                                    <p>To log a critical task, you will need to call our main line number and select Option 2 
                                                        to leave an Out of Hours&nbsp; voicemail. A technician will contact you on the number 
                                                        provided within 45 minutes of your call.&nbsp;
                                                    </p>
                                                </div>
                                            </details>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-container">
                                    <form action="contact-us.php" method="POST" id="contact-form">
                                        <div class="row row-form">
                                            <div class="users-form">
                                                <div class="form-group">
                                                    <label for="users_name" class="required">Your Name</label>
                                                    <input class="form-control" type="text" name="user-name" id="users_name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="company_name">Company Name</label>
                                                    <input class="form-control" type="text" name="company" id="company_name">
                                                </div>
                                            </div>
                                            <div class="users-form">
                                                <div class="form-group">
                                                    <label for="email" class="required">Your Email</label>
                                                    <input class="form-control" type="email" name="user-email" id="emailInput" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="telephone" class="required">Your Telephone Number</label>
                                                    <input class="form-control" type="text" name="user-tel" id="telephone" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-message">
                                            <label for="message" class="required">Message</label>
                                            <textarea class="form-control" name="user-message" cols="50" rows="10" id="message" required>Hi, I am interested in discussing Our Offices solution, could you please give me a call or send an email?</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="pretty-checkbox" for="input_checkbox">
                                                <input type="hidden" name="marketing-pref" value="0">
                                                <input type="checkbox" class="checkbox_input" id="input_checkbox" name="marketing-pref" value="1">
                                                <span class="fake-checkbox"></span>
                                                <span class="check-text">
                                                    Please tick this box if you wish to receive marketing information from us. 
                                                    Please see our
                                                    <a href="#" target="_blank" rel="noopener noreferrer">Privacy Policy</a>
                                                    for more information on how we keep your data safe.
                                                </span> 
                                            </label>
                                        </div>
                                        <div class="captcha">
                                            <span>
                                                This site is protected by reCAPTCHA and the Google 
                                                <a href="#" target="_blank" rel="noopener noreferrer"><u>Privacy Policy</u></a> and 
                                                <a href="#" target="_blank" rel="noopener noreferrer"><u>Terms of Service</u></a> apply.
                                            </span>
                                        </div>
                                        <div class="action-block">
                                            <button class="btn btn-primary" type="submit">Send Enquiry</button>
                                            <small class="helper-text">
                                                <span class="text-danger">*</span> 
                                                Fields Required
                                            </small>
                                        </div>
                                        <div id="error-message" style="color: red; display: none;"></div>
                                        <div id="success-message" style="color: green; display: none;"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <!-- Footer -->
            <?php include 'php/footer.php'; ?>
    </body>
</html>