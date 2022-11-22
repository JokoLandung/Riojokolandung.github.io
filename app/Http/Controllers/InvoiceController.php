<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();

        return response()->json([
            'status' => 'success',
            'data' => $invoices,
        ]);
    }

    public function store(Request $request)
    {
        $invoice = Invoice::create([
            'name' => $request->name,
            'price' => $request->price,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Invoice created successfully',
            'data' => $invoice,
        ]);
    }

    public function show($id)
    {
        $invoice = Invoice::find($id);

        if (!$invoice) {
            return response()->json([
                'status' => 'error',
                'message' => 'Invoice not found',
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $invoice,
        ]);
    }

    public function update(Request $request, $id)
    {
        $invoice = Invoice::find($id);

        if (!$invoice) {
            return response()->json([
                'status' => 'error',
                'message' => 'Invoice not found',
            ], 404);
        }

        $invoice->update([
            'name' => $request->name,
            'price' => $request->price,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Invoice updated successfully',
            'data' => $invoice,
        ]);
    }

    public function destroy($id)
    {
        $invoice = Invoice::find($id);

        if (!$invoice) {
            return response()->json([
                'status' => 'error',
                'message' => 'Invoice not found',
            ], 404);
        }

        $invoice->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Invoice deleted successfully',
        ]);
    }
}
