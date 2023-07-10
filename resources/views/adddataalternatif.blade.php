@extends('page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Alternatif</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Alternatif</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add Alternatif</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/alternatif/store')}}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="alternatif" class="col-sm-2 col-form-label">Alternatif</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="alternatif" placeholder="Alternatif" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tinggi_badan" class="col-sm-2 col-form-label">C1</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="tinggi_badan" placeholder="Nilai Kriteria (Tinggi Badan)" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="berat_badan" class="col-sm-2 col-form-label">C2</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="berat_badan" placeholder="Nilai Kriteria (Berat Badan)" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="lingkar_kepala" class="col-sm-2 col-form-label">C3</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="lingkar_kepala" placeholder="Nilai Kriteria (Lingkar Kepala)" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="denyut_jantung" class="col-sm-2 col-form-label">C4</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="denyut_jantung" placeholder="Nilai Kriteria (Denyut Jantung)" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="umur" class="col-sm-2 col-form-label">C5</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="umur" placeholder="Nilai Kriteria (Umur)" required>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success float-right">Create</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection