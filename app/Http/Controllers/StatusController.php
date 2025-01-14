<?php

namespace App\Http\Controllers;

use App\Http\Resources\StatusResource;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        return StatusResource::collection(Status::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
        ]);

        return new StatusResource(Status::create($data));
    }

    public function show(Status $status)
    {
        return new StatusResource($status);
    }

    public function update(Request $request, Status $status)
    {
        $data = $request->validate([
            'name' => ['required'],
        ]);

        $status->update($data);

        return new StatusResource($status);
    }

    public function destroy(Status $status)
    {
        $status->delete();

        return response()->json();
    }
}
