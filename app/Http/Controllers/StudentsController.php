<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Responsible;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    private $student;
    private $responsible;

    public function __construct(Student $student, Responsible $responsible)
    {
        $this->student = $student;
        $this->responsible = $responsible;
    }

    public function index()
    {
        $students = $this->student->with('responsible')
            ->get()
            ->toArray();

        return view('students.index', compact('students'));
    }


    public function create()
    {
        return view('students.create');
    }

    public function store(StudentRequest $request)
    {
        DB::beginTransaction();

        $responsible = $this->responsible->create([
            'name' => $request->get('responsible_name'),
            'birth_date' => $request->get('responsible_birth_date'),
            'cpf' => $request->get('responsible_cpf'),
            'gender' => $request->get('responsible_gender'),
        ]);

        $student = $this->student->create([
            'name' => $request->get('name'),
            'cpf' => $request->get('cpf'),
            'birth_date' => $request->get('birth_date'),
            'gender' => $request->get('gender'),
            'responsible_id' => $responsible->id,
            'registered' => false
        ]);

        if ($responsible && $student) {
            DB::commit();
            return redirect()
                ->route('students.index')
                ->with('success', 'Aluno cadastrado com sucesso!');
        }

        DB::rollBack();
        return redirect()->route('students.create');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id);
    }

    public function edit($id)
    {
        $student = $this->student->find($id)
            ->toArray();

        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {

        $student = $this->student->find($id)->update([
            'name' => $request->get('name'),
            'cpf' => $request->get('cpf'),
            'birth_date' => $request->get('birth_date'),
            'gender' => $request->get('gender')
        ]);

        if ($student){
            return redirect()->route('students.index')->with('success','Aluno Atualizado com sucesso!');
        }
        return redirect()->route('students.edit')->with('error','Não foi possivel editar aluno!');
    }

    public function destroy($id)
    {
        Student::find($id)->delete();

        return redirect()->route('students.index')->with('success','Aluno Excluido com sucesso');
    }
}
