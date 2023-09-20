@extends('template.master')

@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Data Anggota</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="kode_anggota">Kode Anggota</label>
                    <input type="number" name="kode_anggota" id="kode_anggota" class="form-control" value="{{$anggotas{0}->kode_anggota}}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="nama_anggota">Nama</label>
                    <input type="text" name="nama_anggota" id="nama_anggota" class="form-control" value="{{$anggotas{0}->nama_anggota}}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="jk_anggota">Jenis Kelamin</label>
                    <input type="text" name="jk_anggota" id="jk_anggota" class="form-control" value="{{$anggotas{0}->jk_anggota}}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="jurusan_anggota">Jurusan</label>
                    <input type="text" name="jurusan_anggota" id="jurusan_anggota" class="form-control" value="{{$anggotas{0}->jurusan_anggota}}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="no_telp_anggota">No Telepon</label>
                    <input type="number" name="no_telp_anggota" id="no_telp_anggota" class="form-control" value="{{$anggotas{0}->no_telp_anggota}}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="alamat_anggota">Alamat</label>
                    <input type="text" name="alamat_anggota" id="alamat_anggota" class="form-control" value="{{$anggotas{0}->alamat_anggota}}" disabled>
                  </div>
                </div>
                <div class="card-footer">
                  <a href="{{ route('anggota.index') }}"  class="btn btn-small btn-secondary">Back</a>
                </div> 
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection