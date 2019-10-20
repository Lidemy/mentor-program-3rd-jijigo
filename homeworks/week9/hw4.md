## 資料庫欄位型態 VARCHAR 跟 TEXT 的差別是什麼

VARCHAR 可以設置長度，
TEXT 不可設置長度，用在不確定資料的長度多長的時候

## Cookie 是什麼？在 HTTP 這一層要怎麼設定 Cookie，瀏覽器又會以什麼形式帶去 Server？

Cookie 是一種保存狀態的機制。
因為每一個 HTTP request 都是 Stateless（無狀態），也就是說前一個 request 跟 下一個 request 都是獨立的，例如前一個 request 顯示已登入成功，但下一個 request 它怎麼知道已經登入？這時就需要 Cookie 的幫忙。
Cookie 不只存登入狀態，

在 http 可以透過在 php 下 setcookie('cookie_name', 'value', 'time')
而如果要發到 server 可以將 cookie 資訊帶在 header


## 我們本週實作的會員系統，你能夠想到什麼潛在的問題嗎？

密碼沒有經過雜揍
