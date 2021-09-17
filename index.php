<?php
require_once('./vendor/autoload.php');
//1st package
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$dompdf->loadHtml('Hello');
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream();

//2nd package
$faker = Faker\Factory::create();
echo ("NAME : " .$faker->name());
echo ("\nEmail : " .$faker->email());
echo ("\nText : " .$faker->text());

?>