<?= $this->extend('layout/templates') ?>

<?= $this->section('content') ?>
<div class="container">
    <br>
    <?= \Config\Services::validation()->listErrors(); ?>
    <span class="d-none alert alert-success mb-3" id="res_message"></span>
    <div class="row">
        <div class="col-md-9">
            <form action="<?php echo base_url('penduduk/update'); ?>" name="edit_pend" id="edit_pend" method="post" accept-charset="utf-8">
                <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $penduduk['id'] ?>">
                <div class="form-group">
                    <label for="formGroupExampleInput">Name</label>
                    <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Please enter name" value="<?php echo $penduduk['name'] ?>">
                </div>
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Please enter name" value="<?php echo $penduduk['name'] ?>">
                </div>
                <div class="form-group">
                    <button type="submit" id="send_form" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    if ($("#edit-penduduk").length > 0) {
        $("#edit-penduduk").validate({
            rules: {
                name: {
                    required: true,
                },
                username: {
                    required: true,
                    maxlength: 50,
                    username: true,
                },
            },
            messages: {
                nama: {
                    required: "Silahkan Isi Nama",
                },
                username: {
                    required: "Please enter valid username",
                    username: "Please enter valid username",
                    maxlength: "The username name should less than or equal to 50 characters",
                },
            },
        })
    }
</script>
<?= $this->endSection() ?>