<?php
$query=$conn->prepare("SELECT*FROM users");
$query->execute();

?>
<h1>Page 2</h1>
<table>
    <tr>
        <td>ID</td>
        <td>Email</td>
        <td>First name</td>
        <td>Date registered</td>
    </tr>

    <?php
    foreach ($query->fetchALL() as $user) {
        ?>
        <tr>
            <td><?php echo $user['ID'];?></td>
            <td><?php echo $user['Email'];?></td>
            <td><?php echo $user['name'];?></td>
            <td><?php echo $user['last_name'];?></td>
            <td><?php echo $user['created_at'];?></td>
        </tr>
        <?php

    }
    //$query->fetchALL() - tas ir masīvs//as $user - elements
    ?>

</table>
