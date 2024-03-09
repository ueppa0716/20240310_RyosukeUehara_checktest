# 20240310_RyosukeUehara_checktest

# アプリケーション名

    お問い合わせフォーム

## 環境構築

    Dockerビルド
        1. git clone リンク
            git@github.com:ueppa0716/20240310_RyosukeUehara_checktest.git
        2. docker-compoose up -d --build

    Laravel環境構築
        1. docker-compose exec php bash
        2. composer install
        3. .env.exampleファイルから.envを作成し、環境変数を変更
        4. php artisan key:generate
        5. php artisan migrate
        6. php artisan db:seed --class=CategorySeeder
        7. php artisan db:seed

## 使用技術(実行環境)

    nginx:1.21.1
    php:7.4.9
    mysql:8.0.26
    Laravel Framework 8.83.27

## ER 図

    src/storage/app/public/ER.drawio.png

## URL

    開発環境：http://localhost/
    phpMyAdimn:http://localhost:8080/
