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
        <form  action="{{route('course.update', $course->id)}}" method="POST">
            @csrf
            @method('PATCH')
            <div>
                <label for="first_name">Numele cursului</label>
                <input class="form-input" type="text" name="name" value="{{$course->name}}" required>
            </div>
            <div>
                <label for="last_name">Pretul Cursului</label>
                <input type="number" class="form-input" name="price" value="{{$course->price}}" required>
            </div>
            <div>
                <label for="last_name">Descriere Cursului</label>
                <textarea name="description" id="" cols="30" rows="10">{{$course->description}}</textarea>
            </div>
            <div style="width: 500px; display: flex; justify-content: center; margin-top:20px">
                <button class="button-edit" type="submit">Submit</button>
            </div>

        </form>
    </div>
</div>
