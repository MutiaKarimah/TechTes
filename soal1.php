<?php
$array = array('gtAkademik', 'gtFinansi', 'gtPerizinan', 'eCampuz', 'eOviz');

while($row = each($array)){//each akan berjalan dari elemen pertama-terakhir
    echo $row['value']. ' ';
}
?>