<?php require("layout/header.php");

?>

<div class="container-fluid p-0">
  <?php
  session_start();

  if ($_SESSION["girisBilgisi"] == false) {
    header('location: login.php');
  } else {

    if ($_SESSION["girisSayisi"] == 1) {
      echo '<div class="alert alert-success alert-dismissible fade show" style="margin:16px;" role="alert">
      <strong>Hoşgeldiniz! </strong> B181210038
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>';
      $_SESSION["girisSayisi"] = 0;
    }

    if (isset($_POST["gonderForm"])) {

      $_SESSION["_adSoyadForm"] = $_POST["adSoyadForm"];
      $_SESSION["_emailForm"] = $_POST["emailForm"];
      $_SESSION["_konuForm"] = $_POST["konuForm"];
      $_SESSION["_mesajForm"] = $_POST["mesajForm"];
      header('location: iletisim-sonuc.php');
    }
  }
  ?>
  <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
    <div class="w-100">
      <h1 class="mb-0">Funda
        <span class="text-primary">Duru</span>
      </h1>
      <div class="alt-baslik mb-5">Yaş: 20 ·
        <a href="mailto:name@email.com">b181210038@sakarya.edu.tr</a>
      </div>
      <p class="yazi mb-5">Ben Funda Duru. 24 Ağustos 1999 tarihinde Tokat ili Pazar ilçesinde doğdum. Bir abim ve bir kız kardeşim var. İlk öğretimi Pazar İlköğretim Okulu’ nda , lise öğrenimimi Tokat Milli Piyango İhya Balak Fen Lisesi’nde gerçekleştirdim. 2018 yılında Sakarya Üniversitesi bilgisayar mühendisliği bölümünü kazandım ve Sakarya Üniversitesinde eğitimim devam etmektedir. Hobilerim arasında tarih ve arkeoloji alanında araştırma yapmak, kültür gezilerine katılmak, kitap okumak vardır. Ayrıca badminton oynamayı ve doğa yürüyüşlerine katılmayı da severim.</p>
      <div class="social-icons">
        <a href="#">
          <i class="fab fa-linkedin-in"></i>
        </a>
        <a href="#">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="#">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#">
          <i class="fab fa-facebook-f"></i>
        </a>
      </div>
    </div>
  </section>

  <hr class="m-0">

  <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
    <div class="w-100">
      <h2 class="mb-5">ÖZGEÇMİŞ</h2>

      <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
        <div class="resume-content">
          <h3 class="mb-0">Sakarya Üniversitesi</h3>
          <div class="subheading mb-3">Lisans</div>
          <div>Bilgisayar Mühendisliği</div>
        </div>
        <div class="resume-date text-md-right">
          <span class="text-primary fw-700">Eylül 2018 - Günümüz</span>
        </div>
      </div>
      <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
        <div class="resume-content">
          <h3 class="mb-0">Tokat Milli Piyango İhya Balak Fen Lisesi</h3>
          <div class="subheading mb-3">Lisans</div>
          <div>Lise</div>
        </div>
        <div class="resume-date text-md-right">
          <span class="text-primary fw-700">Eylül 2013 - Haziran 2017</span>
        </div>
      </div>

      <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
        <div class="resume-content">
          <h3 class="mb-0">Pazar İlköğretim Okulu</h3>
          <div class="subheading mb-3">İlkokul</div>
        </div>
        <div class="resume-date text-md-right">
          <span class="text-primary fw-700">Eylül 2005 - Haziran 2013</span>
        </div>
      </div>

    </div>
  </section>

  <hr class="m-0">

  <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="sehirim">
    <div class="w-100">
      <h2 class="mb-5">ŞEHİRİM</h2>
      <div class="col-lg-12">
        <div id="carouselExampleControls" class="carousel slide slider-resize" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/tokatKalesi.jpg" alt="Tokat Kalesi">
              <div class="carousel-caption d-none d-md-block">
                <h3>Tokat Kalesi</h3>
                <a href="tokatKalesi.php" target="_blank">
                  <div class="btn btn-primary btn-sm padding-0">Detaylı Bilgi</div>
                </a>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/tashan.jpeg" alt="Taşhan">
              <div class="carousel-caption d-none d-md-block">
                <h3>Taşhan</h3>
                <a href="tashan.php" target="_blank">
                  <div class="btn btn-primary btn-sm padding-0">Detaylı Bilgi</div>
                </a>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/mahperiHatun.jpg" alt="Mahperi Hatun Kervansarayi">
              <div class="carousel-caption d-none d-md-block">
                <h3>Mahperi Hatun Kervansarayi</h3>
                <a href="mahperiHatun.php" target="_blank">
                  <div class="btn btn-primary btn-sm padding-0">Detaylı Bilgi</div>
                </a>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/yagibasan.jpg" alt="Yağıbasan Medresesi">
              <div class="carousel-caption d-none d-md-block">
                <h3>Yağıbasan Medresesi</h3>
                <a href="yagibasan.php" target="_blank">
                  <div class="btn btn-primary btn-sm padding-0">Detaylı Bilgi</div>
                </a>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <hr class="m-0">
  <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="mirasimiz">
    <div class="w-100">
      <h2 class="mb-5">MİRASIMIZ</h2>
      <div class="img-full mb-5">
        <img src="img/ballica.jpg" alt="Mirasımız">
      </div>
      <h4 class="mb-2">BALLICA MAĞARASI</h4>
      <p>
        Ballıca Mağarası, bilinen diğer adıyla İndere Karadeniz Bölgesi'nde, Tokat'ın ismini de verdiği Ballıca, Pazar köyünde bulunan mağaradır.
        Oluşumu yaklaşık 3,4 milyon yıl önce başladığı tahmin edilen Ballıca Mağarası yaklaşık 680 metre uzunluğunda 90 ile 94 metre yüksekliğindedir. Toplamda 5 kat ve 9 salondan oluşan ve günümüzde hâlen bazı bölümlerde oluşum devam eden mağarada yaz ve kış ortalama sıcaklık 17-24 derece arasında olup ortalama nem %55'i aşmaktadır.
        Dünyanın en büyük mağaraları arasında yer alan mağara, 1995'ten bu yana ziyarete açıktır. Mağara, 2019'da UNESCO tarafından dünya mirası geçici listesi’ ne eklendi. Türkiye'deki 28 Jeolojik Miras Alanı'ndan birisidir. 2007 yılında 483 ha alan ile birlikte Tabiat Parkı ilan edilmiştir
      </p>
    </div>
  </section>

  <hr class="m-0">
  <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="iletisim">
    <div class="w-100">
      <h2 class="mb-5">İLETİŞİM</h2>

      <form class="cf" action="" method="POST">
        <div class="half left cf">
          <input class="js-input" name="adSoyadForm" type="text" id="input-name" placeholder="Ad Soyad" required>
          <input class="js-input" name="emailForm" type="email" id="input-email" placeholder="mail@email.com" required>
          <input class="js-input" name="konuForm" type="text" id="input-subject" placeholder="Konu" required>
        </div>
        <div class="half right cf">
          <textarea name="message" type="text" name="mesajForm" id="input-message" placeholder="Mesajınız"></textarea>
        </div>
        <input type="submit" style="padding: 10px;" name="gonderForm" value="Gönder" id="input-submit">
      </form>
  </section>

</div>
<?php require("layout/footer.php"); ?>