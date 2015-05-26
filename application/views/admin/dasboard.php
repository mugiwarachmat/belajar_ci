<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Dasboard Admin</title>


</head>
<body>

<div id="container" >

<h1>Selamat datang <?php echo $this->session->userdata('username') ?></h1>
<div id="body">
<?php  $this->load->view('admin/menu'); ?>
</div>

</div>



</body>
</html>