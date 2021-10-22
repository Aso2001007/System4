# DB定義書
## ER図
[ER図はこちら](https://github.com/Aso2001007/2021sys-desgin/blob/main/src/md/DB/ER%E5%9B%B3.md "ER図はこちら" )

# DBテーブルカラム詳細一覧

# データベース詳細

### 商品テーブル（commodity）
|和名|属性名(d_purchase)|型|PK|NN|FK|
|:---|:---|:---|:---|:---:|:----:|
||id|int(10)|○|○||
||money|int(10)||○||
||commodity_name|varchar(20)||○||
||regstration_date|date||○||
||category_id|varchar(10)||○||

### 会員情報テーブル（member）
|和名|属性名(d_purchase_detail)|型|PK|NN|FK|
|:---|:---|:---|:---|:---:|:----:|
||detail_id|bigint(20)|○|○||
||order_id|bigint(20)|○|○|○|
||item_code|int(11)||○||
||price|int(11)||○||
||num|int(11)||○||

### 購入テーブル（order_table）
|和名|属性名(m_customers)|型|PK|NN|FK|
|:---|:---|:---|:---|:---:|:----:|
||customer_code|varchar(50)|○|○||
||pass|varchar(50)||○|○|
||name|varchar(20)||○||
||address|varchar(100)||○||
||tel|int(20)||○||
||mail|carchar(100)||○||
||del_flag|int(11)||||
||reg_date|date||○||






### カテゴリマスタ(m_category)
|和名|属性名(m_category)|型|PK|NN|FK|
|:---|:---|:---|:---|:---:|:----:|
||category_id|int(11)|○|○||
||name|varchar(20)||○||
||reg_date|date||○||

### 商品マスタ(m_item)
|和名|属性名(m_item)|型|PK|NN|FK|
|:---|:---|:---|:---|:---:|:----:|
|商品コード|item_code|int(11)|○|○||
|商品名|item_name|varchar(50)||○||
|価格|price|int(11)||○||
|カテゴリID|category_id|int(11)||○|○|
|画像ファイル名|image|varchar(200)||○||
|商品詳細説明|detail|varchar(500)||||
|削除フラグ|del_flag|int(11)||||
|登録日|reg_date|date||○||
