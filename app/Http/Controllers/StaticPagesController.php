<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller {

  public function default() {
    return view('default');
  }

  public function ploshad(Request $request) {
    $a = '';
    $b = '';
    $c = '';
    if ($request->has('a'))
      $a = $request->a;
    if ($request->has('b'))
      $b = $request->b;
    if ($request->has('c'))
      $c = $request->c;
    return view('ploshad', ['a' => $a, 'b' => $b, 'c' => $c]);
  }

  public function gip(Request $request) {
    $k1 = '';
    $k2 = '';
    if ($request->has('k1'))
      $k1 = $request->k1;
    if ($request->has('k2'))
      $k2 = $request->k2;
    return view('gip', ['k1' => $k1, 'k2' => $k2]);
  }

  public function pers(Request $request) {
    $radius = '';
    if ($request->has('radius'))
      $radius = $request->radius;
    return view('pers', ['radius' => $radius]);
  }
}
