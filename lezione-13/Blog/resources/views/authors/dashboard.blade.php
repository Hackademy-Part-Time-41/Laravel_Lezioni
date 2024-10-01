<x-layout>
    <h1>Dashboard di gestione degli autori</h1>
    <div><a href="{{route('authors.create')}}"><button class="btn btn-primary">Inserisci un nuovo autore</button></a></div>
    <x-success></x-success>
    <table class="table">
        <thead>
          <tr>
            <th >#</th>
            <th colspan="2" >Name</th>
            <th colspan="1" >Surname</th>
            <th colspan="1" >Phone</th>
            <th >Actions</th>
          </tr>
        </thead>
        <tbody>
         
        @foreach ($authors as $author)   
        <tr >
          <td >{{$author->id}}</td>
          <td colspan="2">{{$author->name}}</td>
          <td >{{$author->surname}}</td>
          <td >{{$author->phone}}</td>
          <td class="d-flex gap-3" ><a href="{{route('authors.edit',$author)}}"><button class="btn btn-secondary">Modifica</button></a>
            <form class="d-inline" action="{{route('authors.destroy',$author)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Elimina</button>
            </form>
            </td>
        </tr>
        @endforeach
        </tbody>
      </table>
</x-layout>