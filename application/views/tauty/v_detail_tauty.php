<div class="menu-box"><br><br>
				<div class="heading-title text-center">
						<h2>Detail Produk UMKM Tauty Cake </h2>
					</div>
		<div class="card-body">
				<div class="row">
					<div class="col-md-5">
						<img src="<?php echo base_url('assets/images/tauty_cake/' .$detail->foto_produk)?>" style="width: 500px">
					</div>
					<div class="col-md-7">
						<table class="table table-no-bordered table-striped">
							<tr>
								<th>Nama Produk</th>
								<td><?php echo $detail->nama_produk?></td>
							</tr>
							<tr>
								<th>Deskripsi Produk</th>
								<td><?php echo $detail->deskripsi_produk?></td>
							</tr>
							<tr>
								<th>Harga Produk</th>
								<td>Rp<?php echo number_format($detail->harga_produk,0,',','.') ?></td>
							</tr>
							<tr>
								<th>Stock</th>
								<td><?php echo $detail->stok_produk?></td>
							</tr>
							<tr>
								<td>
									<a class="btn btn-danger" href="<?php echo base_url();?>tauty" >
										<i class="fa fa-arrow-left " aria-hidden="true"></i> Back to Product
									</a>
								</td>
								<td style="text-align: right">
									<div class="btn btn-success" onclick="location.href='https://api.whatsapp.com/send?phone=+6284521348454&amp;text=Hi,%2we%20use%20ToChat.Be';" align="center"><i class="fa fa-whatsapp"></i> Order </div>
								</td>
							</tr>
						</table>
					</div>	
				</div>
			</div>
		</div>