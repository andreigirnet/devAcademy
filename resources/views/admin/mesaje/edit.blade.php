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
        <form  action="{{route('update', $contact->id)}}" method="POST">
            @csrf
            @method('PATCH')
                <div>
            <label for="first_name">Prenumele</label>
            <input class="form-input" type="text" name="first_name" value="{{$contact->first_name}}" required>
                </div>
                <div>
            <label for="last_name">Numele</label>
            <input type="text" class="form-input" name="last_name" value="{{$contact->last_name}}" required>
                </div>
                <div>
            <label for="telephone">Telefon</label>
            <input type="number" class="form-input" name="telephone" value="{{$contact->telephone}}" required>
                </div>
                <div>
            <label for="email">Email</label>
            <input type="text" class="form-input" name="email" value="{{$contact->email}}" {{$contact->email}} required>
                </div>
                <div>
            <label for="program">Program</label>
            <select name="program" class="form-input" id="" required>
                <option value="{{$contact->program}}" selected="selected">{{$contact->program}}</option>
                <option value="Program Junior-Web-Designer 14-18 ani">Program Junior-Web-Designer 14-18 ani</option>
                <option value="Program Junior-Web-Designer 14-18 ani">Program Senior-Web-Designer 18+ ani</option>
            </select>
                </div>
            <div>
                <label for="program">Payment Status</label>
                <select class="form-input" name="paid" id="" required>
                    <option value="0">Unpaid</option>
                    <option value="1">Paid</option>
                </select>
            </div>
                <div>
            <textarea style="width: 500px; box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px; height: 200px; margin-top: 20px; border-radius: 10px" name="message" id="" cols="30" rows="10"></textarea>
                </div>
            <div style="width: 500px; display: flex; justify-content: center">
                <button class="button-edit" type="submit">Submit</button>
            </div>

        </form>
    </div>
</div>
