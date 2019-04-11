<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Add Item</h3>
				<hr>
			</div>
			<!-- /.box-header -->
			<div class="box-body">

				<form class="form-horizontal form-label-left" action="<?= base_url('') ?>admin/item/additem" enctype="multipart/form-data" method="post">

					<!-- <div class="form-group">
						<label class="col-md-7 col-sm-6 col-xs-12">
							<?php if(validation_errors()): ?>
							<div class="alert alert-danger" role="alert">
								<?= validation_errors(); ?>
							</div>
							<?php endif; ?>
						</label>

					</div> -->

					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Nama Item
						</label>
						<div class="col-md-7 col-sm-6 col-xs-12">
							<input type="text" class="form-control col-md-7 col-xs-12" name="nama_produk" value="">
							<small class="form-text text-danger"><?= form_error('nama_produk'); ?></small>
						</div>
					</div>


					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Harga Item
						</label>
						<div class="col-md-4 col-sm-6">
							<input class="form-control col-md-7 col-xs-12" type="number" name="harga" value="">
							<small class="form-text text-danger"><?= form_error('harga'); ?></small>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Stok Item
						</label>
						<div class="col-md-4 col-sm-6">
							<input class="form-control col-md-7 col-xs-12" type="number" name="stok" value="">
							<small class="form-text text-danger"><?= form_error('stok'); ?></small>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Berat Item</label>
						<div class="col-md-4 col-sm-6">
							<input class="form-control col-md-7" type="number" name="berat" value="">
							<small class="form-text text-danger"><?= form_error('berat'); ?></small>
							<p class="help-text">* Berat dalam satuan Gram</p>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Kategori</label>
						<div class="col-md-4 col-sm-6">
							<select name="id_kategori" class="form-control">
								<option value="">--Pilih Kategori--</option>
								<?php foreach ($category as $kategori): ?>
								<option value="<?= $kategori['id_kategori'] ?>"><?= $kategori['nama_kategori'] ?>
								</option>
								<?php endforeach; ?>
							</select>
							<small class="form-text text-danger"><?= form_error('id_kategori'); ?></small>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Status</label>
						<div class="col-md-4 col-sm-6">
							<select name="status" class="form-control">
								<option value="">--Pilih Status--</option>
								<option value="Active">Active</option>
								<option value="Non Active">Non Active</option>
							</select>
							<small class="form-text text-danger"><?= form_error('status'); ?></small>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Gambar
						</label>
						<div class="col-md-5 col-sm-12 col-xs-12">
							<input type="file" class="form-control col-md-7 col-xs-12" name="foto">
							<small class="form-text text-danger"><?= form_error('foto'); ?></small>
							<p class="help-text">* Ukuran Gambar Maximal 2 Mb.</p>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Deskripsi</label>
						<div class="col-md-9 col-sm-6">
							<textarea class="form-control" rows="4" name="deskripsi"></textarea>
							<small class="form-text text-danger"><?= form_error('deskripsi'); ?></small>
						</div>
					</div>

					<hr>

					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							<button type="submit" class="btn btn-success" name="submit" value="Submit">Submit</button>
							<a href="<?= base_url('') ?>/admin/item" class="btn btn-primary">Kembali</a>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>