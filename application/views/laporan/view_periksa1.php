 <?php 

 $this->load->view('parts/header');
 $this->load->view('parts/navigation');
 ?>

 <!-- START CONTAINER FLUID -->
 <div class="container-fluid container-fixed-lg">
 	<!-- BEGIN PlACE PAGE CONTENT HERE -->

 	<!-- Nav tabs -->
 	<ul class="nav nav-tabs nav-tabs-fillup" data-init-reponsive-tabs="dropdownfx">
 		<li class="nav-item">
 			<a href="#" class="active" data-toggle="tab" data-target="#slide1"><span>Pasien sudah diperiksa</span></a>
 		</li>
 		<li class="nav-item">
 			<a href="#" data-toggle="tab" data-target="#slide2"><span>Pasien belum diperiksa</span></a>
 		</li>
 	</ul>
 	<!-- Tab panes -->
 	<div class="tab-content">
 		<div class="tab-pane slide-left active" id="slide1">
 			<div class="">
 				<div class="row justify-content-center full-width">
 					<div class="col-sm-6">
 						<div class="form-inline">
 							<div class="form-group">
 								<input type="date" name="tglz1" id="tglz1" class="form-control" placeholder="Tanggal Mulai">
 							</div>
 							<span class="input-group-addon">Ke</span>
 							<div class="form-group">
 								<input type="date" name="tglz2" id="tglz2" class="form-control" placeholder="Tanggal Akhir">
 							</div>
 							<button id="sdata1" type="button" class="btn btn-success btan-rounded btn-animated from-left fa fa-search"><span>Cari Data</span></button>
 						</div>
 						<div id="tglx"></div>
 					</div>
 				</div>
 				<div class="table-hover table-responsive-block">
 					<table class="table" id="tperiksa1">
 						<thead>
 							<tr>
 								<th>No.</th>
 								<th>No Pendaftaran</th>
 								<th>Tanggal Pendaftaran</th>
 								<th>No Urut</th>
 								<th>No Pasien</th>
 								<th>Nama</th>
 								<th>Alamat</th>
 							</tr>
 						</thead>
 						<tbody id="data-periksa1">

 							<?php 
 							$i=1;
 							$query=$this->db->query("SELECT * FROM v_pasien_diperiksa"); 
 							foreach ($query->result_array() as $data){
 								echo "<tr>";
 								echo "<td>".$i."</td>";
 								echo "<td>".$data['NoPendaftaran']."</td>";
 								echo "<td>".$data['TglPendaftaran']."</td>";
 								echo "<td>".$data['NoUrut']."</td>";
 								echo "<td>".$data['NoPasien']."</td>";
 								echo "<td>".$data['NamaPas']."</td>";
 								echo "<td>".$data['AlmPas']."</td>";
 								echo "</tr>";
 								$i++;
 							}

 							?>

 						</tbody>
 					</table>
 				</div>
 			</div>
 		</div>
 		<div class="tab-pane slide-left" id="slide2">
 			<div>
 				<div class="row justify-content-center full-width">
 					<div class="col-sm-6">
 						<div class="form-inline">
 							<div class="form-group">
 								<input type="date" name="tglx1" id="tglx1" class="form-control" placeholder="Tanggal Mulai">
 							</div>
 							<span class="input-group-addon">Ke</span>
 							<div class="form-group">
 								<input type="date" name="tglx2" id="tglx2" class="form-control" placeholder="Tanggal Akhir">
 							</div>
 							<button id="sdata2" type="button" class="btn btn-success btan-rounded btn-animated from-left fa fa-search"><span>Cari Data</span></button>
 						</div>
 						<div id="tglx"></div>
 					</div>
 				</div>
 				<div class="table-hover table-responsive-block">
 					<table class="table" id="tperiksa2">
 						<thead>
 							<tr>
 								<th>No.</th>
 								<th>No Pendaftaran</th>
 								<th>Tanggal Pendaftaran</th>
 								<th>No Urut</th>
 								<th>No Pasien</th>
 								<th>Nama</th>
 								<th>Alamat</th>
 							</tr>
 						</thead>
 						<tbody id="data-periksa2">

 							<?php 
 							$i=1;
 							$query=$this->db->query("SELECT * FROM v_pasien_blm_diperiksa"); 
 							foreach ($query->result_array() as $data){
 								echo "<tr>";
 								echo "<td>".$i."</td>";
 								echo "<td>".$data['NoPendaftaran']."</td>";
 								echo "<td>".$data['TglPendaftaran']."</td>";
 								echo "<td>".$data['NoUrut']."</td>";
 								echo "<td>".$data['NoPasien']."</td>";
 								echo "<td>".$data['NamaPas']."</td>";
 								echo "<td>".$data['AlmPas']."</td>";
 								echo "</tr>";
 								$i++;
 							}

 							?>

 						</tbody>
 					</table>
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
 	
 	function getdata1(tgl1,tgl2){
 		var kondisi1 = $('#'+tgl1).val();
 		var kondisi2 = $('#'+tgl2).val();
 		// return kondisi1.replace('-','') + kondisi2.replace('-','');
 		return kondisi1 + '/' + kondisi2;
 	}
 	function getdata2(tgl1,tgl2){
 		var kondisi1 = $('#'+tgl1).val();
 		var kondisi2 = $('#'+tgl2).val();
 		// return kondisi1.replace('-','') + kondisi2.replace('-','');
 		return kondisi1 + '/' + kondisi2;
 	}
 	$('#sdata2').click(function(){
 		// $('#tglx').html(getdata('tgl1','tgl2'));
 		// alert(getdata('tgl1','tgl2'));
 		var url = "<?php echo site_url('laporan/getdata2/'); ?>"+getdata2('tglx1','tglx2');
 		if($('#tglx1').val() !=0 && $('#tglx2').val() !=0){
 			$.get(url,function(x){
 				$('#data-periksa2').html(x);
 			});
 		}
 	});

 	$('#sdata1').click(function(){
 		// $('#tglx').html(getdata('tgl1','tgl2'));
 		// alert(getdata('tgl1','tgl2'));
 		var url = "<?php echo site_url('laporan/getdata1/'); ?>"+getdata1('tglz1','tglz2');
 		if($('#tglz1').val() !=0 && $('#tglz2').val() !=0){
 			$.get(url,function(x){
 				$('#data-periksa1').html(x);
 			});
 		}
 		// $.getJSON(url,function(data){
 		// 	$.each(data,function(i,j){

 		// 	});

 		// });

 		// $('#tperiksa1').DataTable({ 
 		// 	dom: 'T<"clear">lfrtip', 
 		// 	"ajax": url, 
 		// 	"columns": [ { 
 		// 		"data": "NoPendaftaran" 
 		// 	}, { 
 		// 		"data": "TglPendaftaran" 
 		// 	}, { 
 		// 		"data": "NoUrut" 
 		// 	}, { 
 		// 		"data": "NoPasien" 
 		// 	}, { 
 		// 		"data": "NamaPas" 
 		// 	}, {
 		// 		"data": "AlmPas" 
 		// 	} ], deferRender: true 
 		// }); 
 	});
 	
 	$('#tperiksa1').DataTable({
 		dom: 'T<"clear">lfrtip',
 		tableTools: {
 			"sSwfPath": "<?php echo base_url('assets/plugins/jquery-datatable/extensions/TableTools/swf');?>/copy_csv_xls_pdf.swf"
 		}
 	});

 	$('#tperiksa2').DataTable({
 		dom: 'T<"clear">lfrtip',
 		tableTools: {
 			"sSwfPath": "<?php echo base_url('assets/plugins/jquery-datatable/extensions/TableTools/swf');?>/copy_csv_xls_pdf.swf"
 		}
 	});
 	
 </script>