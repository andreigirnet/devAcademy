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
        <form  action="{{route('teacher.store')}}" method="POST">
            @csrf
            <div>
                <label for="last_name">Numele Profesorului</label>
                <input type="text" class="form-input" name="name" value="" required>
            </div>
            <div>
                <label for="last_name">Email</label>
                <input type="text" class="form-input" name="email" value="" required>
            </div>
            <div>
                <label for="last_name">Specializare</label>
                <input type="text" class="form-input" name="specialization" value="" required>
            </div>
            <div>
                <label for="last_name">Phone</label>
                <input type="text" class="form-input" name="phone" value="" required>
            </div>
            <div>
                <label for="program">Group for student</label>
                <select class="form-input" name="group_id" id="" required>
                    @foreach($groups as $group)
                        <option value="{{$group->id}}">{{$group->name}}</option>
                    @endforeach
                </select>
            </div>

            <div style="width: 500px; display: flex; justify-content: center; margin-top: 20px">
                <button class="button-edit" type="submit">Submit</button>
            </div>

        </form>
    </div>
</div>
