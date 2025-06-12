
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ], [
            'name.required' => 'Поле имя обязательно для заполнения',
            'email.required' => 'Поле email обязательно для заполнения',
            'email.email' => 'Введите корректный email адрес',
            'subject.required' => 'Поле тема обязательно для заполнения',
            'message.required' => 'Поле описание обязательно для заполнения',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Пожалуйста, исправьте ошибки в форме');
        }

        try {
            // Send email to admin
            Mail::send('emails.contact', [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'messageContent' => $request->message,
            ], function ($message) use ($request) {
                $message->to('admin@example.com')
                    ->subject('Новое сообщение с сайта IvASoft: ' . $request->subject)
                    ->replyTo($request->email, $request->name);
            });

            return back()->with('success', 'Ваше сообщение успешно отправлено! Мы свяжемся с вами в ближайшее время.');
        } catch (\Exception $e) {
            return back()
                ->withInput()
                ->with('error', 'Произошла ошибка при отправке сообщения. Пожалуйста, попробуйте позже.');
        }
    }
}
