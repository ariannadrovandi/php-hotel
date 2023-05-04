<?php 

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

if (!empty($GET_['search'])) {
    $filteredHotels = [];
    $category = $_GET['search'];
    for($i = 0; $i < count($hotels); $i++){
        if($hotels[$i]['parking'] == $category){
            $filteredHotels[] = $hotels[$i];
        }
    }
}else{
    $filteredHotels = $hotels;
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>php-hotel</title>
</head>
<body class="bg-info">
    <div class="container bg-info-subtle rounded-4 w-75 mt-5 d-flex flex-column justify-content-center align-items-center">
        <h1>Hotels</h1>
        <!-- select -->
        <form class="p-3" action="<?php $_SERVER['PHP_SELF'] ?>" method="GET">
            <select name="search">
                <option selected>Menu</option>
                <option value="true">Parking</option>
                <option value="false">No parking</option>
            </select>
            <button class="btn bg-body-secondary border" type="submit">Send</button>
        </form>
        <!-- table -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th class="text-center">Parking</th>
                    <th class="text-center">Vote</th>
                    <th class="text-center">Distance to center</th>
                </tr>
            </thead>
            <tbody>
                <tr <?php foreach($hotels as $hotel) { ?>>
                    <td class="fw-semibold"><?php echo $hotel['name'] ?></td>
                    <td class="fw-light"> <?php echo $hotel['description'] ?></td>
                    <td class="fw-light text-center small"> <?php echo $hotel['parking'] ?></td>
                    <td class="fw-light text-center small"> <?php echo $hotel['vote'] ?></td>
                    <td class="fw-light text-center small"> <?php echo $hotel['distance_to_center'] ?></td>
                </tr <?php } ?>>
            </tbody>
        </table>
    </div>
</body>
</html>
