<?php

namespace App\Http\Controllers;

use App\Models\uren;
use App\Models\Weeknummer;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class UrenController extends Controller
{
    public function index()
    {

        $uren = uren::all();
        $weeknummer = Weeknummer::get('weeknummer');
        return view('pages.uren', compact('uren','weeknummer'));
    }

    public function store(Request $request)
    {
        $input = $request->all();


        uren::create($input);

        return redirect('uren')->with('success', 'Accommodation created successfully!');

    }

    public function destroy($id)
    {
        uren::destroy($id);
        return redirect('/uren')->with('yessir');

    }
    public function show($weeknummer, $id)
    {
        $weeknummer = uren::findorfail($weeknummer);
        $uren = uren::all();
        $weekshit = uren::findorfail($id);
        return view('pages.uren', compact('uren','weeknummer','weekshit'));
    }
}
