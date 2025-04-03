<h1>Users Page</h1>
{{-- <h3>Hello {{ $user }}</h3>
<h3>City : {{ !empty($city) ? $city : 'No City' }}</h3> --}}

@foreach ($user as $id => $u )
    <h3>{{ $u['name'] }} | {{ $u['phone'] }} | {{ $u['city'] }}</h3>
@endforeach