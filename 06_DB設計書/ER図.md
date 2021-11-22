```uml
@startuml
skinparam class {
    '図の背景
    BackgroundColor Snow
    '図の枠
    BorderColor Black
    'リレーションの色
    ArrowColor Black
}

!define MASTER_MARK_COLOR Orange 
!define TRANSACTION_MARK_COLOR DeepSkyBlue

package "文房具サイト" as target_system {
  entity "会員情報" as member <member> <<M,MASTER_MARK_COLOR>> {
    + user_id [PK]
    --
    name
    addles
    tel
    mail
    pass
  }
  
  entity "購入" as purchase <purchase> <<T,TRANSACTION_MARK_COLOR>> {
    + purchase_id [PK]
    + user_id [PK][FK]
    --
    date
  }
  
  entity "商品" as item <item> <<M,MASTER_MARK_COLOR>> {
    + item_id [PK]
    --
    item_name
    price
    category_id [FK]
    text
  }
  
  entity "購入詳細" as purchase_details <purchase_details> <<T,TRANSACTION_MARK_COLOR>> {
    + purchase_id [PK] [FK]
    + item_id [PK] [Fk]
    --
    details_id
    quantity
  }
  
  entity "カテゴリ" as category <category> <<M,MASTER_MARK_COLOR>> {
    + category_id [PK]
    --
    category_name
  }
  
  entity "カラー" as color <<color>> <<M,MASTER_MARK_COLOR>> {
    + item_id [PK] [FK]
    + color_id [PK] [FK]
    --
    color_name
    image_content
  }
 }
 
item ||--|| category
item ||--|| color
purchase ||--|| purchase_details
purchase ||--|| member
purchase_details ||--|| item 

@enduml
```
