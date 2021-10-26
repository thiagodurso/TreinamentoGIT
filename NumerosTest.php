<?php 

require_once("Numeros.php");

class NumerosTest{
	
	private $total;
	private $ok;
	
	public function setUp(){
		
		$this->total = 0;
		$this->ok = 0;

	}
	
	public function summary(){
		
		echo "<br/>Summary: " . $this->ok . "/" . $this->total . " tests passed";
						
	}
	
	public function TestRemover(){

		$array = new Numeros();

		$array->inserir(1);
		$array->inserir(2);
		$array->inserir(3);
		

		$num = 2;
		$resposta = $array->remover($num);

		if ( $resposta == "true" ){
			$this->ok ++;						
			$this->total ++;}

			print_r( $array);
			
	}

	public function TestContar(){
						
		$array = new Numeros();

		$array->inserir(7);
		$array->inserir(2);
		$array->inserir(8);
		$array->inserir(2);
		$array->inserir(5);
		$array->inserir(2);

		$num = 2;
		$quantidade = $array->contar($num);

		if ( $quantidade == "3" ){
			$this->ok ++;					
			$this->total ++;
			
			}	
		print_r( "<br>" . $quantidade);
	}

	public function TestSoma(){

		$array = new Numeros();

		$array->inserir(1);
		$array->inserir(2);
		$array->inserir(3);
		
		$soma = $array->soma();

		if ( $soma == 6 ){
			$this->ok ++;						
			$this->total ++;}

			print_r( "<br>" . $soma);
			
	}

	public function TestProduto(){

		$array = new Numeros();

		$array->inserir(2);
		$array->inserir(2);
		$array->inserir(3);
		

		$produto = $array->produto();

		if ( $produto == 12 ){
			$this->ok ++;						
			$this->total ++;}

			print_r( "<br>" . $produto);
			
	}
	

}
$testsuite = new NumerosTest();

$testsuite->setUp();

$testsuite->TestRemover();
$testsuite->TestContar();
$testsuite->TestSoma();
$testsuite->TestProduto();
$testsuite->summary();

?>