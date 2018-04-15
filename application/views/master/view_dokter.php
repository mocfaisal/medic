<?php 

$this->load->view('parts/header');
$this->load->view('parts/navigation');
?>

<!-- START CONTAINER FLUID -->
<div class="container-fluid container-fixed-lg">
	<!-- BEGIN PlACE PAGE CONTENT HERE -->

	<!-- BEGIN PlACE PAGE CONTENT HERE -->
	<button id="add" class="btn btn-success btn-rounded" type="button" data-toggle="modal" data-target="#mdokter">Tambah Data <span class="fa fa-plus"></span></button>

	<div class="row">
		<div class="col-sm-12">
			<?php 

			$this->load->view('data/dokter');
			$this->load->view('forms/dokter');

			?>
			
		</div>
	</div>
</div>
<!-- END PLACE PAGE CONTENT HERE -->



<?php 

$this->load->view('parts/footer');

?>
<div id="mdokterd" tabindex="-1" role="dialog" aria-labelledby="dokterModal" class="modal fade text-left" style="display: none;" aria-hidden="true">
	<div role="document" class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 id="dokterModal" class="modal-title">Dokter</h5>
				<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
			</div>
			<div class="modal-body">
				<p>Hapus Dokter.</p>
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
			var url2 = "<?php echo site_url('data/datadokter'); ?>";
			$.get(url2,function(x){
				$('#data-dokter').html(x);
			});
		};
		
		$('#add').click(function(){
			url= '';
			$('#kode').val('');
			$('#NmDokter').val('');
			$('#AlmDokter').val('');
			$('#TelpDokter').val('');
			$('#KodePoli').val('');
			$('#NamaPoli').val('');

			
			$('#savebtn').click(function(e){
				
				var btn = $(this);
				btn.button('loading');

				if($('#NmDokter').val()=='' || $('#AlmDokter').val()=='' || $('#TelpDokter').val()==''){

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
					url = "<?php echo base_url('?/data/insertd'); ?>";
					
					data = $('#fdokter').serializeArray();
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
							$('#mdokter').modal('hide');
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

		$('#data-dokter').on('click','.editbtn', function(e){
			e.preventDefault();
			url= '';
			var kode = $(this).closest('tr').find('td:eq(1)').text();
			var nama = $(this).closest('tr').find('td:eq(2)').text();
			var alamat = $(this).closest('tr').find('td:eq(3)').text();
			var telp = $(this).closest('tr').find('td:eq(4)').text();
			var namapoli = $(this).closest('tr').find('td:eq(5)').text();
			var kodepoli = $(this).closest('tr').find('td:eq(6)').text();

			$('#kode').val(kode);
			$('#NmDokter').val(nama);
			$('#AlmDokter').val(alamat);
			$('#TelpDokter').val(telp);
			$('#NamaPoli').val(namapoli);
			$('#KodePoli').val(kodepoli);

			

			$('#savebtn').click(function(e){
				
				var btn = $(this);

				btn.button('loading');
				url = "<?php echo base_url('?/data/updated'); ?>";
				data = $('#fdokter').serializeArray();
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
					$('#mdokter').modal('hide');
					getdata();

				});
				
				e.preventDefault();
				btn.unbind();
			});

			$('#mdokter').modal('show');
		});

		$('#data-dokter').on('click','.hapusbtn', function(e){
			e.preventDefault();
			url= '';
			var kode = $(this).closest('tr').find('td:eq(1)').text();
			
			$('#msg').html('Konfirmasi mau hapus data <b>'+kode+'</b>?');
			$('#mdokterd').modal('show');
			
			$('#hapusbtn').click(function(e){
				
				var btn = $(this);
				url = "<?php echo base_url('?/data/hapusd/'); ?>"+kode;
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
						
						$('#mdokterd').modal('hide');
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