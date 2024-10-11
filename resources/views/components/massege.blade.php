@props(['massege'])

@if (session()->has($massege))
<div class=" alert alert-{{ $massege }} m-2">
<label class="text-{{ $massege }}  ">  {{ session($massege) }}</label>
</div>

@endif
