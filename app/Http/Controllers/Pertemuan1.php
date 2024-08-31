<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route as RouteFacade;
use App\Models\Number;

class Pertemuan1 extends Controller
{
    
    public function genapGanjil(Request $request){
        $numberDetails = [];
        if ($request->has('n')) {
            $validatedData = $request->validate([
                'n' => 'required|integer|min:1',
            ]);

            $n = $validatedData['n'];
            $numberDetails = Number::getGenapGanjil($n); //
        }
        return view('components.genap-ganjil',compact('numberDetails'));
    }

    public function bilanganPrima(Request $request){
        $numberDetails = [];
        if ($request->has('n')) {
            $validatedData = $request->validate([
                'n' => 'required|integer|min:1',
            ]);

            $n = $validatedData['n'];
            $numberDetails = Number::getPrima($n);
        }
        return view('components.prima',compact('numberDetails'));
    }

    public function fibonacci(Request $request){
        $numberDetails = [];
        if ($request->has('n')) {
            $validatedData = $request->validate([
                'n' => 'required|integer|min:1',
            ]);

            $n = $validatedData['n'];
            $numberDetails = Number::getFibonaci($n);
        }

        return view('components.fibonacci',compact('numberDetails'));
    }
    
    public function param1($param1 = ''){
        $data['param1'] = $param1;
        return view('components.param-param1',compact('data'));
    }

    public function param2($param1 ='', $param2 =''){
        $data['param1'] = $param1;
        $data['param2'] = $param2;
        return view('components.param-param2',compact('data'));
    }

    public function namedRoute()
    {
        $routes = RouteFacade::getRoutes();
        $routeInfo = [];

        foreach ($routes as $route) {
            if ($route->getName()) {
                $name = $route->getName();
                $uri = $route->uri();
                $routeInfo[] = [
                    'name' => $name,
                    'uri' => $uri,
                ];
            }
        }

        return view('components.named-route', ['routeInfo' => $routeInfo]);
    }

    public function groupedRoute()
    {
        $routes = RouteFacade::getRoutes();
        $groupedRoutes = [];

        foreach ($routes as $route) {
            $name = $route->getName();
            $uri = $route->uri();
            $action = $route->getAction();

            $prefix = $this->getPrefixFromAction($action);
            if ($prefix) {
                if (!isset($groupedRoutes[$prefix])) {
                    $groupedRoutes[$prefix] = [];
                }
                if ($name) {
                    $groupedRoutes[$prefix][] = [
                        'name' => $name,
                        'uri' => $uri,
                    ];
                }
            }
        }

        return view('components.grouped-route', ['groupedRoutes' => $groupedRoutes]);
    }

    private function getPrefixFromAction($action)
    {
        $prefix = '';
        if (isset($action['prefix'])) {
            $prefix = $action['prefix'];
        }
        return $prefix;
    }
}
