<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use \PDF;



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
        }elseif($form_type[0] == 'marital_will'){
            if($gender == 'male'){
                $templatePath = public_path('templates/marital_will_male.docx');
                $outputPath = $this->_createMaritalWill($templatePath,$request->all());
                return response()->download($outputPath);
            }else{
                $templatePath = public_path('templates/marital_will_female.docx');
                $outputPath = $this->_createMaritalWill($templatePath,$request->all());
                return response()->download($outputPath);
            }
           
        }else{
            $result = 'Invalid form type';
        }
        //Return result
        //return $result;
    }
    private function _createMaritalWill($templatePath,$arr){
        
        $templateProcessor = new TemplateProcessor($templatePath);
        //replace space by _ in client name
        $docFileName = str_replace(' ', '_', $arr['client_name']).'_'.date('Y-m-d-H-i-s').'.doc';
        $pdfFileName = str_replace(' ', '_', $arr['client_name']).'_'.date('Y-m-d-H-i-s').'.pdf';
        $docFilePath = storage_path('output'.DIRECTORY_SEPARATOR.$docFileName);
        $pdfFilePath = storage_path('output'.DIRECTORY_SEPARATOR.$pdfFileName);

        $templateProcessor->setValue('client_name', strtoupper($arr['client_name']));
        $templateProcessor->setValue('county_name', strtoupper($arr['county_name']));
        $templateProcessor->setValue('co_client_name', strtoupper($arr['co_client_name']));
        $templateProcessor->setValue('backup_name', strtoupper($arr['backup_name']));
        $templateProcessor->setValue('second_backup_name', strtoupper($arr['second_backup_name']));
        $templateProcessor->setValue('witness_1', strtoupper($arr['witness1_name']));
        $templateProcessor->setValue('witness_2', strtoupper($arr['witness2_name']));
        $templateProcessor->setValue('var_date', 'this '.date('d').' day of '.date('F').' '.date('Y'));
        $templateProcessor->setValue('child_details_text', $this->_generateChildDetailsText($arr));
        $templateProcessor->setValue('paragraph_option', $this->_generateParagraphOptionText($arr));
       

        //Gnerete DOC
        $templateProcessor->saveAs($docFilePath);
        //Gnerete PDF
        $this->_convertDocToPdf($docFilePath, $pdfFilePath);

        
        //upload file to google drive
        // $fileData = \File::get($outputPath);
        // \Storage::cloud()->put($arr['client_name'].'/'.$docFileName, $fileData);
    
        return $pdfFilePath;
    }
   
    
    private function _generateChildDetailsText($arr){
        $adultChildren = [];
        $minorChildren = [];
        $allChildren = [];
        $child_details_text = '';
        if($arr['children'] == 0){
            $child_details_text = 'I have (0) no children.';
        }else{
            
            for($i=1;$i<=$arr['children'];$i++){
                $allChildren[] = $arr['name_child'.$i];
                //calculate age
                $age = date_diff(date_create($arr['dob_child'.$i]), date_create('today'))->y;
                if($age >= 18){
                    $adultChildren[] = $arr['name_child'.$i];
                }else{
                    $minorChildren[] = $arr['name_child'.$i];
                }
            }
            $child_details_text = 'I have ('.$arr['children'].') 
                children  living to wit: '.strtoupper(implode(" , ",$allChildren)).' (my “children”).';
        }
        return $child_details_text;
    }

    private function _generateParagraphOptionText($arr){
        $adultChildren = [];
        $minorChildren = [];
        $allChildren = [];
        $child_details_text = '';
        if($arr['children'] == 0){
            $paragraph_option_text = '';
        }else{
            
            for($i=1;$i<=$arr['children'];$i++){
                $allChildren[] = $arr['name_child'.$i];
                //calculate age
                $age = date_diff(date_create($arr['dob_child'.$i]), date_create('today'))->y;
                if($age >= 18){
                    $adultChildren[] = $arr['name_child'.$i];
                }else{
                    $minorChildren[] = $arr['name_child'.$i];
                }
            }
            //if number of aduult child is more than 1
            if(count($adultChildren) > 1){
                $paragraph_option_text = 'If she does not survive me, then I give, bequeath, and devise outright to my children, in equal shares, per stirpes. If not then living, then the residue shall distributed outright in equal shares to my children. If a child does not survive me, then I give, bequeath, and devise a share to the Descendant’s Trust, for each such predeceased child’s children, per stirpes, then living under the terms of the Descendant’s Trust, hereinafter described.';
            }
            //if number of minor child is 1 or greater than 1
            if(count($minorChildren) >= 1){
                $paragraph_option_text = 'If she does not survive me, then I give, bequeath, and devise outright to my children, in equal shares, per stirpes.
                 If not then living, then the residue shall distributed outright in equal shares to my children.';
            }
           
        }
        return $paragraph_option_text;
    }
    private function _convertDocToPdf($docFilePath, $pdfFilePath)
    {
        $phpWord = IOFactory::load($docFilePath);
        $htmlWriter = IOFactory::createWriter($phpWord , 'HTML');
        $htmlOutputPath = public_path('output.html');
        $htmlWriter->save($htmlOutputPath);
        $htmlContent = file_get_contents($htmlOutputPath);

        // Load the HTML content into DomPDF and save it as a PDF
        $pdf = PDF::loadHTML($htmlContent);
        $pdf->save($pdfFilePath);
        return $pdfFilePath;
    }
    
}
//${paragraph_option} 
