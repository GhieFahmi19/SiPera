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
<div class="container mt-6">
    <a href="<?php echo base_url('contact/create') ?>" class="btn btn-sm btn-success">Create</a>
   
  <div class="row mt-3">
     <table class="table table-bordered" id="posts">
       <thead>
          <tr>
             <th>Id</th>
             <th>Name</th>
             <th>Age</th>
             <th>Email</th>
			   <th>Action</th>
          </tr>
       </thead>
       <tbody>
	   
          <?php if($posts): ?>
          <?php foreach($posts as $post): ?>
          <tr>
             <td><?php echo $post['id']; ?></td>
             <td><?php echo $post['name']; ?></td>
             <td><?php echo $post['age']; ?></td>
			  <td><?php echo $post['email']; ?></td>
            <td>
			<a  href="<?php echo base_url(); ?>/contact/view_edit/<?php echo $post['id']; ?>">Edit</a> 
			<a  href="<?php echo base_url(); ?>/contact/delete/<?php echo $post['id']; ?>">Delete</a></td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
 <script>
    $(document).ready( function () {
      $('#posts').DataTable();
  } );
</script>
</body>
</html>
update.php (View)
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
		<form method="post" action="<?= base_url() ?>/Contact/update">
		     <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $user['id'];?>"> 
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" name="name" class="form-control" placeholder="Enter Name" id="name" value="<?php echo $user['name']; ?>">
			</div>
			<div class="form-group">
				<label for="age">Age:</label>
				<input type="number" name="age" class="form-control" placeholder="Enter Age" id="age" value="<?php echo $user['age']; ?>">
			</div>
			<div class="form-group">
				<label for="email">Email address:</label>
				<input type="email" name="email" class="form-control" placeholder="Enter email" id="email" value="<?php echo $user['email']; ?>">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
</body>
</html>