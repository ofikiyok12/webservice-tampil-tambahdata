@extends('admin-theme._master-uts')

@section('judul','Data Customers')

@section('isi')

<div class="row mt-4">
    <div class="col-10">
        <divc class="card">
            <div class="card-header">Data  
                <a class="btn btn-primary float-right"
                 href="{{ url('/uts/create') }}" role="button">Tambah</a>
        </div>
            
             <div class="card-body">
                <table class="table table-border">
                     <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama </th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($Customer as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data-> nama }}</td>
                            <td>{{ $data-> phone }}</td>
                            <td>{{ $data-> email }}</td>
                            <td>{{ $data-> address  }}</td>
                            <td>
                            <form action="{{ url('/uts',$data->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus?')">
                                    <i class="fas fa-trash"></i> Delete </button>

                                <a href="{{ url('/uts/edit',$data->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit</a>  
                                
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