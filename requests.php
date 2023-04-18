<?php include "header.php" ?>
<?php include "connect.php" ?>
<?php
function checkNull($s){
    if(is_null($s)==1){
        return "<center>-</center>";
    }
    return $s;
}
?>
<?php 
    $sql = 'SELECT forename, surname, postalAddress, mobileTelNo, email, sendMethod,catDesc FROM CT_expressedInterest JOIN CT_category ON CT_category.catID=CT_expressedInterest.catID ORDER BY forename ';
    $result = $conn->query($sql);
?>
<section class="requestsBox">
<table>
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Address</th>
    <th>Mobile Number</th>
    <th>Email</th>
    <th>Send Method</th>
    <th>Category Name</th>
  </tr>
<?php 
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<tr><td>".checkNull($row['forename']) ;
        echo "</td><td>".checkNull($row['surname']) ;
        echo "</td><td>".checkNull($row['postalAddress']) ;
        echo "</td><td>".checkNull($row['mobileTelNo']) ;
        echo "</td><td>".checkNull($row['email']) ;
        echo "</td><td>".checkNull($row['sendMethod']) ;
        echo "</td><td>".checkNull($row['catDesc']) ;
        echo "</td></tr>";
        // echo "<td>{$row['surname']}</td>".
        // "<td>{$row['postalAddress']}</td>".
        // "<td>{$row['mobileTelNo']}</td> ". 
        // "<td>{$row['email']}</td> ".
        // "<td>{$row['sendMethod']}</td> ".
        // "<td> {$row['catDesc']}</td> </tr> ";
     }
    } else {
      echo "0 results";
    }
    $conn->close();
?>
  
</table>
</section>

<?php include "footer.php" ?>
