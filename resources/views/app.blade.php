<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name','LSAPP')}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
       body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f9f9f9;
        }
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
        }
        form {
            text-align: center;
            margin-top: 20px;
        }
        input[type="text"] {
            width: 300px;
            padding: 8px;
        }
        button[type="submit"] {
            padding: 8px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .shortened-url {
            text-align: center;
            margin-top: 20px;
        }
        .shortened-url a {
            font-weight: bold;
            color: #007bff;
            text-decoration: none;
        }
        h3 {
            text-align: center;
            padding: 20px;
            background-color: #007bff;
            color: #fff;
        }   
        </style>
<body>
       @yield('content')
</body>