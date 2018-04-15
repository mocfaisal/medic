<?php 

$this->load->view('parts/header');
$this->load->view('parts/navigation');
?>
<div class="content full-height">
	<div class="container-fluid full-height no-padding">
		<div class="row full-height no-margin">

			<div class="col-md-6 no-padding b-r b-grey full-height">
				<div class="bg-white full-height">
					<?php 

			// $this->load->view('data/resep');
					$this->load->view('forms/resep');

					?>
				</div>
			</div>			
		</div>
		<div class="col-md-6 no-padding full-height">
			<div class="bg-white full-height">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Kode Obat</th>
								<th>Nama Obat</th>
								<th>Dosis</th>
								<th>Jumlah</th>
								
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody id="dresep">
						</tbody>
					</table>
				</div>
			</div>
			<div>
				<button id="savebtn" class="btn btn-success btn-roundeded btn-animated fa fa-save from-left pull-right" type="button"><span>Simpan</span></button>
			</div>
		</div>
	</div>
</div>
<?php 
$this->load->view('data/d_obat');
$this->load->view('data/d_periksa2');
$this->load->view('parts/footer');

?>
<script type="text/javascript">
	$('#savebtn').click(function(){
		alert('a');
	});
	$('#sobat').click(function(){
		alert('z');
	});
</script>