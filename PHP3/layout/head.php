<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Output 3</title>
    <style>
        /* Modern Reset & Fonts */
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #eef2f5; color: #333; line-height: 1.6; }
        
        /* Top Navigation Bar */
        .nav { background-color: #2c3e50; padding: 15px 0; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .nav a { color: #ecf0f1; text-decoration: none; margin: 0 20px; font-weight: 600; font-size: 16px; transition: color 0.3s; }
        .nav a:hover { color: #3498db; }
        
        /* Main Container */
        .container { width: 80%; max-width: 900px; margin: 40px auto; background: #fff; padding: 30px 40px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        
        /* Headings */
        h1 { color: #2c3e50; text-align: center; margin-bottom: 25px; font-size: 28px; }
        
        /* Form Styling */
        form { max-width: 600px; margin: 0 auto; }
        .form-group { margin-bottom: 15px; display: flex; align-items: center; }
        .form-group label { width: 150px; font-weight: 600; color: #555; }
        .form-group input, .form-group select, .form-group textarea { flex: 1; padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-family: inherit; font-size: 14px; transition: border-color 0.3s; }
        .form-group input:focus, .form-group select:focus, .form-group textarea:focus { border-color: #3498db; outline: none; }
        
        /* Buttons */
        input[type="submit"] { background-color: #3498db; color: white; padding: 12px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; font-weight: 600; width: 100%; margin-top: 15px; transition: background-color 0.3s; }
        input[type="submit"]:hover { background-color: #2980b9; }
        
        /* Table Styling */
        table { width: 100%; border-collapse: collapse; margin-top: 25px; font-size: 14px; }
        th, td { padding: 12px 15px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background-color: #34495e; color: white; font-weight: 600; text-transform: uppercase; font-size: 12px; letter-spacing: 0.5px; }
        tr:hover { background-color: #f9f9f9; }
        
        /* Messages */
        .error { color: #e74c3c; background: #fadbd8; padding: 10px; border-radius: 5px; text-align: center; margin-bottom: 20px; }
        .success { color: #27ae60; background: #d5f5e3; padding: 10px; border-radius: 5px; text-align: center; margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="nav">
        <a href="index.php">Add Person</a>
        <a href="redirect.php">View List</a>
    </div>
    <div class="container">