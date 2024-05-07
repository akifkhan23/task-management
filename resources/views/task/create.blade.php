
<form action="{{route('task.store')}}"  method="post">
    @csrf
<div class="row">
    <div class="col-md-6">
        <label for="">Title </label>
        <input type="text" class="form-control"  name="title" id="" required>
    </div>
    <div class="col-md-6">
        <label for="">Task Date </label>
        <input type="date" class="form-control" name="date" id="" required>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <label for="">Description </label>
        <textarea name="description" class="form-control" id="" cols="30" rows="10" required>

        </textarea>
       
    </div>
</div>
<br>
<input type="hidden"  name="status" value="{{$status}}">
<div class="row">
    <div class="col-md-12 text-center">
        <input type="submit" class="btn btn-success" name="" id="">
    </div>
</div>
</form>