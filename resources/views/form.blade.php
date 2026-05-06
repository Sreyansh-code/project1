<form action="/submit-form" method="post">
    @csrf
    User name: <input type="text" name="uname">
    <br>
    <br>
    Email: <input type="text" name="email">
    <br>
    <br>
    Password: <input type="text" name="password">
    <br>
    <br>
    <button type="submit">Submit</button>
</form>
<!-- @error('uname')
<p>{{$message}}</p>
@enderror -->

@if($errors->any())
<ul>
    @foreach($errors->all() as $er){
        <li>{{$er}}</li>
    }
    @endforeach
</ul>
@endif