# PHP ile Çapraz Kareler (Satranç Tahtası Deseni)

Bu proje, PHP döngüleri (`for`) ve koşullu ifadeler (`if-else`) kullanarak 8x8 boyutunda bir tablo üzerinde çapraz yıldız deseni oluşturan algoritma örneğidir.

## 💡 Algoritma Mantığı
- 8x8 boyutunda HTML `<table>` yapısı döngü ile oluşturulur.
- Bulunulan `$satir` ve `$sutun` indekslerinin toplamı çift ise (`($satir + $sutun) % 2 == 0`) hücreye yıldız (`*`) basılır.
- Toplam tek ise hücre boş bırakılır. Böylece dama/satranç tahtası benzeri çapraz bir görünüm elde edilir.

## 🛠️ Teknolojiler
- **PHP** (İç içe döngüler ve mod hesaplama)
- **HTML5 & CSS3** (Tablo biçimlendirme ve CSS border-collapse yapısı)

## 💻 Nasıl Çalıştırılır?
1. `goruntu.php` dosyasını `htdocs` veya yerel sunucu dizininize atın.
2. Tarayıcıdan `http://localhost/Odev2/goruntu.php` adresine gidin.