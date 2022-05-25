@extends('templates.template')


@section('content')

    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <a href="{{route('classes.create')}}">
                <button class="btn btn-primary mb-4 p-3">Criar Nova Turma</button>
            </a>

            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                @if(!empty($classes))
                    @foreach($classes['classes'] as $classe)
                        <div class="col mb-5">
                            <div class="card h-100">
                                <img class="card-img-top" src="{{$classe['path_image'] ?? "#"}}"
                                     alt="...">
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder">{{$classe['name']}}</h5>
                                        <button class="btn-success disabled">{{$classe['name']}}</button>

                                    </div>
                                </div>
                                <!-- Product actions-->

                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-success mt-auto" href="#">Vizualizar
                                            solução</a></div>
{{--                                    <form method="POST" action="{{route('challenges.destroy',$challenge->id)}}">--}}
{{--                                        @csrf--}}
{{--                                        @method('DELETE')--}}
{{--                                        <div class="text-center"><a class="btn btn-danger mt-3" href="#">--}}
{{--                                                <button class="btn btn-danger" type="submit">Excluir</button>--}}
{{--                                            </a></div>--}}
{{--                                    </form>--}}

                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </section>
@endsection
