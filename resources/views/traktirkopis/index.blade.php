@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Traktir Kopi</h1>

        <form action="{{ route('traktirkopis.store') }}" method="POST" class="traktir-form">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Metode Pembayaran</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" id="payment_rekening" value="rekening" required>
                    <label class="form-check-label" for="payment_rekening">Rekening</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" id="payment_e_wallet" value="e-wallet" required>
                    <label class="form-check-label" for="payment_e_wallet">E-wallet</label>
                </div>
                <input type="text" id="payment_detail" name="payment_detail" class="form-control" placeholder="Masukkan nomor" required>
            </div>

            <div class="form-group">
                <label>Pilihan Kopi</label>
                <div class="kopi-buttons">
                    <button type="button" class="btn btn-primary" data-kopi="Kopi Hitam" data-harga="5000">Kopi Hitam</button>
                    <button type="button" class="btn btn-primary" data-kopi="Cappucino" data-harga="10000">Cappucino</button>
                    <button type="button" class="btn btn-primary" data-kopi="Caffe Latte" data-harga="20000">Caffe Latte</button>
                    <button type="button" class="btn btn-primary" data-kopi="Mocha Latte" data-harga="50000">Mocha Latte</button>
                    <button type="button" class="btn btn-primary" data-kopi="Ekspresso" data-harga="100000">Ekspresso</button>
                </div>
            </div>

            <input type="hidden" id="jeniskopi" name="jeniskopi" required>
            <input type="hidden" id="harga" name="harga" required>

            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" id="harga-text" class="form-control" readonly>
            </div>

            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const kopiButtons = document.querySelectorAll('.kopi-buttons button');
            const hargaText = document.getElementById('harga-text');
            const jeniskopiInput = document.getElementById('jeniskopi');
            const hargaInput = document.getElementById('harga');

            kopiButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const kopi = this.getAttribute('data-kopi');
                    const harga = this.getAttribute('data-harga');

                    jeniskopiInput.value = kopi;
                    hargaInput.value = harga;
                    hargaText.value = "Rp " + harga; // Menambahkan 'Rp' di depan harga
                });
            });
        });
    </script>
@endsection
