<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-success">
				<?php 
				$grand_total = 0;
				if ($keranjang = $this->cart->contents())
					{
					foreach ($keranjang as $item) 
					{
						$grand_total =$grand_total + $item['subtotal'];
					}
				echo "Total Belanja Anda : Rp. ".number_format($grand_total,0,',','.');
				
				 ?>
			</div><br><br>
			<h3>Input Alamat Pengiriman dan Pembayaran</h3>
			<form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" name="nama" placeholder="Nama Lengkap" class="form-control">
				</div>
				<div class="form-group">
					<label>Alamat Lengkap</label>
					<input type="text" name="alamat" placeholder="Alamat Lengkap" class="form-control">
				</div>
				<div class="form-group">
					<label>No.Telepon</label>
					<input type="text" name="no_telp" placeholder="No.Telepon" class="form-control">
				</div>
				<div class="form-group" >
					<label>Metode Pengiriman</label>
					<select class="form-control">
						<option>JNE</option>
						<option>TIKI</option>
						<option>POS Indonesia</option>
						<option>GOJEK</option>
						<option>GRAB</option>
					</select>
				</div>
				<div class="form-group">
					<label>Pilih BANK</label>
					<select class="form-control">
						<option>BCA - XXXXXX</option>
						<option>BNI - XXXXXX</option>
						<option>BRI - XXXXXX</option>
						<option>MANDIRI - XXXXXX</option>
					</select>
				</div>
				<button type="submit" class="btn btn-sm btn-primary">Pesan</button>

			</form>
			<?php }else{
				echo "<h4>keranjang belanja anda masih kosong" ;
				} ?>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>