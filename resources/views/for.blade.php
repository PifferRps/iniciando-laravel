<h1>For IF</h1>

@if($value > 100)
<p>Valor maior que 100</p>
@else
<p>Valor menor que 100</p>
@endif

@for($i = 1; $i <= $value; $i++)
{{$i}}
    
@endfor
<br>
@php
    $i=1;
@endphp
@while($i<=$value)
{{$i}}
@php
   $i++ 
@endphp

    
@endwhile