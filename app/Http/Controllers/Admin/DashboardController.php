<?php
// app/Http/Controllers/Admin/DashboardController.php
// Controller ini mengatur halaman utama (dashboard) setelah admin login.
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Package;

class DashboardController extends Controller
{
    public function index()
    {
        // Menghitung statistik untuk ditampilkan di dashboard
        $stats = [
            'request' => Order::where('status', 'Request')->count(),
            'approved' => Order::where('status', 'Approved')->count(),
            'selesai' => Order::where('status', 'Selesai')->count(),
            'packages' => Package::count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}