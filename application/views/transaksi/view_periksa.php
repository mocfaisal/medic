 <?php 

 $this->load->view('parts/header');
 $this->load->view('parts/navigation');
 ?>

 <!-- START CONTAINER FLUID -->

 
 <div class="container-fluid container-fixed-lg bg-white">
 	<form id="fperiksaz">
 		<div class="row">
 			<div class="col-md-6">
 				<div class="bg-white full-height">
 					<?php 
 					$this->load->view('forms/periksa');
 					?>
 				</div>
 			</div>
 			<div class="col-md-6">
 				<div class="bg-white full-height">
 					<button id="btnaddjenis" type="button" class="btn btn-rounded btn-success btn-animated from-left fa fa-plus">
 						<span>Tambah Biaya</span>
 					</button>
 					<div class="table-responsive">
 						<table class="table">
 							<thead>
 								<tr>
 									<td>ID Jenis Biaya</td>
 									<td>Nama Biaya</td>
 									<td>Tarif</td>
 									<td>Aksi</td>
 								</tr>
 							</thead>
 							<tbody id="djenis">

 							</tbody>
 						<!-- <tfoot id="tjenis">
 							<tr>
 								<td>Total Biaya</td>
 								<td colspan="2" class="total"></td>
 							</tr>
 						</tfoot> -->
 					</table>
 				</div>

 				<div class="row" style="padding-top: 50px;">
 					<div class="col-md-12 m-t-10 sm-m-t-10">
 						<div class="pull-right">
 							<button type="button" id="resetbtn" class="btn btn-danger btn-cons btn-animated from-left fa fa-refresh" title="Reset semua field"><span>Reset</span></button>
 							<button type="button" id="savebtn" class="btn btn-complete btn-cons btn-animated from-left fa fa-save"><span>Simpan</span></button>
 						</div>
 					</div>
 				</div>

 			</div>

 		</div>
 	</div>
 	<div class="row">
 		<div class="col-md-6"></div>
 		<div class="col-md-6"></div>
 	</div>
 </form>
</div>


<!-- END CONTAINER FLUID -->

<?php 
$this->load->view('data/d_jenis');
$this->load->view('data/d_daftar2');
$this->load->view('parts/footer');

?>
<script type="text/javascript">
	var x = 0;
	$('#djenis').on('click','.hapus',function(e){
		e.preventDefault();
		$(this).closest('td').parent('tr').remove();
		x--;

	});

 	// $('#djenis').change(function(){
 	// 	var kode = $(this).closest('tr').find('.datap').text();
 	// 	if(kode.length==0){
 	// 		alert(kode);
 	// 	}
 	// 	else{
 	// 		var sum = 0;
 	// 		$('#djenis').find('.tarif').each(function(){
 	// 			sum += Number(this).text();
 	// 			alert(sum);
 	// 		});
 	// 		$('#total').val(sum);
 	// 	}
 	// });

 	$('#btnaddjenis').click(function(){
 		$('#mdjenis').modal('show');
 		$('#data-jenis').on('click','.pilih',function(e){
 			e.preventDefault();
 			var kode = $(this).closest('tr').find('td:eq(1)').text();
 			if($('#'+kode).length==0){
 				var kode = $(this).closest('tr').find('td:eq(1)').text();
 				var nama = $(this).closest('tr').find('td:eq(2)').text();
 				var tarif = $(this).closest('tr').find('td:eq(3)').text();
 				var data = '<tr id="'+kode+'" class="datap">'+
 				'<td>'+kode+'</td>'+
 				'<td hidden><input type="text" name="kode[]" value="'+kode+'"></td>'+
 				'<td>'+nama+'</td>'+
 				'<td hidden><input type="text" name="nama[]" value="'+nama+'"></td>'+
 				'<td class="tarif">'+tarif+'</td>'+
 				'<td hidden><input type="text" name="tarif[]" value="'+tarif+'"></td>'+
 				'<td>'+
 				'<button class="btn btn-success btn-roundeded btn-animated fa fa-close from-left hapus" type="button"><span>Hapus</span></button>'+
 				'</td>'+
 				'</tr>';

 				$('#djenis').append(data);
 			}
 			else{
 				e.preventDefault();
 			}
 		});

 	});
 	$('#sdaftar').click(function(){

 		$('#data-daftar').on('click','.pilih',function(){

 			var nodaftar = $(this).closest('tr').find('td:eq(1)').text();
 			var nopasien = $(this).closest('tr').find('td:eq(4)').text();
 			var namapasien = $(this).closest('tr').find('td:eq(5)').text();

 			$('#nodaftar').val(nodaftar);
 			$('#nopasien').val(nopasien);
 			$('#namapasien').val(namapasien);
 		});

 		$('#mddaftar').modal('show');	
 	});
 	function reset(id){
 		$('#'+id).val('');
 	}
 	$('#resetbtn').click(function(){
 		reset('nodaftar');
 		reset('nopasien');
 		reset('namapasien');
 		reset('KeluhanPas');
 		reset('Diagnosa');
 		reset('Perawatan');
 		reset('Tindakan');
 		reset('BeratBadan');
 		reset('TensiD');
 		reset('TensiS');

 	});

 	$('#savebtn').click(function(e){
 		e.preventDefault();
 		var btn = $(this);
 		btn.button('loading');
 		if($('#nodaftar').val()=='' || $('#nopasien').val()=='' || $('#namapasien').val()==''){
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
 			btn.button('loading');
 			var url = "<?php echo site_url('transaksi/insertp'); ?>";
 			var data = $('#fperiksaz').serializeArray();
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
 					e.preventDefault();
 					$('#djenis').html('');
					// btn.unbind();
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
				$('#resetbtn').trigger('click');
			});
 			btn.button('reset');
 		}

 	});

 </script>