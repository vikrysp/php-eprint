
<a class="navbar-brand" href="index.php"><img src="../img/logo2.png" ></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Atur
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="index.php?page=tambah_artikel">Tambah Artikel</a>
              <a class="dropdown-item" href="index.php?page=list_artikel">List Artikel</a>
              <a class="dropdown-item" href="index.php?page=bidang">Bidang Ilmu</a>
              <a class="dropdown-item" href="index.php?page=permintaan">List Permintaan</a>
              <a class="dropdown-item" href="index.php?page=persetujuan">Draft Artikel</a>
              <a class="dropdown-item" href="index.php?page=daftartunggu">Daftar User</a>
            </div>
          </li>
        </ul>
        <div class="container">
          <a class="navbar-brand" href="#"></a>
          <?php echo "Hai, selamat datang ". $_SESSION['nama']; ?>
          <a class="btn btn-primary" href="keluar.php">Keluar</a>
        </div>
      </div>


