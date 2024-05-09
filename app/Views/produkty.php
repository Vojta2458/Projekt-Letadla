
<?=$this->extend("layout/web");?>

<?=$this->section("content");?>

<?php
echo "<div class='row'>";

foreach ($seznam as $index => $radek) {
echo "<div class='col-lg-12 d-flex align-items-stretch mb-50 text-center'>

<div class='card mb-3 primary text-black text-center' style='margin-top: 40px; width: 100%;''>
<div class='card-header'>
<p class='text-bold'><strong style='margin-left: 10px;'>".anchor('detail/'.$radek->produkt_id, $radek->produkt_nazev)."</strong></p>
</div>
<div class='card-body'>
<p class='text-bold'><strong>Popis: </strong>".$radek->produkt_popis."</p>
</div>";
echo "</div>";
echo"</div>";
}
echo $pager->links();
echo "</div>";
$data = array(
    'class' => 'btn btn-secondary'
);
echo anchor('vytvorit','PŘIDAT', $data);
$this->endSection();?>
