 <?php 

 $this->load->view('parts/header');
 $this->load->view('parts/navigation');
 ?>

 <!-- START CONTAINER FLUID -->
 <div class=" container-fluid   container-fixed-lg">
 	<!-- BEGIN PlACE PAGE CONTENT HERE -->
 	<div>
 		<div class="row justify-content-center full-width">
 			<div class="col-sm-6">
 				<div class="form-inline">
 					<div class="form-group">
 						<input type="date" name="tgl1" id="tgl1" class="form-control" placeholder="Tanggal Mulai">
 					</div>
 					<span class="input-group-addon">Ke</span>
 					<div class="form-group">
 						<input type="date" name="tgl2" id="tgl2" class="form-control" placeholder="Tanggal Akhir">
 					</div>
 					<button id="sdata" type="button" class="btn btn-success btan-rounded btn-animated from-left fa fa-search"><span>Cari Data</span></button>
 				</div>
 				<div id="tglx"></div>
 			</div>
 		</div>
 		<div class="table-hover table-responsive-block">
 			<table class="table" id="tperiksa">
 				<thead>
 					<tr>
 						<th>No.</th>
 						<th>No Pendaftaran</th>
 						<th>Tanggal Pendaftaran</th>
 						<th>No Urut</th>
 						<th>No Pasien</th>
 						<th>Nama</th>
 						<th>Biaya</th>
 					</tr>
 				</thead>
 				<tbody id="data-periksa">

 					<?php 
 					$i=1;
 					$query=$this->db->query("SELECT * FROM v_pemasukan_pemeriksaan"); 
 					foreach ($query->result_array() as $data){
 						echo "<tr>";
 						echo "<td>".$i."</td>";
 						echo "<td>".$data['NoPendaftaran']."</td>";
 						echo "<td>".$data['TglPendaftaran']."</td>";
 						echo "<td>".$data['NoUrut']."</td>";
 						echo "<td>".$data['NoPasien']."</td>";
 						echo "<td>".$data['NamaPas']."</td>";
 						echo "<td>".$data['Tarif']."</td>";
 						echo "</tr>";
 						$i++;
 					}

 					?>

 				</tbody>
 				<tfoot id="dtotal">
 					<tr>
 						<th>Total</th>
 						<th colspan="5">
 							<?php 
 							$query=$this->db->query("SELECT SUM(Tarif) as Tarif FROM v_pemasukan_pemeriksaan"); 
 							$data=$query->row_array();
 							echo "<th>".$data['Tarif']."</th>";

 							?>
 						</th>
 					</tr>
 				</tfoot>
 			</table>
 		</div>

 	</div>
 	<!-- END PLACE PAGE CONTENT HERE -->
 </div>
 <!-- END CONTAINER FLUID -->

 <?php 

 $this->load->view('parts/footer');

 ?>

 <script type="text/javascript">
 	
 	function getdata(tgl1,tgl2){
 		var kondisi1 = $('#'+tgl1).val();
 		var kondisi2 = $('#'+tgl2).val();
 		// return kondisi1.replace('-','') + kondisi2.replace('-','');
 		return kondisi1 + '/' + kondisi2;
 	}
 	$('#sdata').click(function(){
 		// $('#tglx').html(getdata('tgl1','tgl2'));
 		// alert(getdata('tgl1','tgl2'));
 		var url1 = "<?php echo site_url('laporan/getdata3/'); ?>"+getdata('tgl1','tgl2');
 		var url2 = "<?php echo site_url('laporan/getdata4/'); ?>"+getdata('tgl1','tgl2');
 		if($('#tgl1').val() !=0 && $('#tgl2').val() !=0){
 			$.get(url1,function(x){
 				$('#data-periksa').html(x);
 			});

 			$.get(url2,function(x){
 				$('#dtotal').html(x);
 			});
 		}
 	});
 	$('#tperiksa').DataTable({
 		dom: 'T<"clear">lfrtip',
 		tableTools: {
 			"sSwfPath": "<?php echo base_url('assets/plugins/jquery-datatable/extensions/TableTools/swf');?>/copy_csv_xls_pdf.swf"
 		}
 	});
 </script>