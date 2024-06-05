<?=$this->extend("layout/web");?>

<?=$this->section("content");?>

<div class='container h-100'>
  <div class='row d-flex justify-content-center align-items-center h-100'>
    <div class='col-lg-12 col-xl-11'>
      <div class='card' style='border-radius: 25px;'>
        <div class='card-body p-md-5 bg-secondary text-white'>
          <div class='row justify-content-center'>
            <div class='col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1'>
              <h1 class='text-center'>Úprava dílů</h1>
              <?= form_open('/upraveni'); ?>
              <?= form_hidden("_method", "PUT"); ?>
              <?= form_hidden("produkt_id", $seznam->produkt_id); ?>
              
              <div class='mb-3'>
                <?= form_label("Název", "Název", ['class' => 'form-label']); ?>
                <?= form_input(['class' => 'form-control', 'type' => 'text', 'required' => 'required', 'name' => 'produkt_nazev', 'value' => $seznam->produkt_nazev]); ?>
              </div>

              <div class='mb-3'>
                <?= form_label("Datum výroby", "datum", ['class' => 'form-label']); ?>
                <?= form_input(['class' => 'form-control', 'type' => 'text', 'name' => 'produkt_datum_vyroby', 'value' => $seznam->produkt_datum_vyroby]); ?>
              </div>

              <div class='mb-3'>
                <?= form_label("Popis", "Popis", ['class' => 'form-label']); ?>
                <?= form_textarea(['class' => 'form-control', 'name' => 'produkt_popis', 'value' => $seznam->produkt_popis, 'rows' => '4']); ?>
              </div>

              <div class='d-grid'>
                <?= form_input(['class' => 'btn btn-light', 'type' => 'submit', 'value' => 'UPRAVIT']); ?>
              </div>
              <?= form_close(); ?>
            </div>                   
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?=$this->endSection();?>
