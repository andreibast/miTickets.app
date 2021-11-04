<!doctype html>
<html lang="en">
  <head>
	<?php $this->load->view('components/header') ?>	
	<link rel="icon" href="<?=base_url()?>favicon-32x32.png" type="image/gif">
	<title>miTickets</title>
  </head>
  <body>
  	<?php $this->load->view('components/navbar') ?>	

	<div class="container mb-2">
		<div class="mt-2">
			<?php $this->load->view('components/addNewTicket') ?>	
		</div>
		
		<table class="table mt-2">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Parinte</th>
					<th scope="col">Denumire</th>
					<th scope="col">Descriere</th>
					<th scope="col">Data</th>
					<th scope="col">Poza</th>
					<th scope="col">Actiuni</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($result as $row) {?>
				<tr>
					<td><span class="badge badge-pill badge-success"><?= $row->parinte; ?></span></td>
					<td><?= $row->denumire; ?></td>
					<td><?= $row->descriere; ?></td>
					<td><?= date('d-m-Y', strtotime($row->data)) ?></td>
					<td><img src="<?php echo './uploads/'.$row->poza; ?>" class="img-fluid" style="width:100px;"></td>
					<td><a href="<?= site_url('CrudController/edit') ?>/<?= $row->id ?>"><button class="btn btn-warning"><i class="far fa-edit"></i> </button></a> 
					<a href="<?= site_url('CrudController/delete') ?>/<?= $row->id ?>" placeholder="delete"><button class="btn btn-danger"><i class="far fa-trash-alt"></i> </button></a> </td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

	<?php $this->load->view('components/footer') ?>

  </body>
</html>
