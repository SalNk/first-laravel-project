@extends('./../layout/index')

@section('content')
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 mt-2">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('login') }}" method="post" class="form-product">

                        @if (session()->has('error'))
                            <div class="alert alert-danger">{{ session()->get('error') }}</div>
                        @endif

                        @method('post')
                        @csrf
                        <h4>Se connecter</h4>
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
                        <button type="submit" class="btn btn-success">Connexion</button>
                    </form>
                    <p>Vous avez un compte? <a href="{{route('registration')}}">Créer un compte</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
@endsection
