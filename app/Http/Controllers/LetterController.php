<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateLetterRequest;
use App\Models\Letter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LetterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $letters = Letter::all();
        return view('letter.index', compact('letters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'number' => $request->number,
            'rec_date' => $request->rec_date,
            'subject' => $request->subject,
            'sender' => $request->sender,
            'classification' => $request->classification,
            'note' => $request->note,
            'letter' => $request->letter,
            'created_by' => Auth::id(),
        ];

        // return $data;
        $letter = Letter::create($data);
        return redirect(route('letter'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Letter $letter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Letter $letter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLetterRequest $request, Letter $letter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Letter $letter)
    {
        //
    }
}
