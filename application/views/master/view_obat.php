<?php 

$this->load->view('parts/header');
$this->load->view('parts/navigation');
?>


<div class="container-fluid container-fixed-lg">
	
	<button id="add" class="btn btn-success btn-rounded" type="button" data-toggle="modal" data-target="#mobat">Tambah Data <span class="fa fa-plus"></span></button>

	<div class="row">
		<div class="col-sm-12">
			<?php 

			$this->load->view('data/obat');
			$this->load->view('forms/obat');

			?>
			
		</div>
	</div>
</div>


<?php 

$this->load->view('parts/footer');

?>
<div id="mobatd" tabindex="-1" role="dialog" aria-labelledby="ObatModal" class="modal fade text-left" style="display: none;" aria-hidden="true">
	<div role="document" class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 id="ObatModal" class="modal-title">Obat</h5>
				<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
			</div>
			<div class="modal-body">
				<p>Hapus Obat.</p>
				<div id="msg">

				</div>
				<div class="modal-footer">
					<button type="button" data-dismiss="modal" class="btn btn-secondary">Batal</button>
					<button type="button" id="hapusbtn" class="btn btn-primary">Hapus</button>
				</div>
			</div>
		</div>
	</div>


	<script type="text/javascript">
		var url = '';
		var data = '';
		function getdata(){
			var url2 = "<?php echo site_url('data/dataobat'); ?>";
			$.get(url2,function(i){
				$('#data-obat').html(i);
			});
		};
		
		$('#add').click(function(){
			url = '';
			$('#NmObat').val('');
			$('#merk').val('');
			$('#Satuan').val('');
			$('#Harga').val('');


			$('#savebtn').click(function(e){

				var btn = $(this);
				url = "<?php echo site_url('data/inserto'); ?>";
				btn.button('loading');

				if($('#NmObat').val()=='' || $('#merk').val()=='' || $('#Satuan').val()=='' || $('#Harga').val()==''){

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
					data = $('#fobat').serializeArray();
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
						$('#mobat').modal('hide');
						getdata();

					});
					btn.button('reset');
					
					btn.unbind();
				}
			});
		});



		$('#data-obat').on('click','.editbtn',function(){
			url = '';
			var kode = $(this).closest('tr').find('td:eq(1)').text();
			var nama = $(this).closest('tr').find('td:eq(2)').text();
			var alamat = $(this).closest('tr').find('td:eq(3)').text();
			var telp = $(this).closest('tr').find('td:eq(4)').text();
			var tgl = $(this).closest('tr').find('td:eq(5)').text();


			$('#kode').val(kode);
			$('#NmObat').val(nama);
			$('#merk').val(alamat);
			$('#Satuan').val(telp);
			$('#Harga').val(tgl);

			$('#savebtn').click(function(e){

				var btn = $(this);

				url = "<?php echo site_url('data/updateo/'); ?>"+kode;


				btn.button('loading');

				if($('#NmObat').val()=='' || $('#merk').val()=='' || $('#Satuan').val()=='' || $('#Harga').val()==''){

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
					data = $('#fobat').serializeArray();
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
							btn.unbind();

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
						$('#mobat').modal('hide');
						getdata();
						btn.button('reset');
					});

				}

			});
			$('#mobat').modal('show');
		});

		$('#data-obat').on('click','.hapusbtn',function(){
			url = '';
			var kode = $(this).closest('tr').find('td:eq(1)').text();
			

			$('#msg').html('Konfirmasi mau hapus data <b>'+kode+'</b>?');
			$('#mobatd').modal('show');

			$('#hapusbtn').click(function(e){
				var btn = $(this);
				btn.button('loading');
				url = "<?php echo site_url('data/hapuso/'); ?>"+kode;
				$.get(url,function(i){

					if(i=="Berhasil"){
						new PNotify({
							title: 'Success',
							text: 'Data berhasil dihapus! :D',
							type: 'success',
							hide: true,
							delay: 800,
							styling: 'fontawesome'
						});
						$('#mobatd').modal('hide');
						getdata();
						e.preventDefault();
						btn.unbind();
					}
					else{
						new PNotify({
							title: 'Failed',
							text: 'Data gagal dihapus! :(',
							type: 'warning',
							hide: true,
							delay: 800,
							styling: 'fontawesome'
						});
					}
					btn.button('reset');
				});
			});
		});
		

	</script>