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
                <h2>RESPONSÁVEL PELO ALUNO</h2>
                <form action="{{route('students.store')}}" method="POST">
                    @csrf
                    <br>

                    <div class="form-group">
                        <label for="title">NOME DO RESPONSÁVEL</label>
                        <input type="text" class="form-control" id="nome" name="title" value="{{old('nome')}}"
                               placeholder="Nome do Responsável">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="nascimento">DATA DE NASCIMENTO</label>
                        <input name="nascimento" type="date" class="form-control" id="nascimento"
                               placeholder="Data de nascimento">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input required name="cpf" type="text" class="form-control" id="cpf"
                               placeholder="CPF">
                    </div>
                    <br>
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>SEXO</option>
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                            <option value="naobinario">Não Binario</option>
                        </select>
                        <label for="floatingSelect">Sexo</label>
                    </div>

                    <br><br>
                    <button type="submit" class="btn btn-success">Continuar</button>
                </form>
            </div>
        </div>

    </div>

@endsection
