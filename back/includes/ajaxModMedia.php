<?php
// ici on met le code php
session_start();
include "../../functions/functions.php";
include "../../functions/sql.php";
if( isset($_GET["idMedia"]) ){
    $sql = "SELECT 
                `id` AS `idMedia`, `titre`, `resume`, `utilisateur_id` 
            FROM 
                `media` 
            WHERE 
                `id` = " . $_GET["idMedia"] . ";";
    //echo $sql;
    $result = selectBDD($sql);
    $nbRows = (!$result)? 0 : mysqli_num_rows($result);
    if($nbRows > 0){
        $row = mysqli_fetch_assoc($result);
        //var_dump($row);
        $jSonMedia = "
            {
                \"idMedia\": ".$row['idMedia'].",
                \"titre\": \"".utf8_encode($row['titre'])."\",
                \"resume\": \"".utf8_encode($row['resume'])."\",
                \"utilisateur_id\": ".$row['utilisateur_id']."
            }
        ";
        echo $jSonMedia;
        //return $row;
        return $jSonMedia;
    }else{
        //echo "pas de data";
        //header("location: ./index.php");
        //exit();
        return "No data";
    }
}
?>
