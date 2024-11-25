<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;//Import the PDF facade
use App\Models\Order;
use App\Models\OrderItem;
use App\Helpers\BarcodeGenerate;
use Illuminate\Support\Facades\Mail;

use App\Models\Product;
use App\Models\Category;

use App\Models\City;

class InvoiceController extends Controllers
{
    public function viewInvoice($id)
    {
        //find the order by its ID
        $order = Order::findOrFail($id);

        //get order items
        $order_items = OrderItem::where('order_id', $order->id)->get();

        //generate UPI QR code
        $upi_qr = BarcodeGenerate::generateQRcode('9944177142@icici');

        //retrieve all cities for use in the view
        $cities = City::all();

        // Retrieve all categories for use in the view
        $categories = Category::all();

        //prepare data for the PDF
        $data =[
            'categories' => $categories,
            'cities' => $cities,

            'order' => $order,
            'order_items' => $order_items,
            'upi_qr' => $upi_qr
        ];

        return view('frontend/invoice/show' , $data);

    }
    public function generateInvoicePdf($id)
    {
        //find the order by its ID
        $order = Order::findOrFail($id);

        //Get order items
        $order_items = OrderItems::where('order_id', $order->id)->get();

         // Generate UPI QR code
         $upi_qr = BarcodeGenerator::generateQRcode('9944177142@icici');
        
         // Prepare data for the PDF
         $data = [
             'order' => $order,
             'order_items' => $order_items,
             'upi_qr' => $upi_qr
         ];

         //Load the view and pass the data
         $pdf = PDF::loadView('pdf.invoice',$data);

         //return the generate PDF
         return $pdf;
    }

    public function sendInvoiceEmail(Request $request, $id)
    {
        //find the order by its Id
        $order = Order::findOrFail($id);

        $recipient_email = $order->customer->email;
        $recipient_name = $order->customer->name;
        $subject = $order->order_number;

        //generate the Pdf
        $pdf = $this->generateInvoicePdf($id);

        //prepare data for tje email
        $data = [
            'order' => $order,
            'order_items' => OrderItems::where('order_id', $order->id)->get(),
            'upi_qr' => BarcodeGenerate::generateQRcode('9944177142@icici')
        ];

        //send email with the invoice attached
        Mail::send('email.invoice',$data, function($message) use($pdf, $recipient_email,$recipient_name,$subject){
            $message->to($recipient_email, $recipient_name)
                ->subject($subject)
                ->attachData($pdf->output(), "invoice.pdf");
        });

        //optionally, you can provide a response to indicate the email was sent
        return response()->json(['message' => 'Invoice email sent successfully']);

    }
    public function downloadInvoicePdf($id)
    {
        //generate the pdf
        $pdf = $this->generateInvoicePdf($id);

        //download the PDF
        return $pdf->download('invoice.pdf');
    }
    
    public function streamInvoicePdf($id)
    {
        // Generate the PDF
        $pdf = $this->generateInvoicePdf($id);

        // Stream the PDF to the browser
        return $pdf->stream('invoice.pdf');
    }

}