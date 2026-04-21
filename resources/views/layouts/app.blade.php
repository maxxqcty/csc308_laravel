<!DOCTYPE html>
<html>
<head>
    <title>Animal CRUD</title>

    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
            background-color: #f9fafb;
            margin: 0;
            color: #111827;
        }

        header {
            padding: 20px 0;
            text-align: center;
            font-size: 20px;
            font-weight: 600;
            border-bottom: 1px solid #e5e7eb;
            background: #ffffff;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 0 20px;
        }

        a {
            color: #2563eb;
            text-decoration: none;
            font-size: 14px;
        }

        a:hover {
            text-decoration: underline;
        }

        .btn {
            display: inline-block;
            padding: 8px 14px;
            font-size: 14px;
            border-radius: 6px;
            background: #2563eb;
            color: white;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background: #1e40af;
        }

        .btn-danger {
            background: #ef4444;
        }

        .btn-danger:hover {
            background: #b91c1c;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 14px;
        }

        th {
            text-align: left;
            padding: 10px;
            border-bottom: 2px solid #e5e7eb;
            font-weight: 500;
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #f1f1f1;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 6px 0 16px;
            border: 1px solid #e5e7eb;
            border-radius: 6px;
            font-size: 14px;
        }

        input:focus {
            outline: none;
            border-color: #2563eb;
        }

        h1 {
            font-size: 22px;
            margin-bottom: 15px;
        }

        .actions a {
            margin-right: 8px;
        }
    </style>
</head>
<body>

<header>
    Animal Manager
</header>

<div class="container">
    @yield('content')
</div>

</body>
</html>