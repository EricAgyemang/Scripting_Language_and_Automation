<!DOCTYPE html>
<html lang="en-us">
<head>
<title>27. Formatted Output | Python Tutorial | python-course.eu</title>
<meta name="description" content="formatted output in three ways: the string methods ljust, rjust, center, format or using a C-style like formatting" />
<meta name="msapplication-config" content="/browserconfig.xml" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<meta name="format-detection" content="telephone=no" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link href="/favicon.ico" rel="shortcut icon">
<link rel="preload" href="/FluxRegular.woff2" as="font" type="font/woff2" crossorigin>
<script>
function gebi(ele){return document.getElementById(ele);}
</script>
<style>
/* Applies everywhere */

*{box-sizing:border-box}
@font-face {
  font-family: FluxRegular;
  src: url(/FluxRegular.woff2);
  font-display: swap;
}
@font-face {
  font-family: Georgia;
  src: local(Georgia);
  text-size-adjust: 80%;
  line-height: 1.85;
  letter-spacing: -0.15px;
}
body{margin:0;padding:0;font-family:arial,verdana,sans-serif}

/* Widths, flex */

#wrapper, #hori_nav ul, #foot_nav ul{max-width:1000px;margin:0 auto}
#wrapper{display:flex;padding:0 0.4em;position:relative}
#content{flex:1;padding:0;max-width:75%}

/* Header */

header{padding:0.4em;margin-bottom:2em}
#logoImgs span{font-family:FluxRegular, Georgia,Times,"Times New Roman";font-size:3.7vw;color:#3777ad;font-weight:bold;white-space:nowrap}
#logoImgs span span{color:#e55;font-size:1.3em;line-height:0.5}
#logo{background-image:url(/images/common/pc-logo-pt1.webp);width:50%;max-width:381px;height:74px}
#logoImgs a{text-decoration:none}
#logoImgs{display:flex;justify-content:center;align-items:center}
#logoImgs > span:first-child{margin-right:0.3em}
#logoImgs > span:first-child a{color:#3777ad}
#hambSrch{display:flex;justify-content:space-between}
#hambarg{cursor:pointer;margin:auto 0}
#googSrchForm{max-width: max-content;margin:1em auto;font-size:0.85em}
#googSrchForm label{display:none}
#googlebox{width:calc(100% - 40px);max-width:200px}
#hori_nav{background:#3777ad;display:flex;justify-content:center}
#hori_nav ul{flex:1;font-size:0.9em}
#hori_nav ul{margin:0;padding:0.2em 0;background:#3777ad;color:#fff;line-height:2.2em}
#hori_nav li{margin:0.25em 0;padding:0 0.25em;line-height:1.65em;list-style-type:none;display:inline-block;vertical-align:middle}
#hori_nav li{border-right:2px solid #efefef}
#hori_nav li a{padding:0.2em 0.5em;color:#fff;text-decoration:none}
#hori_nav li a:hover{background:#5ad;color:lightYellow}
#hori_nav li.chosenUnder{padding:0em 0.5em;margin:0;background:#113}
#hori_nav li.chosen{padding:0em 0.75em;margin:0;background:#113}

/* Left navigation */

