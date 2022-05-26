@extends('templates.template')


@section('content')

    @if(session('success') || session('error'))
        <div class="alert @if(session('success'))alert-success @else alert-danger @endif  align-items-center">
            <p>{{session('success') ?? session('error')}}</p>
        </div>
    @endif

    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
{{--            <a href="{{route('registered.create')}}">--}}
{{--                <button class="btn btn-primary mb-4 p-3">Criar Nova Matricula</button>--}}
{{--            </a>--}}

            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                @if(!empty($registereds))
                    @foreach($registereds as $registered)
                        <div class="col mb-5">
                            <div class="card h-100">
                                <spam><button class="btn btn-primary position-absolute">Matricula {{$registered['id'] }}</button></spam>
                                <img class="card-img-top"
                                     src="https://img.freepik.com/vetores-gratis/classe-escola-ninguem-sala-de-aula-quadro-negro-mesa-cadeira-educacao-ilustracao_7081-2475.jpg?w=2000"
                                     alt="...">
                                <div class="card-body p-4">
                                    <div class="text-center row">
                                        <h5 class="fw-bolder">{{$registered['id']}}</h5>
                                        <br><br><br><br>
                                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#classModal{{$classe['id']}}">Ver Alunos matriculados</button>
                                        <a class="btn btn-outline-warning mt-4" href="{{route('classes.edit',$classe['id'])}}">Editar Classe<button hidden ></button></a>


                                    </div>
                                </div>
                                <!-- Product actions-->

                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center row">
                                        <a
                                        >
                                            <button data-bs-toggle="modal" data-bs-target="#destroy-{{$classe['id']}}" class="btn btn-danger eow mt-3" type="submit">Excluir Classe</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="classModal{{$classe['id']}}" tabindex="-1" aria-labelledby="classModal{{$classe['id']}}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="responsibleModal{{$classe['id']}}">{{$classe['name']}}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h5>CPF : </h5>
                                        {{--                                        <p>This <a href="#" role="button" class="btn btn-secondary" data-bs-toggle="popover" title="Popover title" data-bs-content="Popover body content is set in this attribute.">button</a> triggers a popover on click.</p>--}}
                                        <hr>
                                        <h5> sdfdsf</h5>
                                        {{--                                        <p><a href="#" data-bs-toggle="tooltip" title="Tooltip">This link</a> and <a href="#" data-bs-toggle="tooltip" title="Tooltip">that link</a> have tooltips on hover.</p>--}}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal" id="destroy-{{$classe['id']}}" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tem certeza que quer excluir {{$classe['name']}} ?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <form method="POST" action="{{route('classes.destroy',$classe['id'])}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Excluir</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </section>
@endsection
