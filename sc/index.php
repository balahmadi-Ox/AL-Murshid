<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
  	
	<title>Schedule</title>
	<b>SCHEDULE</b>
</head>
<?php
   include("Config.php");
   session_start();
   ?>
<body style="background-colorl:#F4F6F7">
<div class="cd-schedule loading">
	<div class="timeline">
		<ul>
			<li><span>09:00</span></li>
			<li><span>09:30</span></li>
			<li><span>10:00</span></li>
			<li><span>10:30</span></li>
			<li><span>11:00</span></li>
			<li><span>11:30</span></li>
			<li><span>12:00</span></li>
			<li><span>12:30</span></li>
			<li><span>13:00</span></li>
			<li><span>13:30</span></li>
			<li><span>14:00</span></li>
			<li><span>14:30</span></li>
			<li><span>15:00</span></li>
			<li><span>15:30</span></li>
			<li><span>16:00</span></li>
			<li><span>16:30</span></li>
			<li><span>17:00</span></li>
			<li><span>17:30</span></li>
			<li><span>18:00</span></li>
		</ul>
	</div> <!-- .timeline -->

	<div class="events">
	
		<ul>
		<?php
		$servername = "localhost";
$username = "root";
$password = "";
$dbname = "morshed";
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		?>
		<?php
		
					$sql = "SELECT * FROM  scheduling where level = 1";
      //$result = mysqli_query($db,$sql);
	  $result = $conn->query($sql);
      //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  $i = 0;
	  
	  
                                
                                ?>
			<li class="events-group">
				<div class="top-info"><span>Floor 1</span></div>

				<ul>
				<?php
				$i=0;
                                while ($row = $result->fetch_assoc()){
									//echo $row["dispatch_time"];
									$i = $i+1;
									//echo $i;
                          if($i%2==0){     
						?>
<li class="single-event" data-start=<?php echo $row['dispatch_time'];?> data-end=<?php echo $row['leaving_time'];?>  data-content="event-abs-circuit" data-event="event-<?php echo $i?>">
<?php						
						  }else{
							  ?>
							  <li class="single-event" data-start=<?php echo $row['dispatch_time'];?> data-end=<?php echo $row['leaving_time'];?>  data-content="event-restorative-yoga" data-event="event-<?php echo $i?>";>
					<?php		
						  }					
					//echo "<li". "class=".'single-event'. "data-start =". '"'.$row['dispatch_time'].'"'. "data-end=".'"'.$row['leaving_time'].'"'. "data-content=event-rowing-workout". "data-event=event-".i.">";
					echo "<a href='#0'>";
						echo "<em". "class=event-name>".$row['name'];
						echo "</em>";
					
						
							
						echo"</a>";
					echo"</li>";
						  
                                }
                ?>
					
				</ul>
			</li>

			<?php
		
					$sql = "SELECT * FROM  scheduling where level = 2";
      //$result = mysqli_query($db,$sql);
	  $result = $conn->query($sql);
      //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  $i = 0;
	  
	  
                                
                                ?>
			<li class="events-group">
			
				<div class="top-info"><span>Floor 2</span></div>

				<ul>
					<?php
				$i=0;
                                while ($row = $result->fetch_assoc()){
									//echo $row["dispatch_time"];
									$i = $i+1;
									//echo $i;
                          if($i%2==0){     
						?>
<li class="single-event" data-start=<?php echo $row['dispatch_time'];?> data-end=<?php echo $row['leaving_time'];?>  data-content="event-abs-circuit" data-event="event-<?php echo $i?>">
<?php						
						  }else{
							  ?>
							  <li class="single-event" data-start=<?php echo $row['dispatch_time'];?> data-end=<?php echo $row['leaving_time'];?>  data-content="event-restorative-yoga" data-event="event-<?php echo $i?>";>
					<?php		
						  }					
					//echo "<li". "class=".'single-event'. "data-start =". '"'.$row['dispatch_time'].'"'. "data-end=".'"'.$row['leaving_time'].'"'. "data-content=event-rowing-workout". "data-event=event-".i.">";
					echo "<a href='#0'>";
						echo "<em". "class=event-name>".$row['name'];
						echo "</em>";
					
						
							
						echo"</a>";
					echo"</li>";
						  
                                }
                ?>
					
				</ul>
			</li>
