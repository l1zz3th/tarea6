<?= $pager->links() ?>

<?= $this->extend('templates/admin_template') ?>

<?= $this->section('content') ?>
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">CRUD Tarea 6</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
        <table class="table">
  <thead>
      
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre Completo</th>
      <th scope="col">Dirección</th>
      <th scope="col">Dui</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>


 
</table>
 
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

<?= $this->endSection() ?>