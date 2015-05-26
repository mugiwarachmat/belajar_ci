<html>
<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>


    <title>View Data Karyawan</title>


</head>


<body>
<h1>Data Karyawan</h1>
<?php echo $this->session->flashdata('pesan') ?>
<input type="text" name="keyword" id="search-box" size="60" placeholder="ketik nama yang akan dicari">

<table border="1" >
    <thead>

    <tr>
        <td>No</td>
        <td>Nama Lengkap</td>
        <td>Jenis Kelamin</td>
        <td>NO Telpon</td>
        <td>Email</td>
        <td>Alamat</td>
        <td><?php echo anchor('karyawan/tambah_karyawan','Tambah')?></td>
    </tr>

    </thead>
    <tbody id="search-results">
   <?php $i=0;foreach($karyawan as $row) { $i++;?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row->nama_lengkap ?></td>
        <td><?php echo $row->jenis_kelamin ?></td>
        <td><?php echo $row->no_tlp ?></td>
        <td><?php echo $row->email ?></td>
        <td><?php echo $row->alamat ?></td>
        <td>
            <?php echo anchor('karyawan/edit_karyawan/'.$row->id,'Update')?>
            <?php echo anchor('karyawan/delete_karyawan/'.$row->id,'Hapus',array('onclick'=>'return confirm (\'Akan dihapus?\')'))?>
        </td>


    </tr>

   <?php } ?>
    </tbody>

</table>
<!-------PAGING------------>
<?php echo $this->pagination->create_links() ?>
<script type="text/javascript">
    $(function(){
        $('#search-box').keyup(function(){
            var $keyword = $(this).val();
            $.ajax({
                type:"POST",
                url:"<?php echo base_url()?>karyawan/do_search",
                data:{keyword:$keyword},
                dataType:'json',
                complete:function(data){$('#search-results').html(data.responseText);}
            });
        });
    });
</script>
</body>

</html>