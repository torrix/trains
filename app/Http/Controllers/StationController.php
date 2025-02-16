<?php

namespace App\Http\Controllers;

use App\OpenLDBWS;
use Illuminate\Http\Request;
use SoapFault;

class StationController extends Controller
{
    public function __invoke(
        Request $request,
        string  $stationCode = 'LAN',
    )
    {
        $stationCode = strtoupper($stationCode);

        $train = new OpenLDBWS($_ENV['OPEN_LDBWS_TOKEN']);

        try {
            $response = $train->getDepBoardWithDetails(10, $stationCode);
        } catch (SoapFault $soapFault) {
            return ['error' => 'Something went wrong: ' . $soapFault->getMessage()];
        }

        $trainServices = $response->GetStationBoardResult->trainServices->service ?? [];
        $busServices = $response->GetStationBoardResult->busServices->service ?? [];

        return view('station', [
            'stationCode' => $stationCode,
            'locationName' => $response->GetStationBoardResult->locationName,
            'messages' => $response->GetStationBoardResult->nrccMessages->message ?? [],
            'trainServices' => is_array($trainServices) ? $trainServices : [$trainServices],
            'busServices' => is_array($busServices) ? $busServices : [$busServices],
        ]);
    }
}
