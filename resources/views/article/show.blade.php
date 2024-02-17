@extends('layouts.app')

@section('template_title')
    {{ $article->name ?? "{{ __('Show') Article" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Articulo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('articles.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $article->Titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Autor:</strong>
                            {{ $article->Autor }}
                        </div>
                        <div class="form-group">
                            <strong>Contenido:</strong>
                            {{ $article->Contenido }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $article->Categoria }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
