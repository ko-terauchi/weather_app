<!DOCTYPE html>

<div include="form-input-select()">
  <select required>
    <!--
      This is how we can do "placeholder" options.
      note: "required" attribute is on the select
    -->
    <option value=""
            hidden
    >Example Placeholder</option>

    <!-- normal options -->
        @foreach(config('pref') as $pref_id => $name)
            <option value="{{ $pref_id }}">{{ $name }}</option>
        @endforeach
    </select>
</div>

<select>
  @foreach(config('pref') as $pref_id => $name)
    <option value="{{ $pref_id }}">{{ $name }}</option>
  @endforeach
</select>
