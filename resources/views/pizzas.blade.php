<!DOCTYPE html>
<html>
   <body>
      <h1>Pizzas</h1>
      <p>WML with this Laravel OwO.</p>
      <p>Type: {{ $type }}</p>
      <p>Base: {{ $base }}</p>
      <p>Price: ${{ $price }}</p>

      @if($price > 15)
        <p>This pizza is expensive!</p>
      @elseif($price < 5)
        <p>This pizza is affordable.</p>
      @else
        <p>This pizza is so so.</p>
      @endif

      @unless($base == 'Beef')
        <p>You don't have a Beef Pizza!</p>
      @endunless

      @php
        $name = 'Rafi';
        echo $name;
      @endphp
   </body>
</html>