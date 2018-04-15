 <?php 

 $this->load->view('parts/header');
 $this->load->view('parts/navigation');
 ?>

 <!-- START CONTAINER FLUID -->
 <div class="container-fluid container-fixed-lg">
 	<!-- BEGIN PlACE PAGE CONTENT HERE -->
 	<?php 

 	$this->load->view('data/d_jadwal2');

 	?>
 	<!-- END PLACE PAGE CONTENT HERE -->
 </div>
 <!-- END CONTAINER FLUID -->

 <?php 

 $this->load->view('parts/footer');

 ?>

 <script type="text/javascript">
 	
 	

 	$('#tablez').DataTable({
 		dom: 'T<"clear">lfrtip',
 		tableTools: {
 			"sSwfPath": "<?php echo base_url('assets/plugins/jquery-datatable/extensions/TableTools/swf');?>/copy_csv_xls_pdf.swf"
 		}
 	});



 </script>