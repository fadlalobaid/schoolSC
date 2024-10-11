@props(['type', 'name', 'class', 'placeholder' => null, 'value' =>null])

<input type="{{ $type }}" name="{{ $name }}" class="{{ $class }}
   @error($name)
    is-invalid
   @enderror
" placeholder="{{ $placeholder }}"
value=" {{ $value }} "/>
@error($name)
<div class="invalid-feedback">
    {{ $message }}
</div>

@enderror
