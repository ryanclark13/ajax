<style>
table
{
  border-collapse: collapse;
    width: 50%;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
    background-color: #4CAF50;
    color: white;
}
th, td {
    text-align: left;
    padding: 8px;
}
tr{

}
td
{
  padding: 10px 20px 10px 20px;
}
    select
    {
        padding: 10px 20px 10px 20px;
        margin: 10px;
        font-size: 18px;
        display: inline-block;

    }
    option
    {
        padding: 10px 20px 10px 20px;
    }
    #title
    {
        font-size: 18px;
        display: inline-block;
    }
</style>
<script src="jquery.js"></script>
<script>
    $(document).ready(function()
                     {
        $("#fetchval").on('change',function()
                         {
            var value = $(this).val();
            $.ajax(
            {
                url:'fetch.php',
                type:'POST',
                data:'request='+value,

                beforeSend:function()
                {
                    $("#table-container").html('Working on...');

                },
                success:function(data)
                {
                    $("#table-container").html(data);
                },
            });
        });
    });

</script>
<h1>Top Aggressive Animals In The World</h1>
<div id="title">Fetch Results By:</div><select id="fetchval" name="fetchby" >
    <option value="Mammal">Mammal</option>
    <option value="Reptile">Reptile</option>
    <option value="Bird">Bird</option>
    <option value="Insect">Insect</option>
    <option value="Fish">Fish</option>

</select>
<br>
<br>
<div id="table-container">
<?php
  $conn = mysqli_connect("sulley.cah.ucf.edu", "ry638416", "Iloveucf17!!", "ry638416");
  $query="select * from most_aggressive_animals2";
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

</div>
