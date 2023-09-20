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
              <form action="{{ route('petugas.update', $petugass[0]->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                    <label for="nama_petugas">Nama</label>
                    <input type="text" name="nama_petugas" id="nama_petugas" class="form-control @error('nama_petugas') is-invalid @enderror" value="{{$petugass{0}->nama_petugas}}">
                        @error('nama_petugas')
                            <div class="alert alert-danger">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="jabatan_petugas">Jabatan</label>
                        <select name="jabatan_petugas" id="jabatan_petugas" class="form-control @error('jabatan_petugas') is-invalid @enderror" value="{{ $petugass[0]->jabatan_petugas}}">
                        <option value="Kepala Perpustakaans" @if($petugass[0]->jabatan_petugas == 'kepala_petugas') selected @endif>Kepala Perpustakaan</option>
                        <option value="Asisten Kepala Perpustakaan" @if($petugass[0]->jabatan_petugas == 'asisten_petugas') selected @endif>Asisten Kepala Perpustakaan</option>
                        <option value="Administrasi" @if($petugass[0]->jabatan_petugas == 'admin') selected @endif>Administrasi</option>
                        </select>
                        @error('jabatan_petugas')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="no_telp_petugas">No Telepon</label>
                      <input type="number" name="no_telp_petugas" id="no_telp_petugas" class="form-control @error('no_telp_petugas') is-invalid @enderror" value="{{$petugass{0}->no_telp_petugas}}">
                        @error('no_telp_petugas')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="alamat_petugas">Alamat</label>
                      <input type="text" name="alamat_petugas" id="alamat_petugas" class="form-control @error('alamat_petugas') is-invalid @enderror" value="{{$petugass{0}->alamat_petugas}}">
                        @error('alamat_petugas')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- general form elements -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-warning">Update</button>
                  <a href="" class="btn btn-secondary" style="margin-left: 8px;" data-toggle="modal" data-target="#exampleModal">Back</a>
                </div>
              </form>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Peringatan</h5>
      </div>
      <div class="modal-body">
        <p>Anda yakin akan keluar dari form ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a href="{{ route('petugas.index') }}" type="button" class="btn btn-primary">Save changes</a>
      </div>
    </div>
  </div>
</div>
@endsection