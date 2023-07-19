@extends('admin-theme._master-uts')

@section('judul','Create Siswa')

@section('isi')

<div class="row mt-4">
    <div class="col-6">
        <divc class="card">
            <div class="card-header">Create Siswa 
                
                <div class="card-body ">
                    <form action="{{ url('/uts/store') }}" method="post">
                        @csrf
                        <div class="form-group">
                         <label>Nama Kostumer</label>
                         <input type="text" name="nama" class="form-control">
                        </div>

                        <div class="form-group">
                         <label>Phone</label>
                         <input type="number" name="phone" class="form-control">
                        </div>

                        <div class="form-group">
                         <label>Email</label>
                         <input type="text" name="email" class="form-control">
                        </div>

                        <div class="form-group">
                         <label>Address</label>
                         <input type="text" name="address" class="form-control">
                        </div>

        
                  
                         <input type="submit" class="btn btn-primary" name="submit" value="Save"> 
                         <a class="btn btn-warning float-right"
                            href="{{ url('uts') }}">
                             <i class="fas fa-backward"></i> Cancel</a>
                    </form>
             </div>
        </div>
    </div>
 </div>
@endsection