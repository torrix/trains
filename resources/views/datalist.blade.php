<datalist id="stations">
    @foreach ($results as $code => $label)
        <option value="{{ $code }}">{{ $label }}</option>
    @endforeach
</datalist>
