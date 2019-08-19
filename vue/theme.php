<?php
$titrePage = "";
$iconPage  = "";
?>
<?php include 'template/header.php'; ?>
<?php include 'template/menu.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa <?= $iconPage ?>"></i> <?= $titrePage ?>
        </h1>

    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="box">
                    <div class="box-header">

                    </div>

                    <div class="box-body">

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Creation theme</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form>
              <div class="box-body">
                <div class="form-group">
                  <label for="theme_nom">Nom</label>
                  <input type="text" class="form-control" id="theme_nom" placeholder="Nom theme">
                </div>              
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                  <button type="button" class="btn btn-primary" onclick="insertTheme($('#theme_nom').val(),'ajoutTheme')">Submit</button>
              </div>
            </form>
          </div>





                    </div>
                </div>

            </div>
        </div>


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include 'template/footer.php'; ?>
<script src="../controllerAjax/themeAjax.js"></script>