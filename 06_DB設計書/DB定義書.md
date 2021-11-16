# DB定義書
## ER図
[ER図はこちら](https://github.com/Aso2001007/System4/blob/main/06_DB%E8%A8%AD%E8%A8%88%E6%9B%B8/ER%E5%9B%B3.md "ER図はこちら" )

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
||color|int(2)||○||
||explanatory_text|varchar(1000)||||

### 会員情報テーブル（member）
|和名|属性名(d_purchase_detail)|型|PK|NN|FK|
|:---|:---|:---|:---|:---:|:----:|
||m_id|int(10)|○|○||
||e_mail|varcahr(50)||○||
||name|varcahr(20)||○||
||phone|int(11)||○||
||pass|varchar(30)||○||
||registration_date|date||○||

### 購入テーブル（order_table）
|和名|属性名(m_customers)|型|PK|NN|FK|
|:---|:---|:---|:---|:---:|:----:|
||order_id|int(10)|○|○||
||name|varchar(50)||○||
||tel|int(11)||○||
||address|varchar(100)||○||
