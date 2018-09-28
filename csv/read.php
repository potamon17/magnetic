<?php
/**
 * Created by PhpStorm.
 * User: tanco
 * Date: 28.09.2018
 * Time: 00:07
 */

/*$row = 1;
$delete = str_replace( "(", ")", "-");
if (($handle = fopen("test.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, "+")) !== FALSE) {
        $num = count($data);
        echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo  $data[$c] . "<!--<br />-->\n";
        }
    }
    fclose($handle);
}*/
$i = 0;
$newdata = [];
$handle = fopen("test.csv", "r" );
$symbol = array('+', '(', ')', '-', ' ');

$set = "";

$symbol2 = ('-');
$set2 = ('.');

// READ CSV
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

    // UPDATE 100TH ROW DATA (TO EXCLUDE, KEEP ONLY $i++ AND continue)
    if ($i == 99) {
        $newdata[$i][] = 'sdf';
        $newdata[$i][] = "asd";
        $newdata[$i][] = "as";
        $newdata[$i][] = "asd";
        $newdata[$i][] = "sd";
        $newdata[$i][] = "asd";
        $newdata[$i][] = "asd";
        $newdata[$i][] = str_replace($symbol, $set,"");
        $newdata[$i][] = "sd";
        $newdata[$i][] = "asd";
        $i++;
        continue;
    }
    $newdata[$i][] = $data[0];
    $newdata[$i][] = $data[1];
    $newdata[$i][] = $data[2];
    $newdata[$i][] = $data[3];
    $newdata[$i][] = $data[4];
    $newdata[$i][] = $data[5];
    $newdata[$i][] = str_replace($symbol, $set, $data[6]);
    $newdata[$i][] = $data[7];
    $data1 = substr($data[8], 0,-6);
    $data2 = substr($data[8], 8);
    $data3 = substr($data[8], 5, -2);

    $data4 = $data3.''.$data2.'.'.$data1;
    $newdata[$i][] = str_replace($symbol2, $set2, $data4);
    $i++;
}

// EXPORT CSV
$fp = fopen('NewFile.csv', 'w');
foreach ($newdata as $rows) {
    fputcsv($fp, $rows);
}
fclose($fp);
