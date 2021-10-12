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
<div>
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
<p id="fbtab"><a href="#header" title="Back to Top"></a></p>
<table width="100%"><tr>
<td width="30%" style="font-size:14px; color:#ff0066; font-weight:bold;">Welcome <?php echo $_SESSION['name'];?></td>
<td style="text-align:right;"><a href="mem.php" title="Manufacturing Process-I">Lecture Notes</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="memHome.php" title="Manufacturing Process-I">MEM103 Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="mem_out.php" title="Sign out from Manufacturing Process">Logout</a></td>
</tr></table><br/></div>
<div><p id="fbtab"><a href="#header" title="Back to Top"></a></p>
<table border="0" width="100%">
<tr><td width="65%"><b>Lesson 7 Drilling</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="MEM103/UNIT5/Unit5Lesson7.pdf" target="_blank" title="Download Lesson 7">Lesson 7 Download</a></td></tr>
<tr><td><a href="#introduction">7.0&nbsp;&nbsp;&nbsp;Introduction</a></td></tr>
<tr><td><a href="#machines">7.1&nbsp;&nbsp;&nbsp;Drilling machines</a></td></tr>
<tr><td><a href="#operation">7.2&nbsp;&nbsp;&nbsp;Drilling operation</a></td></tr>
<tr><td><a href="#drill">7.3&nbsp;&nbsp;&nbsp;Drill</a></td></tr>
<tr><td><a href="#conditions">7.4&nbsp;&nbsp;&nbsp;Operating conditions in Drilling</a></td></tr>
<tr><td><a href="#mrr">7.5&nbsp;&nbsp;&nbsp;Material Removal Rate</a></td></tr>
<tr><td><a href="#time">7.6&nbsp;&nbsp;&nbsp;Machining time in Drilling</a></td></tr>
</table><br/></div>
<div>
<dt><b><a name="introduction">7.0 &nbsp;&nbsp;&nbsp;Drilling</a></b></dt>
<dd><p>
A majority of components have one or more cylindrical holes in them. Holes are needed for most common fasteners such as bolts and screws. Drilling is a process of producing round holes in a solid material or enlarging existing holes with the use of multi-tooth cutting tools called drills or drill bits. Various cutting tools are available for drilling, but the most common is the twist drill.
</p></dd><br/>
<dt><b><a name="machines">7.1 &nbsp;&nbsp;&nbsp;Drilling Machines</a></b></dt>
<dd><p>
The machine tool used for drilling is the drilling machine, which is also called drill press. Schematics of two common types of drilling machines are shown in Figure 1; the drill press in Figure 1(a) and a radial drilling machine in Figure 1(b).<br/><br/>
<center><img src="images/mem/Unit5/Lesson7/1.jpg"><br/><b>Figure 1: Two types of common drilling machines</b></center>
The drill press is relatively easy to use and set up whereas a radial drilling machine is more versatile and suitable to drill multiple holes in a heavy job. The major components of the drilling machines are shown in the figure. The size of drilling machine is usually specified by the largest diameter of the hole that can be drilled on it.
</p></dd><br/>
<dt><b><a name="operation">7.2 &nbsp;&nbsp;&nbsp;Drilling Operation</a></b></dt>
<dd><p>
The workpiece is placed on the adjustable table, and is clamped firmly both for safety and accuracy to overcome the high drilling torque. The cutting tool, twist drill, is fastened to the end of the vertical spindle, which is rotated at the desired speed. In drilling the workpiece remains stationary and tool is rotated as well as fed into the workpiece. The rotating drill is fed against a stationary workpiece either by hand feed or by power feed. The vertical motion of the drill is the feed in drilling operations.<br/><br/>
Generally, the holes produced by drilling are large than the drill diameter, this you can notice by observing that a drill can be removed easily from the hole it has just produced. The amount of oversize will depend on the quality of drill, the equipment used, and the practices employed. The surface finish of the hole produced by drilling is also poor. For these reasons, the drilled holes are subjected to other operations for better surface finish and dimensional accuracy, such as boring and reaming.
</p></dd><br/>
<dt><b><a name="drill">7.3 &nbsp;&nbsp;&nbsp;Drill</a></b></dt>
<dd><p>
The tool employed to drill holes is called drill which has two symmetrical opposite cutting edges, each removing part of the material in the form of chip. A typical drill and its important features are shown in Figure 2. A drill consists of the body, point, neck and shank. The shank is for holding or fixing the drill in the drilling machine, it is either taper or straight. The two cutting edges are at the point forming the point
angle and chisel edge angle. The metal cutting takes place at the drill tip by the two cutting edges. Drills usually have large length to diameter ratio. The chips that are produced within the workpiece have to move in the direction opposite to the axial movement of the drill and the cutting fluid has to reach the cutting edges at the end of drill. Hence, chip disposal and the effectiveness of cutting fluids are
significant problems in drilling. Generally, two spiral grooves or helical flutes with a specific helix angle run the length of the drill body. The chips produced are guided upward through these flutes and the coolant reaches the cutting edges through them. In some drills these flutes are straight, thus, drill are classified as twist or flat drills.<br/><br/>
<center><img src="images/mem/Unit5/Lesson7/2.jpg"><br/><b>Figure 2: Geometry of the twist drills</b></center>
The two cutting edges make an angle called point angle of the drill. The point angle is selected to suit the hardness and brittleness of the material being drilled. The point angle varies from 60i to 180i for different materials. Normally a point angle of 116i is used for harder materials and 140i for softer materials. Twist drills are made from high carbon and high-speed steels and also with diamond or carbide tips. Twist drills are commonly available in a size range from 0.25 mm to 80 mm.
</p></dd><br/>
<dt><b><a name="conditions">7.4 &nbsp;&nbsp;&nbsp;Operating conditions in Drilling</a></b></dt>
<dd><p>
The cutting speed v in drilling is the peripheral speed of the drill. The cutting speed that should be used in drilling depends on number of factors properties of material being drilled, drill material, drill diameter, rate of feed, coolant use.<br/>
The feed f is the movement of the drill along its axis. It is usually specified in millimeters per revolution of the drill.<br/>
<center><img src="images/mem/Unit5/Lesson7/3.jpg"><br/><b>Figure 3: Basics of drilling operation</b></center>
The depth of cut (d) in drilling is not a significant parameter. It may be defined as the distance from the machined surface to the drill axis. That is<br/>
<center><img src="images/mem/Unit5/Lesson7/f1.jpg"></center>where D is the diameter of the drill.<br/>
The choice of operating conditions in drilling operations becomes more critical with an increase in the hole depth. As the depth of hole increases (i) the chip ejection becomes more difficult, and (ii) fresh cutting fluid is not able to reach to the cutting zone. These factors lead to overheating of the drill and
shorten its life. Hence, for machining lengthy holes reduced feed rates are used. For machining holes of very large length a special type of drilling process known as gun drilling is used. By using this process, it is possible to machine the holes having length greater than 300 times the diameter.
</p></dd><br/>
<dt><b><a name="mrr">7.5 &nbsp;&nbsp;&nbsp;Material Removal Rate</a></b></dt>
<dd><p>
The cutting speed v decides the speed of rotation of the drill N based on the diameter of the drill D. The cutting speed is given by<br/>
<center><img src="images/mem/Unit5/Lesson7/f2.jpg"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(1)</center>
where D is in mm, N is in rev/min or rpm, and v is in m/min.<br/>
The material removal rate (MRR) in drilling is the volume of material removed by drill per unit time. For a drill with a diameter D, the cross-sectional area of the drilled hole is iD<sup>2</sup>/4. The material removal rate is the product of cross-sectional area of the drilled hole, feed rate f (in mm/rev) and the rotational speed N of the drill. That is,<br/>
<center><img src="images/mem/Unit5/Lesson7/f3.jpg"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(2)</center>
You can check the dimensional consistency of this equation in the same way as we did for the MRR equation of the lathe.
</p></dd><br/>
<dt><b><a name="time">7.6 &nbsp;&nbsp;&nbsp;Machining time in drilling</a></b></dt>
<dd><p>
The machining time for drilling a hole depends upon the length of the hole to be drilled L, rpm of the drill N and feed f. If t is time required to drill a hole, then<br/>
<center><img src="images/mem/Unit5/Lesson7/f4.jpg"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(3)</center>
where L is in mm, f is in mm/rev and N is in rpm.<br/>
In order to drill a through hole, the drill must pass through the thickness of workpiece. This means the travel of the drill is more than the length of hole. Thus, in actual practice, for the hole length Lj we add length of approach (or approach) L1 and length of recess (or over travel) L2 for the calculation of time t. These are illustrated in Figure 4.<br/>
<center><img src="images/mem/Unit5/Lesson7/4.jpg"><br/><b>Figure 4: Length of approach and length of recess</b></center>
<b>Various drilling and reaming operations</b><br/>
<b>Drilling</b> is used to drill a round blind or through hole in a solid material. If the hole is larger than ~30 mm, its a good idea to drill a smaller pilot hole before core drilling the final one. For holes larger than ~50 mm, three-step drilling is recommended;<br/><br/>
<b>Core drilling</b> is used to increase the diameter of an existing hole;<br/><br/>
<b>Step drilling</b> is used to drill a stepped (multi-diameter) hole in a solid material;<br/><br/>
<b>Counter boring</b> provides a stepped hole again but with flat and perpendicular relative to hole axis face. The hole is used to seat internal hexagonal bolt heads;<br/><br/>
<b>Countersinking</b> is similar to counter boring, except that the step is conical for flat head screws;<br/><br/>
<b>Reaming</b> provides a better tolerance and surface finish to an initially drilled hole. Reaming slightly increases the hole diameter. The tool is called reamer;<br/><br/>
<b>Center drilling</b> is used to drill a starting hole to precisely define the location for subsequent drilling. The tool is called center drill. A center drill has a thick shaft and very short flutes. It is therefore very stiff and will not walk as the hole is getting started;<br/><br/>
<b>Gun drilling</b> is a specific operation to drill holes with very large length-to-diameter ratio up to L/D ~300. There are several modifications of this operation but in all cases cutting fluid is delivered directly to the cutting zone internally through the drill to cool and lubricate the cutting edges, and to remove the chips;<br/><br/>
<center><img src="images/mem/Unit5/Lesson7/5.jpg"><br/><b>Figure 5: Various drilling and reaming operations</b></center><br/>
<b>Example 1</b>: A hole is being drilled in block of magnesium alloy with a 10 mm drill at a feed of 0.2 mm/rev. The spindle is running at 800 rpm. Calculate the MRR.<br/>
<b>Solution</b>:<br/>
Given data: D = 10 mm, f = 0.2 mm/rev, N = 800 rpm<br/>
Substituting the values in Equation (2), we get<br/>
<center><img src="images/mem/Unit5/Lesson7/f5.jpg"></center><br/>
<b>Example 2</b>: Calculate the time required to drill a 25 mm diameter hole in a workpiece having thickness of 60 mm to the complete depth. The cutting speed is 14 m/min. and feed is 0.3 mm/rev. Assume length of approach and over travel as 5 mm.<br/>
<b>Solution</b>:<br/>
Given data: D = 20 mm, L<sub>j</sub> = 60 mm, v = 14 m/min, f = 0.3 mm/ rev. with usual notations.<br/>
Substituting the data in the Equation (1), we calculate the drill rotational speed, that is<br/>
<center>v = &pi; x 25 x N/1000<br/>
or <br/> N = 178 rpm.</center>
Length of tool travel = L<sub>j</sub> + Length of approach and over travel.<br/>
<center>= 60 + 5 = 65 mm</center>
Substituting the values of f, L and N in Equation (3), we get<br/>
<center>t = 65 / (0.3 x 178)<br/>
= 1.21 minute.</center>
</p></dd>
<table><tr><td style="font-weight:bold;"><a href="Unit5lesson6.php" title="Shaping, Planing & Slotting Operations">Lecture 6</a></td></tr></table>
</div>
<div id="footer">
&copy; MEM103 - Dayalbagh Educational Institute <a href="https://www.dei.ac.in" target="_blank" title="DEI">(www.dei.ac.in)</a>&nbsp;-&nbsp;<a href="../ajay/index.html" target="_blank" title="Profile">Ajay Kant Upadhyay</a></div>
</body>
</html>
<?php
}
?>