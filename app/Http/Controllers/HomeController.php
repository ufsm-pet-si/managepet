<?php

namespace App\Http\Controllers;

use App\Participant;
use App\Activity;
use App\Presence;
use Session;
use Illuminate\Http\Request;
use \CloudConvert\Api;
use \PhpOffice\PhpWord\TemplateProcessor;
use View;

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
    
    public function listCertificates(Request $request){
        // validate
        $request->validate([
            'matricula' => 'required|string|max:255',
        ]);

        $matricula = $request->input('matricula');

        $activities = $this->getActivities($matricula);
        return View::make('certificates.index')->with(['activities' => $activities, 'matricula' => $matricula]);
    }

    public function getActivities($matricula) {
        $activities = array();
        $searchedParticipant = Participant::where('matricula', $matricula)->firstOrFail();
        if ($searchedParticipant) {
            foreach($searchedParticipant->subscriptions as $subscription) {
                array_push($activities, $subscription->activity);
            }
        }
        return $activities;
    }
    
    public function getCertificate($matricula, $activity_id) {
        // find the participant and his presences in the activity of id $activity_id
        $searchedParticipant = Participant::where('matricula', $matricula)->firstOrFail();
        $presences = $searchedParticipant->presences;
        // get the activity_days
        $activitiesDay = array();
        foreach($presences as $presence)
            array_push($activitiesDay, $presence->activityDay);
        // get dates and compute total duration
        $dates = array();
        $duration = 0;
        foreach($activitiesDay as $activityDay) {
            if ($activityDay->activity_id == $activity_id) {
                $duration += $activityDay->duration;
                array_push($dates, date_format(date_create_from_format('Y-m-d', $activityDay->date), 'd/m/Y'));
            }
        }
        if ($duration == 0) {
            $message = "Impossível gerar certificado. Você possui zero horas de presenças nessa atividade.";
            Session::flash('message', ['text' => $message, 'type'=>"error" ]);
            $activities = $this->getActivities($matricula);
            return View::make('certificates.index')->with(['activities' => $activities, 'matricula' => $matricula, 'error' => $message]);
        }

        // cast dates to a single string
        $dateStr = '';
        foreach($dates as $date) 
            $dateStr = $dateStr . $date . ', ';

        // read the base certificate template
        $file = public_path('certificates/template/certificate_template.docx');
        $phpword = new TemplateProcessor($file);

        // fill the matching fields
        $phpword->setValue('${nome}', $searchedParticipant->name);
        $phpword->setValue('${atividade}', Activity::findOrFail($activity_id)->title);
        $phpword->setValue('${dias}', $dateStr);
        $phpword->setValue('${horas}', $duration);

        $filepath = 'certificates/generated/'.$matricula. '_'.$activity_id;

        // save the filled document
        $phpword->saveAs($filepath. '.docx');

        // convert the certificate (.docx -> .pdf) and save it in public/certificates/generated/'$filepath'.pdf
        $this->downloadCertificate($filepath);

        // return the certificate file (as pdf) to the client
        return response()->file($filepath. '.pdf');
    }

    /**
     * @input $filepath (path to a .docx file)
     * Donwload the respective .docx file in .pdf format  through cloudConvert service, saving it as '$filepath'.pdf
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
