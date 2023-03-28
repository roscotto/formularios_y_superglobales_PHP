<?PHP
/*
echo "<pre>";
print_r($_GET);
echo "</pre>";
*/

$userName = $_GET['inputName'];
$userSurname = $_GET['inputSurname'];
$userBirthDate = $_GET['inputBirthDate'];
$moviesSelected = $_GET['moviesSelected'];

$moviesSelectedList = implode(", ", $moviesSelected);

$selectedQuantityMovies = count($moviesSelected);


//lo que imprimo en pantalla
echo "<pre>";
print_r("<h1>Tu respuesta</h1>
        <ul>
            <li><p>Nombre: $userName </p></li>");
print_r(    "<li><p>Apellido: $userSurname </p></li>");       
print_r(    "<li><p>Fecha de Nacimiento: $userBirthDate </p></li>
        </ul>");

echo "</pre>";


if($selectedQuantityMovies <= 2){
    echo "<p>¡Qué poquitas!, sólo viste $selectedQuantityMovies de las películas que te recomendamos ($moviesSelectedList). No puede ser que no conozcas ninguno de estos clásicos del cine. Todavía estás a tiempo de ponerte al día.</p><p>Ya estás participando del concurso.</p>";
} elseif($selectedQuantityMovies <=9){
    echo "<p>¡Muy bien!, viste $selectedQuantityMovies de las películas que te recomendamos ($moviesSelectedList). No te pierdas las poquitas que te falta disfrutar.</p><p>Ya estás participando del concurso.</p>";
}else {
    echo "<p>¡IMPECABLE!, viste todas las películas que te recomendamos ($moviesSelectedList). Sos un auténtico cinéfilo.</p><p>Ya estás participando del concurso.</p>";
};

