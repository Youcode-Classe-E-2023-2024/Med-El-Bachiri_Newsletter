<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            max-width: 150px;
            height: auto;
        }
        h1 {
            font-size: 24px;
            font-weight: bold;
            color: #333333;
            text-align: center;
            margin-bottom: 10px;
        }
        p {
            font-size: 16px;
            color: #555555;
            text-align: center;
            margin-bottom: 20px;
        }
        .image {
            text-align: center;
            margin-bottom: 20px;
        }
        .image img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .buttons {
            text-align: center;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: #ffffff;
            text-decoration: none;
            border-radius: 25px;
            transition: background-color 0.3s ease;
            margin-right: 10px;
        }
        .button:hover {
            background-color: #2980b9;
        }
        .unsubscribe-form {
            display: inline-block;
            margin-top: 10px;
        }
        .unsubscribe-button {
            background-color: #e74c3c;
            margin-left: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Subscription Confirmed!</h1>

    <div class="image">
        <img src="https://www.pexels.com/photo/page-with-text-about-coronavirus-4098560/" alt="Newsletter Image">
    </div>
    <h2>{{ $email }}</h2>

    <div class="buttons">
        <a href="{{ route('home') }}" class="button">Start Exploring</a>
        <form action="{{ route('unsubscribe', ['email' => $email]) }}" method="POST" class="unsubscribe-form">
            @csrf
            @method('PUT')
            <input type="hidden" name="email" value="{{ $email }}">
            <button type="submit" class="button unsubscribe-button">Unsubscribe</button>
        </form>

{{--        <a href="{{ route('unsubscribe.form', ['email' => $email]) }}"></a>--}}

    </div>

    <p>Thank you for choosing <span style="font-weight: bold;">This NewsLetter</span>!</p>
</div>

</body>
</html>
