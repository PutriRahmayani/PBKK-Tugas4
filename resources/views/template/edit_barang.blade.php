<!DOCTYPE html>
<html>
<head>
    <!-- Your head content here -->
</head>
<body class="bg-gradient-primary">
    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('template/include/sidebar')

        <div class="container">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5 text-center">
                                <h1 class="h4 text-gray-900 mb-4">Edit Data Barang</h1>

                                <div class="form-group">
                                    <input
                                        type="email"
                                        class="form-control form-control-user"
                                        id="kode_barang"
                                        placeholder="Kode Barang"
                                    />
                                </div>

                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control form-control-user"
                                        id="nama_barang"
                                        placeholder="Nama Barang"
                                    />
                                </div>

                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control form-control-user"
                                        id="merek"
                                        placeholder="Merek"
                                    />
                                </div>

                                <div class="form-group">
                                    <input
                                        type="number"
                                        class="form-control form-control-user"
                                        id="jumlah"
                                        placeholder="Jumlah"
                                    />
                                </div>

                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control form-control-user"
                                        id="asal_barang"
                                        placeholder="Asal Barang"
                                    />
                                </div>

                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control form-control-user"
                                        id="kondisi"
                                        placeholder="Kondisi"
                                    />
                                </div>

                                <div class="form-group">
                                    <input
                                        type="email"
                                        class="form-control form-control-user"
                                        id="exampleInputEmail"
                                        placeholder="Ketersediaan"
                                    />
                                </div>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-fw"></i> Edit </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div id="footer" style="position: fixed; bottom: 0; width: 100%;">
        @include('template/include/footer')
    </div>
</body>
</html>
