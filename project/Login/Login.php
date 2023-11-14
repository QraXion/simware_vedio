<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>鑫威網路教學</title>
   <link rel="stylesheet" href="vLogin.css">

   <script>
        function redirectToHomePage() {
            window.location.href = "INDEX\index.php";
        }
        
        document.getElementById("forgot-password").addEventListener("click", function() {
        var email = prompt("請輸入您的電子郵件地址：");
        // 在這裡，您可以將用戶輸入的電子郵件地址發送到伺服器，以進一步處理密碼重設流程
        if (email) {
        alert("我們已向您的電子郵件地址發送了密碼重設連結。");
    }
  });

    </script>

</head>
<body>
    <div id="wrp"class = 't'>
        <div id="header">
            <div id="hleft">
                    <a href="../INDEX/index.php" title="鑫威網路教學平台"></a>
            </div>
            
            <div id="hright"></div>
        </div>
        <div id="register">
            <h2>登 入</h2>
            <form action="register.php" method="post">
            <label for="e-mail">電子郵件：</label>
            <input type="text" id="e-mail" name="e-mail" required><br><br>
        
            <label for="password">  密  碼  ：  </label>
            <input type="password" id="password" name="password" required style="margin-left: 22px;"><br><br>

            <input type="submit" value="登入"><br><br>

            <label for="forgot-password">忘記密碼？</label>
            <input type="button" id="forgot-password" value="重設密碼">
            </form>
        </div>
        
        <div id="menu">
        </div>

        

    </div>
</body>
</html>
