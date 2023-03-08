@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2>Elenco Categorie</h2>
                    </div>
                </div>
            </div>
            <div class="col-12 my-5">
                <table class="table table-striped">
                    <thead>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Slug</th>
                        <th>Azioni</th>
                    </thead>
                    <tbody>
                        @foreach ($technology as $tech)
                            <tr>
                                <td>{{ $tech->id }}</td>
                                <td>{{ $tech->name }}</td>
                                <td>{{ $tech->slug }}</td>
                                <td>
                                    <div class="d-flex">
                                        <div class="m-1">
                                            <a href="{{ route('admin.posts.show', $tech->slug)}}" title="Visualizza Progetto" class="btn btn-primary btn-sm btn-square">
                                                    <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                        <div class="m-1">
                                            <a href="{{ route('admin.posts.edit', $tech->slug)}}" title="Modifica Progetto" class="btn btn-warning btn-sm btn-square">
                                                    <i class="fas fa-edit"></i>
                                            </a>
                                        </div>
                                        <div class="m-1">
                                            <form action="{{ route('admin.posts.destroy', $tech->slug) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm btn-square">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                        </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
