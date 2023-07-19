@extends('admin-theme._master-siswa')

@section('judul','Edit Siswa')

@section('isi')

<div class="row mt-4">
    <div class="col-7">
        <!-- <div class="row justify-content-center"> -->
            <div class="card">
                <div class="card-header">Edit Siswa 
                
                    <div class="card-body">
                    <form action="{{ url('/siswa/update', $data->id) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                         <label>Nama </label>
                         <input type="text" name="nama" class="form-control" value="{{ $data->nama }}">
                        </div>

                        <div class="form-group">
                         <label>Nim</label>
                         <input type="text" name="nim" class="form-control"  value="{{ $data->nim }}">
                        </div>

                        <div class="form-group">
                         <label>No.Telpon</label>
                         <input type="text" name="no_telp" class="form-control"  value="{{ $data->no_telp }}">
                        </div>

                        <div class="form-group">
                         <label>Keterangan</label>
                         <textarea name="keterangan" id="" cols="30" rows="2" class="form-control"> {{ $data->alamat }}</textarea>
                        </div>
                  
                         <input type="submit" class="btn btn-primary" name="submit" value="Save "> 
                         <a class="btn btn-warning float-right"
                            href="{{ url('siswa') }}">
                             <i class="fas fa-backward"></i> Cancel</a>
                    </form>
                </div>
            </div>
        <!-- </div> -->
    </div>
 </div>
@endsection