<x-layout>
    <h1>Dashboard di gestione degli articoli</h1>
    <div><a href="{{route('articles.create')}}"><button>Crea un articolo</button></a></div>
    <x-success></x-success>
    <table class="table">
        <thead>
          <tr>
            <th >#</th>
            <th colspan="2" >Title</th>
            <th >Actions</th>
          </tr>
        </thead>
        <tbody>
         
        @foreach ($articles as $article)   
        <tr >
          <td >{{$article->id}}</th>
          <td colspan="2">{{$article->title}}</td>
          <td class="d-flex gap-3" ><a href="{{route('articles.edit',$article)}}"><button class="btn btn-secondary">Modifica</button></a>
            <form class="d-inline" action="{{route('articles.destroy',$article)}}" method="POST">
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