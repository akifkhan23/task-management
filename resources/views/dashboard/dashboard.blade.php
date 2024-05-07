 @extends('theme.default')
  @section('content')
  <div class="content-wrapper p-0">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <div class="row">
            <div class="col-md-12">
                <ul class="index-slider dasboard-ul">
                    <li class="height-c">
                        <div class="li-header">
                            <ul class="card-h-ul">
                                <li>
                                    <h3>Task</h3>
                                </li>
                                <li>
                                    <h3></h3>
                                </li>
                            </ul>
                        </div>
                        <div class="scr-h" id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">

                            @foreach ($tasks as $item)
                            <div class="li-body" draggable="true" ondragstart="drag(event)" id="{{$item->id}}">
                                <div class="card-c">
                                    <div class="c-b">
                                        <div class="abs1">
                                            <span>0</span>
                                        </div>
                                        <h3>{{$item->title}}</h3>
                                        
                                        <p>{{$item->description}}</p>
                                    </div>
                                    <div class="c-f">
                                        <ul class="card-f-ul">
                                            <li>
                                                <p>{{date('d-m-Y',strtotime($item->created_at))}}</p>
                                            </li>
                                            <li>
                                                <a href="#" class="btn-a" onclick="openModal('{{ route('task.edit', $item->id) }}', 'Edit Task', '1')">Edit</a>
                                                <a href="#" class="btn-a" onclick="deleteTask('{{ route('task.delete') }}', '{{ $item->id }}', this)">Delete</a>


                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <!-- addmore button -->
                        <div class="text-center mt">
                            <a href="#" class="add-more" onclick="openModal('{{ route('task.create') }}', 'Add Task','1')" data-toggle="tooltip" data-placement="top" title="Add More">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                        </div>
                        
                    </li>
                    <li class="height-c">
                        <div class="li-header2">
                            <ul class="card-h-ul2">
                                <li>
                                    <h3> In Progress</h3>
                                </li>
                            </ul>
                        </div>
                        <div class="scr-h" id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
                            @foreach ($in_progress as $item)
                            <div class="li-body" draggable="true" ondragstart="drag(event)" id="{{$item->id}}">
                                <div class="card-c">
                                    <div class="c-b">
                                        <div class="abs1">
                                            <span>0</span>
                                        </div>
                                        <h3>{{$item->title}}</h3>
                                        
                                        <p>{{$item->description}}</p>
                                    </div>
                                    <div class="c-f">
                                        <ul class="card-f-ul">
                                            <li>
                                                <p>{{date('d-m-Y',strtotime($item->created_at))}}</p>
                                            </li>
                                            <li>
                                                <a href="#" class="btn-a" onclick="openModal('{{ route('task.edit', $item->id) }}', 'Edit Task', '2')">Edit</a>
                                                <a href="#" class="btn-a" onclick="deleteTask('{{ route('task.delete') }}', '{{ $item->id }}', this)">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <!-- addmore button -->
                        <div class="text-center mt">
                            <a href="#" class="add-more" onclick="openModal('{{ route('task.create') }}', 'Add Task','2')" data-toggle="tooltip" data-placement="top" title="Add More"><i class="fa-solid fa-plus"></i></a>
                        </div>
                    </li>
                    <li class="height-c">
                        <div class="li-header3">
                            <ul class="card-h-ul3">
                                <li>
                                    <h3>Local Testing</h3>
                                </li>
                            </ul>
                        </div>
                        <div class="scr-h" id="div3" ondrop="drop(event)" ondragover="allowDrop(event)">
                            @foreach ($testing as $item)
                            <div class="li-body" draggable="true" ondragstart="drag(event)" id="{{$item->id}}">
                                <div class="card-c">
                                    <div class="c-b">
                                        <div class="abs1">
                                            <span>0</span>
                                        </div>
                                        <h3>{{$item->title}}</h3>
                                        
                                        <p>{{$item->description}}</p>
                                    </div>
                                    <div class="c-f">
                                        <ul class="card-f-ul">
                                            <li>
                                                <p>{{date('d-m-Y',strtotime($item->created_at))}}</p>
                                            </li>
                                            <li>
                                                <a href="#" class="btn-a" onclick="openModal('{{ route('task.edit', $item->id) }}', 'Edit Task', '3')">Edit</a>
                                                <a href="#" class="btn-a" onclick="deleteTask('{{ route('task.delete') }}', '{{ $item->id }}', this)">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- addmore button -->
                        <div class="text-center mt">
                            <a href="#" class="add-more" onclick="openModal('{{ route('task.create') }}', 'Add Task','3')" data-toggle="tooltip" data-placement="top" title="Add More"><i class="fa-solid fa-plus"></i></a>
                        </div>
                    </li>
                    <li class="height-c">
                        <div class="li-header4">
                            <ul class="card-h-ul4">
                                <li>
                                    <h3>Completed</h3>
                                </li>
                            </ul>
                        </div>
                        <div class="scr-h" id="div4" ondrop="drop(event)" ondragover="allowDrop(event)">
                            @foreach ($completed as $item)
                            <div class="li-body" draggable="true" ondragstart="drag(event)" id="{{$item->id}}">
                                <div class="card-c">
                                    <div class="c-b">
                                        <div class="abs1">
                                            <span>0</span>
                                        </div>
                                        <h3>{{$item->title}}</h3>
                                        
                                        <p>{{$item->description}}</p>
                                    </div>
                                    <div class="c-f">
                                        <ul class="card-f-ul">
                                            <li>
                                                <p>{{date('d-m-Y',strtotime($item->created_at))}}</p>
                                            </li>
                                            <li>
                                                <a href="#" class="btn-a" onclick="openModal('{{ route('task.edit', $item->id) }}', 'Edit Task', '4')">Edit</a>
                                                <a href="#" class="btn-a" onclick="deleteTask('{{ route('task.delete') }}', '{{ $item->id }}', this)">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <!-- addmore button -->
                        <div class="text-center mt">
                            <a href="#" class="add-more" onclick="openModal('{{ route('task.create') }}', 'Add Task','4')" data-toggle="tooltip" data-placement="top" title="Add More"><i class="fa-solid fa-plus"></i></a>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>
    
    <!-- END: Content-->


@endsection