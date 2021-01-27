<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (Codedge\Fpdf\Fpdf\Fpdf $fpdf) {
    ob_end_clean();
    $fpdf->AddPage();
    $fpdf->SetFont('Courier', 'B', 18);
    $fpdf->SetTextColor(61, 135, 142);
    $fpdf->Cell(20);
    $fpdf->Cell(0, 0, 'Valoramos tu tiempo');
    $fpdf->ln(10);
    $fpdf->SetFont('Courier', '', 18);
    $fpdf->Cell(0, 0, utf8_decode('No más filas, silicita tu cargo automático'));
    $fpdf->ln(10);
    $fpdf->Cell(30);
    $fpdf->SetFont('Courier', 'B', 18);
    $fpdf->Cell(0, 0, utf8_decode('Es más facil'));
    $fpdf->ln(10);
    $fpdf->SetFont('Courier', '', 18);
    $fpdf->Cell(0, 0, 'Con tarjeta de credito');
    $fpdf->ln(10);
    $fpdf->Cell(100, 0, '', 1, 1, 'l');
    $fpdf->ln(5);
    $fpdf->Image('logo.png',30,50,53);
    $fpdf->ln(25);
    $fpdf->Cell(0, 0, utf8_decode('O en línea en nuestra páginas web'));
    $fpdf->AddPage();
    $fpdf->Cell(0, 0, 'Hola mundo');
    $fpdf->ln(5);
    $fpdf->SetFont('Courier', '', 18);
    $fpdf->Cell(0, 0, 'Este es un trabajo de PDF');
    $fpdf->Output(/*"F","Daniel.pdf"^*/);
});