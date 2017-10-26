        <form method="POST" action="/updating/{{$id}}">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$id}}">
        <input type="text" name="first_name" value="{{$first_name}}">
        <input type="text" name="last_name" value="{{$last_name}}">
        <input type="text" name="id_number" value="{{$id_number}}">
        <input type="text" name="course" value="{{$course}}">
        <input type="text" name="address" value="{{$address}}">
        <button type="submit">submit</button>
        </form>
  