<?php 

require_once 'db.php';



if (isset($_POST['modalId'])){

    $modalId = $_POST['modalId'];

    // ilçelerini bul
    $sorgu = $db->prepare('SELECT * FROM modal WHERE brand_id = ?');
    $sorgu->execute([$modalId]);
    $modals = $sorgu->fetchAll(PDO::FETCH_ASSOC);

    $html = '<option>- Model Seçin -</option>';
    foreach ($modals as $modal){
        $html .= '<option value="' . $modal['modal_id'] . '">' . $modal['modal_name'] . '</option>';
    }

    echo $html;

}



?>