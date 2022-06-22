<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Codeigniter 4 CRUD Tutorial -  posts List Example - Expertphp.in</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>
<body>
 <div class="container mt-4">
    <div class="register-box col-md-4">
		<?= \Config\Services::validation()->listErrors(); ?>
		<?= \Config\Services::session()->getFlashdata('msg'); ?>
		<form method="post" action="<?= base_url() ?>/Contact/save">
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" name="name" class="form-control" placeholder="Enter Name" id="name">
			</div>
			<div class="form-group">
				<label for="age">Age:</label>
				<input type="number" name="age" class="form-control" placeholder="Enter Age" id="age">
			</div>
			<div class="form-group">
				<label for="email">Email address:</label>
				<input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
</body>
</html>