<?php
require 'db_connection.php';

$sql = "SELECT * FROM news_posts ORDER BY post_date DESC LIMIT 3";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Full Service Digital Agency | Cambridgeshire & Norfolk | Netmatters</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="javascript/plugins/slick/slick.css">

        <link rel="stylesheet" href="javascript/plugins/jquery-SlideOutPanel-master/dist/css/slide-out-panel.css">
        
        <link rel="stylesheet" href="css/application.css">
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
                <main>
                    <!-- Banner -->
                    <div id="banner">
                        <div class="banner-slide-item">
                            <picture class="banner-img">
                                <source srcset="images/home-YLei.webp" type="image/webp">
                                <source srcset="images/home-YLei.png" type="image/png">
                                <img src="images/home-YLei.png" class="img-cover-modern" alt="The East Of England's Leading Technology Company Norwich, Norfolk, Cambridge, North London, Essex, Hertfordshire, Enfield">
                            </picture>
                            <div class="content">
                                <div class="container content-container">
                                    <div class="text">
                                        <div class="h1 h1-long">
                                            The East Of England's Leading Technology Company
                                        </div>
                                        <p>Performance-driven digital and technology services<br>with complete transparency.</p>
                                        <a href="#" class="btn btn-wcu btn-banner darken">Why Choose Us? <i class="icon-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="banner-slide-item">
                            <picture class="banner-img">
                                <source srcset="images/home-O67Y.webp" type="image/webp">
                                <source srcset="images/home-O67Y.jpg" type="image/jpg">
                                <img src="images/home-O67Y.jpg" class="img-cover-modern" alt="Delivering expert bespoke software solutions across a range of industries.">
                            </picture>
                            <div class="content">
                                <div class="container content-container">
                                    <div class="text">
                                        <div class="h1">
                                            Bespoke Software
                                        </div>
                                        <p>Delivering expert bespoke software <br>solutions across a range of industries.</p>
                                        <a href="#" class="btn btn-bespoke btn-banner darken">Find out more <i class="icon-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="banner-slide-item">
                            <picture class="banner-img">
                                <source srcset="images/home-gay8.webp" type="image/webp">
                                <source srcset="images/home-gay8.png" type="image/png">
                                <img src="images/home-gay8.png" class="img-cover-modern" alt="Fast and cost-effective IT support services for your business">
                            </picture>
                            <div class="content">
                                <div class="container content-container">
                                    <div class="text">
                                        <div class="h1">
                                            IT Support
                                        </div>
                                        <p>Fast and cost-effective IT support <br>services for your business.</p>
                                        <a href="#" class="btn btn-it btn-banner darken">Find out more <i class="icon-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="banner-slide-item">
                            <picture class="banner-img">
                                <source srcset="images/home-6yTp.webp" type="image/webp">
                                <source srcset="images/home-6yTp.png" type="image/png">
                                <img src="images/home-6yTp.png" class="img-cover-modern" alt="Digital Marketing">
                            </picture>
                            <div class="content">
                                <div class="container content-container">
                                    <div class="text">
                                        <div class="h1">
                                            Digital Marketing
                                        </div>
                                        <p>Generating your new business through <br>results-driven marketing activities.</p>
                                        <a href="#" class="btn btn-digital btn-banner darken">Find out more <i class="icon-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="banner-slide-item">
                            <picture class="banner-img">
                                <source srcset="images/home-J8Xx.webp" type="image/webp">
                                <source srcset="images/home-J8Xx.png" type="image/png">
                                <img src="images/home-J8Xx.png" class="img-cover-modern" alt="Telecoms Services">
                            </picture>
                            <div class="content">
                                <div class="container content-container">
                                    <div class="text">
                                        <div class="h1">
                                            Telecoms Services
                                        </div>
                                        <p>A new approach to connectivity, see how <br>we can help your business.</p>
                                        <a href="#" class="btn btn-telecoms btn-banner darken">Find out more <i class="icon-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="banner-slide-item">
                            <picture class="banner-img">
                                <source srcset="images/home-K0pn.webp" type="image/webp">
                                <source srcset="images/home-K0pn.jpg" type="image/jpg">
                                <img src="images/home-K0pn.jpg" class="img-cover-modern" alt="Web Design">
                            </picture>
                            <div class="content">
                                <div class="container content-container">
                                    <div class="text">
                                        <div class="h1">
                                            Web Design
                                        </div>
                                        <p>For businesses looking to make a strong <br>and effective first impression.</p>
                                        <a href="#" class="btn btn-security btn-banner darken">Find out more <i class="icon-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="banner-slide-item">
                            <picture class="banner-img">
                                <source srcset="images/home-MSxH.webp" type="image/webp">
                                <source srcset="images/home-MSxH.png" type="image/png">
                                <img src="images/home-MSxH.png" class="img-cover-modern" alt="Cyber Security">
                            </picture>
                            <div class="content">
                                <div class="container content-container">
                                    <div class="text">
                                        <div class="h1">
                                            Cyber Security
                                        </div>
                                        <p>Keeping businesses and their customers <br>sensitive information protected.</p>
                                        <a href="#" class="btn btn-developer-course btn-banner darken">Find out more <i class="icon-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="main-content">
                        <!-- Services -->
                        <div class="container">
                            <div class="row-service">
                                <h2 class="h2-fblack"><strong>Our Services</strong></h2>
                                <div class="not-mobile service-gap"></div>
                                <h3 class="not-mobile underline"><a href="#">View Our Work <em class="icon-arrow-right"></em></a></h3>
                            </div>
                            <div class="services">
                                <div class="service-item one">
                                    <div class="software">
                                        <span class="icon">
                                            <span class="icon-apps"></span>
                                        </span>
                                        <span class="h2">
                                            Bespoke Software</span>
                                        <span class="p">Bespoke software solutions for all your business needs including integrations and reporting.</span>
                                        <span class="btn-container">
                                            <span class="btn btn-software">
                                                Read More
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="service-item two">
                                    <div class="display">
                                        <span class="icon">
                                            <span class="icon-display"></span>
                                        </span>
                                        <span class="h2">
                                            IT Support
                                        </span>
                                        <span class="p">Fully managed IT support and consultancy packages tailored to meet your exact business needs.
                                        </span>
                                        <span class="btn-container">
                                            <span class="btn btn-it">
                                                Read More
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="service-item three">
                                    <div class="digital">
                                        <span class="icon">
                                            <span class="icon-bar-graph"></span>
                                        </span>
                                        <span class="h2">
                                            Digital Marketing
                                        </span>
                                        <span class="p">
                                            Driven brand awareness &amp; ROI through creative digital marketing campaigns.
                                        </span><br>
                                        <span class="btn-container">
                                            <span class="btn btn-digital">
                                                Read More
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="service-item four">
                                    <div class="telecoms">
                                        <span class="icon">
                                            <span class="icon-phone-service"></span>
                                        </span>
                                        <span class="h2">
                                            Telecoms Services
                                        </span>
                                        <span class="p">Business telephony solutions including mobile &amp; connectivity solutions.
                                        </span>
                                        <span class="btn-container">
                                            <span class="btn btn-telecoms">
                                                Read More
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="service-item five">
                                    <div class="web">
                                        <span class="icon">
                                            <span class="icon-code"></span>
                                        </span>
                                        <span class="h2">
                                            Web Design
                                        </span>
                                        <span class="p">
                                            User-centric design for businesses looking to make a lasting impression.
                                        </span>
                                        <span class="btn-container">
                                            <span class="btn btn-web">
                                                Read More
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="service-item six">
                                    <div class="security">
                                        <span class="icon">
                                            <span class="icon-security"></span>
                                        </span>
                                        <span class="h2">
                                            Cyber Security
                                        </span>
                                        <span class="p">Prevention, testing, consultancy &amp; breach management services.
                                        </span>
                                        <span class="btn-container">
                                            <span class="btn btn-security">
                                                Read More
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="service-item seven">
                                    <div class="developer-course">
                                        <span class="icon">
                                            <span class="icon-school-cap"></span>
                                        </span>
                                        <span class="h2">
                                            Developer Training
                                        </span>
                                        <span class="p">
                                            Web design &amp; software training courses designed to secure a job in tech.</span>
                                        <span class="btn-container">
                                            <span class="btn btn-developer-course">
                                                Read More
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="center mobile-priority underline"><a href="/case-studies">View Our Work <em class="icon-arrow-right"></em></a></h3>
                        <!-- Brand partners -->
                        <div class="row-partners">
                            <img src="images/partners-top/google-partner.webp" alt="Google">
                            <img src="images/partners-top/future-50.webp" alt="Future 50">
                            <img src="images/partners-top/cyber-essentials-colour.webp" alt="Cyber Essentials">
                            <img src="images/partners-top/investing-in-future-growth.webp" alt="Investing in future growth">
                            <img src="images/partners-top/iso_27001.webp" alt="ISO">
                            <img src="images/partners-top/living_wage.webp" alt="Living Wage">
                            <img src="images/partners-top/norfolk_prohelp.webp" alt="Norfolk Prohelp">
                            <img src="images/partners-top/norfolk-carbon-charter.webp" alt="Norfolk Carbon Charter">
                            <img src="images/partners-top/PPC_logo.webp" alt="Prompt Payment Code">
                            <img src="images/partners-top/princess-royal-training.webp" alt="Princess Royal Training">
                            <img src="images/partners-top/qms.webp" alt="QMS">
                            <img src="images/partners-top/skills-of-tomorrow.webp" alt="Skills of Tomorrow">
                        </div>
                        <!-- Middle section of the body - contains information -->
                        <div class="container middle">
                            <div class="middle-item">
                                <div>
                                    <h2>Welcome To Netmatters</h2>
                                    <p><strong>Netmatters is a leading Bespoke Software, IT Support, and Digital Marketing company based in the East of England with offices in Cambridge, Wymondham, and Great Yarmouth.</strong></p>
                                    <p>We aren't tied into contracts with third-party providers, so you know that our recommendations for your business are based purely with one benefit in mind: to help improve your business with the most appropriate solutions.</p>
                                    <p>We pride ourselves on being an ethical business and have a unique business offering and cost model that ensures you get the most from our relationship in an upfront manner.</p>
                                </div>
                                <div>
                                    <a href="#" target="_blank" class="btn btn-mid-wcu darken">Why choose us? <em class="icon-arrow-right"></em></a>
                                    <a href="#" target="_blank" class="btn btn-mid-culture darken">Our culture <em class="icon-arrow-right"></em></a>
                                </div>
                            </div>
                            <div class="middle-item">
                                <div>
                                    <h2>What Our Clients Think</h2>
                                </div>
                                <div class="row row-stars">
                                    <div class="icon-star"></div>
                                    <div class="icon-star"></div>
                                    <div class="icon-star"></div>
                                    <div class="icon-star"></div>
                                    <div class="icon-star"></div>
                                </div>
                                <p class="client-quote">Netmatters stood out from the start. Great guys and very easy to work with. Both the build and digital marketing teams are clearly skilled -they know their stuff! They delivered a website to our (high!) expectations and went over and above to ensure we were satisfied clients - and we are!</p>
                                <p><span class="client-quote-author">Eleanor Bishop, Head of Marketing - <a href="#">Ashcroft Partnership LLP</a></span></p>
                                <div class="middle-btns">
                                    <a href="#" target="_blank" class="btn btn-google darken">Google Reviews <em class="icon-arrow-right"></em></a>
                                    <a href="#" target="_blank" class="btn btn-trustpilot darken">TrustPilot Reviews <em class="icon-arrow-right"></em></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Articles -->
                    <div>
                        <div class="container">
                            <div class="row-service">
                                <h2 class="h2-fblack"><strong>Latest News</strong></h2>
                                <div class="not-mobile service-gap"></div>
                                <h3 class="center underline not-mobile"><a href="#">View All <strong><em class="icon-arrow-right"></em></strong></a></h3>
                            </div>
                        </div>
                        <div class="container">
                            <div class="article-list">
                                <?php
                                if ($result->num_rows > 0) {
                                    $counter = 0; // Counter to find 3rd article
                                    while($row = $result->fetch_assoc()) {
                                        $counter++;
                                        $additionalClass = ($counter == 3) ? ' article-third' : ''; // Adds the class for the third article so it can be hidden
                                        ?>
                                        <div class="article-item<?php echo $additionalClass; ?>">
                                            <a class="article-link" href="#"></a>
                                            <a href="#" class="<?php echo strtolower($row['type']); ?> article-type" title="View all: <?php echo $row['type']; ?>"><?php echo $row['type']; ?></a>
                                            <div class="article-image">
                                                <img src="<?php echo $row['image_url']; ?>" alt="">
                                            </div>
                                            <div class="article-bottom">
                                                <h3><a href="#" class="<?php echo strtolower($row['type']); ?>"><?php echo $row['title']; ?></a><span class="article-length"> - <?php echo $row['read_time']; ?></span></h3>
                                                <p><?php echo $row['description']; ?></p>
                                                <a href="#" class="<?php echo strtolower($row['type']); ?> article-btn">Read More</a>
                                                <div class="article-info">
                                                    <div class="thumb-image">
                                                        <picture>
                                                            <img src="https://www.netmatters.co.uk/assets/images/thumbnails/article_contact_thumb/netmatters-ltd-VXAv.png" alt="<?php echo $row['author']; ?>">
                                                        </picture>
                                                    </div>
                                                    <div class="article-details">
                                                        <strong>Posted by <?php echo $row['author']; ?></strong><br><?php echo date('jS F Y', strtotime($row['post_date'])); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                } else {
                                    echo "<p>No news posts found.</p>";
                                }
                                ?>
                            </div>
                            <h3 class="center underline mobile-priority"><a href="#">View All <strong><em class="icon-arrow-right"></em></strong></a></h3>
                        </div>
                    </div>
                    <!-- Brand partners -->
                    <div class="row-partners">
                        <div>
                            <div class="logo-container">
                                <img src="images/partners-bottom/black_swan_logo.webp" alt="Black Swan Logo">
                                <div class="details">
                                    <h3>Black Swan Care Group</h3>
                                    <p>Black Swan Care Group own and manage 21 high-quality care and residential homes with a focus on putting the needs of their residents first.</p>
                                    <a class="btn btn--software" href="#">View Our Case Study <i class="fa-solid fa-arrow-right"></i></a>
                                    <div class="arrow"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="logo-container">
                                <img src="images/partners-bottom/xupes_logo.webp" alt="Xupes Logo">
                                <div class="details">
                                    <h3>Xupes</h3>
                                    <div class="arrow"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="logo-container">
                                <img src="images/partners-bottom/beat_logo.webp" alt="BEAT Logo">
                                <div class="details">
                                    <h3>BEAT</h3>
                                    <p>The UK's eating disorder charity founded in 1989.</p>
                                    <div class="arrow"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="logo-container">
                                <img src="images/partners-bottom/survey_solutions_logo.webp" alt="Survey Solutions Logo">
                                <div class="details">
                                    <h3>Survey Solutions</h3>
                                    <div class="arrow"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="logo-container">
                                <img src="images/partners-bottom/girls_day_school_trust_logob.webp" alt="GDST Logo">
                                <div class="details">
                                    <h3>GDST</h3>
                                    <p>The <a href="#">Girls' Day School Trust (GDST)</a> is the UK's leading family of 25 independent girls' schools.</p>
                                    <a class="btn btn--digital" href="#">View Our Case Study <i class="fa-solid fa-arrow-right"></i></a>
                                    <div class="arrow"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="logo-container">
                                <img src="images/partners-bottom/girl_guides_anglia_logo.webp" alt="Girl Guiding Logo">
                                <div class="details">
                                    <h3>Girl Guiding Anglia</h3>
                                    <p>Girl Guiding Anglia is part of Girlguiding, the UK's leading charity for girls and young women in the UK.</p>
                                    <a class="btn btn--it" href="#">View Our Case Study <i class="fa-solid fa-arrow-right"></i></a>
                                    <div class="arrow"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="logo-container">
                            <img src="images/partners-bottom/sweetzy_logo.webp" alt="Sweetzy Logo">
                                <div class="details">
                                    <h3>Sweetzy</h3>
                                    <p>Sweetzy are an online sweets retailer, based in Wymondham.</p>
                                    <a class="btn btn--digital" href="#">View Our Case Study <i class="fa-solid fa-arrow-right"></i></a>
                                    <div class="arrow"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="logo-container">
                            <img src="images/partners-bottom/howespercivallogo.webp" alt="Howes Percival Logo">
                                <div class="details">
                                    <h3>Howes Percival</h3>
                                    <div class="arrow"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="logo-container">
                            <img src="images/partners-bottom/ashcroftlogo_landscape_goldblack_DP60P-small.webp" alt="Ashcroft Logo">
                                <div class="details">
                                    <h3>Ashcroft Partnership LLP</h3>
                                    <p>Originally founded in 2006 as Ashcroft Anthony, they became Ashcroft Partnership LLP in 2020 and are one of the top chartered accountancy firms in Cambridge, advising entrepreneurs and families.</p>
                                    <a class="btn btn--web" href="#">View Our Case Study <i class="fa-solid fa-arrow-right"></i></a>
                                    <div class="arrow"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="logo-container">
                            <img src="images/partners-bottom/onetravellerlogo_white_figuire.webp" alt="One Traveller Logo">
                                <div class="details">
                                    <h3>One Traveller</h3>
                                    <p><a href="#">One Traveller</a>, founded in 2007, is a leading provider of solo holidays for over 50s.</p>
                                    <a class="btn btn--web" href="#">View Our Case Study <i class="fa-solid fa-arrow-right"></i></a>
                                    <div class="arrow"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="logo-container">
                            <img src="images/partners-bottom/searles_logo.webp" alt="Searles Logo">
                                <div class="details">
                                    <h3>Searles Leisure Resort</h3>
                                    <p>Searles Leisure Resort, on the beautiful North Norfolk coast, is an award-winning UK holiday resort for families.</p>
                                    <a class="btn btn--digital" href="#">View Our Case Study <i class="fa-solid fa-arrow-right"></i></a>
                                    <div class="arrow"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="logo-container">
                            <img src="images/partners-bottom/busseys_logo.webp" alt="Busseys Logo">
                                <div class="details">
                                    <h3>Busseys</h3>
                                    <p>One of the UK's leading Ford dealerships.</p>
                                    <div class="arrow"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="logo-container">
                            <img src="images/partners-bottom/crane_logo.webp" alt="Crane Garden Buildings Logo">
                                <div class="details">
                                    <h3>Crane Garden Buildings</h3>
                                    <p>Leading manufacturer and supplier of high-end garden rooms, summerhouses, workshops and sheds in the UK.</p>
                                    <div class="arrow"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <!-- Footer -->
            <div id="container">
                <?php include 'php/footer.php'; ?>
    </body>
</html>