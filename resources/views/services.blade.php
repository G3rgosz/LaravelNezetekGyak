<h1>Szöveg a services nézetből</h1>
<h2>{{$name}}</h2>
<h2>{{$email}}</h2>


{{--Laravel komment--}}
<?php
    echo 1+1;
?>
<br>
{{1+1}}
<br>
{{strtoupper("kisbetűs szöveg")}}
<?php
    if(set($name)){
        echo $name;
    }
    if(empty($name)){
        echo "üres";
    }
    if(count($name)>0){
        echo "nem üres";
    }
?>
@isset($name)
    $name
@empty($name)
    üres
@if(count($name)>0)
    <h1>nem üres</h1>
@endif
<?php
    $i = 0;
    if( $i == 0 ){
        echo "nulla";
    }elseif( $i == 1){
        echo "egy";
    }else{
        echo "más";
    }
?>
@if( $i == 0 )
    nulla
@elseif( $i == 1)
    egy
@else
    más
@endif

<?php
    for($i = 0; $i < 5; $i++){
        echo $i;
    }
?>
@for($i = 0; $i < 5; $i++)
    $i