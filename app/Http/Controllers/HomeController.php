<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \CloudConvert\Api;
use \PhpOffice\PhpWord\TemplateProcessor;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function schedule(){
        return view('schedule/index');
    }

    public function certificates(){
        return view('certificates/index');
    }
    
    public function getCertificate($matricula) {
        $file = public_path('certificates/template/certificate_template.docx');

        $phpword = new TemplateProcessor($file);

        $phpword->setValue('${nome}', 'Fulano');
        $phpword->setValue('${atividade}', 'DivulgaPET');
        $phpword->setValue('${dia}', '23');
        $phpword->setValue('${mes}', 'Outubro');
        $phpword->setValue('${ano}', '2019');
        $phpword->setValue('${horas}', '2:30');

        $filename = 'certificates/generated/'.$matricula;

        $phpword->saveAs($filename. '.docx');

        $this->downloadCertificate($filename);

        return response()->file($filename. '.pdf');
    }

    public function downloadCertificate($filename) {
    $api = new Api(
        /*env("CLOUD_CONVERT_KEY")); */ // hey, coloque a key no seu arquivo .env e apague a linha abaixo!!!
        'AIU6sFPgPoNbdLihROcFnFMWMZYg3uR6fhaE0gBkeZ92U1iza8KW7dRkagfPcUhP');

        $api
            ->convert([
                "input" => "upload",
                "inputformat" => "docx",
                "outputformat" => "pdf",
                "file" => fopen($filename. '.docx', 'r'),
            ])
            ->wait()
            ->download($filename. '.pdf');
    }

    public function relatories(){
        return view('relatories/index');
    }
}
