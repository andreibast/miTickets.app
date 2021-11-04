<div class="accordion" id="accordionAddNewTicket">
  <div class="card">
    <div class="card-header bg-dark" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-center text-light" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
		<i class="fas fa-plus-circle"></i> Adauga Un Tichet Nou
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionAddNewTicket">
      <div class="card-body">
		<form method="post" action="<?php echo site_url('CrudController/create'); ?>" enctype="multipart/form-data"> 
			<div class="row">

			<div class="col-md-3">
				<div class="form-group">
					<label >Denumire</label>
					<input type="text" class="form-control" name="denumire" required>
				</div>
				<div class="form-group">
					<label>Alege parinte</label>
					<select class="form-control" name="parinte">
						<option>(parinte)</option>
						<?php foreach($result as $row) {?>
						<option><?= $row->denumire ?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			
			<div class="col-md-5">
			<div class="form-group">
					<label >Descriere</label>
					<textarea class="form-control" name="descriere" rows="5"></textarea>
				</div>
			</div>

			<div class="col-md-3">
				<div class="form-group">
					<label >Data</label>
					<input type="date" class="form-control" name="data" required>
				</div>
				<div class="form-group">
					<label for="exampleFormControlFile1">Adauga o poza</label>
					<input type="file" class="form-control-file" name="poza" id="poza" required>
				</div>
			</div>

			<button type="submit" class="btn btn-primary col-md" value="save"><i class="fas fa-plus-circle" style="font-size: 42px;"></i> </button>
			</div>
		</form>
      </div>
    </div>
  </div>
</div>
