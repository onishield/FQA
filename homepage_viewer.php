<!DOCTYPE html>
<html>
<head>
	<title>FQA CAT</title>
</head>
<body>
<?php
$sql = "Select question,answer From info"
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
 ?>
 <?php
              if(mysqli_num_rows($result) == 0){
  ?>
   <tr>
      <td class="active" style="text-align: center;" colspan="6">
              <strong>Don't have Data </strong>
      </td>
   </tr>
  <?php
    }
    ?>
    <?php
    $i = 0;
    ($row = mysqli_fetch_array($result)){
    ?>
      <tr>
      <td><?php echo ++$i; ?></td>
      <td><?php echo $row['question']; ?></td>
    <td><?php echo $row['answer']; ?></td>


      </tr>
    <?php
          }
    ?>
</body>
</html>
