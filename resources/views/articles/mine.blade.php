@extends('./../layout/index')

@section('content')
    <div class="row">
        <ul class="list-group">
            <h4>Articles disponibles</h4>
            <div class="divider" style="border-bottom: 1px solid #f2f2f2; margin-bottom:1rem;"></div>
            @forelse ($my_articles as $article)
                <li class="list-group-item">
                    <a href="/articles/{{ $article->id }}" class="title">{{ $article->titre }}</a>
                    <div class="descrition">{{ $article->description }}</div>
                </li>

            @empty
                <p class="text text-info">Aucun Article n'a été trouvé</p>
            @endforelse
        </ul>
    </div>
@endsection
