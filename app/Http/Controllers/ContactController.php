<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Models\SiteSettings;
use App\Mail\ContactMessageMail;

class ContactController extends Controller
{

    // public function send(Request $request)
    // {
    //     // 1) Validate (manual form submit)
    //     $data = $request->validate([
    //         'name'    => ['required', 'string', 'min:2', 'max:200'],
    //         'email'   => ['required', 'email', 'max:255'],
    //         'phone'   => ['nullable', 'string', 'max:30'],
    //         'subject' => ['required', 'string', 'min:3', 'max:200'],
    //         'message' => ['required', 'string', 'min:10', 'max:5000'],
    //     ]);

    //     // 2) Resolve recipient: DB → MAIL_FROM_ADDRESS → hard fallback
    //     $settings = SiteSettings::query()->first();

    //     $toEmail = $settings?->contact_email
    //         ?: config('mail.from.address')
    //         ?: 'ielemson@gmail.com';

    //     // 3) Send email (Mailable)
    //     Mail::to($toEmail)->send(new ContactMessageMail($data));

    //     // 4) Redirect back with flash message
    //     return back()
    //         ->with('success', 'Your message has been sent successfully.')
    //         ->withInput([]); // clears old input
    // }

    public function send(Request $request)
    {
        // 1) Validate request (server-side safety)
        $data = $request->validate([
            'name'    => ['required', 'string', 'min:2', 'max:200'],
            'email'   => ['required', 'email', 'max:255'],
            'phone'   => ['nullable', 'string', 'max:30'],
            'subject' => ['required', 'string', 'min:3', 'max:200'],
            'message_body' => ['required', 'string', 'max:5000'],
        ]);

        // 2) Resolve recipient (simple + explicit)
        $toEmail = config('mail.from.address', 'info@greenenerycl.com');

        // 3) Send email
        Mail::to($toEmail)->send(new ContactMessageMail($data));

        // 4) Redirect back with flash message
        return redirect()
            ->back()
            ->with('success', 'Thank you! Your message has been sent successfully.');
    }
}
