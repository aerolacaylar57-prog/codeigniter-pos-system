<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= esc($title ?? 'Basic POS') ?> | Basic POS</title>

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

        .button,
        button {
            display: inline-block;
            margin-top: 15px;
            padding: 12px 20px;
            border: none;
            color: white;
            text-decoration: none;
            background: #2563eb;
            border-radius: 5px;
            cursor: pointer;
        }

        .button:hover,
        button:hover {
            background: #1d4ed8;
        }

        form p {
            margin-bottom: 18px;
        }

        label {
            display: inline-block;
            margin-bottom: 7px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="file"] {
            width: 100%;
            max-width: 600px;
            padding: 11px;
            border: 1px solid #cbd5e1;
            border-radius: 5px;
        }

        form a {
            display: inline-block;
            margin-left: 12px;
            color: #475569;
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

        @media (max-width: 700px) {
            nav {
                flex-wrap: wrap;
                gap: 15px;
                padding: 18px 5%;
            }

            .brand {
                width: 100%;
            }

            .container {
                width: 95%;
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <nav>
        <span class="brand">Basic POS</span>

        <a href="<?= site_url('/') ?>">Home</a>
        <a href="<?= site_url('about') ?>">About</a>
        <a href="<?= site_url('customers') ?>">Customers</a>
        <a href="<?= site_url('users') ?>">Users</a>
    </nav>

    <main class="container">