<?php

namespace Module\Panel\Http\Controller\Api\v1\Flight;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Module\Flight\Entity\Flight;
use Module\Panel\Repositories\Flight\FlightRepository;

class CrudController extends Controller
{
    public function index()
    {
        $flights = Flight::paginate();

        return $flights;
    }

    public function show($flight)
    {
        $flight = Flight::where('slug',$flight)->first();

        return $flight;
    }

    public function store(Request $request,FlightRepository $repository)
    {
        $repository->create($request);
    }

    public function update(Request $request,FlightRepository $repository)
    {
        $repository->update($request);
    }
}