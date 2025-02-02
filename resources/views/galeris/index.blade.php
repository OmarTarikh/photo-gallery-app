
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Galeri Foto</title>

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
                    <span>Dashboard</span></a>
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
                <a class="nav-link" href="{{ route('users.index') }}"">
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

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

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
                            <h6 class="m-0 font-weight-bold text-primary">Data Tabel Foto</h6>
                            <div class="d-flex gap-2">
                                <button type="button" class="btn btn-md btn-primary d-flex align-items-center gap-1" data-bs-toggle="modal" data-bs-target="#tambahGaleriModal">
                                    TAMBAH DATA
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24">
                                        <path fill="#fff" d="M11 13H6q-.425 0-.712-.288T5 12t.288-.712T6 11h5V6q0-.425.288-.712T12 5t.713.288T13 6v5h5q.425 0 .713.288T19 12t-.288.713T18 13h-5v5q0 .425-.288.713T12 19t-.712-.288T11 18z"/>
                                    </svg>
                                </button>
                                <a href="{{ route('galeris.pdf') }}" class="btn btn-danger d-flex align-items-center gap-2" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                            <path fill="#fff" d="M13.586 2a2 2 0 0 1 1.284.467l.13.119L19.414 7a2 2 0 0 1 .578 1.238l.008.176V20a2 2 0 0 1-1.85 1.995L18 22H6a2 2 0 0 1-1.995-1.85L4 20V4a2 2 0 0 1 1.85-1.995L6 2zM12 4H6v16h12V10h-4.5a1.5 1.5 0 0 1-1.493-1.356L12 8.5zm.988 7.848a6.22 6.22 0 0 0 2.235 3.872c.887.717.076 2.121-.988 1.712a6.22 6.22 0 0 0-4.47 0c-1.065.41-1.876-.995-.989-1.712a6.22 6.22 0 0 0 2.235-3.872c.178-1.127 1.8-1.126 1.977 0m-.99 2.304l-.688 1.196h1.38zM14 4.414V8h3.586z" />
                                        </g>
                                    </svg>
                                    EXPORT PDF
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr style="font-size:16px;">
                                        <th style="color:#858796">NO</th>
                                        <th style="color:#858796">ID</th>
                                        <th style="color:#858796">GAMBAR</th>
                                        <th style="color:#858796">JUDUL FOTO</th>
                                        <th style="color:#858796">DESKRIPSI FOTO</th>
                                        <th style="color:#858796">TANGGAL UNGGAH</th>
                                        <th style="color:#858796">ALBUM</th>
                                        <th style="color:#858796">AKSI</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($galeris as $galeri)
                                        <tr style="font-size:15px">
                                            <td style="color:#858796">{{ $loop->iteration }}.</td>
                                            <td style="color:#858796">{{ $galeri->FotoID }}</td>
                                            <td class="text-center">
                                                <img src="{{ asset('/storage/galeris/'.$galeri->LokasiFile) }}" class="rounded" style="width: 100px">
                                            </td>
                                            <td style="color:#858796">{{ $galeri->JudulFoto }}</td>
                                            <td style="color:#858796">{{ $galeri->DeskripsiFoto }}</td>
                                            <td style="color:#858796">{{ $galeri->TanggalUnggah }}</td>
                                            <td style="color:#858796">{{ $galeri->album->NamaAlbum ?? 'Tidak ada album' }}</td>
                                            <td class="text-center">
                                                <div class="d-flex flex-column justify-content-center align-items-center gap-2">
                                                    <!-- Show Button -->
                                                    <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#showGaleriModal-{{ $galeri->FotoID }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                                            <path fill="#fff" d="M12 9a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3m0 8a5 5 0 0 1-5-5a5 5 0 0 1 5-5a5 5 0 0 1 5 5a5 5 0 0 1-5 5m0-12.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5"/>
                                                        </svg>
                                                    </button>

                                                    <!-- Edit Button -->
                                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editGaleriModal-{{ $galeri->FotoID }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                                            <g fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                                <path d="M7 7H6a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2v-1"/>
                                                                <path d="M20.385 6.585a2.1 2.1 0 0 0-2.97-2.97L9 12v3h3zM16 5l3 3"/>
                                                            </g>
                                                        </svg>
                                                    </button>

                                                    <!-- Delete Button -->
                                                    <form onsubmit="return confirm('Apakah Anda Yakin?');" action="{{ route('galeris.destroy', $galeri->FotoID) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                                                <path fill="#fff" d="M7 21q-.825 0-1.412-.587T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413T17 21zm2-4h2V8H9zm4 0h2V8h-2z"/>
                                                            </svg>
                                                        </button>
                                                    </form>

                                                    <!-- Like Button -->
                                                    <form action="{{ route('galeris.like', $galeri->FotoID) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        <input type="hidden" name="id_foto" value="{{ $galeri->FotoID }}">  <!-- Add this hidden field -->
                                                        <button type="submit" class="btn btn-success btn-sm">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                                                <path fill="#fff" d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5A5.5 5.5 0 0 1 12 3a5.5 5.5 0 0 1 10 5.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                                                            </svg>
                                                        </button>
                                                    </form>

                                                    <!-- Comment Button -->
                                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#commentModal-{{ $galeri->FotoID }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                                            <path fill="#fff" d="M12 2a10 10 0 0 1 10 10a9.99 9.99 0 0 1-8.84 9.92v2.01a.5.5 0 0 1-.81.39L8.74 20H7A10 10 0 0 1 12 2m-4 6h8v2H8V8m0 4h5v2H8v-2Z"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Modal-Show -->
                                        <div class="modal fade" id="showGaleriModal-{{ $galeri->FotoID }}" tabindex="-1" aria-labelledby="showGaleriModalLabel-{{ $galeri->FotoID }}" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="showGaleriModalLabel-{{ $galeri->FotoID }}">Detail Galeri</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <!-- Image Column -->
                                                            <div class="col-md-4 text-center">
                                                                <img src="{{ asset('storage/galeris/'.$galeri->LokasiFile) }}" class="img-thumbnail rounded mb-3" style="width: 100%;">
                                                            </div>
                                                            <!-- Text Column -->
                                                            <div class="col-md-8">
                                                                <h4>{{ $galeri->JudulFoto }}</h4>
                                                                <p class="mt-3">{{ $galeri->DeskripsiFoto }}</p>
                                                                <div class="form-group">
                                                                    <label class="font-weight-bold">ALBUM</label>
                                                                    <p>{{ $galeri->album->NamaAlbum ?? 'Tidak ada album' }}</p>
                                                                </div>
                                                                <small class="text-muted">Tanggal Unggah: {{ $galeri->TanggalUnggah }}</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Modal-Show -->
                                        <!-- Modal-Edit -->
                                        <div class="modal fade" id="editGaleriModal-{{ $galeri->FotoID }}" tabindex="-1" aria-labelledby="editGaleriModalLabel-{{ $galeri->FotoID }}" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editGaleriModalLabel-{{ $galeri->FotoID }}">Edit Data Foto</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('galeris.update', $galeri->FotoID) }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">GAMBAR</label>
                                                                <input type="file" class="form-control" name="LokasiFile">
                                                                <small class="text-muted">Kosongkan jika tidak ingin mengganti gambar.</small>
                                                                <br>
                                                                <img src="{{ asset('storage/galeris/'.$galeri->LokasiFile) }}" class="img-thumbnail mt-2" style="width: 150px;">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">JUDUL FOTO</label>
                                                                <input type="text" class="form-control" name="JudulFoto" value="{{ $galeri->JudulFoto }}" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">DESKRIPSI FOTO</label>
                                                                <textarea class="form-control" name="DeskripsiFoto" rows="5" required>{{ $galeri->DeskripsiFoto }}</textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">TANGGAL UNGGAH</label>
                                                                <input type="date" class="form-control" name="TanggalUnggah" value="{{ $galeri->TanggalUnggah }}" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">ALBUM</label>
                                                                <select class="form-control" name="AlbumID" required>
                                                                    <option value="">Pilih Album</option>
                                                                    @foreach ($albums as $album)
                                                                        <option value="{{ $album->AlbumID }}" {{ $album->AlbumID == $galeri->AlbumID ? 'selected' : '' }}>
                                                                            {{ $album->NamaAlbum }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Modal-Edit -->
                                        <!-- Comment Modal -->
                                        <div class="modal fade" id="commentModal-{{ $galeri->FotoID }}" tabindex="-1" aria-labelledby="commentModalLabel-{{ $galeri->FotoID }}" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="commentModalLabel-{{ $galeri->FotoID }}">Comments for "{{ $galeri->JudulFoto }}"</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <!-- Comment Form -->
                                                        <form action="{{ route('galeris.comment', $galeri->FotoID) }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="id_foto" value="{{ $galeri->FotoID }}">
                                                            <div class="mb-3">
                                                                <label for="comment" class="form-label">Write a Comment:</label>
                                                                <textarea name="isi" class="form-control" placeholder="Write your comment..." rows="3" required></textarea>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Submit Comment</button>
                                                        </form>

                                                        <hr>

                                                        <!-- Existing Comments -->
                                                        <h6>Comments:</h6>
                                                        <div style="max-height: 300px; overflow-y: auto;">
                                                            @foreach ($galeri->comments as $comment)
                                                                <div class="border p-2 rounded mb-2">
                                                                    <strong>{{ $comment->user->name }}</strong> <small class="text-muted">{{ \Carbon\Carbon::parse($comment->tanggal)->format('d M Y, H:i') }}</small>
                                                                    <p class="mb-0">{{ $comment->isi }}</p>
                                                                </div>
                                                            @endforeach

                                                            @if ($galeri->comments->isEmpty())
                                                                <p class="text-muted">No comments yet.</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Comment Modal -->

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
            <div class="modal fade" id="tambahGaleriModal" tabindex="-1" aria-labelledby="tambahGaleriModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahGaleriModalLabel">Tambah Data Galeri</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('galeris.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="LokasiFile" class="form-label">Gambar</label>
                                    <input type="file" class="form-control" id="LokasiFile" name="LokasiFile" required>
                                    <small class="text-muted">Upload gambar dengan format JPG, JPEG, atau PNG (maksimal 2 MB).</small>
                                </div>
                                <div class="mb-3">
                                    <label for="JudulFoto" class="form-label">Judul Foto</label>
                                    <input type="text" class="form-control" id="JudulFoto" name="JudulFoto" placeholder="Masukkan Judul Foto" required>
                                </div>
                                <div class="mb-3">
                                    <label for="DeskripsiFoto" class="form-label">Deskripsi Foto</label>
                                    <textarea class="form-control" id="DeskripsiFoto" name="DeskripsiFoto" rows="3" placeholder="Masukkan Deskripsi Foto"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="TanggalUnggah" class="form-label">Tanggal Unggah</label>
                                    <input type="date" class="form-control" id="TanggalUnggah" name="TanggalUnggah" required>
                                </div>
                                <div class="mb-3">
                                    <label for="AlbumID" class="form-label">Album</label>
                                    <select class="form-control" id="AlbumID" name="AlbumID" required>
                                        <option value="">Pilih Album</option>
                                        @foreach ($albums as $album)
                                            <option value="{{ $album->AlbumID }}">{{ $album->NamaAlbum }}</option>
                                        @endforeach
                                    </select>
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