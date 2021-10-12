<?php session_start();
if($_SESSION['auth']!="ajayMEM103kant2019upadhyay")
{
header("location:mem103.php");
}
else
{
?>
<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Manufacturing Processes-I</title>
<link rel="shortcut icon" type="image/x-icon" href="images/icon.ico">
<link href="css/mem.css" rel="stylesheet" type="text/css">
</head>
<body style="background:#FFFFFF; margin:auto; width: 1024px; height:100%;">
<div id="header"><br/>MEM-103 Manufacturing Processes-I<br /><br /></div>
<div><p id="fbtab"><a href="#header" title="Back to Top"></a></p>
<table border="0" width="100%"><tr>
<td width="30%" style="font-size:14px; color:#ff0066; font-weight:bold;">Welcome <?php echo $_SESSION['name'];?></td>
<td style="text-align:right;"><a href="workshop.php" title="Bench Work">Bench Work</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="mem.php" title="Lecture Notes, MEM-103 Manufacturing Process-I">Lecture Notes</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="memHome.php" title="Manufacturing Process-I">MEM103 Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="mem_out.php" title="Sign out from Manufacturing Process">Logout</a></td>
</tr></table><br/></div>
<div style="text-align:justify">
<script type="text/javascript">
//Google Analytics Code
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38541839-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<b>MEASUREMENT, MEASURING TOOLS & LAYOUT TOOLS</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="MEM103/Workshop/Tutorial15.pdf" target="_blank" title="Download Tutorial 15">Tutorial 15 Download</a><br/><br/>
<b>Using Scribers</b><br/>
The scriber is designed to serve one in workshop in the same way a pen serves one in writing in the class room. In general, it is used to scribe or mark lines on metal surfaces, and has two needle pointed ends. Scribers have a scriber point made of tempered high grade tool steel and a handle of steel tubing which may be nickel plated. The point is reversible telescoping into the knurled handle when not in use. Bent point scribers are usually 300 mm long with one straight point and one long or one short bent point bent at a 90 degrees angle for reaching and marking through holes. Some of these scribers are threaded and can be engaged in either end of the handle.<br/><br/>
<center><img src="images/mem/Workshop/129.jpg" width="500" height="60"><br/><b>Figure 1: Scriber</b></center>
<b>Using a scriber</b><br/>
a. Make sure that the point of the scriber is sharp. To sharpen, rotate the scriber between thumb and forefinger while moving the point back and forth on an oilstone.<br/>
b. Clean work surfaces from all dirt and oil<br/>
c. Place the steel rule or straight edge on the work beside the line to be scribed.<br/>
d. Use the fingertips of one hand to hold the rule in position and hold the scriber in the other hand as is done while marking with a pencil.<br/>
e. Scribe the line by drawing the scriber along the edge of the rule, at a 450 angle and tipped outward and slightly in the direction it is being moved.<br/><br/>
<center><img src="images/mem/Workshop/130.jpg" width="450" height="260"><br/><b>Figure 2: Using a scriber</b></center><br/>
To mark a line parallel to a surface, Pile up blocks of wood or metal to position the scriber at the required height when it is laid flat on top. Small adjustments can be made by adding strips of cardboard or sheet metal. Place the workpiece on the surface aligning the mark with the point on the scriber. Hold the scriber firmly in place with one hand and rotate the object against the point to mark a line.<br/><br/>
<center><img src="images/mem/Workshop/131.jpg" width="400" height="280"><br/><b>Figure 3: Using scriber to mark a line parallel.</b></center>
<b>Care of scribers</b><br/>
a. Place a cork or soft wood over point of scriber when not in use. Coat scriber with anti-rust material before storage. Do not throw scribers in drawer with other tools. This practice can cause damage to scribers and injury to personnel.<br/>
b. Place punch on rest and place point on abrasive wheel. Rotate punch during grinding to obtain cone shape.<br/>
c. Dip punch in water frequently to preserve temper.<br/>
d. Do not grind away more metal than is necessary to obtain a sharp cone-shaped point.<br/><br/>
<b>Reshaping mushroomed head</b><br/>
If the head of the punch becomes mushroomed after extended use, grind to original shape on a grinder wheel. Restore temper after grinding.<br/><br/>
<b>Restoring temper</b><br/>
If the point or the flat end of a punch is ground beyond the hardened section, if the mushroomed head was reshaped or if the punch was overheated in grinding, the punch must be hardened and tempered
<table width=1024><tr><td style="text-align:left; font-weight:bold;"><a href="tutorial14.php" title="Workshop Practice">Tutorial 14</a></td>
<td style="text-align:right; font-weight:bold;"><a href="tutorial16.php" title="Workshop Practice">Tutorial 16</a></td></tr></table>
</div>
<div id="footer">
&copy; MEM103 - Dayalbagh Educational Institute <a href="https://www.dei.ac.in" target="_blank" title="DEI">(www.dei.ac.in)</a>&nbsp;-&nbsp;<a href="../ajay/index.html" target="_blank" title="Profile">Ajay Kant Upadhyay</a></div>
</body>
</html>
<?php
}
?>