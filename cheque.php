<?php
abstract class cheque
{
	protected $valor;
	protected $juros;

	public function setValor( $valor )
	{
		$this->valor = $valor;
	}

	public function getValor()
	{
		return $this->valor;
	}

	public function getJuros(){
		return $this->juros;
	}

	abstract public function calculaJuros();
}

class ChequeComum extends cheque
{

	function __construct() {
		$this->juros=1.25;
	}

	public function calculaJuros()
	{
		return $this->valor * $this->juros; // soma 25% em cima do valor
	}
}






class ChequeEspecial extends cheque
{

	protected $chequecomum;

	function __construct() {
		$this->juros=1.10;
		$this->chequecomum = new ChequeComum;
	}

	public function calculaJuros()
	{
		return $this->valor * $this->juros ; // soma 10% em cima do valor
	}

	public function calculaJurosComum()
	{
		//$this->chequecomum->setvalor($this->valor);
		//return $this->chequecomum->calculaJuros();
		return $this->valor * $this->chequecomum->getJuros();
	}
}

$chequecomum = new ChequeComum();
$chequeespecial = new ChequeEspecial();

$chequecomum->setValor(10);
echo "juros do cheque comum:".$chequecomum->getJuros()."\n<br>";

$chequeespecial->setValor(10);


echo "juros do cheque especial:".$chequeespecial->getJuros()."\n<br>";
