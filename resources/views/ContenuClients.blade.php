@section('clients')
<h1>Clients</h1>
<ul>
 @foreach($clients as $client)
    <li> {{ $client }} </li>
 @endforeach
</ul>
@endsection