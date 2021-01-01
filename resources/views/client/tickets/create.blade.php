@extends('layout.app')

@section('content')
    <div id="ticket-creation">
        <div class="creation-content">
            <form method="post" action="{{route('client.ticket.add', $projectid)}}">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Object</label>
                    <input type="text" class="form-control" name="object" id="exampleFormControlInput1" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Catégorie</label>
                    <select class="form-control" name="cat" id="exampleFormControlSelect1">
                        @foreach($cats as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Valider</button>
            </form>

        </div>
    </div>

@endsection
