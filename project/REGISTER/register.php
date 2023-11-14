<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>鑫威網路教學</title>
   <link rel="stylesheet" href="vregister.css">

   <script>
        function redirectToHomePage() {
            window.location.href = "INDEX\index.php";
        }
    </script>

</head>
<body>
    <div id="wrp"class = 't'>
        <div id="header">
            <div id="hleft">
                    <a href="INDEX\index.php" title="鑫威網路教學平台"></a>
            </div>
            
            <div id="hright"></div>
        </div>
        <div id="register">
            <h2>註冊資料</h2>
            <form action="register.php" method="post">
            <label for="e-mail">電子郵件：</label>
            <input type="text" id="e-mail" name="e-mail" required><br><br>
        
            <label for="password">  密  碼  ：  </label>
            <input type="password" id="password" name="password" required style="margin-left: 22px;"><br><br>

            <label for="c-password">確認密碼：</label>
            <input type="password" id="c-password" name="c-password" required><br><br>

            <input type="submit" value="註冊">
            </form>
        </div>
        <div id="menu">
        </div>

    </div>
</body>
</html>
