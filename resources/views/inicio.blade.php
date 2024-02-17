<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <script>
        function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
    </script>
    <style>
          * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    
    }
       body{
            font-family: Arial, Helvetica, sans-serif;
            font-size: small;
        }
        

        .topnav {
  background-color: #045faa;
  overflow: hidden;
}

.topnav a {
  float: left;
  display: block;
  color: #ddd;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #df7015;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}



.form {
   
    width: 100%;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px
}

.form h2{
    padding: 10px;
}
.stats {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.stat {
    background-color: #f5f5f5;
    padding: 20px;
    border-radius: 5px;
    width: calc(50% - 10px);
    margin-bottom: 20px;
    display: flex;
    flex-direction: column
}  
    </style>
</head>

<body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
<div class="topnav" id="myTopnav">
  <a href="{{ url('/inicio') }}" class="active">Inicio</a>
  <a href="{{ url('/articles') }}">Articulos</a>
  <a href="#contact">Bolsa de empleo</a>
  <a href="{{ url('/config') }}">Configuraciones</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
    <div class="form">
        <h2>Resumen</h2>
        <div class="stats">
            <div class="stat">
                <h3>1</h3>
                <p>Usuarios Activos</p>
            </div>
            <div class="stat">
                <h3>20</h3>
                <p>Artículos Activos</p>
            </div>
            <div class="stat">
                <h3>5</h3>
                <p>Autores</p>
            </div>
            <div class="stat">
                <h3>4</h3>
                <p>Editoriales</p>
            </div>
        </div>
    </div>
</body>
</html>