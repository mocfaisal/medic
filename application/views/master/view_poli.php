<?php 

$this->load->view('parts/header');
$this->load->view('parts/navigation');
?>

<div class="container-fluid container-fixed-lg">

	<button id="add" class="btn btn-success btn-rounded" type="button" data-toggle="modal" data-target="#mpoli">Tambah Data <span class="fa fa-plus"></span></button>
	<div class="row">
		<div class="col-sm-12">
			<?php 

			$this->load->view('data/poli');
			$this->load->view('forms/poli');

			?>
			
		</div>
	</div>
</div>

<?php 

$this->load->view('parts/footer');

?>
<div id="mpolid" tabindex="-1" role="dialog" aria-labelledby="PoliklinikiModal" class="modal fade text-left" style="display: none;" aria-hidden="true">
	<div role="document" class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 id="PoliklinikiModal" class="modal-title">Polikliniki</h5>
				<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
			</div>
			<div class="modal-body">
				<p>Hapus Polikliniki.</p>
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
		var url = "";
		var data = '';
		function getdata(){
			var url2 = "<?php echo site_url('data/datapoli'); ?>";
			$.get(url2,function(i){
				$('#data-poliklinik').html(i);
			});
		};
		$('#add').click(function(){
			url = "";
			
			$('#kode').val('');
			$('#nama').val('');			

			$('#savebtn').click(function(e){
				
				var btn = $(this);

				
				url = "<?php echo site_url('data/insertpl'); ?>";
				btn.button('loading');

				if($('#nama').val()==''){

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
					data = $('#fpoli').serializeArray();
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
						$('#mpoli').modal('hide');
						getdata();
						btn.button('reset');
					});
					
					
				}
			});
		});

		

		$('#data-poliklinik').on('click','.editbtn',function(){
			url = "";
			var kode = $(this).closest('tr').find('td:eq(1)').text();
			var nama = $(this).closest('tr').find('td:eq(2)').text();

			$('#kode').val(kode);
			$('#nama').val(nama);

			

			$('#savebtn').click(function(e){
				
				var btn = $(this);

				
				url = "<?php echo site_url('data/updatepl/'); ?>"+kode;
				btn.button('loading');

				if($('#nama').val()==''){
					
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
					data = $('#fpoli').serializeArray();
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
						$('#mpoli').modal('hide');
						getdata();
						btn.button('reset');
					});
					
				}

			});
			$('#mpoli').modal('show');
		});

		$('#data-poliklinik').on('click','.hapusbtn',function(){
			url = "";
			var kode = $(this).closest('tr').find('td:eq(1)').text();
			
			$('#msg').html('Konfirmasi mau hapus data <b>'+kode+'</b>?');
			$('#mpolid').modal('show');

			$('#hapusbtn').click(function(e){
				var btn = $(this);
				btn.button('loading');
				url = "<?php echo site_url('data/hapuspl/'); ?>"+kode;
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
						$('#mpolid').modal('hide');
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