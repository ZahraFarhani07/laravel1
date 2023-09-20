@extends('template.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Petugas</h1>
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
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Petugas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('petugas.store') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_petugas">Nama</label>
                    <input type="text" name="nama_petugas" id="nama_petugas" class="form-control" placeholder="Input Nama Petugas">
                  </div>
                  <div class="form-group">
                    <label for="jabatan_petugas">Jabatan</label>
                    <select type="text" name="jabatan_petugas" id="jabatan_petugas" class="form-control">
                          <option disable selected>Pilih Jabatan Petugas</option>
                          <option value="Kepala Perpustakaan">Kepala Perpustakaan</option>
                          <option value="Asisten Kepala Perpustakaan">Asisten Kepala Perpustakaan</option>
                          <option value="Administrasi">Administrasi</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="no_telp_petugas">No Telepon</label>
                    <input type="number" name="no_telp_petugas" id="no_telp_petugas" class="form-control" placeholder="Input No Telp Petugas">
                  </div>
                  <div class="form-group">
                    <label for="alamat_petugas">Alamat</label>
                    <input type="text" name="alamat_petugas" id="alamat_petugas" class="form-control" placeholder="Input Alamat Petugas">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-danger" style="margin-left: 8px">Reset</button>
                  <a href="{{ route('petugas.index') }}"  class="btn btn-small btn-secondary" style="margin-left: 8px">Back</a>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- general form elements -->
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection