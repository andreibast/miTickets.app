<!doctype html>
<html lang="en">
  <head>
  <?php $this->load->view('components/header') ?>	
  	<link rel="icon" href="<?=base_url()?>favicon-32x32.png" type="image/gif">
    <title>miTickets</title>
  </head>
  <body>

  <?php $this->load->view('components/navbar') ?>	

	<div class="container">
		<div class="row justify-content-md-center">
		<div class="col-md-6">
			<br>
				<h1>Editeaza tichetul selectat</h1>
			<br>
				<form method="post" action="<?php echo site_url('CrudController/update'); ?>/<?= $row->id ?>"> 
					<div class="form-group">
						<small class="form-text text-muted">Parintele curent: <b><?php echo $row->parinte ?></b></small>
					</div>
					<div class="form-group">
						<label>Denumire</label>
						<input type="text" class="form-control" name="denumire" value="<?= $row->denumire ?>">
					</div>
					<div class="form-group">
						<label>Descriere</label>
						<textarea class="form-control" name="descriere" rows="4"><?= $row->descriere ?></textarea>

					</div>
					<div class="form-group">
						<label>Data</label>
						<input type="date" class="form-control" name="data" value="<?= $row->data ?>">
					</div>
					<div class="form-group">
						<label>Poza</label>
						<input type="text" class="form-control" name="poza" value="<?= $row->poza ?>">
					</div>
					<button type="submit" class="btn btn-warning" value="save">Update</button>
				</form>
				<a href="../../../" class=""><button class="btn btn-danger">Cancel</button></a>
			</div>
		</div>
	</div>

  </body>
</html>
