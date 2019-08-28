@extends('layouts.app')

@section('content')
<div class="container">
  <panel cor="alert alert-primary" >

  </panel>
  <botao></botao>

  <hr>
  <tabela :titulos="['id','nome','tel','cell']"
          :items="[['1','renato','31313333','88889999'],
          ['2','Isabela','34353366','99886622']]"
          editar="#editar">
  </tabela>
</div>
@endsection
