<!-- Page Wrapper -->
<div id="wrapper">

    @include('template/include/sidebar')
    
    <!-- Begin Page Content -->
    <div class="container-fluid">
    
        @include('template/include/header')
    

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Data Ruangan</h6>
                    <a href="{{ url('/template/tambah_ruangan') }}" class="btn btn-primary"> <i class="fas fa-plus"></i> Tambah </a>
                </div>
            </div>        
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Ruangan</th>
                                <th>Nama Ruangan</th>
                                <th>Lantai</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($ruangans as $index => $ruangan)
                                
                            <tr>
                                <td>{{ $index+1 }}</td>
                                <td>{{ $ruangan->kode_ruangan }}</td>
                                <td>{{ $ruangan->nama_ruangan }}</td>
                                <td>{{ $ruangan->lantai }}</td>
                                <td>
                                    <a href="/template/{{ $ruangan->kode_ruangan }}/edit_ruangan" class="btn btn-warning">
                                        <i class="fas fa-edit"></i> Edit </a>
                                
                                    <form action="/template/{{ $ruangan->kode_ruangan }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fas fa-trash-alt"></i> Delete </button>
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
    <!-- /.container-fluid -->
    
    </div>
    <!-- End of Main Content -->
    
    @include('template/include/footer')
    
    </div>
    <!-- End of Content Wrapper -->
    
    </div>
    <!-- End of Page Wrapper -->