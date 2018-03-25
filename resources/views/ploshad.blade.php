@extends('layouts.welcome')

@section('content')
  <h3>Площадь треугольника через 3 стороны</h3><br>
  <form>
    @csrf
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Стороны</span>
      </div>
      <input type="text" class="form-control" aria-describedby="basic-addon1" name="a" value="{{ $a }}">
      <input type="text" class="form-control" aria-describedby="basic-addon1" name="b" value="{{ $b }}">
      <input type="text" class="form-control" aria-describedby="basic-addon1" name="c" value="{{ $c }}">
      <div class="input-group-append">
        <input type="submit" class="btn btn-success" value="Расчёт">
      </div>
    </div>
  </form>
  @if ($a < 0 || $b < 0 || $c < 0)
    <h3 style="color: red;">Недопустимое значение!</h3>
  @elseif ($a != 0 && $b != 0 && $c != 0)
  <?php $p = ($a + $b + $c) / 2; ?>
  <h5>Ваш ответ:</h5>
  <p>
    <i style="font-size: 1.3em;">Площадь</i> --> {{ sqrt($p*($p - $a)*($p - $b)*($p - $c)) }}<br>
  </p>
  @endif
@endsection
