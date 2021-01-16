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
Komutu girilmelidir. Fazladan slash karakteri atılmışsa silinmelidir.

Son olarak veritabanı kurulumu için ise projenin ana dizininde

```php yii migrate/up --migrationPath=@vendor/gngstyle/yii2-finalproject/src/migrations```

komutu girilmelidir.


# Modül Hakkında

Modülde 2 adet tablo bulunmaktadır ve bu 2 tablo birbiriyle ilişkilidir.
Tablolardan biri ülkeler, diğeri ise uçaklar (envanter) tablosudur. Tablolarla ilgili veritabanından
alınan ekran görüntüleri aşağıda mevcuttur.

<img src="https://github.com/gngstyle/yii2-finalproject/blob/main/screenshots/planes.jpg?raw=true" />

<img src="https://github.com/gngstyle/yii2-finalproject/blob/main/screenshots/countries.jpg?raw=true" />

Basit html komutlarıyla oluşturduğum /default/index sayfası da aşağıdadır.

<img src="https://github.com/gngstyle/yii2-finalproject/blob/main/screenshots/defaultindex.jpg?raw=true" />
