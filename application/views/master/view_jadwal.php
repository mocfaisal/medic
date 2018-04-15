<?php 

$this->load->view('parts/header');
$this->load->view('parts/navigation');
?>


<div class="container-fluid container-fixed-lg">
	
	<div id="rootwizard" class="m-t-50">
		<!-- Nav tabs -->
		<ul class="nav nav-tabs nav-tabs-linetriangle nav-tabs-separator nav-stack-sm" role="tablist" data-init-reponsive-tabs="dropdownfx">
			<li class="nav-item">
				<a class="active" data-toggle="tab" href="#tab1" role="tab"><i class="fa fa-shopping-cart tab-icon"></i> <span>Data</span></a>
			</li>
			<li class="nav-item hidden" id="item1">
				<a class="" data-toggle="tab" href="#tab2" role="tab"><i class="fa fa-truck tab-icon"></i> <span>Opsi</span></a>
			</li>
			
		</ul>
		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane padding-20 sm-no-padding active slide-left" id="tab1">
				<?php 
				$this->load->view('data/jadwal');
				?>
			</div>
			<div class="tab-pane slide-left padding-20 sm-no-padding" id="tab2">
				<?php 
				$this->load->view('forms/jadwal2');
				?>
			</div>
			<div class="padding-20 sm-padding-5 sm-m-b-20 sm-m-t-20 bg-white clearfix">
				<ul class="pager wizard no-style">
					<li class="next">
						<button id="next" class="btn btn-primary btn-cons btn-animated from-left pull-right fa fa-plus-circle" type="button">
							<span>Tambah</span>
						</button>
					</li>
					<li class="next finish hidden" id="savez">
						<button id="savebtn" class="btn btn-primary btn-cons btn-animated from-left fa fa-save pull-right" type="button">
							<span>Simpan</span>
						</button>
					</li>
					<li class="hidden" id="updatez">
						<button id="savebtn2" class="btn btn-primary btn-cons btn-animated from-left fa fa-save pull-right" type="button">
							<span>Simpan</span>
						</button>
					</li>
					<li class="hidden" id="updatez">
						<button id="savebtn3" class="btn btn-primary btn-cons btn-animated from-left fa fa-save pull-right" type="button">
							<span>Update</span>
						</button>
					</li>

					<li class="previous first hidden">
						<button class="btn btn-default btn-cons btn-animated from-left fa fa-cog pull-right" type="button">
							<span>First</span>
						</button>
					</li>
					<li class="previous">
						<button class="btn btn-default btn-cons btn-animated from-left fa fa-close pull-right" type="button" id="btnbatal">
							<span>Batal</span>
						</button>
					</li>
				</ul>
			</div>
			
		</div>
	</div>

	
</div>


<?php 

$this->load->view('parts/footer');
$this->load->view('data/d_dokter');
$this->load->view('data/d_dokter2');
?>
<div id="addd" tabindex="-1" role="dialog" aria-labelledby="JadwalModal" class="modal fade text-left" style="display: none;" aria-hidden="true">
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
		var url2 = "<?php echo site_url('data/getdatadokter2'); ?>";
		$.get(url1,function(i){
			$('#data-dokter1').html(i);
		});

		$.get(url2,function(i){
			$('#data-dokter2').html(i);
		});
	}

	$('#sdokter').click(function(){

		$('#data-dokter'+no).on('click','.pilih',function(){
			var kode = $(this).closest('tr').find('td:eq(1)').text();
			var dokter = $(this).closest('tr').find('td:eq(2)').text();

			$('#KodeDokter').val(kode);
			$('#namadokter').val(dokter);
			// kondisi.modal('hide');
			getdatadokter();
		});
		getdatadokter();
		kondisi.modal('show');
	});



	$('#next').click(function(){
		no=1;
		if(no==1){
			tambah();
			kondisi = $('#mdDokter');
		}
	});

	$('#savebtn').click(function(e){
		e.preventDefault();
		if(no==1){
			$('#savebtn2').trigger('click');
		}
		if(no==2){
			$('#savebtn3').trigger('click');
		}
	});

	function tambah(){
		
		$('.cs-placeholder').text('Pilih');
		$('#KodeJadwal').val('');
		$('#Hari').val('');
		$('#JamMulai').val('');
		$('#JamSelesai').val('');
		$('#namadokter').val('');
		
	}

	$('#savebtn2').bind('click',function(e){

		no=1;

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
					e.preventDefault();
					// btn.unbind();
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
				$('#btnbatal').trigger('click');
				getdata();

			});
			btn.button('reset');
		}

	});

	// $('#add').click(function(){
	// });

	$('#data-jadwal').on('click','.editbtn',function(){
		$('#next').trigger('click');
		
		no=2;

		kondisi = $('#mdDokter2');

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

		$('#savebtn3').click(function(e){
			no=2;
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

	$('#data-jadwal').on('click','.hapusbtn',function(){
		
		var kode = $(this).closest('tr').find('td:eq(1)').text();
		var KodeDokter = $(this).closest('tr').find('td:eq(6)').text();

		$('#KodeDokter').val(KodeDokter);
		
		$('#msg').html('Konfirmasi mau hapus data <b>'+kode+'</b>?');
		$('#addd').modal('show');

		$('#hapusbtn').click(function(e){
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
					$('#addd').modal('hide');
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