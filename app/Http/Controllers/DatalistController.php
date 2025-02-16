<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatalistController extends Controller
{
    public function __invoke(Request $request)
    {
        $query = $request->query('station');

        $results = [];
        if (($handle = fopen("./../database/stations.csv", "r")) !== false) {
            while (($data = fgetcsv($handle, 1000, ",")) !== false) {
                $results[$data[0]] = $data[1];
            }
            fclose($handle);
        }

        return view('datalist', ['results' => $results]);
    }
}
