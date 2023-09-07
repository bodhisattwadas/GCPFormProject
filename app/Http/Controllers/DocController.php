<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;

class DocController extends Controller
{
    public function createDoc(){
        // Path to your template file
        $templatePath = public_path('templates/temp1.docx');

        // Create new TemplateProcessor instance
        $templateProcessor = new TemplateProcessor($templatePath);

        // Set values to your template variables
        $templateProcessor->setValue('firstname', 'John Doe');

        // Save the new document to a file
        $outputPath = public_path('templates/generated.docx');
        $templateProcessor->saveAs($outputPath);

        // Return the generated document as a file download response
        return response()->download($outputPath);
    }
    
}
