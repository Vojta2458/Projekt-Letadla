<?=$this->extend("layout/web");?>

<?=$this->section("content");
echo "<div class='row'>";

echo "<div class='offset-lg-4 col-lg-3 col-12 col-md-6 d-flex align-items-stretch mb-50 text-center justify-content-center'>

<div class='card mb-3 primary text-black text-center'>
<div class='card-header'><p class='text-bold'><strong>".$seznam->produkt_nazev."</strong></p></div>
<div class='card-body'>
<p class='text-bold'></p>
</div>
<p class='text-bold'><strong>Popis: </strong>".$seznam->produkt_popis."</p>
<p class='text-bold'><strong>Cena: </strong>".$seznam->produkt_cena."</p>
<p class='text-bold'><strong>Datum: </strong>".$seznam->produkt_datum_vyroby."</p>
</div>";
echo"</div>";

echo "</div>";

$this->endSection();?>