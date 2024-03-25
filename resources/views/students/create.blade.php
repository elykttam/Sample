<h1>Create Student</h1>
<ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li> 
  @endforeach
</ul>
<form method="POST" action="/students">
  {{ csrf_field() }}
  <div>
    <input type="text" name="first_name">
  </div>
  <div>
    <input type="text" name="last_name">
  </div>
  <div>
    <input type="date" name="birthdate">
  </div>
  <div>
    <textarea name="address_1" id="" cols="30" rows="10"></textarea>
  </div>
  <button type="submit">Save</button>
</form>