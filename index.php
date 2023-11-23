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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <div class="container-fluid">
        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
        </select>

        <table class="table text-start">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">distance_to_center</th>
                </tr>
            </thead>

            <tbody>
            <?php
                foreach($hotels as $hotel) {
                    // var_dump($hotel['name']);
                    // foreach($hotel as $key=>$value)
                    // var_dump($value)
            ?>
            <tr>
                <td><?php echo $hotel['name'] ?></th>
                <td><?php echo $hotel['description']?></td>
                <?php 
                    if($hotel['parking'] === true) {
                ?>
                    <td>
                        <?php echo 'si'?>
                    </td>
                <?php 
                    } else { 
                ?>
                    <td>
                        <?php echo 'no'; ?>
                    </td>
                <?php
                    }; 
                ?>
                <td><?php echo $hotel['vote']?></td>
                <td><?php echo $hotel['distance_to_center']?></td>
            </tr>
            
            <?php } ?>
            </tbody>
        </table>
    </div>
     
    
   
</body>
</html>