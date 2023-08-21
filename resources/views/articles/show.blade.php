@extends('./../layout/index')

@section('content')
    <div class="card mt-3">

        <div class="card-body">
            <a href="/accueil" style="text-decoration: none;">
                <img src="{{ asset('css/assets/arrow.png') }}" alt="" width="12px" style="">Retour
            </a>
            <div class="title">{{ $article->titre }}</div>
            <p>{{ $article->description }}</p>
        </div>
        @auth
        @if (Auth::user()->id == $article->user_id)
             <div class="card-footer">
                <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-info btn-sm">Editer</a>

                <form action="{{ route('articles.delete', $article->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                </form>
            </div>
        @endif
           
        @endauth
    </div>
@endsection
