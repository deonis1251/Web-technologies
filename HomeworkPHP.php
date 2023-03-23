<?php
$name = "Denis";
$profecion = "BI-analitic";
$city = "Rostov-on-Rostov, Russia";
$mail = "denis_gulbin@mail.ru";
$phone = +79889992299;
$skills = 
	[
    	'name' => ['Фотошоп', 'Иллюстратор', 'Медиа', 'Танцы'],
    	'percent' => [30, 70, 40, 57]  
	];
$workexperience = 
	[
    	'header' => ['Front End Developer', 'Web Developer / something.com', 'Graphic Designer / designsomething.com'],
        'date' => ['Jan 2015 - <span class="w3-tag w3-teal w3-round">Current', 'Mar 2012 - Dec 2014', 'Jun 2010 - Mar 2012'],
        'description' => ['Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.', 'Consectetur adipisicing elit. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.']
    ];
$education =
	[
    	'place' => ['gb.ru', 'London Business School', 'School of Coding'],
        'date' => ['Forever', '2013 - 2015', '2010 - 2013'],
        'description' => ['Web Development! All I need to know in one place', 'Master Degree', 'Bachelor Degree']
	];
$language = 
	[
    	'name' => [Russian, Enlish],
        'percent' => [89, 56]
	];
$ageYears = 2023-1998;
$ageDays = (2023-1998)*365;
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}
    </style>
  </head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2><?php echo $name ?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $profecion ?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $city ?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $mail ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $phone ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $ageYears ?> years (<?php echo $ageDays?> days)</p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
          <?php for($i=0; $i<= count($skills) ; $i++): ?>
          <p><?php echo $skills['name'][$i]; ?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills['percent'][$i]; ?>%"><?php echo $skills['percent'][$i]; ?>%</div>
          </div>
          <?php endfor ?>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>
          <?php for($i=0; $i <= count($language) ; $i++): ?>
          <p><?php echo $language['name'][$i]; ?></p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-center w3-round-xlarge w3-teal" style="width:<?php echo $language['percent'][$i]; ?>%"><?php echo $language['percent'][$i]; ?>%</div>
          </div>
          <?php endfor ?>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>
    
    
    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Front End Developer </b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2015 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <p>Lorem ipsum dolor



<!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
        
        <?php for($i=0; $i<= count($workexperience) ; $i++): ?>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $workexperience['header'][$i]; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $workexperience['date'][$i]; ?></h6>
          <p><?php echo $workexperience['description'][$i]; ?></p>
          <hr>
        </div>
       <?php endfor ?>
       
      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
        
        <?php for($i=0; $i<= count($education) ; $i++): ?>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $education['place'][$i]; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $education['date'][$i]; ?></h6>
          <p><?php echo $education['description'][$i]; ?></p>
          <hr>
        </div>
        <?php endfor ?>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 <!-- End footer -->
 </footer>

</body>
</html>