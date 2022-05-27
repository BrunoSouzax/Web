<?php
$nome = 'bruno';

$bruno = 'bla bla!';

echo 'O menu nome é'.$nome;

if($nome == 'bruno') {
    echo 'verdadeiro';
} else {
    echo 'falso';
}

if($idade === 26){
    echo 'verdadeiro';
} else {
    echo 'falso';
}

for($i = 0; $i <= 10; $i++) {
    echo $i;
    echo '<hr>';
}

$i = 0;
while($i < 10) {
    echo $i;
    echo 'br';
    $i++;
}

printNumero(30);
echo '<br>';
printNumero('bruno');
function printNumero($n){
    echo $n;
}

class pessoa{
    public $nome;
    public $idade;

    public 
    public function __construct($nome,$idae){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function printNomeEIdade() {
        echo $this->nome;
        echo '<br>';
        echo $this->idade;
    }
}

$pessoa = new pessoa('bruno', 23);

$pessoa->printNomeEIdade();
echo '<br>';

$pessoa2 = new pessoa('bruno', 18);

$pessoa2->printNomeEIdade();

$arr = ['bruno', 'guilherme', 'amanda'];

echo $arr[0]

?>