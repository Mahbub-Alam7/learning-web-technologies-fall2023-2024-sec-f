<?php 
    
    $term = $_POST['term'];
    $con=mysqli_connect('localhost', 'root', '', 'labexam');
    $sql = "select * from users where username like '%{$term}%'";
    $result = mysqli_query($con, $sql);

    $content = "<table border=1>
                <tr>
                    <td>EmpNo</td>
                    <td>Name</td>
                    <td>Contact</td>
                </tr>";
    $rows = "";
    while($row = mysqli_fetch_assoc($result)){
            $rows .="<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['username']}</td>
                        <td>{$row['email']}</td>
                    </tr>";
    }

    echo $content . $rows . "</table>";
	?>