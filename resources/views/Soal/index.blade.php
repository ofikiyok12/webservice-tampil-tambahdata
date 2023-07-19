@extends('admin-theme._master')

@section('judul','Data Soal')

@section('isi')

<div class="row mt-4">
    <div class="col-10">
        <divc class="card">
            <div class="card-header">Data Soal 
                <a class="btn btn-primary float-right"
                 href="{{ url('/test/create') }}" role="button">Tambah</a>
        </div>
            
             <div class="card-body">
                <table class="table table-border">
                     <thead>
                        <tr>
                        <th>No</th>
                            <th>Nama Pengeluaran</th>
                            <th>Keterangan</th>
                            <th>Biaya</th>
                            <th>Nama Konsumen</th>
                            <th>Email Konsumen</th>
                            <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($additionalcosts as $data)
                        <tr>
                        <td>{{ $loop->iteration }}</td>
                            <td>{{ $data-> nama_pengeluaran }}</td>
                            <td>{{ $data-> keterangan }}</td>
                            <td>{{ $data-> biaya }}</td>
                            <td>{{ $data-> nama_konsumen  }}</td>
                            <td>{{ $data-> email_konsumen  }}</td>
                            <td>
                            <form action="{{ url('/test',$data->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus?')">
                                    <i class="fas fa-trash"></i> Delete </button>

                                <a href="{{ url('/test/edit',$data->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit</a>  
                                
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