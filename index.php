<!-- Crea un diagramma per una tabella di db che rappresenti gli Users di un blog.
Crea una classe User che rappresenti quella tabella, e usala per stampare in pagina i dati di alcuni Users.
Il database e la tabella non devono essere realmente creati.
 -->
<?php

    include __DIR__ . '/classes/user.php';
    include __DIR__ . '/classes/user_data.php';


    $users = [
        new User('Antonio', 'De Caneva' , 35), 
        new User('Gianni', 'De Caneva' , 40),
        new User('Giovanni', 'De Caneva' , 20), 
        new User('Costanza', 'De Caneva' , 92), 
    ];
    // foreach($users as $value){
    //     var_dump($value->name);
    // }
    $userData = [
        new UserData('Antonio', 'De Caneva' , 35, 'anto', 'anto@gmail.com', 'password'), 
        new UserData('Gianni', 'De Caneva' , 40, 'gianni', 'gian@gmail.com', 'password'),
        new UserData('Giovanni', 'De Caneva' , 20, 'giovanni', 'giovanni@gmail.com', 'password'), 
        new UserData('Costanza', 'De Caneva' , 92, 'costanza', 'costanza@gmail.com', 'password'), 
    ];
    // var_dump($usersData);
    // foreach($usersData as $value){
    //     var_dump($value->name, $value->lastname, $value->age, $value->userName, $value->email);
    // }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP-oop-2</title>
        <style>
            h1{
                text-align: center;
            }
            section{
                width: 80%;
                margin: 0 auto;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            div.card{
                width: 200px;
                padding: 20px;
                border: 1px solid grey;
                border-radius: 6px;
                line-height: 2;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>User Blog</h1>
        <section>
            <?php 
                foreach($userData as $value){?>
                    <div class="card">
                        <h3><?php echo $value->name ?> <?php echo $value->lastname ?> </h3>
                        <p>Age: <?php echo $value->age ?> </p>
                        <p>UserName: <?php echo $value->userName ?> </p>
                        <p>Email: <?php echo $value->email ?> </p>
                    </div>
                <?php }
            ?>
        </section>
       
    </body>
</html>