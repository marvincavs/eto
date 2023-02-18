<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style1.css" />
  </head>
  <body style="background-color:#2FEC70">

<table align=center border=1 width= 80% cellpadding= 5 cellspacing= 5>
<tr><td> AC Name</td><td>Details</td><td>Facilities</td><td>Min Bal</td></tr>
<?php
include("connfile.php");


  $sqlvar="select * from actypetab order by actypeName";
  $result=$conn -> query($sqlvar);
  while($row=$result->fetch_row())
  {
    echo("<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>");
  
  }

  ?>
</table>
<a href=accountdetails.php>Back</a>
      <closeform></closeform></form>
    </table>
    </div>
  </body>
</html>
