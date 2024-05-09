<?=$this->extend("layout/web");?>

<?=$this->section("content");

$table = new \CodeIgniter\View\Table();
echo "<div class= 'col-4'>";
$table->setHeading('ID', 'Název','Editace', 'Mazání');
foreach ($seznam as $radek) {
    $data = array(
        'class' => 'btn btn-warning'
    );
    $editButton = anchor('/uprav/'.$radek -> produkt_id,'EDIT', $data);
    $add = [
        'class' => 'btn btn-danger d-flex flex-row align-items-center mb-4',
        'type' => 'submit',
        'value' => 'ODEBRAT'
    ];
    $deleteButton = form_open('/odeber').form_input($add).form_hidden("produkt_id",$radek -> produkt_id).form_hidden("_method","DELETE").form_close();
    $pole = array($radek -> produkt_id, $radek -> produkt_nazev,$editButton,$deleteButton);
    $table->addRow($pole);
}

$template = array(
    'table_open'=> '<table class="table table-bordered">',
    'thead_open'=> '<thead>',
    'thead_close'=> '</thead>',
    'heading_row_start'=> '<tr>',
    'heading_row_end'=>' </tr>',
    'heading_cell_start'=> '<th>',
    'heading_cell_end' => '</th>',
    'tbody_open' => '<tbody>',
    'tbody_close' => '</tbody>',
    'row_start' => '<tr>',
    'row_end'  => '</tr>',
    'cell_start' => '<td>',
    'cell_end' => '</td>',
    'row_alt_start' => '<tr>',
    'row_alt_end' => '</tr>',
    'cell_alt_start' => '<td>',
    'cell_alt_end' => '</td>',
    'table_close' => '</table>'
    );
    
    $table->setTemplate($template);
echo $table->generate();
 echo "</div>";
 echo $pager->links();
 $this->endSection();?>