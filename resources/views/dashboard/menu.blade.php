<x-layout>
    Items
    <hr>
    <div>
        <ul class="list-group">
            @foreach ($menu as $item)
            <li class="list-group-item">
                {{$item->item_name}}
            </li>
            @endforeach
        </ul>
    </div>

    <button type="button" class="btn btn-primary">Add</button>
</x-layout>