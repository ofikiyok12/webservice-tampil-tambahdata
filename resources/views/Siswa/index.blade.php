@extends('admin-theme._master-siswa')

@section('judul','Data Siswa')

@section('isi')

<div class="row mt-4">
    <div class="col-10">
        <divc class="card">
            <div class="card-header">Data Siswa 
                <a class="btn btn-primary float-right"
                 href="{{ url('/siswa/create') }}" role="button">Tambah</a>
        </div>
            
             <div class="card-body">
                <table class="table table-border">
                     <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama </th>
                            <th>Nim</th>
                            <th>No.Telpon</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($siswa as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data-> nama }}</td>
                            <td>{{ $data-> nim }}</td>
                            <td>{{ $data-> no_telp }}</td>
                            <td>{{ $data-> alamat  }}</td>
                            <td>
                            <form action="{{ url('/siswa',$data->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus?')">
                                    <i class="fas fa-trash"></i> Delete </button>

                                <a href="{{ url('/siswa/edit',$data->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit</a>  
                                
                            </form>
                            </td>
                        </tr>
                        @endforeach
                     </tbody>
                </table>

             </div>
        </div>

    </div>

</div>

@endsection