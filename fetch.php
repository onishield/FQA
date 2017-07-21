<?php
//fetch.php
$connect = mysqli_connect('localhost', 'root','', 'fqa');
mysqli_set_charset($connect,"utf8");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM info2
  WHERE question LIKE '%".$search."%'
  OR answer LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM info2
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
<<<<<<< HEAD
 $output = '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Question</th>
     <th>Answer</th>

    </tr>
 ';
 while($row = mysqli_fetch_array($result))
=======
    $i = 0;
 while($row = $result->fetch_array())
>>>>>>> c5e97b00ce60ac03ce657ef20a307dc3c1cccff0
 {
  $output = '
   <tr>
   <td><?php echo ++$i; ?></td>
    <td>'.$row["question"].'</td>
    <td>'.$row["answer"].'</td>

   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>
