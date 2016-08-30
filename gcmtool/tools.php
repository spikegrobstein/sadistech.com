<html><head>
<title>GCMTool::Tools</title>
<link rel="stylesheet" type="text/css" href="gcmtool.css">
</head><body>
<div id=navbar>
<h1>GCMTool</h1>
<hr>
<a href="index.php">About</a>
<a href="tools.php">Tools</a>
<a href="tutorial.php">Tutorial</a>
<a href="screenshots.php">Screenshots</a>
<hr width=50%>
<a 
href="https://sourceforge.net/project/showfiles.php?group_id=109905&package_id=118745">Download</a>
<a href="http://sourceforge.net/projects/gcmtool/">Project Page</a>
<hr width=50%>
<a href="http://www.sadistech.com">Sadistech</a>

<a class=banner href="http://sourceforge.net"><img  
style="padding-top: 10;"
src="http://sourceforge.net/sflogo.php?group_id=109905&amp;type=2"  
width="125" height="37" border="0" alt="SourceForge.net Logo" /></a>
</div>
<div class=header>
<img src="gcmtool_title.gif">
</div>
<div class=content>

<h1>gcmtool</h1>
<p>gcmtool is the primary program in the gcmtools suite. It is the 
program that you use to work directly with GameCube DVD images (.gcm and 
.iso).</p>

<p> If you run gcmtool with a GCM as a commandline argument, it'll dump 
information about your game:
<code>Mookid:~ spike$ gcmtool naruto2_JAP.gcm 
Filename:       naruto2_JAP.gcm
System ID:      G (Gamecube)
Game ID:        NU
Region:         J (Japan/NTSC)
Maker Code:     DA (Tomy)
Game Name:      NARUTO2
DOL offset:     128768
Apploader:      9280
ApploaderSize:  6484
FST:            1903360
File count:     348
</code>
</p>
<p>To see all of the available commandline options and information about 
them, run gcmtool with the -? (or --help) option:
<code>gcmtool -?</code>
</p>
<h1>gcmbnrtool</h1>
<p>gcmbnrtool is used for working with opening.bnr found in the root 
directory of all GCMs. It contains extra information about the developer 
and game including a brief description of the game and a bitmap icon. 
gcmbnrtool can modify any of that information (unfortunately only in 
ASCII. So if you wanna put information in japanese, you're SOL), as well 
as extract the icon to a .raw (for photoshop) or even a .ppm 
(portable-pixel-map) format and inject your own custom icon (currently 
only from a .raw).</p>

<p>By default, gcmbnrtool will print out information about the .bnr:
<code>Mookid:~ spike$ gcmbnrtool prince_opening.bnr 
Version:        1
Name:           Prince of Persia
Developer:      UBISOFT Entertainment
Full Name:     
Full Developer: Prince of Persia: The Sands of Time
Description:    ? 2003 UBISOFT Entertainment
</code>
</p>
<p>To see usage, run gcmbnrtool with the -? commandline option.</p>
</div>
<div class=footer>
&copy;2004 Sadistech.com<br>
Nintendo, GameCube and the GameCube logo are property of
<a href="http://nintendo.com">Nintendo</a><br>
Anything not mentioned here is property of their respective owners.
</div>
</body></html>
