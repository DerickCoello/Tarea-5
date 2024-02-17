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

 .main-content2 {
    padding: 20px;
    width: 100%;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.config-item{
  margin:20px;
  align-self: 20px;

}

.button1 {
background-color: #1554b3;
width: fit-content;
padding: 5px 10px;
align-self: flex-end;
border: none;
border-radius: 8px;

color:white;
text-decoration: none;
}

.button2 {
    background-color: rgba(204, 184, 184, 0.842);
    width: fit-content;
    padding: 5px 10px;
    align-self: flex-end;
    border: none;
    border-radius: 8px;
    color:black;
    text-decoration: none;
    }
.config-item{
  width: 50%;  
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
    <div class="main-content2">
            <h2>Configuraciones</h2>
            <form>
                <div class="config-item">
                    <label for="slogan">Slogan:</label>
                    <input type="text" id="slogan" name="slogan" >
                </div>
                <div class="config-item">
                    <label for="email">Correo de notificaciones:</label>
                    <input type="email" id="correo" name="correo" >
                </div>
                <div>
                    <label for="active">Plataforma activa:</label>
                    <input type="checkbox">
                </div>
                <button type="submit" class="button1">Guardar</button>
                <button type="button" class="button2">Cancelar</button>
            </form>
        </div>
  </body>
</html>