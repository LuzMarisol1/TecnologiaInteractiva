<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    //
    public function index(Request $req)
    {
        $proyectos = Proyecto::all();
        return  view('proyectos')->with("proyectos", $proyectos);
    }
    public function add(Request $req)
    {
        $proyecto = new Proyecto;
        $proyecto->proyecto = $req->proyecto;
        $proyecto->matricula = $req->matricula;
        $proyecto->director = $req->director;
        $proyecto->save();
        return redirect()->back();
    }
    public function delete(Request $req)
    {
        $proyecto = Proyecto::find($req->id);
        $proyecto->delete();
        return redirect()->back();
    }
    public function edit(Request $req)
    {
        $proyecto = Proyecto::find($req->id);
        return view('edit')->with("proyecto", $proyecto);
    }
    public function update(Request $req)
    {
        $proyecto = Proyecto::find($req->id);
        $proyecto->update([
            'director' => $req->director,
            'matricula' => $req->matricula,
            'proyecto' => $req->proyecto,
        ]);
        return redirect()->back();
    }
}
