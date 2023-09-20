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
                <h3 class="card-title">Data Petugas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_petugas">Nama</label>
                    <input type="text" name="nama_petugas" id="nama_petugas" class="form-control" value="{{$petugass{0}->nama_petugas}}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="jabatan_petugas">Jabatan</label>
                    <input type="text" name="jabatan_petugas" id="jabatan_petugas" class="form-control" value="{{$petugass{0}->jabatan_petugas}}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="no_telp_petugas">No Telepon</label>
                    <input type="number" name="no_telp_petugas" id="no_telp_petugas" class="form-control" value="{{$petugass{0}->no_telp_petugas}}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="alamat_petugas">Alamat</label>
                    <input type="text" name="alamat_petugas" id="alamat_petugas" class="form-control" value="{{$petugass{0}->alamat_petugas}}" disabled>
                  </div>
                </div>
                <div class="card-footer">
                  <a href="{{ route('petugas.index') }}"  class="btn btn-small btn-secondary">Back</a>
                </div> 
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection