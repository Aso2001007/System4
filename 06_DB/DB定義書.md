# DB定義書
 ## ER図
 [ER図はこちら]( https://github.com/Aso2001007/System4/blob/main/06_DB/ER%E5%9B%B3.md "ER図はこちら" )

 # DBテーブルカラム詳細一覧

 # データベース詳細

 ### 商品テーブル（item）
 |和名|属性名|型|PK|NN|FK|
 |:---|:---|:---|:---|:---:|:----:|
 |商品ID|item_id|int(10)|○|○||
 |値段|price|int(10)||○||
 |商品名|item_name|varchar(50)||○||
 |カテゴリID|category_id|varchar(10)||○|○|
 |登録日|date|date||○||
 |説明文|text|varchar(1000)||||

 ### 会員情報テーブル（member）
 |和名|属性名|型|PK|NN|FK|
 |:---|:---|:---|:---|:---:|:----:|
 |会員ID|user_id|int(10)|○|○||
 |メール|mail|varcahr(50)||○||
 |名前|name|varcahr(20)||○||
 |電話番号|tel|int(11)||○||
 |パスワード|pass|varchar(24)||○||
 |住所|address|varchar(100)||○||

 ### 購入テーブル（purchase）
 |和名|属性名|型|PK|NN|FK|
 |:---|:---|:---|:---|:---:|:----:|
 |購入ID|purchase_id|int(10)|○|○||
 |会員ID|user_id|int(10)||○|○|
 |購入日|date|datetime||○||

 ### 購入詳細テーブル（purchase_details）
 |和名|属性名|型|PK|NN|FK|
 |:---|:---|:---|:---|:---:|:----:|
 |詳細ID|details_id|int(10)||○||
 |購入ID|purchase_id|int(10)|○|○|○|
 |商品ID|item_ID|int(10)|○|○|○|
 |個数|quantity|int(10)||○||

 ### カテゴリテーブル（category）
 |和名|属性名|型|PK|NN|FK|
 |:---|:---|:---|:---|:---:|:----:|
 |カテゴリID|categoru_id|int(10)|○|○||
 |カテゴリ名|category_name|varchar(20)||○||

 ### カラーテーブル(color)
 |和名|属性名|型|PK|NN|FK|
 |:---|:---|:---|:---|:---:|:----:|
 |商品ID|item_id|int(10)|○|○|○|
 |カラーID|color_id|int(10)|○|○||
 |カラー名|color_name|varchar(10)||○||
 |画像|image_content|mediumblob||○||
