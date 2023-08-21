@extends('./../layout/index')

@section('content')
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 mt-2">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('registration') }}" method="post" class="form-product">

                        @if (session()->has('success'))
                            <div class="alert alert-success">{{ session()->get('success') }}</div>
                        @endif

                        @method('post')
                        @csrf
                        <h4>Nouvel utilisateur</h4>
                        <div class="form-group">
                            <label for="">Nom</label>
                            <input type="text" class="form-control mt-1" placeholder="Salem Nk"name="nom"
                                value="{{ old('nom') }}">
                            @error('nom')
                                <div class="text text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control mt-1" placeholder="salemnk02@gmail.com" name="email"
                                value="{{ old('email') }}">
                            @error('email')
                                <div class="text text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Mot de passe</label>
                            <input type="password" class="form-control mt-1" placeholder="**********" name="password"
                                value="{{ old('password') }}">
                            @error('password')
                                <div class="text text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success">Ajouter</button>
                    </form>
                    <p>Déjà un compte? <a href="{{route('login')}}">Connectez-vous</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
@endsection
