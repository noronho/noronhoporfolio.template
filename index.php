<?php

$servername = "localhost";
$name = "root";
$pass = "";
$database = "buset";
$conn = mysqli_connect($servername, $name, $pass, $database);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>NORONHO</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Tooplate">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/tooplate-ben-resume-style.css">
    <!--
Tooplate 2120 Ben Resume
https://www.tooplate.com/view/2120-ben-resume
-->
</head>

<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <a class="navbar-brand" href="#">
                NORONHO SOARES
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="#intro" class="nav-link smoothScroll">Introduction</a>
                    </li>

                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll">About Me</a>
                    </li>

                    <li class="nav-item">
                        <a href="#contact" class="nav-link smoothScroll">Contact</a>
                    </li>

                    <li class="nav-item">

                        <a href="login.php" class="nav-link smoothScroll">Login</a>
                    </li>
                </ul>



            </div>

        </div>
    </nav>


    <!-- HERO -->
    <section class="hero d-flex flex-column justify-content-center align-items-center" id="intro">

        <div class="container">
            <div class="row">

                <div class="mx-auto col-lg-5 col-md-5 col-10">
                    <img src="images/no.jpg" class="img-fluid" alt="Ben Resume HTML Template">
                </div>

                <div class="d-flex flex-column justify-content-center align-items-center col-lg-7 col-md-7 col-12">
                    <div class="hero-text">

                        <h1 class="hero-title">👋,I am NORONHO U.V.B. SOARES</h1>

                        <a href="mailto:noronho15@gmail.com?subject=Your%20Subject&body=Your%20Message" class="email-link">
                            noronho15@gmail.com
                        </a>


                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="about section-padding" id="about">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-12">
                    <h3 class="mb-4">This is Noronho's Resume</h3>

                    <p>
                        Education:
                        Bachelor of Science in Computer Science (Expected Graduation: May 2023)
                        University of XYZ, City, State

                        Relevant Coursework:

                        Data Structures and Algorithms
                        Object-Oriented Programming
                        Database Management Systems
                        Software Engineering
                        Web Development
                        Operating Systems

                        Skills:

                        Programming Languages: Java, Python, C++
                        Web Development: HTML, CSS, JavaScript, PHP
                        Database: SQL, MySQL
                        Version Control: Git
                        Problem Solving and Analytical Skills
                        Teamwork and Collaboration
                        Strong Communication Skills
                        Time Management

                        Projects:

                        E-commerce Website (2022)
                        Developed a fully functional e-commerce website using HTML, CSS, and JavaScript.
                        Implemented features such as product listing, shopping cart, and user authentication.
                        Utilized PHP and MySQL for backend development and database management.

                        Movie Recommendation System (2021)
                        Built a movie recommendation system using Python and machine learning techniques.
                        Analyzed user preferences and applied collaborative filtering algorithms to suggest personalized movie recommendations.
                        Implemented data preprocessing, feature engineering, and model evaluation.

                        Experience:
                        Intern, Software Development
                        ABC Company, City, State | Summer 2022

                        Collaborated with a team of developers to design and implement new features for a web application.
                        Assisted in debugging and resolving software defects to improve application performance.
                        Conducted unit testing and participated in code reviews to ensure code quality.

                        Technical Support Intern
                        XYZ Tech Solutions, City, State | Summer 2021

                        Provided technical support to clients by troubleshooting hardware and software issues.
                        Assisted in the installation and configuration of computer systems and software applications.
                        Documented technical procedures and created user guides for common troubleshooting scenarios.

                        Languages:

                        English (Fluent)
                        Portuguese (Native)

                        References:
                        Available upon request

                        Please note that this is just a template, and you can modify it based on your specific experiences, skills, and achievements.
                    </p>

                    <p>However, please do not re-distribute the downloadable template ZIP file on any template collection website. This is strongly prohibited. Please contact Tooplate for more information.</p>

                    <ul class="mt-4 mb-5 mb-lg-0 profile-list list-unstyled">
                        <li><strong>Full Name :</strong> Noronho U.V.B. Soares </li>

                        <li><strong>Date of Birth:</strong> 15 october 1999</li>

                        <li><strong>Website :</strong> no.com</li>

                        <li><strong>Email :</strong> noronho15@gmail.com</li>
                    </ul>
                </div>

                <div class="col-lg-5 mx-auto col-md-6 col-12">
                    <img src="images/true-agency.jpg" class="about-image img-fluid" alt="Ben's Resume HTML Template">
                    <br>
                    <br>
                    <img src="images/IMG-20221031-WA0060.jpg" class="about-image img-fluid" alt="Ben's Resume HTML Template">
                    <br>
                    <br>
                    <img src="images/IMG-20220923-WA0006.jpg" class="about-image img-fluid" alt="Ben's Resume HTML Template">
                    <br>
                    <br>
                    <img src="images/IMG-20220922-WA0044.jpg" class="about-image img-fluid" alt="Ben's Resume HTML Template">
                </div>

            </div>

        </div>
    </section>


    <!-- TESTIMONIAL -->



    <!-- FAQ -->
    <section class="faq section-padding">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-12">

                    <h3 class="mb-5">Frequently Asked Questions</h3>

                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Are those HTML templates absolutely free for any kind of usage?
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>
                                        The availability and terms of usage for HTML templates can vary depending on the source and license attached to the templates. Some HTML templates are indeed free for any kind of usage, while others may require payment or have specific restrictions on how they can be used.

                                        When using HTML templates, it is important to review the associated license or terms of use to understand any limitations or requirements. This information is typically provided by the template provider or mentioned in the template's documentation.

                                        It is recommended to carefully read and understand the terms of use to ensure compliance and to avoid any legal issues. Additionally, if the template is sourced from a marketplace or third-party website, it's important to verify the authenticity and legitimacy of the source to avoid any potential copyright infringements.

                                        If you are unsure about the specific terms of use for a particular HTML template, it is best to contact the template creator or provider directly for clarification.
                                    </p>

                                    <p>They can be used for your commercial websites.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Can I use them as a CMS theme or a part of website builder?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>
                                        Yes, you can use coding and programming to create CMS themes or incorporate them in website builders. CMS (Content Management System) themes are pre-designed templates that control the appearance and functionality of a CMS (such as WordPress, Drupal, Joomla). These themes are created using coding and programming languages such as HTML, CSS, and sometimes JavaScript.

                                        Similarly, website builders allow users to create websites without coding skills. They often have drag and drop interfaces where users can choose pre-designed templates or themes. These templates are again created using coding and programming languages.

                                        To create a CMS theme or a part of a website builder, you would typically:

                                        1. Understand the requirements: Determine what features and functionalities the theme or website builder should have.
                                        2. Design the template: Create the visual layout of the theme using HTML and CSS. This includes defining the structure, styling, and responsive behavior of the theme.
                                        3. Implement functionality: Integrate the necessary features like navigation menus, content display, forms, and interactive components using programming languages such as JavaScript or PHP.
                                        4. Test and refine: Ensure that the theme or website builder functions correctly and is user-friendly. Test it on different devices and browsers to ensure compatibility.
                                        5. Deploy and distribute: Package the theme or integrate it into the website builder platform. It can be distributed via CMS marketplaces or through the website builder itself.

                                        By following these steps, you can create CMS themes or contribute to website builders, helping others create websites easily and efficiently.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        I cannot find a suitable HTML template. Can I request new template?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>
                                        Certainly! If you cannot find a suitable HTML template, you can request a new template by following these steps:

                                        1. Search for template websites: Look for websites that offer a wide range of HTML templates. Some popular options include ThemeForest, TemplateMonster, and WrapBootstrap. These sites usually have a large collection of templates that cater to different industries and purposes.

                                        2. Browse the template categories: Explore the categories on these websites to find the type of template that suits your needs. Common categories include business, portfolio, e-commerce, blog, and landing pages. Narrow down your search by selecting the most relevant category.

                                        3. Filter and sort options: Once you have chosen a category, utilize the filtering and sorting options provided by the website. These can help you refine your search based on specific features, such as layout style, responsiveness, color schemes, or content management system compatibility.

                                        4. Preview and evaluate templates: Take the time to preview the templates you shortlist. Check if they have the desired design and layout. Ensure that the template is compatible with modern browsers and is mobile-friendly (responsive). Also, consider the level of customization offered by the template.

                                        5. Read user reviews and ratings: User reviews and ratings can provide valuable insights into the quality and usability of a template. Take the time to read through them to get a better understanding of other users' experiences with the template.

                                        6. Requesting a new template: If you are unable to find a suitable template on existing platforms, you can consider requesting a new template from professional web designers or developers. They can create a customized template tailored specifically to your needs. Websites like Upwork, Fiverr, and Freelancer can help you find professionals who offer template design services.

                                        Remember to always keep your target audience and website goals in mind when selecting or requesting a template.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Can I redistribute your templates?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>
                                        As an AI language model, I don't have any personal templates or resources. However, in general terms, the ability to redistribute templates or any other resources depends on their license terms and agreements.

                                        If you have obtained templates from a source, such as a website or a software package, it is essential to check the terms and conditions or license agreement provided by the creator or distributor. Some templates may be released under open-source licenses, allowing you to freely redistribute them. Others may have a more restrictive license, requiring you to seek permission or comply with certain conditions before redistributing them.

                                        To be on the safe side, always review the specific terms associated with the templates you intend to redistribute and follow any guidelines provided by the creators or copyright holders.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        How do I support Tooplate?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Please spread a word about Tooplate website to your colleagues and friends.</p>
                                </div>
                            </div>
                        </div>

                        <span class="faq-info-text">Please send us a message if you have anything to say. Send an email message to <strong>contact (at) tooplate (dot) com</strong></span>

                    </div>

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </section>


    <section class="contact section-padding pt-0" id="contact">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-12">
                    <form action="index.php" method="post" class="contact-form webform" role="form">

                        <div class="form-group d-flex flex-column-reverse">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">

                            <label for="name" class="webform-label">Full Name</label>
                        </div>

                        <div class="form-group d-flex flex-column-reverse">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">

                            <label for="email" class="webform-label">Your Email</label>
                        </div>

                        <div class="form-group d-flex flex-column-reverse">
                            <textarea class="form-control" rows="5" name="message" id="message" placeholder="Your Message"></textarea>

                            <label for="message" class="webform-label">Message</label>
                        </div>

                        <button type="submit" class="form-control" id="submit-button" name="submit">Send</button>
                    </form>
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "buset";
                    $conn = mysqli_connect($servername, $username, $password, $database);


                    if (isset($_POST['submit'])) {

                        mysqli_query($conn, "insert into contacto set 
                  name = '$_POST[name]',
                  email = '$_POST[email]',
                  message = '$_POST[message]'
                  
                  ");
                    }
                    ?>
                </div>

                <div class="mx-auto col-lg-4 col-md-6 col-12">
                    <h3 class="my-4 pt-4 pt-lg-0">Say hello</h3>

                    <p class="mb-1">010-020-0340</p>



                    <ul class="social-links mt-2">
                        <li><a href="https://fb.com/tooplate" rel="noopener" class="fab fa-facebook"></a></li>

                        <li><a href="#" rel="noopener" class="fab fa-instagram"></a></li>

                        <li><a href="#" rel="noopener" class="fab fa-youtube"></a></li>
                    </ul>

                    <p class="copyright-text mt-5 pt-3">Copyright &copy; 2020 Noronho Resume Page</p>

                    <p>Design: <a href="https://www.tooplate.com" title="free HTML templates" target="_blank">Tooplate</a></p>
                </div>

            </div>
        </div>
    </section>
    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>