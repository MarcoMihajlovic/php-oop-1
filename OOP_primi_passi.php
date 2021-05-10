<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Movie {
    public $titolo;
    public $titolo_originale;
    public $durata;
    public $genere;
    public $regista;
    public $anno;
    private $eta = 0;

    function __construct($titolo, $titolo_originale, $durata, $genere, $regista, $anno) {
       
        $this->titolo = $titolo;
        $this->titolo_originale = $titolo_originale;
        $this->durata = $durata;
        $this->genere = $genere;
        $this->regista = $regista;
        $this->anno = $anno;
    }

    function get_titolo() {
        return $this->titolo;
    }

    function get_titolo_originale() {
        return $this->titolo_originale;
    }

    function get_durata() {
        return $this->durata;
    }

    function get_genere() {
        return $this->genere;
    }

    function get_regista() {
        return $this->regista;
    }

    function get_anno() {
        return $this->anno;
    }

    public function set_eta($anno){
        $this->eta = 2021 - $anno;
    }

    public function get_eta(){
        return $this->eta;
    }

}

$starWars = new Movie('Star Wars: Episodio 1 - La Minaccia Fantasma', 'Star Wars: Episode I – The Phantom Menace', '133 minuti', 'fantascienza', 'George Lucas', 1999);
$atlantis = new Movie('Atlantis - L\'impero Perduto', 'Atlantis: The Lost Empire', '96 minuti', 'animazione', 'Gary Trousdale', 2001);

echo 'Titolo: '.$starWars->get_titolo();
echo "<br>";
echo 'Titolo originale: '.$starWars->get_titolo_originale();
echo "<br>";
echo 'Durata: '.$starWars->get_durata();
echo "<br>";
echo 'Genere: '.$starWars->get_genere();
echo "<br>";
echo 'Regista: '.$starWars->get_regista();
echo "<br>";
echo 'Anno di uscita: '.$starWars->get_anno();
echo "<br>";
$starWars->set_eta($starWars->get_anno());
echo 'Uscito '.$starWars->get_eta().' anni fa\'';
echo "<br>";

/* var_dump($starWars); */
echo "<br>";
echo 'Titolo: '.$atlantis->get_titolo();
echo "<br>";
echo 'Titolo originale: '.$atlantis->get_titolo_originale();
echo "<br>";
echo 'Durata: '.$atlantis->get_durata();
echo "<br>";
echo 'Genere: '.$atlantis->get_genere();
echo "<br>";
echo 'Regista: '.$atlantis->get_regista();
echo "<br>";
echo 'Anno di uscita: '.$atlantis->get_anno();
echo "<br>";
$atlantis->set_eta($atlantis->get_anno());
echo 'Uscito '.$atlantis->get_eta().' anni fa\'';

/* var_dump($atlantis); */


?>
