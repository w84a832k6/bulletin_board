# bulletin_board

> 使用Laravel 的後端佈告欄服務

## Build Setup

```bash
# install dependencies
composer install

# 建立資料庫
php artisan migrate

# 啟動一個內建伺服器http://localhost:8000或自行搭建HTTP伺服器指向public目錄
php artisan serve
```

### API

---

取得佈告欄列表

Api Url : ``/``

Method : ``GET``

Response :


| 名稱 | 格式  | 說明                   |
| ------ | ------- | ------------------------ |
| code | int   | 請求狀態 1:成功 0:失敗 |
| data | array | 列表資料               |

```json
{
    "code": 1,
    "data": {
        "id": 1,
        "title": "title",
        "content": "content",
        "created_at": "2022-12-12 12:00:00",
        "updated_at": "2022-12-12 12:00:00",
    }
}
```

新增佈告欄

Api Url : ``/create``

Method : ``POST``

Content-Type : ``application/json``

Parameter :


| 名稱    | 格式   | 說明 |
| --------- | -------- | ------ |
| title   | string | 標題 |
| content | string | 內容 |

Response :


| 名稱    | 格式   | 說明                   |
| --------- | -------- | ------------------------ |
| code    | int    | 請求狀態 1:成功 0:失敗 |
| message | string | 回應訊息               |

```json
{
    "code": 1,
    "message": "新增成功"
}
```

修改佈告欄

Api Url : ``/edit``

Method : ``PATCH``

Content-Type : ``application/json``

Parameter :


| 名稱    | 格式   | 說明     |
| --------- | -------- | ---------- |
| id      | int    | 佈告欄ID |
| title   | string | 標題     |
| content | string | 內容     |

Response :


| 名稱    | 格式   | 說明                   |
| --------- | -------- | ------------------------ |
| code    | int    | 請求狀態 1:成功 0:失敗 |
| message | string | 回應訊息               |

```json
{
    "code": 1,
    "message": "修改成功"
}
```

刪除佈告欄

Api Url : ``/{id}/delete``

Method : ``DELETE``

Content-Type : ``application/json``

Response :


| 名稱    | 格式   | 說明                   |
| --------- | -------- | ------------------------ |
| code    | int    | 請求狀態 1:成功 0:失敗 |
| message | string | 回應訊息               |

```json
{
    "code": 1,
    "message": "刪除成功"
}
```
