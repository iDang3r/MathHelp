<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>MathHelp</title>
    <style>
      body {
        background-color: #F8F8FF;
        margin: 4%;
      }
      .list-group {
        margin-top: 0;
      }
      td {
        vertical-align: top;
      }
      #content {
        margin: 20px;
        margin-left: 30px;
      }
      .active1 {
        background-color: #CFCFCF;
      }
    </style>
  </head>
  <body>
    <div class="card" style="height: 86vh;">
      <div class="card-header">
        <h2 style="margin-left: 2%; margin-top: 0.7%;">MathHelp</h2>
      </div>
      <div class="card-body">
        <div class="alert alert-success" role="alert">
          Добро пожаловать в помощик нашего математического кружка!
        </div>
        <table>
          <tr>
            <td>
              <div class="list-group">
                <a class="list-group-item list-group-item-info">Все формулки</a>
                <a href="{{ url('/ploshad') }}" class="list-group-item list-group-item-action @if (\Request::is('ploshad')) active1 @endif">Площадь преугольника через стороны</a>
                <a href="{{ url('/gip') }}" class="list-group-item list-group-item-action @if (\Request::is('gip')) active1 @endif">Гипотенуза треугольника</a>
                <a href="{{ url('/pers') }}" class="list-group-item list-group-item-action @if (\Request::is('pers')) active1 @endif">Периметр и площадь круга</a>
              </div>
            </td>
            <td>
              <div id = "content">
                @yield('content')
              </div>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </body>
</html>
