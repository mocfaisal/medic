<?php 

$this->load->view('parts/header');
$this->load->view('parts/navigation');
?>



<div class="container-fluid container-fixed-lg">
	
	<button id="add" class="btn btn-success btn-rounded" type="button" data-toggle="modal" data-target="#mpasien">Tambah Data <span class="fa fa-plus"></span></button>

	<div class="row">
		<div class="col-sm-12">
			<?php 

			$this->load->view('data/pasien');
			$this->load->view('forms/pasien');

			?>
			
		</div>
	</div>
</div>

<?php 

$this->load->view('parts/footer');

?>
<div id="mpasiend" tabindex="-1" role="dialog" aria-labelledby="PasienModal" class="modal fade text-left" style="display: none;" aria-hidden="true">
	<div role="document" class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 id="PasienModal" class="modal-title">Pasien</h5>
				<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
			</div>
			<div class="modal-body">
				<p>Hapus Pasien.</p>
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
			var url2 = "<?php echo site_url('data/datapasien'); ?>";
			$.get(url2,function(x){
				$('#data-pasien').html(x);
			});

		};
		$('#add').click(function(){
			url= '';
			$('#NamaPas').val('');
			$('#AlmPas').val('');
			$('#TelpPas').val('');
			$('#tgllahir').val('');
			$('#jk').val('');

			$('#savebtn').click(function(e){
				
				var btn = $(this);

				url = "<?php echo site_url('data/insertp'); ?>";
				data = $('#fpasien').serializeArray();
				btn.button('loading');

				if($('#NamaPas').val()=='' || $('#AlmPas').val()=='' || $('#TelpPas').val()=='' || $('#tgllahir').val()=='' || $('#jk').val()==''){

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
					data = $('#fpasien').serializeArray();
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
						$('#mpasien').modal('hide');
						getdata();
						btn.button('reset');
					});
					
					
				}
			});
		});


		$('#data-pasien').on('click','.editbtn',function(){
			url= '';
			var kode = $(this).closest('tr').find('td:eq(1)').text();
			var nama = $(this).closest('tr').find('td:eq(2)').text();
			var alamat = $(this).closest('tr').find('td:eq(3)').text();
			var telp = $(this).closest('tr').find('td:eq(4)').text();
			var tgl = $(this).closest('tr').find('td:eq(5)').text();
			var jk = $(this).closest('tr').find('td:eq(6)').text();

			$('#kode').val(kode);
			$('#NamaPas').val(nama);
			$('#AlmPas').val(alamat);
			$('#TelpPas').val(telp);
			$('#tgllahir').val(tgl);
			$('#jk').val(jk);

			

			$('#savebtn').click(function(e){
				
				var btn = $(this);

				url = "<?php echo site_url('data/updatep/'); ?>"+kode;
				data = $('#fpasien').serializeArray();
				btn.button('loading');

				if($('#NamaPas').val()=='' || $('#AlmPas').val()=='' || $('#TelpPas').val()=='' || $('#tgllahir').val()=='' || $('#jk').val()==''){
					
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
					data = $('#fpasien').serializeArray();
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
						$('#mpasien').modal('hide');
						getdata();
						btn.button('reset');
					});
					
				}

			});
			$('#mpasien').modal('show');
		});

		$('#data-pasien').on('click','.hapusbtn',function(){
			url= '';
			var kode = $(this).closest('tr').find('td:eq(1)').text();
			
			$('#msg').html('Konfirmasi mau hapus data <b>'+kode+'</b>?');
			$('#mpasiend').modal('show');

			$('#hapusbtn').click(function(e){
				var btn = $(this);
				btn.button('loading');
				url = "<?php echo site_url('data/hapusp/'); ?>"+kode;	
				
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
						$('#mpasiend').modal('hide');
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