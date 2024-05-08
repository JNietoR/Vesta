<form action="/checkout" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <button type="submit"> Dona</button>
</form>
