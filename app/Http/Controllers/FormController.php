<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Http\Requests\StoreUpdateForm;
use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $forms = Form::get();

        return view('index', compact('forms'));
    }
    
    public function create()
    {
        return view('form');
    }

    public function store(StoreUpdateForm $request)
    {
        $data = $request->all();

        if($request->image->isValid()){

            $nameFile = Str::of($request->nome)->slug('-') . '.' .$request->image->getClientOriginalExtension(); 

           $image = $request->image->storeAs('perfil_form', $nameFile);
           $data['image'] = $image;
        }

        Form::create($data);

        return redirect()->route('form.index');
    }

    public function show($id) 
    {
        $form = Form::find($id); 

        if(!$form){

            return redirect()->route('form.index');
        }

        return view('show', compact('form'));
    }

    public function panel()
    {
        $forms = Form::get();

        return view('admin.forms.form_panel', compact('forms'));
    }

    public function editor($id)
    {
        $form = Form::find($id); 

        if(!$form){

            return redirect()->route('form.editor');
        }
        return view('admin.forms.editor', compact('form'));
    }

        
    public function destroy($id)
    {
        $form = Form::find($id); 

        if(!$form){

            return redirect()->route('form.editor');
        }
        $form->delete();

        return redirect()
                ->route('form.panel')
                ->with('delete', 'Formulário Deletado');
    }
    
    public function update(StoreUpdateForm $request, $id)
    {
        $form = Form::find($id); 

        if(!$form){

            return redirect()->route('form.editor');
        }
            $nameFile = Str::of($request->nome)->slug('-') . '.' .$request->image->getClientOriginalExtension(); 

            $image = $request->image->storeAs('perfil_form', $nameFile);

            $form['image'] = $nameFile;
            $form['nome'] = $request->nome;
            $form['sobrenome'] = $request->sobrenome;
            $form['descricao'] = $request->descricao;


            $form->save();

        return redirect()
                ->route('form.panel')
                ->with('update', 'Formulário Editado');
    }
}
