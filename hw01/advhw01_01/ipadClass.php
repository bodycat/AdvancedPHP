<?
class ipadClass extends Good{
	private $memory;
	private $color;
	function __construct($type, $name, $price, $number, $goodQuantity, $memory, $color){
		parent::__construct($type, $name, $price, $number, $goodQuantity);
		$this->setMemory($memory);
		$this->setColor($color);
	}
	function setMemory($memory){
		$this->memory = $memory;
	}
	function setColor($color){
		$this->color = $color;
	}
	function goodCart(){
		echo '<pre>';
		echo '***********************************************';
		echo '</pre>';	
		parent::goodCart();
		echo "<p>Память: ".$this->memory." Gb</p>
		<p>Цвет:</p>".$this->color."";
	}
}
$ipad1 = new ipadClass("Apple", "Ipad", 15000, 0, "", 16, "<ul><li>серебро, silver</li></ul>");
$ipad1->goodCart();
$ipad2 = new ipadClass("Apple", "Ipad", 20000, 0, "", 32, "<ul><li>золото, gold</li></ul>");
$ipad2->goodCart();
$ipad3 = new ipadClass("Apple", "Ipad", 25000, 0, "", 256, "<ul><li>белый, white</li></ul>");
$ipad3->goodCart();