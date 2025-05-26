@extends('layout')
@section('content')
      <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ Vite::asset('resources/images/GEDUNGSEKOLAH.jpg') }}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Riwayat Pendaftaran</h1>
         </div>
        </div>
      </div>
    </section>
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
                                <td>{{ \Carbon\Carbon::parse($item['jatuh_tempo'])->translatedFormat('d F Y') }}</td>
                                <td>
                                    {{ $item['data'] ? \Carbon\Carbon::parse($item['data']->tanggalbayar)->translatedFormat('d F Y') : '-' }}
                                </td>
                                <td>
                                    {{ $item['data'] ? number_format($item['data']->jumlah, 0, ',', '.') : '-' }}
                                </td>
                                <td>
                                    @if ($item['data'] && $item['data']->buktibayar)
                                        <a href="{{ asset('bukti_spp/' . $item['data']->buktibayar) }}" target="_blank"
                                            class="btn btn-sm btn-info">
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
                                            <span class="badge badge-warning">Menunggu Konfirmasi</span>
                                        @else
                                            <span class="badge badge-success">Diterima</span>
                                        @endif
                                    @else
                                        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#bayarModal"
                                            data-bulan="{{ $item['bulan'] }}" data-jatuhtempo="{{ $item['jatuh_tempo'] }}">
                                            Upload Bukti Bayar
                                        </button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <!-- Modal Upload Bukti Bayar -->
    <div class="modal fade" id="bayarModal" tabindex="-1" aria-labelledby="bayarModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="POST" action="{{ url('sppbayar') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <input type="hidden" name="bulan" id="modalBulan">
                    <input type="text" name="jatuhtempo" id="modalJatuhTempo">

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

    <!-- Script untuk isi data modal -->
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
