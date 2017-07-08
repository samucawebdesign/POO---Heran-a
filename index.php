<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>

<?PHP
require_once 'Aluno.php';
require_once 'Professor.php';
require_once 'Funcionario.php';


$p1 = new Pessoa();
$p2 = new Aluno();
$p3 = new Professor();
$p4 = new Funcionario();

echo '<pre>';

$p1->setNome('Pedro');
$p2->setNome('Maria');
$p3->setNome('Cláudio');
$p4->setNome('Fabiana');

$p2->setCurso('Informática');
$p3->setSalario('15000.00');
$p4->setSetor('Estoque');

$p1->setSexo('Masculino');
$p4->setSexo('Feminino');


$p3->receberAumento('550.10');
$p4->mudarTrabalho();
$p2->cancelarMatr();


print_r($p1);
print_r($p2);
print_r($p3);
print_r($p4);

echo '</pre>';
?>
</body>
</html>