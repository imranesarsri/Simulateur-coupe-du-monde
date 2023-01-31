<?php




if(isset($_COOKIE["TheResolteMatches"])){

    $matches = json_decode($_COOKIE["TheResolteMatches"] , true);

    
}else {
    
    $matches = array(

        "MoroccoVsCroatia" => array ("Morocco" => 0 , "Croatia" => 0 , "Status" => false ),
        "CanadaVsBelgium" => array ("Canada" => 0 , "Belgium" => 0 , "Status" => false),
        "BelgiumVsMorocco" => array ("Belgium" => 0 , "Morocco" => 0 , "Status" => false),
        "CroatiaVsCanada" => array ("Croatia" => 0 , "Canada" => 0 , "Status" => false),
        "MoroccoVsCanada" => array ("Morocco" => 0 , "Canada" => 0 , "Status" => false),
        "CroatiaVsBelgium" => array ("Croatia" => 0 , "Belgium" => 0 , "Status" => false),
    
    );
}



if(isset($_COOKIE["TheResolteTable"])){

    $resoltMatches = json_decode($_COOKIE["TheResolteTable"] , true);

}else{

    $resoltMatches = array (
        "resoltMorocco" => array ("PTS." => 0 , "PAR." => 0 ,"GAN." => 0 , "EMP." => 0 , "PER." => 0 , "G.F." => 0 , "G.C." => 0 , "+/-" => 0 ),
        "resoltCroatia" => array ("PTS." => 0 , "PAR." => 0 ,"GAN." => 0 , "EMP." => 0 , "PER." => 0 , "G.F." => 0 , "G.C." => 0 , "+/-" => 0 ),
        "resoltBelgium" => array ("PTS." => 0 , "PAR." => 0 ,"GAN." => 0 , "EMP." => 0 , "PER." => 0 , "G.F." => 0 , "G.C." => 0 , "+/-" => 0 ),
        "resoltCanada" => array ("PTS." => 0 , "PAR." => 0 ,"GAN." => 0 , "EMP." => 0 , "PER." => 0 , "G.F." => 0 , "G.C." => 0 , "+/-" => 0 ),
    );
}
///////////////////////////////////////////////////////////////////////////////////////////////////




$DataSortTable =
            [
                [ 
                    [
                        $resoltMatches["resoltMorocco"]["PTS."] , $resoltMatches["resoltMorocco"]["+/-"] , $resoltMatches["resoltMorocco"]["G.F."] 
                    ], 
                    [
                        $resoltMatches["resoltMorocco"]["PAR."] , $resoltMatches["resoltMorocco"]["GAN."] , $resoltMatches["resoltMorocco"]["EMP."] ,
                        $resoltMatches["resoltMorocco"]["PER."] , $resoltMatches["resoltMorocco"]["G.C."] , "Morocco" 
                    ]
                ],
                [ 
                    [
                        $resoltMatches["resoltCroatia"]["PTS."] , $resoltMatches["resoltCroatia"]["+/-"] , $resoltMatches["resoltCroatia"]["G.F."]
                    ],
                    [ 
                        $resoltMatches["resoltCroatia"]["PAR."] , $resoltMatches["resoltCroatia"]["GAN."] , $resoltMatches["resoltCroatia"]["EMP."] ,
                        $resoltMatches["resoltCroatia"]["PER."] , $resoltMatches["resoltCroatia"]["G.C."] , "Croatia" 
                    ]
                ],
                [
                    [
                        $resoltMatches["resoltBelgium"]["PTS."] , $resoltMatches["resoltBelgium"]["+/-"] , $resoltMatches["resoltBelgium"]["G.F."] 
                    ], 
                    [
                        $resoltMatches["resoltBelgium"]["PAR."] , $resoltMatches["resoltBelgium"]["GAN."] , $resoltMatches["resoltBelgium"]["EMP."] ,
                        $resoltMatches["resoltBelgium"]["PER."] , $resoltMatches["resoltBelgium"]["G.C."], "Belgium" 
                    ], 
                ],
                [
                    [ 
                        $resoltMatches["resoltCanada"]["PTS."]  , $resoltMatches["resoltCanada"]["+/-"]  , $resoltMatches["resoltCanada"]["G.F."] 
                    ], 
                    [
                        $resoltMatches["resoltCanada"]["PAR."]  , $resoltMatches["resoltCanada"]["GAN."]  , $resoltMatches["resoltCanada"]["EMP."] ,
                        $resoltMatches["resoltCanada"]["PER."]  , $resoltMatches["resoltCanada"]["G.C."] , "Canada" 
                    ], 
                ],
            ];


