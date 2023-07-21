<?php
// Load file koneksi.php
include ("../koneksi.php");
// Load file autoload.php
require '../vendor/autoload.php';
// Include librari PhpSpreadsheet
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet;
$sheet = $spreadsheet->getActiveSheet();
// Set Value header
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Nama Mahasiswa');
$sheet->setCellValue('C1', 'NIM');
$sheet->setCellValue('D1', 'Kelas');
$sheet->setCellValue('E1', 'Email');
$sheet->setCellValue('F1', 'Alamat');

// Menangkap Data
$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($koneksi, $query);

$i = 2;
$no = 1;
while($row=mysqli_fetch_array($result))
{
    $sheet->setCellValue('A'.$i, $no++);
    $sheet->setCellValue('B'.$i, $row['nama_mhs']);
    $sheet->setCellValue('C'.$i, $row['nim']);
    $sheet->setCellValue('D'.$i, $row['kelas']);
    $sheet->setCellValue('E'.$i, $row['email']);
    $sheet->setCellValue('F'.$i, $row['alamat']);
    $i++;
}

$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];
$i = $i - 1;
$sheet->getStyle('A1:F'.$i)->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Mahasiswa.xlsx');
header("location:../masterdata.php");

?>
