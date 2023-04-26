@extends('admin-theme._master')

@section('judul','Edit Soal')

@section('isi')

<div class="row mt-4">
    <div class="col-7">
        <!-- <div class="row justify-content-center"> -->
            <div class="card">
                <div class="card-header">Edit Soal 
                
                    <div class="card-body">
                    <form action="{{ url('/test/update', $data->id) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                         <label>Nama Matakuliah</label>
                         <input type="text" name="nama_mk" class="form-control" value="{{ $data->nama_mk }}">
                        </div>

                        <div class="form-group">
                         <label>Dosen</label>
                         <input type="text" name="dosen" class="form-control"  value="{{ $data->dosen }}">
                        </div>

                        <div class="form-group">
                         <label>Jumlah Soal</label>
                         <input type="text" name="jumlah_soal" class="form-control"  value="{{ $data->jumlah_soal }}">
                        </div>

                        <div class="form-group">
                         <label>Keterangan</label>
                         <textarea name="keterangan" id="" cols="30" rows="2" class="form-control"> {{ $data->keterangan }}</textarea>
                        </div>
                  
                         <input type="submit" class="btn btn-primary" name="submit" value="Save Soal "> 
                         <a class="btn btn-warning float-right"
                            href="{{ url('test') }}">
                             <i class="fas fa-backward"></i> Cancel</a>
                    </form>
                </div>
            </div>
        <!-- </div> -->
    </div>
 </div>
@endsection