# PHP-Date-Library
Gerek kişisel gerekse profesyonel iş hayatımda PHP üzerinde çalışırken kullandığım bir tarih kütüphanesi.


# pasttime($date)
Girilen geçmiş zamanın üzerinde kaç saniye / dakika / saat / ay / yıl geçtiğini string olarak döndürür.  . (Örn result: 15 Saniye Önce) (Örn result: 1 Saat Önce)

# datetostr($date)
Girilen tarih'i string'e çevirir. (Örn result: 04 Ocak 2024)


# datetimetostr($date)
Girilen tarih'i saatiyle beraber string'e çevirir. (Örn result: 04 Ocak 2024 | 10:00)

# datetimetostrwithdayname
Girilen tarih'i saatiyle beraber gün adıyla string'e çevirir. (Örn result: 04 Ocak Perşembe 2024 | 10:00)

# calculateBusinessDays($day)
Verilen x iş günü sonrasının tarihini return eder. 
