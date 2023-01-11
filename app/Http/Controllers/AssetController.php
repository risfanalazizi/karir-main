<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;

class AssetController extends Controller
{
    public function index(Request $request) {
        $assets = Asset::all();

        return view('application.homepage')->with([
            'assets' => $assets
        ]);
    }

    public function store(Request $request) {
        $attribute = $request->all();
        if ($attribute['id']) {            
            unset($attribute['_token']);
            Asset::where('id', $attribute['id'])->update($attribute);
        } else {
            Asset::create($attribute);
        }

        return redirect()->route('asset.index');
    }
}