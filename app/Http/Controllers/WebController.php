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
        $title = "MAFT: Snatch block and tirfor winch supplier in UAE";
        $description = "MAFT: Your trusted Snatch block and tirfor winch supplier in UAE. Ideal for heavy-duty lifting and pulling operations. Request a quote today";
        $canonical_url = "https://maft.ae/product/snatch-block-and-tirfor-winch";
        return view('product.snatch-block-and-tirfor-winch', compact('title', 'description', 'canonical_url'));
    }

    function product2()
    {
        $title = "Buy Ratchet Load Binders in UAE | Heavy-Duty Cargo Securing | MAFT Dubai";
        $description = "Looking for high-quality ratchet load binders in the UAE? MAFT offers durable, heavy-duty ratchet binders for secure cargo tie-downs. Fast delivery in Dubai & across the UAE.";
        $canonical_url = "https://maft.ae/product/ratchet-load-binders";
        return view('product.ratchet-load-binders', compact('title', 'description', 'canonical_url'));
    }

    function product3()
    {
        $title = "MAFT Lever Hoist – High-Performance Manual Lifting Tool";
        $description = "Buy durable lever hoists in UAE from MAFT – designed for reliable manual lifting and load handling in industrial, construction, and warehouse operations.";
        $canonical_url = "https://maft.ae/product/lever-hoist";
        return view('product.lever-hoist', compact('title', 'description', 'canonical_url'));
    }

    function product4()
    {
        $title = "Heavy-Duty Beam & Geared Trolley – MAFT UAE";
        $description = "Buy high-quality beam and geared trolleys in UAE from MAFT – durable, adjustable, and safe solutions for lifting and load transportation needs.";
        $canonical_url = "https://maft.ae/product/beam-and-geared-trolley";
        return view('product.beam-and-geared-trolley', compact('title', 'description', 'canonical_url'));
    }

    function product5()
    {
        $title = "Heavy-Duty Cargo Lashing Straps – MAFT UAE";
        $description = "Buy premium cargo lashing straps in UAE from MAFT – strong, adjustable, and safe load securing solutions for transport, shipping, and logistics.";
        $canonical_url = "https://maft.ae/product/cargo-lashing";
        return view('product.cargo-lashing', compact('title', 'description', 'canonical_url'));
    }

    function product6()
    {
        $title = "Durable Round Slings – Safe Lifting Solutions UAE";
        $description = "Buy high-quality polyester round slings in UAE from MAFT – lightweight, durable, and safe lifting solutions for industrial and construction use.";
        $canonical_url = "https://maft.ae/product/round-sling";
        return view('product.round-sling', compact('title', 'description', 'canonical_url'));
    }

    function product7()
    {
        $title = "Durable Steel Shackles – Reliable Load Connection | MAFT UAE";
        $description = "Discover high-strength shackles for safe and secure lifting operations. Trusted by industries across the UAE. Available now at MAFT.";
        $canonical_url = "https://maft.ae/product/shackle";
        return view('product.shackle', compact('title', 'description', 'canonical_url'));
    }

    function product8()
    {
        $title = "Plate Clamps Supplier UAE | MAFT";
        $description = "Get certified vertical & horizontal plate clamps in UAE. Heavy-duty, safe & reliable lifting solutions from MAFT – trusted safety equipment supplier.";
        $canonical_url = "https://maft.ae/product/vertical-and-horizontal-plate-clamp";
        return view('product.vertical-and-horizontal-plate-clamp', compact('title', 'description', 'canonical_url'));
    }

    function product9()
    {
        $title = "Chain Block Supplier in UAE | MAFT    ";
        $description = "Durable and certified chain blocks for heavy lifting. Available in various capacities. MAFT – trusted safety & lifting equipment supplier in UAE.";
        $canonical_url = "https://maft.ae/product/chain-block";
        return view('product.chain-block', compact('title', 'description', 'canonical_url'));
    }
}
