<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Smart;
use Carbon\Carbon;
use Auth;

use Illuminate\Support\Facades\Gate;///adicionado

class SmartController extends Controller
{

    public function __construct()
    {

     Carbon::setLocale('pt_BR');
    }

    public function index()
    {

         $smarts = Smart::where('user_id', Auth::user()->id)->paginate(10);
        return view('admin.index', compact('smarts'));

    }

    public function create()
    {
        return view('admin.create');

    }


    public function store(Request $request)
    {


        $smart = new Smart;
        $smart->title = $request->input('title');
        $smart->link = $request->input('link');
        $smart->category = $request->input('category');

        Auth::user()->smarts()->save($smart);

        return redirect()->back();

    }


    public function show($id)
    {

        $smart = Smart::find($id);
        return view('admin.show', compact('smart', '$smart'));

    }


    public function edit($id)
       {

           $smart = Smart::find($id);
           if(Gate::denies('edit-link', $smart)){
               abort(403, "Naõ autorizado");
           }
           return view('admin.edit', ['smart'=>$smart]);

       }

    public function update(Request $request, $id)
    {

        $smart = Smart::find($id);
        $smart->title = $request->input('title');
        $smart->link = $request->input('link');
        $smart->category = $request->input('category');
        $smart->save();
        return redirect('meus-links');
    }


    public function destroy($id)
    {

            $smart = Smart::find($id);
            $smart->delete();
            return redirect()->back();
    }


}//Fim
