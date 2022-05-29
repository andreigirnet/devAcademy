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
        <form  action="{{route('student.update', $student->id)}}" method="POST">
            @csrf
            @method('PATCH')
            <div>
                <label for="first_name">Prenumele Studentului</label>
                <input class="form-input" type="text" name="first_name" value="{{$student->first_name}}" required>
            </div>
            <div>
                <label for="first_name">Numele Studentului</label>
                <input class="form-input" type="text" name="last_name" value="{{$student->last_name}}" required>
            </div>
            <div>
                <label for="first_name">Email</label>
                <input class="form-input" type="text" name="email" value="{{$student->email}}" required>
            </div>
            <div>
                <label for="first_name">Phone</label>
                <input class="form-input" type="text" name="phone" value="{{$student->phone}}" required>
            </div>
            <div>
                <label for="first_name">Age</label>
                <input class="form-input" type="number" name="age" value="{{$student->age}}" required>
            </div>
            <div>
                <label for="last_name">Payment Status</label>
                <select class="form-input" name="payment_status" id="">
                    <option value="0">UnPaid</option>
                    <option value="1">Paid</option>
                </select>
            </div>
            <div>
                <label for="last_name">Course Completion Status</label>
                <select class="form-input" name="completed" id="">
                    <option value="0">Pending</option>
                    <option value="1">Completed</option>
                </select>
            </div>
            <div>
                <label for="program">Group in</label>
                <select class="form-input" name="group_id" id="" required>
                    @foreach($groups as $group)
                        <option value="{{$group->id}}">{{$group->name}}</option>
                    @endforeach
                </select>
            </div>
            <div style="width: 500px; display: flex; justify-content: center; margin-top:20px">
                <button class="button-edit" type="submit">Submit</button>
            </div>

        </form>
    </div>
</div>
