<!DOCTYPE html> 
<html lang="en"> 
<head> 

<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Hitung Luas Segitiga</title> 
<style> 
* {
margin: 0; 
padding: 0; 
box-sizing: border-box; 
}
body { 
font-family: Arial, sans-serif; 
background-color: #f4f4f4; 
display: flex; 
justify-content: center; 
align-items: center; 
height: 100vh; 
} 
.container { 

background-color: white; 
padding: 20px; 
border-radius: 10px; 
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
text-align: center; } 
h1 { 

margin-bottom: 20px; 
color: #333; } 
form label { 
font-size: 16px; 
margin-right: 10px; 
} 
input[type="number"] { 
padding: 8px; 
width: 100px; 
} 
button { 
padding: 10px 20px; 
margin-top: 10px; 
background-color: #28a745; 
color: white; 
border: none; 
border-radius:5px; 
cursor: pointer; 
} 

button:hover { 
background-color: #218838; 
} 
h2 { 
margin-top: 20px; 
color: #333; 
} 
#result { 
color: #e63946; 
} 
</style> 

</head> 
<body> 
<div class="container"> 
<h1>Hitung Luas Segitiga</h1> 
<form id="triangle-form"> 
<label for="base">Alas (cm):</label> 
<input type="number" id="base" required><br><br> 
<label for="height">Tinggi (cm):</label> 
<input type="number" id="height" required><br><br> 
<button type="button" onclick="hitungLuas()">Hitung Luas</button> 
</form> 
<h2>Luas Segitiga: <span id="result">0</span> cm2</h2> 
</div> 

<script> 
function hitungLuas() { 
const base = document.getElementById('base').value; 
const height = document.getElementById('height').value; 
const luas = 0.5 * base * height; 
document.getElementById('result').textContent = luas; 
} 
</script> 
</body> 
</html> 
