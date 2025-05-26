@extends('admin/layout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Pembayaran SPP</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin/spp') }}">Data SPP</a></li>
                        <li class="breadcrumb-item active">Detail SPP</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabel Riwayat Pembayaran -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Riwayat Pembayaran SPP</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>Bulan</th>
                                    <th>Jatuh Tempo</th>
                                    <th>Tanggal Bayar</th>
                                    <th>Jumlah</th>
                                    <th>Bukti Bayar</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bulan_data as $item)
                                    <tr>
                                        <td>{{ $item['bulan'] }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item['jatuh_tempo'])->translatedFormat('d F Y') }}
                                        </td>
                                        <td>
                                            {{ $item['data'] ? \Carbon\Carbon::parse($item['data']->tanggalbayar)->translatedFormat('d F Y') : '-' }}
                                        </td>
                                        <td>
                                            {{ $item['data'] ? number_format($item['data']->jumlah, 0, ',', '.') : '-' }}
                                        </td>
                                        <td>
                                            @if ($item['data'] && $item['data']->buktibayar)
                                                <a href="{{ asset('bukti_spp/' . $item['data']->buktibayar) }}"
                                                    target="_blank" class="btn btn-sm btn-info">
                                                    Lihat Bukti
                                                </a>
                                            @else
                                                <span class="text-danger">Belum Bayar</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item['data'])
                                                @if ($item['data']->status == 'Sudah Dikonfirmasi')
                                                    <span class="badge badge-success">Sudah Dibayar</span>
                                                @elseif ($item['data']->status == 'Menunggu Konfirmasi')
                                                    <form action="{{ url('admin/sppkonfirmasi/' . $item['data']->idspp) }}"
                                                        method="POST" style="display:inline-block">
                                                        @csrf
                                                        <button type="submit" class="btn btn-sm btn-success"
                                                            onclick="return confirm('Yakin ingin konfirmasi pembayaran ini?')">
                                                            Konfirmasi
                                                        </button>
                                                    </form>
                                                @else
                                                    <span class="badge badge-success">Diterima</span>
                                                @endif
                                            @else
                                                <button class="btn btn-warning btn-sm" data-toggle="modal"
                                                    data-target="#bayarModal" data-bulan="{{ $item['bulan'] }}"
                                                    data-jatuhtempo="{{ $item['jatuh_tempo'] }}">
                                                    Upload Bukti Bayar
                                                </button>
                                            @endif
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    <a href="{{ url('admin/spp') }}" class="btn btn-secondary mt-3">Kembali</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Upload Bukti Bayar -->
    <div class="modal fade" id="bayarModal" tabindex="-1" aria-labelledby="bayarModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="POST" action="{{ url('admin/sppbayar/' . $userId) }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <input type="hidden" name="bulan" id="modalBulan">
                    <input type="hidden" name="jatuhtempo" id="modalJatuhTempo">

                    <div class="modal-header">
                        <h5 class="modal-title">Upload Bukti Pembayaran</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <label>Jumlah Bayar</label>
                            <input type="number" name="jumlah" class="form-control" value="75000" readonly required>
                        </div>

                        <div class="form-group">
                            <label>Tanggal Bayar</label>
                            <input type="date" name="tanggalbayar" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Metode Pembayaran</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="metodepembayaran" id="transfer"
                                    value="Transfer" required>
                                <label class="form-check-label" for="transfer">Transfer</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="metodepembayaran" id="cash"
                                    value="Cash" required>
                                <label class="form-check-label" for="cash">Cash</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Bukti Bayar (gambar/pdf)</label>
                            <input type="file" name="buktibayar" class="form-control" accept="image/*,application/pdf"
                                required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('#bayarModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var bulan = button.data('bulan');
            var jatuhtempo = button.data('jatuhtempo');

            var modal = $(this);
            modal.find('#modalBulan').val(bulan);
            modal.find('#modalJatuhTempo').val(jatuhtempo);
        });
    </script>
@endsection
