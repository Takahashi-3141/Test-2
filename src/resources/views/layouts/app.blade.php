<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>mogitate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS読み込み -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            background-color: #f9f9f9;
            font-family: 'Helvetica Neue', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }

        header {
            background-color: white;
            padding: 1rem 2rem;
            border-bottom: 1px solid #eee;
        }

        header .logo {
            font-size: 1.5rem;
            font-style: italic;
            color: #f5b800;
        }

        main {
            padding: 2rem;
        }

        h2 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            font-weight: bold;
        }

        form label {
            display: block;
            margin-top: 1rem;
            margin-bottom: 0.25rem;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            resize: vertical;
        }

        .form-buttons {
            margin-top: 2rem;
        }

        .form-buttons button,
        .form-buttons a {
            padding: 0.5rem 1.5rem;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            text-decoration: none;
            margin-right: 1rem;
        }

        .form-buttons button {
            background-color: #f5b800;
            color: white;
            cursor: pointer;
        }

        .form-buttons a {
            background-color: #ccc;
            color: black;
        }

        .error {
            color: red;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">mogitate</div>
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>