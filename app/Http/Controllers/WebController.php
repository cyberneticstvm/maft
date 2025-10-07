<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmitEmail;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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

    function sitemap()
    {
        return Response::view('sitemap')->header('Content-Type', 'application/xml');
    }

    function index()
    {
        $title = "Manarat Al Falah Trading LLC - Premium Lifting & Safety Equipments Supplier";
        $description = "MAFT is one of the trusted lifting equipment suppliers in Dubai, Abu Dhabi, and Sharjah. We supply top-quality lifting equipment solutions for efficient and safe operations.";
        $canonical_url = "https://maft.ae";
        return view('index', compact('title', 'description', 'canonical_url'));
    }

    function contact()
    {
        $title = "Contact Us - Manarat Al Falah Trading LLC";
        $description = "For queries, rates, and personalized moving solutions, please contact MAFT via our Contact Page. We are here to help you make your relocation stress-free!";
        $canonical_url = "https://maft.ae/contact";
        return view('contact', compact('title', 'description', 'canonical_url'));
    }

    function products()
    {
        $title = "Manarat Al Falah Trading LLC - Premium Lifting & Safety Equipments Supplier";
        $description = "MAFT is one of the trusted lifting equipment suppliers in Dubai, Abu Dhabi, and Sharjah. We supply top-quality lifting equipment solutions for efficient and safe operations.";
        $canonical_url = "https://maft.ae";
        return view('products', compact('title', 'description', 'canonical_url'));
    }

    function product1()
    {
        $title = "MAFT: LG Snatch block and tirfor supplier in UAE";
        $description = "MAFT: Your trusted LG Snatch block and tirfor supplier in UAE. Ideal for heavy-duty lifting and pulling operations. Request a quote today";
        $canonical_url = "https://maft.ae/product/lg-snatch-block-and-tirfor";
        return view('product.lg-snatch-block-and-tirfor', compact('title', 'description', 'canonical_url'));
    }
}
