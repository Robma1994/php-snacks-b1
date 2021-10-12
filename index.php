<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
        <?php
            //A) Passare come parametri GET name, mail e age 
            $name = $_GET['name'];
            $mail = $_GET['mail'];
            $age = $_GET['age'];
            echo 'Nome: ' . $name . ' ' . '<br/>' . 'Mail:' . ' ' . $mail . ' ' . '<br/>' . ' ' . 'Age:' . $age . ' ' . '<br/>'; 
            /*B) Verificare (cercando i metodi che non conosciamo nella documentazione) 
            che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e 
            che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
            */
            if( empty($name) && empty($mail) && empty($age)) {
                echo 'Inserisci Nome(almeno 3 caratteri) - Mail(ricorda @ e .) - Age(inserisci un carattere numerico)' ;
            } 
            //se la @ è in posizione 0 lui la converte in false e se la metti in tale posizione ti da accesso negato quando dovrebbe darti accesso riuscito
            elseif((strlen($name) > 3) && (strpos($mail, '@')) && (strpos($mail, '.')) && (is_numeric($age))) {
                echo 'Accesso riuscito';
            } 
            else {
                echo 'Accesso negato' ;
            }
        ?>
    </div>
    <div class="snack1-bonus">
        <?php
            //A) Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
            //Ricordati che ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite in maniera randomica.
            $teams = 
            [
                [
                    'homeTeam' => 'Boston Celtics',
                    'visitingTeam' => 'Virtus',
                    'pointsMade' => rand(1,100),
                    'pointsSuffered' => rand(1,100),
                ],
                [
                    'homeTeam' => 'Arsenal',
                    'visitingTeam' => 'Varese',
                    'pointsMade' => rand(1,100),
                    'pointsSuffered' => rand(1,100),
                ],
                [
                    'homeTeam' => 'Olimpia',
                    'visitingTeam' => 'Chicago Bulls',
                    'pointsMade' => rand(1,100),
                    'pointsSuffered' => rand(1,100),
                ]
            ];
            //Stampiamo a schermo tutte le partite con questo schema. Olimpia Milano - Cantù | 55-60
            $footbalTeam = ['avellino','boltic','cilly'];
            
            for ($i = 0; $i < count($teams); $i++) {
                echo $teams[$i]['homeTeam'] . ' ' . '-' . ' ' . $teams[$i]['visitingTeam'] . ' | ' . $teams[$i]['pointsMade'] . ' - ' . $teams[$i]['pointsSuffered'] . '<br/>';
            }
        ?>
    </div>
    <div class="snack4">
        <?php
 
            $posts = [

                '10/01/2019' => [
                    [
                        'title' => 'Post 1',
                        'author' => 'Michele Papagni',
                        'text' => 'Testo post 1'
                    ],
                    [
                        'title' => 'Post 2',
                        'author' => 'Michele Papagni',
                        'text' => 'Testo post 2'
                    ],
                ],
                '10/02/2019' => [
                    [
                        'title' => 'Post 3',
                        'author' => 'Michele Papagni',
                        'text' => 'Testo post 3'
                    ]
                ],
                '15/05/2019' => [
                    [
                        'title' => 'Post 4',
                        'author' => 'Michele Papagni',
                        'text' => 'Testo post 4'
                    ],
                    [
                        'title' => 'Post 5',
                        'author' => 'Michele Papagni',
                        'text' => 'Testo post 5'
                    ],
                    [
                        'title' => 'Post 6',
                        'author' => 'Michele Papagni',
                        'text' => 'Testo post 6'
                    ]
                ],
            ];
        ?>
        <?php
            

            foreach ($posts as $key => $data) {
               echo $key . ' ' . ' <br/>';
               foreach($data as $post) {
                   echo $post['title'] . '<br/>';
                   echo $post['author'] . '<br/>';
                   echo $post['text'] . '<br/>';
               }
            }
           
        ?>
        
    </div>
    <div class="snack5">
        <?php
            //Creare un array con 15 numeri casuali ( da 1 a 100), tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
            $number = [];
            $rndNumber = rand (1,100);

            //while(count($number) < 15) {
                
            //}
            
        ?>
    </div>
    <div class="snack6">
        <?php
            $nome = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque dolore impedit quod distinctio libero in blanditiis ducimus pariatur, iste saepe debitis cupiditate quasi inventore eveniet eaque, fugit aspernatur facere magni.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque dolore impedit quod distinctio libero in blanditiis ducimus pariatur, iste saepe debitis cupiditate quasi inventore eveniet eaque, fugit aspernatur facere magni.';
            $newArray = explode('.', $nome);
            //stampa l'array
        ?>
    </div>
    <div class="snack7 mT mL">
        <?php
            //Stampara gli insegnanti in un rettangolo grigrio.
                include __DIR__ . '/dataBase.php';
                
                foreach($db as $key => $array) {
                    if($key == 'teachers') {
                        foreach($array as $key => $element) {
                            echo '<div class="red">' . $element['name'] . ' ' . $element['lastname'] . '<br/>' . '</div>';   
                        
                        }
                    } else {
                        foreach($array as $key => $element) {
                            echo '<div class="green">' . $element['name'] . ' ' . $element['lastname'] . '<br/>' . '</div>';   
                        }
                    }
                    
                }
            //Stampare i pm in un rettangolo verde.
        ?>
    </div>
</body>
</html>
