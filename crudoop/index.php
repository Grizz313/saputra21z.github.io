<?php include "autoloader.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    

    <title>Document</title>
</head>
<body>

    
    <div class="container">
        <center>
            <table width="500" border="1">
            <thead>
                <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Gender</th>
                <th>Role</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $user = new User();
                $data = $user->getUsers();

                $no = 1;
                foreach ($data as $item) {
            ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $item->name ?></td>
                    <td><?= $item->email ?></td>
                    <td><?= $item->phone_number ?></td>
                    <td><?= $item->gender ?></td>
                    <td><?= $item->role ?></td>
                    <td>
                        <a href="edit.php?id=<?= $item->id ?>">
                        <button>Edit</button>
                        </a>
                        <a href="action.php?type=delete&id=<?= $item->id ?>">
                        <button>Delete</button>
                        </a>
                    
                    </td>
                </tr>
                <?php $no++; } ?>
            </tbody>
            </table>
       </center>
    </div>
</body>
</html>