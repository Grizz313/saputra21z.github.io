<?php
    
    include "autoloader.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CREATE</title>
</head>
<body>
<?php 
   $id = $_GET['id'];
   $user = new User();
   $data = $user->getEdit($id);

    
   


?>
    <div class="container">
        <form action="action.php?type=edit&id=<?= $id ?>" method="post">
        <div>
            <label>Name</label>
            <input type="text" name="name" value="<?=  $data->name ?>"  palaceholder="Name">
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" value="<?= $data->email ?>" palaceholder="Email">
        </div>

        <div>
            <label>Nomor Telpon</label>
            <input type="text" name="phone_number" value="<?= $data->phone_number ?>"  palaceholder="Nomor Telpon">
        </div>
        <div>
            <label>Jenis Kelamin</label>
            <select name="gender" >
            <option value="">---- Pilih Gender ----</option>
            <option value="L" <?= ($data->gender == 'L') ? 'selected' : '' ?>>Laki - Laki</option>
            <option value="P" <?= ($data->gender == 'P') ? 'selected' : '' ?>>Perempuan</option>
            </select>
        </div>
        <div>
            <label>Role</label>
            <select name="role" >
            <option value="">---- Pilih Role ----</option>
            <option value="admin" <?= ($data->role == 'admin') ? 'selected' : '' ?>>Admin</option>
            <option value="guest" <?= ($data->role == 'guest') ? 'selected' : '' ?>>Guest</option>
            </select>
        </div>
        <button type="submit">SIMPAN DATA</button>
        </form>
    </div>
</body>
</html>
