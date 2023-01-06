<!DOCTYPE html>
<html lang="en">

    <?php include '../head.php'; ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include '../sidebar.php'; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include '../navbar.php'; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="row">

            <!-- Area Chart -->
              <div class="col-xl-6 col-lg-6">
                  <div class="card shadow mb-4">
                      <!-- Card Header - Dropdown -->
                      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                          <h6 class="m-0 font-weight-bold text-primary">Clearance</h6>
                          <div class="dropdown no-arrow">
                              <button type="button" class="btn btn-primary btn-icon-text btn-flat btn-sm" data-toggle="modal" data-target="#add-clearance">
                                  <i class="ti-plus btn-icon-prepend"></i>Add Clearance
                              </button> 
                          </div>
                      </div>
                      <!-- Card Body -->
                      <div class="card-body">
                          <div class="table-responsive">
                              <table class="table table-hover display" id="" width="100%" cellspacing="0">
                                  <thead>
                                      <tr style="font-size:13px;font-family:sans-serif;">
                                          <th>Name</th>
                                          <th>Description</th>
                                          <th></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr style="font-size:13px;font-family:sans-serif;">
                                          <th>Data</th>
                                          <th>Data</th>
                                          <th>
                                              <a href="#" data-toggle="tooltip" title="Edit">
                                                  <button type="button" class="btn btn-success btn-icon-text btn-flat btn-sm btn-circle" data-toggle="modal" data-target="#edit-clearance">
                                                      <i class="fa fa-edit"></i>
                                                  </button> 
                                              </a>
                                          </th>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
              
              <div class="col-xl-6 col-lg-6">
                  <div class="card shadow mb-4">
                      <!-- Card Header - Dropdown -->
                      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                          <h6 class="m-0 font-weight-bold text-primary">Assessment</h6>
                          <div class="dropdown no-arrow">
                              <button type="button" class="btn btn-primary btn-icon-text btn-flat btn-sm" data-toggle="modal" data-target="#add-assessment">
                                  <i class="ti-plus btn-icon-prepend"></i>Add Assessment
                              </button> 
                          </div>
                      </div>
                      <!-- Card Body -->
                      <div class="card-body">
                          <div class="table-responsive">
                              <table class="table table-hover display" id="" width="100%" cellspacing="0">
                                  <thead>
                                      <tr style="font-size:13px;font-family:sans-serif;">
                                          <th>Name</th>
                                          <th>Amount</th>
                                          <th></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr style="font-size:13px;font-family:sans-serif;">
                                          <th>Data</th>
                                          <th>Data</th>
                                          <th>
                                              <a href="#" data-toggle="tooltip" title="Edit">
                                                  <button type="button" class="btn btn-success btn-icon-text btn-flat btn-sm btn-circle" data-toggle="modal" data-target="#edit-assessment">
                                                      <i class="fa fa-edit"></i>
                                                  </button> 
                                              </a>
                                          </th>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
              
            </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
          <?php include '../modals.php'; ?>
        <?php include '../footer.php'; ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->
        
  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../login/login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

<?php include '../scripts.php'; ?>
<script>
    $(document).ready(function() {
    $('table.display').DataTable();
} );
    </script>
</body>

</html>
