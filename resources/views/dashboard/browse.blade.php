<x-layout>
    <ul>
    @foreach ($stores as $store)
        <li>
            <a class="store_link" href="/store/{{$store->id}}">{{$store->store_name}}</a>
        </li>
    @endforeach
    </ul>   
</x-layout>