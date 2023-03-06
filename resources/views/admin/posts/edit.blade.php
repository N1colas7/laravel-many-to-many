@extends('layouts.admin')
@section('content')
<div class="contaier">
    <div class="row">
        <div class="col-12 my-5">
            <h2>Aggiungi Nuovo Progetto</h2>
        </div>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-12">
            <form action="{{ route('admin.posts.update', $post->slug)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="control-label">
                        Titolo
                    </label>
                    <input type="text" class="form-control" placeholder="Titolo" id="title" name="title" value="{{ old('title') ?? $post->title }}">
                    @error('title')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group mt-3">
                    <label class="control-label">
                         Contenuto
                    </label>
                    <textarea class="form-control" placeholder="Contenuto" id="content" name="content">{{ old('title') ?? $post->content }}
                    </textarea>
                </div>
                <div class="form-group my-3">
                    <button type="submit" class="btn btn-success">Salva il Progetto</button>
                </div>
            </form>
        </div>    
    </div>
</div>
@endsection