<?
class Generators extends Good{
	private $series;
	private $mainMemory;
	private $reserveMemory;

	function __construct($type, $name, $price, $number, $goodQuantity, $series, $mainMemory, $reserveMemory){
		parent::__construct($type, $name, $price, $number, $goodQuantity);
		$this->setSeries($series);
		$this->setMainMemory($mainMemory);
		$this->setReserveMemory($reserveMemory);	
	}
	function setSeries($series){
		$this->series = $series;
	}
	function setMainMemory($mainMemory){
		$this->mainMemory = $mainMemory;
	}
	function setReserveMemory($reserveMemory){
		$this->reserveMemory = $reserveMemory;
	}
	function goodCart(){
		echo '<pre>';
		echo '***********************************************';
		echo '</pre>';	
		parent::goodCart();
		echo "<p><i>Серия:</i> ".$this->series."</p><br>
		<p>Память: ".$this->mainMemory." Gb</p>
		<p>Доп. макс. память SD: ".$this->reserveMemory." Gb</p>";
	}
}

$gen1 = new Generators("Apple", "Iphone 6s", 25000, 0, "", "Original", 64, 0);
$gen1->goodCart();
$gen2 = new Generators("Apple", "Iphone 7", 35000, 0, "", "Original", 128, 0);
$gen2->goodCart();
$gen3 = new Generators("Apple", "Iphone X", 55000, 0, "", "Original", 256, 0);
$gen3->goodCart();