<?php 
$db = new PDO('mysql:host=localhost;port:3306;dbname=automobile', 
'root', 
'',
array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
)
);
 $db = new PDO('mysql:host=localhost;dbname=automobile', 'root', '');
 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); 

 $query = $db->prepare( 'INSERT INTO vehicule (immat, modele, nb_portes,motorisation,id_marque)
 VALUES("et341rx","scenic",5,"diesel",1)');
try{
$query->execute();
}
catch(PDOException $e){
echo "toto";
}
?>