<html>
<head>
    <title>Form tambah Karyawan</title>
</head>


<body>
<h1>Input Karyawan</h1>

<?php echo validation_errors()?>

<?php echo form_open('karyawan/tambah_karyawan')?>

<table>

    <tr>
        <td>Nama Lengkap </td>
        <td>: </td>
        <td><?php echo form_input ('nama_lengkap',set_value('nama_lengkap')) ?></td>
    </tr>

    <tr>
        <td>Jenis Kelamin </td>
        <td>: </td>
        <td><?php echo form_input ('jenis_kelamin',set_value('jenis_kelamin')) ?></td>
    </tr>

    <tr>
        <td>No Telpon/Handphone </td>
        <td>: </td>
        <td><?php echo form_input ('no_tlp',set_value('no_tlp')) ?></td>
    </tr>

    <tr>
        <td>Email </td>
        <td>: </td>
        <td><?php echo form_input ('email',set_value('email')) ?></td>
    </tr>

    <tr>
        <td>Alamat </td>
        <td>: </td>
        <td><?php echo form_textarea ('alamat',set_value('alamat')) ?></td>
    </tr>
    <tr>
        <td colspan="3"><?php echo form_submit ('mysubmit','Simpan') ?></td>
    </tr>


</table>
<?php echo form_close() ?>
</body>

</html>