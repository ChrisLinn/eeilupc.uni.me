<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<!-- saved from url=(0048)http://auto.upc.edu.cn/dgdzkc/yuyue/student.html -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><HTML 
xmlns="http://www.w3.org/1999/xhtml"><HEAD>
<META content="text/html; charset=UTF-8" http-equiv="Content-Type">
<META name="description" content="student"><TITLE>电工电子学实验预约系统</TITLE><LINK rel="stylesheet" 
type="text/css" href="admin_files/style.css"><LINK rel="stylesheet" type="text/css" 
href="admin_files/main.css">
<SCRIPT type="text/javascript" src="admin_files/function.js"></SCRIPT>
<?php include 'header.php'; ?>
<META name="GENERATOR" content="MSHTML 9.00.8112.16496"></HEAD>
<BODY>
<DIV id="wraper">
<DIV id="main_top" onselectstart="return false">
<DIV id="top_logo"></DIV>
<DIV id="top_bar"></DIV><IMG hideFocus="true" id="nextNote" alt="��һ��" align="absmiddle" 
src="admin_files/next.jpg"></DIV>
<DIV id="main_left"><!--左栏内容开始-->
<TABLE onselectstart="return false" class="table_left" cellSpacing="0" 
cellPadding="0">
  <TBODY>
  <TR class="titleTR">
    <TD height="30" background="admin_files/top_left.gif" width="10"></TD>
    <TD background="admin_files/top_bg.gif">
      <DIV class="table_title">用户信息</DIV>
      <DIV class="slide"></DIV></TD>
    <TD background="admin_files/top_right.gif" width="10"></TD></TR>
  <TR>
    <TD background="admin_files/leftbg.gif" width="10"></TD>
    <TD bgColor="#ffffff" vAlign="top">
      <UL class="list">
        <LI id="usertype"><B>身 份：</B><?php showmysta()?></LI>
        <LI id="realname"><B>姓 名：</B><?php showmyname()?></LI>
        <LI id="username"><B>学 号：</B><?php echo $_COOKIE["id"]; ?></LI>
        <LI><B><a  href="/reborn.php">修改个人信息</a>		</B>&nbsp;|&nbsp;<B><a  href="/logout.php">注销</a>		</B></LI></UL></TD>
    <TD background="admin_files/rightbg.gif" width="10"></TD></TR>
  <TR>
    <TD height="20" background="admin_files/bottom_left.gif" 
    width="10"></TD>
    <TD background="admin_files/bottom_bg.gif">&nbsp;</TD>
    <TD background="admin_files/bottom_right.gif" width="10"></TD></TR>
  </TBODY></TABLE>
<TABLE onselectstart="return false" class="table_left" cellSpacing="0" 
cellPadding="0">
  <TBODY>
  <TR class="titleTR">
    <TD height="30" background="admin_files/top_left.gif" width="10"></TD>
    <TD background="admin_files/top_bg.gif">
      <DIV class="table_title">实验管理</DIV>
      <DIV class="slide"></DIV></TD>
    <TD background="admin_files/top_right.gif" width="10"></TD></TR>
  <TR>
    <TD background="admin_files/leftbg.gif" width="10"></TD>
    <TD bgColor="#ffffff" vAlign="top">
      <UL style="height: 90px;" class="list">
        <LI><IMG align="absmiddle" src="admin_files/list.gif">&nbsp;<B><A 
        href="http://auto.upc.edu.cn/dgdzkc/yuyue/st_explist.html" target="main_Frame">成员管理</A></B></LI>
        <LI><IMG align="absmiddle" src="admin_files/list.gif">&nbsp;<B><A 
        href="http://auto.upc.edu.cn/dgdzkc/yuyue/st_expmanage.html" target="main_Frame">预约查看</A></B></LI>
        <LI><IMG align="absmiddle" src="admin_files/list.gif">&nbsp;<B><A 
        href="http://auto.upc.edu.cn/dgdzkc/yuyue/st_expfinish.html" target="main_Frame">预约管理</A></B></LI>
        <LI><IMG align="absmiddle" src="admin_files/list.gif">&nbsp;<B><A 
        href="http://auto.upc.edu.cn/dgdzkc/yuyue/st_expscore.html" target="main_Frame">预约却不来</A></B></LI></UL></TD>
    <TD background="admin_files/rightbg.gif" width="10"></TD></TR>
  <TR>
    <TD height="20" background="admin_files/bottom_left.gif" 
    width="10"></TD>
    <TD background="admin_files/bottom_bg.gif">&nbsp;</TD>
    <TD background="admin_files/bottom_right.gif" width="10"></TD></TR>
  </TBODY></TABLE>
<TABLE onselectstart="return false" class="table_left" cellSpacing="0" 
cellPadding="0">
  <TBODY>
  <TR class="titleTR">
    <TD height="30" background="admin_files/top_left.gif" width="10"></TD>
    <TD background="admin_files/top_bg.gif">
      <DIV class="table_title">信息管理</DIV>
      <DIV class="slide"></DIV></TD>
    <TD background="admin_files/top_right.gif" width="10"></TD></TR>
  <TR>
    <TD background="admin_files/leftbg.gif" width="10"></TD>
    <TD bgColor="#ffffff" vAlign="top">
      <UL style="height: 25px;" class="list">
        <LI><IMG align="absmiddle" src="admin_files/list.gif">&nbsp;<B><A 
        href="admin_files/st_note.htm" 
        target="main_Frame">网站公告列表</A></B></LI></UL></TD>
    <TD background="admin_files/rightbg.gif" width="10"></TD></TR>
  <TR>
    <TD height="20" background="admin_files/bottom_left.gif" 
    width="10"></TD>
    <TD background="admin_files/bottom_bg.gif">&nbsp;</TD>
    <TD background="admin_files/bottom_right.gif" width="10"></TD></TR>
  </TBODY></TABLE><!--左栏内容结束--></DIV>
<DIV id="main_right"><B 
style="height: 0px; overflow: hidden; float: right;"></B>
<DIV id="right_1"><IMG id="middle_img" src="admin_files/middle.gif"></DIV>
<DIV id="right_2"><IFRAME id="main_Frame" src="admin_files/st_note.htm" 
frameBorder="0" name="main_Frame" scrolling="yes"></IFRAME></DIV></DIV>
<DIV id="noteview">
<TABLE border="0" cellSpacing="0" cellPadding="0" width="100%">
  <TBODY>
  <TR>
    <TD height="30" background="admin_files/top_left.gif" width="10"></TD>
    <TD background="admin_files/top_bg.gif">
      <DIV class="table_title"></DIV>
      <DIV class="closediv"></DIV></TD>
    <TD background="admin_files/top_right.gif" width="10"></TD></TR>
  <TR>
    <TD background="admin_files/leftbg.gif" width="10"></TD>
    <TD bgColor="#ffffff" vAlign="top">
      <DIV id="notecontent"></DIV></TD>
    <TD background="admin_files/rightbg.gif" width="10"></TD></TR>
  <TR>
    <TD height="20" background="admin_files/bottom_left.gif" 
    width="10"></TD>
    <TD background="admin_files/bottom_bg.gif">&nbsp;</TD>
    <TD background="admin_files/bottom_right.gif" width="10"></TD></TR>
  </TBODY></TABLE></DIV></DIV>
<DIV id="main_animate"></DIV>
<DIV id="toTop"><IMG src="admin_files/toTop.gif"></DIV></BODY></HTML>
