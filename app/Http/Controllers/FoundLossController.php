<?php

namespace App\Http\Controllers;

use App\Models\FoundLoss;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class FoundLossController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $foundLosses = FoundLoss::all();
        return response()->json($foundLosses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'object_ressource_id' => 'required|integer',
            'user_id' => 'required|integer',
            'date' => 'required|date',
        ]);

        $foundLoss = FoundLoss::create($request->all());
        return response()->json([
            'status' => 'success',
            'found_loss' => $foundLoss,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param FoundLoss $foundLoss
     * @return JsonResponse
     */
    public function show(FoundLoss $foundLoss): JsonResponse
    {
        if ($foundLoss->exists){
            return response()->json([
                'status' => 'error',
                'message' => 'Found loss not found',
            ], ResponseAlias::HTTP_NOT_FOUND);
        }

        return response()->json([
            'data' => $foundLoss,
            'message' => 'FoundLoss retrieved successfully'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param FoundLoss $foundLoss
     * @return Response
     */
    public function update(Request $request, FoundLoss $foundLoss)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param FoundLoss $foundLoss
     * @return JsonResponse
     */
    public function destroy(FoundLoss $foundLoss): JsonResponse
    {
        $result = $foundLoss->delete();
        return response()->json([
            'success' => $result
        ], ResponseAlias::HTTP_OK);
    }
}
