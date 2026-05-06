<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Sonucu | Web Teknolojileri Projesi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="d-flex flex-column min-vh-100 bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.html">Web Projesi</a>
    <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="iletisim.html">Geri Dön</a></li>
    </ul>
  </div>
</nav>

<main class="container mt-5 flex-shrink-0">
    <div class="card shadow border-0">
        <div class="card-header bg-success text-white">
            <h3 class="h5 mb-0">Gönderilen Form Bilgileri</h3>
        </div>
        <div class="card-body">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $adSoyad = htmlspecialchars($_POST['adSoyad'] ?? 'Belirtilmedi');
                $email = htmlspecialchars($_POST['email'] ?? 'Belirtilmedi');
                $telefon = htmlspecialchars($_POST['telefon'] ?? 'Belirtilmedi');
                $sehir = htmlspecialchars($_POST['sehir'] ?? 'Belirtilmedi');
                $cinsiyet = htmlspecialchars($_POST['cinsiyet'] ?? 'Belirtilmedi');
                $mesaj = htmlspecialchars($_POST['mesaj'] ?? 'Belirtilmedi');
                
                $hobiler = isset($_POST['hobiler']) ? $_POST['hobiler'] : [];
                $hobilerMetin = !empty($hobiler) ? htmlspecialchars(implode(", ", $hobiler)) : 'Seçilmedi';

                echo "<table class='table table-bordered table-hover mt-3'>";
                echo "<thead class='table-dark'><tr><th>Alan</th><th>Girilen Veri</th></tr></thead>";
                echo "<tbody>";
                echo "<tr><td><strong>Ad Soyad</strong></td><td>$adSoyad</td></tr>";
                echo "<tr><td><strong>E-Posta</strong></td><td>$email</td></tr>";
                echo "<tr><td><strong>Telefon</strong></td><td>$telefon</td></tr>";
                echo "<tr><td><strong>Şehir</strong></td><td>$sehir</td></tr>";
                echo "<tr><td><strong>Cinsiyet</strong></td><td>$cinsiyet</td></tr>";
                echo "<tr><td><strong>İlgi Alanları</strong></td><td>$hobilerMetin</td></tr>";
                echo "<tr><td><strong>Mesaj</strong></td><td>" . nl2br($mesaj) . "</td></tr>";
                echo "</tbody></table>";
            } else {
                echo "<div class='alert alert-warning'>Form verisi bulunamadı. Lütfen iletişim formunu kullanarak geliniz.</div>";
            }
            ?>
        </div>
    </div>
</main>

<footer class="bg-dark text-white text-center py-3 mt-auto">
    <div class="container">
        <p class="mb-0">&copy; 2025-2026 Bahar Dönemi</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>