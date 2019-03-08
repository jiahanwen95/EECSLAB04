<?php
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\" />";
$DMC = $_POST['DMC'];
$Anthem = $_POST['Anthem'];
$SSDT = $_POST['SSDT'];
$un=$_POST['username'];
$pw=$_POST['password'];
$sp=$_POST['Shipping'];
$total= ($DMC * 60 + $Anthem * 45+ $SSDT *100 +$sp);
$totalDMC= ($DMC * 60 );

$totalAnthem= ( $Anthem * 45);

$totalSSDT= ($SSDT *100);


echo "Welcome to the cheapest gamestore in the World!!!!!<br>";

echo "Your email is:".$un."<br>";
echo "Your password is:" .$pw."<br>";

echo "<div class='table'><table  border =\"2\" ></div>";

	echo "<tr>";
        echo "<th> Game </th> ";    
        echo "<th> quantity </th> ";
        echo "<th> price($) </th> ";
        echo "<th> subtotal($) </th> ";

    echo "</tr>" ;
    echo "<tr>";
        echo "<td> DMC </td> ";    
        echo "<td> $DMC </td> ";
        echo "<td> <div class='money'>60</div> </td>h ";
        echo "<th> <div class='money'>$totalDMC</div> </th> ";

    echo "</tr>" ;
    echo "<tr>";
        echo "<td> Anthem </td> ";    
        echo "<td> $Anthem </td> ";
        echo "<td> <div class='money'>45</div> </td>h ";
        echo "<th> <div class='money'>$totalAnthem</div> </th> ";

    echo "</tr>" ;
    echo "<tr>";
        echo "<td> SSDT </td> ";    
        echo "<td> $SSDT </td> ";
        echo "<td> <div class='money'>100</div> </td>h ";
        echo "<th> <div class='money'>$totalSSDT</div> </th> ";

    echo "</tr>" ;
    echo "<tr>";
    echo "<td> Shipping </td> ";    
    echo "<td> <div class='money'>$sp</div> </td> ";
echo "</tr>" ;
    echo "<tr>";
        echo "<td> Total cost </td> ";    
        echo "<td> <div class='money'>$total</div> </td> ";
    echo "</tr>" ;
        echo "</table>";
        
             
?>


