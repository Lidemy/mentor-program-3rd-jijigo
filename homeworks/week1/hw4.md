## 跟你朋友介紹 Git

Git，是版本控制的軟體之一。

用 Git 來管理笑話很簡單，首先要先建立一個資料夾吧，然後在裡面做 git 的初始化
```
git init
```

然後假設你有一個笑話檔 `joke.txt`，現在要進入版本控制：
```
git add joke.txt
```

確定要開一個新版本：
```
git commit -m "first joke."
```

這樣就在本地端建立好一個新版本了。

什麼？你說要跟 H0w 哥跟一起協作？（這樣你們不就會講一樣的笑話嗎）

首先，先找個遠端數據庫儲存我們的 git 檔，就用 github 吧。
先建立一個新的 repository，然後回到我們的資料夾下新增一個遠端數據庫
```
git remote add origin .../.git
```

然後就能 push 我們剛剛 commit 的笑話
```
git push origin master
```

如果 H0w 哥或遠端有新增或修改的話，也可以 pull 做更新
```
git pull
```

大概就這樣了，去成為電視笑話冠軍吧！