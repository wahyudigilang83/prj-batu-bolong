<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Barang extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('cetak_pdf');
    }

	function index()
	{
        $pdf = new FPDF('P', 'mm','Letter');

        $pdf->AddPage();

        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(0,7,'DAFTAR BARANG',0,1,'C');
        $pdf->Cell(10,7,'',0,1);

        $pdf->SetFont('Arial','B',10);

        $pdf->Cell(8,6,'No',1,0,'C');
        $pdf->Cell(100,6,'Nama Barang',1,0,'C');
        $pdf->Cell(35,6,'Harga',1,0,'C');
        $pdf->Cell(15,6,'Stok',1,1,'C');

        $pdf->Output();
	}
}