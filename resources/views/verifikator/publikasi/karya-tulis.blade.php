@extends('verifikator.layout')

@section('pageHeading')
  {{ __('Karya Tulis') }}
@endsection

@section('sidebar')
<li class="menu-item">
    <a href="/verifikator/beranda" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Beranda">Beranda</div>
    </a>
</li>
<li class="menu-item active open">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div data-i18n="Klaim Pencapaian">FAIP Pencapaian</div>
    </a>
    <ul class="menu-sub">
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <div data-i18n="Data Pribadi">Data Pribadi</div>
            </a>
            <ul class="menu-sub ps-2">
                <li class="menu-item">
                    <a href="/verifikator/data-pribadi/pendidikan-formal" class="menu-link">
                        <div data-i18n="Pendidikan Formal">Pendidikan Formal</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/verifikator/data-pribadi/organisasi" class="menu-link">
                        <div data-i18n="Organisasi">Organisasi</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/verifikator/data-pribadi/tanda-penghargaan" class="menu-link">
                        <div data-i18n="Tanda Penghargaan">Tanda Penghargaan</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/verifikator/data-pribadi/pelatihan" class="menu-link">
                        <div data-i18n="Pelatihan">Pelatihan</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/verifikator/data-pribadi/sertifikat" class="menu-link">
                        <div data-i18n="Sertifikat">Sertifikat</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <div data-i18n="Kode Etik Insinyur">Kode Etik Insinyur</div>
            </a>
            <ul class="menu-sub ps-2">
                <li class="menu-item">
                    <a href="/verifikator/kode-etik-insinyur/referensi" class="menu-link">
                        <div data-i18n="Referensi">Referensi</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/verifikator/kode-etik-insinyur/pengertian" class="menu-link">
                        <div data-i18n="Pengertian">Pengertian</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="/verifikator/kualifikasi-profesional" class="menu-link">
                <div data-i18n="Kualifikasi Profesional">Kualifikasi Profesional</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="/verifikator/pengalaman-mengajar" class="menu-link">
                <div data-i18n="Pengalaman Mengajar">Pengalaman Mengajar</div>
            </a>
        </li>
        <li class="menu-item active open">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <div data-i18n="Publikasi">Publikasi</div>
            </a>
            <ul class="menu-sub ps-2">
                <li class="menu-item active">
                    <a href="/verifikator/publikasi/karya-tulis" class="menu-link">
                        <div data-i18n="Karya Tulis">Karya Tulis</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/verifikator/publikasi/makalah" class="menu-link">
                        <div data-i18n="Makalah/ Tulisan">Makalah/ Tulisan</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/verifikator/publikasi/seminar" class="menu-link">
                        <div data-i18n="Seminar/ Lokakarya">Seminar/ Lokakarya</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/verifikator/publikasi/karya-temuan" class="menu-link">
                        <div data-i18n="Karya Temuan">Karya Temuan</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="/verifikator/bahasa" class="menu-link">
                <div data-i18n="Bahasa">Bahasa</div>
            </a>
        </li>
    </ul>
</li>
<li class="menu-item">
    <a href="/verifikator/akun" class="menu-link">
        <i class="menu-icon tf-icons bx bx-user"></i>
        <div data-i18n="Akun">Akun</div>
    </a>
</li>
<li class="menu-item">
    <a href="/verifikator/login" class="menu-link">
        <i class="menu-icon tf-icons bx bx-power-off"></i>
        <div data-i18n="Logout">Logout</div>
    </a>
</li>
@endsection

@section('content')
<div class="card">
    <div
      class="d-flex align-items-center justify-content-between"
    >
      <h5 class="card-header">
        Karya Tulis di Bidang Keinsinyuran yang Dipublikasikan
      </h5>
    </div>
    <div class="table-responsive mx-3 mb-2 text-center">
      <table class="table table-hover">
        <thead class="align-middle">
          <tr>
            <th>#</th>
            <th>Bulan-Tahun</th>
            <th>Judul Karya Tulis</th>
            <th>Nama Media Publikasi</th>
            <th>Lokasi</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            {{-- V.1 KOLOM B --}}
            <td><strong>Januari - 2023</strong></td>
            {{-- V.1 KOLOM C --}}
            <td>Karya Tulis Satu</td>
            {{-- V.1 KOLOM D --}}
            <td>Kompas</td>
            {{-- V.1 KOLOM E --}}
            <td>Palembang</td>
            {{-- Status Data FAIP, Kalo belum diverifikasi atau divalidasi, statusnyo masih "Pending" --}}
            <td>
              <span class="badge bg-label-warning me-1"
                >Pending</span
              >
            </td>
            {{-- Status Data FAIP, Kalo dah diverifikasi oleh verifikator dan hasilnyo valid, statusnyo jadi "Valid" --}}
            {{-- <td>
              <span class="badge bg-label-success me-1"
                >Valid</span
              >
            </td> --}}
            {{-- Status Data FAIP, Kalo dah diverifikasi oleh verifikator dan hasil datanyo tidak valid, statusnyo jadi "Invalid" --}}
            {{-- <td>
              <span class="badge bg-label-danger me-1"
                >Invalid</span
              >
            </td> --}}
            <td>
              <a
                href="/verifikator/publikasi/karya-tulis/periksa"
                class="btn btn-sm btn-primary"
                >Periksa</a
              >
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            {{-- V.1 KOLOM B --}}
            <td><strong>Januari - 2023</strong></td>
            {{-- V.1 KOLOM C --}}
            <td>Karya Tulis Satu</td>
            {{-- V.1 KOLOM D --}}
            <td>Kompas</td>
            {{-- V.1 KOLOM E --}}
            <td>Palembang</td>
            {{-- Status Data FAIP, Kalo belum diverifikasi atau divalidasi, statusnyo masih "Pending" --}}
            <td>
              <span class="badge bg-label-warning me-1"
                >Pending</span
              >
            </td>
            {{-- Status Data FAIP, Kalo dah diverifikasi oleh verifikator dan hasilnyo valid, statusnyo jadi "Valid" --}}
            {{-- <td>
              <span class="badge bg-label-success me-1"
                >Valid</span
              >
            </td> --}}
            {{-- Status Data FAIP, Kalo dah diverifikasi oleh verifikator dan hasil datanyo tidak valid, statusnyo jadi "Invalid" --}}
            {{-- <td>
              <span class="badge bg-label-danger me-1"
                >Invalid</span
              >
            </td> --}}
            <td>
              <a
                href="/verifikator/publikasi/karya-tulis/periksa"
                class="btn btn-sm btn-primary"
                >Periksa</a
              >
            </td>
          </tr>
        </tbody>
      </table>
      <div class="d-flex justify-content-between mt-3 mx-1">
        <div><small>Showing 1 to 2 of 2 entries</small></div>
        <div>
          <nav aria-label="Page navigation">
            <ul class="pagination pagination-sm">
              <li class="page-item prev">
                <a class="page-link" href="javascript:void(0);"
                  ><i class="tf-icon bx bx-chevron-left"></i
                ></a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="javascript:void(0);"
                  >1</a
                >
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0);"
                  >2</a
                >
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0);"
                  >3</a
                >
              </li>
              <li class="page-item next">
                <a class="page-link" href="javascript:void(0);"
                  ><i class="tf-icon bx bx-chevron-right"></i
                ></a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
@endsection
