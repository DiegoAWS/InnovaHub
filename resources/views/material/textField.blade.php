

<div 

@if(isset($id))
id={{ $id }} 
@endif

class="material-textfield

@if(isset($class))
{{ $class }}
@endif

">
  <input placeholder=" " type="text">
  <label>

  @if(isset($label))
    {{ $label }}
  @else
      {{ "Label" }}
  @endif

  </label>
</div>