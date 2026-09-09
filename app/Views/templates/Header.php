<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= esc($title) ?> | Basic POS</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 25px;
            padding: 18px 8%;
            background: #1e293b;
        }

        .brand {
            margin-right: auto;
            color: #38bdf8;
            font-size: 22px;
            font-weight: bold;
        }

        nav a {
            color: white;
            text-decoration: none;
        }

        nav a:hover {
            color: #38bdf8;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            min-height: 500px;
            margin: 40px auto;
            padding: 35px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.08);
        }

        h1 {
            color: #0f172a;
        }

        .button {
            display: inline-block;
            margin-top: 15px;
            padding: 12px 20px;
            color: white;
            text-decoration: none;
            background: #2563eb;
            border-radius: 5px;
        }

        .button:hover {
            background: #1d4ed8;
        }

        table {
            width: 100%;
            margin-top: 25px;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 12px;
            border: 1px solid #cbd5e1;
            text-align: left;
        }

        th {
            color: white;
            background: #2563eb;
        }

        tr:nth-child(even) {
            background: #f8fafc;
        }

        footer {
            padding: 20px;
            color: #64748b;
            text-align: center;
        }
    </style>
</head>

<body>
    <nav>
        <span class="brand">Basic POS</span>

        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/customers">Customers</a>
        <a href="/users">Users</a>
    </nav>

    <main class="container">