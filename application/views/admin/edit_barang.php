<div class="container-fluid">
	<h3 class="fas fa-edit">EDIT DATA BARANG</h3>
	<?php 
	$no=1;
	foreach ($barang as $brg) : ?>
	<form method="post" action="<?php echo base_url().'admin/data_barang/update' ?>" >
		<div class="for-group">
			<label>Nama Barang</label>
			<input type="hidden" name="id_brg" class="form-control" value="<?php echo $brg->id_brg ?>"> 
			<input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->nama_brg ?>"> 
		</div>
		<div class="for-group">
			<label>keterangan</label>
			<input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan ?>"> 
		</div>
		<div class="for-group">
			<label>kategori</label>
			<input type="text" name="kategori" class="form-control" value="<?php echo $brg->kategori ?>"> 
		</div>
		<div class="for-group">
			<label>harga</label>
			<input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>"> 
		</div>
		<div class="for-group">
			<label>stok</label>
			<input type="text" name="stok" class="form-control" value="<?php echo $brg->stok ?>"> 
		</div>
		<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
	</form>
	<?php endforeach; ?>
</div>