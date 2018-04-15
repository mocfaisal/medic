<?php 

$this->load->view('parts/header');
$this->load->view('parts/navigation');
?>

<!-- START CONTAINER FLUID -->
<div class=" container-fluid   container-fixed-lg">
	<!-- BEGIN PlACE PAGE CONTENT HERE -->

	<!-- BEGIN PlACE PAGE CONTENT HERE -->
	<button id="add" class="btn btn-success btn-rounded" type="button" data-toggle="modal" data-target="#mjenis">Tambah Data <span class="fa fa-plus"></span></button>

	<div class="row">
		<div class="col-sm-12">
			<?php 

			$this->load->view('data/jenis');
			$this->load->view('forms/jenis');

			?>
			
		</div>
	</div>
</div>
<!-- END PLACE PAGE CONTENT HERE -->



<?php 

$this->load->view('parts/footer');

?>
<div id="mjenisd" tabindex="-1" role="dialog" aria-labelledby="jenisModal" class="modal fade text-left" style="display: none;" aria-hidden="true">
	<div role="document" class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 id="jenisModal" class="modal-title">Jenis</h5>
				<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
			</div>
			<div class="modal-body">
				<p>Hapus Jenis Biaya.</p>
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
		var url= '';
		var data = '';
		function getdata(){
			var url2 = "<?php echo site_url('data/datajenis'); ?>";
			$.get(url2,function(x){
				$('#data-jenis').html(x);
			});
		};
		
		$('#add').click(function(){
			url= '';
			$('#kode').val('');
			$('#NamaBiaya').val('');
			$('#Tarif').val('');

			$('#savebtn').click(function(e){
				
				var btn = $(this);
				btn.button('loading');

				if($('#NamaBiaya').val()=='' || $('#Tarif').val()==''){

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
					url = "<?php echo base_url('?/data/insertj'); ?>";
					
					data = $('#fjenis').serializeArray();
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
							$('#mjenis').modal('hide');
							getdata();
							
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


					});
					
					btn.button('reset');
					e.preventDefault();
					btn.unbind();
				}
			});
		});

		$('#data-jenis').on('click','.editbtn', function(){
			url= '';
			var kode = $(this).closest('tr').find('td:eq(1)').text();
			var nama = $(this).closest('tr').find('td:eq(2)').text();
			var Tarif = $(this).closest('tr').find('td:eq(3)').text();
			$('#kode').val(kode);
			$('#NamaBiaya').val(nama);
			$('#Tarif').val(Tarif);

			$('#savebtn').click(function(e){
				
				var btn = $(this);

				btn.button('loading');
				url = "<?php echo base_url('?/data/updatej/'); ?>"+kode;
				data = $('#fjenis').serializeArray();
				$.post(url,data,function(i){
					if(i=="Berhasil"){
						new PNotify({
							title: 'Success',
							text: 'Data berhasil disimpan! :D',
							type: 'success',
							hide: true,
							delay:800,
							styling: 'fontawesome'
						});
						
					}
					else{
						new PNotify({
							title: 'Failed',
							text: 'Data gagal disimpan! :(',
							type: 'warning',
							hide: true,
							delay:800,
							styling: 'fontawesome'
						});

					}

					btn.button('reset');
					$('#mjenis').modal('hide');
					getdata();

				});
				
				e.preventDefault();
				btn.unbind();
			});

			$('#mjenis').modal('show');
		});

		$('#data-jenis').on('click','.hapusbtn', function(){
			url= '';
			var kode = $(this).closest('tr').find('td:eq(1)').text();
			
			$('#msg').html('Konfirmasi mau hapus data <b>'+kode+'</b>?');
			$('#mjenisd').modal('show');
			
			$('#hapusbtn').click(function(e){
				
				var btn = $(this);
				url = "<?php echo base_url('?/data/hapusj/'); ?>"+kode;
				btn.button('loading');
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
						
						$('#mjenisd').modal('hide');
						getdata();
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
					e.preventDefault();
					btn.unbind();
				});	
			});
		});
		

	</script>