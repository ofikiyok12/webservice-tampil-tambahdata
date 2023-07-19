@extends('admin-theme._master-uts')

@section('judul','Edit Biaya')

@section('isi')

<div class="row mt-4">
    <div class="col-7">
        <!-- <div class="row justify-content-center"> -->
            <div class="card">
                <div class="card-header">Edit Biaya
                
                    <div class="card-body">
                    <form action="{{ url('/uts/update', $data->id) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                         <label>Nama Konsumen</label>
                         <input type="text" name="nama_konsumen" class="form-control" value="{{ $data->nama_konsumen }}">
                        </div>

                        <div class="form-group">
                         <label>Email Konsumen</label>
                         <input type="text" name="email_konsumen" class="form-control" value="{{ $data->email_konsumen }}">
                        </div>

                        <div class="form-group">
                         <label>Jumlah Biaya</label>
                         <input type="text" name="jumlah_biaya" class="form-control"  value="{{ $data->jumlah_biaya }}">
                        </div>

                        <div class="form-group">
                         <label>Tanggal Transaksil</label>
                         <input type="date" name="tanggal_transaksi" class="form-control"  value="{{ $data->tanggal_transaksi }}">
                        </div>

                        <div class="form-group">
                         <label>Keterangan</label>
                         <textarea name="keterangan" id="" cols="30" rows="2" class="form-control"> {{ $data->keterangan }}</textarea>
                        </div>
                  
                         <input type="submit" class="btn btn-primary" name="submit" value="Save "> 
                         <a class="btn btn-warning float-right"
                            href="{{ url('uts') }}">
                             <i class="fas fa-backward"></i> Cancel</a>
                    </form>
                </div>
            </div>
        <!-- </div> -->
    </div>
 </div>
@endsection