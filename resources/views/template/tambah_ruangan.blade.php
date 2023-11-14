<body class="bg-gradient-primary">
    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('template/include/sidebar')

        <div class="container" style="max-width: 800px;">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5 text-center">
                                <h1 class="h4 text-gray-900 mb-4">Tambah Data Ruangan</h1>

                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control form-control-user"
                                        id="kode_ruangan"
                                        placeholder="Kode Ruangan"
                                    />
                                </div>

                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control form-control-user"
                                        id="nama_ruangan"
                                        placeholder="Nama Ruangan"
                                    />
                                </div>

                                <div class="form-group">
                                    <select class="form-control form-control-user" id="kondisi">
                                        <option value="">Lantai</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab  fa-fw"></i> Tambah </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        @include('template/include/footer')
    </div>
</body>
</html>
