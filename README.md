# Sürekli 301 çeken yayıncılarımızın tek tek .htaccess dosyalarını düzenlemeleri yerine bu işlemi toplu yapacak ufak bir araç hazırladık
# Bu tool'u kullanmak için ssh dan "root" olarak login olmanız gerekmektedir.
# "/home/*/public_html/.htaccess" dosyalarını tek tek kontrol ederek eski domain ile yeni domaini otomatik değiştirir.
# Örnek kullanımı: php 301.php eskidomain.com yenidomain.php
