<x-layout>
    <form  action="/register" method="POST">
        @csrf
        <label for="name">Username</label>
        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="title" value="{{old('name')}}">
        @error('name')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <label for="email">Email</label>
        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email" value="{{old('email')}}">
        @error('email')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <label for="password">Inserisci la tua password e confermala</label>
        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" id="password" value="{{old('password')}}">
        <input class="form-control @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" id="password_confirmation" value="{{old('password_confirmation')}}">
        @error('password')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        
        <button type="submit" class="btn btn-primary mt-3">Registrati</button>
    </form>
</x-layout>