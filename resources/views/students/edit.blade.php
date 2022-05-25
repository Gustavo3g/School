@extends('templates.template')


@section('content')


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <div class="card mt-4">
            <div class="card-body">
                <form action="{{route('students.update',$student['id'])}}" method="POST">
                    @method('PUT')
                    @csrf
                    <br>
                    <hr>
                    <h3>DADOS DO ALUNO</h3>
                    <div class="form-group">
                        <label for="titulo">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$student['name']}}">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="birth_date">Nascimento</label>
                        <input name="birth_date" type="date" class="form-control" id="birth_date"
                               value="{{$student['birth_date']}}" placeholder="Data de nascimento">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input required name="cpf" value="{{$student['cpf']}}" type="text" class="form-control" id="cpf"
                               placeholder="CPF">
                    </div>
                    <br>
                    <div class="form-floating">
                        <select class="form-select" name="gender" id="gender">
                            <option>SEXO</option>
                            <option {{$student['gender'] == 'masculino' ? 'selected':''}} value="masculino">Masculino</option>
                            <option {{$student['gender'] == 'feminino' ? 'selected':''}} value="feminino">Feminino</option>
                            <option {{$student['gender'] == 'naobinario' ? 'selected':''}} value="naobinario">Não Binario</option>
                        </select>
                        <label for="floatingSelect">Sexo</label>
                    </div>

                    <br><br>
                    <button type="submit" class="btn btn-warning">Atualizar Aluno</button>
                </form>
            </div>
        </div>
    </div>

@endsection
