<?php 

$this->load->view('parts/header');
$this->load->view('parts/navigation');
?>

<div class="container-fluid container-fixed-lg">
	
	<button id="add" class="btn btn-success btn-rounded" type="button" data-toggle="modal" data-target="#mpegawai">Tambah Data <span class="fa fa-plus"></span></button>

	<div class="row">
		<div class="col-sm-12">
			<?php 

			$this->load->view('data/pegawai');
			$this->load->view('forms/pegawai');

			?>
			
		</div>
	</div>
</div>

<?php 

$this->load->view('parts/footer');

?>
<div id="mpegawaid" tabindex="-1" role="dialog" aria-labelledby="PegawaiModal" class="modal fade text-left" style="display: none;" aria-hidden="true">
	<div role="document" class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 id="PegawaiModal" class="modal-title">Pegawai</h5>
				<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
			</div>
			<div class="modal-body">
				<p>Hapus Pegawai.</p>
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
			var url2 = "<?php echo site_url('data/datapegawai'); ?>";
			$.get(url2,function(i){
				$('#data-pegawai').html(i);
			});
		};
		$('#add').click(function(){
			url = '';			
			$('#NIP').val('');
			$('#NamaPeg').val('');
			$('#AlmPeg').val('');
			$('#TelpPeg').val('');
			$('#TglLhrPeg').val('');
			$('#jk').val('');
			

			$('#savebtn').click(function(e){
				
				var btn = $(this);

				
				url = "<?php echo site_url('data/insertpg'); ?>";
				btn.button('loading');

				if($('#NamaPeg').val()=='' || $('#AlmPeg').val()=='' || $('#TelpPeg').val()=='' || $('#TglLhrPeg').val()=='' || $('#jk').val()==''){

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
					data = $('#fpegawai').serializeArray();
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
						$('#mpegawai').modal('hide');
						getdata();
						btn.button('reset');
					});
					
					
				}
			});
		});

		

		$('#data-pegawai').on('click','.editbtn',function(){
			url = '';			
			var kode = $(this).closest('tr').find('td:eq(1)').text();
			var nama = $(this).closest('tr').find('td:eq(2)').text();
			var alamat = $(this).closest('tr').find('td:eq(3)').text();
			var telp = $(this).closest('tr').find('td:eq(4)').text();
			var tgl = $(this).closest('tr').find('td:eq(5)').text();
			var jk = $(this).closest('tr').find('td:eq(6)').text();

			$('#NIP').val(kode);
			$('#NamaPeg').val(nama);
			$('#AlmPeg').val(alamat);
			$('#TelpPeg').val(telp);
			$('#TglLhrPeg').val(tgl);
			$('#jk').val(jk);

			

			$('#savebtn').click(function(e){
				
				var btn = $(this);

				
				url = "<?php echo site_url('data/updatepg/'); ?>"+kode;
				btn.button('loading');

				if($('#NamaPeg').val()=='' || $('#AlmPeg').val()=='' || $('#TelpPeg').val()=='' || $('#TglLhrPeg').val()=='' || $('#jk').val()==''){
					
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
					data = $('#fpegawai').serializeArray();
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
						$('#mpegawai').modal('hide');
						getdata();
						btn.button('reset');
					});
					
				}

			});
			$('#mpegawai').modal('show');
		});

		$('#data-pegawai').on('click','.hapusbtn',function(){
			url = '';			
			var kode = $(this).closest('tr').find('td:eq(1)').text();
			
			$('#msg').html('Konfirmasi mau hapus data <b>'+kode+'</b>?');
			$('#mpegawaid').modal('show');

			$('#hapusbtn').click(function(e){
				var btn = $(this);
				btn.button('loading');
				url = "<?php echo site_url('data/hapuspg/'); ?>"+kode;
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
						$('#mpegawaid').modal('hide');
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