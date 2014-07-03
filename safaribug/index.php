<?php 
ini_set('display_errors',1);
include_once('assets/functions.inc.php'); 
include_once('assets/header.inc.php');

	if (!isset($_GET['page'])){
		$page = 1;
	} else {
		$page = $_GET['page'];
	}
	
	$fullPath = 'images/full';
	$thumbsPath = 'images/thumbs';
	
	//echo $fullPath;
	//echo $thumbsPath;
	$walkFull = walk_dir($fullPath,array('jpeg','jpg'));
	$walkThumbs = walk_dir($thumbsPath,array('jpeg','jpg'));
	
	/*print_r($walkFull);
	print_r($walkThumbs);
	
	exit;
	*/
	$num = count($walkFull);
	if ($num != count($walkThumbs)){
		echo "<h2>Error: Directory Count Does not match.  Check file names in the ".$gallery." section!</h2>"; 
		
		print_R($walkThumbs);
		print_R($walkFull);
		die;
	}
	
	


?>
		
		
		
		<div id="blockHolder">
			
			
			<?php  
			
				
				//shuffle the full array
				//shuffle($walkFull);
				
				$i = ($page-1) * 9;
				$whileEnd = (($page) * 9)- 1;
				
	
				
				
				$endCount = 1;
				while ($i <= $whileEnd){
				
					if ( array_key_exists($i, $walkFull) ){		//make sure the element exists
						
						if ($endCount == 1){
							$fullImg = $walkFull[$i];
						}
						
						
						$fullName = $fullPath."/".$walkFull[$i];
						$thumbName = $thumbsPath."/".$walkFull[$i];
						
						echo "\t\t\t\t\t<img src=\"".$thumbName."\" alt=\"blocks\"  class=\"whiteBlocks\" 
							  id=\"block".$i."\" 
							  onclick=\"swapImage('fullSizeImg','".$fullName."')\" />\n\n";
						$endCount++;
					}
					
					$i++;
					
				}
				
			
			
			
			?>
			
			<p>
			
				To duplicate this bug, you'll need to be running Safari.  First, click on the thumbnail for the first image, then on 
				a thumbnail for one of the two images labled stretch.  You'll see that though the images are different sizes, Safari
				does not resize them property.  Instead, it stretches the new images to fit the size of the previous image.  Clicking on the
				reset image which is a different width and height than the others seems to reset the image and it draws OK.
				</p><p>
				Note that both the width <em>and</em> the height have to be different for Safari to properly reset the sizes.  If 
				either the width or height is the same as the previous image, it won't do it.
			</p>
			
			<p> The code that does the actual switching is below.  It is a very simple javascript src switch that works fine in every 
			other browser I've tested (IE 5+, Mozilla &amp; Family, Opera 7.x).
			</p>
			<code>
			function swapImage(id,newSrc){
				document.getElementById(id).src = newSrc;
			}
			</code>
			
		
		</div>
		
	</div>
	
	<div id="rightcontent">
		<?php
		if ($walkFull){
			echo '<img src="'.$fullPath.'/'.$fullImg.'" alt="" id="fullSizeImg">';
		}
		?>
		<?php if ($_SERVER['PHP_SELF'] != "/"){ ?>
		
		
		<div id="copyHolder">
			<p class="copyright"><a href="http://www.fiddlyio.com/">Fiddlyio Design</a></p>
		</div>
	</div>
	<?php } ?>
	
	
	
	
	
<?php include_once('assets/footer.inc.php'); ?>