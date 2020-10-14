<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<title>Formulario con ajax</title>
<script language="javascript" src="ajax.js">
</script>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <h1>Formulario con ajax</h1><br />
    <div id="texto"></div><br /><a href="#" onClick="pasarNumeros()">Ver comentarios</a></div>
    <br />
    <br />
    <form name="form1">
    <textarea name="contenido" cols="30" rows="4" ></textarea><br /><br />
    <input type="button" value="Procesar" onClick="pasarNumeros()" />
    </form>   
</body>
</html>