<?php
include 'ageFunction.php';
include 'memberCard.php';
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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Members</title>
    <style>
        .member-card {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        .member-card img {
            width: 150px;
            height: auto;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        hr {
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <?php foreach ($group as $index => $member): ?>
		<?= displayMemberCard($member, $index); ?>
    <?php endforeach; ?>
</body>
</html>
