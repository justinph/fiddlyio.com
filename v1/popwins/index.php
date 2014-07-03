<?php include('defs/'.$_GET['page']);  ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=macintosh" />
	<title><?php echo $def['title']; ?></title>
	<style type="text/css" media="screen">@import url("../css/fiddlyio.css");</style>
	<style type="text/css" media="screen">@import url("../css/fiddlyio_pop.css");</style>
		
	<script src="../js/prototype-1.4.0.js" type="text/javascript" language="javascript" charset="macintosh"></script>
	<script src="../js/rico.js" type="text/javascript" language="javascript" charset="macintosh"></script>
	
	
	<?php
			
		$url = pathinfo($_SERVER['PHP_SELF']);
		$newUrl = "http://".$_SERVER['HTTP_HOST']."".$url['dirname']."/";
	
	?>
	
	<script type="text/javascript" language="javascript" charset="macintosh">
	function jumpCount(num) {
			
			newVal = document.jumper.projump.selectedIndex + num;
			
			//alert(newVal);
			
			if (newVal < 0){
				newVal = document.jumper.projump.length -1;
			} 
			if (newVal == document.jumper.projump.length){
				newVal = 0;
			} 
			
			window.location.href = '<?php echo $newUrl; ?>' + '?page=' + document.jumper.projump[newVal].value;
			
	}
	
	function jumpGo(theIndex){
		window.location.href = '<?php echo $newUrl; ?>' + '?page=' + document.jumper.projump[theIndex].value;
	}
	
	</script>
	
	
	
</head>
<body>

<script language="JavaScript">
	<!--
	window.resizeTo(<?php echo $def['w'].",".$def['h']; ?>)
	-->
</script>

<div id="contents">

	<?php include("includes/nav_jump.php"); ?>

	<div id="ptitles"><h2><?php echo $def['title']; ?></h2><br />
		<span class="details">
			<?php
				for($i=0; $i < count($def['details']); $i++){
					echo $def['details'][$i]."  ";
					if ($i < (count($def['details'])-1) ){
						echo '<span class="dslash">/</span>'."\n";
					}
				}
			
			?>
		</span>
		<br />
	</div>


	<br clear="all" />


	<?php
	if (!empty($def['images'])){
	foreach ($def['images'] as $value){
		echo '<img src="../images/fullsize/'.$value.'" alt="'.$value.'" border="0" /><br /><br />'."\n";
	}
	}
	
	if (!empty($def['media'])){
	foreach ($def['media'] as $value){
		echo $value."<br /><br />\n";
	}
	}
	
	?>
	
	
	<?php 
	
	if (!empty($def['text'])){
	
		echo '<div id="critcont">'."\n";
	
		foreach($def['text'] as $key => $value){
			//echo "\t".'<p class="news_post">'.$key.'<span class="details">'.$value." </span></p>";
			
			echo "<h4>".$key."</h4>\n";
			echo "<p>".$value."</p>\n";
		}
		echo "</div>\n";
	}
	?>
	
</body>
</html>
