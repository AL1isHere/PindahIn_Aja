<!-- resources/views/admin/orders/report.blade.php -->
{{-- Template ini digunakan oleh laravel-dompdf untuk membuat laporan --}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Pesanan</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; }
        .table { width: 100%; border-collapse: collapse; }
        .table th, .table td { border: 1px solid #ddd; padding: 8px; }
        .table th { background-color: #f2f2f2; text-align: left; }
        h1 { font-size: 18px; }
    </style>
</head>
<body>
    <h1>Laporan Pesanan - Pindahin Aja</h1>
    <p>Tanggal Cetak: {{ $date }}</p>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Pemesan</th>
                <th>Email</th>
                <th>Paket</th>
                <th>Tgl. Pindahan</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->nama_lengkap }}</td>
                <td>{{ $order->email_pemesan }}</td>
                <td>{{ $order->package->nama_paket ?? 'N/A' }}</td>
                <td>{{ \Carbon\Carbon::parse($order->tanggal_pindahan)->format('d M Y') }}</td>
                <td>{{ $order->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>