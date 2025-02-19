<?php

namespace App\Http\Controllers;

use App\Models\Deck;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\DeckResource;

class DecksController extends Controller
{
    public function index()
    {
        $decks = Deck::all();

        return DeckResource::collection($decks);
    }
}
