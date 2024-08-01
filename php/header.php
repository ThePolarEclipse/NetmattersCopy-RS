<div id="header">
                <header class="container">
                    <div class="row">
                        <img id="home-icon" src="images/netmatters-logo.png" alt="Netmatters" class="logo">
                        <script>
                            document.getElementById("home-icon").addEventListener("click", function() {
                                window.location.href = 'index.php';
                            });
                        </script>
                        <a class="mobile" href="#"><span class="icon-phone"></span></a>
                        <button type="button" class="btn-support desktop-priority darken"><span class="icon-support">SUPPORT</span></button>
                        <button id="contactButton" type="button" class="btn-contact desktop-priority darken"><span class="icon-contact">CONTACT</span></button>
                        <script>
                            document.getElementById("contactButton").addEventListener("click", function() {
                                window.location.href = 'contact-us.php';
                            });
                        </script>
                        <form method="GET" action="#" accept-charset="UTF-8" class="search-form not-mobile">
                            <label for="search-input" class="hidden">Search:</label>
                            <input class="search-bar" placeholder="Search..." id="search-input-top" name="keyword" type="text" value="">
                            <button type="submit" class="not-mobile search-btn-big darken">
                                <span class="icon-search"></span>
                            </button>
                        </form>
<<<<<<< Updated upstream
                        <button type="button" class="btn-burger darken"><span class="icon-hamburger"></span></button>
=======
                        <button type="button" class="btn-burger"><!-- Hamburger Menu -->
                            <div class="hamburger-menu">
                                <div class="ham-bar bar-top"></div>
                                <div class="ham-bar bar-mid"></div>
                                <div class="ham-bar bar-bottom"></div>
                            </div>
                        </button>
