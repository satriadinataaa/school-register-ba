@extends('layouts.admin')
@section('content')
     
 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Siswa Terdaftar</h1>
    
    </div>

    <!-- Content Row -->
   <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Asal Sekolah</th>
                            <th>Tanggal Mendaftar</th>
                            <th>Nama Ayah</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1;?>
                       @forelse($students as $item)
                         <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->nik }}</td>
                                <td>{{ $item->school_origin }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->father_name }}</td>
                                <td>
                                    <a href="{{ route('dashboard.show',$item->id) }}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                    <form action="{{ route('dashboard.destroy', $item->id ) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                         </tr>
                         <?php $i++; ?>
                       @empty
                        <tr>
                            <td colspan="7">Data Kosong</td>
                        </tr>
                       @endforelse
                    </tbody>
                </table>
            </div>
        </div>
   </div>

</div>
<!-- /.container-fluid -->
@endsection