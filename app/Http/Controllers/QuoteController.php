<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\QuoteRequest;

class QuoteController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'contact_person' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'service_type' => 'required|in:rental,sales,consultation',
            'project_details' => 'nullable|string|max:1000',
        ]);

        // Send email notification
        try {
            Mail::to('inquiry@bupixel.org')->send(new QuoteRequest($validated));

            return back()->with('success', 'Thank you! Your quotation request has been submitted successfully. We will contact you within 24 hours.');
        } catch (\Exception $e) {
            return back()->with('error', 'Sorry, there was an error sending your request. Please try again or contact us directly at inquiry@bupixel.org');
        }
    }
}
