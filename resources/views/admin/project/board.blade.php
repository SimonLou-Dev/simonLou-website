@extends('layout.admin')

@section('content')
    <div id="projet_admin_menu">
        <nav>
            <ul>
                <li><a href="{{route('admin.project', $project->id)}}">Main</a> </li>
                <li><a href="{{route('admin.project.board', $project->id)}}">Board</a> </li>
                <li><a href="{{route('admin.project.modify', $project->id)}}">Modifier</a></li>
            </ul>
        </nav>
        <div class="name">
            <h1>{{$project->title}}</h1>
        </div>
    </div>
    <div id="project-board">
        <div class="project-board">
            <section class="board-column">
                <div class="board-column_head">
                    <h1>Bug</h1>
                </div>
                <div class="board-column_content">
                    @foreach($bugs as $tag)
                        <div class="tag">
                            <div class="tag_content">
                                <p>{{$tag->name}}</p>
                            </div>
                            <div class="tag_footer">
                                <div class="qualifier">
                                    @switch($tag->priority)
                                        @case(1)
                                            <div class="qualifier-item qualifier-lowpriority"></div>
                                        @break
                                        @case(2)
                                            <div class="qualifier-item qualifier-mediumpriority"></div>
                                        @break
                                        @case(3)
                                            <div class="qualifier-item qualifier-hightpriority"></div>
                                        @break
                                    @endswitch
                                    @if($tag->front)
                                            <div class="qualifier-item qualifier-front"></div>
                                    @endif
                                    @if($tag->back)
                                            <div class="qualifier-item qualifier-back"></div>
                                    @endif

                                </div>
                                <div class="setter">
                                    <div class="setter_btn"><i class="fas fa-plus"></i>
                                        <div class="tag_setting">
                                            <div class="set_prioritie">
                                                <h1>Priorité : </h1>
                                                <div class="qualifier-item qualifier-lowpriority"><a href="{{route('admin.project.board.card_setpriority', [$tag->id, 1])}}"><i class="fas fa-plus"></i></a></div>
                                                <div class="qualifier-item qualifier-mediumpriority"><a href="{{route('admin.project.board.card_setpriority', [$tag->id, 2])}}"><i class="fas fa-plus"></i></a></div>
                                                <div class="qualifier-item qualifier-hightpriority"><a href="{{route('admin.project.board.card_setpriority', [$tag->id, 3])}}"><i class="fas fa-plus"></i></a></div>
                                            </div>
                                            <div class="set_part">
                                                <h1>Espace :</h1>
                                                <div class="qualifier-item qualifier-back"><a href="{{route('admin.project.board.card_setspace', [$tag->id, "back"])}}"><i class="fas fa-plus"></i></a></div>
                                                <div class="qualifier-item qualifier-front"><a href="{{route('admin.project.board.card_setspace', [$tag->id, "front"])}}"><i class="fas fa-plus"></i></a></div>
                                            </div>
                                            <div class="set_cat">
                                                <a href="{{route('admin.project.board.card_setcategory', [$tag->id, 1])}}">Bug</a>
                                                <a href="{{route('admin.project.board.card_setcategory', [$tag->id, 2])}}">A faire</a>
                                                <a href="{{route('admin.project.board.card_setcategory', [$tag->id, 3])}}">En Cours</a>
                                                <a href="{{route('admin.project.board.card_setcategory', [$tag->id, 4])}}">Terminé</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
            <section class="board-column">
                <div class="board-column_head">
                    <h1>A faire</h1>
                </div>
                <div class="board-column_content">
                    @foreach($forlaters as $tag)
                        <div class="tag">
                            <div class="tag_content">
                                <p>{{$tag->name}}</p>
                            </div>
                            <div class="tag_footer">
                                <div class="qualifier">
                                    @switch($tag->priority)
                                        @case(1)
                                        <div class="qualifier-item qualifier-lowpriority"></div>
                                        @break
                                        @case(2)
                                        <div class="qualifier-item qualifier-mediumpriority"></div>
                                        @break
                                        @case(3)
                                        <div class="qualifier-item qualifier-hightpriority"></div>
                                        @break
                                    @endswitch
                                    @if($tag->front)
                                        <div class="qualifier-item qualifier-front"></div>
                                    @endif
                                    @if($tag->back)
                                        <div class="qualifier-item qualifier-back"></div>
                                    @endif

                                </div>
                                <div class="setter">
                                    <div class="setter_btn"><i class="fas fa-plus"></i>
                                        <div class="tag_setting">
                                            <div class="set_prioritie">
                                                <h1>Priorité : </h1>
                                                <div class="qualifier-item qualifier-lowpriority"><a href="{{route('admin.project.board.card_setpriority', [$tag->id, 1])}}"><i class="fas fa-plus"></i></a></div>
                                                <div class="qualifier-item qualifier-mediumpriority"><a href="{{route('admin.project.board.card_setpriority', [$tag->id, 2])}}"><i class="fas fa-plus"></i></a></div>
                                                <div class="qualifier-item qualifier-hightpriority"><a href="{{route('admin.project.board.card_setpriority', [$tag->id, 3])}}"><i class="fas fa-plus"></i></a></div>
                                            </div>
                                            <div class="set_part">
                                                <h1>Espace :</h1>
                                                <div class="qualifier-item qualifier-back"><a href="{{route('admin.project.board.card_setspace', [$tag->id, "back"])}}"><i class="fas fa-plus"></i></a></div>
                                                <div class="qualifier-item qualifier-front"><a href="{{route('admin.project.board.card_setspace', [$tag->id, "front"])}}"><i class="fas fa-plus"></i></a></div>
                                            </div>
                                            <div class="set_cat">
                                                <a href="{{route('admin.project.board.card_setcategory', [$tag->id, 1])}}">Bug</a>
                                                <a href="{{route('admin.project.board.card_setcategory', [$tag->id, 2])}}">A faire</a>
                                                <a href="{{route('admin.project.board.card_setcategory', [$tag->id, 3])}}">En Cours</a>
                                                <a href="{{route('admin.project.board.card_setcategory', [$tag->id, 4])}}">Terminé</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
            <section class="board-column">
                <div class="board-column_head">
                    <h1>En cours</h1>
                </div>
                <div class="board-column_content">
                    @foreach($inworks as $tag)
                        <div class="tag">
                            <div class="tag_content">
                                <p>{{$tag->name}}</p>
                            </div>
                            <div class="tag_footer">
                                <div class="qualifier">
                                    @switch($tag->priority)
                                        @case(1)
                                        <div class="qualifier-item qualifier-lowpriority"></div>
                                        @break
                                        @case(2)
                                        <div class="qualifier-item qualifier-mediumpriority"></div>
                                        @break
                                        @case(3)
                                        <div class="qualifier-item qualifier-hightpriority"></div>
                                        @break
                                    @endswitch
                                    @if($tag->front)
                                        <div class="qualifier-item qualifier-front"></div>
                                    @endif
                                    @if($tag->back)
                                        <div class="qualifier-item qualifier-back"></div>
                                    @endif

                                </div>
                                <div class="setter">
                                    <div class="setter_btn"><i class="fas fa-plus"></i>
                                        <div class="tag_setting">
                                            <div class="set_prioritie">
                                                <h1>Priorité : </h1>
                                                <div class="qualifier-item qualifier-lowpriority"><a href="{{route('admin.project.board.card_setpriority', [$tag->id, 1])}}"><i class="fas fa-plus"></i></a></div>
                                                <div class="qualifier-item qualifier-mediumpriority"><a href="{{route('admin.project.board.card_setpriority', [$tag->id, 2])}}"><i class="fas fa-plus"></i></a></div>
                                                <div class="qualifier-item qualifier-hightpriority"><a href="{{route('admin.project.board.card_setpriority', [$tag->id, 3])}}"><i class="fas fa-plus"></i></a></div>
                                            </div>
                                            <div class="set_part">
                                                <h1>Espace :</h1>
                                                <div class="qualifier-item qualifier-back"><a href="{{route('admin.project.board.card_setspace', [$tag->id, "back"])}}"><i class="fas fa-plus"></i></a></div>
                                                <div class="qualifier-item qualifier-front"><a href="{{route('admin.project.board.card_setspace', [$tag->id, "front"])}}"><i class="fas fa-plus"></i></a></div>
                                            </div>
                                            <div class="set_cat">
                                                <a href="{{route('admin.project.board.card_setcategory', [$tag->id, 1])}}">Bug</a>
                                                <a href="{{route('admin.project.board.card_setcategory', [$tag->id, 2])}}">A faire</a>
                                                <a href="{{route('admin.project.board.card_setcategory', [$tag->id, 3])}}">En Cours</a>
                                                <a href="{{route('admin.project.board.card_setcategory', [$tag->id, 4])}}">Terminé</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
            <section class="board-column">
                <div class="board-column_head">
                    <h1>Terminé</h1>
                </div>
                <div class="board-column_content">
                    @foreach($endeds as $tag)
                        <div class="tag">
                            <div class="tag_content">
                                <p>{{$tag->name}}</p>
                            </div>
                            <div class="tag_footer">
                                <div class="qualifier">
                                    @switch($tag->priority)
                                        @case(1)
                                        <div class="qualifier-item qualifier-lowpriority"></div>
                                        @break
                                        @case(2)
                                        <div class="qualifier-item qualifier-mediumpriority"></div>
                                        @break
                                        @case(3)
                                        <div class="qualifier-item qualifier-hightpriority"></div>
                                        @break
                                    @endswitch
                                    @if($tag->front)
                                        <div class="qualifier-item qualifier-front"></div>
                                    @endif
                                    @if($tag->back)
                                        <div class="qualifier-item qualifier-back"></div>
                                    @endif

                                </div>
                                <div class="setter">
                                    <div class="setter_btn"><i class="fas fa-plus"></i>
                                        <div class="tag_setting">
                                            <div class="set_prioritie">
                                                <h1>Priorité : </h1>
                                                <div class="qualifier-item qualifier-lowpriority"><a href="{{route('admin.project.board.card_setpriority', [$tag->id, 1])}}"><i class="fas fa-plus"></i></a></div>
                                                <div class="qualifier-item qualifier-mediumpriority"><a href="{{route('admin.project.board.card_setpriority', [$tag->id, 2])}}"><i class="fas fa-plus"></i></a></div>
                                                <div class="qualifier-item qualifier-hightpriority"><a href="{{route('admin.project.board.card_setpriority', [$tag->id, 3])}}"><i class="fas fa-plus"></i></a></div>
                                            </div>
                                            <div class="set_part">
                                                <h1>Espace :</h1>
                                                <div class="qualifier-item qualifier-back"><a href="{{route('admin.project.board.card_setspace', [$tag->id, "back"])}}"><i class="fas fa-plus"></i></a></div>
                                                <div class="qualifier-item qualifier-front"><a href="{{route('admin.project.board.card_setspace', [$tag->id, "front"])}}"><i class="fas fa-plus"></i></a></div>
                                            </div>
                                            <div class="set_cat">
                                                <a href="{{route('admin.project.board.card_setcategory', [$tag->id, 1])}}">Bug</a>
                                                <a href="{{route('admin.project.board.card_setcategory', [$tag->id, 2])}}">A faire</a>
                                                <a href="{{route('admin.project.board.card_setcategory', [$tag->id, 3])}}">En Cours</a>
                                                <a href="{{route('admin.project.board.card_setcategory', [$tag->id, 4])}}">Terminé</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
        <div class="add">
            <a data-toggle="modal" data-target="#addmodal">
                Ajouter une card
            </a>
        </div>


    </div>
    <div id="addmodal" tabindex="-1" class="modal fade" role="dialog" aria-labelledby="addmodalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ajouter une carte</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.project.add_cardboard', $project->id)}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nom</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Le Ranger</label>
                            <select class="form-control" name="category" id="exampleFormControlSelect1">
                                <option value="1">Bugs</option>
                                <option value="2">A Faire</option>
                                <option value="3">En cours</option>
                                <option value="4">Terminé</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Espace</label>
                            <select multiple class="form-control" name="space[]" id="exampleFormControlSelect2">
                                <option value="front">Front</option>
                                <option value="back">Back</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


@endsection
