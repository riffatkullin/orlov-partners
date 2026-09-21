<?php

namespace App\Http\Controllers;

use App\Models\ConsultationRequest;
use Illuminate\Http\Request;
use App\Mail\ConsultationRequestReceived;
use Illuminate\Support\Facades\Mail;

class ConsultationRequestController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate(
    [
        'name' => ['required', 'string', 'max:100'],
        'contact' => ['required', 'string', 'max:255'],
        'message' => ['required', 'string', 'max:5000'],
    ],
    [
        'name.required' => 'Введите ваше имя.',
        'contact.required' => 'Укажите телефон или E-mail.',
        'message.required' => 'Опишите вашу задачу.',
    ]
);

        $consultationRequest = ConsultationRequest::create($validated);

Mail::to('admin@orlov-partners.ru')
    ->send(new ConsultationRequestReceived($consultationRequest));

return response()->json([
            'success' => true,
            'message' => 'Спасибо! Ваш запрос отправлен. Мы свяжемся с вами.',
        ]);
    }
    
    
}
$consultationRequest = ConsultationRequest::latest()->first();
