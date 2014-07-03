<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=macintosh" />
	<title>Weather Report</title>
	<style type="text/css" media="screen">@import url("../css/fiddlyio.css");</style>
	<style type="text/css" media="screen">@import url("../css/fiddlyio_pop.css");</style>
</head>
<body>

<script language="JavaScript">
<!--
window.resizeTo(<?php echo $_GET['w'].",".$_GET['h']; ?>)
-->
</script>

<div style="border: 1px solid black; background-color: white; padding: 5px 5px 5px 5px; width: <?php echo $_GET['dw']; ?>px;"> 
	<h2>Weather Report</h2><br />
	<span class="details">2002 <span class="dslash">/</span> Typography in Motion <span class="dslash">/</span>  Jan Jancourt <span class="dslash">/</span>  Video (0:30) <span class="dslash">/</span> QT 6 MPEG4</span><br /><br />

	<OBJECT CLASSID="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" WIDTH="340" HEIGHT="256" CODEBASE="http://www.apple.com/qtactivex/qtplugin.cab#version=6,0,2,0">
			<PARAM NAME="controller" VALUE="FALSE">	
			<PARAM NAME="type" VALUE="video/quicktime">
			<PARAM NAME="autoplay" VALUE="true">
			<PARAM NAME="target" VALUE="myself">
			<PARAM NAME="src" VALUE="../movies/click_play.mov">
			<PARAM NAME="HREF" VALUE="../movies/weather_340_240.mov">
			<PARAM NAME="pluginspage" VALUE="http://www.apple.com/quicktime/download/index.html">
			
			<EMBED WIDTH="340" HEIGHT="256" CONTROLLER="FALSE" TARGET="myself" SRC="../movies/click_play.mov" 
			HREF="../movies/weather_340_240.mov" type="video/quicktime" BGCOLOR="#000000" BORDER="0" 
			PLUGINSPAGE="http://www.apple.com/quicktime/download/indext.html"></EMBED>
	</OBJECT>


<br /><br />
	<div id="critcont">
		<p class='news_post'>criteria
		<span class='details' >
		This thirty second piece presents a weather report in an experimental and highly stylized format.  
		Emphasis was put on relating visual and typographic elements and how to deal with hierarchy in animated and typographic form.


</span></p>
	</div>

</div>
</body>
</html>
