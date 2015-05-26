<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>


</head>
<body>


	<h1>Tambah User</h1>
<?php echo validation_errors() ?>
<?php echo form_open('halaman/tambah_user')  ?>
<table>
 <tr>

     <td>Username</td>
     <td>:</td>
     <td><?php echo form_input('username',set_value('username')) ?></td>

 </tr>

    <tr>

        <td>Password</td>
        <td>:</td>
        <td><?php echo form_password('password','') ?></td>

    </tr>

    <tr>

        <td>Confirm Password</td>
        <td>:</td>
        <td><?php echo form_password('pass2','') ?></td>

    </tr>
    <tr>

        <td colspan="3"> <?php echo form_submit('mysubmit','Simpan') ?></td>

    </tr>

</table>
<?php echo form_close() ?>
</body>
</html>