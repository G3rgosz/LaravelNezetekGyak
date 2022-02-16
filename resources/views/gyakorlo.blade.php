
<?php $num = 30 ?>
@if( $num <= 20 )
    kicsi
@elseif( $num == 30 )
    <h1>egyenlő</h1>
@else
    nagy
@endif
<?php $i=0 ?>
@for ($i = 0; $i <= 100; $i++) 
    {{ $i }}
@endfor


