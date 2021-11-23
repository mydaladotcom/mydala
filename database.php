<?php
  date_default_timezone_set("Asia/Kolkata");
  $db = mysqli_connect("ksft-private-rds-1.chqrvzheeq52.ap-south-1.rds.amazonaws.com", "admin", "fqK2FZpbUVjpyOjkkZYf", "web111mydealzdb") or die('Error: '. mysqli_connect_errno());
  if($db) {
    echo '<div>successfully connected</div>';
  }else {
    echo '<div>unable to connect</div>';
  }

  $Qry = "SELECT * FROM `web111mydealzdb`.`BstTblSmsText` LIMIT 10;";
  $rec = mysqli_query($db, $Qry);
  echo '<table border="1" width="250">';
  while ($rs=mysqli_fetch_assoc($rec)) {
    echo '<tr>';
    echo '<td>'. $rs['id'] .'</td>';
    echo '<td>'. $rs['status'] .'</td>';
    echo '<td>'. $rs['inserted'] .'</td>';
    echo '</tr>';
  }
  echo '</table>';
?>
