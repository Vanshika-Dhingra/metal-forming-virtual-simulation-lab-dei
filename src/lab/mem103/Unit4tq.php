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
<table Border="0" width="100%"><tr>
<td width="35%" style="font-size:14px; color:#ff0066; font-weight:bold;">Welcome <?php echo $_SESSION['name'];?></td>
<td style="text-align:right;"><a href="mem.php" title="Lecture Notes">Lecture Notes</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="memHome.php" title="Manufacturing Process-I">MEM103 Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="mem_out.php" title="Sign out from Manufacturing Process">Logout</a></td>
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
<b>Unit 5 Welding Terminal Questions</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="MEM103/Unit4/Unit4tq.pdf" target="_blank" title="Download Terminal Questions">Terminal Questions Download</a><br/><br/>
1. Explain, with an example, the situation in which joining process becomes essential when compared to other manufacturing processes.<br/><br/>
2. What is an oxidizing flame on a torch? Why it is used?<br/><br/>
3. What is a reducing flame on a torch? When it is used?<br/><br/>
4. Explain the following terminologies: (a) base metal (b) weld bead (c) weld pass (d) tack weld (e) puddle<br/><br/>
5. State the advantages and limitations of: (a) arc welding (b) gas welding (c) resistance welding<br/><br/>
6. Which method of welding will be best for welding high melting point metals? Justify your answer.<br/><br/>
7. How do you define the term ‘operating conditions’ as applied to arc welding and gas welding processes?<br/><br/>
8. What are the consequences of having (a) high current (b) high speed and (c) high voltage in arc welding processes?<br/><br/>
9. Distinguish between gas welding, arc welding and resistance welding with respect to temperature generated, quality of welding obtained, application and cost.<br/><br/>
10. Do you think oxy-acetylene flame can be used for cutting? Justify your answer.<br/><br/>
11. Do you think in gas welding process, you can substitute methane in place of acetylene? What are the consequences of doing so?<br/><br/>
12. What are the consequences of using air in place of oxygen in oxyacetylene welding?<br/><br/>
13. What is meant by weld quality? Discuss the factors that influence it.<br/><br/>
14. What is the basic principle of resistance welding?<br/><br/>
15. Give any two examples of the applications of gas welding, resistance welding and arc welding processes other than given in the text.<br/><br/>
16. Do you agree that in welding the core (filler material) should be consumed at slower rate than electrode coating? Justify your answer.
</div><br/>
<div id="footer">
&copy; MEM103 - Dayalbagh Educational Institute <a href="https://www.dei.ac.in" target="_blank" title="DEI">(www.dei.ac.in)</a>&nbsp;-&nbsp;<a href="../ajay/index.html" target="_blank" title="Profile">Ajay Kant Upadhyay</a></div>
</body>
</html>
<?php
}
?>
