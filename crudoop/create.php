<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CREATE</title>
</head>
<body>
    <div class="container">
        <form action="action.php?type=create" method="post">
        <div>
            <label>Name</label>
            <input type="text" name="name" palaceholder="Name">
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" palaceholder="Email">
        </div>

        <div>
            <label>Nomor Telpon</label>
            <input type="text" name="phone_number" palaceholder="Nomor Telpon">
        </div>
        <div>
            <label>Jenis Kelamin</label>
            <select name="gender" >
            <option value="">---- Pilih Gender ----</option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
            </select>
        </div>
        <div>
            <label>Role</label>
            <select name="role" >
            <option value="">---- Pilih Role ----</option>
            <option value="admin">Admin</option>
            <option value="guest">Guest</option>
            </select>
        </div>
        <button type="submit">SIMPAN DATA</button>
        </form>
    </div>
</body>
</html>