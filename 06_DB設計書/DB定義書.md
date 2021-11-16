# DB定義書
## ER図
[ER図はこちら](https://github.com/Aso2001007/System4/blob/main/06_DB%E8%A8%AD%E8%A8%88%E6%9B%B8/ER%E5%9B%B3.md "ER図はこちら" )

# DBテーブルカラム詳細一覧

# データベース詳細

### 商品テーブル（commodity）
|和名|属性名(d_purchase)|型|PK|NN|FK|
|:---|:---|:---|:---|:---:|:----:|
|商品ID|id|int(10)|○|○||
|値段|money|int(10)||○||
|商品名|commodity_name|varchar(20)||○||
|登録日|regstration_date|date||○||
|カテゴリID|category_id|varchar(10)||○||
|色|color|int(2)||○||
|説明文|explanatory_text|varchar(1000)||||

### 会員情報テーブル（member）
|和名|属性名(d_purchase_detail)|型|PK|NN|FK|
|:---|:---|:---|:---|:---:|:----:|
|会員ID|m_id|int(10)|○|○||
|メール|e_mail|varcahr(50)||○||
|名前|name|varcahr(20)||○||
|電話番号|phone|int(11)||○||
|パスワード|pass|varchar(30)||○||
|登録日|registration_date|date||○||

### 購入テーブル（order_table）
|和名|属性名(m_customers)|型|PK|NN|FK|
|:---|:---|:---|:---|:---:|:----:|
|注文ID|order_id|int(10)|○|○||
|名前|name|varchar(50)||○||
|電話番号|tel|int(11)||○||
|住所|address|varchar(100)||○||
