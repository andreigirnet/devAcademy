<style>
    .form-input{
        width: 500px;
        height: 40px;
        border-radius: 15px;
        box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
        padding-left: 10px;
        border-color: #0dcaf0;
    }
    button-edit{
        width: 100px;
        height: 30px;
        border-radius: 10px;
        box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
        margin-top: 10px;
        cursor: pointer;
    }
</style>
<div id="form-design" style="display: flex; justify-content: center; margin-top: 100px">
    <div style="width: 30%">
        <form  action="{{route('group.update', $group->id)}}" method="POST">
            @csrf
            @method('PATCH')
            <div>
                <label for="first_name">Numele grupului</label>
                <input class="form-input" type="text" name="name" value="{{$group->name}}" required>
            </div>
            <div>
                <label for="program">Payment Status</label>
                <select class="form-input" name="course_id" id="" required>
                    @foreach($courses as $course)
                        <option value="{{$course->id}}">{{$course->name}}</option>
                    @endforeach
                </select>
            </div>
            <div style="width: 500px; display: flex; justify-content: center; margin-top:20px">
                <button class="button-edit" type="submit">Submit</button>
            </div>

        </form>
    </div>
</div>
