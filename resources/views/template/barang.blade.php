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
                <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
                <a href="{{ url('/template/tambah_barang') }}" class="btn btn-primary"> <i class="fas fa-plus"></i> Tambah </a>
            </div>
        </div>        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Merek</th>
                            <th>Jumlah</th>
                            <th>Asal Barang</th>
                            <th>Kondisi</th>
                            <th>Ketersediaan</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($barangs as $index => $barang)
                            
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td>{{ $barang->kode_barang }}</td>
                            <td>{{ $barang->nama_barang }}</td>
                            <td>{{ $barang->merek }}</td>
                            <td>{{ $barang->jumlah }}</td>
                            <td>{{ $barang->asal_barang }}</td>
                            <td>{{ $barang->kondisi }}</td>
                            <td>{{ $barang->ketersediaan }}</td>
                            
                            <td>
                                <a href="/template/{{ $barang->kode_barang }}/edit_barang" class="btn btn-warning">
                                    <i class="fas fa-edit"></i> Edit </a>
                            
                                <form action="/template/{{ $barang->kode_barang }}" method="POST">
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