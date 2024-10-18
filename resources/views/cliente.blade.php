<h1>Página do Cliente</h1>
@if (4>1)
<p>Resposta verdadeira</p>
@endif

<p>{{$numero}}</p>
@if ($numero > 0)

    <p>Numero Positivo</p>

@elseif($numero == 0)

    <p>Numero nulo</p>

@else
    <p>Numero Negativo</p>
@endif

<p>Exemplo For</p>
@for ($i = 0; $i < count($lanches);$i++)
<p>{{$lanches[$i]}} - {{$i}}</p>
@endfor

<p>Exemplo do foreach</p>
@foreach($lanches as $lanche)
<p>{{$loop->index}}</p>
<p>{{$lanche}}</p>
@endforeach

<p>Exemplo do PHP</p>
@php 
$nome = "Batata Frita";
echo $nome;
@endphp

<a href="/">Voltar para home</a>