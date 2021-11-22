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
  
  entity "購入テーブル" as purchase <purchase> <<T,TRANSACTION_MARK_COLOR>> {
    + purchase_id [PK]
    + user_id [PK][FK]
    --
    date
  }
  
  entity "商品詳細" as item <item> <<M,MASTER_MARK_COLOR>> {
    + item_id [PK]
    --
    item_name
    price
    category_id [FK]
    text
  }
  
  entity ""
}
member |o-ri-o{ order_table
order_table }-do-|| commodity

@enduml
```
