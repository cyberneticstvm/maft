<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmitEmail;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{
    function refreshCaptcha()
    {
        return response()->json(['captcha' => captcha_img('mini')]);
    }

    function contactSubmit(Request $request): RedirectResponse
    {
        $request->validate(
            [
                'name' => 'required',
                'mobile' => 'required|numeric',
                'subject' => 'required',
                'message' => 'required',
                'captcha' => 'required|captcha',
            ],
            ['captcha.captcha' => 'Invalid captcha code.']
        );
        try {
            Mail::to('sales@maft.ae')->cc('manzummm@gmail.com')->send(new ContactFormSubmitEmail($request));
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
        return redirect()->back()->with("success", "Contact form submitted successfully!");
    }
}
