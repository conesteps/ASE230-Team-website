<?php
include 'ageFunction.php';
include 'workExperience.php';

$group = [
    [
        'firstname' => 'Conner',
        'lastname' => 'Stephens',
        'bio' => 'I am currently a Junior at Northern Kentucky University that is majoring in cybersecurity. Some previous work experience I have includes working at a swim school, where I learned how to communicate with a team and to be incredibly aware to make sure everyone was safe. I also recently worked at an escape room, where I gained some experience in troubleshooting and IT when the computer systems that ran the rooms would have issues. I am actively searching for an internship to help gather experience in the cybersecurity field.',
        'birthdate' => '2003-12-22',
		'jobexperience' => [
			[
				'job_title' => 'Crew Member',
                'company' => 'McDonald\'s',
                'start_date' => 'September 2020',
                'end_date' => 'January 2021',
                'description' => 'Cooked various foods in the back in order to and keep food coming at a quick pace. Built burgers/sandwiches in order to keep a good pace and to fill particular customer requests. Cleaned the building to ensure food was being created in a sanitary environment.'
			],
            [
                'job_title' => 'Swim Instructor',
                'company' => 'Bear Paddle Swim School',
                'start_date' => 'January 2021',
                'end_date' => 'December 2021',
                'description' => 'Educated children on how to be safer and more comfortable in the water, as well as teaching various swimming techniques. Adapted to different children’s struggles to ensure that every child is making progress in their own way. Cleaned the building every day to ensure that customers have a good experience.'
            ],
            [
                'job_title' => 'Escape Room Worker',
                'company' => 'Sherlock\'s Escape Rooms',
                'start_date' => 'May 2023',
                'end_date' => 'January 2024',
                'description' => 'Troubleshooting technical issues with parts of the rooms, the computers used in the control room, and the cameras to ensure that everything is functioning correctly. Analyzing data to determine business traffic. 
				Adjusting network logic to maintain business functions. Implementing technical devices such as motion sensors and audio devices. Learning the set-ups of each room on a physical and technical aspect to ensure a good customer experience. 
				Instructing customers of the rules and regulations of the escape rooms so that everyone stays safe, and nothing is damaged.'
            ],
			[
				'job_title' => 'Crew Member',
                'company' => 'Raising Cane\'s',
                'start_date' => 'January 2024',
                'end_date' => 'June 2024',
                'description' => 'Worked in a fast paced environment to keep up with demand. Cooked food to optimal temperatures effeciently. Clean and close down the resturant to health standards.'
			]
		],
        'image' => 'conner.jpg',
		'email' => 'connerstephens52@gmail.com',
		'number' => '859-638-2185',
		'linkedin' => 'linkedin.com/in/conner-stephens52/',
		'github' => 'github.com/conesteps',
		'website' => 'conesteps.com'
    ],
    [
        'firstname' => 'Jeff',
        'lastname' => 'Narrows',
        'bio' => 'NOT A REAL PERSON FILLER INFORMATION',
		'birthdate' => '1997-08-14',
        'jobexperience' => [
		    [
                'job_title' => 'IT Internship',
                'company' => 'Sony',
                'start_date' => 'May 2020',
                'end_date' => 'August 2020',
                'description' => 'Worked with computers.'
            ],
            [
                'job_title' => 'Baseball Coach',
                'company' => 'Little League Baseball',
                'start_date' => 'August 2022',
                'end_date' => 'December 2023',
                'description' => 'Coached young athletes on how to play baseball.'
            ],
			[
                'job_title' => 'Accountant',
                'company' => 'Fifth Third Bank',
                'start_date' => 'December 2023',
                'end_date' => 'Present',
                'description' => 'Managing funds and paperwork for associates.'
            ]
		],
        'image' => 'jeff.jpg',
		'email' => 'jeffemail23@aol.com',
		'number' => '123-988-4310',
		'linkedin' => 'linkedin.com/in/jeffnarrows123/',
		'github' => 'github.com/jeffNar2',
		'website' => 'narrowsj.com'
    ],
    [
        'firstname' => 'Mia',
        'lastname' => 'Starr',
        'bio' => 'NOT A REAL PERSON FILLER INFORMATION',
		'birthdate' => '1999-02-18',
        'jobexperience' => [
		    [
                'job_title' => 'Crew Member',
                'company' => 'McDonald\'s',
                'start_date' => 'March 2019',
                'end_date' => 'November 2023',
                'description' => 'Took orders for customers, made food, and cleaned the store.'
            ],
            [
                'job_title' => 'Manager',
                'company' => 'McDonald\'s',
                'start_date' => 'November 2023',
                'end_date' => 'Present',
                'description' => 'Manage a resturant, traing new employees.'
            ]
		],
        'image' => 'mia.jpg',
		'email' => 'miastarr444@gmail.com',
		'number' => '123-542-7812',
		'linkedin' => 'linkedin.com/in/miastarr345/',
		'github' => 'github.com/MiaStarrr3',
		'website' => 'starr.com'
    ],
    [
        'firstname' => 'Scott',
        'lastname' => 'Summers',
        'bio' => 'NOT A REAL PERSON FILLER INFORMATION',
		'birthdate' => '2000-01-22',
        'jobexperience' => [
		    [
                'job_title' => 'Elementary School Teacher',
                'company' => 'Kenton County Public Schools',
                'start_date' => 'August 2019',
                'end_date' => 'Present',
                'description' => 'Educating youth on core educations basics such as Math and English.'
            ]
		],
        'image' => 'scott.jpg',
		'email' => 'scottcyclops1@gmail.com',
		'number' => '123-432-5465',
		'linkedin' => 'linkedin.com/in/summersscott3/',
		'github' => 'github.com/scottsummers',
		'website' => 'scottsummers.com'
    ]
];
$index = isset($_GET['index']) ? (int)$_GET['index'] : 0; 

