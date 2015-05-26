<!DOCTYPE html>
<html>

<head>

		
	<title>Bootstrap - Table</title>
		<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
		
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>



		<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">

<!------
<style >
.row div{
border:#000 1px solid;
}	
</style>
-->
</head>

<body>
<!----------------NAVBAR------------------------>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!----------------NAVBAR END------------------------>
<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
<!---------------------------------------------------->			
<table id="myTable" class="table table-striped table-bordered table-hover">


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

	<tbody>
	
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
<!---------------------------------------------------->			

		</div>
		<div class="col-md-2"></div>
</div>



<!------------LOAD JS TABLE------------------------------>
		<script>
			$(document).ready(function(){
				$('#myTable').DataTable();
			});
		</script>
<!------------------------------------------>		

</body>

</html>
