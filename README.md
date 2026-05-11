# 🌐 Web Teknolojileri Projesi - Kişisel Web Sitesi

Bu proje, Sakarya Üniversitesi Bilgisayar Mühendisliği "Web Teknolojileri" dersi kapsamında geliştirilmiş kişisel bir web ve tanıtım uygulamasıdır. Proje; modern web standartları (Semantik HTML5, CSS3, JavaScript) ve sunucu taraflı işlemler (PHP) kullanılarak, hem kişisel tanıtım hem de teknik becerilerin sergilenmesi amacıyla tasarlanmıştır.

🔗 **Canlı Demo:** [Projeyi İncelemek İçin Tıklayın](https://kerimbatikandeveci.free.nf/index.html)

---

## 🚀 Proje İçeriği ve Özellikler

Proje, responsive (duyarlı) bir tasarıma sahip olup aşağıdaki sayfalardan oluşmaktadır:

* **Hakkında (index.html):** Kendimi tanıttığım, ilgi alanlarımın ve hobilerimin bulunduğu giriş sayfası. Ayrıca GitHub profili gibi harici bağlantılar içerir.
* **Özgeçmiş (cv.html):** Eğitim bilgilerimi ve teknik becerilerimi içeren, arama motoru optimizasyonu (SEO) için tamamen **Semantik HTML5** etiketleri (`<header>`, `<section>`, `<article>`, vb.) kullanılarak kurgulanmış sayfa.
* **Şehrim (sehrim.html):** Memleketim Sakarya'nın genel bilgilerini ve gezilecek yerlerini tanıtan, Bootstrap Slider (Carousel) ve Liste Grubu bileşenlerini barındıran sayfa.
* **Mirasımız (miras.html):** Sakarya'nın tarihi mirası Justinianus Köprüsü'nün (Beşköprü) detaylandırıldığı; tablo, resim galerisi (slider) ve açıklamaların bulunduğu sayfa.
* **İlgi Alanlarım (ilgi_alanlari.html):** Asenkron JavaScript (`fetch`) kullanılarak 3 farklı dış API'den (Oyun, Dizi, Anime) anlık veri çekilen ve bu verilerin dinamik Bootstrap kartlarıyla listelendiği sayfa.
* **İletişim (iletisim.html & iletisim.php):** Kullanıcıların mesaj gönderebileceği, gerekli doğrulamaların (boşluk, e-posta formatı, sadece rakam kontrolü vb.) hem **Native JavaScript** hem de **Vue.js** framework'ü ile iki farklı buton üzerinden yapıldığı iletişim sayfası. Form verileri sunucu tarafında PHP ile karşılanıp ekrana yazdırılmaktadır.
* **Giriş Yap (login.html & login.php):** Öğrenci numarası (şifre) ve öğrenci e-posta adresi (kullanıcı adı) ile güvenli giriş mekanizmasının simüle edildiği sayfa. Hatalı girişte uyarı mesajı ile tekrar yönlendirme, başarılı girişte ise kişiye özel "Hoşgeldiniz" mesajı gösterilmektedir.

---

## 🛠️ Kullanılan Teknolojiler

**Frontend (Önyüz):**
* HTML5 (Semantik Tag Yapısı)
* CSS3 (Özel animasyonlar ve stil dosyası: `style.css`)
* Bootstrap 5 (Responsive tasarım, Grid sistemi, Navbar, Carousel, Card vb.)
* JavaScript (ES6+, DOM Manipülasyonu, Fetch API)
* Vue.js (İletişim formu validasyonu)

**Backend (Arkayüz):**
* PHP 8+ (İletişim formu verilerinin işlenmesi ve Login sistemi kontrolü)

**Kullanılan API'ler:**
* 🎮 [CheapShark API](https://apidocs.cheapshark.com/) (Oyun verileri)
* 📺 [TVMaze API](https://www.tvmaze.com/api) (Dizi verileri)
* 🌸 [Jikan API (Unofficial MyAnimeList API)](https://jikan.moe/) (Anime verileri)

---

## ⚙️ Kurulum ve Çalıştırma

Bu projeyi yerel bilgisayarınızda (localhost) çalıştırmak için PHP destekleyen bir yerel sunucu ortamına (XAMPP, WAMP, Laragon vb.) ihtiyacınız vardır.

1.  Bu depoyu bilgisayarınıza klonlayın:
    ```bash
    git clone [https://github.com/TheHumanPandas/WebPro.git](https://github.com/TheHumanPandas/WebPro.git)
    ```
2.  Klonladığınız proje klasörünü yerel sunucunuzun kök dizinine (örneğin XAMPP için `htdocs`, WAMP için `www` klasörü) taşıyın.
3.  Yerel sunucunuzu (Apache vb.) başlatın.
4.  Tarayıcınızda aşağıdaki adrese giderek projeyi görüntüleyin:
    ```
    http://localhost/proje-klasoru-adi/index.html
    ```

> ⚠️ **Not:** `iletisim.php` ve `login.php` sayfalarının düzgün çalışabilmesi için projeyi mutlaka bir PHP sunucusu üzerinden çalıştırmalısınız. Sadece HTML dosyasına çift tıklayarak açmak, PHP form işlemlerinin çalışmamasına neden olacaktır.

---

## 🔐 Giriş Bilgileri (Login Testi)

Giriş yap sayfasını test etmek için aşağıdaki bilgileri kullanabilirsiniz:

* **Kullanıcı Adı (E-Posta):** `b251210067@sakarya.edu.tr`
* **Şifre (Öğrenci No):** `b251210067`

---

## 👨‍💻 Geliştirici

**Kerim Batıkan Deveci**
Sakarya Üniversitesi - Bilgisayar Mühendisliği
* GitHub: [@TheHumanPandas](https://github.com/TheHumanPandas)
* Canlı Site: [kerimbatikandeveci.free.nf](http://kerimbatikandeveci.free.nf)
