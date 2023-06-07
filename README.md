# ph3-template-website

# laravel インストール方法

1. `docker compose build --no-cache` (ビルドする)
2. `docker compose up -d` (コンテナをたてる)
3. `docker compose exec app bash` (app コンテナに入る)
4. `composer create-project --prefer-dist laravel/laravel . "10.*"` (src 配下に laravel 10 をインストール)
5. ブラウザで`http://localhost`にアクセスし、「laravel」が表示されることを確認。

# db接続設定
src/.envを以下のように変更して下さい
```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=website
DB_USERNAME=posse
DB_PASSWORD=password
```
<img width="202" alt="スクリーンショット 2022-06-07 16 16 15" src="https://user-images.githubusercontent.com/74942852/172319499-e9457712-e1c6-4f3b-aa64-53a748b39d1a.png">

## db接続方法
1.
```bash
docker compose exec -it mysql /bin/sh
```
2.
```bash
mysql -u root -p
```
3.
```bash
password
```
4.
```bash
use website
```

## error対処
logs -> chmod -R 777 storage logs   
database -> php artisan migrate:refresh --seed  
require index.php -> composer update  
