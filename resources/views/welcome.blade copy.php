<h1>Our First Page<h1>
    <a href="{{ route('mypost') }}">Post</a>
    <a href="/about">About</a>

    {{45*10}}

    <br><br>
    {{ "Hello World" }}
    {{ "<h1>Welcome Devendra</h1>" }}

    {!! "<h1>Welcome Devendra</h1>" !!}
    {!! "<script>console.log('devendra')</script>" !!}
    {{-- {{ "<script>console.log('devendra')</script>" }} --}}

    @php
        $user="Devendra Kumar"
    @endphp

    {{ $user }}
    @{{$user}}

    @php
        $names = ['abc','pqr','xyz','abc','pqr','xyz'];
    @endphp

    <ul>
    @foreach ($names as $name)
        @if($loop->even)
            <li style="color:red"> {{ $loop->iteration }} - {{$name}}</li>
        @elseif($loop->odd)
            <li style="color:green"> {{ $loop->iteration }} - {{$name}}</li>        
        @endif
        
    @endforeach
    </ul>

 