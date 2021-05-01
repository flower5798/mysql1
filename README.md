# mysql1
MySQLのコンテナ生成（永続化/MySQL8対応）

# 参考にしたページ
https://qiita.com/TAMIYAN/items/ed9ec892d91e5af962c6
https://qiita.com/juhn/items/274e44ee80354a39d872

# 使い方
## イメージのビルド

```docker-compose build```

## コンテナの作成

```docker-compose up -d```

## 起動したコンテナにログイン

```docker exec -it mysql1_mysql_1 bash -p```

## MySQLを起動

```mysql -u root -p -h 127.0.0.1```

## この後パスワードを入力して完了(docker-compose.ymlに記載したもの)

## /var/lib/mysql/ is unusable とログを吐いてコンテナが止まった場合、 mysql/db/mysql_data 配下のファイルを全削除してコンテナ再起動して1分程度待つ

# 確認用PHPスクリプトの実行コマンド

```php prog1.php```


