<style>
  /* CSS untuk sidebar */
  .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      width: 250px;
      height: 100vh;
      background-color: #f5f5f5;
      transition: transform 0.3s ease-in-out;
      z-index: 1000;
  }

  .sidebar.collapsed {
      transform: translateX(-100%);
  }

  /* CSS untuk toggle burger */
  .burger-menu {
      position: fixed;
      top: 20px;
      left: 20px;
      z-index: 1001;
      cursor: pointer;
  }

  .burger-menu span {
      display: block;
      width: 30px;
      height: 4px;
      background-color: #333;
      margin: 5px auto;
      border-radius: 5px;
      transition: all 0.3s ease-in-out;
  }

  .burger-menu.collapsed span:first-of-type {
      transform: rotate(45deg) translate(7px, 7px);
  }

  .burger-menu.collapsed span:last-of-type {
      transform: rotate(-45deg) translate(7px, -7px);
  }

  /* CSS untuk konten */
  .content {
      margin-left: 250px;
      padding: 20px;
  }
</style>
</head>
<body>
<div class="container-fluid">
  <div class="row">
      <div class="sidebar">
        @if (Auth::user()->role == 'admin')
        <div class="card greeting-card mb-3 mt-5">
            <div class="card-header">
                <h5 class="card-title">Selamat datang, Admin!</h5>
            </div> 
          </div>

          <ul class="list-unstyled">
              <li class="form-control mt-4"></i> User</li>
              <li><a href="{{ route('i-user') }}" class="btn btn-primary mt-2 form-control">Data User</a></li>
              <li><a href="{{ route('c-user') }}" class="btn btn-warning mt-1 form-control">Tambah User</a></li>
          </ul>

          <ul class="list-unstyled">
            <li class="form-control mt-4"><i class="fa-solid fa-book"></i> Buku</li>
            <li><a href="{{ route('i-buku') }}" class="btn btn-primary mt-2 form-control">Buku</a></li>
            <li><a href="{{ route('i-buku') }}" class="btn btn-warning mt-1 form-control">Tambah Buku</a></li>
        </ul>
          <ul class="list-unstyled">
              <li class="form-control mt-4"><i class="fa-solid fa-user-group"></i> Anggota</li>
              <li><a href="{{ route('i-anggota') }}" class="btn btn-primary mt-2 form-control">Anggota</a></li>
              <li><a href="{{ route('i-anggota') }}" class="btn btn-warning mt-1 form-control">Tambah Anggota</a></li>
          </ul>
          @endif

          @if (Auth::user()->role == 'petugas')
          <div class="card greeting-card mb-3 mt-5">
            <div class="card-header">
                <h5 class="card-title">Selamat Datang {{ Auth::user()->name }} !</h5>
            </div> 
          </div>
          
          <ul class="list-unstyled">
              <li class="form-control mt-4"><i class="fa-solid fa-folder-plus"></i> Peminjaman</li>
              <li>
                    <a href="{{ route('i-peminjaman') }}" class="btn btn-primary mt-2 form-control">Peminjaman</a>
                    <a href="{{ route('i-peminjaman') }}" class="btn btn-warning form-control mt-1"><i class="fa-solid fa-square-plus"></i> Tambah Peminjaman</a> 
              </li>
          </ul>

          <ul class="list-unstyled">
              <li class="form-control mt-4"><i class="fa-solid fa-folder-plus"></i> Pengembalian</li>
              <li>
                    <a href="{{ route('i-pengembalian') }}" class="btn btn-primary mt-2 form-control">Pengembalian</a>
              </li>
          </ul>
          @endif

            <a href="{{ route('logout') }}" class="btn btn-danger form-control">Log-Out</a>
      </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaCVzHMOm beurj8B9Lzw+7i5U+TKj50+i7s8ps9VQdqpq" crossorigin="anonymous"></script>
<script>
  const sidebar = document.querySelector('.sidebar');
  const burgerMenu = document.querySelector('.burger-menu');

  burgerMenu.addEventListener('click', () => {
      sidebar.classList.toggle('collapsed');
      burgerMenu.classList.toggle('collapsed');
  });
</script>