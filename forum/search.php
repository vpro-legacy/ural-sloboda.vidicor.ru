<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<meta http-equiv="Content-Style-Type" content="text/css">

<link rel="top" href="./index.php?sid=f8a043ab14c9fc09a0a47cd4a13ba4bd" title="������ ������� ��������� �������" />
<link rel="search" href="./search.php?sid=f8a043ab14c9fc09a0a47cd4a13ba4bd" title="�����" />
<link rel="help" href="./faq.php?sid=f8a043ab14c9fc09a0a47cd4a13ba4bd" title="FAQ" />
<link rel="author" href="./memberlist.php?sid=f8a043ab14c9fc09a0a47cd4a13ba4bd" title="������������" />

<title>��������� ������� :: �����</title>
<!-- link rel="stylesheet" href="templates/subSilver/subSilver.css" type="text/css" -->
<style type="text/css">
<!--
/*
  The original subSilver Theme for phpBB version 2+
  Created by subBlue design
  http://www.subBlue.com

  NOTE: These CSS definitions are stored within the main page body so that you can use the phpBB2
  theme administration centre. When you have finalised your style you could cut the final CSS code
  and place it in an external file, deleting this section to save bandwidth.
*/

/* General page style. The scroll bar colours only visible in IE5.5+ */
body {
	background-color: #E5E5E5;
	scrollbar-face-color: #DEE3E7;
	scrollbar-highlight-color: #FFFFFF;
	scrollbar-shadow-color: #DEE3E7;
	scrollbar-3dlight-color: #D1D7DC;
	scrollbar-arrow-color:  #006699;
	scrollbar-track-color: #EFEFEF;
	scrollbar-darkshadow-color: #98AAB1;
}

