<?php 

    include './Classes/Invoice.php';
    include './Classes/Item.php';

    $item1 = new Item("Cips", 0.75, 3);
    $item2 = new Item("Cokolada", 1.20, 2);

    $items = [$item1, $item2];

    $invoice = new Invoice("'; DROP TABLE contracts; --", "01.08.2022",  $items);
    $invoice->save();

?>