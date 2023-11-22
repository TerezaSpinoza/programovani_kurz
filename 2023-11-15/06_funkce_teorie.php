<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fce</title>
</head>
<body>
  <h1>Funkce</h1>
  <?php
//fce se volá (call) a fce něco vrací znamená výsledek (return)

//Matematické fce

//round: zaokrouhleni; mohu vložit parametr/argument (vlastnosti, informace např.)
var_dump(round(4.84)); //5
var_dump(round(4.37)); //4
var_dump(round(4.84, 1)); //4,8
var_dump(round(4.37, 1)); //4,4

//rand: nahodne cislo
var_dump(rand()); //jen kladny cisla, hodnoty min a max jsou optional

//pi: vrati cislo pi
var_dump(pi());

//ceil: fce zaokrouhluje vzdy nahoru
//floor: -"- dolu
var_dump(ceil(3.00000000001)); //4
var_dump(floor(3.00000000001)); //3

//max/min: zjisti nejvetsi/nejmensi cislo v poli
$poleCisel = ["0", "58", "666", "4"];
var_dump(max($poleCisel)); //666
var_dump(min($poleCisel)); //0

//-----------------------------------------------------------------------------------------------
//Textové fce

//strlen: vraci pocet znaku ve stringu (string lenght)
//hacky carky mezery se take pocitaji jako jeden znak
$veta = "Dnes je středa.";
var_dump(strlen($veta)); //16 znaku

//mb_strlen multibite strlen bere písmenko ř jako jeden znak
var_dump(mb_strlen($veta)); //15 znaku

//strtolower a strtoupper
//meni pismena na velka a mala
var_dump(strtolower($veta));
var_dump(strtoupper($veta)); //'DNES JE STřEDA.'
//neumi si to poradit s hackami a carkami //exisutje ale mb verze
var_dump(mb_strtolower($veta));
var_dump(mb_strtoupper($veta));

//!!!dulezite!!!, funkce originalni promennou nemeni, funkce vraci jako vysledek jeji upravenou kopii
var_dump($veta); //zde uvidime originalni text

//str_replace: fce, ktera najde ve stirngu nejaky kus textu a nahradi ho za jiny
var_dump(str_replace("středa", "pátek", $veta));
//muzeme nahradit i vice textu naraz
$dalsiVeta = "Tony má rád noky a brambory.";
var_dump(str_replace(array("noky", "brambory"), "špagety", $dalsiVeta));

//explode: fce, ktera rozseka text na mensi kusy a vrati pole kousku
$stringIngredience = "vejce mléko cukr mouka";
$poleIngredienci = explode(" ", $stringIngredience);
var_dump($poleIngredienci);

//implode: fce, ktera z pole stringu vytvori jeden string
var_dump(implode(" a ", $poleIngredienci));

//trim: je fce, ktera odstrani vsechny mezery na zacatku a na konci stringu
$email = "    tonda.truong@primafuture.cz   ";
$jmeno = "    Tonda Truong   ";
var_dump(trim($email));
var_dump(trim($jmeno));

//-----------------------------------------------------------------------------------------------
//Fce pro pole

//count: spocita pocet prvku v poli
$poleNotebooky = array("msi", "acer", "asus", "dell", "hp");
var_dump(count($poleNotebooky)); //5

//in_array: funkcen ma rekne , zda hledana hodnota v poli existuje
//vraci boolean
var_dump(in_array("dell", $poleNotebooky)); //true
var_dump(in_array("apple", $poleNotebooky)); //false

//array_keys: funkce nam vrati vsechny indexy nebo klice
//tato funkce vraci pole klicu/indexu
$poleKonto = [
    "Tonda" => 5000,
    "Pepa" => 2000,
    "Kuba" => 48202
  ];
var_dump(array_keys($poleKonto));

//array_key_exists: tato fce nam rekne, zda existuje hledany klic
//vraci boolean
var_dump(array_key_exists("Kuba", $poleKonto)); //true
var_dump(array_key_exists("David", $poleKonto)); //false

//array_rand: vrati nahodny index pole (neni to nahodna hodnota)
var_dump(array_rand($poleNotebooky)); //vrací jen index, ne hodnotu! 0, 1, 2, ...
var_dump(array_rand($poleKonto)); //Pepa, Kuba, Tonda,...

//shuffle - fce, která zamíchá hodnoty v polích! pomocí ampersandu se to přidává referenčně (ne kopie)
shuffle($poleNotebooky);
var_dump($poleNotebooky);

//sort: seradi pole podle hodnot od A do Z, nebo od nejmensiho po nejvetsi
sort($poleNotebooky);
var_dump($poleNotebooky);


?>
  
</body>
</html>
