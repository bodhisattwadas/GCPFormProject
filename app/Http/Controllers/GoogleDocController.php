<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Google_Client;
use \Google_Service_Docs;

class GoogleDocController extends Controller
{
    public function createDoc(Request $request)
    {
        // Initialize the Google Client
        $client = new Google_Client();
        //$client->setAuthConfig(base_path(env('GOOGLE_APPLICATION_CREDENTIALS')));
        $client->setAuthConfig(base_path('credentials.json'));
        $client->addScope(Google_Service_Docs::DOCUMENTS);
        $client->setAccessType('offline');

        // Initialize the Google Docs service
        $service = new Google_Service_Docs($client);

        // Create a new Google Doc
        $title = 'New Google Doc';
        $document = new Google_Service_Docs_Document([
            'title' => $title,
        ]);
        $document = $service->documents->create($document);

        return response()->json($document);
    }
}
