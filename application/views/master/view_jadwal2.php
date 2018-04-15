 <?php 

 $this->load->view('parts/header');
 $this->load->view('parts/navigation');
 ?>

 <!-- START CONTAINER FLUID -->
 <div class="container-fluid container-fixed-lg">
 	
 	<div>
 		<button id="tambah" type="button" class="btn btn-success btn-rounded btn-animated from-left fa fa-plus"><span>Tambah data</span></button>
 	</div>
 	<?php 
 	$this->load->view('data/jadwal');
 	?>

 </div>
 <!-- END CONTAINER FLUID -->

 <?php 
 $this->load->view('forms/jadwal');
 $this->load->view('data/d_dokter');
 $this->load->view('parts/footer');

 ?>

 <div id="hapusmd" tabindex="-1" role="dialog" aria-labelledby="JadwalModal" class="modal fade text-left" style="display: none;" aria-hidden="true">
 	<div role="document" class="modal-dialog">
 		<div class="modal-content">
 			<div class="modal-header">
 				<h5 id="JadwalModal" class="modal-title">Jadwal</h5>
 				<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
 			</div>
 			<div class="modal-body">
 				<p>Hapus Jadwal.</p>
 				<div id="msg">

 				</div>
 				<div class="modal-footer">
 					<button type="button" data-dismiss="modal" class="btn btn-secondary">Batal</button>
 					<button type="button" id="hapusbtn" class="btn btn-primary">Hapus</button>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>

 <script type="text/javascript">

 	var data = '';
 	var kondisi = '';
 	var no = '';
 	var kode='';

	// Custom get data

	function getdata(){
		var url2 = "<?php echo site_url('data/datajadwal'); ?>";
		$.get(url2,function(i){
			$('#data-jadwal').html(i);
		});
	};

	function getdatadokter(){
		var url1 = "<?php echo site_url('data/getdatadokter1'); ?>";
		// var url2 = "<?php echo site_url('data/getdatadokter2'); ?>";
		$.get(url1,function(i){
			$('#data-dokter').html(i);
		});

		// $.get(url2,function(i){
		// 	$('#data-dokter2').html(i);
		// });
	}

	$('#sdokter').click(function(){

		$('#data-dokter').on('click','.pilih',function(e){
			e.preventDefault();
			var kode = $(this).closest('tr').find('td:eq(1)').text();
			var dokter = $(this).closest('tr').find('td:eq(2)').text();

			$('#KodeDokter').val(kode);
			$('#namadokter').val(dokter);
			// kondisi.modal('hide');
			getdatadokter();
		});
		getdatadokter();
		$('#mdDokter').modal('show');
	});


	$('#tambah').click(function(){
		$('.cs-placeholder').text('Pilih');
		$('#KodeJadwal').val('');
		$('#Hari').val('');
		$('#JamMulai').val('');
		$('#JamSelesai').val('');
		$('#namadokter').val('');

		$('#savebtn').click(function(e){
			var btn = $(this);
			btn.button('loading');

			if($('#Hari').val()=='' || $('#JamMulai').val()=='' || $('#JamSelesai').val()=='' || $('#namadokter').val()==''){

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
				var urlz = "<?php echo site_url('data/insertjp'); ?>";
				var dataz = $('#fjadwal').serializeArray();
				$.post(urlz,dataz,function(i){

					if(i=="Berhasil"){
						new PNotify({
							title: 'Success',
							text: 'Data berhasil disimpan! :D',
							type: 'success',
							hide: true,
							delay: 800,
							styling: 'fontawesome'
						});
						$('#mjadwal').modal('hide');
						e.preventDefault();
						btn.unbind();
						kondisi='';

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
					getdata();

				});
				btn.button('reset');
			}

		});
		$('#mjadwal').modal('show');
	});

	// $('#savebtn').click(function(e){
	// 	e.preventDefault();
	// 	if(no==1){
	// 		$('#savebtn2').trigger('click');
	// 	}
	// 	if(no==2){
	// 		$('#savebtn3').trigger('click');
	// 	}
	// });

	
	

	// $('#add').click(function(){
	// });

	$('#data-jadwal').on('click','.editbtn',function(){
		no=2;

		kondisi = $('#mdDokter');

		var kode = $(this).closest('tr').find('td:eq(1)').text();
		var Hari = $(this).closest('tr').find('td:eq(2)').text();
		var JamMulai = $(this).closest('tr').find('td:eq(3)').text();
		var JamSelesai = $(this).closest('tr').find('td:eq(4)').text();
		var dokter = $(this).closest('tr').find('td:eq(5)').text();
		var KodeDokter = $(this).closest('tr').find('td:eq(6)').text();

		$('#KodeJadwal').val(kode);
		$('#Hari').val(Hari);
		$('#JamMulai').val(JamMulai);
		$('#JamSelesai').val(JamSelesai);
		$('#namadokter').val(dokter);
		$('#KodeDokter').val(KodeDokter);
		
		$('#mjadwal').modal('show');

		$('#savebtn').click(function(e){
			var btn = $(this);
			btn.button('loading');
			if($('#Hari').val()=='' || $('#JamMulai').val()=='' || $('#JamSelesai').val()=='' || $('#namadokter').val()==''){

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
				var urlx = "<?php echo site_url('data/updatejp/'); ?>"+kode;	
				var datax = $('#fjadwal').serializeArray();
				$.post(urlx,datax,function(i){

					if(i=="Berhasil"){
						new PNotify({
							title: 'Success',
							text: 'Data berhasil disimpan! :D',
							type: 'success',
							hide: true,
							delay: 800,
							styling: 'fontawesome'
						});
						url='';
						kondisi='';
						e.preventDefault();
						btn.unbind();
						$('#btnbatal').trigger('click');
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
					getdata();
					btn.button('reset');
				});
			}
		});

	});

	$('#data-jadwal').on('click','.hapusbtn',function(e){

		var kode = '';
		var KodeDokter = $(this).closest('tr').find('td:eq(6)').text();
		kode = $(this).closest('tr').find('td:eq(1)').text();;

		$('#KodeDokter').val(KodeDokter);
		
		$('#msg').html('Konfirmasi mau hapus data <b>'+kode+'</b>?');
		$('#hapusmd').modal('show');

		$('#hapusbtn').click(function(e){
			e.preventDefault();
			var btn = $(this);
			btn.button('loading');
			url = "<?php echo site_url('data/hapusjp/'); ?>"+kode;
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
					$('#hapusmd').modal('hide');
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

	$('#btnbatal').click(function(){
		kondisi='';
		no='';

	});




</script>