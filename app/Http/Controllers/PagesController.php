<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data_contact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use \App\Mail\EmailContact;

class PagesController extends Controller
{
    public function call_home()
    {
        return view('home');
    }

    public function call_projects()
    {
        return view('projects');
    }

    public function call_contact()
    {
        return view('contact');
    }

    public function call_about()
    {
        return view('about');
    }

    public function call_example()
    {
        return view('example');
    }

    public function call_form_contact(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'lastname' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'telephone' => 'required|string|max:30', // Ajusta la longitud máxima si es necesario
                'message' => 'required|string|max:255',
                'country_code' => 'required|string|max:255',
            ]);

            if ($validator->fails()) {
                return redirect('contact')
                    ->withErrors($validator)
                    ->withInput();
            }

            // Concatenar el código del país con el número de teléfono
            $fullPhoneNumber = $request->country_code . ' ' . $request->telephone;

            // Puedes guardar $fullPhoneNumber en la base de datos o usarlo para otros fines.
            $data = Data_contact::create([
                'name' => $request->name,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'telephone' => $fullPhoneNumber, // Guarda el número completo
                'message' => $request->message,
            ]);

            Mail::to($data->email)->send(new EmailContact($data->name, $data->lastname));
            Mail::to('cesaruiz042804@gmail.com')->send(new EmailContact($data->name, $data->lastname));

            return redirect('contact')->with('success', 'Message sent successfully.');
        } catch (ValidationException $exception) {
            return redirect()->back()->withErrors($exception->errors())->withInput();
        }
    }
}
