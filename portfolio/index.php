<?php include "db.php"; ?>
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <section class="container home">
        <nav class="menu navbar">
            <div class="menu_logo">
                <img src="img/BrandWT.png" alt="" class="menu_logo--img" width="100" height="50">
            </div>
           
            <ul class="menu_marge">
                <li class="menu_marge--pad"><a href="" class="home-marker change">Home</a></li>
                <li class="menu_marge--pad"><a href="#about" class="about-marker">About</a></li>
                <li class="menu_marge--pad"><a href="#resume" class="resume-marker">Resume</a></li>
                <li class="menu_marge--pad"><a href="#Services" class="services-marker">Services</a></li>
                <li class="menu_marge--pad"><a href="#MySkills" class="myskills-marker">My Skills</a></li>
                <li class="menu_marge--pad"><a href="#MyProject" class="projects-marker">Projects</a></li>
                <li class="menu_marge--pad"><a href="#contact" class="contacts-marker">Contact</a></li>
            </ul>
        </nav>
        <div class="firstsec">
        <?php 

								$get_cate = "SELECT * FROM admin_users";
								$run_cate = mysqli_query($db, $get_cate);
								while($row_cate=mysqli_fetch_array($run_cate)){
									$id_admin = $row_cate['id_admin'];
									$username = $row_cate['username'];
									$domaine = $row_cate['domaine'];
									
							?>
            <div class="leftsec">
                <h1 class="active">HEY! I AM</h1>
                <h2 class=""><?php echo $username ?></h2>
                <h2 class=""> I am a <?php echo $domaine ?></h2>
            </div>
            <?php
                                }
                                ?>
            <div class="rightsec">
                <img src="img/myimg.png" alt="" class="rightsec_img">
            </div>
        </div>
    </section>
    <section class="container about" id="about">
        <div class="firstsec">
            <div class="rightsec">
                <img src="img/myimg.png" alt="" class="rightsec_img chan">
            </div>
            <?php 

								$get_cate = "SELECT * FROM about";
								$run_cate = mysqli_query($db, $get_cate);
								while($row_cate=mysqli_fetch_array($run_cate)){
									$id_admin = $row_cate['id_about'];
									$about_name = $row_cate['about_name'];
									$about_desc = $row_cate['about_desc'];
									$about_date = $row_cate['about_date'];
									$about_email = $row_cate['about_email'];
									$about_address = $row_cate['about_address'];
									$about_number = $row_cate['about_number'];
									$about_project = $row_cate['about_project'];
									
							?>
            <div class="leftsec2 mode">
                <h1 class="">About Me</h1>
                <h2 class=""><?php echo $about_desc ?></h2>
                <ul  >
                    <li class="flexes"><span>Name:</span>
                        <span><?php echo $about_name ?></span></li><br>
                    <li class="flexes"><span>Date of birth:</span>
                        <span><?php echo $about_date ?></span></li><br>
                    <li class="flexes"><span>Address:</span>
                        <span><?php echo $about_address ?></span></li><br>
                    <li class="flexes"><span>Email:</span>
                        <span><?php echo $about_email ?></span></li><br>
                    <li class="flexes"><span>Phone:</span>
                        <span><?php echo $about_number ?></span></li>
                    
                    
                </ul>
                
                <br>
                <h1><span class="active"> <?php echo $about_project  ?> </span>Project complete</h1>
                
            </div>
            <?php
                                }
                                ?>
            
        </div>
    </section>
    <section class="container resumes" id="resume">
    <?php 
								global $db;

								$get_cate = "SELECT * FROM resumes";
								$run_cate = mysqli_query($db, $get_cate);
								while($row_cate=mysqli_fetch_array($run_cate)){
									$id_slide = $row_cate['id_resume'];
									$resume_date = $row_cate['resume_date'];
									$resume_title = $row_cate['resume_title'];
									$resume_info = $row_cate['resume_info'];
									$resume_desc = $row_cate['resume_desc'];
							?>
        <div class="resume">
            <h1>Resume</h1>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic <br> country, in which roasted parts of sentences fly into your mouth.</p>
        </div>
        <div class="res">
            <div class="res_info">
                <h1 class="active"><?php echo $resume_date ?></h1>
                <h1><?php echo $resume_title ?></h1>
                <h5><?php echo $resume_info ?></h5>
                <p><?php echo $resume_desc ?></p>
            </div>
            
           
        </div>
        
        <?php 
            }
        ?>
    </section>
    <section class="container services" id="Services">
        <div class="resume">
            <h1>Services</h1>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
        </div>
        
        <div class="ress">
        <?php 
								global $db;

								$get_cate = "SELECT * FROM services";
								$run_cate = mysqli_query($db, $get_cate);
								while($row_cate=mysqli_fetch_array($run_cate)){
									$id_services = $row_cate['id_services'];
									$services_title = $row_cate['services_title'];
									$services_icone = $row_cate['services_icone'];
							?>
            <div class="ress_info">
                <h1 class="active"><i></i></h1>
                <h4><?php echo $services_title ?></h1>
                    <p class="ress_info--par"></p>

            </div>   
            <?php 
            }
        ?>
        </div>
        

    </section>
    <section class="container myskills" id="MySkills">
        <div class="resume">
            <h1>My Skills</h1>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>
        </div>
        <div class="flexe">
                            <?php 
								global $db;

								$get_cate = "SELECT * FROM skills";
								$run_cate = mysqli_query($db, $get_cate);
								while($row_cate=mysqli_fetch_array($run_cate)){
									$id_skills = $row_cate['id_skills'];
									$skills_title = $row_cate['skills_title'];
									$skills_por = $row_cate['skills_por'];
							?>
            <div class="skills">
                
                <!-- skill -->
                <div class="skill">
                <!-- title -->
                    <div class="skill-title">
                    <?php echo $skills_title ?>
                    </div>
                    <!-- bar -->
                    <div class="skill-bar" data-bar="<?php echo $skills_por ?>">
                        <span></span>
                    </div>
                </div>
                <!-- #skill -->
    
            </div>
            <?php 
            }
        ?>
        </div>
        

    </section>
    <section class="container projects" id="MyProject">
        <div class="resume">
            <h1>Our Projects</h1>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>
        </div>
        
        <div class="project">
        <?php 
								global $db;

								$get_cate = "SELECT * FROM project";
								$run_cate = mysqli_query($db, $get_cate);
								while($row_cate=mysqli_fetch_array($run_cate)){
									$id_project = $row_cate['id_project'];
									$project_img = $row_cate['project_img'];
									$project_lien = $row_cate['project_lien'];
									$project_title = $row_cate['project_title'];
									$project_lang = $row_cate['project_lang'];
							?>
            <div class="project_pro">
                <img src="img/<?php echo $project_img ?>" alt="" width="250" height="250">
                <div class="pro_icon">
                <a href="<?php echo $project_lien ?>"><i class="fa fa-code"></i></a>
                </div>
                <h2><?php echo $project_title ?></h2>
                <H5><?php echo $project_lang ?></H5>
            </div>
            <?php 
            }
        ?>
        </div>
    </section>
    <section class="container contacts" id="contact">
        <div class="resume">
            <h1>Contact Me</h1>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>
        </div>
        
        <div class="contactt">
            <h2 class="contactt_title"><i class="fa fa-at"></i>: Abderrahimbounaga60@gmail.com</h2>
            <h2 class="contactt_title"><i class="fa fa-phone"></i>: +212631577668</h2>
            <h2 class="contactt_title"><i class="fa fa-linkedin"></i></i>: <a href="https://www.linkedin.com/in/abderrahim-bounaga-bb2751198/">www.linkedin.com/abderrahim-bounaga</a></h2>
        </div>
    
    </section>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>