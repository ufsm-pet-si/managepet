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
        // read the base certificate template
        $file = public_path('certificates/template/certificate_template.docx');

        $phpword = new TemplateProcessor($file);

        // fill the matching fields
        $phpword->setValue('${nome}', 'Fulano');
        $phpword->setValue('${atividade}', 'DivulgaPET');
        $phpword->setValue('${dia}', '23');
        $phpword->setValue('${mes}', 'Outubro');
        $phpword->setValue('${ano}', '2019');
        $phpword->setValue('${horas}', '2:30');

        $filepath = 'certificates/generated/'.$matricula;

        // save the filled document
        $phpword->saveAs($filepath. '.docx');

        // convert the certificate (.docx -> .pdf) and save it in public/certificates/generated/'$filepath'.pdf
        $this->downloadCertificate($filepath);

        // return the certificate file (as pdf) to the client
        return response()->file($filepath. '.pdf');
    }

    /**
     * @input $filepath (path to a .docx file)
     * Donwload the respective .docx file in .pdf format and save it as '$filepath'.pdf
     * @return void
     */
    public function downloadCertificate($filepath) {
        $api = new Api(/*env("CLOUD_CONVERT_KEY")); */ // hey, add the CLOUD_CONVERT_KEY in your .env file and remove fhe following line!!!
            'AIU6sFPgPoNbdLihROcFnFMWMZYg3uR6fhaE0gBkeZ92U1iza8KW7dRkagfPcUhP');
        $api
            ->convert([
                "input" => "upload",
                "inputformat" => "docx",
                "outputformat" => "pdf",
                "file" => fopen($filepath. '.docx', 'r'),
            ])
            ->wait()
            ->download($filepath. '.pdf');
    }

    public function relatories(){
        return view('relatories/index');
    }
}
