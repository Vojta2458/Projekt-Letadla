<?=$this->extend("layout/web");?>

<?=$this->section("content");
echo"<div class='container h-100' >
<div class='row d-flex justify-content-center align-items-center h-100 '>
  <div class='col-lg-12 col-xl-11'>
    <div class='card text-black' style='border-radius: 25px;'>
      <div class='card-body p-md-5'  style='background-color: rgb(118, 118, 116) ;'>
        <div class='row justify-content-center'>
          <div class='col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1'>";
echo "<h1 class='text-center'>Přidávání produktů</h1>";?>


<?php
echo form_open('/vytvorit/hotovo');
echo"<div class='mb-3 mt-3'>";
$add = [
    'for' => 'Název'
];
echo form_label("Název","",$add);
$add = [
    'class' => 'd-flex flex-row align-items-center mb-4',
    'type' => 'text',
    'required' => 'required',
    'placeholder' => 'Název produktu',
    'name' => 'produkt_nazev'
];

echo form_input($add);
$add = [
    'for' => 'datum'
];
echo form_label("datum","",$add);
$add = [
    'class' => 'd-flex flex-row align-items-center mb-4',
    'type' => 'text',
    'placeholder' => 'datum',
    'name' => 'produkt_datum_vyroby'
];
echo form_input($add);

echo form_label("Popis","",$add);
$add = [
  'cols' => '50',
  'class' => 'd-flex flex-row align-items-center mb-4',
  'name' => 'produkt_popis'
];
echo form_textarea($add);


$add = [
    'class' => 'btn btn-light d-flex flex-row align-items-center mb-4',
    'type' => 'submit',
    'value' => 'ODESLAT'
];
echo form_input($add);
echo form_close();
echo"</div>                   
</div>
</div>
</div>
</div>
</div>
</div>";

$this->endSection();?>;

