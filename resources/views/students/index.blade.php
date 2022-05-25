@extends('templates.template')


@section('content')

    @if(session('success') || session('error'))
        <div class="alert @if(session('success'))alert-success @else alert-danger @endif  align-items-center">
            <p>{{session('success') ?? session('error')}}</p>
        </div>
    @endif

    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <a href="{{route('students.create')}}">
                <button class="btn btn-success mb-4 p-3">Criar Novo Aluno</button>
            </a>

            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                @if(!empty($students))
                    @foreach($students as $student)
                        <div class="col mb-5">
                            <div class="card h-100">
                                <img class="card-img-top"
                                     src="@if($student['gender'] == 'masculino') https://i.pinimg.com/originals/56/42/4e/56424e8965a48dd88c476f6eeab68d9c.jpg @elseif($student['gender'] == 'feminino') https://i.pinimg.com/564x/da/b7/ca/dab7cab4389e272c1e7e778698ca928d--mariana-th-birthday.jpg @else https://i.pinimg.com/originals/00/8a/91/008a91a4df56160532aaf56549937a86.jpg @endif"
                                     alt="...">
                                <div class="card-body p-4">
                                    <div class="text-center row">
                                        <h5 class="fw-bolder">{{$student['name']}}</h5>
                                        <br><br><br><br>
                                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#responsibleModal{{$student['id']}}">Responsável pelo Aluno</button>
                                        <a class="btn btn-outline-warning mt-4" href="{{route('students.edit',$student['id'])}}">Editar Aluno<button hidden ></button></a>


                                    </div>
                                </div>
                                <!-- Product actions-->

                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center row">
                                            <a
                                            >
                                                <button data-bs-toggle="modal" data-bs-target="#destroy-{{$student['id']}}" class="btn btn-danger eow mt-3" type="submit">Excluir Aluno</button>
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="responsibleModal{{$student['id']}}" tabindex="-1" aria-labelledby="responsibleModal{{$student['id']}}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="responsibleModal{{$student['id']}}">{{$student['responsible']['name']}}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h5>CPF : {{$student['responsible']['cpf']}}</h5>
{{--                                        <p>This <a href="#" role="button" class="btn btn-secondary" data-bs-toggle="popover" title="Popover title" data-bs-content="Popover body content is set in this attribute.">button</a> triggers a popover on click.</p>--}}
                                        <hr>
                                        <h5> {{$student['responsible']['name']}} é o responsável pelo(a) {{$student['name']}}</h5>
{{--                                        <p><a href="#" data-bs-toggle="tooltip" title="Tooltip">This link</a> and <a href="#" data-bs-toggle="tooltip" title="Tooltip">that link</a> have tooltips on hover.</p>--}}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-danger">Notificar mal comportamento</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal" id="destroy-{{$student['id']}}" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tem certeza que quer excluir {{$student['name']}} ?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <b><p>Responsável:</p></b>
                                        {{$student['responsible']['name']}}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <form method="POST" action="{{route('students.destroy',$student['id'])}}">
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
