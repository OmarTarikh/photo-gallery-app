<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Album</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Custom fonts for this template -->
    <link href="{{asset('template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('template/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{asset('template/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35px" height="35px" viewBox="0 0 24 24"><path fill="#fff" d="M17 9a2 2 0 1 1-4 0a2 2 0 0 1 4 0"/><path fill="#fff" fill-rule="evenodd" d="M12 1.25C6.063 1.25 1.25 6.063 1.25 12S6.063 22.75 12 22.75S22.75 17.937 22.75 12S17.937 1.25 12 1.25m-.818 14.112l-4.29-4.29a2.3 2.3 0 0 0-3.14-.104l-1.001.894a9.25 9.25 0 1 1 16.858 5.4l-1.833-1.663a3 3 0 0 0-3.731-.225l-.299.21a2 2 0 0 1-2.564-.222" clip-rule="evenodd"/></svg>
                </div>
                <div class="sidebar-brand-text mx-3">ATO Gallery</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 3.5v17m11.5-11h-17M3 9.4c0-2.24 0-3.36.436-4.216a4 4 0 0 1 1.748-1.748C6.04 3 7.16 3 9.4 3h5.2c2.24 0 3.36 0 4.216.436a4 4 0 0 1 1.748 1.748C21 6.04 21 7.16 21 9.4v5.2c0 2.24 0 3.36-.436 4.216a4 4 0 0 1-1.748 1.748C17.96 21 16.84 21 14.6 21H9.4c-2.24 0-3.36 0-4.216-.436a4 4 0 0 1-1.748-1.748C3 17.96 3 16.84 3 14.6z"/></svg>
                    <span>Tabel Galeri</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Data Tabel:</h6>
                        <a class="collapse-item" href="{{ route('galeris.index') }}">Tabel Foto</a>
                        <a class="collapse-item" href="{{ route('albums.index') }}">Tabel Album</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><g fill="none" stroke="#fff" stroke-width="1.5"><circle cx="9" cy="9" r="2"/><path d="M13 15c0 1.105 0 2-4 2s-4-.895-4-2s1.79-2 4-2s4 .895 4 2Z"/><path d="M2 12c0-3.771 0-5.657 1.172-6.828S6.229 4 10 4h4c3.771 0 5.657 0 6.828 1.172S22 8.229 22 12s0 5.657-1.172 6.828S17.771 20 14 20h-4c-3.771 0-5.657 0-6.828-1.172S2 15.771 2 12Z"/><path stroke-linecap="round" d="M19 12h-4m4-3h-5m5 6h-3"/></g></svg>
                    <span>Tabel Users</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24"><path fill="#c6c6c6" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4"/></svg>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>

                                <!-- Logout Form -->
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Data Tabel Album</h6>
                            <button type="button" class="btn btn-md btn-primary mb-0" data-bs-toggle="modal" data-bs-target="#tambahAlbumModal">
                                TAMBAH DATA
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr style="font-size:16px;">
                                        <th style="color:#858796">NO</th>
                                        <th style="color:#858796">ID ALBUM</th>
                                        <th style="color:#858796">NAMA ALBUM</th>
                                        <th style="color:#858796">DESKRIPSI</th>
                                        <th style="color:#858796">TANGGAL DIBUAT</th>
                                        <th style="color:#858796">TOTAL FOTO</th>
                                        <th style="color:#858796">AKSI</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($albums as $album)
                                        <tr style="font-size:15px">
                                            <td style="color:#858796">{{ $loop->iteration }}.</td>
                                            <td style="color:#858796">{{ $album->AlbumID }}</td>
                                            <td style="color:#858796">{{ $album->NamaAlbum }}</td>
                                            <td style="color:#858796">{{ $album->Deskripsi }}</td>
                                            <td style="color:#858796">{{ $album->TanggalDibuat }}</td>
                                            <td style="color:#858796">{{ $album->TotalFoto }}</td>
                                            <td class="text-center">
                                                <div class="d-flex justify-content-center align-items-center gap-2">
                                                    <!-- Show Button -->
                                                    <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#showAlbumModal-{{ $album->AlbumID }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path fill="#fff" d="M12 9a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3m0 8a5 5 0 0 1-5-5a5 5 0 0 1 5-5a5 5 0 0 1 5 5a5 5 0 0 1-5 5m0-12.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5"/></svg>
                                                    </button>
                                                    <!-- Edit Button -->
                                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editAlbumModal-{{ $album->AlbumID }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><g fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M7 7H6a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2v-1"/><path d="M20.385 6.585a2.1 2.1 0 0 0-2.97-2.97L9 12v3h3zM16 5l3 3"/></g></svg>
                                                    </button>
                                                    <!-- Delete Button -->
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('albums.destroy', $album->AlbumID) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path fill="#fff" d="M7 21q-.825 0-1.412-.587T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413T17 21zm2-4h2V8H9zm4 0h2V8h-2z"/></svg>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Modal-Show-Album -->
                                        <div class="modal fade" id="showAlbumModal-{{ $album->AlbumID }}" tabindex="-1" role="dialog" aria-labelledby="showAlbumModalLabel-{{ $album->AlbumID }}" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="showAlbumModalLabel-{{ $album->AlbumID }}">Foto dalam Album: {{ $album->NamaAlbum }}</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            @if ($album->galeris && $album->galeris->isNotEmpty())
                                                                @foreach ($album->galeris as $galeri)
                                                                    <div class="col-md-4 mb-4">
                                                                        <div class="card">
                                                                            <img src="{{ asset('storage/galeris/' . $galeri->LokasiFile) }}" 
                                                                                class="card-img-top img-thumbnail" 
                                                                                alt="Foto" 
                                                                                style="height: 150px; object-fit: cover;">
                                                                            <div class="card-body">
                                                                                <h5 class="card-title text-center">{{ $galeri->JudulFoto }}</h5>
                                                                                <p class="card-text">
                                                                                    <strong>ID Foto:</strong> {{ $galeri->FotoID }}<br>
                                                                                    <strong>Deskripsi:<br></strong> {{ $galeri->DeskripsiFoto }}<br>
                                                                                    <strong>Tanggal Unggah:<br></strong> {{ $galeri->TanggalUnggah }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            @else
                                                                <div class="col-12">
                                                                    <p class="text-muted text-center">Tidak ada foto dalam album ini.</p>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Modal-Show-Album -->
                                        <!-- Modal-Edit-Album -->
                                        <div class="modal fade" id="editAlbumModal-{{ $album->AlbumID }}" tabindex="-1" role="dialog" aria-labelledby="editAlbumModalLabel-{{ $album->AlbumID }}" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editAlbumModalLabel-{{ $album->AlbumID }}">Edit Data Album</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('albums.update', $album->AlbumID) }}" method="POST">
                                                            @csrf
                                                            @method('PUT')

                                                            <div class="form-group">
                                                                <label class="font-weight-bold">NAMA ALBUM</label>
                                                                <input type="text" class="form-control" name="NamaAlbum" value="{{ $album->NamaAlbum }}" required>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="font-weight-bold">DESKRIPSI</label>
                                                                <textarea class="form-control" name="Deskripsi" rows="5" required>{{ $album->Deskripsi }}</textarea>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="font-weight-bold">TANGGAL DIBUAT</label>
                                                                <input type="date" class="form-control" name="TanggalDibuat" value="{{ $album->TanggalDibuat }}" required>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="font-weight-bold">TOTAL FOTO</label>
                                                                <input type="number" class="form-control" name="TotalFoto" value="{{ $album->TotalFoto }}" readonly>
                                                                <small class="text-muted">Total Foto dihitung secara otomatis berdasarkan foto yang diunggah.</small>
                                                            </div>

                                                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Modal-Edit-Album -->
                                        @empty
                                        <tr>
                                            <td colspan="7" class="text-center">Data Album belum tersedia.</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            
            <!-- Modal-Create -->
                <div class="modal fade" id="tambahAlbumModal" tabindex="-1" aria-labelledby="tambahAlbumModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="tambahAlbumModalLabel">Tambah Data Album</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('albums.store') }}" method="POST">
                                    @csrf
                                    <!-- Nama Album -->
                                    <div class="mb-3">
                                        <label for="NamaAlbum" class="form-label">Nama Album</label>
                                        <input type="text" class="form-control" id="NamaAlbum" name="NamaAlbum" placeholder="Masukkan Nama Album" required>
                                    </div>
                                    <!-- Deskripsi -->
                                    <div class="mb-3">
                                        <label for="Deskripsi" class="form-label">Deskripsi</label>
                                        <textarea class="form-control" id="Deskripsi" name="Deskripsi" rows="3" placeholder="Masukkan Deskripsi Album"></textarea>
                                    </div>
                                    <!-- Tanggal Dibuat -->
                                    <div class="mb-3">
                                        <label for="TanggalDibuat" class="form-label">Tanggal Dibuat</label>
                                        <input type="date" class="form-control" id="TanggalDibuat" name="TanggalDibuat" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- End of Modal-Create -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Omar Tarikh 2025</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('template/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('template/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('template/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('template/js/demo/datatables-demo.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        @if(session()->has('success'))
            toastr.success('{{ session('success') }}', 'BERHASIL!');
        @elseif(session()->has('error'))
            toastr.error('{{ session('error') }}', 'GAGAL!');
        @endif
    </script>

</body>

</html>
