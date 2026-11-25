<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="adminHMD professional admin dashboard template">
    <title>Buku Tamu</title>

    <link rel="stylesheet" href="/adminhmd/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/adminhmd/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/adminhmd/assets/css/style.css">
</head>

<body>
    <div class="admin-shell">
        <div class="sidebar-backdrop" data-sidebar-close></div>

        <aside class="admin-sidebar" id="adminSidebar" aria-label="Main navigation">
            <div class="sidebar-header">
                <a class="brand-mark" href="{{ route('dashboard') }}" aria-label="Dashboard buku tamu">
                    <span class="brand-icon"><i class="bi bi-grid-1x2-fill" aria-hidden="true"></i></span>
                    <span class="brand-copy">
                        <span class="brand-title">Data Tamu</span>
                        <span class="brand-subtitle">Admin Template</span>
                    </span>
                </a>
            </div>

            <nav class="sidebar-nav" aria-label="Navigasi utama">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <span class="nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
                    <span class="nav-text">Dashboard</span>
                </a>
                <a class="nav-link" href="{{ route('bukutamu.index') }}">
                    <span class="nav-icon"><i class="bi bi-person-badge" aria-hidden="true"></i></span>
                    <span class="nav-text">Buku Tamu</span>
                </a>
            </nav>

            <div class="sidebar-footer">
                <span class="status-dot"></span>
                <span class="sidebar-footer-text">System running smoothly</span>
            </div>
        </aside>

        <div class="admin-main">
            <nav class="navbar admin-navbar navbar-expand bg-white">
                <div class="container-fluid px-3 px-lg-4">
                    <button class="sidebar-toggle" type="button" data-sidebar-toggle aria-controls="adminSidebar"
                        aria-expanded="true" aria-label="Toggle sidebar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <form class="d-none d-md-flex ms-3" style="flex: 1 1 0%" role="search">
                        <input class="form-control search-input" type="search" placeholder="Cari data tamu"
                            aria-label="Cari data tamu">
                    </form>

                    <div class="navbar-actions ms-auto">
                        <button class="icon-button theme-toggle" type="button" data-theme-toggle
                            aria-label="Switch color theme" title="Switch color theme">
                            <i class="bi bi-moon-stars" data-theme-icon aria-hidden="true"></i>
                        </button>
                        <div class="dropdown">
                            <button class="icon-button" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                                aria-label="Notifications">
                                <span class="notification-dot"></span>
                                <i class="bi bi-bell" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end notification-menu">
                                <div class="dropdown-header fw-bold text-body">Pemberitahuan</div>
                                <a class="dropdown-item" href="{{ route('bukutamu.index') }}">
                                    <span class="notification-title">Kunjungan baru tercatat</span>
                                    <span class="notification-time">Baru saja</span>
                                </a>
                                <a class="dropdown-item" href="{{ route('bukutamu.index') }}">
                                    <span class="notification-title">Data kunjungan diperbarui</span>
                                    <span class="notification-time">Hari ini</span>
                                </a>
                                <a class="dropdown-item" href="{{ route('bukutamu.index') }}">
                                    <span class="notification-title">Lihat daftar kunjungan</span>
                                    <span class="notification-time">Buku tamu sekolah</span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown">
                            <button class="profile-button dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img class="avatar-img avatar-sm" src="/adminhmd/assets/images/avatar/avatar.jpg"
                                    alt="Admin Hasan">
                                <span class="profile-name d-none d-sm-inline">Administrator</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                                <li><a class="dropdown-item" href="settings.html">Account settings</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="login.html">Sign out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

            <main class="dashboard-content">
                <div class="container-fluid px-3 px-lg-4 py-4">
                    <div class="page-heading">
                        <div class="page-heading-copy">
                            <span class="page-icon"><i class="bi bi-table" aria-hidden="true"></i></span>
                            <div>
                                <p class="eyebrow mb-1">Data</p>
                                <h1 class="h3 mb-1">Buku Tamu</h1>
                                <p class="text-muted mb-0">Daftar kunjungan tamu dan keperluan selama berada di
                                    sekolah.
                                </p>
                            </div>
                        </div>

                    </div>

                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Periksa kembali data yang diisi:</strong>
                            <ul class="mb-0 mt-2">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <section class="panel">
                        <div class="panel-header">
                            <div>
                                <h2 class="h5 mb-1 section-title"><i class="bi bi-table"
                                        aria-hidden="true"></i><span>Daftar Tamu</span></h2>
                                <p class="text-muted mb-0">Catatan tamu yang berkunjung ke sekolah.
                                </p>
                            </div>
                            {{-- <input class="form-control form-control-sm table-search" type="search"
                                placeholder="Cari nama, instansi, atau keperluan" data-table-search="guestTable"
                                aria-label="Cari data tamu"> --}}

                            <!-- Button trigger modal -->


                            {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Tambah Data
                            </button> --}}

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Tamu</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('tamu.store') }}" method="POST">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="row g-3">
                                                    <div class="col-md-6">
                                                        <label for="nama_tamu" class="form-label">Nama</label>
                                                        <input type="text" class="form-control" id="nama_tamu"
                                                            name="nama" placeholder="Masukkan nama pengunjung"
                                                            required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="status_pengunjung" class="form-label">Status
                                                            Pengunjung</label>
                                                        <select class="form-select" id="status_pengunjung"
                                                            name="status_pengunjung" required>
                                                            <option value="" selected disabled>Pilih status
                                                                pengunjung</option>
                                                            <option value="Orang Tua / Wali">Orang Tua / Wali</option>
                                                            <option value="Siswa">Siswa</option>
                                                            <option value="Alumni">Alumni</option>
                                                            <option value="Instansi">Instansi</option>
                                                            <option value="Umum">Umum</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="alamat" class="form-label">Alamat</label>
                                                        <input type="text" class="form-control" id="alamat"
                                                            name="alamat" placeholder="Masukkan alamat" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="pihak_dituju" class="form-label">Pihak yang
                                                            Ditujui</label>
                                                        <input type="text" class="form-control" id="pihak_dituju"
                                                            name="pihak_yang_dituju"
                                                            placeholder="Contoh: Kepala Sekolah, Guru, atau TU"
                                                            required>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="keperluan" class="form-label">Keperluan</label>
                                                        <textarea class="form-control" id="keperluan" name="keperluan" rows="3"
                                                            placeholder="Masukkan keperluan kunjungan" required></textarea>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="keterangan" class="form-label">
                                                            Keterangan <span
                                                                class="text-muted fw-normal">(opsional)</span>
                                                        </label>
                                                        <textarea class="form-control" id="keterangan" name="keterangan" rows="2"
                                                            placeholder="Tambahkan keterangan jika diperlukan"></textarea>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="persetujuan" name="persetujuan" value="1"
                                                                required>
                                                            <label class="form-check-label" for="persetujuan">
                                                                Pengunjung menyetujui pencatatan kunjungan.
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="bi bi-save me-1"></i>Simpan Data
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">

                            <table class="table align-middle mb-0" id="guestTable" data-searchable-table>
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Status Pengunjung</th>
                                        <th>Alamat</th>
                                        <th>Pihak yang Dituju</th>
                                        <th>Keperluan</th>
                                        <th>Keterangan</th>
                                        <th>Persetujuan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($tamus as $index => $tamu)
                                        <tr>
                                            <td class="fw-semibold">{{ str_pad($index + 1, 3, '0', STR_PAD_LEFT) }}</td>
                                            <td>{{ $tamu->nama }}</td>
                                            <td>{{ $tamu->status_pengunjung }}</td>
                                            <td>{{ $tamu->alamat }}</td>
                                            <td>{{ $tamu->pihak_yang_dituju }}</td>
                                            <td>{{ $tamu->keperluan }}</td>
                                            <td>{{ $tamu->keterangan ?: '-' }}</td>
                                            <td>
                                                @if ($tamu->persetujuan)
                                                    <span class="badge text-bg-success">Disetujui</span>
                                                @else
                                                    <span class="badge text-bg-secondary">Belum Disetujui</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                                        data-bs-target="#detailModal{{ $tamu->id }}" aria-label="Lihat detail">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                    <button class="btn btn-warning" type="button" data-bs-toggle="modal"
                                                        data-bs-target="#editModal{{ $tamu->id }}" aria-label="Edit data">
                                                        <i class="bi bi-pencil-fill"></i>
                                                    </button>
                                                    <form action="{{ route('tamu.destroy', $tamu) }}" method="POST"
                                                        onsubmit="return confirm('Hapus data tamu ini?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit" aria-label="Hapus data">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Modal Detail -->
                                        <div class="modal fade" id="detailModal{{ $tamu->id }}" tabindex="-1"
                                            aria-labelledby="detailModalLabel{{ $tamu->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h2 class="modal-title fs-5">Detail Tamu</h2>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <dl class="row mb-0">
                                                            <dt class="col-5">Nama</dt><dd class="col-7">{{ $tamu->nama }}</dd>
                                                            <dt class="col-5">Status</dt><dd class="col-7">{{ $tamu->status_pengunjung }}</dd>
                                                            <dt class="col-5">Alamat</dt><dd class="col-7">{{ $tamu->alamat }}</dd>
                                                            <dt class="col-5">Pihak Ditujui</dt><dd class="col-7">{{ $tamu->pihak_yang_dituju }}</dd>
                                                            <dt class="col-5">Keperluan</dt><dd class="col-7">{{ $tamu->keperluan }}</dd>
                                                            <dt class="col-5">Keterangan</dt><dd class="col-7">{{ $tamu->keterangan ?: '-' }}</dd>
                                                            <dt class="col-5">Persetujuan</dt>
                                                            <dd class="col-7">{{ $tamu->persetujuan ? 'Disetujui' : 'Belum Disetujui' }}</dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal Edit -->
                                        <div class="modal fade" id="editModal{{ $tamu->id }}" tabindex="-1"
                                            aria-labelledby="editModalLabel{{ $tamu->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h2 class="modal-title fs-5">Edit Data Tamu</h2>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form action="{{ route('tamu.update', $tamu) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <div class="row g-3">
                                                                <div class="col-md-6">
                                                                    <label class="form-label" for="nama{{ $tamu->id }}">Nama</label>
                                                                    <input class="form-control" id="nama{{ $tamu->id }}" name="nama" value="{{ $tamu->nama }}" required>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="form-label" for="status{{ $tamu->id }}">Status Pengunjung</label>
                                                                    <select class="form-select" id="status{{ $tamu->id }}" name="status_pengunjung" required>
                                                                        @foreach (["Orang Tua / Wali", 'Siswa', 'Alumni', 'Instansi', 'Umum'] as $status)
                                                                            <option value="{{ $status }}" @selected($tamu->status_pengunjung === $status)>{{ $status }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="form-label" for="alamat{{ $tamu->id }}">Alamat</label>
                                                                    <input class="form-control" id="alamat{{ $tamu->id }}" name="alamat" value="{{ $tamu->alamat }}" required>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="form-label" for="pihak{{ $tamu->id }}">Pihak yang Ditujui</label>
                                                                    <input class="form-control" id="pihak{{ $tamu->id }}" name="pihak_yang_dituju" value="{{ $tamu->pihak_yang_dituju }}" required>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label" for="keperluan{{ $tamu->id }}">Keperluan</label>
                                                                    <textarea class="form-control" id="keperluan{{ $tamu->id }}" name="keperluan" rows="3" required>{{ $tamu->keperluan }}</textarea>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label" for="keterangan{{ $tamu->id }}">Keterangan (opsional)</label>
                                                                    <textarea class="form-control" id="keterangan{{ $tamu->id }}" name="keterangan" rows="2">{{ $tamu->keterangan }}</textarea>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="persetujuan{{ $tamu->id }}" name="persetujuan" value="1" @checked($tamu->persetujuan)>
                                                                        <label class="form-check-label" for="persetujuan{{ $tamu->id }}">Pencatatan kunjungan disetujui.</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <tr>
                                            <td colspan="9" class="text-center text-muted py-4">Belum ada data tamu.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </main>

            <footer class="admin-footer">
                <div class="container-fluid px-3 px-lg-4">
                    <span>&copy; 2026 Buku Tamu Sekolah</span>
                    <span>Sistem pencatatan kunjungan tamu.</span>
                </div>
            </footer>
        </div>
    </div>

    <script src="/adminhmd/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/adminhmd/assets/js/main.js"></script>
</body>

</html>
