# Docker example

-   只是把 NISRA 靶機 source code 抄來放進 docker 裡面
-   再加上兩個服務 fastapi server 與 express server
-   畢竟是靶機所以不要公開到外部網路

### Install

```shell=
cd docker && sudo docker-compose up --build -d
```

如果 upload 出現 permission denied
可以修改一下資料夾權限

```shell=
chmod 777 nisra-target-drone/website/upload
```

### 網頁

-   NISRA 靶機
    -   http://127.0.0.1
    -   http://10.87.0.87
    -   http://10.88.0.87
-   Curl - Fastapi
    -   http://127.0.0.1:5000
    -   http://10.87.0.87
-   Helloworld - Express
    -   http://127.0.0.1:5001
    -   http://10.88.0.87

### 架構圖

![](https://i.imgur.com/5STtocd.png)
