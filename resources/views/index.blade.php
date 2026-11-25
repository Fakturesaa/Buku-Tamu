<!doctype html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#f2f6f7">
	<meta name="description" content="Formulir kunjungan SMK PGRI Wlingi">
	<title>Buku Tamu | SMK PGRI Wlingi</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/adminhmd/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/adminhmd/assets/vendors/bootstrap-icons/bootstrap-icons.css">
	<style>
		:root {
			color-scheme: light;
			--ink: #1f2937;
			--muted: #6b7280;
			--line: #dbe4ef;
			--blue: #2563eb;
			--blue-deep: #111827;
			--coral: #2563eb;
		}

		* { box-sizing: border-box; letter-spacing: 0; }

		body {
			color: var(--ink);
			background: linear-gradient(180deg, #f8fbff 0%, #f5f7fb 42%, #eef4fa 100%);
			font-family: "Segoe UI", Arial, sans-serif;
		}

		h1, h2, h3 { font-family: "Segoe UI", Arial, sans-serif; }

		.site-header {
			border-bottom: 1px solid var(--line);
			background: rgba(255, 255, 255, .96);
			backdrop-filter: blur(12px);
			box-shadow: 0 2px 12px rgba(15, 23, 42, .04);
		}

		.brand-lockup {
			display: inline-flex;
			align-items: center;
			gap: .8rem;
			color: var(--ink);
			text-decoration: none;
		}

		.brand-lockup img { width: 46px; height: 46px; object-fit: contain; }
		.brand-name { display: block; font-family: Manrope, sans-serif; font-size: .92rem; font-weight: 800; line-height: 1.2; }
		.brand-caption { display: block; margin-top: .18rem; color: var(--muted); font-size: .75rem; }
		.header-note { display: inline-flex; align-items: center; gap: .5rem; color: var(--muted); font-size: .88rem; }
		.header-note i { color: #16835d; }

		.page-wrap { width: min(1120px, calc(100% - 2rem)); margin: 0 auto; padding: 2.5rem 0 2rem; }
		.page-intro { max-width: 700px; margin-bottom: 1.5rem; animation: arrive .45s ease both; }
		.page-heading-row {
			display: grid;
			grid-template-columns: repeat(12, minmax(0, 1fr));
			align-items: flex-end;
			column-gap: 1.5rem;
			margin-bottom: 1.5rem;
		}

		.page-heading-row .page-intro {
			grid-column: span 7;
			max-width: 700px;
			margin-bottom: 0;
		}

		.eyebrow {
			display: inline-flex;
			align-items: center;
			gap: .45rem;
			margin-bottom: .85rem;
			color: var(--blue);
			font-size: .76rem;
			font-weight: 800;
			text-transform: uppercase;
		}

		.eyebrow::before { width: 22px; height: 2px; background: var(--blue); content: ""; }
		.page-intro h1 { margin: 0 0 .5rem; font-size: clamp(2rem, 5vw, 2.8rem); }

		.page-intro p { max-width: 600px; margin: 0; color: var(--muted); font-size: 1.04rem; line-height: 1.65; }
		.visit-layout { align-items: stretch; }

		.form-panel {
			height: 100%;
			padding: clamp(1.25rem, 3vw, 2rem);
			border: 1px solid var(--line);
			border-radius: 10px;
			background: #fff;
			box-shadow: 0 18px 46px rgba(15, 23, 42, .09);
			animation: arrive .55s .06s ease both;
		}

		.form-heading { display: flex; align-items: flex-start; gap: .85rem; margin-bottom: 1.5rem; }
		.form-heading-icon {
			color: var(--blue);
			background: #eff6ff;
		}
		.form-heading h2 { margin: 0 0 .25rem; font-size: 1.15rem; font-weight: 800; }
		.form-heading p { margin: 0; color: var(--muted); font-size: .9rem; }
		.field-label { color: #374151; }
		.required-mark { color: #dc2626; }

		.form-control, .form-select {
			border-color: var(--line);
			border-radius: 6px;
		}

		.form-control:focus, .form-select:focus {
			border-color: var(--blue);
			box-shadow: 0 0 0 4px rgba(37, 99, 235, .12);
		}
		.privacy-copy { margin: .15rem 0 1rem; color: var(--muted); font-size: .83rem; line-height: 1.55; }
		.form-check-input:checked {
			border-color: var(--blue);
			background-color: var(--blue);
		}
		.form-check-label { color: #465d69; font-size: .86rem; line-height: 1.5; }

		.submit-button {
			display: inline-flex;
			min-height: 48px;
			align-items: center;
			justify-content: center;
			gap: .6rem;
			padding: .7rem 1.2rem;
			border: 0;
			border-radius: 6px;
			color: #fff;
			background: var(--blue);
			font-weight: 700;
			transition: background .16s ease, transform .16s ease;
		}

		.submit-button:hover { background: #1d4ed8; }
		.form-status { display: none; margin: 1rem 0 0; padding: .8rem .9rem; border-left: 3px solid var(--coral); border-radius: 4px; color: #6b432f; background: #fff4ec; font-size: .86rem; }
		.form-status.is-visible { display: block; }

		.visit-aside {
			display: flex;
			height: 100%;
			min-height: 510px;
			flex-direction: column;
			padding: 1.5rem;
			border: 1px solid var(--line);
			border-radius: 10px;
			color: var(--ink);
			background: #fff;
			box-shadow: 0 18px 46px rgba(15, 23, 42, .09);
		}

		.aside-brand {
			display: flex;
			align-items: center;
			gap: 1rem;
			padding: 1rem;
			border: 1px solid #dbe4ef;
			border-radius: 8px;
			background: #f8fafc;
		}

		.aside-brand img {
			width: 64px;
			height: 64px;
			padding: 4px;
			border: 1px solid #e5e7eb;
			border-radius: 8px;
			background: #fff;
			object-fit: contain;
		}

		.aside-brand strong { color: #1f2937; }
		.aside-brand span { color: var(--muted); }
		.aside-section { padding-top: 1.25rem; }
		.aside-section h2 { color: #1f2937; }

		.arrival-list {
			display: grid;
			gap: .95rem;
			margin: 0;
			padding: 0;
			list-style: none;
		}
		.arrival-list li {
			align-items: center;
			grid-template-columns: 34px 1fr;
			min-height: 54px;
			padding: .65rem .75rem;
			border: 1px solid #e5eaf1;
			border-radius: 8px;
			color: #4b5563;
			background: #fff;
		}
		.arrival-list i {
			display: grid;
			width: 26px;
			height: 26px;
			place-items: center;
			border-radius: 50%;
			color: #2563eb;
			background: #eff6ff;
		}
		.contact-note {
			margin: auto 0 0;
			padding: .85rem 1rem;
			border-radius: 8px;
			color: #4b5563;
			background: #eff6ff;
		}
		.contact-note i { color: #2563eb; }
		.page-footer { padding-top: 1.3rem; color: var(--muted); font-size: .8rem; text-align: center; }

		.clock-card {
			display: flex;
			grid-column: span 5;
			width: 100%;
			min-width: 0;
			align-items: center;
			justify-content: flex-start;
			gap: 1rem;
			margin: 0 0 .15rem;
			padding: .9rem 1.1rem;
			border: 1px solid var(--line);
			border-radius: 10px;
			background: #fff;
			box-shadow: 0 12px 32px rgba(15, 23, 42, .08);
		}

		.clock-icon {
			display: grid;
			width: 48px;
			height: 48px;
			place-items: center;
			flex: 0 0 48px;
			border-radius: 8px;
			color: #2563eb;
			background: #eff6ff;
			font-size: 1.35rem;
		}

		.clock-copy { min-width: 0; }
		.clock-label {
			display: block;
			margin-bottom: .18rem;
			color: var(--muted);
			font-size: .78rem;
			font-weight: 700;
			text-transform: uppercase;
		}

		.clock-time {
			display: block;
			color: #1f2937;
			font-size: 1.15rem;
			font-weight: 800;
			line-height: 1.25;
		}

		.clock-date {
			display: block;
			margin-top: .18rem;
			color: var(--muted);
			font-size: .82rem;
		}

		@keyframes arrive {
			from { opacity: 0; transform: translateY(10px); }
			to { opacity: 1; transform: translateY(0); }
		}

		@media (max-width: 767.98px) {
			.page-wrap { padding-top: 2.2rem; }
			.header-note span { display: none; }
			.page-heading-row {
				display: grid;
				grid-template-columns: 1fr;
				gap: 1rem;
			}
			.page-heading-row .page-intro,
			.clock-card {
				grid-column: 1;
				min-width: 0;
				width: 100%;
			}
		}

		@media (prefers-reduced-motion: reduce) {
			*, *::before, *::after { animation-duration: .01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: .01ms !important; }
		}
	</style>
</head>
<body>
	<header class="site-header">
		<div class="container d-flex align-items-center justify-content-between py-3">
			<a class="brand-lockup" href="/" aria-label="Beranda SMK PGRI Wlingi">
				<img src="/img/SMK.png" alt="Logo SMK PGRI Wlingi">
				<span>
					<span class="brand-name">SMK PGRI WLINGI</span>
					<span class="brand-caption">Buku tamu digital</span>
				</span>
			</a>
			<div class="header-note"><i class="bi bi-shield-check" aria-hidden="true"></i><span>Layanan kunjungan sekolah</span></div>
		</div>
	</header>

	<main class="page-wrap">
		@if (session('success'))
			<div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
				<i class="bi bi-check-circle me-2"></i>{{ session('success') }}
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		@endif

		<div class="page-heading-row">
			<div class="page-intro">
				<span class="eyebrow">Buku Tamu Sekolah</span>
				<h1>Selamat datang di<br>SMK PGRI Wlingi.</h1>
				<p>Silakan isi data kunjungan sebelum menemui warga sekolah. Informasi ini membantu kami menyambut dan mengarahkan Anda dengan baik.</p>
			</div>

			<div class="clock-card" aria-label="Waktu saat ini">
				<span class="clock-icon"><i class="bi bi-clock" aria-hidden="true"></i></span>
				<div class="clock-copy">
					<span class="clock-label">Waktu Sekarang</span>
					<time class="clock-time" id="live-clock">00:00:00</time>
					<span class="clock-date" id="live-date"></span>
				</div>
			</div>
		</div>

		<div class="row g-4 visit-layout">
			<div class="col-12 col-lg-7">
				<section class="form-panel" aria-labelledby="form-title">
					<div class="form-heading">
						<span class="form-heading-icon"><i class="bi bi-person-vcard" aria-hidden="true"></i></span>
						<div>
							<h2 id="form-title">Data kunjungan</h2>
							<p>Kolom bertanda <span class="required-mark">*</span> wajib diisi.</p>
						</div>
					</div>

					<form id="guest-visit-form" action="{{ route('tamu.store') }}" method="POST">
						@csrf
						<div class="row g-3">
							<div class="col-12">
								<label class="form-label field-label" for="guest-name">Nama <span class="required-mark">*</span></label>
								<input class="form-control" id="guest-name" name="nama" type="text" autocomplete="name" placeholder="Masukkan nama pengunjung" required>
							</div>
							<div class="col-12 col-md-6">
								<label class="form-label field-label" for="visitor-status">Status Pengunjung <span class="required-mark">*</span></label>
								<select class="form-select" id="visitor-status" name="status_pengunjung" required>
									<option value="" selected disabled>Pilih status pengunjung</option>
									<option value="Orang Tua / Wali">Orang Tua / Wali</option>
									<option value="Siswa">Siswa</option>
									<option value="Alumni">Alumni</option>
									<option value="Instansi">Instansi</option>
									<option value="Umum">Umum</option>
								</select>
							</div>
							<div class="col-12 col-md-6">
								<label class="form-label field-label" for="visitor-address">Alamat <span class="required-mark">*</span></label>
								<input class="form-control" id="visitor-address" name="alamat" type="text" autocomplete="street-address" placeholder="Masukkan alamat" required>
							</div>
							<div class="col-12">
								<label class="form-label field-label" for="visited-party">Pihak yang Dituju <span class="required-mark">*</span></label>
								<input class="form-control" id="visited-party" name="pihak_yang_dituju" type="text" placeholder="Contoh: Kepala Sekolah, Guru, atau TU" required>
							</div>
							<div class="col-12">
								<label class="form-label field-label" for="guest-purpose">Keperluan <span class="required-mark">*</span></label>
								<textarea class="form-control" id="guest-purpose" name="keperluan" rows="3" placeholder="Masukkan keperluan kunjungan" required></textarea>
							</div>
							<div class="col-12">
								<label class="form-label field-label" for="guest-note">Keterangan <span class="text-muted fw-normal">(opsional)</span></label>
								<textarea class="form-control" id="guest-note" name="keterangan" rows="2" placeholder="Tambahkan keterangan jika diperlukan"></textarea>
							</div>
							<div class="col-12">
								<p class="privacy-copy">Data kunjungan digunakan untuk keperluan administrasi dan keamanan lingkungan sekolah.</p>
								<div class="form-check">
									<input class="form-check-input" id="guest-consent" name="persetujuan" type="checkbox" value="1" required>
									<label class="form-check-label" for="guest-consent">Saya menyatakan data yang diisi benar dan menyetujui penggunaannya untuk pencatatan kunjungan.</label>
								</div>
							</div>
							<div class="col-12 d-flex flex-column flex-sm-row align-items-sm-center gap-3 pt-1">
								<button class="submit-button" type="submit"><i class="bi bi-send" aria-hidden="true"></i>Kirim data kunjungan</button>
							</div>
						</div>
						<p class="form-status" id="form-status" role="status" aria-live="polite">Tampilan formulir sudah siap, tetapi pengiriman belum terhubung ke penyimpanan. Data belum disimpan.</p>
					</form>
				</section>
			</div>

			<aside class="col-12 col-lg-5" aria-label="Informasi kunjungan">
				<div class="visit-aside">
					<div class="aside-brand">
						<img src="/img/SMK.png" alt="">
						<div><strong>SMK PGRI Wlingi</strong><span>Kabupaten Blitar</span></div>
					</div>
					<section class="aside-section">
						<h2>Sebelum berkunjung</h2>
						<ul class="arrival-list">
							<li><i class="bi bi-1-circle" aria-hidden="true"></i><span>Isi data diri dan tujuan kunjungan dengan lengkap.</span></li>
							<li><i class="bi bi-2-circle" aria-hidden="true"></i><span>Setibanya di sekolah, lapor kepada petugas piket atau keamanan.</span></li>
							<li><i class="bi bi-3-circle" aria-hidden="true"></i><span>Ikuti arahan petugas selama berada di lingkungan sekolah.</span></li>
						</ul>
					</section>
					<p class="contact-note"><i class="bi bi-info-circle" aria-hidden="true"></i>Perlu bantuan? Silakan hubungi petugas di meja penerima tamu.</p>
				</div>
			</aside>
		</div>

		<footer class="page-footer">&copy; {{ date('Y') }} SMK PGRI Wlingi</footer>
	</main>

	<script>
		const visitForm = document.getElementById('guest-visit-form');

		visitForm.addEventListener('submit', (event) => {
			if (!visitForm.reportValidity()) {
				event.preventDefault();
			}
		});

		const liveClock = document.getElementById('live-clock');
		const liveDate = document.getElementById('live-date');
		const clockFormatter = new Intl.DateTimeFormat('id-ID', {
			weekday: 'long',
			day: 'numeric',
			month: 'long',
			year: 'numeric'
		});

		function updateLiveClock() {
			const now = new Date();
			liveClock.textContent = new Intl.DateTimeFormat('id-ID', {
				hour: '2-digit',
				minute: '2-digit',
				second: '2-digit',
				hour12: false
			}).format(now);
			liveClock.dateTime = now.toISOString();
			liveDate.textContent = clockFormatter.format(now);
		}

		updateLiveClock();
		setInterval(updateLiveClock, 1000);
	</script>
</body>
</html>