<?php
		
					$sql = "SELECT * FROM  scheduling where level = 3";
      //$result = mysqli_query($db,$sql);
	  $result = $conn->query($sql);
      //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  $i = 0;
	  
	  
                                
                                ?>
			<li class="events-group">
				<div class="top-info"><span>Floor 3</span></div>

				<ul>
						<?php
				$i=0;
                                while ($row = $result->fetch_assoc()){
									//echo $row["dispatch_time"];
									$i = $i+1;
									//echo $i;
                          if($i%2==0){     
						?>
<li class="single-event" data-start=<?php echo $row['dispatch_time'];?> data-end=<?php echo $row['leaving_time'];?>  data-content="event-abs-circuit" data-event="event-<?php echo $i?>">
<?php						
						  }else{
							  ?>
							  <li class="single-event" data-start=<?php echo $row['dispatch_time'];?> data-end=<?php echo $row['leaving_time'];?>  data-content="event-restorative-yoga" data-event="event-<?php echo $i?>";>
					<?php		
						  }					
					//echo "<li". "class=".'single-event'. "data-start =". '"'.$row['dispatch_time'].'"'. "data-end=".'"'.$row['leaving_time'].'"'. "data-content=event-rowing-workout". "data-event=event-".i.">";
					echo "<a href='#0'>";
						echo "<em". "class=event-name>".$row['name'];
						echo "</em>";
					
						
							
						echo"</a>";
					echo"</li>";
						  
                                }
                ?>
					
				</ul>
			</li>
<?php
		
					$sql = "SELECT * FROM  scheduling where level = 4";
      //$result = mysqli_query($db,$sql);
	  $result = $conn->query($sql);
      //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  $i = 0;
	  
	  
                                
                                ?>
								
			<li class="events-group">
				<div class="top-info"><span>Floor 4</span></div>

				<ul>
								<?php
				$i=0;
                                while ($row = $result->fetch_assoc()){
									//echo $row["dispatch_time"];
									$i = $i+1;
									//echo $i;
                          if($i%2==0){     
						?>
<li class="single-event" data-start=<?php echo $row['dispatch_time'];?> data-end=<?php echo $row['leaving_time'];?>  data-content="event-abs-circuit" data-event="event-<?php echo $i?>">
<?php						
						  }else{
							  ?>
							  <li class="single-event" data-start=<?php echo $row['dispatch_time'];?> data-end=<?php echo $row['leaving_time'];?>  data-content="event-restorative-yoga" data-event="event-<?php echo $i?>";>
					<?php		
						  }					
					//echo "<li". "class=".'single-event'. "data-start =". '"'.$row['dispatch_time'].'"'. "data-end=".'"'.$row['leaving_time'].'"'. "data-content=event-rowing-workout". "data-event=event-".i.">";
					echo "<a href='#0'>";
						echo "<em". "class=event-name>".$row['name'];
						echo "</em>";
					
						
							
						echo"</a>";
					echo"</li>";
						  
                                }
                ?>
					
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Floor 5</span></div>

				<ul>			<?php
				$i=0;
                                while ($row = $result->fetch_assoc()){
									//echo $row["dispatch_time"];
									$i = $i+1;
									//echo $i;
                          if($i%2==0){     
						?>
<li class="single-event" data-start=<?php echo $row['dispatch_time'];?> data-end=<?php echo $row['leaving_time'];?>  data-content="event-abs-circuit" data-event="event-<?php echo $i?>">
<?php						
						  }else{
							  ?>
							  <li class="single-event" data-start=<?php echo $row['dispatch_time'];?> data-end=<?php echo $row['leaving_time'];?>  data-content="event-restorative-yoga" data-event="event-<?php echo $i?>";>
					<?php		
						  }					
					//echo "<li". "class=".'single-event'. "data-start =". '"'.$row['dispatch_time'].'"'. "data-end=".'"'.$row['leaving_time'].'"'. "data-content=event-rowing-workout". "data-event=event-".i.">";
					echo "<a href='#0'>";
						echo "<em". "class=event-name>".$row['name'];
						echo "</em>";
					
						
							
						echo"</a>";
					echo"</li>";
						  
                                }
                ?>
					
				</ul>
			</li>
		</ul>
	</div>

	<div class="event-modal">
		<header class="header">
			<div class="content">
				<span class="event-date"></span>
				<h3 class="event-name"></h3>
			</div>

			<div class="header-bg"></div>
		</header>

		<div class="body">
			<div class="event-info"></div>
			<div class="body-bg"></div>
		</div>

		<a href="#0" class="close">Close</a>
	</div>

	<div class="cover-layer"></div>
</div> <!-- .cd-schedule -->
<script src="js/modernizr.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script>
	if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
</script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>