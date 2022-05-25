<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClasseRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Classe;

class ClassesController extends Controller
{

    private $classe;

    public function __construct(Classe $classe)
    {
        $this->classe = $classe;
    }

    public function index()
    {
        $classes = $this->classe->get()->toArray();
        return view('classes.index', compact('classes'));
    }

    public function create()
    {
        return view('classes.create');
    }

    public function store(ClasseRequest $request)
    {
        $this->classe->create([
            'name' => $request->get('name'),
            'school' => $request->get('school'),
            'series' => $request->get('series'),
            'year' => $request->get('year')
        ]);

        return redirect()->route('classes.index')->with('success', 'Turma Criada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $classe = $this->classe->find($id)
            ->toArray();

        return view('classes.edit', compact('classe'));
    }

    public function update(ClasseRequest $request, $id)
    {
        $this->classe->find($id)
            ->update([
                'name' => $request->get('name'),
                'school' => $request->get('school'),
                'series' => $request->get('series'),
                'year' => $request->get('year'),
                'updated_at' => Carbon::now()
            ]);

         return redirect()->route('classes.index')->with('success', 'Turma Editada com sucesso!');
    }


    public function destroy($id)
    {
        if(!$classe = $this->classe->find($id)){
            return redirect()->route('classes.index')->with('error', 'Turma não encontrada.');
        }

        $classe->delete();
        return redirect()->route('classes.index')->with('error', 'Turma excluida com sucesso!');
    }
}
