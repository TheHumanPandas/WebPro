<?php
// Sayfa açıldığında POST isteği gelmiş mi kontrol et
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    // Beklenen kullanıcı bilgileri (Projeye göre öğrenci no ve sakarya maili)
    $dogru_mail = "b2412100001@sakarya.edu.tr";
    $dogru_sifre = "b2412100001";

    // Güvenlik amaçlı sunucu tarafı boşluk kontrolü
    if (empty($email) || empty($password)) {
        header("Location: login.html?error=1");
        exit();
    }

    // Bilgiler doğruysa
    if ($email === $dogru_mail && $password === $dogru_sifre) {
        // Mail adresinden @ işaretine kadar olan kısmı (öğrenci no) alıyoruz
        $ogrenci_no = explode("@", $email)[0]; 
        $basari_mesaji = "Hoşgeldiniz " . htmlspecialchars($ogrenci_no);
    } else {
        // Bilgiler hatalıysa login.html'e geri gönder ve hata parametresi ekle
        header("Location: login.html?error=1");
        exit();
    }
} else {
    // Sayfaya direkt url yazılarak gelinmek istenirse logine yönlendir
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Başarılı | Web Teknolojileri Projesi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="d-flex flex-column min-vh-100 bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.html">Web Projesi</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Ana Sayfaya Dön</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-danger" href="login.html">Çıkış Yap</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<main class="container mt-5 flex-shrink-0 text-center">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow border-0 mt-5">
                <div class="card-body p-5">
                    <h1 class="display-1 text-success mb-3"><i class="bi bi-check-circle-fill"></i></h1>
                    <h2 class="text-success mb-4"><?php echo $basari_mesaji; ?></h2>
                    <p class="lead">Sisteme başarıyla giriş yaptınız. Yetkili işlemleri buradan yürütebilirsiniz.</p>
                    <hr class="my-4">
                    <a href="index.html" class="btn btn-outline-dark me-2">Ana Sayfaya Dön</a>
                    <a href="login.html" class="btn btn-danger">Çıkış Yap</a>
                </div>
            </div>
        </div>
    </div>
</main>

<footer class="bg-dark text-white text-center py-3 mt-auto">
    <div class="container">
        <p class="mb-0">&copy; 2025-2026 Bahar Dönemi - Web Teknolojileri Projesi</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>