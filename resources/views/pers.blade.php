@extends('layouts.welcome')

@section('content')
  <h3>Длина и площадь окружности с данным радиусом</h3><br>
  <form>
    @csrf
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Радиус</span>
      </div>
      <input type="text" class="form-control" aria-describedby="basic-addon1" name="radius" value="{{ $radius }}">
      <div class="input-group-append">
        <input type="submit" class="btn btn-success" value="Расчёт">
      </div>
    </div>
  </form>
  @if ($radius < 0)
    <h3 style="color: red;">Недопустимое значение!</h3>
  @elseif ($radius != '')
    <h5>Ваш ответ:</h5>
    <p>
      <i style="font-size: 1.3em;">Длина</i> --> {{ 2*$radius*M_PI }}<br>
      <i style="font-size: 1.3em;">Площадь</i> --> {{ $radius*$radius*M_PI }}<br>
    </p>
  @endif
@endsection
