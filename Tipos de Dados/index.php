<?php

# TIPOS DE DADOS
# ==============================

# as variáveis em php podem ter diferentes tipos de valores
# a mesma variável pode ter tippos diferentes de valores

$variavel = 100;
$variavel = "cem";

# apesar de serem variaveis de tipo implícito, é importante sabe:

$inteiro = 100;   # int
$float = 10.5;    # float (com casas decimais)
$bool = true;     # verdadeiro ou falso
$string = "olá, mundo";  # string (cadeira de caracteres)
$array = [1,2,3,];   # Array - coleção de valores
#$pessoa = new Pessoa();  #objeto com propriedades e métodos
$nulo = null;  # variável com valor .


# antes e depois do PHP 8

$variavel;
echo $variavel;