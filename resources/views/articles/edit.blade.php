@extends('./../layout/index')

@section('content')
    <div class="row mt-2">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card mt-3">
                <div class="card-body">
                    <h4>Editer un article</h4>

                    <form method="POST" action="{{route('articles.update', $article->id)}}">

                        @csrf
                        @method('put')

                        <input type="text" class="form-control" name="titre" value="{{ $article->titre }}"
                            class="form-control">

                        <textarea name="description" class="form-control mt-1">{{ $article->description }}</textarea>

                        <div class="buttons">
                            <button href="" class="btn btn-success mt-1" type="submit">Actualiser</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
        </div>
    @endsection