>>>>>>> Stashed changes
                    </div>
                    <form method="GET" action="#" accept-charset="UTF-8" id="form-big" class="search-form mobile-priority">
                        <label for="search-input" class="hidden">Search:</label>
                        <input class="search-bar" placeholder="Search..." id="search-input" name="keyword" type="text" value="">
                        <button type="submit" id="search-submit" class="search-btn">
                            <span class="icon-search"></span>
                        </button>
                    </form>
                    <div class="container">
                        <ul id="header-banner">
                            <li>
                                <div class="banner-item banner-item_apps">
                                    <span class="icon-apps_colour"></span>
                                    <p><small>Bespoke</small></p>
                                    <p>software</p>
                                </div>
                                <div class="container header-sub-banner software">
                                    <h2>Our Bespoke Software Services</h2>
                                    <ul>
                                        <li class="underline icon-drop icon-drop-cog">Bespoke CRM</li>
                                        <li class="underline icon-drop icon-drop-mob">Mobile App Development</li>
                                        <li class="underline icon-drop icon-drop-download">Operational Systems</li>
                                        <li class="underline icon-drop icon-drop-cloud">Intranet Development</li>
                                        <li class="underline icon-drop icon-drop-briefcase">Business Automation</li>
                                        <li class="underline icon-drop icon-drop-folder">Bespoke Databases</li>
                                        <li class="underline icon-drop icon-drop-group">Business Central Implementation</li>
                                        <li class="underline icon-drop icon-drop-clouddown">Customer Portal Development</li>
                                        <li class="underline icon-drop icon-drop-shuffle">Software Intergrations</li>
                                        <li class="underline icon-drop icon-drop-arrows">Sharepoint Development</li>
                                        <li class="underline icon-drop icon-drop-laptop">Interent of Things (IoT) Software</li>
                                        <li class="underline icon-drop icon-drop-globe">Reporting Hub</li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="banner-item banner-item_display">
                                    <span class="icon-display_colour"></span>
                                    <p><small>It</small></p>
                                    <p>support</p>
                                </div>
                                <div class="container header-sub-banner display">
                                    <h2>Our IT Support Services</h2>
                                    <ul>
                                        <li class="underline icon-drop icon-drop-hphone">Managed IT Support</li>
                                        <li class="underline icon-drop icon-drop-cap">IT Consultancy</li>
                                        <li class="underline icon-drop icon-drop-briefcase">Business IT Support</li>
                                        <li class="underline icon-drop icon-drop-cloud">Cloud Service Provider</li>
                                        <li class="underline icon-drop icon-drop-laptop">Office 365 for Business</li>
                                        <li class="underline icon-drop icon-drop-drive">Data Backup &amp; Disaster Recovery</li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="banner-item banner-item_digital">
                                    <span class="icon-bar-graph_colour"></span>
                                    <p><small>digital</small></p>
                                    <p>marketing</p>
                                </div>
                                <div class="container header-sub-banner digital">
                                    <h2>Our Digital Marketing Services</h2>
                                    <ul>
                                        <li class="underline icon-drop icon-drop-search">Search Engine Optimisation (SEO)</li>
                                        <li class="underline icon-drop icon-drop-email">Email Marketing</li>
                                        <li class="underline icon-drop icon-drop-dollar">Pay Per Click Advertising (PPC)</li>
                                        <li class="underline icon-drop icon-drop-group">Social Media Marketing</li>
                                        <li class="underline icon-drop icon-drop-rising">Conversion Rate Optimisation (CRO)</li>
                                        <li class="underline icon-drop icon-drop-pencil">Content Marketing</li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="banner-item banner-item_telecoms">
                                    <span class="icon-phone-service_colour"></span>
                                    <p><small>telecoms</small></p>
                                    <p>services</p>
                                </div>
                                <div class="container header-sub-banner telecoms">
                                    <h2>Our Telecoms Services</h2>
                                    <ul>
                                        <li class="underline icon-drop icon-drop-ticket">Business Mobile</li>
                                        <li class="underline icon-drop icon-drop-speedometer">Business Broadband</li>
                                        <li class="underline icon-drop icon-drop-phonenoring">Hosted VoIP Provider</li>
                                        <li class="underline icon-drop icon-drop-shake">Leased Lines Provider</li>
                                        <li class="underline icon-drop icon-drop-phoneback">Business VoIP Systems</li>
                                        <li class="underline icon-drop icon-drop-phonecall">3CX Systems</li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="banner-item banner-item_web">
                                    <span class="icon-code_colour"></span>
                                    <p><small>web</small></p>
                                    <p>design</p>
                                </div>
                                <div class="container header-sub-banner web">
                                    <h2>Our Web Design Services</h2>
                                    <ul>
                                        <li class="underline icon-drop icon-drop-pencil">Bespoke Website Design</li>
                                        <li class="underline icon-drop icon-drop-megaphone">Branding &amp; Design</li>
                                        <li class="underline icon-drop icon-drop-cart">eCommerce Website Design</li>
                                        <li class="underline icon-drop icon-drop-mob">Mobile App Development</li>
                                        <li class="underline icon-drop icon-drop-display">Pay Monthly Websites</li>
                                        <li class="underline icon-drop icon-drop-cloud">Web Hosting</li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="banner-item banner-item_security">
                                    <span class="icon-security_colour"></span>
                                    <p><small>cyber</small></p>
                                    <p>security</p>
                                </div>
                                <div class="container header-sub-banner security">
                                    <h2>Our Cyber Security Services</h2>
                                    <ul>
                                        <li class="underline icon-drop icon-drop-paper">Cyber Security Assessment</li>
                                        <li class="underline icon-drop icon-drop-cap">Cyber Essentials Certification</li>
                                        <li class="underline icon-drop icon-drop-clock">Cyber Security Management</li>
                                        <li class="underline icon-drop icon-drop-shield">PCI Compliance</li>
                                        <li class="underline icon-drop icon-drop-flask">Cyber Penetration Testing</li>
                                        <li class="underline icon-drop icon-drop-padlock">Hacking Prevention</li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="banner-item banner-item_developer-course">
                                    <span class="icon-school-cap_colour"></span>
                                    <p><small>developer</small></p>
                                    <p>course</p>
                                </div>
                                <div class="container header-sub-banner developer-course">
                                    <h2>Our Developer Course Services</h2>
                                    <ul>
                                        <li class="underline icon-drop icon-drop-laptop">Train For A Career In Tech</li>
                                        <li class="underline icon-drop icon-drop-shake">Scion Collaborators</li>
                                        <li class="underline icon-drop icon-drop-code">Skills Bootcamp</li>
                                        <li class="underline icon-drop icon-drop-question">Scion Scheme Frequently Asked Questions</li>
                                    </ul>
                                </div>
                            </li>
                        
                        </ul>
                    </div>
                </header>
            </div>