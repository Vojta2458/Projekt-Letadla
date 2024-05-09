<?=$this->extend("layout/web");?>

<?=$this->section("content");
echo"<div class='container h-100' >
<div class='row d-flex justify-content-center align-items-center h-100 '>
  <div class='col-lg-12 col-xl-11'>
    <div class='card text-black' style='border-radius: 25px;'>
      <div class='card-body p-md-5'  style='background-color: rgb(118, 118, 116) ;'>
        <div class='row justify-content-center'>
          <div class='col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1'>";
echo "<h1 class='text-center'>Úprava dílů</h1>";
echo form_open('/upraveni');
echo form_hidden("_method","PUT");
echo form_hidden("produkt_id",$seznam-> produkt_id);
echo"<div class='mb-3 mt-3'>";
$add = [
    'for' => 'Název'
];
echo form_label("Název","",$add);
$add = [
    'class' => 'd-flex flex-row align-items-center mb-4',
    'type' => 'text',
    'required' => 'required',
    'name' => 'produkt_nazev',
    'value' => $seznam -> produkt_nazev
];

echo form_input($add);
$add = [
    'for' => 'datum'
];
echo form_label("datum","",$add);
$add = [
    'class' => 'd-flex flex-row align-items-center mb-4',
    'type' => 'text',
    'name' => 'produkt_datum_vyroby',
    'value' => $seznam -> produkt_datum_vyroby
    
];
echo form_input($add);
echo form_label("Popis","",$add);
$add = [
  'class' => 'd-flex flex-row align-items-center' ,
  'cols' => '50px',
  'name' => 'produkt_popis',
  'value' => $seznam -> produkt_popis
];
echo form_textarea($add);

$add = [
    'class' => 'btn btn-light d-flex flex-row align-items-center mb-4',
    'type' => 'submit',
    'value' => 'UPRAVIT'
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