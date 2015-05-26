
<?php echo $this->session->flashdata('pesan') ?>
<table border="1">

    <thead>
    <tr>
        <th>No</th>
        <th>Username</th>
        <th><?php echo anchor('active_record/tambah_user','Tambah') ?></th>
    </tr>
    </thead>

    <tbody>
    <?php $i=0;foreach($users as $row){ $i++; ?>
    <tr>
        <td> <?php echo $i ?> </td>
        <td> <?php echo $row->username ?> </td>
        <td>    <?php echo anchor('active_record/update_user/'.$row->id,'Update')?>
                <?php echo anchor('active_record/delete_user/'.$row->id,'Hapus',array('onclick'=>'return confirm(\'Apakah anda yakin data akan dihapus?\')'))?>

        </td>

    </tr>

    </tbody>
    <?php }?>
</table>