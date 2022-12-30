<?php 

function f1()
{
    echo "F1 está antes da execução <br>";
}

function f2($int)
{
    if(!is_int($int))
    {
        throw new Exception("O Argumento Não é do tipo esperado");
    }
    else
    {
        echo "F2 Está na execução";
    }

    f3();
}

function f3()
{
    echo "F3 está depois da execução";
}

// f1();
// f2(int: 5.5);


function divisao($a, $b)
{
    try{
        if($b == 0)
        {
            throw new RangeException("O Número Não é valido");
        }

        $result = $a / $b;
        echo "O Resultado é: $result";
    }catch(Exception){
        echo "A excessão de cima, ou seja se define aqui a Excessão";
    }
    finally
    {
        echo "<br/> Tratando exceções";
    }
}

divisao(5, 0);