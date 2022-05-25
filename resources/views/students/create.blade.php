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
                <form action="{{route('students.store')}}" method="POST">
                    @csrf

                    <br>
                    <h3>DADOS DO RESPONSÁVEL</h3>
                    <div class="form-group">
                        <label for="responsible_name">NOME DO RESPONSÁVEL</label>
                        <input type="text" class="form-control" id="nome" name="responsible_name" value="{{old('responsible_name')}}"
                               placeholder="Nome do Responsável">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="nascimento">DATA DE NASCIMENTO</label>
                        <input name="responsible_birth_date" type="date" class="form-control" id="nascimento"
                               placeholder="Data de nascimento">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input required name="responsible_cpf" type="text" class="form-control" id="cpf"
                               placeholder="CPF">
                    </div>
                    <br>
                    <div class="form-floating">
                        <select class="form-select" id="responsible_gender" name="responsible_gender" aria-label="Floating label select example">
                            <option selected>SEXO</option>
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                            <option value="naobinario">Não Binario</option>
                        </select>
                        <label for="responsible_gender">Sexo</label>
                    </div>

                    <hr>
                    <h3>DADOS DO ALUNO</h3>
                    <div class="form-group">
                        <label for="titulo">NOME</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}"
                               placeholder="Nome do Aluno">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="birth_date">DATA DE NASCIMENTO</label>
                        <input name="birth_date" type="date" class="form-control" id="birth_date"
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
                        <select class="form-select" name="gender" id="gender">
                            <option selected>SEXO</option>
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                            <option value="naobinario">Não Binario</option>
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
