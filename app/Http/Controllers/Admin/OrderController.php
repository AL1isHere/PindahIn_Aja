<?php
// app/Http/Controllers/Admin/OrderController.php
// Controller untuk mengelola data pesanan (melihat, mengubah status, dan membuat laporan).
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf; // <-- BARIS INI DIPERBAIKI

class OrderController extends Controller
{
    /**
     * Menampilkan daftar semua pesanan.
     */
    public function index()
    {
        $orders = Order::with('package')->latest()->get();
        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Mengubah status pesanan.
     */
    public function updateStatus(Request $request, Order $order)
    {
        $request->validate(['status' => 'required|in:Request,Approved,Selesai']);

        $order->update(['status' => $request->status]);

        return back()->with('success', 'Status pesanan berhasil diperbarui.');
    }

    /**
     * Membuat laporan pesanan dalam format PDF.
     * Catatan: Anda perlu menginstall package barryvdh/laravel-dompdf
     * dengan perintah: composer require barryvdh/laravel-dompdf
     */
    public function generateReport()
    {
        $orders = Order::with('package')->get();
        
        $data = [
            'orders' => $orders,
            'date' => date('d F Y')
        ];

        // Membuat view untuk PDF
        $pdf = PDF::loadView('admin.orders.report', $data);
        
        // Menampilkan atau mengunduh PDF
        return $pdf->stream('laporan-pesanan-pindahin-aja.pdf');
    }
}