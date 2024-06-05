<?=$this->extend("layout/web");?>

<?=$this->section("content");?>

<?php
echo "<div class='container mt-5'>";
echo "<div class='row'>";

foreach ($seznam as $index => $radek) {
echo "<div class='col-md-6 col-lg-4 mb-4 d-flex align-items-stretch'>
<div class='card text-white bg-primary'>
<div class='card-header'>
<p class='font-weight-bold mb-0'>".anchor('detail/'.$radek->produkt_id, $radek->produkt_nazev, ['class' => 'text-white'])."</p>
</div>
<div class='card-body'>
<p class='font-weight-bold'><strong>Popis: </strong>".$radek->produkt_popis."</p>
</div>
</div>
</div>";
}

echo "</div>";
echo "<div class='d-flex justify-content-center mt-4'>";
echo $pager->links();
echo "</div>";
$data = array(
    'class' => 'btn btn-secondary'
);
echo "<div class='text-center mt-4'>".anchor('vytvorit', 'PŘIDAT', $data)."</div>";
echo "</div>";
$this->endSection();?>

