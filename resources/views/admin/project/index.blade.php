@extends('layout.admin')

@section('content')
<div id="project_all_projects">
        <section class="display">

        @foreach($projects as $project)
            <div class="project_item">
                <a href="{{route('admin.project', [$project->id])}}">
                    <div class="item-header">
                        <h1>{{$project->title}}</h1>
                    </div>
                    <div class="item-content">
                        <h2><span>Type de projet:</span> {{$project->project_types->name}}</h2>
                        <h2><span>Date de création :</span> {{$project->created_at}}</h2>
                        @php
                            $maj = App\Models\project_updates::all()->where('project_id', $project->id)->sortBy('created_at')->first();

                        @endphp
                        @if(!empty($maj))
                            <h2><span>Date de maj : </span>{{date('d/m/Y', strtotime($maj->created_at))}}</h2>
                            <h2><span>Version : </span> {{$maj->version}}</h2>
                        @else
                            <h2><span>Date de maj : </span>pas de maj</h2>
                            <h2><span>Version : </span>pas de maj</h2>
                        @endif

                    </div>
                    <div class="item-footer">
                        <h2>{{$project->user->name}}</h2>
                    </div>
                </a>
            </div>
        @endforeach
    </section>


</div>
@endsection
