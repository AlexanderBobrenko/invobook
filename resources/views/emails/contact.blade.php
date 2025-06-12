
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Новое сообщение с сайта IvASoft</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #1E90FF; color: white; padding: 20px; text-align: center; }
        .content { background: #f9f9f9; padding: 20px; }
        .field { margin-bottom: 15px; }
        .field label { font-weight: bold; color: #555; }
        .field p { margin: 5px 0; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>IvASoft</h1>
            <p>Новое сообщение с сайта</p>
        </div>
        <div class="content">
            <div class="field">
                <label>Имя:</label>
                <p>{{ $name }}</p>
            </div>
            <div class="field">
                <label>Email:</label>
                <p>{{ $email }}</p>
            </div>
            <div class="field">
                <label>Тема:</label>
                <p>{{ $subject }}</p>
            </div>
            <div class="field">
                <label>Сообщение:</label>
                <p>{{ $messageContent }}</p>
            </div>
        </div>
        <div style="text-align: center; padding: 20px; color: #666; font-size: 14px;">
            <p>Это сообщение отправлено с сайта IvASoft</p>
        </div>
    </div>
</body>
</html>
