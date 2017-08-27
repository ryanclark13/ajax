<?php
  
  $conn = mysqli_connect("sulley.cah.ucf.edu", "ry638416", "Iloveucf17!!", "ry638416");
  $request=$_POST['request'];
  $query="select * from most_aggressive_animals2 where Type='$request'";
  $output=mysqli_query($conn,$query);
echo '<table border="1"';
    echo '<tr>
      <th>Name</th>
      <th>Type</th>
    </tr>';
  while($fetch = mysqli_fetch_assoc($output))
  {
    
      echo '<tr>';
      echo '<td>'.$fetch['Name'].'</td>';
      echo '<td>'.$fetch['Type'].'</td>';
      echo '</tr>';
    
  };
echo '</table>';

 ?>