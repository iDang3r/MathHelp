@extends('layouts.welcome')

@section('content')
  <h3>Гипотенуза через 2 катета теругольника</h3><br>
  <form>
    @csrf
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Катеты</span>
      </div>
      <input type="text" class="form-control" aria-describedby="basic-addon1" name="k1" value="{{ $k1 }}">
      <input type="text" class="form-control" aria-describedby="basic-addon1" name="k2" value="{{ $k2 }}">
      <div class="input-group-append">
        <input type="submit" class="btn btn-success" value="Расчёт">
      </div>
    </div>
  </form>
  @if ($k1 < 0 || $k2 < 0)
    <h3 style="color: red;">Недопустимое значение!</h3>
  @elseif ($k1 != '' && $k2 != '')
    <h5>Ваш ответ:</h5>
    <p>
      <i style="font-size: 1.3em;">Гипотенуза</i> --> {{ sqrt($k1*$k1 + $k2*$k2) }}<br>
    </p>
  @endif
@endsection
