
<form action="{{route('task.update',$task->id)}}"  method="POST">
    @csrf
<div class="row">
    <div class="col-md-6">
        <label for="">Title </label>
        <input type="text" value="{{$task->title}}" class="form-control"  name="title" id="" required>
    </div>
    <div class="col-md-6">
        <label for="">Task Date </label>
        <input type="date" value="{{$task->task_time}}" class="form-control" name="date" id="" required>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <label for="">Description </label>
        <textarea name="description"  class="form-control" id="" cols="30" rows="10" required>
            {{$task->description}}
        </textarea>
       
    </div>
</div>
<br>
<input type="hidden"  name="status" value="{{$task->status}}">
<div class="row">
    <div class="col-md-12 text-center">
        <input type="submit" class="btn btn-success" name="" id="">
    </div>
</div>
</form>