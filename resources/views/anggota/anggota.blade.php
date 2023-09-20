@extends('template.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Anggota</h1>
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
                <h3 class="card-title">Data Anggota</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('anggota.store') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="kode_anggota">Kode Anggota</label>
                    <input type="number" name="kode_anggota" id="kode_anggota" class="form-control" placeholder="Input Kode Anda">
                  </div>
                  <div class="form-group">
                    <label for="nama_anggota">Nama</label>
                    <input type="text" name="nama_anggota" id="nama_anggota" class="form-control" placeholder="Input Nama Anda">
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                        <select type="text" name="jk_anggota" id="jk_anggota" class="form-control">
                          <option disable selected>Pilih Jenis Kelamin</option>
                          <option value="L">L</option>
                          <option value="P">P</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label>Jurusan</label>
                    <select type="text" name="jurusan_anggota" id="jurusan_anggota" class="form-control">
                      <option disable selected>Pilih Jurusan Anda</option>
                      <option value="RPL">RPL</option>
                      <option value="TKJ">TKJ</option>
                      <option value="TP">TP</option>
                      <option value="TBSM">TBSM</option>
                      <option value="TKRO">TKRO</option>
                      <option value="TFLM">TFLM</option>
                      <option value="TPL">TPL</option>
                      <option value="TPGM">TPGM</option>
                      <option value="TEI">TEI</option>
                      <option value="TITL">TITL</option>
                      <option value="DPIB">DPIB</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="no_telp_anggota">No Telepon</label>
                    <input type="number" name="no_telp_anggota" id="no_telp_anggota" class="form-control" placeholder="Input No Telp Anda">
                  </div>
                  <div class="form-group">
                    <label for="alamat_anggota">Alamat</label>
                    <input type="text" name="alamat_anggota" id="alamat_anggota" class="form-control" placeholder="Input Alamat Anda">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-danger" style="margin-left: 8px">Reset</button>
                  <a href="{{ route('anggota.index') }}"  class="btn btn-small btn-secondary" style="margin-left: 8px">Back</a>
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