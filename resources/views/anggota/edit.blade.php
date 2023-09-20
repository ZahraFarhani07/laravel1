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
              <form action="{{ route('anggota.update', $anggotas[0]->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                      <label for="kode_anggota">Kode Anggota</label>
                      <input type="number" name="kode_anggota" id="kode_anggota" class="form-control @error('kode_anggota') is-invalid @enderror" value="{{$anggotas{0}->kode_anggota}}">
                      @error('kode_anggota')
                            <div class="alert alert-danger">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="nama_anggota">Nama</label>
                      <input type="text" name="nama_anggota" id="nama_anggota" class="form-control @error('nama_anggota') is-invalid @enderror" value="{{$anggotas{0}->nama_anggota}}">
                        @error('nama_anggota')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="jk_anggota">Jenis Kelamin</label>
                        <select name="jk_anggota" id="jk_anggota" class="form-control @error('jk_anggota') is-invalid @enderror" value="{{ $anggotas[0]->jk_anggota }}">
                        <option value="L" @if($anggotas[0]->jk_anggota == 'L') selected @endif>L</option>
                        <option value="P" @if($anggotas[0]->jk_anggota == 'P') selected @endif>P</option>
                        </select>
                        @error('jk_anggota')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="jurusan_anggota">Jurusan</label>
                      <select name="jurusan_anggota" id="jurusan_anggota" class="form-control @error('jurusan_anggota') is-invalid @enderror" value="{{$anggotas{0}->jurusan_anggota}}">
                        <option value="RPL" @if($anggotas[0]->jurusan_anggota == 'RPL') selected @endif>RPL</option>
                        <option value="TKJ" @if($anggotas[0]->jurusan_anggota == 'TKJ') selected @endif>TKJ</option>
                        <option value="TP" @if($anggotas[0]->jurusan_anggota == 'TP') selected @endif>TP</option>
                        <option value="TBSM" @if($anggotas[0]->jurusan_anggota == 'TBSM') selected @endif>TBSM</option>
                        <option value="TKRO" @if($anggotas[0]->jurusan_anggota == 'TKRO') selected @endif>TKRO</option>
                        <option value="TFLM" @if($anggotas[0]->jurusan_anggota == 'TFLM') selected @endif>TFLM</option>
                        <option value="TPL" @if($anggotas[0]->jurusan_anggota == 'TPL') selected @endif>TPL</option>
                        <option value="TPGM" @if($anggotas[0]->jurusan_anggota == 'TPGM') selected @endif>TPGM</option>
                        <option value="TEI" @if($anggotas[0]->jurusan_anggota == 'TEI') selected @endif>TEI</option>
                        <option value="TITL" @if($anggotas[0]->jurusan_anggota == 'TITL') selected @endif>TITL</option>
                        <option value="DPIB" @if($anggotas[0]->jurusan_anggota == 'DPIB') selected @endif>DPIB</option>
                      </select>
                        @error('jurusan_anggota')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="no_telp_anggota">No Telepon</label>
                      <input type="number" name="no_telp_anggota" id="no_telp_anggota" class="form-control @error('no_telp_anggota') is-invalid @enderror" value="{{$anggotas{0}->no_telp_anggota}}">
                        @error('no_telp_anggota')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="alamat_anggota">Alamat</label>
                      <input type="text" name="alamat_anggota" id="alamat_anggota" class="form-control @error('alamat_anggota') is-invalid @enderror" value="{{$anggotas{0}->alamat_anggota}}">
                        @error('alamat_anggota')
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
        <a href="{{ route('anggota.index') }}" type="button" class="btn btn-primary">Save changes</a>
      </div>
    </div>
  </div>
</div>
@endsection