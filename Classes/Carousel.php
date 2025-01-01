<?php
class Carousel
{
    private $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }
    public function getCarousel(){
        $sql = "SELECT * FROM Carousel";
        $query = $this->pdo->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}