// Check if the index exists in the array
if (isset($group[$index])) {
    $member = $group[$index];
} else {
    echo "Member not found!";
    exit;
};

?>

<head>

    <title><?= $member['firstname'] ?>'s Resume</title>


    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your name's resume">
    <meta name="author" content="Your name">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head> 

<body>
    <article class="resume-wrapper text-center position-relative">
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="<?= $member['image'] ?>" alt="<?= $member['firstname'] . ' ' . $member['lastname'] ?>" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?= $member['firstname'] . ' ' . $member['lastname'] ?></h1>
							    <div class="title mb-3"><?php echo 'Cybersecurity Analyst'; ?></div>
							    <ul class="list-unstyled">
									<li class="mb-2"><a class="text-link" href="#"><?= "Age: " . ageFinder($member['birthdate']) ?></a></li>
								    <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?= $member['email'] ?></a></li>
								    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?= $member['number'] ?></a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?= $member['linkedin'] ?></a></li>
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?= $member['github'] ?></a></li>
					                <li><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?= $member['website'] ?></a></li>
							    </ul>
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
				    <div class="resume-section-content">
					    <p class="mb-0"><?= $member['bio'] ?></p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
						    <?php
							// Include workExperience.php to display job experience
									include 'workExperience.php';
							?>
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
								        <li class="mb-2">
								            <div class="resume-skill-name">Angular</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 98%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name">React</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 94%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name">JavaScript</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        
								        <li class="mb-2">
								            <div class="resume-skill-name">Node.js</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 92%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name">HTML/CSS/SASS/LESS</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold">Others</h4>
						            <ul class="list-inline">
							            <li class="list-inline-item"><span class="badge badge-light">DevOps</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Code Review</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Git</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Unit Testing</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Wireframing</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Sketch</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Balsamiq</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">WordPress</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Shopify</span></li>
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold">MSc in Computer Science</div>
								        <div class="resume-degree-org">University College London</div>
								        <div class="resume-degree-time">2013 - 2014</div>
								    </li>
								    <li>
								        <div class="resume-degree font-weight-bold">BSc Maths and Physics</div>
								        <div class="resume-degree-org">Imperial College London</div>
								        <div class="resume-degree-time">2010 - 2013</div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
								    <li class="mb-2 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name">Award Name Lorem</div>
								        <div class="resume-award-desc">Award desc goes here, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.</div>
								    </li>
								    <li class="mb-0 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name">Award Name Ipsum</div>
								        <div class="resume-award-desc">Award desc goes here, ultricies nec, pellentesque.</div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold">English</span> <small class="text-muted font-weight-normal">(Native)</small></li>
								    <li class="mb-2 align-middle"><span class="resume-lang-name font-weight-bold">French</span> <small class="text-muted font-weight-normal">(Professional)</small></li>
								    <li><span class="resume-lang-name font-weight-bold">Spanish</span> <small class="text-muted font-weight-normal">(Professional)</small></li>
							    </ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-1">Climbing</li>
								    <li class="mb-1">Snowboarding</li>
								    <li class="mb-1">Cooking</li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4">
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image1.jpg" alt="Project 1" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 1</h5>
									<p class="card-text">Brief description of Project 1.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image2.jpg" alt="Project 2" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 2</h5>
									<p class="card-text">Brief description of Project 2.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image3.jpg" alt="Project 3" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 3</h5>
									<p class="card-text">Brief description of Project 3.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
					</div>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Conner Stephens</small>
    </footer>

    

</body>
</html> 

