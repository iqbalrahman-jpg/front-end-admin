@include('parts/header')
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="{{ asset('images/logos/logo-2.png') }}" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/beranda" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Paket Wisata</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/paket" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Paket</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link active" href="/wisata" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Wisata</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/kategori" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Kategori</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-card.html" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Fasilitas</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/galeri" aria-expanded="false">
                <span>
                  <i class="ti ti-album"></i>
                </span>
                <span class="hide-menu">Galeri</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Member</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/akun" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Akun</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Transaksi</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/transaksi-paket" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Paket Wisata</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/transaksi-member" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Member</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="{{ asset('images/profile/user-1.jpg') }}" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Wisata</h5>
              <div class="card">
                <div class="card-body">
                  <form action="/wisata/edit" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="kategori" class="form-label">Kategori Wisata</label><br>
                      <select name="kategori" id="kategori">
                        <option value="{{ $data['kategori']['_id'] }}">{{ $data['kategori']['nama_kategori'] }}</option>
                      @foreach($data['kategori_wisata'] as $kat)
                      <?php if($kat['_id'] != $data['kategori']['_id']) { ?>
                        <option value="{{ $kat['_id'] }}">{{ $kat['nama_kategori'] }}</option>
                      <?php } else{} ?>
                      @endforeach
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="nama" class="form-label">Nama Wisata</label>
                      <input type="text" class="form-control" name="nama" id="nama" value="{{ $data['wisata']['nama_wisata'] }}" required>
                    </div>
                      <input type="hidden" class="form-control" name="id" value="{{ $data['wisata']['_id'] }}">
                    <div class="mb-3">
                      <label for="deskripsi" class="form-label">Deskripsi Wisata</label>
                      <textarea class="form-control" name="deskripsi" id="deskripsi" required>{{ $data['wisata']['deskripsi_wisata'] }}</textarea>
                    </div>
                    <div class="mb-3">
                      <label for="status" class="form-label">Status</label><br>
                      <select name="status" id="status">
                        <?php if($data['wisata']['status'] == 0) { ?>
                        <option value="0">Tidak Aktif</option>
                        <option value="1">Aktif</option>
                        <?php } else { ?>
                        <option value="1">Aktif</option>
                        <option value="0">Tidak Aktif</option>
                        <?php } ?>
                      </select>
                    </div> 
                    <button type="submit" class="btn btn-primary">Update Data</button>
                  </form>
                </div>
              </div>
            <button type="button" class="btn btn-warning m-1"><a style="color: white;" href="/wisata">Kembali</a></button>
          </div>
        </div>
      </div>
    </div>
  </div>
@include('parts/footer')

<style>
  option {
    padding: 5px;
    border-radius: 5px;
    border: 1px solid red;
  }
  select {
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #5d87ff;
    border-radius: 5px;
  }
</style>