rsort($DataSortTable);







///////////////////////////////////////////////////////////////////////////////////////////////////

if($_SERVER["REQUEST_METHOD"] == "POST" && isset( $_POST["match"])){

    header("Refresh:0");
    $matches[$_POST["match"]][$_POST["KeyOne"]] = $_POST["ValueOne"];
    $matches[$_POST["match"]][$_POST["KeyTwo"]] = $_POST["ValueTwo"];
    $matches[$_POST["match"]]["Status"] = true;

    setcookie("TheResolteMatches" ,json_encode($matches) , strtotime("+1 month"));

}



if($_SERVER["REQUEST_METHOD"] == "POST" && isset( $_POST["RESET"])){
    header("Refresh:0");

    $matches = array(

        "MoroccoVsCroatia" => array ("Morocco" => 0 , "Croatia" => 0 , "Status" => false ),
        "CanadaVsBelgium" => array ("Canada" => 0 , "Belgium" => 0 , "Status" => false),
        "BelgiumVsMorocco" => array ("Belgium" => 0 , "Morocco" => 0 , "Status" => false),
        "CroatiaVsCanada" => array ("Croatia" => 0 , "Canada" => 0 , "Status" => false),
        "MoroccoVsCanada" => array ("Morocco" => 0 , "Canada" => 0 , "Status" => false),
        "CroatiaVsBelgium" => array ("Croatia" => 0 , "Belgium" => 0 , "Status" => false),
    
    );

    setcookie("TheResolteMatches" ,json_encode($matches) , strtotime("+1 month"));



    $resoltMatches = array (
        "resoltMorocco" => array ("PTS." => 0 , "PAR." => 0 ,"GAN." => 0 , "EMP." => 0 , "PER." => 0 , "G.F." => 0 , "G.C." => 0 , "+/-" => 0 ),
        "resoltCroatia" => array ("PTS." => 0 , "PAR." => 0 ,"GAN." => 0 , "EMP." => 0 , "PER." => 0 , "G.F." => 0 , "G.C." => 0 , "+/-" => 0 ),
        "resoltBelgium" => array ("PTS." => 0 , "PAR." => 0 ,"GAN." => 0 , "EMP." => 0 , "PER." => 0 , "G.F." => 0 , "G.C." => 0 , "+/-" => 0 ),
        "resoltCanada" => array ("PTS." => 0 , "PAR." => 0 ,"GAN." => 0 , "EMP." => 0 , "PER." => 0 , "G.F." => 0 , "G.C." => 0 , "+/-" => 0 ),
    );


    setcookie("TheResolteTable" ,json_encode($resoltMatches) , strtotime("+1 month"));


}








$DataKeyCantey = [] ;
$DataValueCantey = [] ;




