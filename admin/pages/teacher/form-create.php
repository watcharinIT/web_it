<?php include_once('../authen.php') ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Teacher Management</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="../../dist/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../dist/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../dist/img/favicons/favicon-16x16.png">
  <link rel="manifest" href="../../dist/img/favicons/site.webmanifest">
  <!-- <link rel="mask-icon" href="../../dist/img/favicons/safari-pinned-tab.svg" color="#5bbad5"> -->
  <link rel="shortcut icon" href="../../dist/img/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="../../dist/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Custom style -->
  <link rel="stylesheet" href="../../dist/css/style.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">
  <!-- bootstrap-toggle -->
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar & Main Sidebar Container -->
    <?php include_once('../includes/sidebar.php') ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Teacher Management</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="../teacher">Teacher Management</a></li>
                <li class="breadcrumb-item active">Create Teacher</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Create Teacher</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="create.php" method="post" enctype="multipart/form-data">
            <div class="card-body">

              <div class="form-group">
                <label>Upload Image</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="file" id="customFile" required>
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <figure class="figure text-center d-none mt-2">
                  <img id="imgUpload" class="figure-img img-fluid rounded" alt="">
                </figure>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="firstName">FirstName *</label>
                  <input type="text" class="form-control" name="firstname" id="firstName" placeholder="FirstName" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="lastName">LastName *</label>
                  <input type="text" class="form-control" name="lastname" id="lastName" placeholder="LastName" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="education">education *</label>
                  <input type="text" class="form-control" name="education" id="education" placeholder="education" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="education2">education 2</label>
                  <input type="text" class="form-control" name="education2" id="education2" placeholder="education2">
                </div>
                <div class="form-group col-md-6">
                  <label for="tel">tel *</label>
                  <input type="text" class="form-control" name="tel" id="tel" placeholder="tel" required>
                </div>

              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="skill name1">skill name1 *</label>
                  <input type="text" class="form-control" name="skill_name1" id="skill name1" placeholder="HTML / Premiere pro" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="skill value1">skill value1 *</label>
                  <input type="text" class="form-control" name="skill_value1" id="skill value1" placeholder="0-100" required>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="skill name2">skill name2</label>
                  <input type="text" class="form-control" name="skill_name2" id="skill name2" placeholder="HTML / Premiere pro">
                </div>
                <div class="form-group col-md-6">
                  <label for="skill value2">skill value2</label>
                  <input type="text" class="form-control" name="skill_value2" id="skill value2" placeholder="0-100">
                </div>

              </div>


              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="skill name3">skill name3</label>
                  <input type="text" class="form-control" name="skill_name3" id="skill name3" placeholder="HTML / Premiere pro">
                </div>
                <div class="form-group col-md-6">
                  <label for="skill value3">skill value3</label>
                  <input type="text" class="form-control" name="skill_value3" id="skill value3" placeholder="0-100">
                </div>


              </div>


              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="skill name4">skill name4</label>
                  <input type="text" class="form-control" name="skill_name4" id="skill name4" placeholder="HTML / Premiere pro">
                </div>
                <div class="form-group col-md-6">
                  <label for="skill value4">skill value4</label>
                  <input type="text" class="form-control" name="skill_value4" id="skill value4" placeholder="0-100">
                </div>
              </div>

              <div class="form-group ">
                <label for="Experience">Experience</label>
                <input type="text" class="form-control" name="Experience" id="Experience" placeholder="ประสบการณ์ต่างๆ" required>
              </div>

            </div>
            <div class="card-footer">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- footer -->
    <?php include_once('../includes/footer.php') ?>

  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- SlimScroll -->
  <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="../../plugins/fastclick/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <!-- DataTables -->
  <script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>
  <!-- CK Editor -->
  <script src="../../plugins/ckeditor/ckeditor.js"></script>
  <!-- Select2 -->
  <script src="../../plugins/select2/select2.full.min.js"></script>
  <!-- bootstrap-toggle -->
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>


  <script>
    $(function() {
      $('#dataTable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true
      });

      $('.custom-file-input').on('change', function() {
        var size = this.files[0].size / 1024 / 1024
        if (size.toFixed(2) > 2) {
          alert('to big, maximum is 2MB')
        } else {
          var fileName = $(this).val().split('\\').pop()
          $(this).siblings('.custom-file-label').html(fileName)
          if (this.files[0]) {
            var reader = new FileReader()
            $('.figure').addClass('d-block')
            reader.onload = function(e) {
              $('#imgUpload').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0])
          }
        }
      })

      //Initialize Select2 Elements
      $('.select2').select2()

      //CKEDITOR
      CKEDITOR.replace('detail', {
        filebrowserBrowseUrl: '../../plugins/responsive_filemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl: '../../plugins/responsive_filemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl: '../../plugins/responsive_filemanager/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
      });

    });
  </script>

</body>

</html>