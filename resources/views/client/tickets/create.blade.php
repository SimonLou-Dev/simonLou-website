@extends('layout.app')

@section('content')
    <div id="ticket-creation">
        <div class="creation-content">
            <form>
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Object</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Catégorie</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Valider</button>
            </form>

        </div>
    </div>

@endsection
