<?php

    $con = mysqli_connect('127.0.0.1', 'root', '', 'loginform');
    $sql = "select * from users";
    $result = mysqli_query($con, $sql);

<table border=1>
    <tr>
        <td>ID</td>
        <td>Username</td>
    </tr>
    <?php while($data = mysqli_fetch_assoc($result)){ ?>
    <tr>
        <td><?=$data['id']?></td>
        <td><?=$data['username']?></td>
    </tr>
  <?php  } ?>
</table>