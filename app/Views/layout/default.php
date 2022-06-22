<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>SiPera &mdash; Dashboard</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!--<link rel=" stylesheet" href="<?= base_url('template') ?>template/node_modules/bootstrap/dist/css/bootstrap.min.css">-->
  <!--<link rel=" stylesheet" href="<?= base_url('template') ?>template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">-->

  <!-- Datatable style -->
  <link rel="stylesheet" href="<?= base_url('template') ?>template/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('template') ?>template/node_modules/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('template') ?>template/node_modules/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('template') ?>template/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href=" <?= base_url('template') ?>template/node_modules/css/jquery.dataTables.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url('template') ?>/assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url('template') ?>/assets/css/components.css">



</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <!-- Isi dari Navbar -->
      <div class="navbar-bg"></div>
      <?= $this->include('layout/navbar') ?>

      <!-- Isi dari Menu Sidebar -->
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?= site_url('') ?>">SiPera</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?= site_url('') ?>">Si</a>
          </div>
          <ul class="sidebar-menu">
            <?= $this->include('layout/menu') ?>
          </ul>

      </div>
      </aside>
    </div>

    <!-- Isi dari Main Content -->
    <div class="main-content">
      <?= $this->renderSection('content') ?>
    </div>

    <!-- Bagian Footer -->
    <footer class="main-footer">
      <div class="footer-left">
        BKP &copy; 2022 <div class="bullet"></div> Project Independent <a href="">Sipera</a>
      </div>
      <div class="footer-right">
        2.3.0
      </div>
    </footer>
  </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  <script src="<?= base_url('template') ?>/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url('template') ?>/node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="<?= base_url('template') ?>/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?= base_url('template') ?>/node_modules/nicescroll/dist/jquery.nicescroll.min.js"></script>
  <script src="<?= base_url('template') ?>/node_modules/moment/dist/min/moment.min.js"></script>
  <script src="<?= base_url('template') ?>/node_modules/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url('template') ?>/node_modules/jszip/dist/jszip.min.js"></script>
  <script src="<?= base_url('template') ?>/node_modules/pdfmake/build/pdfmake.min.js"></script>
  <script src="<?= base_url('template') ?>/node_modules/pdfmake/build/vfs_fonts.js"></script>
  <script src="<?= base_url('template') ?>/node_modules/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="<?= base_url('template') ?>/node_modules/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="<?= base_url('template') ?>/node_modulesdatatables.net-buttons/js/buttons.colVis.min.js"></script>
  <script src="<?= base_url('template') ?>/assets/js/stisla.js"></script>
  <!-- JS Libraies -->


  <!-- Template JS File -->
  <script src="<?= base_url('template') ?>/assets/js/scripts.js"></script>
  <script src="<?= base_url('template') ?>/assets/js/custom.js"></script>

  <!-- Script Datatable CSS -->
  <script src="<?= base_url('template') ?>/node_modules/jquery/dist/jquery-3.1.0.js"></script>
  <script src="<?= base_url('template') ?>/node_modules/jquery/dist/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('template') ?>/node_modules/jquery/dist/js/dataTables.bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.datatab').DataTable();
    });
  </script>
</body>

</html>