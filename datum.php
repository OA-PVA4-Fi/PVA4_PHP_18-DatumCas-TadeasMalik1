<?php
$aktualniDatum = date('Y-m-d');
echo "Aktuální datum dle vzoru Rok-Měsíc-Den: $aktualniDatum<br>";
echo "Aktuální datum dle vzoru YYYY-MM-DD: $aktualniDatum<br>";
$aktualniCas = date('H:i:s');
echo "Aktuální čas ve tvaru Hodiny:Minuty:Sekundy: $aktualniCas<br>";
$aktualniDatumCas = date('Y-m-d H:i:s');
echo "Aktuální Datum a čas dle vzoru 2021-11-25 14:03:15: $aktualniDatumCas<br>";
$aktualniDatumCasCesky = date('j. n. Y H:i');
echo "Aktuální datum a čas dle české normy. Vzor 14. 12. 2024 13:02: $aktualniDatumCasCesky<br>";

echo "Aktuální datum: $aktualniDatum<br>";
$zitrejsiDatum = date('Y-m-d', strtotime('+1 day'));
echo "Zítřejší datum: $zitrejsiDatum<br>";
$prvniDenNasledujicihoMesice = date('Y-m-01', strtotime('+1 month'));
echo "První den následujícího měsíce: $prvniDenNasledujicihoMesice<br>";
$posledniDenNasledujicihoMesice = date('Y-m-t', strtotime('+1 month'));
echo "Poslední den následujícího měsíce: $posledniDenNasledujicihoMesice<br>";
$vcerejsiDatum = date('Y-m-d', strtotime('-1 day'));
echo "Včerejší datum: $vcerejsiDatum<br>";
$splatnostDatum = date('Y-m-d', strtotime('+14 days'));
echo "Datum splatnosti 14 dní od data vystavení: $splatnostDatum<br>";
$zdanitelneDatum = date('Y-m-d', strtotime('-3 days'));
echo "Datum zdanitelného plnění před třemi dny: $zdanitelneDatum<br>";
?>