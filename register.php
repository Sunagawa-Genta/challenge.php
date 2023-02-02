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
    <title>新規登録画面</title>
  </head>
<body>
    <form action="register_act.php" method="POST">
    <h1>新規登録画面</h1>
    <p>ユーザID、パスワードをご入力の上、「登録」ボタンをクリックしてください。</p>
    <div>
        <input type="text" name="username" placeholder="ユーザーID"><br>
        <input type="text" name="password" placeholder="パスワード">
    </div>
    <div>
     <button type="submit">登録</button>
    </div>
    <a href="login.php">or login</a>
    </form>
</body>
  </html>
</body>
</html>