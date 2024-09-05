<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 400px;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .container input, .container select, .container textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .container button {
            width: 100%;
            padding: 10px;
            background: #5c6bc0;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        .container button:hover {
            background: #3949ab;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Contact Form</h2>
    <form action="submit.php" method="POST">
        <input type="text" name="name" placeholder="Nama" required>
        <input type="text" name="nim" placeholder="NIM" required>
        <input type="text" name="class" placeholder="Kelas" required>
        <input type="text" name="gender" placeholder="Jenis Kelamin" required>
        <input type="email" name="email" placeholder="Email" required>
        <textarea name="message" placeholder="Pesan" required></textarea>
        <button type="submit">Kirim</button>
    </form>
</div>

</body>
</html>
