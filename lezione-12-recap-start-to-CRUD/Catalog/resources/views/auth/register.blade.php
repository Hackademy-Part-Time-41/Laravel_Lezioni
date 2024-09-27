<x-layout>
    <form action="/register" method="POST">
        @csrf
        <label for="name">Username</label>
        <input id="name" type="text" class="form-control" name="name" value="{{old('name')}}">
        @error('name')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <label for="email">Email</label>
        <input id="email" type="email" class="form-control" name="email"  value="{{old('email')}}">
        @error('email')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <label for="password">Password</label>
        <input id="password" type="password" class="form-control" name="password" value="{{old('password')}}" >
        @error('password')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <label for="password_confirmation">Confirm namePassword</label>
        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">
        <button type="submit" class="btn btn-primary">Registrati</button>
    </form>
</x-layout>