<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Luas Lingkaran</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f4f4f4;
    margin: 0;
}

.container {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 300px;
}

h2 {
    margin-bottom: 20px;
}

input {
    width: 100px;
    padding: 5px;
    margin-bottom: 15px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

button {
    background-color: #007bff;
    color: white;
    padding: 8px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

p {
    font-size: 18px;
    margin-top: 20px;
}

#result {
    color: red;
    font-weight: bold;
}

    </style>
</head>
<body>
    <div class="container">
        <h2>Hitung Luas Lingkaran</h2>
        <label for="radius">Jari-jari (cm):</label>
        <input type="number" id="radius" placeholder="Masukkan jari-jari">
        <button onclick="hitungLuas()">Hitung Luas</button>
        <p>Luas Lingkaran: <span id="result">0</span> cm²</p>
    </div>

    <script>
        function hitungLuas() {
    const radius = document.getElementById('radius').value;
    const result = document.getElementById('result');

    if (radius) {
        const luas = Math.PI * Math.pow(radius, 2);
        result.textContent = luas.toFixed(2);
    } else {
        result.textContent = 0;
    }
}

    </script>
</body>
</html>
