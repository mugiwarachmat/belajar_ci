<?php

if($this->input->post('mysubmit')){
    $nama_lengkap = set_value('nama_lengkap');
    $jenis_kelamin = set_value('jenis_kelamin');
    $no_tlp = set_value('$no_tlp ');
    $email = set_value('$email');
    $alamat = set_value('alamat');


}else{
    //diambil dari databse dengan table karyawan
    $nama_lengkap = $karyawan->nama_lengkap;
    $jenis_kelamin =$karyawan->jenis_kelamin;
    $no_tlp = $karyawan->no_tlp;
    $email = $karyawan->email;
    $alamat = $karyawan->alamat;

}

?>

<html>
<head>
    <title>Form Update Karyawan</title>
</head>


<body>


<h1>Update Karyawan</h1>

<?php echo validation_errors()?>

<?php echo form_open('karyawan/edit_karyawan/'.$karyawan->id)?>

<table>

    <tr>
        <td>Nama Lengkap </td>
        <td>: </td>
        <td><?php echo form_input ('nama_lengkap',$nama_lengkap) ?></td>
    </tr>

    <tr>
        <td>Jenis Kelamin </td>
        <td>: </td>
        <td><?php echo form_input ('jenis_kelamin',$jenis_kelamin) ?></td>
    </tr>

    <tr>
        <td>No Telpon/Handphone </td>
        <td>: </td>
        <td><?php echo form_input ('no_tlp',$no_tlp) ?></td>
    </tr>

    <tr>
        <td>Email </td>
        <td>: </td>
        <td><?php echo form_input ('email',$email) ?></td>
    </tr>

    <tr>
        <td>Alamat </td>
        <td>: </td>
        <td><?php echo form_textarea ('alamat',$alamat) ?></td>
    </tr>
    <tr>
        <td colspan="3"><?php echo form_submit ('mysubmit','Simpan') ?></td>
    </tr>


</table>
<?php echo form_close() ?>
</body>

</html>