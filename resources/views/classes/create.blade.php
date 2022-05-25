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
                <form action="{{route('classes.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">NOME DA TURMA</label>
                        <input type="text" class="form-control" id="nome" name="name" value="{{old('nome')}}"
                               placeholder="Nome do Aluno">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="descricao">Nome DA ESCOLA</label>
                        <input name="nascimento" type="text" class="form-control" id="school"
                               placeholder="Nome da escola">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="descricao">ANO</label>
                        <input required name="ano" type="text" class="form-control" id="ano"
                               placeholder="Ano">
                    </div>
                    <br>
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" name="serie" aria-label="Floating label select example">
                            <option selected>SERIE</option>
                            <option value="1">1 ANO - FUNDAMENTAL</option>
                            <option value="2">2 ANO - FUNDAMENTAL</option>
                            <option value="3">3 ANO - FUNDAMENTAL</option>
                            <option value="4">4 ANO - FUNDAMENTAL</option>
                            <option value="5">5 ANO - FUNDAMENTAL</option>
                            <option value="6">6 ANO - FUNDAMENTAL</option>
                            <option value="7">7 ANO - FUNDAMENTAL</option>
                            <option value="8">8 ANO - FUNDAMENTAL</option>
                            <option value="9">9 ANO - FUNDAMENTAL</option>
                        </select>
                        <label for="floatingSelect">Sexo</label>
                    </div>

                    <br><br>
                    <button type="submit" class="btn btn-success">Criar Aluno</button>
                </form>
            </div>
        </div>

    </div>

@endsection
