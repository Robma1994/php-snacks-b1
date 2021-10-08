<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="snakc1">
        <?php
            //A) Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
            //Ricordati che ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
            $teams = 
            [
                [
                    'homeTeam' => 'Boston Celtics',
                    'visitingTeam' => 'Virtus',
                    'pointsMade' => 50,
                    'pointsSuffered' => 45,
                ],
                [
                    'homeTeam' => 'Arsenal',
                    'visitingTeam' => 'Varese',
                    'pointsMade' => 70,
                    'pointsSuffered' => 15,
                ],
                [
                    'homeTeam' => 'Olimpia',
                    'visitingTeam' => 'Chicago Bulls',
                    'pointsMade' => 30,
                    'pointsSuffered' => 95,
                ]
            ];
            //B) Stampiamo a schermo tutte le partite con queso schema: Olimpia Milano - Cantù | 55-60
            for ($i = 0; $i < count($teams); $i++) {
                $teamOne = $teams[$i]['homeTeam'] ;
                $teamTwo = $teams[$i]['visitingTeam'];
                $pointsMade = $teams[$i]['pointsMade'];
                $pointsSuffered = $teams[$i]['pointsSuffered'];
                echo $teamOne . ' ' . '-' . ' ' . $teamTwo . ' | ' . $pointsMade . ' - ' . $pointsSuffered . '<br/>';
            }
            /* 
            for ($i = 0; $i < count($teams); $i++) {
                echo $teams[$i]['homeTeam'] . ' ' . '-' . ' ' . $teams[$i]['visitingTeam'] . ' | ' . $teams[$i]['pointsMade'] . ' - ' . $teams[$i]['pointsSuffered'] . '<br/>';
            }
            */
        ?>
        
    </div>
    <div class="snack2">

    </div>
</body>
</html>
