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
<table border="0" width="100%">
<tr><td width="65%"><b>Lesson 8 BASICS OF HEAT TREATMENT OF METALS</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="MEM103/Unit1/Unit1Lesson8.pdf" target="_blank" title="Download Lesson 8">Lesson 8 Download</a></td></tr>
<tr><td><dt><a href="#introduction">8.0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Heat Treatment</a></dt></td></tr>
<tr><td><dt><a href="#stages">8.1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stages in Heat Treatment</a></dt></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8.1.1&nbsp;&nbsp;&nbsp;Heating Stage</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8.1.2&nbsp;&nbsp;&nbsp;Soaking Stage</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8.1.3&nbsp;&nbsp;&nbsp;Cooling Stage</td></tr>
<tr><td><dt><a href="#types">8.2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Types of Heat Treatment</a></dt></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8.2.1&nbsp;&nbsp;&nbsp;ANNEALING</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8.2.2&nbsp;&nbsp;&nbsp;NORMALIZING</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8.2.3&nbsp;&nbsp;&nbsp;HARDENING</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8.2.4&nbsp;&nbsp;&nbsp;CASE HARDENING</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8.2.5&nbsp;&nbsp;&nbsp;TEMPERING</td></tr>
<tr><td><dt><a href="#growth">8.3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recovery, Recrystallsation and Grain growth</a></dt></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8.3.1&nbsp;&nbsp;&nbsp;Recovery</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8.3.2&nbsp;&nbsp;&nbsp;Recrystalization</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8.3.3&nbsp;&nbsp;&nbsp;Grain growth</td></tr>
</table><br /></div>
<div>
<dt><b><a name="introduction">8.0 &nbsp;&nbsp;&nbsp;Heat Treatment</a></b></dt>
<dd><p>
The process of heat treatment is the method by which metals are heated and cooled in a series of specific operations that never allow the metal to reach the molten state. The purpose of heat treatment is to make a metal more useful by changing or restoring its mechanical properties. Through heat treatment, metal can be made harder, stronger, and more resistant to impact. Also, heat treatment can make a metal softer and more ductile. The one disadvantage is that no heat-treatment procedure can produce all of these characteristics in one operation. Some properties are improved at the expense of others; for example, hardening a metal may make it brittle
</p></dd><br />
<dt><b><a name="stages">8.1 &nbsp;&nbsp;&nbsp;Stages in Heat Treatment</a></b></dt>
<dd><p>
Heat treating is accomplished in three major stages:<br /> 
Stage 1 - HEATING STAGE<br />
Stage 2 - SOAKING STAGE<br />
Stage 3 - COOLING STAGE<br /><br />
<b>8.1.1	Heating Stage</b><br />
The primary objective in the heating stage is to maintain uniform temperatures. If uneven heating occurs, one section of a part can expand faster than another and result in distortion or cracking. Uniform temperatures are attained by slow heating.<br /><br /> 
<b>8.1.2	Soaking Stage</b><br />
After the metal is heated to the proper temperature, it is held at that temperature until the desired internal structural changes take place. This process is called soaking. The length of time held at the proper temperature is called the soaking period.<br /><br />
<b>8.1.3	Cooling Stage</b><br />
After a metal has been soaked, it must be returned to room temperature to complete the heat-treating process. To cool the metal, it can be placed in direct contact with a cooling medium composed of a gas, liquid, solid, or combination of these. The rate at which the metal is cooled depends on the metal and the properties desired. The rate of cooling depends on the medium; therefore, the choice of a cooling medium has an important influence on the properties desired. Quenching is the procedure used for cooling metal rapidly in oil, water, brine, or some other medium.
</p></dd><br />
<dt><b><a name="types">8.2 &nbsp;&nbsp;&nbsp;Types of Heat Treatment</a></b></dt>
<dd><p>
Four basic types of heat treatment are annealing, normalizing, hardening, and tempering.<br /><br /> 
<b>8.2.1	ANNEALING</b><br />
In general, annealing is the opposite of hardening, metals are annealed to relieve internal stresses, soften them, make them more ductile, and refine their grain structures. Annealing consists of heating a metal to a specific temperature, holding it at that temperature for a set length of time, and then cooling the metal to room temperature. The cooling method depends on the metal and the properties desired. Some metals are furnace-cooled, and burying them in ashes, lime.<br /><br />
<b>8.2.2	NORMALIZING</b><br /> 
Normalizing is a type of heat treatment applicable to ferrous metals only. It differs from annealing in that the metal is heated to a higher temperature and then removed from the furnace for air-cooling.<br />
The purpose of normalizing is to remove the internal stresses induced by heat treating, welding, casting, forging, forming, or machining.<br /><br />
<b>8.2.3	HARDENING</b><br /> 
The hardening treatment for most steels consists of heating the steel to a set temperature and then cooling it rapidly by plunging it into oil, or water. Hardening increases the hardness and strength of the steel, but makes it less ductile. To harden steel, cool the metal rapidly after thoroughly soaking it at a temperature slightly above its upper critical point.<br /><br />
<b>8.2.4	CASE HARDENING</b><br /> 
Case hardening produces a hard, wear-resistant surface or case over a strong, tough core. The principal forms of casehardening are carburizing, cyaniding, and nitriding. In case hardening, the surface of the metal is changed chemically by introducing a high carbide or nitride content. The core remains chemically unaffected. When heat-treated, the high-carbon surface responds to hardening, and the core toughens.<br />
Case hardening is ideal for parts that require a wear-resistant surface and must be tough enough internally to withstand heavy loading.<br /><br />
<b>Methods of case hardening</b><br />
<b>Carburizing</b><br />
In Carburizing carbon is added to the surface of low-carbon steel. This results in a carburized steel that has a high-carbon surface and a low-carbon interior. Two methods are used for carburizing steel. One method consists of heating the steel in a furnace containing a carbon monoxide atmosphere. The other method has the steel placed in a container packed with charcoal or some other carbon-rich material and then heated in a furnace. The depth of the carbon penetration depends on the length of the soaking period.<br /><br />
<b>Cyaniding</b><br />
Preheated steel is dipped into a heated cyanide bath and allowed to soak. Upon removal, it is quenched and then rinsed to remove any residual cyanide. This process produces a thin, hard shell that is harder than the one produced by carburizing and can be completed in 20 to 30 minutes. The major drawback is that cyanide salts are a deadly poison.<br /><br />
<b>Nitriding</b><br />
It differs from the other methods in that the individual parts have been heat-treated and tempered before nitriding. The parts are then heated in a furnace that has an ammonia gas atmosphere. No quenching is required so there is no worry about warping or other types of distortion.<br /><br />
<b>8.2.5	TEMPERING</b><br />
Steel is tempered after it is hardened, to relieve the internal stresses and reduce brittleness. Tempering consists of heating the steel to a specific temperature (below its hardening temperature), holding it at that temperature for the required length of time, and then cooling it, usually instill air. Tempering is always conducted at temperatures below the low-critical point of the steel. In this respect, tempering differs from annealing, normalizing, and hardening in which the temperatures are above the upper critical point
</p></dd><br />
<dt><b><a name="growth">8.3 &nbsp;&nbsp;&nbsp;Recovery, Recrystallsation and Grain growth</a></b></dt>
<dd><p>
When a material is strained beyond the elastic limit, its crystal structure gets deformed. When the external load is removed, the material will be still in some state of internal stress. Removal of the external force should allow for the recovery of all elastic strain, but for any individual crystal, surrounding rigid crystals will hinder complete elastic recovery and there will be some locked-in elastic strain. When a material in this condition is heated, changes will begin to take place. If the temperature is raised sufficiently the metal attempts to approach equilibrium through three processes: recovery, recrystallisation and grain growth. A schematic drawing indicating recovery, recrystallisation and grain growth and the chief property changes in each region is shown in Figure. These properties are explained below.<br /><br />
<b>8.3.1	Recovery</b><br />
The partial restoration of the original properties, produced by reducing the distortion of the crystal lattice without noticeable changes in microstructure, is called recovery. If a strain hardened metal is heated to a comparatively low temperature, the elastic distortion of the crystal lattice is reduced. This is primarily a low-temperature process, and the property changes produced do not cause appreciable change in the microstructure. This heating will slightly lower the strength of the hardened metal. But the elastic limit and ductility will increase though they will not reach the values processed by the initial material (before strain hardening). The principle effect of recovery will be the relief of internal stresses due to cold working. No changes in microstructure are observed in this process.<br /><br />
<b>8.3.2	Recrystalization</b><br />
At high temperatures, new grains start growing and if the temperature is sufficiently high, growth of new grains is accelerated and continuous until the formation of new grains. This process of formation of new grains is called as recrystalization.<br /><br />
<center><img src="images/mem/Unit1/Lesson8.jpg"><br /><b>Figure 1</b>: Recovery, recrystalization and Grain Growh</center><br />
The temperature at which the process of recrystalization is said to complete is known as recrystalization temperature. It is important to note that recrystalization temperature is different for different materials. Recrystalization temperatures of some common metals are (in degree Celsius):<br /><br />
<center><table border="0" width="600">
<tr><td>Aluminum:</td><td>150&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>Iron:</td><td>450&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>Copper:</td><td>200</td></tr>
<tr><td>Magnesium:</td><td>150&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>Gold:</td><td>200&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>Lead:</td><td>below room temperature</td></tr>
</table></center><br />
Following points are important from the point of view of recrystalization process.<br />
i)  Recrystalization is a thermally activated mechanism, which occurs more rapidly at higher temperatures.<br />
ii)   Pure metal recrystalizes at a lower temperature than impure one while other things are equal. This is owing to the fact that impurities lower the mobility of dislocations.<br />
iii)  For a metal of given purity, the greater the degree of cold work, the more readily recrystalization takes place.<br /><br />
<b>8.2.3	Grain growth</b><br />
Just after a metal has recrystalized, the grains are smaller and somewhat regular in shape. The grains will grow, if the temperature is high enough or if the temperature is allowed to exceed the minimum required for recrystalisation. This growth is the result of the tendency to return to more stable and larger state, and appears to depend primarily on the shape of the grain.<br />
An interesting example of grain growth can be seen in the ice of a snow bank. The snowflakes start out as numerous small ice crystals, lose their identity with time, and are replaced by larger granular ice crystals. A few slightly larger crystals have grown at the expense of the many small crystals. Another example could be the formation of large bubbles from the small bubbles of soap.<br /><br />
<b>What is the purpose of heat treatment?</b><br />
The purpose of heat treatment is to make a metal more useful by changing or restoring its mechanical properties. Through heat treatment, metal can be made harder, stronger, and more resistant to impact.<br /><br />
<b>Why uniform temperature is maintained during heating stage of heat treatment?</b><br />
The primary objective in the heating stage is to maintain uniform temperatures. If uneven heating occurs, one section of a part can expand faster than another and result in distortion or cracking.<br /><br />
<b>Why Nonferrous metals are seldom preheated?</b><br />
Nonferrous metals are seldom preheated, because they usually do not require it, and preheating can cause an increase in the grain size in these metals.<br /><br />
<b>On what factors does the cooling rate depend? Or On what factors does the the selection of quenching Media depends?</b><br />
The cooling rate of an object depends on many things. The size, composition, and initial temperature of the part and final properties are the deciding factors in selecting the quenching medium.<br /><br />
<b>What is the function of quenching medium?</b><br />
A quenching medium must cool the metal at a rate rapid enough to produce the desired results.<br /><br />
<b>What are the different stages of heat treatment?</b><br />
Heat-treating is accomplished in three major stages:<br />
Stage l-Heating the metal slowly to ensure a uniform temperature<br />
Stage 2-Soaking (holding) the metal at a given temperature for a given time and cooling the metal to room temperature<br />
Stage 3-Cooling the metal to room temperature<br /><br />
<b>What is the drawback in annealing copper?</b><br />
The one drawback experienced in annealing copper is the phenomenon called "hot shortness". At about 480<sup>o</sup>C, copper loses its tensile strength, and if not properly supported, it could fracture.<br /><br />
<b>Why steels are tempered after hardening?</b><br />
Generally, the harder the steel, the more brittle it becomes. To remove some of the brittleness, one should temper the steel after hardening.<br /><br />
<b>How magnets are heat-treated? Why they are so hard?</b><br />
Permanent steel magnets are made of special alloys and are heat treated by hardening and tempering. Hardness and stability are the most important properties in permanent magnets. Magnets are tempered at the minimum tempering temperature of 100<sup>o</sup>C by placing them in boiling water for 2 to 4 hours. Because of this low-tempering temperature, magnets are very hard.<br /><br />
<b>What is the purpose of tempering?</b><br />
The purpose of tempering is to reduce the brittleness imparted by hardening and to produce definite physical properties within the steel. Besides reducing brittleness, tempering softens the steel. That is unavoidable, and the amount of hardness that is lost depends on the temperature that the steel is heated to during the tempering process.<br /><br />
<b>Why case hardened parts should not be tempered?</b><br />
Case hardened parts should not be tempered at too high a temperature or they may loose some of their hardness.<br /><br />
<b>What successful heat treatment requires?</b><br />
Successful heat treatment requires close control over all factors affecting the heating and cooling of a metal. This control is possible only when the proper equipment is available. The furnace must be of the proper size and type and controlled, so the temperatures are kept within the prescribed limits for each operation. Even the furnace atmosphere affects the condition of the metal being heat-treated.<br /><br />
<b>Give some characteristics of annealing</b>.<br />
<b>Annealing</b><br />
1.	Requires slow cooling rate to prevent martensite formation.<br />
2.	Used to ensure microstructure is 100% ferrite/pearlite or 100% pearlite/cementite.<br />
3.	Used to remove thermal strains from welded and highly cold-worked materials.
</p></dd><br />
<table width=1024><tr><td style="text-align:left; font-weight:bold;"><a href="Unit1lesson7.php" title="Ferrous Metals">Lecture 7</a></td>
<td style="text-align:right; font-weight:bold;"><a href="Unit1lesson9.php" title="Plastics">Lecture 9</a></td></tr></table>
</div>
</div>
<div id="footer">
&copy; MEM103 - Dayalbagh Educational Institute <a href="https://www.dei.ac.in" target="_blank" title="DEI">(www.dei.ac.in)</a>&nbsp;-&nbsp;<a href="../ajay/index.html" target="_blank" title="Profile">Ajay Kant Upadhyay</a></div>
</body>
</html>
<?php
}
?>