<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style1.css" />
  </head>
  <body>
<?php
include("connfile.php");
session_start();
$res="";
if($_SERVER['REQUEST_METHOD']=='POST')
{
  //echo("working");
  $v1=$_POST['text1'];
  $v2=$_POST['text2'];
  $v3=$_POST['text3'];
  $v4=$_POST['text4'];
  //echo$v1." ".$v2;
  $sqlvar="insert into actypetab values('$v1','$v2','$v3',$v4)";
  $result=$conn ->query($sqlvar);
  if($result)
  {
    $res="Record Inserted";

  }
  else
  {

    $res="Record Not Inserted, Some problem";
  }
}

?>
      <form name=form1 method="post" action="adminacdet.php"> 
        
      <table style="background-color:#2FEC70"width=80% border= 1 cellspacing=5 cellpadding=5 align=center>
      <tr><td colspan=2> Account Type Details Entry</td></tr>
      <tr><td>AcName</td><td><input type= name=text1></td></tr>
      <tr><td>AcDetails</td><td><input type= name=text2></td></tr>
      <tr><td>Facilities</td><td><input type= name=text3></td></tr>
      <tr><td>MinBalance</td><td><input type= name=text4></td></tr>
      <tr><td><a href=Accountdetails.php>Back</a></td><td><input type=submit name=login style="height: 45px; width:150px"></td></tr>
      <tr><td colspan=2><?php echo$res; ?></td></tr>

      <closeform></closeform></form>
    </table>
    </div>
  </body>
</html>
