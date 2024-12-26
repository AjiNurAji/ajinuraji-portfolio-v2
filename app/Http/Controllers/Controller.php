<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

abstract class Controller
{
    public function isMaintenance(Request $request)
    {
        $validated = $request->validate([
            "site_name" => "string",
            "is_maintenance" => "boolean"
        ]);

        $site = Site::where("site_name", $validated["site_name"])->first();

        $site->is_maintenance = $validated["is_maintenance"];
        $site->save();
        return response()->json($site);
    }
}
