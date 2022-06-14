<?php

namespace App\Http\Controllers;

use App\Models\Loss;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LossController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $losses =  Loss::all();
        return  response()->json($losses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $this->validate($request, [
        'object_ressource_id' => 'required|integer',
        'date' => 'required|date',
        'description' => 'required|string',
    ]);

        $loss = Loss::create($request->all());
        return response()->json($loss);
    }

    /**
     * Display the specified resource.
     *
     * @param Loss $loss
     * @return JsonResponse
     */
    public function show(Loss $loss): JsonResponse
    {
        return response()->json($loss);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Loss $loss
     * @return JsonResponse
     */
    public function update(Request $request, Loss $loss): JsonResponse
    {
         // La validation de données
    $this->validate($request, [
        'object_ressource_id' => 'required|integer',
        'date' => 'required|date',
        'description' => 'required|string',
    ]);

    $loss->update($request->all());
    return response()->json($loss);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Loss $loss
     * @return JsonResponse
     */
    public function destroy(Loss $loss): JsonResponse
    {
        $loss->delete();
        return response()->json(['message' => 'success']);
    }
}
