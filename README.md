# yii2-finalproject
Avrupa Birliği'ne üye olan ülkelerin envanterindeki uçakları görüntelemenizi sağlayan bir modül.
#Kurulum
Modülü başarılı bir şekilde entegre edebilmeniz için öncesinde yii2-advanced template'i kurulu olmalıdır.
Modülün kurulması için doğru dizinde olmanız gerekmektedir (/var/www/advanced). 
Doğru dizinde olduğunuzdan emin olunduktan sonra aşağıdaki komut girilerek modül yüklenmelidir.

```composer require gngstyle/yii2-finalproject```

Modül kurulduktan sonra backend\config\main.php dizinine girilmesi gerekmektedir. Ardından 'modules' kısmına
`'finalproject' => [
'class' => 'gngstyle\finalproject\Module',],`
Komutu girilmelidir. Her dizin adından sonra fazladan bir slash karakteri otomatik olarak atıldığı için bu fazlalık karakterler silinerek komut düzgün bir şekilde eklenmelidir.


#Modül Hakkında
Modülde 2 adet tablo bulunmaktadır ve bu 2 tablo birbiriyle ilişkilidir.
Tablolardan biri ülkeler, diğeri ise uçaklar (envanter) tablosudur. Tablolarla ilgili veritabanından
alınan ekran görüntüleri aşağıda mevcuttur.