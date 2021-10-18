<?php 

				
				$num1 = $_POST["n1"];
				$num2 = $_POST["n2"];
				$n1=$num1;
				$n2 = $num2;

				$soma=0;
				$soma = (int)$n1 + (int)$n2;
				$divisao =  $n1/$n2;
				$multiplicacao = $n1*$n2;
				$subtracao =  $n1-$n2;

				echo "Soma: " .$soma ."<br> Divisão: ".$divisao . "<br> multiplicacao: " .$multiplicacao
				."<br> Subtração: " .$subtracao;


 ?>