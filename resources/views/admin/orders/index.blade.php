<!-- resources/views/admin/orders/index.blade.php -->
@extends('layouts.admin')

@section('title', 'Kelola Pesanan')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h3 class="text-2xl font-bold">Kelola Pesanan</h3>
    <a href="{{ route('admin.orders.report') }}" target="_blank" class="bg-blue-600 text-white hover:bg-blue-700 rounded-lg text-sm px-5 py-2.5">Generate Laporan</a>
</div>
<div class="bg-white rounded-lg shadow overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-100">
            <tr>
                <th scope="col" class="px-6 py-3">ID</th>
                <th scope="col" class="px-6 py-3">Email Pemesan</th>
                <th scope="col" class="px-6 py-3">Paket</th>
                <th scope="col" class="px-6 py-3">Tanggal Pindahan</th>
                <th scope="col" class="px-6 py-3">Status</th>
                <th scope="col" class="px-6 py-3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($orders as $order)
            <tr class="bg-white border-b hover:bg-gray-50">
                <td class="px-6 py-4">{{ $order->id }}</td>
                <td class="px-6 py-4">{{ $order->email_pemesan }}</td>
                <td class="px-6 py-4">{{ $order->package->nama_paket ?? 'N/A' }}</td>
                <td class="px-6 py-4">{{ \Carbon\Carbon::parse($order->tanggal_pindahan)->format('d M Y') }}</td>
                <td class="px-6 py-4">
                    @php
                        $statusClass = '';
                        if ($order->status == 'Request') $statusClass = 'bg-yellow-100 text-yellow-800';
                        elseif ($order->status == 'Approved') $statusClass = 'bg-blue-100 text-blue-800';
                        elseif ($order->status == 'Rejected') $statusClass = 'bg-red-100 text-red-800';
                        else $statusClass = 'bg-green-100 text-green-800';
                    @endphp
                    <span class="px-2 py-1 text-xs font-medium rounded-full {{ $statusClass }}">{{ $order->status }}</span>
                </td>
                <td class="px-6 py-4">
                    <form action="{{ route('admin.orders.updateStatus', $order) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <select name="status" class="text-xs rounded-lg border-gray-300" onchange="this.form.submit()">
                            <option value="Request" @if($order->status == 'Request') selected @endif>Request</option>
                            <option value="Approved" @if($order->status == 'Approved') selected @endif>Approved</option>
                            <option value="Selesai" @if($order->status == 'Selesai') selected @endif>Selesai</option>
                            <option value="Rejected" @if($order->status == 'Rejected') selected @endif>Rejected</option>
                        </select>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="6" class="text-center p-4">Tidak ada data pesanan.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection