<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ConsultationRequest;
use Illuminate\Http\Request;

class ConsultationRequestController extends Controller
{
    public function index()
    {
        $requests = ConsultationRequest::latest()->get();

        return view('admin.requests.index', compact('requests'));
    }

    public function create()
    {
        //
    }

    public function store()
    {
        //
    }

    public function show(ConsultationRequest $consultationRequest)
{
    return view('admin.requests.show', compact('consultationRequest'));
}

    public function edit(ConsultationRequest $consultationRequest)
    {
        //
    }

    public function update(Request $request, ConsultationRequest $consultationRequest)
{
    $validated = $request->validate([
        'status' => ['required', 'in:new,in_progress,completed'],
    ]);

    $consultationRequest->update($validated);

    return redirect()
        ->route('admin.requests.show', $consultationRequest)
        ->with('success', 'Статус заявки обновлён.');
}

    public function destroy(ConsultationRequest $consultationRequest)
    {
        //
    }
}