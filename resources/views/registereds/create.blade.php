@extends('templates.template')


@section('content')


    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    <li>{{$error}}</li>
                </div>

            @endforeach
        </ul>
    @endif
    <div class="container">

        <div class="card mt-4">
            <div class="card-body">
                <form action="{{route('registered.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">ALUNO</label>
                        <input disabled type="text" class="form-control" id="nome" name="name" value="{{$student['name']}}"
                               placeholder="Nome do Aluno">
                    </div>
                    <div class="form-group">
                        <label for="name">CPF</label>
                        <input disabled type="text" class="form-control" id="nome" name="name" value="{{$student['cpf']}}"
                               placeholder="Nome do Aluno">
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                            <input name="portugues" type="checkbox" class="btn-check" id="portugues" autocomplete="off">
                            <label class="btn btn-outline-primary" for="portugues">PORTUGUÊS</label>

                            <input name="matematica" type="checkbox" class="btn-check" id="matematica" autocomplete="off">
                            <label class="btn btn-outline-danger" for="matematica">MATEMATICA</label>

                            <input name="historia" type="checkbox" class="btn-check" id="historia" autocomplete="off">
                            <label class="btn btn-outline-primary" for="historia">HISTORIA</label>

                            <input name="geografia" type="checkbox" class="btn-check" id="geografia" autocomplete="off">
                            <label class="btn btn-outline-primary" for="geografia">GEOGRAFIA</label>
                        </div>
                    </div>
                    <br><br>

                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" name="series" aria-label="Floating label select example">
                            <option selected>SELECIONE A TURMA</option>
                            @foreach($classes as $classe)
                                <option value="{{$classe['id']}}"> <b>TURMA</b> - {{$classe['name']}} da <b>ESCOLA</b> {{$classe['school']}}</option>
                            @endforeach

                        </select>
                    </div>
                    <br><br>
                    <button type="submit" class="btn btn-primary">Matricular Aluno {{$student['name']}}</button>
                </form>
            </div>
        </div>

    </div>

@endsection
