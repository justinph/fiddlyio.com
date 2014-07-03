<?php

// get all images in dir
$imgs = glob("*.{jpg,png,gif,jpeg,svg,mng,PNG,JPG,JPEG,GIF,SVG,MNG}", GLOB_BRACE);
sort($imgs);

if (count($imgs) > 0){
	$totalImgs = count($imgs);
}

if (!isset($_GET['i'])){
	$curIdx = 1;
} else {
	$curIdx = intval($_GET['i']);
}
if ($curIdx < 1){
	$curIdx = 1;		
}

$next = $curIdx + 1;
if ($next > $totalImgs){
	$next = 1;
}
$prev = $curIdx -1;
if ($prev < 1){
	$prev = $totalImgs;
}

$curImg = $imgs[$curIdx-1];

$nextURL = $_SERVER['PHP_SELF']."?i=".$next;
$prevURL = $_SERVER['PHP_SELF']."?i=".$prev;

$nextUrl = 0;

?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Image <?php echo $curIdx;?> of <?php echo $totalImgs; ?></title>
	<style type="text/css">
	body
	{
		text-align: center;
		border:none;
		margin:0;
		padding:0;
	}
	a img{
		border: 0;
		max-width: 100%;
		height: auto;
	}
	</style>
</head>
<body>
	
	
<a href="<?php echo $nextURL; ?>"><img src="<?php echo $curImg; ?>" /></a>

<script type="text/javascript">

	document.onkeyup=function(e){
   		if(e.keyCode == 37){
   			window.location.replace('<?php echo $prevURL; ?>');
   		} else if (e.keyCode == 39){
   			window.location.replace('<?php echo $nextURL; ?>');
   		}
	}
</script>

</body>
</html>