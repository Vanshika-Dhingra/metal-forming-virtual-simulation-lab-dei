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
<table width="100%"><tr>
<td width="30%" style="font-size:14px; color:#ff0066; font-weight:bold;">Welcome <?php echo $_SESSION['name'];?></td>
<td style="text-align:right;"><a href="mem.php" title="Manufacturing Process-I">Lecture Notes</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="memHome.php" title="Manufacturing Process-I">MEM103 Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="mem_out.php" title="Sign out from Manufacturing Process">Logout</a></td>
</tr></table><br/></div>
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
<table border="0" width="100%">
<tr><td width="65%"><b>Lesson 4 Resistance Welding</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="MEM103/Unit4/Unit4Lesson4.pdf" target="_blank" title="Download Lesson 4">Lesson 4 Download</a></td></tr>
<tr><td><a href="#introduction">4.0&nbsp;&nbsp;&nbsp;Introduction</a></td></tr>
<tr><td><a href="#elements">4.1&nbsp;&nbsp;&nbsp;Principal Elements of Resistance Welding Machines</a></td></tr>
<tr><td><a href="#characteristics">4.2&nbsp;&nbsp;&nbsp;Characteristics of Resistance Welding</a></td></tr>
<tr><td><a href="#types">4.3&nbsp;&nbsp;&nbsp;Types of Resistance Welding</a></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.3.1&nbsp;&nbsp;&nbsp;Spot Welding</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.3.2&nbsp;&nbsp;&nbsp;Seam Welding</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.3.3&nbsp;&nbsp;&nbsp;Projection Welding</td></tr>
</table><br/></div>
<div>
<dt><b><a name="introduction">4.0 &nbsp;&nbsp;&nbsp;Introduction</a></b></dt>
<dd><p>
In resistance welding, coalescence is produced by localized heat generated through a resistance to the flow of electric current through the two members to be joined. This is accomplished by clamping two or more sheets of metal between copper electrodes and then passing an electrical current through them. 
The assembly heats up, and forging pressure is applied by the clamping setup through the electrodes. No fluxes or filler metals are used.<br><br>
<center><img src="images/mem/Unit4/Lesson4/1.jpg"><br><b>Figure 1: The basic resistance welding circuit</b><br><br>
<img src="images/mem/Unit4/Lesson4/2.jpg"><br><b>Figure 2: The desired temperature distribution across the electrodes and workpieces during resistance welding</b></center><br>
Concept of resistance welding can be explained in following manner. High current at a low voltage flows through the circuit and is in accordance with Ohm's law that is given by:<br>
<center><img src="images/mem/Unit4/Lesson4/f.jpg"></center><br>
Where, I is the current in amperes, E is the voltage in volts, and R is the resistance of the material in ohms.<br>
The total energy is expressed by the formula:<br>
<center>H= I x E x T</center><br>
Where, H is heat energy, T is the time in seconds during which current flows in the circuit.<br>
Combining above two equations gives:<br>
<center>H = I<sup>2</sup> x R x T</center><br>
For practical reasons a factor, which relates to heat losses should be included; therefore, the actual resistance welding formula is:<br>
<center>H =I<sup>2</sup> x R x T x K</center><br>
Where, I is current squared in amperes, R is the resistance of the work in ohms, T is the time of current flow in seconds, and K represents the heat losses through radiation and conduction.<br><br>
<b>Note</b>: <i>From the above formulation it can be concluded that welding heat is proportional to the square of the welding current. If the current is doubled, the heat generated is quadrupled. Welding heat is proportional to the total time of current flow, thus, if current
is doubled, the time can be reduced considerably. The welding heat generated is directly proportional to the resistance and is related to the material being welded and the pressure applied.</i>
</p></dd><br>
<dt><b><a name="elements">4.1 &nbsp;&nbsp;&nbsp;Principal Elements of Resistance Welding Machines</a></b></dt>
<dd><p>
A resistance-welding machine has three principal elements:<br>
(1) An electrical circuit with a welding transformer and a current regulator, and a secondary circuit, including the electrodes that conduct the welding current to the work.<br>
(2) A mechanical system consisting of a machine frame and associated mechanisms to hold the work and apply the welding force.<br>
(3) The control equipment (timing devices) to initiate the time and duration of the current flow. This equipment may also control the current magnitude, as well as the sequence and the time of other parts of the welding cycle.<br>
</p></dd><br>
<dt><b><a name="characteristics">4.2 &nbsp;&nbsp;&nbsp;Characteristics of Resistance Welding</a></b></dt>
<dd><p>
a. No filler material or flux is used.<br>
b. It uses non-consumable, low resistance copper alloy electrodes.<br>
c. Both heat and pressure are utilized.<br>
d. Pressure applied initially to hold the work piece.<br>
e. Pressure increased when the proper temperature has been obtained.<br>
f. Process control can be mechanized / computerized for mass production.<br>
g. The magnitude of the current in resistance welding may be as high as 10,0000A but the voltage is in the range of 0.5V to 10V.<br><br>
<b>Resistance welding process depends on following three factors</b><br>
a. Amount of current that passes through the two members to be joined.<br>
b. The pressure that the electrodes transfer to the two members to be joined.<br>
c. The time the current flows through the two members to be joined.<br><br>
<b>Advantages resistance welding process</b><br>
a. Welds made by this process are made very quickly as resistance welding operations are automatic.<br>
b. Produce a high volume of work at high speeds.<br>
c. Does not require filler materials.<br>
d. There are no limitations on welding position.<br>
e. This process works well with robotics.<br><br>
<b>Disadvantages resistance welding process</b><br>
a. Difficulties may be encountered when welding certain metals in thicker sections. Some metals require heat treatment after welding for satisfactory mechanical properties.<br>
b. Metals that have a lower resistivity but a higher thermal conductivity will be slightly more difficult to weld.<br>
c. The process requires special fixtures and automatic handling equipment.<br><br>
<b>Applications of resistance welding process</b><br>
a. The automotive industry is the major user of the resistance welding processes, followed by the appliance industry.<br>
b. Resistance welding is used by many industries manufacturing a variety of products made of thinner gauge metals.<br>
c. Resistance welding is also used in the steel industry for manufacturing pipe, tubing and smaller structural sections.<br>
d. Resistance welding is used primarily in the mass production industries where long production runs and consistent conditions can be maintained.
</p></dd><br>
<dt><b><a name="types">4.3 &nbsp;&nbsp;&nbsp;Types of resistance welding</a></b></dt>
<dd><p>
<b>4.3.1 Spot welding</b><br>
In spot welding, the tips of the two solid cylindrical electrodes are placed on either side of the lap joint of two sheet metals to be joined, and a high current is passed across the point of contact. The heat generated at the point of contact will melt the metals locally at the point of contact. After the current is switched off, the
melt is allowed to solidify under the pressure applied by the electrode tip forming the joint, which creates a small circular weld. Spot welding is primarily used for joining parts that normally upto 3 mm thickness. Spot-weld diameters range from 3mm to 12.5mm in diameter. The current ranges from 3000A to 40,000A.<br><br>
<center><img src="images/mem/Unit4/Lesson4/3.jpg" width="600"><br><b>Figure 3: Spot welding setup</b><br><br>
<img src="images/mem/Unit4/Lesson4/4.jpg"><br><b>Figure 4: Sample shapes joined by spot welding setup</b></center>
<b>Advantages of spot welding</b><br>
High speed process and capable of automation for mass production of sheet metal assemblies<br>
Process can be incorporated in assembly line<br>
Needs less skill<br>
Less warping and distortion in welded parts<br>
Welded products are uniform<br><br>
<b>Disadvantages of spot welding</b><br>
Parts once spot welded can not be disassembled<br>
Setup is quite costly<br>
Spot welds have less tensile strength<br>
High power requirement<br><br>
<b>Applications of spot welding</b><br>
Spot welding is especially useful in fabricating sheet metal parts especially in automobile and aircraft industry.<br><br>
<b>4.3.2 Seam welding</b><br>
In seam welding the cylindrical electrodes of spot welding are replaced by electrode wheels. The process is shown in Figure below. The metals to be welded are drawn between the rollers. The resulting weld is a series of overlapping spot welds made progressively along a joint. With a continuous AC
power supply, the electrically conducting electrode wheels produce continuous of the two parts whenever the current reaches sufficiently high level in the ac cycle, resulting spot welds at regular intervals.<br><br>
<center><img src="images/mem/Unit4/Lesson4/5.jpg"><br><b>Figure 5: Seam welding setup</b><br><br>
<img src="images/mem/Unit4/Lesson4/6.jpg"><br><b>Figures 6: Fabrication of tube from sheet metal by seam welding</b></center>
<b>Characteristics of seam welding</b><br>
A series of overlapping spot welds.<br>
High frequency current heats the adjoining surfaces of metal workpieces.<br>
Heated surfaces pressed together to form a welded joint<br>
Used extensively in producing pipes<br><br>
<b>Advantages of seam welding</b><br>
Gas tight joints can be obtained<br>
A single weld or multiple parallel seams can be produced.<br>
Needs no edge preparation<br><br>
<b>Disadvantages of seam welding</b><br>
Seam welding can only be performed along a straight or uniformly curved line.<br>
Thickness of more then 3 mm is difficult to weld.<br>
Strength of seam welded lap joints is lower than those of fusion welded butt joints.<br><br>
<b>Application of seam welding</b><br>
Lapped and flanged joints in cans, buckets, tanks, mufflers, exhaust systems, drip-mouldings on car body shells are commonly welded by this process.<br><br>
<b>4.3.3 Projection welding</b><br>
In this process coalescence is produced by the heat obtained from resistance to the flow of electric current through the workpieces, which are held together under pressure by electrodes. The resulting welds are localized at predetermined points
by the design of the parts to be welded. This localization is usually accomplished by projections, embossments, or intersections.<br><br>
<center><img src="images/mem/Unit4/Lesson4/7.jpg"><br><b>Figure 7: Projection Welding</b></center>
<b>Advantages of projection welding</b><br>
Number of weld can be made simultaneously in one cycle<br>
A better heat balance can be obtained by this process.<br>
Less chance of shrinkage and distortion around the weld zone<br>
Less overlap and closer weld spacing are possible.<br>
Projection welds can be made in thick work pieces which can not be<br>
accomplished by spot welding<br><br>
<b>Disadvantages of projection welding</b><br>
Needs precise alignment of the welding dies to equalize the electrode force<br>
and welding current<br>
For multiple wells higher capacity equipment is needed.<br><br>
<b>Applications of projection welding</b><br>
Projection welding is carried for steel radiator coupling elements, brake shoes, tin-plate tank handles.
</p></dd><br />
<table width=1024><tr><td style="text-align:left; font-weight:bold;"><a href="Unit4lesson3.php" title="Electric Arc Welding Process">Lecture 3</a></td>
<td style="text-align:right; font-weight:bold;"><a href="Unit4lesson5.php" title="Welding Defects">Lecture 5</a></td></tr></table>
</div>
<div id="footer">
&copy; MEM103 - Dayalbagh Educational Institute <a href="https://www.dei.ac.in" target="_blank" title="DEI">(www.dei.ac.in)</a>&nbsp;-&nbsp;<a href="../ajay/index.html" target="_blank" title="Profile">Ajay Kant Upadhyay</a></div>
</body>
</html>
<?php
}
?>