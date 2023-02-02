<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ログイン画面</title>
</head>

<body>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>ログイン画面</title>
  </head>
<body>
    <form action="login_act.php" method="POST">
    <h1>ログイン画面</h1>
    <p>ユーザID、パスワードをご入力の上、「ログイン」ボタンをクリックしてください。</p>
    <div>
        <input type="text" name="username" placeholder="ユーザーID"><br>
        <input type="text" name="password" placeholder="パスワード">
    </div>
    <div>
     <button type="submit">ログイン</button>
    </div>
    <a href="register.php">新規登録の方はこちら</a>
    </form>
</body>
  </html>
</body>
</html>