#verti_nav{width:25%;margin-right:1em;font-size:0.9em}
p.navHeading{margin:0;padding:0.3em;background:#3777ad;color:#fff}
#verti_nav ol{padding:0 0 0 2em}
#verti_nav ol li:first-child{list-style:none;margin-left:-1.2em}
#verti_nav li{padding:0.25em 0.25em}
#verti_nav li a{text-decoration:none}
#verti_nav li a:hover{text-decoration:underline}
#verti_nav li.chosen{padding:0.25em 0.2em;background:#bef}
.topDn{position:relative;top:0.4em}
#auth{margin-top:1em}
#auth ul{padding-left:15px}
.langLink{display:flex}
.langLogo{color:#3777ad;font-weight:bold;padding:0.1em;margin-right:0.3em;border:2px solid #3777ad;border-radius:0.3em;height:fit-content}

/* Page contents drop down */
/* (See @media below for #thisPageNavRight directives */

#thisPageNav{margin:0 auto;width:250px;border:1px solid #ddd;font-size:0.9em;background:#fafafa}
#thisPageNav p{margin:-1px;padding-left:0.7em;display:flex;justify-content:space-between;font-weight:bold;cursor:pointer;background:#3777ad}
#thisPageNav p span{display:inline-block;transform:rotate(90deg)}
#thisPageNav p span.up{transform:rotate(270deg)}
ul.pageNav{margin:0.4em 0;padding:0}
ul.pageNav li{list-style-type:none;padding:0.25em;color:#00f}
ul.pageNav li:hover{background:#def;cursor:pointer}
ul.pageNav li.indent3{padding-left:1em}

/* Main content area: general appearance */

h1,h2,h3,h4{font-family:FluxRegular, Georgia,Times,"Times New Roman",serif;letter-spacing: 0.02em}
h1{margin-top:0;color:#3777ad;font-size:2em}
h2{padding:0.3em;background:#3777ad;color:#fff;font-size:1.3em}
h3{font-size:1.35em;margin:1em 0 0;line-height:1.0;color:#3777ad}
h4{margin:1.2em 0 0.75em}
.noBg{background:none}
.dRed{color:#e55}
.bold{font-weight:bold}
.inviz{visibility:hidden}
.blur{filter:blur(3px);-webkit-filter: blur(3px);background:#ddd}
img{margin:0 auto;max-width:100%;height:auto;display:block}
img.inline{display:inline}
.imgCenter{text-align:center}
.textCenter{text-align:center}
.alignRt{text-align:right}
.wordBreakAll{word-break:break-all}
.displayNone{display:none}
.displayBlock{display:block}
.sticky{position:sticky;top:1em}
.overflowXauto{display:block;height:auto;margin:1em 0;padding:0 2px 0.25em;-webkit-box-sizing:border-box;overflow-x:auto;white-space:nowrap}
.overflowXauto::-webkit-scrollbar{height:8px}
.overflowXauto::-webkit-scrollbar-track{-webkit-box-shadow:inset 0 0 4px rgba(0,0,0,0.3);border-radius:7px}
.overflowXauto::-webkit-scrollbar-thumb{border-radius:7px;-webkit-box-shadow:inset 0 0 8px rgba(0,0,0,0.5)}
.overflowXauto::-webkit-scrollbar-thumb:hover{-webkit-box-shadow:inset 0 0 4px rgba(0,0,0,0.8)}
.highlight{margin:.4em;border:0;padding:0;background-color:#f7fcf6}
.highlight .k, .highlight .kn{color:#008000;font-weight:bold}
.highlight .nb, .ansi-green-intense-fg{color:#008000;font-weight:bold}
.highlight .nc, .highlight .nn, .highlight .fm{color:#00f;font-weight:bold}
.highlight .ow{color:#a2f;font-weight:bold}
.ne{color:#d2413a;font-weight:bold}
.highlight .o{color:#666}
.highlight .s2{color:#ba2121}
.ansi-red-intense-fg, .ansi-red-fg{color:#b22b31;font-weight:bold}
.c1{color:#377;font-style:italic}
.s1{color:#ba2121}
.sd{color:#ba2121;font-style:italic}
.output_stderr{background:#fdd}
.output_prompt{color:#ba2121;font-weight:bold;letter-spacing:0.1em;font-size:0.95em}
.output_text pre{margin-left:2em}
pre,code,kbd,samp{white-space:pre-wrap;word-wrap:break-word}
mjx-container{word-wrap:break-word}
pre{font-size:1.15em;padding:0.3em}
code{font-size:1.25em;background-color:#f2f5f1}
pre code{font-size:1em;background-color:#fff}
h2 code{color:#000}
table{border-collapse:collapse;white-space:normal}
table+table{margin:1.5em 0}
table td{border:1px solid #999;padding:0.3em;vertical-align:top}
table th{vertical-align:top;padding:0.3em}
table.col1Center td:first-child{text-align:center}
table.brdrNone{border:none}

/* Live course ads */

.crsAd{margin:2em 7%;border:1px solid #3777ad;border-radius:0.5em;font-size:0.9em;background:#f5ffff}
p.adHd{margin:-1px -1px 0;background:#14448b;border-top-left-radius:0.5em;border-top-right-radius:0.5em;color:#fff;padding:0.3em;font-weight:bold}
.flx{display:flex}
.crsAd div{margin:0 0.5em}
.crsAd .flx:first-child div:first-child{min-width:110px;padding-top:0.5em}
.crsAd div p:first-child{margin-top:0.5em}
.kurses div{display:inline-block;width:220px}
.fixWidth{font-family:monospace}

/* Forms */

input[value="Publish"]{padding:0.5em 1em;background:green;color:#fff;font-weight:bold;border-radius:0.3em;cursor:pointer}

/* Check if old nested divs, tblBorder are gone */
.border-box-sizing, .code_cell, .rendered, .input, .inner_cell, .input_area{border:3px solid #f0f}
.tblBorder{border:3px solid #f0f}

/* Footer */

footer a{text-decoration:none}
#foot_nav li a:hover, #footAbout li a:hover{color:#3777ad;background-color:#bef}
#foot_nav ul{display:flex;margin-top:1em;width:100%;padding:0 0.5em;justify-content:space-between}
#foot_nav li:not(:empty){margin:0 0.5em;box-shadow:4px 4px 3px #bbb;border:3px solid #3777ad;border-radius:0.4em;padding:0;list-style-type:none;line-height:1.5em}
#foot_nav ul li:nth-child(2){text-align:right}
#foot_nav li a{display:inline-block;height:100%;border-radius:0.2em;padding:0.4em;text-decoration:none;color:#3777ad}
#footAbout{margin-top:3em;padding:0.5em 0.5em 3em;background:#3777ad;list-style-type:none;columns:2;-webkit-columns:2}
#footAbout ul{margin:0;padding:0 0.5em;list-style-type:none}
#footAbout li{padding-bottom:0.75em;break-inside:avoid-column}
#footAbout li a{color:#fff}
#toTop{border-radius:0.4em;padding:0.4em;display:none;position:fixed;bottom:8px;right:5px;background:#ddd;border:1px solid #777;opacity:0.6;cursor:pointer}
#toTop p{margin:0;padding:0;font-weight:bold;color:#04447a}

/* @media widths */

@media screen and (max-width:320px){
	#logoImgs span{white-space:normal;font-size:1.7em}
}

@media screen and (max-width:450px){
  #hori_nav li:nth-child(2) span:nth-child(1){display:none}
  #hori_nav li:nth-child(n+3) span:nth-child(2){display:none}
}
  
@media screen and (max-width:699px){
  header{margin-bottom:1em}
  #logoImgs span{font-size:1.5em} 
  #logo{height:10vw}
  #hori_nav li{margin:0.1em 0;padding-left:0.1em;padding-right:0.1em}  
  #verti_nav{border:1px solid #5a8652; padding:0; position:absolute; top:0;left:5%;width:90%; background:#f3f8fb;font-size:1.2em}
  #vertNavHomeP{font-size:0.8em;padding:0 0.3em}
  #vertNavHomeP a{text-decoration:none}
  .verti_nav_ad{padding:0.3em;font-size:0.8em}
  #verti_nav ol{font-size:0.8em}
  #vertiImg{display:none}
  p.navHeading{margin:-1px}
  #verti_nav ul{padding:0 0.3em}
  #verti_nav li{border-bottom:1px solid #aaa}
  .navInviz{display:none}
  #content{max-width:100%;padding:0 0.25em}
  h1{margin-bottom:0.5em} 
  #sideBarNonNav{display:none}
  #liveCrsHead, .verti_nav_ad{display:none} 
}

@media screen and (min-width:700px){  
  #hambarg{display:none}
  #hambSrch{display:block}
  #googSrchForm{margin:1em 0 1em auto}
  #verti_nav p.navHeading:nth-child(n+2){margin-top:2em}
  #vertNavHomeP{display:none}  
  #newVertiNavDiv{position:sticky;top:1em}
}

	

/***************************************
*
* "On this page" nav (right margin) 
* For desktop only
* (height:fit-content REQUIRED for sticky on #thisPageNavRight)
*
***************************************/

@media screen and (min-width:1000px) and (min-height:500px){
  #wrapper{max-width:1200px}
  #verti_nav{width:20%}
  #content{width:60%}  #thisPageNavRight{width:20%;height:fit-content;max-width:250px;margin-left:1em;position:sticky;top:1em;font-size:0.85em}
  .thisH{background:#bef;color:black} 
  #thisPageNav{display:none}  
}
@media screen and (max-width:1000px), screen and (max-height:500px) {
  #thisPageNavRight{display:none}
}


@media print {
  #verti_nav, #hori_nav, footer, #toTop, #hambarg{display:none}
  #wrapper, #content{width:100%;max-width:100%;display:block}
  #content{font-family:"Times New Roman", Times, serif;font-size:10pt}
  pre{font-size:10pt}
  #thisPageNav, #thisPageNavRight{display:none}
  #googSrchForm{display:none}
  .crsAd{display:none}
  pre{margin:1em 0}
}</style>

</head>
<body>
<header>
<div id="logoImgs">
<span><a href="/">python-course<span>.</span>eu</a></span>
<span id="logo"></span>
</div>


<div id="hambSrch">

<svg width="25" height="25" id="hambarg" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z" style="fill:#3777ad" />
</svg>


<div id="googSrchWrap">
<form action="/" method="get" id="googSrchForm">
 <label for="googlebox">Search site:</label>
 <input type="text" value="" name="query" id="googlebox" placeholder="Search site"/>
 <input type="submit" id="googleboxButt" value="Go"/>
</form>
</div>
</div>



<nav id="hori_nav">
<ul><li><a href="/">Home</a></li><li class="chosenUnder"><a href="/python-tutorial/"><span>Python</span> <span>Tutorial</span></a></li><li><a href="/oop/"><span>OOP</span></a></li><li><a href="/advanced-python/"><span>Advanced</span></a></li><li><a href="/applications-python/"><span>Applications</span></a></li><li><a href="/numerical-programming/"><span>Numerical</span> <span>Programming</span></a></li><li><a href="/machine-learning/"><span>Machine</span> <span>Learning</span></a></li><li><a href="/tkinter/"><span>Tkinter</span></a></li><li><a href="/about/"><span>About</span></a></li>	
 </ul>
</nav>
</header><div id="wrapper">
<nav id="verti_nav" class="navInviz">


<p class="navHeading" id="liveCrsHead">Python Training Courses</p>
<div class="verti_nav_ad">
<p>Live Python classes by highly experienced instructors:</p>
<p class="textCenter"><a href="/about/live-courses.php"><img class="inline topDn" width="150" height="109" src="/images/common/classroom_training_courses.jpg" alt="instructor-led training course" loading="lazy" /></a><br /><a href="/about/live-courses.php">Instructor-led training courses by Bernd Klein</a></p>
</div>


<p id="inThisChapHead" class="navHeading">In this <strong>Python Tutorial</strong> chapter</p>
<ol id="vertiNavOL" start="0">
<li><a href="/python-tutorial/">Intro to Python Tutorial</a></li>
<li><a href="/python-tutorial/history-and-philosophy-of-python.php">History and Philosophy of Python</a></li>
<li><a href="/python-tutorial/interpreter-interactive-shell.php">The Interpreter, an Interactive Shell</a></li>
<li><a href="/python-tutorial/execute-a-script.php">Execute a Script</a></li>
<li><a href="/python-tutorial/structuring-indentation.php">Structuring with Indentation</a></li>
<li><a href="/python-tutorial/assignment-expressions.php">Assignment Expressions</a></li>
<li><a href="/python-tutorial/data-types-and-variables.php">Data Types and Variables</a></li>
<li><a href="/python-tutorial/operators.php">Operators</a></li>
<li><a href="/python-tutorial/sequential-data-types.php">Sequential Data Types</a></li>
<li><a href="/python-tutorial/list-manipulation.php">List Manipulation</a></li>
<li><a href="/python-tutorial/shallow-and-deep-copy.php">Shallow and Deep Copy</a></li>
<li><a href="/python-tutorial/dictionaries.php">Dictionaries</a></li>
<li><a href="/python-tutorial/sets-and-frozen-sets.php">Sets and Frozen Sets</a></li>
<li><a href="/python-tutorial/sets-examples.php">Sets Examples</a></li>
<li><a href="/python-tutorial/input.php">Keyboard Input</a></li>
<li><a href="/python-tutorial/conditional-statements.php">Conditional Statements</a></li>
<li><a href="/python-tutorial/structural-pattern-matching.php">Structural Pattern Matching</a></li>
<li><a href="/python-tutorial/loops.php">While Loops</a></li>
<li><a href="/python-tutorial/for-loop.php">For Loops</a></li>
<li><a href="/python-tutorial/output-with-print.php">Output with Print</a></li>
<li class="chosen">Formatted Output</li>
<li><a href="/python-tutorial/working-with-dictionaries-and-while-loops.php">Working with Dictionaries and while Loops</a></li>
<li><a href="/python-tutorial/functions.php">Functions</a></li>
<li><a href="/python-tutorial/passing-arguments.php">Passing Arguments</a></li>
<li><a href="/python-tutorial/namespaces.php">Namespaces</a></li>
<li><a href="/python-tutorial/global-local-variables-namespaces.php">Global vs. Local Variables and Namespaces</a></li>
<li><a href="/python-tutorial/file-management.php">File Management</a></li>
<li><a href="/python-tutorial/modules-and-modular-programming.php">Modular Programming and Modules</a></li>
<li><a href="/python-tutorial/packages.php">Packages</a></li>
<li><a href="/python-tutorial/errors-and-exception-handling.php">Errors and Exception Handling</a></li>
</ol>
<p id="vertiImg"><img src="/images/python-tutorial/Printer_in_1568_110.webp" width="110" height="134" alt="Printer in 1568" loading="lazy" /></p>
<div id="sideBarNonNav">

<p class="navHeading">Classroom Training Courses</p>
<p>This website contains a free and extensive online tutorial by Bernd Klein, using material from his classroom Python training courses.</p>
<p>If you are interested in an instructor-led classroom training course, have a look at these Python classes:</p> 
<p class="textCenter"><a href="/about/live-courses.php"><img class="inline topDn" width="150" height="109" src="/images/common/classroom_training_courses.jpg" alt="instructor-led training course" loading="lazy" /></a><br /><a href="/about/live-courses.php">Instructor-led training course by Bernd Klein at Bodenseo</a></p>
<p><small>Image ©kabliczech - Fotolia.com</small></p>
<p class="navHeading">Deutsche Ausgabe</p>
<p class="langLink"><span class="langLogo">DE</span> <a href="https://www.python-kurs.eu/formatierte_ausgabe.php">Formatierte Ausgabe</a></p>

<p class="navHeading">Page author</p>
<div id="auth">	
<p>This page was written by <strong>Bernd Klein</strong>.</p>
<p>Bernd is an experienced computer scientist with a history of working in the education management industry and is skilled in Python, Perl, Computer Science, and C++. He has a Dipl.-Informatiker / Master Degree focused in Computer Science from Saarland University.</p>
<ul> 
<li><a href="https://www.facebook.com/bernd.klein.9256">Bernd Klein on Facebook</a></li>
<li><a href="https://www.linkedin.com/in/bernd-klein-22ab3720/">Bernd Klein on LinkedIn</a></li>
<li><a href="https://www.facebook.com/Bernd.C.Klein">python-course on Facebook</a></li>
</ul></div>

<p class="navHeading">PDF version</p>
<p><a href="/about/pdf-version-of-this-site.php"><img src="/images/common/PDF_150w.webp" width="150" height="207" alt="PDF versions of this site" loading="lazy" /></a>
<p class="textCenter"><img class="inline topDn" width="20" height="25" src="/images/common/pdf_logo_20w.webp" alt="PDF logo" loading="lazy" /> <a href="/about/pdf-version-of-this-site.php">PDF version of this site</a></p>

<p class="navHeading">Help Needed</p>
<p>This website is free of annoying ads. We want to keep it like this. You can help with your donation:</p>
<form class="textCenter" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick" />
<input type="hidden" name="hosted_button_id" value="4CJF5S9M4DVEW" />
<input type="hidden" name="lc" value="en_US">
<input type="image" src="/images/common/btn_donate_SM.gif" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
</form>
<p class="textCenter"><a  rel="nofollow" href="/about/donate-to-python-course-eu.php">The need for donations</a></p>
</div>


</nav> <!-- verti_nav -->
<article id="content">
<h1 id="h1-Formatted-Output">27. Formatted Output</h1>
<p><small>By <strong>Bernd Klein</strong>. Last modified: 23 May 2022.</small></p>
<div id="thisPageNav"><p class="navHeading">On this page <span>➤</span></p></div>
<h2 id="Many-Ways-for-a-Nicer-Output">Many Ways for a Nicer Output</h2>



<p>In this chapter of our Python tutorial we will have a closer look at the various ways of creating nicer output in Python. We present all the different ways, but we recommend that you should use the format method of the string class, which you will find at end of the chapter. &quot;string format&quot; is by far the most flexible and Pythonic approach.</p>
<p>So far we have used the print function in two ways, when we had to print out more than two values:</p>
<p>The easiest way, but not the most elegant one:</p>
<p>We used print with a comma separated list of values to print out the results, as we can see in the following example. All the values are separated by blanks, which is the default behaviour. We can change the default value to an arbitrary string, if we assign this string to the keyword parameter &quot;sep&quot; of the print function:</p>
<div class="cell">
<div class="highlight">
<pre><span class="n">q</span> <span class="o">=</span> <span class="mi">459</span>
<span class="n">p</span> <span class="o">=</span> <span class="mf">0.098</span>
<span class="nb">print</span><span class="p">(</span><span class="n">q</span><span class="p">,</span> <span class="n">p</span><span class="p">,</span> <span class="n">p</span> <span class="o">*</span> <span class="n">q</span><span class="p">)</span> 
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>459 0.098 44.982
</pre>
</div>
</div>
<div class="cell">
<div class="highlight">
<pre><span class="nb">print</span><span class="p">(</span><span class="n">q</span><span class="p">,</span> <span class="n">p</span><span class="p">,</span> <span class="n">p</span> <span class="o">*</span> <span class="n">q</span><span class="p">,</span> <span class="n">sep</span><span class="o">=</span><span class="s2">&quot;,&quot;</span><span class="p">)</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>459,0.098,44.982
</pre>
</div>
</div>
<div class="cell">
<div class="highlight">
<pre><span class="nb">print</span><span class="p">(</span><span class="n">q</span><span class="p">,</span> <span class="n">p</span><span class="p">,</span> <span class="n">p</span> <span class="o">*</span> <span class="n">q</span><span class="p">,</span> <span class="n">sep</span><span class="o">=</span><span class="s2">&quot; :-) &quot;</span><span class="p">)</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>459 :-) 0.098 :-) 44.982
</pre>
</div>
</div>
<p>Alternatively, we can construe a new string out of the values by using the string concatenation operator:</p>
<div class="cell">
<div class="highlight">
<pre><span class="nb">print</span><span class="p">(</span><span class="nb">str</span><span class="p">(</span><span class="n">q</span><span class="p">)</span> <span class="o">+</span> <span class="s2">&quot; &quot;</span> <span class="o">+</span> <span class="nb">str</span><span class="p">(</span><span class="n">p</span><span class="p">)</span> <span class="o">+</span> <span class="s2">&quot; &quot;</span> <span class="o">+</span> <span class="nb">str</span><span class="p">(</span><span class="n">p</span> <span class="o">*</span> <span class="n">q</span><span class="p">))</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>459 0.098 44.982
</pre>
</div>
</div>
<p>The second method is inferior to the first one in this example.</p>
<div class="crsAd">
		<p class="adHd">Live Python training</p>
		  <div class="flx">
		   <div>
			<a href="/about/live-courses.php"><img width="150" height="109" src="/images/common/classroom_training_courses.jpg" alt="instructor-led training course" loading="lazy" /></a>
		   </div>
		   <div>
			<p>Enjoying this page? We offer <strong>live Python training courses</strong> covering the content of this site.</p>
			<p>See: <a href="/about/live-courses.php">Live Python courses overview</a></p>
		   </div>
		  </div><p class="textCenter"><a href="https://www.bodenseo.com/course_enrolment.php">Enrol here</a></p>
</div>

<h2 id="The-Old-Way-or-the-non-existing-printf-and-sprintf">The Old Way or the non-existing printf and sprintf</h2>
<p><img width="300" height="387" src="/images/python-tutorial/Printer_in_1568_300w.webp" alt="Traditional Output with movable types" /></p>
<p>Is there a printf in Python? A burning question for Python newbies coming from C, Perl, Bash or other programming languages who have this statement or function. To answer &quot;Python has a print function and no printf function&quot; is only one side of the coin or half of the truth. One can go as far as to say that this answer is not true. So there is a &quot;printf&quot; in Python? No, but the functionality of the &quot;ancient&quot; printf is contained in Python. To this purpose the modulo operator &quot;%&quot; is overloaded by the string class to perform string formatting. Therefore, it is often called string modulo (or somethimes even called modulus) operator, though it has not a lot in common with the actual modulo calculation on numbers. Another term for it is &quot;string interpolation&quot;, because it interpolates various class types (like int, float and so on) into a formatted string. In many cases the string created via the string interpolation mechanism is used for outputting values in a special way. But it can also be used, for example, to create the right format to put the data into a database. Since Python 2.6 has been introduced, the string method format should be used instead of this old-style formatting. Unfortunately, string modulo &quot;%&quot; is still available in Python3 and what is even worse, it is still widely used. That&#39;s why we cover it in great detail in this tutorial. You should be capable of understanding it, when you encounter it in some Python code. However, it is very likely that one day this old style of formatting will be removed from the language. So you should get used to str.format().</p>
<p>The following diagram depicts how the string modulo operator works:</p>
<p class="imgCenter"><br />
<img width="600" height="234" src="/images/python-tutorial/string_modulo_overview_600w.webp" alt="General way of working of the string modulo operator" loading="lazy" /></p>
<p>On the left side of the &quot;string modulo operator&quot; there is the so-called format string and on the right side is a tuple with the content, which is interpolated in the format string. The values can be literals, variables or arbitrary arithmetic expressions.</p>
<p class="imgCenter"><img width="600" height="85" src="/images/python-tutorial/format_string_value_set_600w.webp" alt="General way of working of the string modulo operator, format string" loading="lazy" /></p>
<p>The format string contains placeholders. There are two of those in our example: &quot;%5d&quot; and &quot;%8.2f&quot;.</p>
<p>The general syntax for a format placeholder is</p>
<pre><code>%[flags][width][.precision]type 
</code></pre>
<p class="imgCenter"><br />
<img width="300" height="252" src="/images/python-tutorial/string_modulo_float_300w.webp" alt="Explaining a float format" loading="lazy" /></p>
<p>Let&#39;s have a look at the placeholders in our example. The second one &quot;%8.2f&quot; is a format description for a float number. Like other placeholders, it is introduced with the &quot;%&quot; character. This is followed by the total number of digits the string should contain. This number includes the decimal point and all the digits, i.e. before and after the decimal point. Our float number 59.058 has to be formatted with 8 characters. The decimal part of the number or the precision is set to 2, i.e. the number following the &quot;.&quot; in our placeholder. Finally, the last character &quot;f&quot; of our placeholder stands for &quot;float&quot;.</p>
<p>If you look at the output, you will notice that the 3 decimal digits have been rounded. Furthermore, the number has been preceded in the output with 3 leading blanks.</p>
<p>The first placeholder &quot;%5d&quot; is used for the first component of our tuple, i.e. the integer 453. The number will be printed with 5 characters. As 453 consists only of 3 digits, the output is padded with 2 leading blanks. You may have expected a &quot;%5i&quot; instead of &quot;%5d&quot;. Where is the difference? It&#39;s easy: There is no difference between &quot;d&quot; and &quot;i&quot; both are used for formatting integers. The advantage or beauty of a formatted output can only be seen, if more than one line is printed with the same pattern. In the following picture you can see, how it looks, if five float numbers are printed with the placeholder &quot;%6.2f&quot; in subsequent lines:</p>
<p><img width="400" height="233" src="/images/python-tutorial/formatting_floats_400w.webp" alt="formatting multiple floats" loading="lazy" /></p>
<table class="col1Center">
	<thead>
		<tr>
			<th>Conversion</th>
			<th>Meaning</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><tt>d</tt></td>
			<td>Signed integer decimal.</td>
		</tr>
		<tr>
			<td><tt>i</tt></td>
			<td>Signed integer decimal.</td>
		</tr>
		<tr>
			<td><tt>o</tt></td>
			<td>Unsigned octal.</td>
		</tr>
		<tr>
			<td><tt>u</tt></td>
			<td>Obsolete and equivalent to &#39;d&#39;, i.e. signed integer decimal.</td>
		</tr>
		<tr>
			<td><tt>x</tt></td>
			<td>Unsigned hexadecimal (lowercase).</td>
		</tr>
		<tr>
			<td><tt>X</tt></td>
			<td>Unsigned hexadecimal (uppercase).</td>
		</tr>
		<tr>
			<td><tt>e</tt></td>
			<td>Floating point exponential format (lowercase).</td>
		</tr>
		<tr>
			<td><tt>E</tt></td>
			<td>Floating point exponential format (uppercase).</td>
		</tr>
		<tr>
			<td><tt>f</tt></td>
			<td>Floating point decimal format.</td>
		</tr>
		<tr>
			<td><tt>F</tt></td>
			<td>Floating point decimal format.</td>
		</tr>
		<tr>
			<td><tt>g</tt></td>
			<td>Same as &quot;<tt>e</tt>&quot; if exponent is greater than -4 or less than precision, &quot;<tt>f</tt>&quot; otherwise.</td>
		</tr>
		<tr>
			<td><tt>G</tt></td>
			<td>Same as &quot;<tt>E</tt>&quot; if exponent is greater than -4 or less than precision, &quot;<tt>F</tt>&quot; otherwise.</td>
		</tr>
		<tr>
			<td><tt>c</tt></td>
			<td>Single character (accepts integer or single character string).</td>
		</tr>
		<tr>
			<td><tt>r</tt></td>
			<td>String (converts any python object using <tt class="function">repr()</tt>).</td>
		</tr>
		<tr>
			<td><tt>s</tt></td>
			<td>String (converts any python object using <tt class="function">str()</tt>).</td>
		</tr>
		<tr>
			<td><tt>%</tt></td>
			<td>No argument is converted, results in a &quot;<tt>%</tt>&quot; character in the result.</td>
		</tr>
	</tbody>
</table>

<p>The following examples show some example cases of the conversion rules from the table above:</p>
<div class="cell">
<div class="highlight">
<pre><span class="nb">print</span><span class="p">(</span><span class="s2">&quot;</span><span class="si">%10.3e</span><span class="s2">&quot;</span><span class="o">%</span> <span class="p">(</span><span class="mf">356.08977</span><span class="p">))</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre> 3.561e+02
</pre>
</div>
</div>
<div class="cell">
<div class="highlight">
<pre><span class="nb">print</span><span class="p">(</span><span class="s2">&quot;</span><span class="si">%10.3E</span><span class="s2">&quot;</span><span class="o">%</span> <span class="p">(</span><span class="mf">356.08977</span><span class="p">))</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre> 3.561E+02
</pre>
</div>
</div>
<div class="cell">
<div class="highlight">
<pre><span class="nb">print</span><span class="p">(</span><span class="s2">&quot;</span><span class="si">%10o</span><span class="s2">&quot;</span><span class="o">%</span> <span class="p">(</span><span class="mi">25</span><span class="p">))</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>        31
</pre>
</div>
</div>
<div class="cell">
<div class="highlight">
<pre><span class="nb">print</span><span class="p">(</span><span class="s2">&quot;</span><span class="si">%10.3o</span><span class="s2">&quot;</span><span class="o">%</span> <span class="p">(</span><span class="mi">25</span><span class="p">))</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>       031
</pre>
</div>
</div>
<div class="cell">
<div class="highlight">
<pre><span class="nb">print</span><span class="p">(</span><span class="s2">&quot;</span><span class="si">%10.5o</span><span class="s2">&quot;</span><span class="o">%</span> <span class="p">(</span><span class="mi">25</span><span class="p">))</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>     00031
</pre>
</div>
</div>
<div class="cell">
<div class="highlight">
<pre><span class="nb">print</span><span class="p">(</span><span class="s2">&quot;</span><span class="si">%5x</span><span class="s2">&quot;</span><span class="o">%</span> <span class="p">(</span><span class="mi">47</span><span class="p">))</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>   2f
</pre>
</div>
</div>
<div class="cell">
<div class="highlight">
<pre><span class="nb">print</span><span class="p">(</span><span class="s2">&quot;</span><span class="si">%5.4x</span><span class="s2">&quot;</span><span class="o">%</span> <span class="p">(</span><span class="mi">47</span><span class="p">))</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre> 002f
</pre>
</div>
</div>
<div class="cell">
<div class="highlight">
<pre><span class="nb">print</span><span class="p">(</span><span class="s2">&quot;</span><span class="si">%5.4X</span><span class="s2">&quot;</span><span class="o">%</span> <span class="p">(</span><span class="mi">47</span><span class="p">))</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre> 002F
</pre>
</div>
</div>
<div class="cell">
<div class="highlight">
<pre><span class="nb">print</span><span class="p">(</span><span class="s2">&quot;Only one percentage sign: </span><span class="si">%%</span><span class="s2"> &quot;</span> <span class="o">%</span> <span class="p">())</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>Only one percentage sign: % 
</pre>
</div>
</div>
<p>Examples:</p>
<p>&nbsp;</p>
<div class="cell">
<div class="highlight">
<pre><span class="nb">print</span><span class="p">(</span><span class="s2">&quot;</span><span class="si">%#5X</span><span class="s2">&quot;</span><span class="o">%</span> <span class="p">(</span><span class="mi">47</span><span class="p">))</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre> 0X2F
</pre>
</div>
</div>
<div class="cell">
<div class="highlight">
<pre><span class="nb">print</span><span class="p">(</span><span class="s2">&quot;</span><span class="si">%5X</span><span class="s2">&quot;</span><span class="o">%</span> <span class="p">(</span><span class="mi">47</span><span class="p">))</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>   2F
</pre>
</div>
</div>
<div class="cell">
<div class="highlight">
<pre><span class="nb">print</span><span class="p">(</span><span class="s2">&quot;</span><span class="si">%#5.4X</span><span class="s2">&quot;</span><span class="o">%</span> <span class="p">(</span><span class="mi">47</span><span class="p">))</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>0X002F
</pre>
</div>
</div>
<div class="cell">
<div class="highlight">
<pre><span class="nb">print</span><span class="p">(</span><span class="s2">&quot;</span><span class="si">%#5o</span><span class="s2">&quot;</span><span class="o">%</span> <span class="p">(</span><span class="mi">25</span><span class="p">))</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre> 0o31
</pre>
</div>
</div>
<div class="cell">
<div class="highlight">
<pre><span class="nb">print</span><span class="p">(</span><span class="s2">&quot;</span><span class="si">%+d</span><span class="s2">&quot;</span><span class="o">%</span> <span class="p">(</span><span class="mi">42</span><span class="p">))</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>+42
</pre>
</div>
</div>
<div class="cell">
<div class="highlight">
<pre><span class="nb">print</span><span class="p">(</span><span class="s2">&quot;</span><span class="si">% d</span><span class="s2">&quot;</span><span class="o">%</span> <span class="p">(</span><span class="mi">42</span><span class="p">))</span> 
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre> 42
</pre>
</div>
</div>
<div class="cell">
<div class="highlight">
<pre><span class="nb">print</span><span class="p">(</span><span class="s2">&quot;</span><span class="si">%+2d</span><span class="s2">&quot;</span><span class="o">%</span> <span class="p">(</span><span class="mi">42</span><span class="p">))</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>+42
</pre>
</div>
</div>
<div class="cell">
<div class="highlight">
<pre><span class="nb">print</span><span class="p">(</span><span class="s2">&quot;</span><span class="si">% 2d</span><span class="s2">&quot;</span><span class="o">%</span> <span class="p">(</span><span class="mi">42</span><span class="p">))</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre> 42
</pre>
</div>
</div>
<div class="cell">
<div class="highlight">
<pre><span class="nb">print</span><span class="p">(</span><span class="s2">&quot;</span><span class="si">%2d</span><span class="s2">&quot;</span><span class="o">%</span> <span class="p">(</span><span class="mi">42</span><span class="p">))</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>42
</pre>
</div>
</div>
<p>Even though it may look so, the formatting is not part of the print function. If you have a closer look at our examples, you will see that we passed a formatted string to the print function. Or to put it in other words: If the string modulo operator is applied to a string, it returns a string. This string in turn is passed in our examples to the print function. So, we could have used the string modulo functionality of Python in a two layer approach as well, i.e. first create a formatted string, which will be assigned to a variable and this variable is passed to the print function:</p>
<div class="cell">
<div class="highlight">
<pre><span class="n">s</span> <span class="o">=</span> <span class="s2">&quot;Price: $ </span><span class="si">%8.2f</span><span class="s2">&quot;</span><span class="o">%</span> <span class="p">(</span><span class="mf">356.08977</span><span class="p">)</span>
<span class="nb">print</span><span class="p">(</span><span class="n">s</span><span class="p">)</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>Price: $   356.09
</pre>
</div>
</div>
<h2 id="The-Pythonic-Way:-The-string-method-&quot;format&quot;">The Pythonic Way: The string method &quot;format&quot;</h2>

<p>The Python help function is not very helpful concerning the string format method. All it says is this:</p>
<pre> |  format(...)
 |      S.format(*args, **kwargs) -&gt; str
 |      
 |      Return a formatted version of S, using substitutions from args and kwargs.
 |      The substitutions are identified by braces (&#39;{&#39; and &#39;}&#39;).
 |  
 </pre>
<p>Let&#39;s dive into this topic a little bit deeper: The format method was added in Python 2.6. The general form of this method looks like this:</p>
<pre> template.format(p0, p1, ..., k0=v0, k1=v1, ...)</pre>
<p>The template (or format string) is a string which contains one or more format codes (fields to be replaced) embedded in constant text. The &quot;fields to be replaced&quot; are surrounded by curly braces {}. The curly braces and the &quot;code&quot; inside will be substituted with a formatted value from one of the arguments, according to the rules which we will specify soon. Anything else, which is not contained in curly braces will be literally printed, i.e. without any changes. If a brace character has to be printed, it has to be escaped by doubling it: {{ and }}.</p>
<p>There are two kinds of arguments for the .format() method. The list of arguments starts with zero or more positional arguments (p0, p1, ...), it may be followed by zero or more keyword arguments of the form name=value.</p>
<p>A positional parameter of the format method can be accessed by placing the index of the parameter after the opening brace, e.g. {0} accesses the first parameter, {1} the second one and so on. The index inside of the curly braces can be followed by a colon and a format string, which is similar to the notation of the string modulo, which we had discussed in the beginning of the chapter of our tutorial, e.g. {0:5d} If the positional parameters are used in the order in which they are written, the positional argument specifiers inside of the braces can be omitted, so &#39;{} {} {}&#39; corresponds to &#39;{0} {1} {2}&#39;. But they are needed, if you want to access them in different orders: &#39;{2} {1} {0}&#39;.</p>
<p>The following diagram with an example usage depicts how the string method &quot;format&quot; works works for positional parameters:</p>
<p class="imgCenter"><br />
<img width="600" height="221" src="/images/python-tutorial/format_method_positional_parameters_600w.webp" alt="General way of working of the format method with positional parameters" loading="lazy" /></p>
<p>Examples of positional parameters:</p>
<div class="cell">
<div class="highlight">
<pre><span class="s2">&quot;First argument: </span><span class="si">{0}</span><span class="s2">, second one: </span><span class="si">{1}</span><span class="s2">&quot;</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="mi">47</span><span class="p">,</span><span class="mi">11</span><span class="p">)</span> 
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>&#39;First argument: 47, second one: 11&#39;</pre>
</div>
</div>
<div class="cell">
<div class="highlight">
<pre><span class="s2">&quot;Second argument: </span><span class="si">{1}</span><span class="s2">, first one: </span><span class="si">{0}</span><span class="s2">&quot;</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="mi">47</span><span class="p">,</span><span class="mi">11</span><span class="p">)</span> 
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>&#39;Second argument: 11, first one: 47&#39;</pre>
</div>
</div>
<div class="cell">
<div class="highlight">
<pre><span class="s2">&quot;Second argument: </span><span class="si">{1:3d}</span><span class="s2">, first one: </span><span class="si">{0:7.2f}</span><span class="s2">&quot;</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="mf">47.42</span><span class="p">,</span><span class="mi">11</span><span class="p">)</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>&#39;Second argument:  11, first one:   47.42&#39;</pre>
</div>
</div>
<div class="cell">
<div class="highlight">
<pre><span class="s2">&quot;First argument: </span><span class="si">{}</span><span class="s2">, second one: </span><span class="si">{}</span><span class="s2">&quot;</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="mi">47</span><span class="p">,</span><span class="mi">11</span><span class="p">)</span> 
<span class="c1"># arguments can be used more than once:</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>&#39;First argument: 47, second one: 11&#39;</pre>
</div>
</div>
<div class="cell">
<div class="highlight">
<pre><span class="s2">&quot;various precisions: </span><span class="si">{0:6.2f}</span><span class="s2"> or </span><span class="si">{0:6.3f}</span><span class="s2">&quot;</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="mf">1.4148</span><span class="p">)</span> 
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>&#39;various precisions:   1.41 or  1.415&#39;</pre>
</div>
</div>
<p>In the following example we demonstrate how keyword parameters can be used with the format method:</p>
<div class="cell">
<div class="highlight">
<pre><span class="s2">&quot;Art: </span><span class="si">{a:5d}</span><span class="s2">,  Price: </span><span class="si">{p:8.2f}</span><span class="s2">&quot;</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">a</span><span class="o">=</span><span class="mi">453</span><span class="p">,</span> <span class="n">p</span><span class="o">=</span><span class="mf">59.058</span><span class="p">)</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>&#39;Art:   453,  Price:    59.06&#39;</pre>
</div>
</div>
<p class="imgCenter"><img width="500" height="208" src="/images/python-tutorial/format_method_keyword_parameters_500w.webp" alt="General way of working of the format method with keyword parameters" loading="lazy" /></p>
<p>It&#39;s possible to &quot;left or right justify&quot; data with the format method. To this end, we can precede the formatting with a &quot;&lt;&quot; (left justify) or &quot;&gt;&quot; (right justify). We demonstrate this with the following examples:</p>
<div class="cell">
<div class="highlight">
<pre><span class="s2">&quot;</span><span class="si">{0:&lt;20s}</span><span class="s2"> </span><span class="si">{1:6.2f}</span><span class="s2">&quot;</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="s1">&#39;Spam &amp; Eggs:&#39;</span><span class="p">,</span> <span class="mf">6.99</span><span class="p">)</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>&#39;Spam &amp; Eggs:           6.99&#39;</pre>
</div>
</div>
<div class="cell">
<div class="highlight">
<pre><span class="s2">&quot;</span><span class="si">{0:&gt;20s}</span><span class="s2"> </span><span class="si">{1:6.2f}</span><span class="s2">&quot;</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="s1">&#39;Spam &amp; Eggs:&#39;</span><span class="p">,</span> <span class="mf">6.99</span><span class="p">)</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>&#39;        Spam &amp; Eggs:   6.99&#39;</pre>
</div>
</div>
<table class="col1Center">
	<thead>
		<tr>
			<th>Flag</th>
			<th>Meaning</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><tt>#</tt></td>
			<td>Used with o, x or X specifiers the value is preceded with 0, 0o, 0O, 0x or 0X respectively.</td>
		</tr>
		<tr>
			<td><tt>0</tt></td>
			<td>The conversion result will be zero padded for numeric values.</td>
		</tr>
		<tr>
			<td><tt>-</tt></td>
			<td>The converted value is left adjusted</td>
		</tr>
		<tr>
			<td><tt>&nbsp;</tt></td>
			<td>If no sign (minus sign e.g.) is going to be written, a blank space is inserted before the value.</td>
		</tr>
		<tr>
			<td><tt>+</tt></td>
			<td>A sign character (&quot;<tt>+</tt>&quot; or &quot;<tt>-</tt>&quot;) will precede the conversion (overrides a &quot;space&quot; flag).</td>
		</tr>
	</tbody>
</table>

<table class="col1Center">
	<colgroup>
		<col width="14%" />
		<col width="88%" />
	</colgroup>
	<thead valign="bottom">
		<tr>
			<th class="head">Option</th>
			<th class="head">Meaning</th>
		</tr>
	</thead>
	<tbody valign="top">
		<tr>
			<td><tt><span class="pre">&#39;&lt;&#39;</span></tt></td>
			<td>The field will be left-aligned within the available space. This is usually the default for strings.</td>
		</tr>
		<tr>
			<td><tt><span class="pre">&#39;&gt;&#39;</span></tt></td>
			<td>The field will be right-aligned within the available space. This is the default for numbers.</td>
		</tr>
		<tr>
			<td><tt><span class="pre">&#39;0&#39;</span></tt></td>
			<td>If the width field is preceded by a zero (&#39;0&#39;) character, sign-aware zero-padding for numeric types will be enabled.
			<pre>&gt;&gt;&gt; x = 378
&gt;&gt;&gt; print(&quot;The value is {:06d}&quot;.format(x))
The value is 000378
&gt;&gt;&gt; x = -378
&gt;&gt;&gt; print(&quot;The value is {:06d}&quot;.format(x))
The value is -00378
</pre>
			</td>
		</tr>
		<tr>
			<td><tt><span class="pre">&#39;,&#39;</span></tt></td>
			<td>This option signals the use of a comma for a thousands separator.
			<pre>&gt;&gt;&gt; print(&quot;The value is {:,}&quot;.format(x))
The value is 78,962,324,245
&gt;&gt;&gt; print(&quot;The value is {0:6,d}&quot;.format(x))
The value is 5,897,653,423
&gt;&gt;&gt; x = 5897653423.89676
&gt;&gt;&gt; print(&quot;The value is {0:12,.3f}&quot;.format(x))
The value is 5,897,653,423.897
</pre>
			</td>
		</tr>
		<tr>
			<td><tt><span class="pre">&#39;=&#39;</span></tt></td>
			<td>Forces the padding to be placed after the sign (if any) but before the digits. This is used for printing fields in the form &quot;+000000120&quot;. This alignment option is only valid for numeric types.</td>
		</tr>
		<tr>
			<td><tt><span class="pre">&#39;^&#39;</span></tt></td>
			<td>Forces the field to be centered within the available space.</td>
		</tr>
	</tbody>
</table>

<p>Unless a minimum field width is defined, the field width will always be the same size as the data to fill it, so that the alignment option has no meaning in this case.</p>
<p>Additionally, we can modify the formatting with the sign option, which is only valid for number types:</p>
<table class="col1Center">
	<colgroup>
		<col width="14%" />
		<col width="88%" />
	</colgroup>
	<thead valign="bottom">
		<tr>
			<th class="head">Option</th>
			<th class="head">Meaning</th>
		</tr>
	</thead>
	<tbody valign="top">
		<tr>
			<td><tt><span class="pre">&#39;+&#39;</span></tt></td>
			<td>indicates that a sign should be used for both positive as well as negative numbers.</td>
		</tr>
		<tr>
			<td><tt><span class="pre">&#39;-&#39;</span></tt></td>
			<td>indicates that a sign should be used only for negative numbers, which is the default behavior.</td>
		</tr>
		<tr>
			<td>space</td>
			<td>indicates that a leading space should be used on positive numbers, and a minus sign on negative numbers.</td>
		</tr>
	</tbody>
</table>

<div class="crsAd">
		<p class="adHd">Live Python training</p>
		  <div class="flx">
		   <div>
			<a href="/about/live-courses.php"><img width="150" height="109" src="/images/common/classroom_training_courses.jpg" alt="instructor-led training course" loading="lazy" /></a>
		   </div>
		   <div>
			<p>Enjoying this page? We offer <strong>live Python training courses</strong> covering the content of this site.</p>
			<p>See: <a href="/about/live-courses.php">Live Python courses overview</a></p>
		   </div>
		  </div><p class="textCenter bold">Upcoming online Courses</p>
<div class="kurses">
<div>
<p><a href="https://www.bodenseo.com/course/python_training_course.html">Python Basics for Beginners</a><br><p class="fixWidth">
29 Aug 2022 to 02 Sep 2022<br>
17 Oct 2022 to 21 Oct 2022<br>
</p>
</div>
<div>
<p><a href="https://www.bodenseo.com/course/python_training_course_intensive.html">Intensive Advanced Course</a><br><p class="fixWidth">
29 Aug 2022 to 02 Sep 2022<br>
17 Oct 2022 to 21 Oct 2022<br>
</p>
</div>
<div>
<p><a href="https://www.bodenseo.com/course/python_training_course_engineers_scientists.html">Python for Engineers and Scientists</a><br><p class="fixWidth">
29 Aug 2022 to 02 Sep 2022<br>
17 Oct 2022 to 21 Oct 2022<br>
</p>
</div>
<div>
<p><a href="https://www.bodenseo.com/course/python_oop.html">Object Oriented Programming with Python</a><br><p class="fixWidth">
31 Aug 2022 to 02 Sep 2022<br>
19 Oct 2022 to 21 Oct 2022<br>
</p>
</div>
</div>
<p class="textCenter"><a href="https://www.bodenseo.com/course_enrolment.php">Enrol here</a></p>
</div>

<h2 id="Using-dictionaries-in-&quot;format&quot;">Using dictionaries in &quot;format&quot;</h2>

<p>We have seen in the previous chapters that we have two ways to access the values to be formatted:</p>
<p>Using the position or the index:</p>
<div class="cell">
<div class="highlight">
<pre><span class="nb">print</span><span class="p">(</span><span class="s2">&quot;The capital of </span><span class="si">{0:s}</span><span class="s2"> is </span><span class="si">{1:s}</span><span class="s2">&quot;</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="s2">&quot;Ontario&quot;</span><span class="p">,</span><span class="s2">&quot;Toronto&quot;</span><span class="p">))</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>The capital of Ontario is Toronto
</pre>
</div>
</div>
<p>Just to mention it once more: We could have used empty curly braces in the previous example! Using keyword parameters:</p>
<div class="cell">
<div class="highlight">
<pre><span class="nb">print</span><span class="p">(</span><span class="s2">&quot;The capital of </span><span class="si">{province}</span><span class="s2"> is </span><span class="si">{capital}</span><span class="s2">&quot;</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">province</span><span class="o">=</span><span class="s2">&quot;Ontario&quot;</span><span class="p">,</span><span class="n">capital</span><span class="o">=</span><span class="s2">&quot;Toronto&quot;</span><span class="p">))</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>The capital of Ontario is Toronto
</pre>
</div>
</div>
<p>The second case can be expressed with a dictionary as well, as we can see in the following code:</p>
<div class="cell">
<div class="highlight">
<pre><span class="n">data</span> <span class="o">=</span> <span class="nb">dict</span><span class="p">(</span><span class="n">province</span><span class="o">=</span><span class="s2">&quot;Ontario&quot;</span><span class="p">,</span><span class="n">capital</span><span class="o">=</span><span class="s2">&quot;Toronto&quot;</span><span class="p">)</span>
<span class="n">data</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>{&#39;province&#39;: &#39;Ontario&#39;, &#39;capital&#39;: &#39;Toronto&#39;}</pre>
</div>
</div>
<div class="cell">
<div class="highlight">
<pre><span class="nb">print</span><span class="p">(</span><span class="s2">&quot;The capital of </span><span class="si">{province}</span><span class="s2"> is </span><span class="si">{capital}</span><span class="s2">&quot;</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="o">**</span><span class="n">data</span><span class="p">))</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>The capital of Ontario is Toronto
</pre>
</div>
</div>
<p>The double &quot;*&quot; in front of data turns data automatically into the form &#39;province=&quot;Ontario&quot;,capital=&quot;Toronto&quot;&#39;. Let&#39;s look at the following Python program:</p>
<div class="cell">
<div class="highlight">
<pre><span class="n">capital_country</span> <span class="o">=</span> <span class="p">{</span><span class="s2">&quot;United States&quot;</span> <span class="p">:</span> <span class="s2">&quot;Washington&quot;</span><span class="p">,</span> 
                   <span class="s2">&quot;US&quot;</span> <span class="p">:</span> <span class="s2">&quot;Washington&quot;</span><span class="p">,</span> 
                   <span class="s2">&quot;Canada&quot;</span> <span class="p">:</span> <span class="s2">&quot;Ottawa&quot;</span><span class="p">,</span>
                   <span class="s2">&quot;Germany&quot;</span><span class="p">:</span> <span class="s2">&quot;Berlin&quot;</span><span class="p">,</span>
                   <span class="s2">&quot;France&quot;</span> <span class="p">:</span> <span class="s2">&quot;Paris&quot;</span><span class="p">,</span>
                   <span class="s2">&quot;England&quot;</span> <span class="p">:</span> <span class="s2">&quot;London&quot;</span><span class="p">,</span>
                   <span class="s2">&quot;UK&quot;</span> <span class="p">:</span> <span class="s2">&quot;London&quot;</span><span class="p">,</span>
                   <span class="s2">&quot;Switzerland&quot;</span> <span class="p">:</span> <span class="s2">&quot;Bern&quot;</span><span class="p">,</span>
                   <span class="s2">&quot;Austria&quot;</span> <span class="p">:</span> <span class="s2">&quot;Vienna&quot;</span><span class="p">,</span>
                   <span class="s2">&quot;Netherlands&quot;</span> <span class="p">:</span> <span class="s2">&quot;Amsterdam&quot;</span><span class="p">}</span>

<span class="nb">print</span><span class="p">(</span><span class="s2">&quot;Countries and their capitals:&quot;</span><span class="p">)</span>
<span class="k">for</span> <span class="n">c</span> <span class="ow">in</span> <span class="n">capital_country</span><span class="p">:</span>
    <span class="nb">print</span><span class="p">(</span><span class="s2">&quot;</span><span class="si">{country}</span><span class="s2">: </span><span class="si">{capital}</span><span class="s2">&quot;</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">country</span><span class="o">=</span><span class="n">c</span><span class="p">,</span> <span class="n">capital</span><span class="o">=</span><span class="n">capital_country</span><span class="p">[</span><span class="n">c</span><span class="p">]))</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>Countries and their capitals:
United States: Washington
US: Washington
Canada: Ottawa
Germany: Berlin
France: Paris
England: London
UK: London
Switzerland: Bern
Austria: Vienna
Netherlands: Amsterdam
</pre>
</div>
</div>
<p>We can rewrite the previous example by using the dictionary directly. The output will be the same:</p>
<div class="cell">
<div class="highlight">
<pre><span class="n">capital_country</span> <span class="o">=</span> <span class="p">{</span><span class="s2">&quot;United States&quot;</span> <span class="p">:</span> <span class="s2">&quot;Washington&quot;</span><span class="p">,</span> 
                   <span class="s2">&quot;US&quot;</span> <span class="p">:</span> <span class="s2">&quot;Washington&quot;</span><span class="p">,</span> 
                   <span class="s2">&quot;Canada&quot;</span> <span class="p">:</span> <span class="s2">&quot;Ottawa&quot;</span><span class="p">,</span>
                   <span class="s2">&quot;Germany&quot;</span><span class="p">:</span> <span class="s2">&quot;Berlin&quot;</span><span class="p">,</span>
                   <span class="s2">&quot;France&quot;</span> <span class="p">:</span> <span class="s2">&quot;Paris&quot;</span><span class="p">,</span>
                   <span class="s2">&quot;England&quot;</span> <span class="p">:</span> <span class="s2">&quot;London&quot;</span><span class="p">,</span>
                   <span class="s2">&quot;UK&quot;</span> <span class="p">:</span> <span class="s2">&quot;London&quot;</span><span class="p">,</span>
                   <span class="s2">&quot;Switzerland&quot;</span> <span class="p">:</span> <span class="s2">&quot;Bern&quot;</span><span class="p">,</span>
                   <span class="s2">&quot;Austria&quot;</span> <span class="p">:</span> <span class="s2">&quot;Vienna&quot;</span><span class="p">,</span>
                   <span class="s2">&quot;Netherlands&quot;</span> <span class="p">:</span> <span class="s2">&quot;Amsterdam&quot;</span><span class="p">}</span>

<span class="nb">print</span><span class="p">(</span><span class="s2">&quot;Countries and their capitals:&quot;</span><span class="p">)</span>
<span class="k">for</span> <span class="n">c</span> <span class="ow">in</span> <span class="n">capital_country</span><span class="p">:</span>
    <span class="n">format_string</span> <span class="o">=</span> <span class="n">c</span> <span class="o">+</span> <span class="s2">&quot;: {&quot;</span> <span class="o">+</span> <span class="n">c</span> <span class="o">+</span> <span class="s2">&quot;}&quot;</span> 
    <span class="nb">print</span><span class="p">(</span><span class="n">format_string</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="o">**</span><span class="n">capital_country</span><span class="p">))</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>Countries and their capitals:
United States: Washington
US: Washington
Canada: Ottawa
Germany: Berlin
France: Paris
England: London
UK: London
Switzerland: Bern
Austria: Vienna
Netherlands: Amsterdam
</pre>
</div>
</div>
<h2 id="Using-Local-Variable-Names-in-&quot;format&quot;">Using Local Variable Names in &quot;format&quot;</h2>

<p>&quot;locals&quot; is a function, which returns a dictionary with the current scope&#39;s local variables, i.e- the local variable names are the keys of this dictionary and the corresponding values are the values of these variables:</p>
<div class="cell">
<div class="highlight">
<pre><span class="n">a</span> <span class="o">=</span> <span class="mi">42</span>
<span class="n">b</span> <span class="o">=</span> <span class="mi">47</span>
<span class="k">def</span> <span class="nf">f</span><span class="p">():</span>
    <span class="k">return</span> <span class="mi">42</span>
<span class="nb">locals</span><span class="p">()</span>
</pre>
</div>
</div>
<p>The dictionary returned by locals() can be used as a parameter of the string format method. This way we can use all the local variable names inside of a format string.</p>
<p>Continuing with the previous example, we can create the following output, in which we use the local variables a, b and f:</p>
<div class="cell">
<div class="highlight">
<pre><span class="nb">print</span><span class="p">(</span><span class="s2">&quot;a=</span><span class="si">{a}</span><span class="s2">, b=</span><span class="si">{b}</span><span class="s2"> and f=</span><span class="si">{f}</span><span class="s2">&quot;</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="o">**</span><span class="nb">locals</span><span class="p">()))</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>a=42, b=47 and f=&lt;function f at 0x00000285FFA729D8&gt;
</pre>
</div>
</div>
<div class="crsAd">
		<p class="adHd">Live Python training</p>
		  <div class="flx">
		   <div>
			<a href="/about/live-courses.php"><img width="150" height="109" src="/images/common/classroom_training_courses.jpg" alt="instructor-led training course" loading="lazy" /></a>
		   </div>
		   <div>
			<p>Enjoying this page? We offer <strong>live Python training courses</strong> covering the content of this site.</p>
			<p>See: <a href="/about/live-courses.php">Live Python courses overview</a></p>
		   </div>
		  </div><p class="textCenter"><a href="https://www.bodenseo.com/course_enrolment.php">Enrol here</a></p>
</div>

<h2 id="Other-string-methods-for-Formatting">Other string methods for Formatting</h2>

<p>The string class contains further methods, which can be used for formatting purposes as well: ljust, rjust, center and zfill.</p>
<p>Let S be a string, the 4 methods are defined like this:</p>
<pre><code>&bull;center(...):
</code></pre>
<pre> S.center(width[, fillchar]) -&gt; str </pre>
<p>Return S centred in a string of length width. Padding is done using the specified fill character. The default value is a space.</p>
<pre><code>Examples:</code></pre>
<div class="cell">
<div class="highlight">
<pre><span class="n">s</span> <span class="o">=</span> <span class="s2">&quot;Python&quot;</span>
<span class="n">s</span><span class="o">.</span><span class="n">center</span><span class="p">(</span><span class="mi">10</span><span class="p">)</span>   
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>&#39;  Python  &#39;</pre>
</div>
</div>
<div class="cell">
<div class="highlight">
<pre><span class="n">s</span><span class="o">.</span><span class="n">center</span><span class="p">(</span><span class="mi">10</span><span class="p">,</span><span class="s2">&quot;*&quot;</span><span class="p">)</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>&#39;Price: $   356.09&#39;</pre>
</div>
</div>
<pre><code>&bull;ljust(...):
</code></pre>
<pre> S.ljust(width[, fillchar]) -&gt; str </pre>
<p>Return S left-justified in a string of length &quot;width&quot;. Padding is done using the specified fill character. If none is given, a space will be used as default.</p>
<p>Examples:</p>
<div class="cell">
<div class="highlight">
<pre><span class="n">s</span> <span class="o">=</span> <span class="s2">&quot;Training&quot;</span>
<span class="n">s</span><span class="o">.</span><span class="n">ljust</span><span class="p">(</span><span class="mi">12</span><span class="p">)</span>  
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>&#39;Training    &#39;</pre>
</div>
</div>
<div class="cell">
<div class="highlight">
<pre><span class="n">s</span><span class="o">.</span><span class="n">ljust</span><span class="p">(</span><span class="mi">12</span><span class="p">,</span><span class="s2">&quot;:&quot;</span><span class="p">)</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>&#39;Training::::&#39;</pre>
</div>
</div>
<pre><code>&bull;rjust(...):
</code></pre>
<pre> S.rjust(width[, fillchar]) -&gt; str </pre>
<p>Return S right-justified in a string of length width. Padding is done using the specified fill character. The default value is again a space.</p>
<p>Examples:</p>
<div class="cell">
<div class="highlight">
<pre><span class="n">s</span> <span class="o">=</span> <span class="s2">&quot;Programming&quot;</span>
<span class="n">s</span><span class="o">.</span><span class="n">rjust</span><span class="p">(</span><span class="mi">15</span><span class="p">)</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>&#39;    Programming&#39;</pre>
</div>
</div>
<div class="cell">
<div class="highlight">
<pre><span class="n">s</span><span class="o">.</span><span class="n">rjust</span><span class="p">(</span><span class="mi">15</span><span class="p">,</span> <span class="s2">&quot;~&quot;</span><span class="p">)</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>&#39;~~~~Programming&#39;</pre>
</div>
</div>
<pre><code>&bull;zfill(...):
</code></pre>
<pre> S.zfill(width) -&gt; str </pre>
<p>Pad a string S with zeros on the left, to fill a field of the specified width. The string S is never truncated. This method can be easily emulated with rjust.</p>
<p>Examples:</p>
<div class="cell">
<div class="highlight">
<pre><span class="n">account_number</span> <span class="o">=</span> <span class="s2">&quot;43447879&quot;</span>
<span class="n">account_number</span><span class="o">.</span><span class="n">zfill</span><span class="p">(</span><span class="mi">12</span><span class="p">)</span>
<span class="c1"># can be emulated with rjust:</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>&#39;000043447879&#39;</pre>
</div>
</div>
<div class="cell">
<div class="highlight">
<pre><span class="n">account_number</span><span class="o">.</span><span class="n">rjust</span><span class="p">(</span><span class="mi">12</span><span class="p">,</span><span class="s2">&quot;0&quot;</span><span class="p">)</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>&#39;000043447879&#39;</pre>
</div>
</div>
<h2 id="Formatted-String-Literals">Formatted String Literals</h2>

<p>Python 3.6 introduces formatted string literals. They are prefixed with an &#39;f&#39;. The formatting syntax is similar to the format strings accepted by str.format(). Like the format string of format method, they contain replacement fields formed with curly braces. The replacement fields are expressions, which are evaluated at run time, and then formatted using the format() protocol. It&#39;s easiest to understand by looking at the following examples:</p>
<div class="cell">
<div class="highlight">
<pre><span class="n">price</span> <span class="o">=</span> <span class="mf">11.23</span>
<span class="sa">f</span><span class="s2">&quot;Price in Euro: </span><span class="si">{</span><span class="n">price</span><span class="si">}</span><span class="s2">&quot;</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>&#39;Price in Euro: 11.23&#39;</pre>
</div>
</div>
<div class="cell">
<div class="highlight">
<pre><span class="sa">f</span><span class="s2">&quot;Price in Swiss Franks: </span><span class="si">{</span><span class="n">price</span> <span class="o">*</span> <span class="mf">1.086</span><span class="si">}</span><span class="s2">&quot;</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>&#39;Price in Swiss Franks: 12.195780000000001&#39;</pre>
</div>
</div>
<div class="cell">
<div class="highlight">
<pre><span class="sa">f</span><span class="s2">&quot;Price in Swiss Franks: </span><span class="si">{</span><span class="n">price</span> <span class="o">*</span> <span class="mf">1.086</span><span class="si">:</span><span class="s2">5.2f</span><span class="si">}</span><span class="s2">&quot;</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>&#39;Price in Swiss Franks: 12.20&#39;</pre>
</div>
</div>
<div class="cell">
<div class="highlight">
<pre><span class="k">for</span> <span class="n">article</span> <span class="ow">in</span> <span class="p">[</span><span class="s2">&quot;bread&quot;</span><span class="p">,</span> <span class="s2">&quot;butter&quot;</span><span class="p">,</span> <span class="s2">&quot;tea&quot;</span><span class="p">]:</span>
    <span class="nb">print</span><span class="p">(</span><span class="sa">f</span><span class="s2">&quot;</span><span class="si">{</span><span class="n">article</span><span class="si">:</span><span class="s2">&gt;10</span><span class="si">}</span><span class="s2">:&quot;</span><span class="p">)</span>
</pre>
</div>
<h4 class="output_prompt">OUTPUT:</h4>
<div class="output_text">
<pre>     bread:
    butter:
       tea:
</pre>
</div>
</div>
<div class="crsAd">
		<p class="adHd">Live Python training</p>
		  <div class="flx">
		   <div>
			<a href="/about/live-courses.php"><img width="150" height="109" src="/images/common/classroom_training_courses.jpg" alt="instructor-led training course" loading="lazy" /></a>
		   </div>
		   <div>
			<p>Enjoying this page? We offer <strong>live Python training courses</strong> covering the content of this site.</p>
			<p>See: <a href="/about/live-courses.php">Live Python courses overview</a></p>
		   </div>
		  </div><p class="textCenter bold">Upcoming online Courses</p>
<div class="kurses">
<div>
<p><a href="https://www.bodenseo.com/course/python_training_course.html">Python Basics for Beginners</a><br><p class="fixWidth">
29 Aug 2022 to 02 Sep 2022<br>
17 Oct 2022 to 21 Oct 2022<br>
</p>
</div>
<div>
<p><a href="https://www.bodenseo.com/course/python_training_course_intensive.html">Intensive Advanced Course</a><br><p class="fixWidth">
29 Aug 2022 to 02 Sep 2022<br>
17 Oct 2022 to 21 Oct 2022<br>
</p>
</div>
<div>
<p><a href="https://www.bodenseo.com/course/python_training_course_engineers_scientists.html">Python for Engineers and Scientists</a><br><p class="fixWidth">
29 Aug 2022 to 02 Sep 2022<br>
17 Oct 2022 to 21 Oct 2022<br>
</p>
</div>
<div>
<p><a href="https://www.bodenseo.com/course/python_oop.html">Object Oriented Programming with Python</a><br><p class="fixWidth">
31 Aug 2022 to 02 Sep 2022<br>
19 Oct 2022 to 21 Oct 2022<br>
</p>
</div>
</div>
<p class="textCenter"><a href="https://www.bodenseo.com/course_enrolment.php">Enrol here</a></p>
</div>
</article>
<div id="thisPageNavRight"><p class="navHeading">On this page </p></div>
</div> <!-- wrapper -->
<footer>
<nav id="foot_nav">
<ul>
<li><a href="/python-tutorial/output-with-print.php">&laquo; PREVIOUS: 26. Output with Print</a></li>
<li><a href="/python-tutorial/working-with-dictionaries-and-while-loops.php">NEXT: 28. Working with Dictionaries and while Loops &raquo;</a></li>
</ul>

</nav>

<nav id="footAbout">
<ul>
<li><a href="/">Home</a></li>
<li><a href="/about/">About this site</a></li>
<li><a href="/about/live-courses.php">Live courses</a></li>
<li><a href="/about/contact.php">Contact</a></li>
<li><a href="/about/donate-to-python-course-eu.php">Donate to python-course.eu</a></li>
<li><a href="/about/news.php">News</a></li>
<li><a href="/about/sitemap.php">Sitemap</a></li>
<li><a href="/about/pdf-version-of-this-site.php">PDF version of this site</a></li>
<li><a href="/about/data-protection-declaration.php">Data Protection Declaration</a></li>
</ul>
</nav>


<div id="toTop">
<p>top</p>
</div>

</footer>
<script>

var hambarg = gebi("hambarg");
var logoImgs = gebi('logoImgs');
var googSrchForm = gebi('googSrchForm');
var wrapper = gebi("wrapper");
var verti_nav = gebi("verti_nav");
var content = gebi("content");
var header = document.querySelector('header');
var browserWidth = window.innerWidth;

///////////////////////////////////
//
// Replace overflowTemp class with overflowXauto
// to avoid overly-wide page before MathJax fires
// e.g. /advanced/decorators-decoration.php
//
///////////////////////////////////

if(browserWidth < 600) {
	var overflowTemps = document.querySelectorAll('.overflowTemp');
	for(var i=0;i<overflowTemps.length;i++) {
		overflowTemps[i].classList.remove('overflowTemp');
		overflowTemps[i].classList.add('overflowXauto');
	}
}

///////////////////////////////////
//
// Add overflowXauto to tables and MathJax for narrow screens 
//
///////////////////////////////////

function addOverflowXauto() {

	var eles = document.querySelectorAll("table, mjx-math");
	for(i=0;i<eles.length;i++) {
		var thisEleWidth = eles[i].offsetWidth;
		if( gebi("content") ) {		
			var contentWidth = gebi("content").clientWidth;	
	//console.log(eles[i].parentNode.parentNode.tagName)		
	//console.log(thisEleWidth, contentWidth)		
			if(thisEleWidth > contentWidth && !eles[i].parentNode.classList.contains('overflowXauto') ) {				
				var eleWrap = document.createElement('div');
				eleWrap.classList.add('overflowXauto');
				if(eles[i].tagName == "MJX-MATH" && (eles[i].parentNode.parentNode.tagName == "P" || eles[i].parentNode.parentNode.tagName == "DIV") ) {
	//console.log("this one")
					//if(eles[i].parentNode.parentNode.tagName == "P") {
	//console.log(eles[i].innerHTML)					
						eles[i].parentNode.parentNode.classList.add("overflowXauto");
					//} else {
						//eles[i].parentNode.parentNode.insertBefore(eleWrap, eles[i].parentNode);
						//eleWrap.appendChild(eles[i]);
					//}
				} else {
					eles[i].parentNode.insertBefore(eleWrap, eles[i]);
					eleWrap.appendChild(eles[i]);
				}
				
			}
		}
	}
}
addOverflowXauto();

///////////////////////////////////
//
// Activate/deactivate hamburger menu
//
///////////////////////////////////

document.querySelector('body').addEventListener("click", function(e) {

	if( verti_nav && content ) {
		if(
			(e.target.id == "hambarg" || e.target.parentNode.id == "hambarg") 
			) {
			wrapper.appendChild(verti_nav);
			verti_nav.classList.toggle('navInviz');
			logoImgs.classList.toggle('blur');
			googSrchForm.classList.toggle('blur');
			content.classList.toggle('blur');
		} else {
			verti_nav.classList.add('navInviz');
			logoImgs.classList.remove('blur');
			googSrchForm.classList.remove('blur');
			content.classList.remove('blur');		
		}
	}
});

window.onresize = function() {
	browserWidth = window.innerWidth;
	browserHeight = window.innerHeight;
	addOverflowXauto();
	if( verti_nav && content ) {
		if(browserWidth > 700) {
			wrapper.insertBefore(verti_nav, content);
			verti_nav.classList.add('navInviz');
			logoImgs.classList.remove('blur');
			googSrchForm.classList.remove('blur');
			content.classList.remove('blur');		
		}
	}
	
	doPageNav();

}

///////////////////////////////////
//
// Google search box
//
///////////////////////////////////

var googleboxButt = gebi("googleboxButt");
if(googleboxButt) {
	googleboxButt.addEventListener("click", function(e) {
		e.preventDefault();
		var srchStr=gebi('googlebox').value;		
		var srchEnc = encodeURIComponent(srchStr);
		var googUrl="http://www.google.com/search?hl=en&source=hp&q=site:www.python-course.eu " + srchEnc + "&amp;aq=f&amp;oq=&amp;aqi=";
		window.location = googUrl;	
	});
}

///////////////////////////////////
//
// Scroll to top
//
///////////////////////////////////

var toTop = gebi("toTop");
if(toTop) {
	toTop.addEventListener("click", function(e) {
		window.scrollTo({
			top: 0,
			behavior: "smooth"
		});	
	});
}


///////////////////////////////////
//
// Create sticky verti_nav
// Goes under existing chapter nav, ads, author, etc
//
///////////////////////////////////

function createStickyVertiNav() {
	if( gebi("sideBarNonNav") ) {
		var sideBarNonNav = gebi("sideBarNonNav");
		sideBarNonNavBBox = sideBarNonNav.getBoundingClientRect();
		browserWidth = window.innerWidth;
		browserHeight = window.innerHeight;	
		var contentBottom = gebi("content").getBoundingClientRect().bottom;	
		var vertiNavOLClone = gebi("vertiNavOLClone");
		if( !gebi("newVertiNavDiv") // Do once only
			&& !vertiNavOLClone // Do once only
			&& browserWidth > 700 // Desktop only		
			&& sideBarNonNavBBox.bottom < contentBottom - 600 // Don't do for short pages
			&& sideBarNonNavBBox.bottom < browserHeight // Create it when scrolled down enough
			) {			
			var newVertiNavDiv = document.createElement("div");
			newVertiNavDiv.id = "newVertiNavDiv";		
			verti_nav.appendChild(newVertiNavDiv);		
			var inThisChapHead = gebi("inThisChapHead");
			if(inThisChapHead) {
				var clonedInThisChapHead = inThisChapHead.cloneNode(true);
				clonedInThisChapHead.id = "inThisChapHeadClone";						
				var vertiNavOL = gebi("vertiNavOL");
				var vertiNavOLHeight = vertiNavOL.getBoundingClientRect().height;
				if(browserHeight > vertiNavOLHeight + 50) {
					newVertiNavDiv.appendChild(clonedInThisChapHead);
					var clonedvertiNavOL = vertiNavOL.cloneNode(true);
					clonedvertiNavOL.id = "vertiNavOLClone";	
					newVertiNavDiv.appendChild(clonedvertiNavOL);
				}			
			}
		}
	}
}
createStickyVertiNav();

///////////////////////////////////
//
// "On This Page" menu
//
///////////////////////////////////


var thisPageNav = document.querySelector("#thisPageNav");
var thisPageNavRight = document.querySelector("#thisPageNavRight");	
var hsTopArr;
var verti_nav = gebi("verti_nav");
var browserWidth = window.innerWidth;
var browserHeight = window.innerHeight;

if(thisPageNav || thisPageNavRight) {
	var hs = document.querySelectorAll("h2, h3:not(.output_prompt), h4:not(.output_prompt), h5, h6");

	if( hs.length > 0) {
		var ul = document.createElement("ul");
		ul.classList.add("pageNav");
		hs.forEach((h) => {			
		  if(h.innerHTML.replace(" &nbsp;", "") != "OUTPUT:") {
			  var li = document.createElement("li");
			  li.innerHTML = h.innerHTML;			  
			  if(h.hasAttribute("id") ) {
				  li.id = h.id+"_nav";
			  }
			  li.classList.add(h.tagName.replace("H","indent"));
			  ul.appendChild(li);
			  if(!h.id) {
				 h.id = h.innerHTML.replace(/\s+/g, '-');
			  }
			  if(h.id) {
				  li.addEventListener("click", function() {
					gebi(h.id).scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"}); 
				  });
			  }
			}
		});			
	}
}

var addedEventListener = false;

function doPageNav() {
	browserWidth = window.innerWidth;
	browserHeight = window.innerHeight;

	function toggleThisPageUL() {		
		ul.classList.toggle("displayNone");
		this.querySelector('span').classList.toggle('up');				
	}
	if(thisPageNav || thisPageNavRight) {
		if( hs.length === 0) {
			if(thisPageNav) {
				thisPageNav.style.visibility = "hidden";
			}			
			if(thisPageNavRight) {
				thisPageNavRight.style.visibility = "hidden";
			}			
		}
			
		if(thisPageNav) {
			thisPageNav.querySelector(".navHeading").removeEventListener("click", toggleThisPageUL, true);
		}

		if(thisPageNavRight && browserWidth > 1000 && browserHeight > 500) {
			if(ul) {
				ul.classList.remove("displayNone");
				thisPageNavRight.appendChild(ul);
				function handler(entries, observer_nav) {				
					for (entry of entries) {
						if(thisPageNavRight && entry.isIntersecting){
							document.querySelector('.pageNav').querySelectorAll('li').forEach(li => li.classList.remove("thisH"));
							if(gebi(entry.target.id+"_nav")) {							
								gebi(entry.target.id+"_nav").classList.add("thisH");
							} else {
								console.log("entry.target.id+_nav DNE");
							}
						}
					}
				}
				let observer_nav = new IntersectionObserver(handler, {
					root: null,
					rootMargin: '200px 0px -'+(browserHeight-200)+'px 0px',
					threshold: 1
				});		
				hs.forEach(h => observer_nav.observe(h));
			}
			
		} else {
			if( ul && thisPageNav.querySelector(".pageNav") == null) {
				ul.classList.add("displayNone");
				thisPageNav.appendChild(ul);	
				if( !addedEventListener) {
					thisPageNav.querySelector(".navHeading").addEventListener("click", toggleThisPageUL, true);
					addedEventListener = true;
				}					
			} 	

		}
	}
}
doPageNav();


	
///////////////////////////////////
//
// Scroll throttler
//
///////////////////////////////////

var ticking = false;
var lastKnownScrollPosition = window.scrollY;
document.addEventListener('scroll', function(e) {
  lastKnownScrollPosition = window.scrollY;
  var browserHt = window.innerHeight;
  if (!ticking) {
    window.requestAnimationFrame(function() {
		
	  //////////////////////////////////
	  //
	  // Waiting for MathJax to load and fire
	  //
	  /////////////////////////////////////
	  
 //     if( typeof(MathJax) != 'undefined' && typeof(MathJax.typesetPromise) == 'function') {
//		doMj(lastKnownScrollPosition);
//	  }
	  
	  //////////////////////////////////
	  //
	  // Ensuring "Top" appears only when required
	  //
	  //////////////////////////////////
	  
	  if(toTop) {
		  if( lastKnownScrollPosition > 0.9*browserHt) {
			toTop.style.display = "inline-block";
		      } else {
		    toTop.style.display = "none";
		  }
	  }

	  createStickyVertiNav();

	  //////////////////////////////////
	  //
	  // Essential for scroll throttle
	  //
	  //////////////////////////////////
	  
      ticking = false;
    });

    ticking = true;
  }
});





</script>




</body>
</html>
