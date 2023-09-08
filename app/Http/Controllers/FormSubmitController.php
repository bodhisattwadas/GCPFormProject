<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;



class FormSubmitController extends Controller
{
    /** create form submit method */
    public function formSubmit(Request $request)
    {
        
        //Get form_type from request
        $form_type = $request->input('form_type');
        //Get gender from request
        $gender = $request->input('gender');
        //Check form type
        if($form_type[0] == 'will'){
            $result = $this->_createSingleWill();
        }elseif($form_type[0] == 'marital_will' && $gender == 'male'){
            $outputPath = $this->_createMaritalWillMale($request->all());
            return response()->download($outputPath);
        }elseif($form_type[0] == 'marital_will' && $gender == 'female'){
            $result = $this->_createMaritalWillFemale();
        }else{
            $result = 'Invalid form type';
        }
        //Return result
        //return $result;
    }
    private function _createMaritalWillMale($arr){
        $templatePath = public_path('templates/marital_will_male.docx');
        $templateProcessor = new TemplateProcessor($templatePath);
        //replace space by _ in client name
        $docFileName = str_replace(' ', '_', $arr['client_name']).'_'.date('Y-m-d').'.docx';

        $templateProcessor->setValue('client_name', strtoupper($arr['client_name']));
        $templateProcessor->setValue('county_name', strtoupper($arr['county_name']));
        $templateProcessor->setValue('co_client_name', strtoupper($arr['co_client_name']));
        $templateProcessor->setValue('backup_name', strtoupper($arr['backup_name']));
        $templateProcessor->setValue('second_backup_name', strtoupper($arr['second_backup_name']));
        $templateProcessor->setValue('witness_1', strtoupper($arr['witness1_name']));
        $templateProcessor->setValue('witness_2', strtoupper($arr['witness2_name']));
        //get day of month
        $day = date('d');
        //get month
        $month = date('F');
        //get year
        $year = date('Y');
        $templateProcessor->setValue('date', );

        $outputPath = public_path('templates/'.$docFileName);
        $templateProcessor->saveAs($outputPath);

        // Return the generated document as a file download response
        return $outputPath;
    }
    private function _createMaritalWillFemale(){
        return 'female';
    }
}

