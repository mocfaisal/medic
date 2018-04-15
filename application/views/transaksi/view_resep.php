<?php 

$this->load->view('parts/header');
$this->load->view('parts/navigation');
?>
<div class="content full-height">
	<div class="container-fluid full-height no-padding">
		<form id="fresepz">
			<div class="row full-height no-margin">

				<!-- <button id="add" class="btn btn-success btn-roundeded" type="button" data-toggle="modal" data-target="#mresep">Tambah Data <span class="fa fa-plus"></span></button> -->

				<div class="col-md-6 no-padding b-r b-grey full-height">
					<div class="bg-white full-height">
						<?php 

			// $this->load->view('data/resep');
						$this->load->view('forms/resep');

						?>
					</div>
				</div>			
			</div>
			<div class="col-md-6 no-padding full-height">
				<div class="bg-white full-height">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>Kode Obat</th>
									<th>Nama Obat</th>
									<th>Dosis</th>
									<th>Jumlah</th>
									<!-- <th hidden>Harga</th> -->
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody id="dresep">
					<!-- <tr>
						<td></td>
					</tr> -->
				</tbody>
			</table>

		</div>
	</div>
	<div class="col-md-12 m-t-10 sm-m-t-10">
		<div class="pull-right">
			<button id="savebtn" class="btn btn-success btn-roundeded btn-animated fa fa-save from-left pull-right" type="button"><span>Simpan</span></button>
		</div>
	</div>
</div>
</form>
</div>
</div>
<?php 
$this->load->view('parts/footer');
$this->load->view('data/d_periksa2');
$this->load->view('data/d_obat');
?>
<!-- Benar -->
<script type="text/javascript">
	var x = 0;

	$('#speriksa').click(function(){
		$('#mdperiksa').modal('show');
		$('#data-periksa').on('click','.pilih',function(){
			var noperiksa = $(this).closest('tr').find('td:eq(1)').text();
			var noresep = $(this).closest('tr').find('td:eq(4)').text();
			$('#NoPemeriksaan').val(noperiksa);
			$('#NoResep').val(noresep);
		});
	});

	$('#sobat').click(function(){
		$('#mdobat').modal('show');
		$('#data-obat').on('click','.pilih',function(){
			var kode = $(this).closest('tr').find('td:eq(1)').text();
			var nama = $(this).closest('tr').find('td:eq(2)').text();
			var harga = $(this).closest('tr').find('td:eq(5)').text();
			$('#KodeObat').val(kode);
			$('#NamaObat').val(nama);
			$('#HargaObat').val(harga);
		});
	});

	$('#addbtn').click(function(e){
		var kode = $('#KodeObat').val();
		var nama = $('#NamaObat').val();
		var dosis = $('#Dosis').val();
		var jumlah = $('#Jumlah').val();

		// var kodez = $('#dresep').closest('tr').find('td:eq(1)').text();
		if($('#'+kode).length==0){
			if(dosis.length!=0 || jumlah.length!=0){
			// var kode = $('#KodeObat').val();
			// var nama = $('#NamaObat').val();
			// var dosis = $('#Dosis').val();
			// var jumlah = $('#Jumlah').val();

			var data='<tr id="'+kode+'">'+
			'<td>'+kode+'</td>'+
			'<td hidden><input type="text" name="kode[]" value="'+kode+'"></td>'+
			'<td>'+nama+'</td>'+
			'<td>'+dosis+'</td>'+
			'<td hidden><input type="text" name="dosis[]" value="'+dosis+'"></td>'+
			'<td><input class="form-control jml" type="number" name="jml[]" min="1" value="'+jumlah+'"></td>'+
			'<td>'+
			'<button class="btn btn-success btn-roundeded btn-animated fa fa-close from-left pull-right hapus" type="button"><span>Hapus</span></button>'+
			'</td>'+
			'</tr>';
			$('#dresep').append(data);
		}
	}
	else
	{
		$('#'+kode).closest('tr').find('.jml').val(parseFloat($('#'+kode).closest('tr').find('.jml').val())+1); 
	}

});

	$('#dresep').on('click','.hapus',function(e){
		e.preventDefault();
		$(this).closest('td').parent('tr').remove();
		x--;

	});

	$('#savebtn').click(function(e){
		var btn = $(this);
		btn.button('loading');
		if($('#dresep').length==0){
			new PNotify({
				title: 'Something wrong',
				text: 'Data belum lengkap',
				type: 'warning',
				hide: true,
				delay: 800,
				styling: 'fontawesome'
			});
			btn.button('reset');
		}
		else{
			var kode = $('#NoResep').val();
			var url = "<?php echo site_url('transaksi/updater/'); ?>"+kode;
			var data = $('#fresepz').serializeArray();
			$.post(url,data,function(i){
				if(i=="Berhasil"){
					new PNotify({
						title: 'Success',
						text: 'Data berhasil disimpan! :D',
						type: 'success',
						hide: true,
						delay: 800,
						styling: 'fontawesome'
					});
 				// $('#mdokter').modal('hide');
 				btn.button('reset');
 			}
 			else{
 				new PNotify({
 					title: 'Failed',
 					text: 'Data gagal disimpan! :(',
 					type: 'warning',
 					hide: true,
 					delay: 800,
 					styling: 'fontawesome'
 				});
 			}
 			// $('#btnbatal').trigger('click');
 			e.preventDefault();
 			// btn.unbind();
 		});
		}
	});

</script>

<!-- Gagal -->