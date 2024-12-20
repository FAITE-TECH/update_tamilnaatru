<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<style>
    body {
    font-family: 'Arial', sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

form {
    background: #ffffff;
    padding: 20px 30px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    width: 100%;
    box-sizing: border-box;
}

form label {
    font-size: 16px;
    font-weight: bold;
    color: #333;
    display: block;
    margin-bottom: 8px;
}

form input[type="text"],
form input[type="number"],
form input[type="file"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
    font-family: 'Arial', sans-serif;
}

form input[type="text"]:focus,
form input[type="number"]:focus,
form input[type="file"]:focus {
    border-color: #007bff;
    outline: none;
}

form button {
    background-color: #1cbbb4;
    color: white;
    border: none;
    padding: 10px 15px;
    font-size: 16px;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
}

form button:hover {
    background-color: ;
}

form button:active {
    background-color: #1cbbb4;
}

form input::placeholder {
    color: #aaa;
}

form input[type="text"],
form input[type="number"] {
    direction: rtl; /* Support Tamil and other RTL languages */
}

@media (max-width: 480px) {
    form {
        padding: 15px 20px;
    }

    form label {
        font-size: 14px;
    }

    form button {
        font-size: 14px;
    }
}

</style>



<form method="POST" action="add_category.php" enctype="multipart/form-data">
<h2 >பொத்தான்  வடிவமைப்பு</h2>
    <label>பொத்தான் பெயர்:</label>
    <input type="text" name="display_name" required>
    <label>பொத்தான் வகை:</label>
    <input type="text" name="category_name" required>
    <label>பொத்தானுக்குறிய படம்:</label>
    <input type="file" name="image" accept="image/*" required>
    <label> பொத்தானின் நிலை:</label>
    <input type="number" name="button_position" required>
    <button type="submit">பொத்தானை சேர்க்க</button>
</form>
</body>
</html>
