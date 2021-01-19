<div @if(isset($id)) id={{ $id }} @endif class="material-textfield @if(isset($class)) {{ $class }} @endif">

  <input placeholder=" " type="text" class="w-full @if(isset($inputClass)){{ $inputClass }}@endif">
 
  <label>
    @if(isset($label)) {{ $label }} @else {{ "Label" }} @endif
  </label>

</div>