<x-layout>
    @foreach($users as $user)
    <div>{{$user->name}}</div>
    @endforeach
    <div>{{$users->links()}}</div>
</x-layout>