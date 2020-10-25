<!DOCTYPE html>
<html>
    <body>
        <h1>Pizzas</h1>
        <p>WML with this Laravel OwO.</p>

        <!-- @for($i = 0; $i < 5; $i++)
            <p>The value of i is {{ $i }}</p>
        @endfor -->

        <!-- @for($i = 0; $i < count($pizzas); $i++)
          <p>{{ $pizzas[$i]['type'] }}</p>
        @endfor -->

        @foreach($pizzas as $pizza)
        <div>
            {{ $loop->index }} {{ $pizza['type'] }} - {{ $pizza['base'] }}
            @if($loop->first)
                <span>- First in the loop!</span>
            @endif
            @if($loop->last)
                <span>- Last in the loop!</span>
            @endif
        </div>
        @endforeach
    </body>
</html>
