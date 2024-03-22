<?php echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Francois+One&display=swap' rel='stylesheet'>
    <link rel='shortcut icon' href='https://www.bandung.go.id/assets/img/logo.png' type='image/x-icon'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css' rel='stylesheet'>
    <title>Document</title>
    <style>
        footer {
            background-color: #074072;
        }
        .social-media-icon {
            display: flex;
            align-items: center;
        }
        .social-media-icon a {
            color: white;
            margin-right: 10px;
            text-decoration: none;
        }
        .social-media-icon img {
            width: 25px; /* Sesuaikan ukuran gambar sesuai kebutuhan */
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class='container-fluid'>
        <footer class='row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 mt-4 border-top'>
            <div class='col mb-3'>
                <a href='/' class='d-flex align-items-center mb-3 link-dark text-decoration-none'>
                    <img class='bi me-2' width='150' height='120' src='https://www.bandung.go.id/assets/img/logo.png' alt=''>
                </a>
                <p class='text-white'>Jl. Wastukencana No.2 Bandung, Jawa Barat 40117</p>
            </div>

            <div class='col mb-3'></div>

            <div class='col mb-3'>
                <ul class='nav flex-column'>
                    <li class='nav-item mb-2'>
                        <a href='#' class='nav-link p-0 text-white'>Home</a>
                    </li>
                    <li class='nav-item mb-2'>
                        <a href='#' class='nav-link p-0 text-white'>Features</a>
                    </li>

                    <li class='nav-item mb-2'>
                        <a target='_blank' href='https://www.lapor.go.id/instansi/pemerintah-kota-bandung'>
                            <img width='110' src='https://www.bandung.go.id/assets/img/lapor-foot.png' alt=''>
                        </a>
                    </li>
                    <li class='nav-item mb-2'>
                        <a target='_blank' href='https://jdih.bandung.go.id/'>
                            <img width='110' src='https://www.bandung.go.id/assets/img/jdih-foot.png' alt=''>
                        </a>
                    </li>
                    <li class='nav-item mb-2'>
                        <a target='_blank' href='https://jdih.dprd.bandung.go.id/'>
                            <img width='110' src='https://www.bandung.go.id/assets/img/jdih-dprd-foot.png' alt=''>
                        </a>
                    </li>
                </ul>
            </div>
            <div class='col mb-3'>
                <ul class='nav flex-column'>
                    <li class='nav-item mb-4'>
                        <div class='social-media-icon'>
                            <a href='https://twitter.com/humasbandung_' target='_blank'>
                                <i class='fab fa-twitter fa-lg fa-fw'></i> Twitter
                            </a>
                        </div>
                    </li>
                    <li class='nav-item mb-4'>
                        <div class='social-media-icon'>
                            <a href='https://www.instagram.com/humas_bandung/' target='_blank'>
                                <i class='fab fa-instagram fa-lg fa-fw'></i> Instagram
                            </a>
                        </div>
                    </li>
                    <li class='nav-item mb-4'>
                        <div class='social-media-icon'>
                            <a href='https://www.tiktok.com/@humasbdg' target='_blank'>
                              <svg xmlns='http://www.w3.org/2000/svg' width='22' height='22' fill='currentColor' class='bi bi-tiktok' viewBox='0 0 16 16'>
                                <path d='M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z'/>
                              </svg>&nbsp; TikTok
                            </a>
                        </div>
                    </li>
                    <li class='nav-item mb-4'>
                        <div class='social-media-icon'>
                            <a href='https://www.youtube.com/@diskominfokotabandung' target='_blank'>
                                <i class='fab fa-youtube fa-lg fa-fw'></i> YouTube
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
</body>
</html>";
?>