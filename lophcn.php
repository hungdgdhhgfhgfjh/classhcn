<?php 
class Hinh{
    public int $width;
    public int $height;
     public function setWidth($width) {
         $this->width=$width;
    }
    public function getWidth() {
        return $this->width;
    }
    public function setHeight($height) {
        $this->height=$height;
    }
     public function getHeight()
    {
        return $this->height;
    }
    public function getchuvi() {
        $cv=($this->width+$this->height)*2;
        return $cv;
    }
    public function getdientich() {
        $dt=$this->width*$this->height;
        return $dt;
    }

}
$objhcn=new hinh();
$objhcn->setWidth(20);
$objhcn->setheight(30);
echo "chiều rộng " . $objhcn->getWidth(). "m" . "<br>";
echo "chiều dài " . $objhcn->getHeight() ."m" . "<br>";
echo " chu vi là " . $objhcn->getchuvi() . "m" . "<br>";
echo " diện tích là ". $objhcn->getdientich() . "m^2" . "<br>";