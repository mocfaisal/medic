 <?php 

 $this->load->view('parts/header');
 $this->load->view('parts/navigation');
 ?>

 <!-- START CONTAINER FLUID -->
 <div class=" container-fluid   container-fixed-lg">
 	<!-- BEGIN PlACE PAGE CONTENT HERE -->
 	<div class="row clearfix">
 		<div class="col-sm-6">
 			<form class="form-horizontal" id="formz">
 				<div class="form-group form-group-default required">
 					<label>Nama Lengkap</label>
 					<div>
 						<input type="text" placeholder="Nama Lengkap" class="form-control" name="NamaPeg" id="NamaPeg">
 					</div>
 				</div>

 				<div class="form-group form-group-default required">
 					<label>Alamat</label>
 					<div>
 						<input type="text" placeholder="Alamat" class="form-control" name="AlmPeg" id="AlmPeg">
 					</div>
 				</div>

 				<div class="form-group form-group-default required">
 					<label>Telpon</label>
 					<span class="help">misal. "(62) 234-3243-3243"</span>

 					<div>
 						<input type="text" placeholder="Telpon" class="form-control" name="TelpPeg" id="TelpPeg">
 					</div>
 				</div>

 				<div class="form-group form-group-default required">
 					<label>Tanggal Lahir</label>
 					<!-- <div id="datepicker-component" class="input-group date"> -->
 						<div>
 							<input type="date" class="form-control" name="TglLhrPeg" id="TglLhrPeg">
 						</div>
 					</div>

 					<div class="form-group form-group-default required">
 						<label>Jenis Kelamin</label>
 						<select class="cs-select cs-skin-slide full-width form-control" data-init-plugin="cs-select" name="jk" id="jk">
 							<option value="L">Laki-laki</option>
 							<option value="P">Perempuan</option>
 						</select>
 					</div>

 				</form>
 				<div class="row" style="margin-bottom: 20px;">
 					<div class="col-md-12 m-t-10 sm-m-t-10">
 						<div class="pull-left">
 							<button class="btn btn-danger btn-rounded btn-animated from-left fa fa-pencil" id="editbtn"><span>Edit</span></button>
 						</div>
 						<div class="pull-right">
 							<button type="button" id="batalbtn" class="btn btn-danger" disabled>Batal</button>
 							<button type="button" id="savebtn" class="btn btn-complete btn-cons btn-animated from-left fa fa-save" disabled><span>Simpan</span></button>
 						</div>
 					</div>
 				</div>
 			</div>

 		</div>
 		<!-- END PLACE PAGE CONTENT HERE -->
 	</div>
 	<!-- END CONTAINER FLUID -->

 	<?php 

 	$this->load->view('parts/footer');

 	?>

 	<script type="text/javascript">
 		var kode="<?php echo $this->session->userdata('NIP');?>";
 		fieldcondition(true);
 		getdata();
 		function getdata(){
 			
 			var url="<?php echo site_url('users/getuser/'); ?>"+kode;
 			$.getJSON(url, function(data){
 				$.each(data,function(i,j){
 					$('#NamaPeg').val(j.NamaPeg);
 					$('#AlmPeg').val(j.AlmPeg);
 					$('#TelpPeg').val(j.TelpPeg);
 					$('#TglLhrPeg').val(j.TglLhrPeg);
 					$('#jk').val(j.JnsKelPeg);
 				});
 			});
 		}
 		function fieldcondition(boolean){
 			$('#NamaPeg').attr('disabled',boolean);
 			$('#AlmPeg').attr('disabled',boolean);
 			$('#TelpPeg').attr('disabled',boolean);
 			$('#TglLhrPeg').attr('disabled',boolean);
 			$('#jk').attr('disabled',boolean);
 			
 		}

 		function buttoncondition1(){
 			$('#editbtn').attr('disabled',false);
 			$('#savebtn').attr('disabled',true);
 			$('#batalbtn').attr('disabled',true);
 		}
 		function buttoncondition2(){
 			$('#editbtn').attr('disabled',true);
 			$('#savebtn').attr('disabled',false);
 			$('#batalbtn').attr('disabled',false);
 		}
 		$('#editbtn').click(function(){
 			fieldcondition(false);
 			buttoncondition2();
 			
 		});

 		$('#batalbtn').click(function(){
 			fieldcondition(true);
 			buttoncondition1();
 			getdata();
 		});
 		$('#savebtn').click(function(){


 			var btn = $(this);

 			url = "<?php echo site_url('users/updateuser/'); ?>"+kode;
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
 				data = $('#formz').serializeArray();
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
 						// e.preventDefault();
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
 					$('#mpegawai').modal('hide');
 					getdata();
 					btn.button('reset');
 					fieldcondition(true);
 					buttoncondition1();
 				});

 			}


 			
 		});
 	</script>