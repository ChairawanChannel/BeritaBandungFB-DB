<!DOCTYPE php>
<php lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Berita Bandung</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="https://www.bandung.go.id/assets/img/logo.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  </head>

  <body>
    <?php include 'nav.php'; ?>
    <div class="mt-5 p-5 text-white" style="
        background-image: url(Bandung_City_06.jpg);
        background-size: 100%;
        background-position: 100%;
      " id="beranda">
      <div class="container">
        <h1 class="text-center my-4 text-white">Berita Bandung</h1>
        <p class="text-center text-white">
          Temukan berita seputar Bandung di sini.
        </p>
      </div>
    </div>
    <div class="listfeatures">
      <div class="container" id="berita">
        <div class="mainwrap">
          <div class="sectionrow">
            <div class="featsection">
              <div class="xsection__header">
                <h1 class="xsection__title">Berita</h1>
              </div>
              <ul class="feature-list">
                <a href="index.php">
                  <li class="feature-item">Semua</li>
                </a>
                <a href="infrastruktur.php">
                  <li class="feature-item">Infrastruktur</li>
                </a>
                <a href="olahraga.php">
                  <li class="feature-item">Olahraga</li>
                </a>
                <a href="ekonomi.php">
                  <li class="feature-item all">Ekonomi</li>
                </a>
                <a href="keagamaan.php">
                  <li class="feature-item">Keagamaan</li>
                </a>
              </ul>

              <div class="container mt-5">
                <div class="row">
                  <div class="col-md-4 mb-4">
                    <div class="card border-0" style="background-color: transparent">
                      <a href="Diskop UKM Pastikan 140 PKL Terdata di Alun-alun Berangsur Pindah ke Basemen.php">
                        <img src="https://img.bandung.go.id/images/news/2023/12/24/thumb/170338667773-diskop-ukm-pastikan-140-pkl-terdata-di-alun-alun-berangsur-pindah-ke-basemen-thumb.jpg" class="card-img-top" alt="Sosialisasikan Makanan B2SA, Yonzipur 9/1 Gelar Lomba Memasak" />
                      </a>
                      <div class="card-body">
                        <p class="card-text">
                          Diskop UKM Pastikan 140 PKL Terdata di Alun-alun Berangsur Pindah ke Basemen
                        </p>
                        <a href="Diskop UKM Pastikan 140 PKL Terdata di Alun-alun Berangsur Pindah ke Basemen.php" class="button-detail">Lihat Detail</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card border-0" style="background-color: transparent">
                      <a href="#">
                        <img src="https://img.bandung.go.id/images/news/2023/12/23/thumb/170332517722-cukur-gratis-bayar-sepuasnya-di-gebyar-akhir-tahun-baznas-kota-bandung-thumb.jpeg" class="card-img-top" alt="&#039;Cukur Gratis Bayar Sepuasnya&#039; di Gebyar Akhir Tahun Baznas Kota Bandung" />
                      </a>
                      <div class="card-body">
                        <p class="card-text">
                          &#039;Cukur Gratis Bayar Sepuasnya&#039; di Gebyar Akhir Tahun Baznas Kota Bandung
                        </p>
                        <a href="#" class="button-detail">Lihat Detail</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container" id="buku-tamu">
      <h1 class="xsection__title">Buku Tamu</h1>
      <div class="row">
        <div class="col-md-12">
          <form action="config.php" method="post" class="w-100">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" name="name" required />
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" name="email" required />
            </div>
            <div class="form-group">
              <label for="comment">Comment:</label>
              <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn-submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <?php include 'footer.php'; ?>
  </body>

</php>