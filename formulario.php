<?php 

				$n1= $_POST["n1"];
				$n2 =  $_POST["n2"];

				$soma = (int)$n1 + (int)$n2;
				$divisao =  $n1/$n2;
				$multiplicacao = $n1*$n2;
				$subtracao =  $n1-$n2;

				echo "Soma: " .$soma ."<br> Divisão: ".$divisao . "<br> Multiplicacao: " .$multiplicacao
				."<br> Subtração: " .$subtracao;


 ?>