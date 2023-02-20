<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p {
            color: red;
        }
    </style>
</head>

<body>
    <p>Hello</p>

    <?php
    // echo "hello from php";
    // c et c++ n'est pas valable
    // $x = 20;
    // echo '<br/>';
    // echo $x;
    // var_dump($x);
    // $x = "hello";
    // echo '<br/>';
    // echo $x;
    // $x = true;
    // echo '<br/>';
    // echo $x;
    // $x = 2.14;
    // echo '<br/>';
    // echo $x;
    // define('PI', 3.14);
    // echo '<br/>';
    // echo PI;
    // $ch1 = "hello";
    // $ch2 = "world";
    // echo '<br/>';
    // $ch3 = $ch1.$ch2;
    // echo $ch3;
    //array indexé
    $arr = [1, "hello", true, "world"];
    //array associatif
    $arr1 = ["name" => "ali", "age" => 25];
    // foreach($arr1 as $key => $value){
    //     echo $key." ".$value;
    //     echo "<br/>";
    // }
    // arr.push(arr1) JS
    array_push($arr, $arr1);
    // echo $arr;
    // for($i = 0; $i< sizeof($arr) ; $i++){
    //     echo $arr[$i];
    // }
    
    // var_dump($arr);
    ?>
    <?php
    echo '<table border="1">
            <thead>
                <th>key</th>
                <th>value</th>
            </thead>
            <tbody>';
    for ($i = 0; $i < count($arr); $i++) {
        if (!is_array($arr[$i])) {
            echo '<tr>
                <td>' . $i . '</td>
                <td>' . $arr[$i] . '</td>
                </tr>';
        } else {
            echo '<tr>
                <td>' . $i . '</td>
                <td>{name:' . $arr[$i]["name"] . ", age:" . $arr[$i]["age"] . '}</td>
                </tr>';
        }
    }
    echo '</tbody>
            </table>';
    ?>
    <script>
        // const 
        // let var x = 20;
        console.log("Hello javascript");
    </script>
</body>

</html>