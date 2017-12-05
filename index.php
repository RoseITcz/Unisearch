<html>
<head>
  <title>Unisearch universities</title>
</head><body>
  <?php
    $conn=mysql_connect("localhost","root","") or die(mysql_error());
    mysql_select_db("Unisearch") or die(mysql_error());

    $query="select * from universities order by UniID";
  	$result=mysql_query($query) or die(mysql_error());

    echo "<table border=\"1\"><br>\n";
  	echo "<tr><th>UniID</th><th>University</th><th>City</th></tr>\n";

    while($row=mysql_fetch_assoc($result)){
  		echo "<tr>";
  		  echo "<td>".$row["UniID"]."</td>";
  		  echo "<td>".$row["university"]."</td>";
        echo "<td>".$row["city"]."</td>";
  		echo "</tr>\n";
    }
    echo "</table><br>\n";
  ?>
</body>
</html>
