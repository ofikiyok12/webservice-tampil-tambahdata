@extends('admin-theme._master-siswa')

@section('judul','Create Siswa')

@section('isi')

<div class="row mt-4">
    <div class="col-6">
        <divc class="card">
            <div class="card-header">Create Siswa 
                
                <div class="card-body">
                    <form action="{{ url('/siswa/store') }}" method="post">
                        @csrf
                        <div class="form-group">
                         <label>Nama Mahasiswa</label>
                         <input type="text" name="nama" class="form-control">
                        </div>

                        <div class="form-group">
                         <label>Nim</label>
                         <input type="text" name="nim" class="form-control">
                        </div>

                        <div class="form-group">
                         <label>No.Telpon</label>
                         <input type="text" name="no_telp" class="form-control">
                        </div>

                        <div class="form-group">
                         <label>Alamat</label>
                         <textarea name="alamat" id="" cols="30" rows="2" class="form-control"></textarea>
                        </div>
                  
                         <input type="submit" class="btn btn-primary" name="submit" value="Save"> 
                         <a class="btn btn-warning float-right"
                            href="{{ url('siswa') }}">
                             <i class="fas fa-backward"></i> Cancel</a>
                    </form>
             </div>
        </div>
    </div>
 </div>
@endsection