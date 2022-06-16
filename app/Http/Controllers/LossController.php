<?php

namespace App\Http\Controllers;

use App\Http\Requests\LossRequest;
use App\Models\Loss;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;


class LossController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $losses = Loss::all();
        return response()->json([
            'success' => true,
            'data' => $losses
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(LossRequest $request): JsonResponse
    {
        $loss = Loss::create($request->all());
        return response()->json([
            'success' => true,
            'data' => $loss
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Loss $loss
     * @return JsonResponse
     */
    public function show(Loss $loss): JsonResponse
    {
        if (!$loss->exists) {
            return response()->json([
                'success' => false,
                'message' => 'loss object not found'
            ]);
        }

        return response()->json([
            'success' => true,
            'data' => $loss
        ]);
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
        $result = $loss->delete();
        if (!$result) {
            return response()->json([
                'success' => false,
            ], ResponseAlias::HTTP_NOT_FOUND);
        }
        return response()->json([
            'success' => true,
        ], ResponseAlias::HTTP_OK);
    }
}