/* General font families for common tags */
font,th,td,p { font-family: Verdana, Arial, Helvetica, sans-serif }
a:link,a:active,a:visited { color : #006699; }
a:hover		{ text-decoration: underline; color : #DD6900; }
hr	{ height: 0px; border: solid #D1D7DC 0px; border-top-width: 1px;}

/* This is the border line & background colour round the entire page */
.bodyline	{ background-color: #FFFFFF; border: 1px #98AAB1 solid; }

/* This is the outline round the main forum tables */
.forumline	{ background-color: #FFFFFF; border: 2px #006699 solid; }

/* Main table cell colours and backgrounds */
td.row1	{ background-color: #EFEFEF; }
td.row2	{ background-color: #DEE3E7; }
td.row3	{ background-color: #D1D7DC; }

/*
  This is for the table cell above the Topics, Post & Last posts on the index.php page
  By default this is the fading out gradiated silver background.
  However, you could replace this with a bitmap specific for each forum
*/
td.rowpic {
		background-color: #FFFFFF;
		background-image: url(templates/subSilver/images/cellpic2.jpg);
		background-repeat: repeat-y;
}

/* Header cells - the blue and silver gradient backgrounds */
th	{
	color: #FFA34F; font-size: 11px; font-weight : bold;
	background-color: #006699; height: 25px;
	background-image: url(templates/subSilver/images/cellpic3.gif);
}

td.cat,td.catHead,td.catSides,td.catLeft,td.catRight,td.catBottom {
			background-image: url(templates/subSilver/images/cellpic1.gif);
			background-color:#D1D7DC; border: #FFFFFF; border-style: solid; height: 28px;
}

/*
  Setting additional nice inner borders for the main table cells.
  The names indicate which sides the border will be on.
  Don't worry if you don't understand this, just ignore it :-)
*/
td.cat,td.catHead,td.catBottom {
	height: 29px;
	border-width: 0px 0px 0px 0px;
}
th.thHead,th.thSides,th.thTop,th.thLeft,th.thRight,th.thBottom,th.thCornerL,th.thCornerR {
	font-weight: bold; border: #FFFFFF; border-style: solid; height: 28px;
}
td.row3Right,td.spaceRow {
	background-color: #D1D7DC; border: #FFFFFF; border-style: solid;
}

th.thHead,td.catHead { font-size: 12px; border-width: 1px 1px 0px 1px; }
th.thSides,td.catSides,td.spaceRow	 { border-width: 0px 1px 0px 1px; }
th.thRight,td.catRight,td.row3Right	 { border-width: 0px 1px 0px 0px; }
th.thLeft,td.catLeft	  { border-width: 0px 0px 0px 1px; }
th.thBottom,td.catBottom  { border-width: 0px 1px 1px 1px; }
th.thTop	 { border-width: 1px 0px 0px 0px; }
th.thCornerL { border-width: 1px 0px 0px 1px; }
th.thCornerR { border-width: 1px 1px 0px 0px; }

/* The largest text used in the index page title and toptic title etc. */
.maintitle	{
	font-weight: bold; font-size: 22px; font-family: "Trebuchet MS",Verdana, Arial, Helvetica, sans-serif;
	text-decoration: none; line-height : 120%; color : #000000;
}

/* General text */
.gen { font-size : 12px; }
.genmed { font-size : 11px; }
.gensmall { font-size : 10px; }
.gen,.genmed,.gensmall { color : #000000; }
a.gen,a.genmed,a.gensmall { color: #006699; text-decoration: none; }
a.gen:hover,a.genmed:hover,a.gensmall:hover	{ color: #DD6900; text-decoration: underline; }

/* The register, login, search etc links at the top of the page */
.mainmenu		{ font-size : 11px; color : #000000 }
a.mainmenu		{ text-decoration: none; color : #006699;  }
a.mainmenu:hover{ text-decoration: underline; color : #DD6900; }

/* Forum category titles */
.cattitle		{ font-weight: bold; font-size: 12px ; letter-spacing: 1px; color : #006699}
a.cattitle		{ text-decoration: none; color : #006699; }
a.cattitle:hover{ text-decoration: underline; }

/* Forum title: Text and link to the forums used in: index.php */
.forumlink		{ font-weight: bold; font-size: 12px; color : #006699; }
a.forumlink 	{ text-decoration: none; color : #006699; }
a.forumlink:hover{ text-decoration: underline; color : #DD6900; }

/* Used for the navigation text, (Page 1,2,3 etc) and the navigation bar when in a forum */
.nav			{ font-weight: bold; font-size: 11px; color : #000000;}
a.nav			{ text-decoration: none; color : #006699; }
a.nav:hover		{ text-decoration: underline; }

/* titles for the topics: could specify viewed link colour too */
.topictitle,h1,h2	{ font-weight: bold; font-size: 11px; color : #000000; }
a.topictitle:link   { text-decoration: none; color : #006699; }
a.topictitle:visited { text-decoration: none; color : #5493B4; }
a.topictitle:hover	{ text-decoration: underline; color : #DD6900; }

/* Name of poster in viewmsg.php and viewtopic.php and other places */
.name			{ font-size : 11px; color : #000000;}

/* Location, number of posts, post date etc */
.postdetails		{ font-size : 10px; color : #000000; }

/* The content of the posts (body of text) */
.postbody { font-size : 12px; line-height: 18px}
a.postlink:link	{ text-decoration: none; color : #006699 }
a.postlink:visited { text-decoration: none; color : #5493B4; }
a.postlink:hover { text-decoration: underline; color : #DD6900}

/* Quote & Code blocks */
.code {
	font-family: Courier, 'Courier New', sans-serif; font-size: 11px; color: #006600;
	background-color: #FAFAFA; border: #D1D7DC; border-style: solid;
	border-left-width: 1px; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px
}

.quote {
	font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: #444444; line-height: 125%;
	background-color: #FAFAFA; border: #D1D7DC; border-style: solid;
	border-left-width: 1px; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px
}

/* Copyright and bottom info */
.copyright		{ font-size: 10px; font-family: Verdana, Arial, Helvetica, sans-serif; color: #444444; letter-spacing: -1px;}
a.copyright		{ color: #444444; text-decoration: none;}
a.copyright:hover { color: #000000; text-decoration: underline;}

/* Form elements */
input,textarea, select {
	color : #000000;
	font: normal 11px Verdana, Arial, Helvetica, sans-serif;
	border-color : #000000;
}

/* The text input fields background colour */
input.post, textarea.post, select {
	background-color : #FFFFFF;
}

input { text-indent : 2px; }

/* The buttons used for bbCode styling in message post */
input.button {
	background-color : #EFEFEF;
	color : #000000;
	font-size: 11px; font-family: Verdana, Arial, Helvetica, sans-serif;
}

/* The main submit button option */
input.mainoption {
	background-color : #FAFAFA;
	font-weight : bold;
}

/* None-bold submit button */
input.liteoption {
	background-color : #FAFAFA;
	font-weight : normal;
}

/* This is the line in the posting page which shows the rollover
  help line. This is actually a text box, but if set to be the same
  colour as the background no one will know ;)
*/
.helpline { background-color: #DEE3E7; border-style: none; }

/* Import the fancy styles for IE only (NS4.x doesn't use the @import function) */
@import url("templates/subSilver/formIE.css");
-->
</style>
</head>
<body bgcolor="#E5E5E5" text="#000000" link="#006699" vlink="#5493B4">

<a name="top"></a>

<table width="100%" cellspacing="0" cellpadding="10" border="0" align="center">
	<tr>
		<td class="bodyline"><table width="100%" cellspacing="0" cellpadding="0" border="0">
			<tr>
				<td><a href="index.php?sid=f8a043ab14c9fc09a0a47cd4a13ba4bd"><img src="templates/subSilver/images/logo_phpBB.gif" border="0" alt="������ ������� ��������� �������" vspace="1" /></a></td>
				<td align="center" width="100%" valign="middle"><span class="maintitle">��������� �������</span><br /><span class="gen">������ �������� ���������<br />&nbsp; </span>
				<table cellspacing="0" cellpadding="2" border="0">
					<tr>
						<td align="center" valign="top" nowrap="nowrap"><span class="mainmenu">&nbsp;<a href="faq.php?sid=f8a043ab14c9fc09a0a47cd4a13ba4bd" class="mainmenu"><img src="templates/subSilver/images/icon_mini_faq.gif" width="12" height="13" border="0" alt="FAQ" hspace="3" />FAQ</a>&nbsp; &nbsp;<a href="search.php?sid=f8a043ab14c9fc09a0a47cd4a13ba4bd" class="mainmenu"><img src="templates/subSilver/images/icon_mini_search.gif" width="12" height="13" border="0" alt="�����" hspace="3" />�����</a>&nbsp; &nbsp;<a href="memberlist.php?sid=f8a043ab14c9fc09a0a47cd4a13ba4bd" class="mainmenu"><img src="templates/subSilver/images/icon_mini_members.gif" width="12" height="13" border="0" alt="������������" hspace="3" />������������</a>&nbsp; &nbsp;<a href="groupcp.php?sid=f8a043ab14c9fc09a0a47cd4a13ba4bd" class="mainmenu"><img src="templates/subSilver/images/icon_mini_groups.gif" width="12" height="13" border="0" alt="������" hspace="3" />������</a>&nbsp;
						&nbsp;<a href="profile.php?mode=register&amp;sid=f8a043ab14c9fc09a0a47cd4a13ba4bd" class="mainmenu"><img src="templates/subSilver/images/icon_mini_register.gif" width="12" height="13" border="0" alt="�����������" hspace="3" />�����������</a>&nbsp;
						</span></td>
					</tr>
					<tr>
						<td height="25" align="center" valign="top" nowrap="nowrap"><span class="mainmenu">&nbsp;<a href="profile.php?mode=editprofile&amp;sid=f8a043ab14c9fc09a0a47cd4a13ba4bd" class="mainmenu"><img src="templates/subSilver/images/icon_mini_profile.gif" width="12" height="13" border="0" alt="�������" hspace="3" />�������</a>&nbsp; &nbsp;<a href="privmsg.php?folder=inbox&amp;sid=f8a043ab14c9fc09a0a47cd4a13ba4bd" class="mainmenu"><img src="templates/subSilver/images/icon_mini_message.gif" width="12" height="13" border="0" alt="����� � ��������� ������ ���������" hspace="3" />����� � ��������� ������ ���������</a>&nbsp; &nbsp;<a href="login.php?sid=f8a043ab14c9fc09a0a47cd4a13ba4bd" class="mainmenu"><img src="templates/subSilver/images/icon_mini_login.gif" width="12" height="13" border="0" alt="����" hspace="3" />����</a>&nbsp;</span></td>
					</tr>
				</table></td>
			</tr>
		</table>

		<br />


<form action="search.php?mode=results&amp;sid=f8a043ab14c9fc09a0a47cd4a13ba4bd" method="POST"><table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr>
		<td align="left"><span class="nav"><a href="index.php?sid=f8a043ab14c9fc09a0a47cd4a13ba4bd" class="nav">������ ������� ��������� �������</a></span></td>
	</tr>
</table>

<table class="forumline" width="100%" cellpadding="4" cellspacing="1" border="0">
	<tr>
		<th class="thHead" colspan="4" height="25">������</th>
	</tr>
	<tr>
		<td class="row1" colspan="2" width="50%"><span class="gen">�������� �����:</span><br /><span class="gensmall">�� ������ ������������ <u>AND</u> ����� ���������� �����, ������� ������ ���� � �����������, <u>OR</u> ��� ����, ������� ����� ���� � �����������, � <u>NOT</u> ��� ����, ������� � ����������� ���� �� ������. ����������� * � �������� ������� ��� ���������� ����������.</span></td>
		<td class="row2" colspan="2" valign="top"><span class="genmed"><input type="text" style="width: 300px" class="post" name="search_keywords" size="30" /><br /><input type="radio" name="search_terms" value="any" checked="checked" /> ������ ����� �����/����� � ������ ��������<br /><input type="radio" name="search_terms" value="all" /> ������ ��� �����</span></td>
	</tr>
	<tr>
		<td class="row1" colspan="2"><span class="gen">����� �� ������:</span><br /><span class="gensmall">����������� * � �������� �������</span></td>
		<td class="row2" colspan="2" valign="middle"><span class="genmed"><input type="text" style="width: 300px" class="post" name="search_author" size="30" /></span></td>
	</tr>
	<tr>
		<th class="thHead" colspan="4" height="25">��������� �������</th>
	</tr>
	<tr>
		<td class="row1" align="right"><span class="gen">�����:&nbsp;</span></td>
		<td class="row2"><span class="genmed"><select class="post" name="search_forum"><option value="-1">��� ���������</option><option value="2">��������� �������</option><option value="3">������� ���������</option><option value="4">��������� ������</option><option value="7">����� ������</option><option value="17">����� ���, �����, ��Ѩ���</option><option value="18">����������</option><option value="6">���� ������</option><option value="8">�������</option><option value="9">������������ ����������</option><option value="19">��������</option><option value="20">� ������ �� ������</option><option value="24">�������� ������</option><option value="5">����������</option><option value="10">��������� �������� ��������</option><option value="21">������������</option><option value="22">�������</option><option value="14">���������</option><option value="11">�����</option><option value="12">�����</option><option value="13">���������</option><option value="15">����������</option><option value="16">���������</option><option value="23">����"�"</option></select></span></td>
		<td class="row1" align="right" nowrap="nowrap"><span class="gen">����� ����������:&nbsp;</span></td>
		<td class="row2" valign="middle"><span class="genmed"><select class="post" name="search_time"><option value="0" selected="selected">��� ���������</option><option value="1">�� ��������� ����</option><option value="7">�� ��������� 7 ����</option><option value="14">�� ��������� 2 ������</option><option value="30">�� ��������� �����</option><option value="90">�� ��������� 3 ������</option><option value="180">�� ��������� 6 �������</option><option value="364">�� ��������� ���</option></select><br /><input type="radio" name="search_fields" value="all" checked="checked" /> ������ � ��������� ��� � ������� ���������<br /><input type="radio" name="search_fields" value="msgonly" /> ������ ������ � ������� ���������</span></td>
	</tr>
	<tr>
		<td class="row1" align="right"><span class="gen">���������:&nbsp;</span></td>
		<td class="row2"><span class="genmed"><select class="post" name="search_cat"><option value="-1">��� ���������</option><option value="1">������� ����</option><option value="2">��������� � ����!</option><option value="3">�������</option><option value="5">POST SCRIPTUM</option>
		</select></span></td>
		<td class="row1" align="right"><span class="gen">����������� ��:&nbsp;</span></td>
		<td class="row2" valign="middle" nowrap="nowrap"><span class="genmed"><select class="post" name="sort_by"><option value="0">������� ����������</option><option value="1">��������� ���������</option><option value="2">����</option><option value="3">������</option><option value="4">������</option></select><br /><input type="radio" name="sort_dir" value="ASC" /> �� �����������<br /><input type="radio" name="sort_dir" value="DESC" checked="checked" /> �� ��������</span>&nbsp;</td>
	</tr>
	<tr>
		<td class="row1" align="right" nowrap="nowrap"><span class="gen">���������� ���������� ���:&nbsp;</span></td>
		<td class="row2" nowrap="nowrap"><input type="radio" name="show_results" value="posts" /><span class="genmed">���������<input type="radio" name="show_results" value="topics" checked="checked" />����</span></td>
		<td class="row1" align="right"><span class="gen">���������� ������</span></td>
		<td class="row2"><span class="genmed"><select class="post" name="return_chars"><option value="-1">��� ���������</option><option value="0">0</option><option value="25">25</option><option value="50">50</option><option value="100">100</option><option value="200" selected="selected">200</option><option value="300">300</option><option value="400">400</option><option value="500">500</option><option value="600">600</option><option value="700">700</option><option value="800">800</option><option value="900">900</option><option value="1000">1000</option></select> �������� ���������</span></td>
	</tr>
	<tr>
		<td class="catBottom" colspan="4" align="center" height="28"><input class="liteoption" type="submit" value="�����" /></td>
	</tr>
</table>

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr>
		<td align="right" valign="middle"><span class="gensmall">������� ����: GMT + 5</span></td>
	</tr>
</table></form>

<table width="100%" border="0">
	<tr>
		<td align="right" valign="top">
<form method="get" name="jumpbox" action="viewforum.php?sid=f8a043ab14c9fc09a0a47cd4a13ba4bd" onSubmit="if(document.jumpbox.f.value == -1){return false;}"><table cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td nowrap="nowrap"><span class="gensmall">�������:&nbsp;<select name="f" onchange="if(this.options[this.selectedIndex].value != -1){ forms['jumpbox'].submit() }"><option value="-1">�������� �����</option><option value="-1">&nbsp;</option><option value="-1">������� ����</option><option value="-1">----------------</option><option value="2">��������� �������</option><option value="3">������� ���������</option><option value="4">��������� ������</option><option value="7">����� ������</option><option value="17">����� ���, �����, ��Ѩ���</option><option value="18">����������</option><option value="-1">&nbsp;</option><option value="-1">��������� � ����!</option><option value="-1">----------------</option><option value="6">���� ������</option><option value="8">�������</option><option value="9">������������ ����������</option><option value="19">��������</option><option value="20">� ������ �� ������</option><option value="24">�������� ������</option><option value="-1">&nbsp;</option><option value="-1">�������</option><option value="-1">----------------</option><option value="5">����������</option><option value="10">��������� �������� ��������</option><option value="21">������������</option><option value="22">�������</option><option value="-1">&nbsp;</option><option value="-1">POST SCRIPTUM</option><option value="-1">----------------</option><option value="14">���������</option><option value="11">�����</option><option value="12">�����</option><option value="13">���������</option><option value="15">����������</option><option value="16">���������</option><option value="23">����"�"</option></select><input type="hidden" name="sid" value="f8a043ab14c9fc09a0a47cd4a13ba4bd" />&nbsp;<input type="submit" value="�������" class="liteoption" /></span></td>
	</tr>
</table></form>

</td>
	</tr>
</table>


<div align="center"><span class="copyright"><br /><br />
<!--
	We request you retain the full copyright notice below including the link to www.phpbb.com.
	This not only gives respect to the large amount of time given freely by the developers
	but also helps build interest, traffic and use of phpBB 2.0. If you cannot (for good
	reason) retain the full copyright we request you at least leave in place the
	Powered by phpBB line, with phpBB linked to www.phpbb.com. If you refuse
	to include even this then support on our forums may be affected.

	The phpBB Group : 2002
// -->
Powered by <a href="http://www.phpbb.com/" target="_phpbb" class="copyright">phpBB</a> &copy; 2001, 2005 phpBB Group<br /><a href='http://www.phpbbguru.net/'>������� ��������� phpBB</a></span></div>
		</td>
	</tr>
</table>

</body>
</html>

