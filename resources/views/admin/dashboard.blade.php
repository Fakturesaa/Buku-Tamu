<!DOCTYPE html>
<html lang="en">

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
                <a class="brand-mark" href="index.html" aria-label="adminHMD dashboard">
                    <span class="brand-icon"><i class="bi bi-grid-1x2-fill" aria-hidden="true"></i></span>
                    <span class="brand-copy">
                        <span class="brand-title">Buku Tamu</span>
                        <span class="brand-subtitle">Admin Template</span>
                    </span>
                </a>
            </div>

            <nav class="sidebar-nav">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <span class="nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
                    <span class="nav-text">Dashboard</span>
                </a>
                <a class="nav-link" href="{{ route('bukutamu.index') }}">
                    <span class="nav-icon"><i class="bi bi-person-badge" aria-hidden="true"></i></span>
                    <span class="nav-text">Data Tamu</span>
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
                        <input class="form-control search-input" type="search"
                            placeholder="Search users, orders, reports" aria-label="Search">
                    </form>

                    <div class="navbar-actions ms-auto">
                        <button class="icon-button theme-toggle" type="button" data-theme-toggle
                            aria-label="Switch color theme" title="Switch color theme">
                            <i class="bi bi-moon-stars" data-theme-icon aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </nav>

            <main class="dashboard-content">
                <div class="container-fluid px-3 px-lg-4 py-4">
                    <div class="page-heading">
                        <div class="page-heading-copy">
                            <span class="page-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
                            <div>
                                <p class="eyebrow mb-1">Overview</p>
                                <h1 class="h3 mb-1">Dashboard</h1>
                                <p class="text-muted mb-0">Menampilkan Ringkasan Dari Buku Tamu</p>
                            </div>
                        </div>
                    </div>

                    <section class="row g-3 mt-1" aria-label="Dashboard metrics">
                        <div class="col-12 col-sm-6 col-xl-3">
                            <article class="metric-card metric-primary">
                                <div class="metric-top">
                                    <span class="metric-label">Total Tamu</span>
                                    <span class="metric-icon"><i class="bi bi-people-fill"
                                            aria-hidden="true"></i></span>
                                </div>
                                <div class="metric-value">{{ $totalTamu }}</div>
                                <div class="metric-meta">
                                    {{-- <span class="text-success">+12.5%</span>
                  <span>from last month</span> --}}
                                </div>
                            </article>
                        </div>

                        <div class="col-12 col-sm-6 col-xl-3">
                            <article class="metric-card metric-success">
                                <div class="metric-top">
                                    <span class="metric-label">Kunjungan Hari Ini</span>
                                    <span class="metric-icon"><i class="bi bi-bag-check" aria-hidden="true"></i></span>
                                </div>
                                <div class="metric-value">{{ $kunjunganHariIni }}</div>
                                <div class="metric-meta">
                                    {{-- <span class="text-success">+8.2%</span>
                  <span>new orders</span> --}}
                                </div>
                            </article>
                        </div>

                        <div class="col-12 col-sm-6 col-xl-3">
                            <article class="metric-card metric-warning">
                                <div class="metric-top">
                                    <span class="metric-label">Sudah Disetujui</span>
                                    <span class="metric-icon"><i class="bi bi-check-circle-fill"
                                            aria-hidden="true"></i></span>
                                </div>
                                <div class="metric-value">{{ $tamuDisetujui }}</div>
                                <div class="metric-meta">
                                    {{-- <span class="text-success">+5.1%</span>
                  <span>active users</span> --}}
                                </div>
                            </article>
                        </div>

                        <div class="col-12 col-sm-6 col-xl-3">
                            <article class="metric-card metric-danger">
                                <div class="metric-top">
                                    <span class="metric-label">Belum Disetujui</span>
                                    <span class="metric-icon"><i class="bi bi-clock-fill"
                                            aria-hidden="true"></i></span>
                                </div>
                                <div class="metric-value">{{ $tamuBelumDisetujui }}</div>
                                <div class="metric-meta">
                                    {{-- <span class="text-danger">3 urgent</span>
                  <span>need review</span> --}}
                                </div>
                            </article>
                        </div>
                    </section>

                    <section class="row g-3 mt-1">
                        <div class="col-12 col-xl-6">
                            <div class="panel h-100">
                                <div class="panel-header">
                                    <div>
                                        <h2 class="h5 mb-1 section-title"><i class="bi bi-graph-up-arrow"
                                                aria-hidden="true"></i><span>Rekap Kunjungan Tamu</span></h2>
                                        <p class="text-muted mb-0">Jumlah kunjungan tamu yang tercatat setiap bulan.
                                        </p>
                                    </div>
                                      <a class="btn btn-light btn-sm" href="{{ route('bukutamu.index') }}">Lihat Daftar Tamu</a>
                                </div>

                                <div class="chart-bars" role="img"
                                    aria-label="Grafik jumlah kunjungan tamu per bulan">
                                    <div class="chart-column bar-42"><span></span><small>Jan</small></div>
                                    <div class="chart-column bar-58"><span></span><small>Feb</small></div>
                                    <div class="chart-column bar-51"><span></span><small>Mar</small></div>
                                    <div class="chart-column bar-72"><span></span><small>Apr</small></div>
                                    <div class="chart-column bar-66"><span></span><small>Mei</small></div>
                                    <div class="chart-column bar-83"><span></span><small>Jun</small></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-6">
                            <div class="panel h-100">

                                <div class="activity-list">
                                    <div class="panel-header">
                                        <div>
                                            <h2 class="h5 mb-1 section-title"><i class="bi bi-table"
                                                    aria-hidden="true"></i><span>Daftar Tamu</span></h2>
                                            <p class="text-muted mb-0">Catatan tamu yang berkunjung ke sekolah.
                                            </p>
                                        </div>
                                        <input class="form-control form-control-sm table-search" type="search"
                                            placeholder="Cari nama, instansi, atau keperluan"
                                            data-table-search="guestTable" aria-label="Cari data tamu">
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
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="8" class="text-center text-muted py-4">Belum ada data tamu.</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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
