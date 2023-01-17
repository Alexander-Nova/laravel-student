<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use App\Exports\ExportAlumno;
use Barryvdh\DomPDF\Facade\Pdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Maatwebsite\Excel\Facades\Excel;


class ReporteController extends Controller
{
    //

    public function index()
    {
        return view('reporte.index');
    }

    public function pdfAprobados()
    {
        $alumnos = Alumno::where("estado", "=", 1)
            ->where("nota_final", ">=", 6.0)
            ->paginate();
        // return $alumnos;

        $pdf = Pdf::loadView('reporte.aprobados', ['alumnos' => $alumnos]);
        return $pdf->stream();
    }

    public function pdfAlumnos()
    {
        $alumnos = Alumno::where("estado", "=", 1)
            // ->where("nota_final",">=",6.0)
            ->paginate();
        // return $alumnos;

        $pdf = Pdf::loadView('reporte.alumnos', ['alumnos' => $alumnos]);
        return $pdf->stream();
    }

    public function pdfAlumno($id)
    {
        $alumnos = Alumno::findOrFail($id);
        // return $alumnos;
        $pdf = Pdf::loadView('reporte.alumno', ['alumnos'=> $alumnos]);
        return $pdf->stream();
    }

    public function pdfReprobados()
    {
        $alumnos = Alumno::where("estado", "=", 1)
            ->where("nota_final", "<=", 6.0)
            ->paginate();
        // return $alumnos;

        $pdf = Pdf::loadView('reporte.reprobados', ['alumnos' => $alumnos]);
        return $pdf->stream();
    }

    public function excelAlumnos()
    {

        // $libros = Libro::all();
        // return Excel::download($libros, 'libros.xlsx');
        // return Excel::download(new ExportAlumno, 'alumnos.xlsx');

       $alumnos = Alumno::where("estado","=","1")->paginate();

        $spreadsheet = new Spreadsheet();
        
        $spreadsheet->getActiveSheet()
        ->setCellValue('A1', 'Id')
        ->setCellValue('B1', 'Nombre')
        ->setCellValue('C1', 'Apellidos')
        ->setCellValue('D1', 'Carnet')
        ->setCellValue('E1', 'Grado')
        ->setCellValue('F1', 'Nombre de la madre')
        ->setCellValue('G1', 'Nombre del padre')
        ->setCellValue('H1', 'Edad')
        ->setCellValue('I1', 'Nota final');

        $row = 2;
        foreach ($alumnos as $alumno) {
            $spreadsheet->getActiveSheet()
            ->setCellValue('A'.$row, $alumno->id_alumno)
            ->setCellValue('B'.$row, $alumno->nombres)
            ->setCellValue('C'.$row, $alumno->apellidos)
            ->setCellValue('D'.$row, $alumno->carnet)
            ->setCellValue('E'.$row, $alumno->grado->nombre)
            ->setCellValue('F'.$row, $alumno->nombre_de_madre)
            ->setCellValue('G'.$row, $alumno->nombre_de_padre)
            ->setCellValue('H'.$row, $alumno->edad)
            ->setCellValue('I'.$row, $alumno->nota_final);
            $row ++;
        }

        $writer = new Xlsx($spreadsheet);
        $nombreDocumento = "Alumnos.xlsx";


        // redirect output to client browser
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$nombreDocumento.'"');
        header('Cache-Control: max-age=0');

        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('php://output');
    }
}
