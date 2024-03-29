<?php
try {
	// On se connecte à MySQL
	$mysqlClient = new PDO('mysql:host=localhost;dbname=we_love_food;charset=utf8', 'root', 'root');
} catch (Exception $e) {
	// En cas d'erreur, on affiche un message et on arrête tout
	die('Erreur : ' . $e->getMessage());
}

//ou méthode qui est preferable

$db = new PDO(
    'mysql:host=localhost;dbname=we_love_food;charset=utf8',
    'root',
    'root',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
);

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table recipes
$sqlQuery = 'SELECT * FROM recipes WHERE is_enabled = TRUE';
$recipesStatement = $mysqlClient->prepare($sqlQuery);
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();

// On affiche chaque recette une à une
foreach ($recipes as $recipe) {
?>
	<p><?php echo $recipe['author']; ?></p>
<?php
}

$sqlQuery = 'SELECT * FROM recipes WHERE author = :author AND is_enabled = :is_enabled';

$recipesStatement = $db->prepare($sqlQuery);
$recipesStatement->execute([
	'author' => 'mathieu.nebra@exemple.com',
	'is_enabled' => true,
]);
$recipes = $recipesStatement->fetchAll();
?>