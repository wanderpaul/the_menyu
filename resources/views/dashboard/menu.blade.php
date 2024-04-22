<x-layout>
    Items
    <hr>
    
    <form>
        <ul class="list-group">
            @foreach ($menu as $item)
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="food_{{$item->id}}">
                <label class="form-check-label" for="food_{{$item->id}}">{{$item->item_name}}</label>
            </div>
            @endforeach
        </ul>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</x-layout>