 <?= $this->extend('layout/default') ?>
  <?= $this->section('content') ?>

 
  <!-- Isi dari Main Content -->
  <section class="section">
    <div class="section-header">
      <h1>Page</h1>
      <!-- Breadcrumb -->
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Parent Page</a></div>
        <div class="breadcrumb-item">Page</div>
      </div>
    </div>
    <div class="container">
  <h2>View data</h2>
	<table class="table table-bordered table-sm" >
    <thead>
      <tr>
		<th>Sl No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
		<th>City</th>
      </tr>
    </thead>
    <tbody id="table">
      
    </tbody>
  </table>
</div>
<script>
	$.ajax({
		url: "<?php echo base_url("SuratController/viewajax");?>",
		type: "POST",
		cache: false,
		success: function(data){
			//alert(data);
			$('#table').html(data); 
		}
	});
</script>
</body>
</html>


    </div>
  </section>


<?= $this->endSection() ?>