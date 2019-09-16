<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="@csrf">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- externalCSS -->
    <link rel="stylesheet" href="{{ assets('css/home_style.css') }}">
    <!-- FontAwsome -->
    <link rel="stylesheet" href="{{ assets('fontawesome-free-5.9.0-web/css/all.min.css') }}" type="text/css"> <!--Font Awsome-->

    <title>Bootcamp Doscom 2019</title>
  </head>
  <body>
      <div class="purple-dark">
          <div class="navigasi container">
              <nav class="navbar navbar-expand-lg" id="navmenu">
                  <a class="navbar-brand text-light scroll-page" href="#"><h1>Bootcamp</h1></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item active">
                        <a class="nav-link text-light btn-one scroll-page mt-3" href="#tentang-acara">Tentang Acara</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-light px-4 btn-one scroll-page mt-3" href="#waktu-biaya">Waktu</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-light px-4 btn-one scroll-page mt-3" href="#waktu-biaya">Biaya</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-light px-4 mb-3 mr-5 btn-one scroll-page mt-3" href="#kontak">Kontak</a>
                      </li>
                    </ul>
                    <span class="text-light mr-3 py-1 px-4 " id="btn-masuk">Masuk</span>
                    <span class="text-light py-1 px-4" id="btn-daftar">Daftar</span>
                  </div>
                </nav>
          </div>
          <!-- kenal dengan kami -->
          <div class="intro text-light fullscreen" id="intro">
              <div class="container h-100">
                  <div class="row h-100 align-content-center">
                      <div class="col-md-6 ">
                          <div class="doscom mx-3">
                              <p class="font-weight-bold">
                                  <h1>Ingin Kenal Kami?</h1>
                                  <h1>Yuk Ikutan Sekarang</h1>
                              </p>
                                <p class="mt-4" id="rata-tengah">
                                    Suatu acara yang bertujuan untuk memperkenalkan DOSCOM dan mempererat rasa kekeluargaan seluruh anggota.
                                </p>
                                <div class="btn text-light mt-4 py-1 px-5" id="btn-daftar">
                                    <p>Daftar</p>
                                </div>
                          </div>
                      </div>
                      <div class="col-md-6" id="hide-gambar">
                          <img class="mx-auto d-block" src="http://duncanlock.net/images/posts/better-figures-images-plugin-for-pelican/dummy-200x200.png" alt="">
                      </div>
                    </div>
                </div>
            </div>
      </div>
      <!-- Bootcamp itu apa? -->
      <div class="Tentang fullscreen py-1" id="tentang-acara">
          <div class="container h-100">
              <div class="row h-100 align-content-center">
                  <div class="col-md-6">
                      <div class="apa-itu-bootcamp mx-3 mt-5" id="apa-itu-bootcamp">
                        <h1>Apa itu Bootcamp?</h1>
                        <p class="my-5" id="gsr">
                            Bootcamp adalah suatu kegiatan yang bertujuan untuk <br> memperkenalkan DOSCOM
                            kepada mahasiswa baru dan <br> mempererat rasa kekeluargaan seluruh anggota.
                            <div id="dokumentasi"><a href="#" style="color:#9b21d3">Lihat dokumentasi kegiatan bootcamp <i class="fas fa-arrow-right"></i></a></div>
                        </p>
                      </div>
                  </div>
                  <div class="col-md-6 mt-5">
                      <div class="benefit">
                        <ul class="list-unstyled">
                            <li class="media">
                              <img class="mr-3" src="/resources/assets/icons/game-icon.png" alt="Generic placeholder image">
                              <div class="media-body">
                                <h5 class="mt-0 my-2 my">Ilmu yang bermanfaat</h5>
                                Menyebarkan & membagikan ilmu merupakan hal yang seru.
                              </div>
                            </li>
                            <li class="media my-4">
                              <img class="mr-3" src="/resources/assets/icons/teman-icon.png" alt="Generic placeholder image">
                              <div class="media-body">
                                <h5 class="mt-0 my-2">Teman-teman baru</h5>
                                Banyak teman yang asyik dan menyenangkan menunggumu.
                              </div>
                            </li>
                            <li class="media">
                              <img class="mr-3" src="/resources/assets/icons/game-icon.png" alt="Generic placeholder image">
                              <div class="media-body">
                                <h5 class="mt-0 my-2">Kegiatan seru & games</h5>
                                Kegiatan sharing dibungkus dalam games akan sangat menyenangkan.
                              </div>
                            </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Galeri bootcamp -->
      <div class="Galeri fullscreen pt-5" id="galeri">
          <div class="container text-center h-100 align-content-center">
              <span class="text-center text-light">
                  <h1 class="pt-5">Galeri kegiatan</h1>
                  <p class="my-4">Dokumentasi kegiatan selama bootcamp dari tahun ke tahun.</p>
              </span>
              <div class="list-gambar my-5">
                  <div class="row">
                      <div class="col-6 col-sm-6  col-md-3  my-2">
                          <img class="img-thumbnail hover-gmbr" src="/resources/assets/icons/game-odd-icon.png" alt="">
                      </div>
                      <div class="col-6 col-sm-6  col-md-3 my-2">
                          <img class="img-thumbnail hover-gmbr" src="/resources/assets/icons/game-odd-icon.png" alt="">
                      </div>
                      <div class="col-6 col-sm-6  col-md-3 my-2">
                          <img class="img-thumbnail hover-gmbr" src="/resources/assets/icons/game-odd-icon.png" alt="">
                      </div>
                      <div class="col-6 col-sm-6  col-md-3 my-2">
                          <img class="img-thumbnail hover-gmbr" src="/resources/assets/icons/game-odd-icon.png" alt="">
                      </div>
                      <div class="col-6 col-sm-6  col-md-3 my-2">
                          <img class="img-thumbnail hover-gmbr" src="/resources/assets/icons/game-odd-icon.png" alt="">
                      </div>
                      <div class="col-6 col-sm-6  col-md-3 my-2">
                          <img class="img-thumbnail hover-gmbr" src="/resources/assets/icons/game-odd-icon.png" alt="">
                      </div>
                      <div class="col-6 col-sm-6  col-md-3 my-2">
                          <img class="img-thumbnail hover-gmbr" src="/resources/assets/icons/game-odd-icon.png" alt="">
                      </div>
                      <div class="col-6 col-sm-6  col-md-3 my-2">
                          <img class="img-thumbnail hover-gmbr" src="/resources/assets/icons/game-odd-icon.png" alt="">
                      </div>
                  </div>
              </div>
                <a href="#" class="btn text-light " id="foto-booctcamp">
                    <p>Lihat lebih banyak</p>
                </a>
          </div>
      </div>
      <!-- Biaya dan etc -->
      <div class="Biaya-dan-lainya fullscreen" id="waktu-biaya">
          <div class="container h-100">
              <div class="row h-100 align-content-center">
                  <div class="col-md-6 my-5">
                      <div id="info-regis" class="mx-3">
                            <h1>
                                Berapa biaya <br> Registrasinya?
                            </h1>
                            <p class="my-4">Untuk harga tiketnya adalah Rp.70000
                            include fasilitas disamping dan hanya tersedia untuk 40 orang pendaftar.</p>
                            <span>
                                <a href="#" style="color:#9b21d3">Daftar sekarang <i class="fas fa-arrow-right"></i></a>
                            </span>
                      </div>
                  </div>
                  <div class="col-md-6 mx-auto">
                          <div class="row acara mb-5">
                              <div class="col-6 col-sm-4 col-md-4 py-2 px-2 list-acara" id="list-acara">
                                        <img class=" mx-auto d-block " src="/resources/assets/icons/waktu-icon.png" alt="">
                                        <h5 class="text-center">Waktu</h5>
                                        <p class="text-center">Kegiatan akan diadakan 12-13 Sepetember 2019</p>
                              </div>
                              <div class="col-6 col-sm-4 col-md-4 py-2 px-2 list-acara" id="list-acara">
                                        <img class="mx-auto d-block " src="/resources/assets/icons/tempat-icon.png" alt="">
                                        <h5 class="text-center">Tempat</h5>
                                        <p class="text-center">Duren, Bandungan Kab.Semarang, Jawa Tengah</p>
                              </div>
                              <div class="col-6 col-sm-4 col-md-4 py-2 px-2 list-acara" id="list-acara">
                                        <img class=" mx-auto d-block " src="/resources/assets/icons/teman-odd-icon.png" alt="">
                                        <h5 class="text-center">Teman</h5>
                                        <p class="text-center">Banyak teman baru dalam kegiatan</p>
                              </div>
                              <div class="col-6 col-sm-4 col-md-4 py-2 px-2 list-acara" id="list-acara">
                                        <img class=" mx-auto d-block " src="/resources/assets/icons/penginapan-icon.png" alt="">
                                        <h6 class="text-center">Penginapan</h6>
                                        <p class="text-center">Vila Gloria, Bandungan, Kab.Semarang</p>
                              </div>
                              <div class="col-6 col-sm-4 col-md-4 py-2 px-2 list-acara" id="list-acara">
                                        <img class=" mx-auto d-block " src="/resources/assets/icons/game-odd-icon.png" alt="">
                                        <h5 class="text-center">Games</h5>
                                        <p class="text-center">Banyak games menarik dan seru dalam kegiatab.</p>
                              </div>
                              <div class="col-6 col-sm-4 col-md-4 py-2 px-2 list-acara" id="list-acara">
                                        <img class=" mx-auto d-block " src="/resources/assets/icons/ilmu-odd-icon.png" alt="">
                                        <h5 class="text-center">Ilmu</h5>
                                        <p class="text-center">Banyak ilmu yang bermanfaat untuk digali lebih dalam</p>
                                </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Daftar -->
      <div class="Daftar fullscreen py-1" id="daftar">
          <div class="container h-100">
              <div class="row justify-content-center h-100 align-content-center">
                <div class="col-md-5">
                    <form class="mb-5 mt-2" action="{{route('peserta.store')}}" method="post">
                        @csrf
                            <div class="form-group col-md-11">
                            <input type="text" class="form-control" name="nim" id="nim" placeholder="Nim" required>
                            </div>
                            <div class="form-group col-md-11">
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>
                            </div>
                            <div class="form-group col-md-11">
                                <select class="form-control" name="gender" id="gender" placeholder="Jenis Kelamin" required>
                                    <option value="1">Laki-Laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group col-md-11">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                            </div>
                            <div class="form-group col-md-11">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="No.tlp (WA)" required>
                            </div>
                            <div class="form-group col-md-11">
                            <input type="text" class="form-control" name="telegram" id="telegram" placeholder="ID telegram">
                            </div>
                            <div class="row">
                                <div class="col-md-6 text-center text-light mt-3">Kuota tersisa {{sizeof($users)}}/40</div>
                                <div class="col-md-5 ">
                                    <input type="submit" value="Daftar" class="px-5 py-2 my-2 mx-auto d-block" id="btn-daftar">
                                </div>
                            </div>
                    </form>
                </div>
                  <div class="col-md-6 justify-content-center mx-3 text-light">
                    <div class="daftar-sekarang">
                        <h1>Daftar Sekarang</h2>
                        <p class="my-4">
                            Lengkapi formulir disamping kemudian lakukan pembayaran di basecamp
                            DOSCOM (gd.D lantai 1, samping kantin) atau stand pendaftaran bootcamp (gd.H lantai 1)
                        </p>
                        <p>
                            Untuk yang belum install <span id="telegram">apps telegram</span> dapat <a href="#" class="go-to">klik disini</a>. <br>
                            Dan cara seting ID telegram dapat <a href="#" class="go-to">klik disini</a>.
                        </p>
                        <div class="mt-4" id="kontak">
                            <p>
                                <h4>Contact Person :</h4>
                                Wildan : 085877267639 ( WA ) - @ywild ( telegram ) <br>
                                Tenesia : 081325612792 ( WA ) - @tenesiaaa ( telegram )
                            </p>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Footer -->
      <footer class="py-2 mt-3">
          <div class="container">
              <div class="row" id="footer">
                  <div class="col-md-4" id="grid1" ><i class="fas fa-globe mr-2"></i>www.doscom.org</div>
                  <div class="col-md-4" id="grid2" ><i class="fab fa-facebook-square"></i><i class="fab fa-instagram mx-2"></i><i class="fab fa-telegram-plane mr-2"></i>@doscomedia</div>
                  <div class="col-md-4" id="grid3" > Made with <i class="fas fa-heart"></i> by Dinus Open Source Community</div>
              </div>
          </div>
      </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- external JS -->
        <script src="/public/js/home_js.js"></script>
</body>
</html>
