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
                        <input type="text" class="form-control" id="nome" name="name" value="{{old('name')}}"
                               placeholder="Nome da Turma">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="school">Nome DA ESCOLA</label>
                        <input name="school" type="text" class="form-control" id="school"
                               placeholder="Nome da escola">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="descricao">ANO</label>
                        <input required name="year" type="text" class="form-control" id="year"
                               placeholder="Ano">
                    </div>
                    <br>
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" name="series" aria-label="Floating label select example">
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
                    </div>

                    <br><br>
                    <button type="submit" class="btn btn-success">Criar Turma</button>
                </form>
            </div>
        </div>

    </div>

@endsection
