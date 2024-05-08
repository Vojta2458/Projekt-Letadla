<?=$this->extend("layout/web");?>

<?=$this->section("content");?>


<form action="<?=base_url('pridat_hotovo');?>" method="post" enctype="multipart/form-data">
  <div class="card m-2" style="cursor: crosshair;width: 100%;height:100%; border-radius: 10px; padding: 10px;text-align: center;">
                   <h2>Vytvořit</h2>
  <div class="form-group">
                    <label>Název:</label>
                    <input type="text" class="form-control" style="height:40px;" name="produkt_nazev">
                    <br><label>popis:</label>
                    <textarea name="produkt_popis" cols="40" rows="5"></textarea>
                    <br>
                    <button type="submit" class="btn btn-success" style="bottom:10px;left:10px;right:10px">Vytvořit nový</button>
</div>
                </div>
                <br>
            </form>