<?php
global $submitresp;
global $formstat;
$servername = "127.0.0.1";
$username = "root";
$password = "collegesucks!@";
$dbname = "nsp";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
   if(isset($_POST["contact_name"], $_POST["contact_email"], $_POST["contact_message"])){
    
    
    $stmt = $conn->prepare("INSERT INTO contact_us (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $_POST["contact_name"], $_POST["contact_email"], $_POST["contact_message"]);
    if ($stmt->execute()) {
        $submitresp = "Form Submitted Successfully";
    $formstat = TRUE;
    } else {
        $submitresp = "Error Submitting the form";
    $formstat = TRUE;
    }
    
    $stmt->close();
    $conn->close();


   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Poornima Placement office</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">   
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">       
    <link rel="stylesheet" href="css/bootstrap.min.css">                                 
    <link rel="stylesheet" href="css/magnific-popup.css">                                
    <link rel="stylesheet" href="css/templatemo-style.css">                             

   
      </head>
      
      <body>
        <div class="container-fluid">

            <section id="welcome" class="tm-content-box tm-banner margin-b-10">
                <div class="tm-banner-inner">
                    <h1 class="tm-banner-title">Poornima Placements</h1>                        
                </div>                    
            </section>

            <div class="tm-body">
                <div class="tm-sidebar">
                    <nav class="tm-main-nav">
                        <ul class="tm-main-nav-ul">
                            <li class="tm-nav-item"><a href="#welcome" class="tm-nav-item-link tm-button">
                                <i class="fa fa-smile-o tm-nav-fa"></i>Welcome</a>
                            </li>
                            <li class="tm-nav-item"><a href="#gallery" class="tm-nav-item-link tm-button">
                                <i class="fa fa-image tm-nav-fa"></i>Companies</a>
                            </li>
                            <li class="tm-nav-item"><a href="#services" class="tm-nav-item-link tm-button">
                                <i class="fa fa-tasks tm-nav-fa"></i>Apply Now</a>
                            </li>
                            <li class="tm-nav-item"><a href="#about" class="tm-nav-item-link tm-button">
                                <i class="fa fa-sitemap tm-nav-fa"></i>About Us</a>
                            </li>
                            <li class="tm-nav-item"><a href="#contact" class="tm-nav-item-link tm-button">
                                <i class="fa fa-envelope-o tm-nav-fa"></i>Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                    <br>
                    <nav>
                        <h2 style="text-align: center;">Congratulations</h2>
                        <marquee width="354px" direction="up" height="400apx" style="text-align: center;" onmouseover="this.stop();" onmouseout="this.start();">
                            <ul>
                            <?php 
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }
                            $sql = "SELECT details FROM selections";
                            $result = $conn->query($sql);
                            
                            // Check if there are any rows returned
                            if ($result->num_rows > 0) {
                                echo "<ul>";
                                // Loop through each row and display the data
                                while ($row = $result->fetch_assoc()) {
                                    echo "<li>" . $row["details"] . "</li>";
                                }
                                echo "</ul>";
                            } else {
                                echo "No data found";
                            }
                            
                            // Close the database connection
                            $conn->close();
                            
                            ?>
                        </ul>
                        </marquee>

                    
                    </nav>
                    <br>
                    <nav>
                        <h2 style="text-align: center;">Notification</h2>
                        <marquee width="354px" direction="up" height="350apx" style="text-align: center;" onmouseover="this.stop();" onmouseout="this.start();">
                            <?php 
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }
                            $sql = "SELECT details FROM selections";
                            $result = $conn->query($sql);
                            
                            // Check if there are any rows returned
                            if ($result->num_rows > 0) {
                                echo "<ul>";
                                // Loop through each row and display the data
                                while ($row = $result->fetch_assoc()) {
                                    echo "<li>" . $row["details"] . "</li>";
                                }
                                echo "</ul>";
                            } else {
                                echo "No data found";
                            }
                            
                            // Close the database connection
                            $conn->close();
                            
                            ?>
                        </marquee>

                    
                    </nav>
                </div>
                
                <div class="tm-main-content">
                    
                    <div class="tm-content-box tm-content-box-home">                        
                        <img src="images/bg.jpeg" alt="Image 1" class="img-fluid tm-welcome-img">                        
                        <div class="tm-welcome-boxes-container">
                            <div class="tm-welcome-box">
                                <div class="tm-welcome-text">
                                    <h2 class="tm-section-title">Present Companies in campus</h2>
                                    <p>You check now which company present in campus and get to be all information about company.</p>    
                                </div>                            
                                <a href="#gallery" class="tm-welcome-link tm-button">See Now</a>
                            </div>
                            <div class="tm-welcome-box">
                                <div class="tm-welcome-text">
                                    <h2 class="tm-section-title">Companies Detail for Hiring</h2>
                                    <p>All details should be provide by company for hiring pourpuse . Student get information for apply in comapny .</p>    
                                </div>                            
                                <a href="#services" class="tm-welcome-link tm-button">See Now</a>
                            </div>
                        </div>
                    </div>
                        
                    <div id="gallery" class="tm-content-box">                        
                        <div class="grid tm-gallery">
                            <figure class="effect-bubba">
                                <img src="images/google1.jpg" alt="Image 8" class="img-fluid">
                                <figcaption>
                                    <h2><span>Google</span></h2>
                                    <p>Multinational technology company</p>
                                    <a href="https://www.google.co.in/">View more</a>
                                </figcaption>
                            </figure>

                            <figure class="effect-bubba">
                                <img src="images/msna.jpeg" alt="Image 7" class="img-fluid">
                                <figcaption>
                                    <h2> <span>Apple</span></h2>
                                    <p>Apple is the technology company </p>
                                    <a href="https://www.apple.com/in/?afid=p238%7CsKpNfCaON-dc_mtid_187079nc38483_pcrid_634106874239_pgrid_109516736099_pntwk_g_pchan__pexid__&cid=aos-IN-kwgo-brand--slid---product-">View more</a>
                                </figcaption>
                            </figure>

                            <figure class="effect-bubba">
                                <img src="images/micro.jpg" alt="Image 5" class="img-fluid">
                                <figcaption>
                                    <h2> <span>Microsoft</span></h2>
                                    <p> product and solution support services</p>
                                    <a href="https://www.microsoft.com/en-in">View more</a>
                                </figcaption>
                            </figure>

                            <figure class="effect-bubba">
                                <img src="images/tesla.jpeg" alt="Image 3" class="img-fluid">
                                <figcaption>
                                    <h2> <span>Tesla</span></h2>
                                    <p> manufacturer of electric automobiles Company</p>
                                    <a href="https://www.tesla.com/">View more</a>
                                </figcaption>
                            </figure>



                            <figure class="effect-bubba">
                                <img src="images/852.jpg" alt="Image 3" class="img-fluid">
                                <figcaption>
                                    <h2> <span>Amazon</span></h2>
                                    <p> Home service selling  Company</p>
                                    <a href="https://www.amazon.com/gp/navigation-country/select-country.">View more</a>
                                </figcaption>
                            </figure>


                            <figure class="effect-bubba">
                                <img src="images/lngzVJoj_400x400.jpg" alt="Image 3" class="img-fluid">
                                <figcaption>
                                    <h2> <span>Local Eyes</span></h2>
                                    <p> Communication service provide company </p>
                                    <a href="https://localeyes.in/">View more</a>
                                </figcaption>
                            </figure>
                                                           
                        </div>
                    </div>

                    <div id="services" class="tm-content-box tm-gray-bg tm-services">

                        <div class="tm-services-img-container">
                            <img src="https://media.discordapp.net/attachments/994237473460854804/1042129439389138984/unknown.png?width=450&height=900" alt="Green Field" class="img-fluid tm-services-img">    
                        </div> 
                            
                        <div class="tm-box-pad tm-services-description-container">
                            <h2 class="tm-section-title">Apply Now</h2>
                            <marquee width="60%" direction="up" height="450px" onmouseover="this.stop();" onmouseout="this.start();">
                            <?php 
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }
                            $sql = "SELECT details FROM selections";
                            $result = $conn->query($sql);
                            
                            // Check if there are any rows returned
                            if ($result->num_rows > 0) {
                                echo "<ul>";
                                // Loop through each row and display the data
                                while ($row = $result->fetch_assoc()) {
                                    echo "<li>" . $row["details"] . "</li>";
                                }
                                echo "</ul>";
                            } else {
                                echo "No data found";
                            }
                            
                            // Close the database connection
                            $conn->close();
                            
                            ?>

                                </marquee>
                        </div>                                              
                        
                    </div>

                    
                    <div id="about" class="tm-content-box">
                        <div class="tm-box-pad tm-bordered-box">
                            <h2 class="tm-section-title">History Of Poornima</h2>
                            <p>Our vision is to create knowledge based society with scientific temper, team spirit and dignity of labor to face global competitive challenges.

                                Our mission is to evolve and develop skill based systems for effective delivery of knowledge so as to equip young professionals with dedication and commitment to excellence in all spheres of life.
                                
                                We believe in providing quality education through faculty development, updating of facilities and continual improvement for meeting norms laid down by AICTE, keeping the stakeholders satisfied.</p>
                            <a href="https://www.poornima.org/about-us/history-of-poornima" class="tm-button tm-button-normal" target="_blank">Read More</a>
                        </div>
                        <div class="tm-flex">
                            <div class="tm-purple-bg tm-box-pad tm-bordered-box tm-no-border-top">
                                <h2 class="tm-section-title">Chairman Message</h2>
                                <p>We recognize the abilities of our students very well and educate and prepare them to harness their potential and to grow and evolve into successful professionals.</p>
                            </div>
                            <div class="tm-gray-bg tm-box-pad tm-bordered-box tm-no-border-top">
                                <h2 class="tm-section-title">Our Philosophy</h2>
                                <p>Our vision is to create knowledge based society with scientific temper, team spirit and dignity of labor to face global competitive challenges.</p>
                            </div>    
                        </div>                        
                    </div>

                    <section id="contact" class="tm-content-box">

                        <div class="tm-flex">
                            <div style="width: 100%;" class="tm-contact-left-half tm-gray-bg">
                                <div class="tm-contact-inner-pad">
                                    <h2 class="tm-section-title">Contact Us</h2>
                                    <form action="index.php#contact" method="post" class="contact-form">

                                        <div class="form-group">
                                            <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                                        </div>
                                        <div class="form-group">
                                            <textarea id="contact_message" name="contact_message" class="form-control" rows="9" placeholder="Message" required></textarea>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary pull-xs-right tm-button tm-button-normal" <?php if($formstat) echo "hidden='true'";?>>Submit</button>
                                        <p><?php echo $submitresp;?></p>

                                    </form>
                                </div>                                
                            </div>

                            <div style="width:auto;" class="tm-contact-right-half tm-purple-bg">
                                <div class="tm-address-box">
                                    <h2 class="tm-section-title">Our Location</h2>
                                    <address>Poornima Institute of Engineering and Technology ISI - 2, Poornima Marg, Sitapura, Jaipur, Rajasthan 302022
                                    </address>    
                                </div>                                
                                <div id="google-map" style="position: relative; overflow: hidden;">
                                    <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                       <div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                          
                                          
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3562.2661704535194!2d75.84818715023573!3d26.76778417267639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396dc91e898380fd%3A0xeee859ae1f1b64b0!2sPoornima%20Institute%20of%20Engineering%20and%20Technology!5e0!3m2!1sen!2sin!4v1668529773080!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                          
                                       </div>
                                    </div>
                                 </div>
                        
                    </section>  

                   

                </div>
            </div>             
        </div>
        <footer class="tm-footer">
            <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                <tbody>
                   <tr>
                      <td align="center" style="padding:0;Margin:0;padding-bottom:10px;padding-top:15px;font-size:0">
                         <table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                            <tbody>
                               <tr>
                                  <td style="padding:0;Margin:0;border-bottom:1px solid #999999;background:none;height:1px;width:100%;margin:0px"></td>
                               </tr>
                            </tbody>
                         </table>
                      </td>
                   </tr>
                   
                   <tr>
                      <td align="center" style="padding:0;Margin:0;padding-top:10px;padding-bottom:10px;font-size:0">
                         <table cellpadding="0" cellspacing="0" class="es-table-not-adapt es-social" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                            <tbody>
                               <tr>
                                  <td align="center" valign="top" style="padding:0;Margin:0;padding-right:20px"><a target="_blank" href="https://facebook.com/piet_jaipur" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#FFFFFF;font-size:14px"><img title="Facebook" src="https://tlr.stripocdn.email/content/assets/img/social-icons/logo-colored/facebook-logo-colored.png" alt="Fb" width="24" height="24" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"></a></td>
                                  <td align="center" valign="top" style="padding:0;Margin:0;padding-right:20px"><a target="_blank" href="https://twitter.com/piet_jaipur" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#FFFFFF;font-size:14px"><img title="Twitter" src="https://tlr.stripocdn.email/content/assets/img/social-icons/logo-colored/twitter-logo-colored.png" alt="Tw" width="24" height="24" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"></a></td>
                                  <td align="center" valign="top" style="padding:0;Margin:0;padding-right:20px"><a target="_blank" href="https://instagram.com/piet_jaipur" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#FFFFFF;font-size:14px"><img title="Instagram" src="https://tlr.stripocdn.email/content/assets/img/social-icons/logo-colored/instagram-logo-colored.png" alt="Inst" width="24" height="24" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"></a></td>
                                  <td align="center" valign="top" style="padding:0;Margin:0"><a target="_blank" href="https://youtube.com/piet_jaipur" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#FFFFFF;font-size:14px"><img title="Youtube" src="https://tlr.stripocdn.email/content/assets/img/social-icons/logo-colored/youtube-logo-colored.png" alt="Yt" width="24" height="24" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"></a></td>
                               </tr>
                            </tbody>
                         </table>
                      </td>
                   </tr>
                   
                </tbody>
             </table>
            <p class="text-xs-center"> Designed & Devloped by <a href="https://github.com/iamkunal9" target="_blank">Kunal</a> and <a href="https://github.com/Manvendra200125" target="_blank">Manvendra</a> | Copyright &copy; 2022 PIET Jaipur</p>
        </footer>
        
        
        <script src="js/jquery-1.11.3.min.js"></script>             
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> 
        <script src="js/jquery.magnific-popup.min.js"></script>     
        <script src="js/jquery.singlePageNav.min.js"></script>      
        

        

    </body>
    </html>