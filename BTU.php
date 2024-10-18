<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de BTUs</title>
    <style type="text/css">
        *{
            margin:0px;
            background-color:#444;
            font-family: times, sans-serif;
            color: #F48B00;
        }
        h1{
            text-align:center;
        }

        input{
            /* display:block; */
            margin-top:12px;
        }
        form{
            margin-top:5%;
            margin-left:27%;
        }
        .explica{
            margin-top:8%;
            text-align:justify;
            margin-left:20%;
        }
        strong{
            color: #CA303F;
        }
        h3{
            margin-top:6%;
            margin-left: 25%;
        }
    </style>
</head>
<body>
    <h1>Calculadora de BTUs para ar-condiconados residenciais.</h1>

    <p class="explica">Selecione abaixo se o ar-condicionado será instalado num ambiente Comercial ou Residencial.<br><strong>ATENÇÃO: Se não for selecionado, o cálculo não irá ocorrer.</strong><br>Depois digite a largura e o comprimento do ambiente, o programa irá calcular a área para você e indicará a potência, em BTUs, que seu ar-condicionado precisará possuir.</p>

    <form action="" method="post">
        <select name="selector" id="resident_selector">
            <option value="na">Não selecionado</option>
            <option value="comercial">Comercial</option>
            <option value="residencial">Residencial</option>
        </select>
        
        <label for="">Largura</label>
        <input type="text" name="largura">

        <label for="">Comprimento</label>
        <input type="text" name="comprimento">

        <input type="submit" name="enviar" value="Calcular">

    </form>

    <?php
        if (isset($_POST['enviar'])){

            //CÁLCULO DE ÁREA
            $largura=$_POST['largura'];
            $comprimento=$_POST['comprimento'];
            $i=$largura*$comprimento;
            
            //SELECIONANDO RESIDENCIAL
            if ($_POST['selector']=="residencial"){
            //SWITCH CASE RESIDENCIAL
            switch ($i){
                case $i<=12:
                    echo "<br><h3>A área do ambiente é de $i m², precisa de um ar-condicionado de potência de 7.000 BTUs</h3>";
                    break;
                
                case $i>=15 and $i<=19:
                    echo "<br><h3>A área do ambiente é de $i m², precisa de um ar-condicionado de potência de 9.000 BTUs</h3>";
                    break;

                case $i>=20 and $i<=24:
                    echo "<br><h3>A área do ambiente é de $i m², precisa de um ar-condicionado de potência de 12.000 BTUs</h3>";
                    break;
                
                case $i>=21 and $i<=25:
                    echo "<br><h3>A área do ambiente é de $i m², precisa de um ar-condicionado de potência de 15.000 BTUs</h3>";
                    break;
                
                case $i>=26 and $i<=30:
                    echo "<br><h3>A área do ambiente é de $i m², precisa de um ar-condicionado de potência de 18.000 BTUs</h3>";
                    break;
                
                case $i>=35 and $i<=39:
                    echo "<br><h3>A área do ambiente é de $i m², precisa de um ar-condicionado de potência de 21.000 BTUs</h3>";
                    break;
                
                case $i>=40 and $i<=44:
                    echo "<br><h3>A área do ambiente é de $i m², precisa de um ar-condicionado de potência de 24.000 BTUs</h3>";
                    break;
                
                case $i>=45 and $i<=49:
                    echo "<br><h3>A área do ambiente é de $i m², precisa de um ar-condicionado de potência de 27.000 BTUs</h3>";
                    break;
                
                case $i>=50 and $i<=59:
                    echo "<br><h3>A área do ambiente é de $i m², precisa de um ar-condicionado de potência de 30.000 BTUs</h3>";
                    break;
                
                case $i>=60 and $i<=69:
                    echo "<br><h3>A área do ambiente é de $i m², precisa de um ar-condicionado de potência de 36.000 BTUs</h3>";
                    break;
                
                case $i>=70:
                    echo "<br><h3>A área do ambiente é de $i m², precisa de um ar-condicionado de potência de 42.000 BTUs</h3>";
                    break;
            }
        }
        //CONDICONAL PARA COMERCIAL
        elseif($_POST['selector']=="comercial"){
            //SWITCH CASE COMERCIAL
            switch ($i){
                case $i <=11:
                    echo "<br><h3></h3>A área do ambiente é de $i m², precisa de um ar-condicionado de potência de 7.000 BTUs</h3>";
                    break;

                case $i>=12 and $i<=14:
                    echo "<br><h3>A área do ambiente é de $i m², precisa de um ar-condicionado de potência de 9.000 BTUs</h3>";
                    break;
                
                case $i>=15 and $i<=19:
                    echo "<br><h3>A área do ambiente é de $i m², precisa de um ar-condicionado de potência de 12.000 BTUs</h3>";
                    break;

                case $i>=20 and $i<=24:
                    echo "<br><h3>A área do ambiente é de $i m², precisa de um ar-condicionado de potência de 16.000 BTUs</h3>";
                    break;
                
                case $i>=21 and $i<=25:
                    echo "<br><h3>A área do ambiente é de $i m², precisa de um ar-condicionado de potência de 20.000 BTUs</h3>";
                    break;
                
                case $i>=26 and $i<=30:
                    echo "<br><h3>A área do ambiente é de $i m², precisa de um ar-condicionado de potência de 24.000 BTUs</h3>";
                    break;
                
                case $i>=35 and $i<=39:
                    echo "<br><h3>A área do ambiente é de $i m², precisa de um ar-condicionado de potência de 28.000 BTUs</h3>";
                    break;
                
                case $i>=40 and $i<=44:
                    echo "<br><h3>A área do ambiente é de $i m², precisa de um ar-condicionado de potência de 32.000 BTUs</h3>";
                    break;
                
                case $i>=45 and $i<=49:
                    echo "<br><h3>A área do ambiente é de $i m², precisa de um ar-condicionado de potência de 36.000 BTUs</h3>";
                    break;
                
                case $i>=50 and $i<=59:
                    echo "<br><h3>A área do ambiente é de $i m², precisa de um ar-condicionado de potência de 40.000 BTUs</h3>";
                    break;
                
                case $i>=60 and $i<=69:
                    echo "<br><h3>A área do ambiente é de $i m², precisa de um ar-condicionado de potência de 48.000 BTUs</h3>";
                    break;
                
                case $i>=70:
                    echo "<br><h3>A área do ambiente é de $i m², precisa de um ar-condicionado de potência de 56.000 BTUs</h3>";
                    break;
                }
        }
    }
    //CÓDIGO DE TREINAMENTO, MUITO A MELHORAR AINDA
    ?>
</body>
</html>