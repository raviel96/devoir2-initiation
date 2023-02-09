<?php

$movies = [
    ['year' => '1994', 'name' => 'The Shawshank Redemption', 'description' => "Le banquier Andy Dufresne est arrêté pour avoir tué sa femme et son amant. Après une dure adaptation, il tente d'améliorer les conditions de la prison et de redonner de l'espoir à ses compagnons."],
    ['year' => '1972', 'name' => 'The Godfather', 'description' => "Le patriarche vieillissant d'une dynastie de la mafia New Yorkaise passe le flambeau de son empire clandestin à son fils réticent."],
    ['year' => '2008', 'name' => 'The Dark Knight', 'description' => "Lorsqu'une menace mieux connue sous le nom du Joker émerge de son passé mystérieux et déclenche le chaos sur la ville de Gotham, Batman doit faire face au plus grand des défis psychologique et physique afin de combattre l'injustice."],
    ['year' => '1974', 'name' => 'The Godfather Part II', 'description' => "La vie et la carrière de Vito Corleone dans les années 1920 à New York alors que son fils, Michael, élargit et renforce son emprise sur le syndicat du crime familial."],
    ['year' => '1957', 'name' => '12 Angry Men', 'description' => "Un juré réfractaire tente d'empêcher une erreur judiciaire en forçant les autres membres du jury à réexaminer les preuves."],
    ['year' => '1993', 'name' => "Schindler's List", 'description' => "Dans la Pologne occupée par les Allemands durant la Seconde Guerre mondiale, Oskar Schindler se préoccupe peu à peu de sa main-d'oeuvre juive après avoir été témoin de la persécution des Allemands nazis."],
    ['year' => '2003', 'name' => 'The Lord of the Rings: The Return of the King', 'description' => "Gandalf et Aragorn mènent le monde des hommes contre l'armée de Sauron pour éloigner son regard de Frodon et Sam lorsqu'ils s'approchent du Mont Destin avec l'Anneau."],
    ['year' => '1994', 'name' => 'Pulp Fiction', 'description' => "Les vies de deux hommes de main, d'un boxeur, de la femme d'un gangster et de deux braqueurs s'entremêlent dans quatre histoires de violence et de rédemption."],
    ['year' => '2001', 'name' => ' The Lord of the Rings: The Fellowship of the Ring', 'description' => "Un Hobbit du Comté et ses huit compagnons se mettent en route pour détruire le puissant anneau unique et sauver la Terre du Milieu du terrible Sauron."],

];

$yearList;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Devoir 2</title>
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>IMDb Movies</h1>
        </header>
        <main>
            <section class="main-section">
                <h2>Rechercher un film par année</h2>
                <ul>
                    <?php foreach ($movies as $element) {
                        foreach ($element as $value) {
                            $yearList[] = $element['year'];
                            sort($yearList);}
                    }?>
                    <?php foreach (array_unique($yearList) as $year) { ?>
                    <li><a href="index.php?year=<?php echo $year?>"><?php echo $year?></a></li>
                    <?php }?>
                </ul>
                <?php 
                    if(isset($_GET) and $_GET!=null) {
                        foreach($movies as $element) {
                            if($element['year']===$_GET['year']) {  
                ?>
                <div class="movie-info">
                    <h3><?php echo $element['name']?></h3>
                    <p><?php echo $element['description']?></p>
                </div>
                <?php } } }?>
            </section>
        </main>
    </div>
</body>
</html>