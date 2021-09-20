<?php 

require_once 'db.php';
$brands = $db->query('SELECT * FROM brands ORDER BY brand_id ASC')->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php - ajax telefon modelleri</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="ajax.js"></script>
</head>

<body>

    <div class="select">
        <select name="brands" id="brands">
            <option value="">-MARKA SEÇİN-</option>
            <?php foreach ($brands as $brand): ?>
            <option value="<?= $brand['brand_id']?>"><?=$brand['brand_name']?></option>
            <?php endforeach; ?>
        </select>
    </div> <br>
    <div class="select">
        <select name="modal" id="modal" disabled>
            <option value="">-MODEL SEÇİN-</option>
        </select>
    </div>
</body>

</html>