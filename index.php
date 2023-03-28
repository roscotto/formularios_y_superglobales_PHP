<?PHP
$movie1 = [
    "ID" => 1,
    "Título" => "Se7en",
    "Traducción" => "Siete: Pecados Capitales",
    "Director" => "David Fincher",
    "Año" => 1995,
    "Alt" => "Tapa de la película Siete: Pecados Capitales"
];

$movie2 = [
    "ID" => 2,
    "Título" => "Big Fish",
    "Traducción" => "El Gran Pez",
    "Director" => "Tim Burton",
    "Año" => 2003,
    "Alt" => "Tapa de la película El Gran Pez"
];

$movie3 = [
    "ID" => 3,
    "Título" => "The Pianist",
    "Traducción" => "El Pianista",
    "Director" => "Roman Polanski",
    "Año" => 2001,
    "Alt" => "Tapa de la película El Pianista"
];

$movie4 = [
    "ID" => 4,
    "Título" => "Kill Bill",
    "Traducción" => "Kill Bill",
    "Director" => "Quentin Tarantino",
    "Año" => 2003,
    "Alt" => "Tapa de la película Kill Bill"
];

$movie5 = [
    "ID" => 5,
    "Título" => "Les Misérables",
    "Traducción" => "Los Miserables",
    "Director" => "Tom Hooper",
    "Año" => 2012,
    "Alt" => "Tapa de la película Los Miserables"
];

$movie6 = [
    "ID" => 6,
    "Título" => "John Q.",
    "Traducción" => "John Q.",
    "Director" => "Nick Cassavetes",
    "Año" => 2002,
    "Alt" => "Tapa de la película John Q."
];

$movie7 = [
    "ID" => 7,
    "Título" => "The Green Mile",
    "Traducción" => "Milagros Inesperados",
    "Director" => "Frank Darabont",
    "Año" => 1999,
    "Alt" => "Tapa de la película Milagros Inesperados"
];

$movie8 = [
    "ID" => 8,
    "Título" => "Das Parfum, die Geschichte eines Mörders",
    "Traducción" => "El perfume: historia de un asesino",
    "Director" => "Tom Tykwer",
    "Año" => 2006,
    "Alt" => "Tapa de la película El perfume"
];

$movie9 = [
    "ID" => 9,
    "Título" => "The Sixth Sense",
    "Traducción" => "Sexto Sentido",
    "Director" => "M. Night Shyamalan",
    "Año" => 1999,
    "Alt" => "Tapa de la película Sexto Sentido"

];

$movie10 = [
    "ID" => 10,
    "Título" => "Dead Poets Society",
    "Traducción" => "La sociedad de los poetas muertos",
    "Director" => "Peter Weir",
    "Año" => 1989,
    "Alt" => "Tapa de la película La sociedad de los poetas muertos"
];
$arrayMovies = [$movie1, $movie2, $movie3, $movie4, $movie5, $movie6, $movie7, $movie8, $movie9, $movie10];

$countTotalMovies = count($arrayMovies);
$movieCounter = 1; // foreach line 137 - 146

?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios y Superglobales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="container d-flex">
        <div class="m-5">
            <h1>Las <?= $countTotalMovies ?> películas que debes ver antes de morir</h1>
            <h2>Contanos cuáles de las siguientes pelis viste y participá por entradas para ver la avant premiere de Avatar</h2>
            <hr>
            <form class="mt-3 row" action="form_process.php" method="GET" autocomplete="off">
                <div class="mb-3 col-md-6">
                    <label for="inputName" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="inputName" aria-describedby="" name="inputName" placeholder="Juan" required>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="inputSurname" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="inputSurname" aria-describedby="" name="inputSurname" placeholder="Doe" required>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="inputBirthDate" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" id="inputBirthDate" aria-describedby="" name="inputBirthDate" placeholder="" required>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="inputName" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputName" aria-describedby="inputName">
                    <div id="inputName" class="form-text">micorreoejemplo@gmail.com</div>
                </div>
                <div class="col-12 mt-4 mb-3">
                    <h3>Seleccioná las pelis que hayas visto:</h3>
                </div>
                <div class="col-12 d-flex flex-wrap">
        
                    <?PHP
                    foreach ($arrayMovies as $index => $movie) {
                        echo '<div class="form-check p-2 ps-5 col-lg-4">
                                <input class="form-check-input" type="checkbox" value="'.$movie["Título"].'" id="checked_'.$index .'" name="moviesSelected[]">
                                 <label class="form-check-label" for="checked_'.$index .'">
                                     <img src="./img/'. $movie["ID"] .'.jpg" alt="'. $movie["Alt"] .'">
                                     <p><strong>' . $movie["Título"] . ' (' . $movie["Traducción"] . ')</strong></p>
                                     <p>Director: ' . $movie["Director"] . '</p>
                                     <p>Año: ' . $movie["Año"] . '</p>
                                 </label>
                            </div>';
                        $movieCounter++;
                    };
                    ?>
                </div>
                <div class="col-12 d-flex">
                  <button type="submit" class="btn btn-primary">Enviar</button>
                    
                </div>
            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>