if( isset( $_POST["match"])){

    foreach($matches[$_POST["match"]] as $KeyMatches => $ValueMatches){


    if($KeyMatches == "Status"){
        continue;
    }
    array_push($DataKeyCantey ,$KeyMatches);
    array_push($DataValueCantey ,$ValueMatches);
    
    
    
}

if ( $DataValueCantey[0] > $DataValueCantey[1]){

    $resoltMatches["resolt{$DataKeyCantey[0]}"]["PTS."] += 3;
    $resoltMatches["resolt{$DataKeyCantey[0]}"]["PAR."] += 1;
    $resoltMatches["resolt{$DataKeyCantey[0]}"]["GAN."] += 1;
    $resoltMatches["resolt{$DataKeyCantey[0]}"]["EMP."] += 0;
    $resoltMatches["resolt{$DataKeyCantey[0]}"]["PER."] += 0;
    $resoltMatches["resolt{$DataKeyCantey[0]}"]["G.F."] += $_POST["ValueOne"];
    $resoltMatches["resolt{$DataKeyCantey[0]}"]["G.C."] += $_POST["ValueTwo"];
    $resoltMatches["resolt{$DataKeyCantey[0]}"]["+/-"] += $_POST["ValueOne"] - $_POST["ValueTwo"];


    $resoltMatches["resolt{$DataKeyCantey[1]}"]["PTS."] += 0;
    $resoltMatches["resolt{$DataKeyCantey[1]}"]["PAR."] += 1;
    $resoltMatches["resolt{$DataKeyCantey[1]}"]["GAN."] += 0;
    $resoltMatches["resolt{$DataKeyCantey[1]}"]["EMP."] += 0;
    $resoltMatches["resolt{$DataKeyCantey[1]}"]["PER."] += 1;
    $resoltMatches["resolt{$DataKeyCantey[1]}"]["G.F."] += $_POST["ValueTwo"];
    $resoltMatches["resolt{$DataKeyCantey[1]}"]["G.C."] += $_POST["ValueOne"];
    $resoltMatches["resolt{$DataKeyCantey[1]}"]["+/-"] += $_POST["ValueTwo"] - $_POST["ValueOne"];

}elseif ( $DataValueCantey[0] < $DataValueCantey[1]){

    $resoltMatches["resolt{$DataKeyCantey[0]}"]["PTS."] += 0;
    $resoltMatches["resolt{$DataKeyCantey[0]}"]["PAR."] += 1;
    $resoltMatches["resolt{$DataKeyCantey[0]}"]["GAN."] += 0;
    $resoltMatches["resolt{$DataKeyCantey[0]}"]["EMP."] += 0;
    $resoltMatches["resolt{$DataKeyCantey[0]}"]["PER."] += 1;
    $resoltMatches["resolt{$DataKeyCantey[0]}"]["G.F."] += $_POST["ValueOne"];
    $resoltMatches["resolt{$DataKeyCantey[0]}"]["G.C."] += $_POST["ValueTwo"];
    $resoltMatches["resolt{$DataKeyCantey[0]}"]["+/-"] += $_POST["ValueOne"] - $_POST["ValueTwo"];


    $resoltMatches["resolt{$DataKeyCantey[1]}"]["PTS."] += 3;
    $resoltMatches["resolt{$DataKeyCantey[1]}"]["PAR."] += 1;
    $resoltMatches["resolt{$DataKeyCantey[1]}"]["GAN."] += 1;
    $resoltMatches["resolt{$DataKeyCantey[1]}"]["EMP."] += 0;
    $resoltMatches["resolt{$DataKeyCantey[1]}"]["PER."] += 0;
    $resoltMatches["resolt{$DataKeyCantey[1]}"]["G.F."] += $_POST["ValueTwo"];
    $resoltMatches["resolt{$DataKeyCantey[1]}"]["G.C."] += $_POST["ValueOne"];
    $resoltMatches["resolt{$DataKeyCantey[1]}"]["+/-"] += $_POST["ValueTwo"] - $_POST["ValueOne"];

}else {

    $resoltMatches["resolt{$DataKeyCantey[0]}"]["PTS."] += 1;
    $resoltMatches["resolt{$DataKeyCantey[0]}"]["PAR."] += 1;
    $resoltMatches["resolt{$DataKeyCantey[0]}"]["GAN."] += 0;
    $resoltMatches["resolt{$DataKeyCantey[0]}"]["EMP."] += 1;
    $resoltMatches["resolt{$DataKeyCantey[0]}"]["PER."] += 0;
    $resoltMatches["resolt{$DataKeyCantey[0]}"]["G.F."] += $_POST["ValueOne"];
    $resoltMatches["resolt{$DataKeyCantey[0]}"]["G.C."] += $_POST["ValueTwo"];
    $resoltMatches["resolt{$DataKeyCantey[0]}"]["+/-"] += $_POST["ValueTwo"] - $_POST["ValueOne"];


    $resoltMatches["resolt{$DataKeyCantey[1]}"]["PTS."] += 1;
    $resoltMatches["resolt{$DataKeyCantey[1]}"]["PAR."] += 1;
    $resoltMatches["resolt{$DataKeyCantey[1]}"]["GAN."] += 0;
    $resoltMatches["resolt{$DataKeyCantey[1]}"]["EMP."] += 1;
    $resoltMatches["resolt{$DataKeyCantey[1]}"]["PER."] += 0;
    $resoltMatches["resolt{$DataKeyCantey[1]}"]["G.F."] += $_POST["ValueTwo"];
    $resoltMatches["resolt{$DataKeyCantey[1]}"]["G.C."] += $_POST["ValueOne"];
    $resoltMatches["resolt{$DataKeyCantey[1]}"]["+/-"] += $_POST["ValueTwo"] - $_POST["ValueOne"];

}

setcookie("TheResolteTable" ,json_encode($resoltMatches) , strtotime("+1 month"));

}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="" >
        <h1 class="text-center text-success p-5">Matches</h1>
    </header>
    <div class="row gap-5">

        <div class="col" style="background-image: url(img/images.jpg)">

        <div class="row text-white mt-4 mb-4 ms-2 me-2" style="background-image: url(img/fad.jpg)  ; background-seze:caver;">
            <h2 class="text-center fw-bold p-3 ">Resolte Matches</h2>
        </div>


        <?php
    foreach ($matches as $key => $value) {
        $datakey = [];
        $datavalue = [];
        foreach ($value as $mkey => $mvalue) {
            array_push($datakey , $mkey);
            array_push($datavalue , $mvalue);
        } ;


        ?>
                
            <div class="row bg-dark text-white mt-4 mb-4">
            <img class="col" src="img/<?php echo $datakey[0]?>.png" style="width: 80px ; height: 80px ; margin-left:10px;" alt="reqdasqedsa">
            <form class="col d-flex" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <input <?php if($value["Status"] === true){echo "readonly";}?> class="rounded p-2" min="0" name="ValueOne" value="<?php echo $datavalue[0] ?>" type="number" style="width:50px; height: 50px ;  margin-top: 13px;">
                <input <?php if($value["Status"] === true){echo "readonly";}?> class="rounded p-2" min="0" name="KeyOne" value="<?php echo $datakey[0] ?>" type="hidden">
                <div style="margin:0 20px ; ">
                    <p class="mt-2 mb-1 fw-bold text-center">VS</p>
                    <input class="bg-success text-white" name="match" type="hidden" value="<?php echo $key?>">
                    <input  <?php if($value["Status"] === true){echo "disabled";}?> class="btn btn-success text-white" value="Shoot" type="submit">
                </div>
                <input <?php if($value["Status"] === true){echo "readonly";}?> class="rounded p-2" min="0" name="ValueTwo" value="<?php echo $datavalue[1] ?>" type="number" style="width:50px ; height: 50px ;  margin-top: 13px;">
                <input <?php if($value["Status"] === true){echo "readonly";}?> class="rounded p-2" min="0" name="KeyTwo" value="<?php echo $datakey[1] ?>" type="hidden">
            </form>
            <img class="col" src="img/<?php echo $datakey[1]?>.png" style="width: 80px ; height: 80px" alt="eqda">
        </div>

        
        <?php
        }

        ?>










        </div>

    <div class="col" style="background-image: url(img/images.jpg)">
        <div class="row text-white mt-4 mb-4 ms-2 me-2" style="background-image: url(img/fad.jpg)  ; background-seze:caver;">
            <h2 class="text-center fw-bold p-3 ">Resolte Table</h2>
        </div>
        <table class="table bg-white">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">SELECCION</th>
                    <th scope="col">PTS.</th> 
                    <th scope="col">PAR.</th>
                    <th scope="col">GAN.</th>
                    <th scope="col">EMP.</th>
                    <th scope="col">PER.</th>
                    <th scope="col">G.F.</th>
                    <th scope="col">G.C.</th>
                    <th scope="col">+/-</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><img src="img/<?php echo $DataSortTable[0][1][5]?>.png" style="width: 100px ; height: 80px ;" alt=""></td>
                    <td><?php echo $DataSortTable[0][0][0] ?></td>
                    <td><?php echo $DataSortTable[0][1][0] ?></td>
                    <td><?php echo $DataSortTable[0][1][1] ?></td>
                    <td><?php echo $DataSortTable[0][1][2] ?></td>
                    <td><?php echo $DataSortTable[0][1][3] ?></td>
                    <td><?php echo $DataSortTable[0][0][2] ?></td>
                    <td><?php echo $DataSortTable[0][1][4] ?></td>
                    <td><?php echo $DataSortTable[0][0][1] ?></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td><img src="img/<?php echo $DataSortTable[1][1][5]?>.png" style="width: 100px ; height: 80px ;" alt=""></td>
                    <td><?php echo $DataSortTable[1][0][0] ?></td>
                    <td><?php echo $DataSortTable[1][1][0] ?></td>
                    <td><?php echo $DataSortTable[1][1][1] ?></td>
                    <td><?php echo $DataSortTable[1][1][2] ?></td>
                    <td><?php echo $DataSortTable[1][1][3] ?></td>
                    <td><?php echo $DataSortTable[1][0][2] ?></td>
                    <td><?php echo $DataSortTable[1][1][4] ?></td>
                    <td><?php echo $DataSortTable[1][0][1] ?></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td><img src="img/<?php echo $DataSortTable[2][1][5]?>.png" style="width: 100px ; height: 80px ;" alt=""></td>
                    <td><?php echo $DataSortTable[2][0][0] ?></td>
                    <td><?php echo $DataSortTable[2][1][0] ?></td>
                    <td><?php echo $DataSortTable[2][1][1] ?></td>
                    <td><?php echo $DataSortTable[2][1][2] ?></td>
                    <td><?php echo $DataSortTable[2][1][3] ?></td>
                    <td><?php echo $DataSortTable[2][0][2] ?></td>
                    <td><?php echo $DataSortTable[2][1][4] ?></td>
                    <td><?php echo $DataSortTable[2][0][1] ?></td>
                </tr>
                <tr>
                <th scope="row">4</th>
                    <td><img src="img/<?php echo $DataSortTable[3][1][5]?>.png" style="width: 100px ; height: 80px ;" alt=""></td>
                    <td><?php echo $DataSortTable[3][0][0] ?></td>
                    <td><?php echo $DataSortTable[3][1][0] ?></td>
                    <td><?php echo $DataSortTable[3][1][1] ?></td>
                    <td><?php echo $DataSortTable[3][1][2] ?></td>
                    <td><?php echo $DataSortTable[3][1][3] ?></td>
                    <td><?php echo $DataSortTable[3][0][2] ?></td>
                    <td><?php echo $DataSortTable[3][1][4] ?></td>
                    <td><?php echo $DataSortTable[3][0][1] ?></td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>

    <form class="col d-flex gap-4 " method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <input class="btn btn-success container w-25 mt-5" value="RESET" name="RESET" type="hidden">
    <input class="btn btn-success container w-25 mt-5" value="RESET" type="submit">
    </form>
    

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
