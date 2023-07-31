<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TourController extends Controller
{
    //
    public function index()
    {
        $data = DB::table('tours')->get();  // Retreiving all the tour package
        return view('view', [
            'data' => $data     // pass it as a parameter 
        ]);
    }
    public function create()
    {
        return view('home');    // return a view to the insert form
    }
    public function store(Request $request) {
        $request->validate([
            'package_name' => 'required',
            'price' => 'required',
            'start' => 'required',
            'end' => 'required',
            'total_day' => 'required',
        ]);
        $t = new Tour();
        $t->package_name = $request->package_name;
        $t->price = $request->price;
        $t->start = $request->start;
        $t->end = $request->end;
        $t->total_day = $request->total_day;

        $t->save();
        return redirect('tour');
    }

    public function edit($id) {
        $data = Tour::findOrFail($id);
        return view('edit', [
            'data' => $data
        ]);
    }
    public function update($id, Request $request) {
        $data = Tour::findOrFail($id);
        $data->package_name = $request->package_name ?? $data->package_name;
        $data->price = $request->price ?? $data->price;
        $data->start = $request->start ?? $data->start;
        $data->end = $request->end ?? $data->end;
        $data->total_day = $request->total_day ?? $data->total_day;

        $data->save();
        return redirect('tour');
        }
    public function delete($id) {
        $data = Tour::where('id', $id)->delete();
        return response()->json([
            "msg" => $data
        ]);
    }
}
