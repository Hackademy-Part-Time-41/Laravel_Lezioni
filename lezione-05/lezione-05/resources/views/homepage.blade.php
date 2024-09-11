<x-layout :title="$titolo">

    <x-slot:subtitle>
        Sono il sottotitolo secondario
    </x-slot>
    <div class="container">
        <div class="row">
            @foreach ($articles as $article)
                <x-card :image="$article['image']" :title="$article['title']" :content="$article['body']"  :route="route('contacts')" />
            @endforeach
        </div>
    </div>

</x-layout>



