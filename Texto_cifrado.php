<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cifrado Cesar</title>
    <style>
        body {
            width: 80%;
            background-color: black;
            color: white;
            text-align: center;
            margin: auto;
        }
        h3{

            color:aqua;
        }
        .resul{
width: 200px;
margin: 5px auto;
border: aqua 2px solid;

        }
        .titu{
            margin: 5px auto;

        }
        .re{
            margin-top: 20px;
            display: flex;
            justify-content: space-around;
        }
    </style>
</head>

<body>
    <h1>Cifrado Cesar</h1>
    <p>Escribir un programa en HTML que pida un texto y un número, que
        representan un texto a cifrar por medio del método cifrado César y el
        número que queremos que se desplace el texto original. El método es un
        tipo de cifrado por sustitución, en el que una letra de un texto original es
        reemplazada por otra que se encuentra un número fijo de posiciones más
        adelante en el alfabeto. Luego llamar a un programa php con el método
        GET, que indique el texto resultante una vez que se le aplicó el método.
        Tener en cuenta los espacios en blanco, que se deberán respetar en el
        texto cifrado. <br>
        Ejemplo: si el texto original era mi gran secreto y el desplazamiento es 1,
        el texto cifrado debería ser nj hsbo tfdsfup.</p>

    <form action="Texto_cifrado.php" method="get">

        <label for="">Ingrese texto</label> <br><br>
        <input type="text" name="texto" required>
        <br><br>
        <label for="">Ingrese numero para el cifrado</label> <br><br>

        <input type="number" name="num" required>
        <br><br>
        <input type="submit" name="codi" value="CODIFICAR">
    </form>


    <?php
    if (isset($_GET["codi"])) {

        $letras = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l",  "m", "n", "o", "p", "q", "r", "s", "t", "u", "w", "x", "y", "z"];
        $texto2 = [];
        $texto = $_GET["texto"];
        $num = $_GET["num"];
        $texto1 = str_split($texto);
        $largo = count($texto1);
        $largo1 = count($letras);

        for ($a = 0; $a <= $largo - 1; $a++) {

            for ($b = 0; $b <= $largo1 - 1; $b++) {
               
                if($texto[$a]== end($letras)){
                $texto2[$a] = $letras[($largo1-1)-($largo1-$num)];

                }


                
                elseif ($texto1[$a] == $letras[$b]) {
                    $letracadena=implode($letras);

                    if(strpos($letracadena, $letras[$b]) + $num > 24){
                        $texto2[$a] =$letras[24-(26-$num)];
                    
                    }else{

                     $texto2[$a] = $letras[$b + $num];
                    }
                     



                }elseif($texto1[$a]==" "){
                    $texto2[$a] =" ";


                }

            }
        }
        $result = implode($texto2);
        echo "<div class='re'>";
        echo "<div><p class='titu'>TEXTO ORIGINAL</p> <br><h3 class='resul'>  $texto </h3></div>";
        echo "<div><p class='titu'>PARAMETRO DE CIFRADO</p> <br><h3 class='resul'>  $num </h3></div>";
        echo "<div><p class='titu'>TEXTO CIFRADO</p> <br><h3 class='resul'>  $result </h3></div>";
        echo "</div>";

    }

    ?>
</body>

</html>