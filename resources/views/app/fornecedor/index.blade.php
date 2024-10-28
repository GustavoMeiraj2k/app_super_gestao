<h3>Fornecedor</h3>

@php
    // Você pode colocar qualquer lógica aqui se necessário
@endphp

Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}

@if (!($fornecedores[0]['status'] == 'S'))
    Fornecedor Inativo
@endif 
<br>

@unless($fornecedores[0]['status'] == 'S')
    Fornecedor Inativo
@endunless
<br>
@isset ($fornecedores) 
    Fornecedor: {{ $fornecedores[0]['nome']}}
    <br>
    Status: {{$fornecedores [0]['status'] }}
    <br>
@endisset
