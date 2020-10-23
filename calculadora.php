<!Doctype html>
<html lang="pt-br">
	  <head>
        <meta charset="UTF-8"/>
        <title>Calculadora</title>
        <script src="js/Calculadora.js"></script>
        <link rel="stylesheet" href="css/estilo.css">
	  </head>

	  <body bgcolor="FF FA FA">

        <table border="9" align="center" cellpadding="9" cellspacing="9" bgcolor="#D2E6EB ">
          <tr>
            <th colspan="4" ><input type="text" name="tela" id="tela"/></th>
          </tr>
                <tr>
                  <td ><button type="button" value="AC" onclick="apagar()"><b>Ac</b></button></td>
                  <td><button type="button" value="(" onclick="botao(value)"><b>(</b></button></td>
                  <td><button type="button" value=")" onclick="botao(value)"><b>)</b></button></td>
                  <td><button type="button" value="%" onclick="botao(value)"><b>%</b></button></td>
                </tr>

                <tr align="center">
                  <td ><button type="button" value="7" onclick="botao(value)"><b>7</b></button></td>
                  <td ><button type="button" value="8" onclick="botao(value)"><b>8</b></button></td>
                  <td ><button type="button" value="9" onclick="botao(value)"><b>9</b></button></td>
                  <td ><button type="button" value="/" onclick="botao(value) "><b>/</b></button></td>
                </tr>

                <tr align="center">
                  <td ><button type="button" value="4" onclick="botao(value)"><b>4</b></button></td>
                  <td ><button type="button" value="5" onclick="botao(value)"><b>5</b></button></td>
                  <td ><button type="button" value="6" onclick="botao(value)"><b>6</b></button></td>
                  <td ><button type="button" value="*" onclick="botao(value)"><b>*</b></button></td>
                </tr>

                <tr align="center">
                  <td ><button type="button" value="1" onclick="botao(value)"><b>1</b></button></td>
                  <td ><button type="button" value="2" onclick="botao(value)"><p>2</p></button></td>
                  <td ><button type="button" value="3" onclick="botao(value)"><p>3</p></button></td>
                  <td ><button type="button" value="-" onclick="botao(value)"><b>-</b></button></td>
                </tr>

                <tr align="center">
                  <td ><button type="button" value="." onclick="botao(value)"><b>.</b></button></td>
                  <td ><button type="button" value="0" onclick="botao(value)"><b>0</b></button></td>
                  <td ><button type="button" value="+" onclick="botao(value)"><b>+</b></button></td>
                  <td ><button type="button" value="=" onclick="resultado()"><b>=</b></button></td>
                </tr>

	  </body>	
</html>