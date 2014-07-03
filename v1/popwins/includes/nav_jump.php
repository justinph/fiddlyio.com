<?php

$projectList = array("SPATIAL" => array(),
			"NEW MEDIA" => array(),
			"MOTION" => array(),
			"OPEN SOURCE" => array()
);


// projects

//spatial

$projectList['SPATIAL'][] = array(
	"name" => 'Nothing (Nowhere) To Hide',
	"include" => 'nothing.php',
	"height" => '',
	"width" => ''
);


$projectList['SPATIAL'][] = array(
	"name" => 'Bloc Blonc',
	"include" => 'bloc_blonc.php',
	"height" => '',
	"width" => ''
);

$projectList['SPATIAL'][] = array(
	"name" => 'Nobel Symphony',
	"include" => 'nobel_symphony.php',
	"height" => '',
	"width" => ''
);

$projectList['SPATIAL'][] = array(
	"name" => 'Al Jazeera vs. CNN',
	"include" => 'al_jazeera.php',
	"height" => '',
	"width" => ''
);





$projectList['NEW MEDIA'][] = array(
	"name" => 'Andy Warhol vs. THE Revolutionary Party',
	"include" => 'andy_vs_rp.php',
	"height" => '',
	"width" => ''
);


$projectList['NEW MEDIA'][] = array(
	"name" => 'The Cause',
	"include" => 'the_cause.php',
	"height" => '',
	"width" => ''
);



$projectList['NEW MEDIA'][] = array(
	"name" => 'Bob Orr Photography',
	"include" => 'test.php',
	"height" => '',
	"width" => ''
);


$projectList['NEW MEDIA'][] = array(
	"name" => 'Sean Meszaros Photography',
	"include" => 'sean_meszaros.php',
	"height" => '',
	"width" => ''
);


$projectList['NEW MEDIA'][] = array(
	"name" => 'Personal Web Browser',
	"include" => 'personal_web_browser.php',
	"height" => '',
	"width" => ''
);

$projectList['NEW MEDIA'][] = array(
	"name" => 'MetaData',
	"include" => 'metadata.php',
	"height" => '',
	"width" => ''
);




$projectList['MOTION'][] = array(
	"name" => 'Weather Report',
	"include" => 'weather_report.php',
	"height" => '',
	"width" => ''
);


$projectList['MOTION'][] = array(
	"name" => 'Blade Runner Titles',
	"include" => 'blade_runner_titles.php',
	"height" => '',
	"width" => ''
);


$projectList['MOTION'][] = array(
	"name" => 'Fedex Short',
	"include" => 'fedex_short.php',
	"height" => '',
	"width" => ''
);


$projectList['MOTION'][] = array(
	"name" => 'Target Plaza',
	"include" => 'target_plaza.php',
	"height" => '',
	"width" => ''
);



$projectList['OPEN SOURCE'][] = array(
	"name" => 'DesignWorks Project Site',
	"include" => 'designworks.php',
	"height" => '',
	"width" => ''
);


$projectList['OPEN SOURCE'][] = array(
	"name" => 'RadMacLab',
	"include" => 'radmaclab.php',
	"height" => '',
	"width" => ''
);

$projectList['OPEN SOURCE'][] = array(
	"name" => 'PHP Weather Icons',
	"include" => 'phpweather_icons.php',
	"height" => '',
	"width" => ''
);

//onchange="goto_URL(this.form.selectName);"
//document.jumper.projump.length

?>


<div id="jump">
	<form action="#" method="post" name="jumper" onsubmit="this.form.submit">
		<input type="button" name="next" value="&laquo;" onclick="jumpCount(-1);"/>
			<select id="projump" name="selectName" onchange="jumpGo(this.selectedIndex);" style="width: 150px;">
				<?php
					foreach ($projectList as $catKey => $cat){
						echo '<optgroup label="'.$catKey.'">'."\n";
						foreach ($cat as $value){
							echo "\t\t".'<option label="'.$value['name'].'" value="'.$value['include'].'"';
							if ($_GET['page'] == $value['include']){
								echo ' selected="selected" ' ;
							}
							echo '>'.$value['name'].'</option>'."\n";
						}
						echo "</optgroup>\n";
					}
				
				?>

			</select>
		<input type="button" name="next" value="&raquo;" onclick="jumpCount(1);"/>
	</form>
</div>

<script>

	
</script>
