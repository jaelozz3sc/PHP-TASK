<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Faculty CRUD (MVC)</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #eef2f5; color: #333; line-height: 1.6; }
        .container { width: 80%; max-width: 1000px; margin: 40px auto; background: #fff; padding: 30px 40px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        h1 { color: #2c3e50; margin-bottom: 20px; text-align: center; }
        .btn { display: inline-block; padding: 10px 15px; background: #3498db; color: white; text-decoration: none; border-radius: 5px; border: none; cursor: pointer; font-size: 14px; transition: 0.3s; }
        .btn:hover { background: #2980b9; }
        .btn-danger { background: #e74c3c; }
        .btn-danger:hover { background: #c0392b; }
        .btn-success { background: #27ae60; }
        .btn-success:hover { background: #219150; }
        
        /* Table */
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 12px 15px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background-color: #34495e; color: white; }
        tr:hover { background-color: #f9f9f9; }
        
        /* Form */
        .form-group { margin-bottom: 15px; display: flex; align-items: center; }
        .form-group label { width: 150px; font-weight: 600; }
        .form-group input, .form-group select, .form-group textarea { flex: 1; padding: 10px; border: 1px solid #ccc; border-radius: 5px; }
        .form-group input[type="submit"] { background: #3498db; color: white; border: none; cursor: pointer; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">