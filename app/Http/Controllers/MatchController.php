<?php

namespace App\Http\Controllers;

use App\Models\Match;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $matches = Match::all();

        return response()->json([
            'success' => true,
            'data' => $matches
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $match = Match::create($request->all());
        if (!$match->exists) {
            return response()->json([
                'success' => false,
                'message' => 'match object not found'
            ]);
        }
        return response()->json([
            'success' => true,
            'data' => $match
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Match $match
     * @return JsonResponse
     */
    public function show(Match $match): JsonResponse
    {
        if (!$match->exists) {
            return response()->json([
                'success' => false,
                'message' => 'match object not found'
            ]);
        }
        return response()->json([
            'success' => true,
            'data' => $match
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Match $match
     * @return JsonResponse
     */
    public function update(Request $request, Match $match): JsonResponse
    {
        if (!$match->exists) {
            return response()->json([
                'success' => false,
                'message' => 'match object not found'
            ]);
        }
        $match->update($request->all());
        return response()->json([
            'success' => true,
            'data' => $match
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Match $match
     * @return JsonResponse
     */
    public function destroy(Match $match): JsonResponse
    {
        if (!$match->exists) {
            return response()->json([
                'success' => false,
                'message' => 'match object not found'
            ], ResponseAlias::HTTP_NOT_FOUND);
        }
        $match->delete();
        return response()->json([
            'success' => true,
        ]);
    }
}
