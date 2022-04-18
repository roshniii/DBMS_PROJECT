<!DOCTYPE html>
<html>
<head>
 <title>Display Gallery</title>
 <style>
   body {
    font-family: Arial, Helvetica, sans-serif;
    background-image: url("images/b4.jpeg");
    background-size:cover 
}
  b{
    font-size: 30px;
    font-family: 'Arial';
    padding: 2px;
    text-align: center;
}
  table 
  {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
   font-family:"Verdana";
   font-weight: bold;
   text-align: center;
   border-radius: 14px;
  } 
  th 
  {
   background-color: mediumpurple;
   color: white;
   border-radius: 14px;
  }
  h1{
    font-family: "Arial";
    font-size: 50px;
   
    border-radius: 17px;
     color: black;
  }
  td{
    padding: 12px;
    border-radius: 14px;
  }
  tr:nth-child(even) {background-color: white; 
    border-radius: 14px;}
    tr:nth-child(odd) {background-color: white; 
    border-radius: 14px;}
 </style>
</head>
<body>
  <h1><center><font > DISPLAY CONTENTS GALLERY TABLE </font></center></h1>
 <table>
 <tr>
  <th><br>Gallery ID<br><br></th> 
  <th><br>GName<br><br></th> 
  <th><br>Location<br><br></th>
  <br><br>
 </tr>
  <?php
$con = mysqli_connect("localhost", "roshni", "123456", "art_gallery");

  if ($con->connect_error) {
   die("Connection failed: " . $con->connect_error);
  } 

  $sql = "SELECT * from GALLERY";
  mysqli_query($con,$sql);
  if ($result = mysqli_query($con, $sql))
   {
   
   while($row = $result->fetch_assoc())
    {
    echo "<tr><td>" . $row["gid"]. "</td><td>" . $row["gname"]. "</td><td><br>". $row["location"]. "<br></br></td></tr>";
    }
    echo "</table>";
    }
else 
  { 
    echo "0 results"; 
  }
$con->close();
?>
</table>
</body>
</html>