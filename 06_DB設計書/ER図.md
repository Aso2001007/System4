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
  entity "会員情報" as member <m_member> <<M,MASTER_MARK_COLOR>> {
    + e-mail [PK]
    --
    name
    phone
    pass
    registration_date
  }
  
  entity "購入テーブル" as order_table <order_table> <<T,TRANSACTION_MARK_COLOR>> {
    + order_id [PK]
    --
    name
    tel
    address
  }
  
  entity "商品詳細" as commodity <m_commodity> <<M,MASTER_MARK_COLOR>> {
    + ID [PK]
    --
    money
    commodity_name
    registration_date
    category_id
    explanatory_text
  }
}
member |o-ri-o{ order_table
order_table }-do-|| commodity

@enduml
```
