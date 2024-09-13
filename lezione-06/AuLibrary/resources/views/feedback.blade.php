<x-layouts.main-layout>
    <div>
        <x-errors></x-errors>

        <x-success></x-success>
        <x-fail></x-fail>
        <h1>Lasciaci un tuo feedback</h1>
        <form action="{{ route('feedback.send') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input name="name" type="text" class="form-control" id="name" value="{{old('name')}}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="email" value="{{old('email')}}">
            </div>
            <div class="mb-3 form-check">
                <textarea name="message" class="form-control" id="feedback" cols="60" rows="10" value="{{old('message')}}"></textarea>
                <label class="form-check-label" for="feedback">Scrivi qui il tuo feedback</label>
            </div>
            <button type="submit" class="btn btn-primary">Invia il feedback</button>
        </form>
    </div>
</x-layouts.main-layout>
