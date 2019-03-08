<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lab03</title>
</head>
<style>
  .button{
    border-style: solid;
    border-radius: 25% 10%;;
    background-color: khaki;
    border: none;
    color: black;
    padding: 15px 32px;
    text-align: left;
    text-decoration: none;
    display: inline-block;
    font-size: 150%;
    margin: 4px 2px;
    cursor: pointer;
}

    body {background-color: rgb(216, 103, 27);}
    p    {color: rgb(13, 76, 214);}
</style>
<body>
    <div style="width:100%;overflow:hidden;height:60px">
        <button class = "button" onclick="window.location.href = 'https://people.eecs.ku.edu/~h539j862/lab04/mainpage.php';">MainPage</button>
        <button class = "button" onclick="window.location.href = 'https://people.eecs.ku.edu/~h539j862/lab04/table.php';">Exercise1</button>
        <button class = "button" onclick="window.location.href = 'https://people.eecs.ku.edu/~h539j862/lab04/quiz.html';">Exercise2</button>
        <button class = "button" onclick="window.location.href = 'https://people.eecs.ku.edu/~h539j862/lab04/front.html';">Exercise3</button>
               
      </div>
  <center>
    <br><br>
    <p><font size = "7">Hanwen Jia's EECS448 lab04</font></p>
    
    <?php
echo "<table border =\"1\" >";
	for ($i=0; $i < 100; $i++) { 
		echo "<tr>";
		for ($j=0; $j < 100; $j++) { 
            
           if($i==0 && $j==0)
           {
            echo "<td> 0 </td> ";
           }
           else if($i==0 && $j!=0)
           {
            echo "<td> $j </td> ";
           }
           else if($i!=0 && $j==0)
           {
            echo "<td> $i </td> ";
           }
           else if($i!=0 && $j!=0)
           {
            $p = $i * $j;
               echo "<td>$p</td>";
        }
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>

</body>
</html>


