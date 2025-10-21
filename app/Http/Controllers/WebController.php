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

    public function sitemap()
    {
        return response()->view('sitemap')->header('Content-Type', 'text/xml');
    }

    public function robots()
    {
        return response()->view('robots')->header('Content-Type', 'text/plain');
    }

    function index()
    {
        $title = "MAFT - Premium Lifting & Safety Equipments Supplier";
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
        $title = "Durable Round Slings and Webbing Slings – MAFT UAE";
        $description = "Buy high-quality polyester round slings in UAE from MAFT – lightweight, durable, and safe lifting solutions for industrial and construction use.";
        $canonical_url = "https://maft.ae/product/round-sling-and-webbing-sling";
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
        $title = "Chain Block Supplier in UAE | MAFT";
        $description = "Durable and certified chain blocks for heavy lifting. Available in various capacities. MAFT – trusted safety & lifting equipment supplier in UAE.";
        $canonical_url = "https://maft.ae/product/chain-block";
        return view('product.chain-block', compact('title', 'description', 'canonical_url'));
    }

    function product10()
    {
        $title = "Heavy-Duty Pallet Truck | MAFT UAE";
        $description = "Buy a reliable pallet truck from MAFT – UAE’s top safety & industrial equipment supplier. High load capacity, durable, and easy to operate.";
        $canonical_url = "https://maft.ae/product/pallet-truck";
        return view('product.pallet-truck', compact('title', 'description', 'canonical_url'));
    }

    function product11()
    {
        $title = "Heavy-Duty Magnetic Lifter | MAFT UAE";
        $description = "Buy industrial magnetic lifters from MAFT – UAE’s trusted supplier of lifting & safety gear. Secure, efficient, and ideal for metal handling.";
        $canonical_url = "https://maft.ae/product/magnetic-lifter";
        return view('product.magnetic-lifter', compact('title', 'description', 'canonical_url'));
    }

    function product12()
    {
        $title = "Electric Chain Block 0.5–15 Ton | MAFT UAE";
        $description = "Get durable electric chain blocks (0.5–15 tonne) from MAFT – UAE's trusted lifting equipment supplier. Safe, efficient, and ideal for heavy load handling.";
        $canonical_url = "https://maft.ae/product/electric-chain-block-0.5-ton-to-15-ton";
        return view('product.electric-chain-block', compact('title', 'description', 'canonical_url'));
    }

    function product13()
    {
        $title = "Hydraulic Cylindrical & Bottle Jacks | MAFT UAE";
        $description = "Buy durable hydraulic cylindrical and bottle jacks in UAE from MAFT — trusted safety equipment suppliers in Dubai & across the UAE.";
        $canonical_url = "https://maft.ae/product/hydraulic-cylindrical-jack";
        return view('product.hydraulic-cylindrical-jack', compact('title', 'description', 'canonical_url'));
    }

    function product14()
    {
        $title = "Durable Chain Slings for Lifting | MAFT UAE";
        $description = "Buy heavy-duty chain slings at MAFT – UAE’s trusted supplier for lifting gear. Ideal for industrial lifting, available in 1 to 4-leg configurations.";
        $canonical_url = "https://maft.ae/product/chain-slings";
        return view('product.chain-slings', compact('title', 'description', 'canonical_url'));
    }

    function product15()
    {
        $title = "Durable Wire Rope Slings | MAFT UAE";
        $description = "Shop high-quality wire rope slings at MAFT – trusted UAE supplier for lifting gear. Ideal for heavy loads, flexible, and built for industrial durability.";
        $canonical_url = "https://maft.ae/product/wire-rope-slings";
        return view('product.wire-rope-slings', compact('title', 'description', 'canonical_url'));
    }

    function product16()
    {
        $title = "Double Webbing Lanyard – Safety at MAFT UAE";
        $description = "Shop durable double webbing lanyards at MAFT, UAE’s trusted safety equipment supplier. Designed for fall protection and secure worker safety.";
        $canonical_url = "https://maft.ae/product/double-webbing-lanyard-and-full-body-harness";
        return view('product.double-webbing-lanyard', compact('title', 'description', 'canonical_url'));
    }

    function product17()
    {
        $title = "Full Body Harness – Safety Gear by MAFT UAE";
        $description = "Shop durable full body harnesses at MAFT, UAE’s trusted safety supplier. Designed for fall protection with ergonomic fit, comfort, and certified compliance.";
        $canonical_url = "https://maft.ae/product/full-body-harness";
        return view('product.full-body-harness', compact('title', 'description', 'canonical_url'));
    }

    function product18()
    {
        $title = "Retractable Fall Arrester Block | MAFT UAE";
        $description = "Buy reliable retractable fall arrester blocks at MAFT, UAE’s top safety supplier. Ensure worker safety with smooth, automatic fall arrest systems compliant with standards.";
        $canonical_url = "https://maft.ae/product/retractable-fall-arrester-block";
        return view('product.retractable-fall-arrester-block', compact('title', 'description', 'canonical_url'));
    }

    function product19()
    {
        $title = "Anchorage Life Line Rope – Safety by MAFT UAE";
        $description = "Shop durable anchorage life line ropes at MAFT, UAE’s trusted safety supplier. Engineered for fall protection anchorage, reliable and compliant with safety standards.";
        $canonical_url = "https://maft.ae/product/anchorage-life-line-rope";
        return view('product.anchorage-life-line-rope', compact('title', 'description', 'canonical_url'));
    }

    function service1()
    {
        $title = "Metal Fabrication Services UAE | MAFT";
        $description = "Get precision metal fabrication services in UAE from MAFT — trusted by industries for quality, custom fabrication & reliable turnaround times.";
        $canonical_url = "https://maft.ae/service/fabrication-service";
        return view('service.fabrication', compact('title', 'description', 'canonical_url'));
    }

    function service2()
    {
        $title = "Man Basket Rental & Services UAE | MAFT";
        $description = "Safe and certified man basket services in UAE. MAFT offers reliable man basket rentals for elevated work across all industries.";
        $canonical_url = "https://maft.ae/service/man-basket-service";
        return view('service.man-basket', compact('title', 'description', 'canonical_url'));
    }

    function service3()
    {
        $title = "Material Basket Rental in UAE | MAFT";
        $description = "Durable material basket rental services in UAE. MAFT provides certified lifting baskets for safe material handling at height.";
        $canonical_url = "https://maft.ae/service/material-basket-service";
        return view('service.material-basket', compact('title', 'description', 'canonical_url'));
    }

    function service4()
    {
        $title = "Spreader Beam Rental UAE | MAFT Services";
        $description = "Rent certified spreader beams in UAE. MAFT offers safe lifting solutions for heavy loads with tested and compliant spreader beam services.";
        $canonical_url = "https://maft.ae/service/spreader-beam-service";
        return view('service.spreader-beam', compact('title', 'description', 'canonical_url'));
    }

    function service5()
    {
        $title = "Waste Skip Rental Services UAE | MAFT";
        $description = "MAFT offers durable waste skip rental services in UAE for construction, industrial, and commercial waste management. Fast delivery & certified skips.";
        $canonical_url = "https://maft.ae/service/waste-skip-service";
        return view('service.waste-skip', compact('title', 'description', 'canonical_url'));
    }
}
