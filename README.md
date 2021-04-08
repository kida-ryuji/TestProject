# fy2021-b-team

https://readouble.com/laravel/6.x/ja/

## よく使うdockerコマンド一覧

### laradockディレクトリに移動してから下のコマンドを実行  (cd Desktop/Axis_Project/laradock)


起動 　　

    docker-compose up -d php-fpm nginx mysql workspace

//起動後に localhost でアクセスできるはず

起動確認 　　//Upは起動中、Exitは停止中

    docker-compose ps

停止

    docker-compose stop


データベースに入るには laradockディレクトリに移動してから下のコマンドを実行

    docker-compose exec mysql bash
    mysql -u root -p

    DBユーザー名　　= root
    DBパスワード　　 = root

    exit　　      //終了するコマンド

workspaceに入るには

	 docker exec -it  laradock_workspace_1 /bin/bash

### データベースを自動作成するには　Axis_Projectディレクトリに移動してから下のコマンドを実行
    docker exec -it  laradock_workspace_1 /bin/bash

    php artisan migrate:refresh --seed

    exit　　      //終了するコマンド
***
# Git基本コマンド
* git clone
* git add
* git commit
* git push

#### git clone
ブランチを指定して、リポジトリをローカルに持ってきたい時

    git clone -b ブランチ名 プロジェクトURL

#### git add
管理対象に追加（ステージングエリアに上げる）
 今のディレクトリより下のものを全て管理対象に追加。

    git add .
    . = 全対象にするという意味

#### git commit
コメント付きでコミット    例→　git commit -m “fix: admin画面を修正”

    git commit -m “xxxx: xxxxxxxxx”

#### git push
ローカルでの開発内容を共有リポジトリに反映させる。

    git push  origin 宛先ブランチ名

### GitHubにpushするまでの流れ  ディレクトリに移動してから

    git add .
    git commit -m “xxxx: xxxxxxxxx”
    git push origin 宛先ブランチ名


### Gitコミットメッセージ

    feat     機能追加など
    fix      バグ修正
    docs     ドキュメント変更
    style    フォーマットなどの修正
    refactor プログラムコードのリファクタリング
    test     テストの追加、リファクタリング
    chore    プログラムコード以外の変更、修正
