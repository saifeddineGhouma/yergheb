<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Reclamation;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.index');
    }
    public function create()
    {
        $categories=Categorie::all();
      
        return view('front.createReclamation',compact('categories'));
    }
    public function store( Request $request)
    {
        $reclamation=new Reclamation();
        $reclamation->description=$request->description;
        $reclamation->categorie_id=$request->categorie_id;
      
        $reclamation->adresse=$request->adresse;
        $path = $request->file('photo')->store('public/Photo');
        $reclamation->photo=$path;

        $reclamation->save();
        dd($reclamation);


    }
}
