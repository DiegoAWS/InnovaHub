<div class="material-textfield @if(isset($class)) {{ $class }} @endif">

  <textarea  @if(isset($id)) id={{ $id }} @endif placeholder=" " type="text" class="w-full @if(isset($inputClass)){{ $inputClass }}@endif"></textarea>
  <label>
    @if(isset($label)) {{ $label }} @else {{ "Label" }} @endif
  </label>

</div>
