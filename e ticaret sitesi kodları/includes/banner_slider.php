<?php
$pdt_info = $obj->display_product_byCata(1);
$pdt_datas = array();
while ($pdt_ftecth = mysqli_fetch_assoc($pdt_info)) {
    $pdt_datas[] = $pdt_ftecth;
}
?>
