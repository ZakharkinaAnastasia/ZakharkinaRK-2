<?php
include "dbconnection.php";

$sql = mysqli_query($conn, 'SELECT * FROM bookYouNeed');
    while ($result = mysqli_fetch_array($sql)) {
        echo '<tr>'.'<td>' .$result['name'].'</td>'.'<td>'. $result['price'].'</td>'.'<td class = "desc">'. $result['description'].'</td>'.'<td>'.'<a href="book.php?id='.$result['id'].'">'.'<img src="'.$result['picture'].'"height = "100px" class = "pic">'.'</a>'.'</td>'.'</tr>';
     }

  
?>