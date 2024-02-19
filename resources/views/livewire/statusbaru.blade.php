<div class="w-full justify-center flex text-start">
    <div class="flex px-3 py-3 w-fit justify-center justify-self-center">

        <div class="grid grid-cols-1 card lg:card-side bg-base-100 shadow-xl px-4 py-4">
            <div class="card-body">
                <h2 class="card-title self-center text-center text-tsn-header">Cek Status Penerimaan Santri Baru</h2>
            </div>
            <div>
                <form wire:submit="cektahaptiga">
                    <!--Username -->
                    <div class="pt-4">
                        <x-input-label for="tahap3" :value="__('Masukkan nomor KARTU KELUARGA')" />
                        <x-text-input id="tahap3" class="block mt-1 w-full" type="text" name="tahap3" minlength="16"
                            maxlength="16" :value="old('tahap3')" required autocomplete="tahap3" wire:model="tahap3" />
                        <x-input-error :messages="$errors->get('tahap3')" class="mt-2" />
                        {{--
                        <x-input-error :messages="$errors->get('username')" class="mt-2" /> --}}
                    </div>


                    <div class="flex items-center justify-center mt-4">
                        <x-primary-button class="ms-3">
                            {{ __('Cek Status') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>



            @if($data === null)

            @endif

            @if($data !== null)
            <p><br></p>
            @if($data->status_tahap === null)
            <p>Jika informasi status "Lolos"/"Tidak Lolos" belum ada, berarti masih dalam proses seleksi</p>
            <p><br></p>
            @endif
            <div>
                <div>
                    {{ $this->table }}
                </div>

                @if($cekditerima === 0)

                @elseif($cekditerima !== 0)
                <p><br></p>
                <div>
                    <h2 class="self-center text-center text-tsn-header"><br>Dengan ini kami panitia pendaftaran
                        santri/wati
                        baru Ma'had Ta'dzimusunnah Ngawi akan memberikan bimbingan tentang tahapan selanjutnya
                        pendaftaran
                        santriwati baru.</h2>
                    <h2 class="self-center text-center text-tsn-header"><br>Yaitu <strong>TAHAP PENGIRIMAN
                            DOKUMEN</strong>
                        dan <strong>TAHAP PENGUMPULAN PEMBAYARAN ADMINISTRASI AWAL</strong>.</h2>

                    <div class="w-fit">
                        <table class="table w-auto">
                            <!-- head -->
                            <thead>
                                <tr class="border-tsn-header">
                                    <th class="text-lg text-tsn-header" colspan="2">A. TAHAP PENGIRIMAN DOKUMEN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Fotocopy KK 3 lembar</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Fotocopy Akte 3 lembar</td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Fotocopy Surat Vaksin 3 lembar</td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td>Dokumen-dokumen lainnya adalah dokumen asli
                                    </td>
                                <tr>
                                    <th colspan="2">Semua itu dimasukkan kedalam stop map dan diberi tanda "BERKAS DATA
                                        ANANDA FULAN/FULANAH (disebutkan namanya)"
                                        <br>
                                        <br>
                                        *Qism :___ (disebutkan Qism nya)
                                        <br>
                                        <br>
                                        Kemudian dikirimkan via pos ke alamat berikut :
                                        <br>
                                        <br>
                                        Kepada: Ma'had Ta'dzimussunnah (Panitia Pendaftaran Qism : _____)
                                        <br>
                                        <br>
                                        d/a Ustadz. A.M Rifai Komplek (nama ananda dan qismnya) Ma'had Ta'dzimussunnah.
                                        Jln
                                        Raya Sine-Sragen KM 5 Belakang KUD Desa Ketanggung, Kec.Sine, Kab.Ngawi. Jawa
                                        Timur
                                        63264
                                        <br>
                                        <br>
                                        Bagi orangtua yang mendaftarkan lebih dari satu, bisa disatukan ketika
                                        mengirimkan,
                                        dengan tetap memberikan stopmap kepada masing-masing nya, dan memberikan
                                        keterangan
                                        kepada para penanggung jawab di masing-masing Qism.
                                        <br>
                                        <br>
                                        Mohon di cek ulang sebelum di kirim agar tidak ada kekurangan pada berkas yang
                                        dikirimkan.
                                        <br>
                                        <br>
                                        Setelah melakukan pengiriman, bukti resi pengiriman dapat difoto kemudian
                                        diupload
                                        ke Formulir Tahap 3 dan 4 (di website psb.tsn.ponpes.id ).
                                        <br>
                                        <br>
                                        Penjelasan lebih lanjut bisa menghubungi para admin grup/penanggung jawab di
                                        tiap
                                        qismnya.
                                    </th>

                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <br><br>
                    <br><br>

                    <div class="w-fit">
                        <table class="table w-auto">
                            <!-- head -->
                            <thead>
                                <tr class="border-tsn-header">
                                    <th class="text-lg text-tsn-header" colspan="2">B. TAHAP PENGUMPULAN PEMBAYARAN
                                        ADMINISTRASI AWAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="align-text-top">1</th>
                                    <td>Pembayaran hanya menerima transfer.
                                        <br><br>
                                        Nomor Rekening akan diumumkan oleh masing-masing
                                        qism.
                                        <br><br>
                                        Harus memberikan konfirmasi setelah transfer disertai foto tanda bukti transfer
                                        kemudian diupload ke Formulir Tahap 3 dan 4 (di website psb.tsn.ponpes.id ).
                                        <br><br>
                                        Transfer yg tdk menyertakan foto tanda bukti tidak teranggap. Mohon
                                        diperhatikan...
                                    </td>
                                </tr>
                                <tr>
                                    <th class="align-text-top">2</th>
                                    <td>Rincian biaya yang dibayarkan sesuai dengan yang tertera di Surat Pernyataan
                                        Kesanggupan.</td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
                @endif
            </div>
            @endif

        </div>
    </div>
</div>
