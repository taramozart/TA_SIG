 
 
 <style>
        /* form */
        .icont-form-si {
            transition: stroke 0.3s;
            /* Efek transisi pada perubahan warna stroke */
        }

        .kotak{
            background-color: #534B3C;
        }
        .kotak-base{
            background-color: #EEE7DA;
        }

        .group:hover .icont-form-si {
            stroke: #297785;
            /* stroke saat elemen dalam keadaan hover */
        }

        /* cek status */
        .icon-cek-statussi {
            transition: stroke 0.3s;
            /* Efek transisi pada perubahan warna stroke */
        }

        .group:hover .icon-cek-statussi {
            stroke: #297785;
            /* stroke saat elemen dalam keadaan hover */
        }
    </style>

    <aside id="default-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"aria-label="Sidebar">
        <div class="h-full px-4 py-4 overflow-y-auto bg-[#84A584]">
            <a href="/admin-home-slb">
                <div class="items-end text-end">
                    <span class="font-bold text-black text-[24px]">WebGIS</span><br>
                    <span class="font-bold text-black text-[24px]">Dokter Spesialis</span><br>
                    <span class="text-white text-[16px]">Bandar Lampung</span>
                </div>
            </a>
            <div class="flex items-center justify-center m-auto text-white mt-12">
                <ul class=''>
                    {{-- data baru dokter --}}
                    @php
                        $databarudokter = ['data-baru-dokter'];
                    @endphp
                    <li class="absolute flex items-center justify-center inset-x-0 mt-5">
                        <a href="/data-baru-dokter" type="button"
                            class="group w-[90%] h-[50px] flex gap-6 text-lg font-medium
  @if (in_array(Request::path(), $databarudokter)) rounded-lg bg-[#534B3C] kotak text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            text-black rounded-lg bg-[#EEE7DA] kotak-base hover:bg-[#534B3C] hover:text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif">
                            <div class="text-center justify-center items-center flex font-bold m-auto">Data Baru Dokter
                            </div>
                        </a>
                    </li>
                    {{-- Kelola data dokter --}}
                    <li class="absolute flex items-center justify-center inset-x-0 mt-[80px]">
                        @php
                            $keloladatadokter = [
                                'kelola-data-dokter', 
                                'kelola-data-dokter/edit',
                                'kelola-data-dokter/lihat'];
                        @endphp
                        <a href="/kelola-data-dokter" type="button"
                            class="group w-[90%] h-[50px] flex gap-6 text-lg font-medium
        @if (in_array(Request::path(), $keloladatadokter)) rounded-lg bg-[#534B3C] kotak text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            text-black rounded-lg bg-[#EEE7DA] kotak-base hover:bg-[#534B3C] hover:text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif">
                            <div class="text-center justify-center items-center flex font-bold m-auto">Kelola Data
                                Dokter</div>
                        </a>
                    </li>
                    <li class="absolute flex items-center justify-center inset-x-0 mt-[140px]">
                        @php
                            $pengajuandokter = [
                                'pengajuan-dokter',
                                'lihat-pengajuan-dokter-tambah',
                                'lihat-pengajuan-dokter-ubah',
                                'lihat-pengajuan-dokter-hapus',
                            ];
                        @endphp
                        <a href="/pengajuan-dokter" type="button"
                            class="group w-[90%] h-[50px] flex gap-6 text-lg font-medium
        @if (in_array(Request::path(), $pengajuandokter)) rounded-lg bg-[#534B3C] text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            text-black rounded-lg bg-[#EEE7DA] kotak-base hover:bg-[#534B3C] hover:text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif">
                            <div class="text-center justify-center items-center flex font-bold m-auto">Pengajuan Dokter
                            </div>
                        </a>
                    </li>
                    {{-- data pengajuan --}}
                    <li class="absolute flex items-center justify-center inset-x-0 mt-[200px]">
                        @php
                            $datapengajuan = [
                                'data-pengajuan',
                                'lihat-data-pengajuan-tambah',
                                'lihat-data-pengajuan-ubah',
                                'lihat-data-pengajuan-hapus',
                            ];
                        @endphp
                        <a href="/data-pengajuan" type="button"
                            class="group w-[90%] h-[50px] flex gap-6 text-lg font-medium
        @if (in_array(Request::path(), $datapengajuan)) rounded-lg bg-[#534B3C] text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            text-black rounded-lg bg-[#EEE7DA] kotak-base hover:bg-[#534B3C] hover:text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif">
                            <div class="text-center justify-center items-center flex font-bold m-auto">Data Pengajuan
                            </div>
                        </a>
                    </li>
                    {{-- artikel kesehatan --}}
                    <li class="absolute flex items-center justify-center inset-x-0 mt-[260px]">
                        @php
                            $artikelkesehatan = ['artikel-kesehatan', 'buat-artikel', 'edit-artikel', 'lihat-artikel'];
                        @endphp
                        <a href="/artikel-kesehatan" type="button"
                            class="group w-[90%] h-[50px] flex gap-6 text-lg font-medium
        @if (in_array(Request::path(), $artikelkesehatan)) rounded-lg bg-[#534B3C] text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            text-black rounded-lg bg-[#EEE7DA] kotak-base hover:bg-[#534B3C] hover:text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif">
                            <div class="text-center justify-center items-center flex font-bold m-auto">Artikel Kesehatan
                            </div>
                        </a>
                    </li>
                    <li class="absolute w-full -inset-x-1 bottom-0">
                        <a type="button" id="logOut" href="/login"
                            class="gap-3 w-52 py-1 mb-5 flex items-start justify-start m-auto rounded-md kotak bg-[#534B3C] hover:bg-[#443c2e] text-white p-2 pt-2 pb-2">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="30" height="30" fill="url(#pattern0)" />
                                <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1"
                                        height="1">
                                        <use xlink:href="#image0_119_345" transform="scale(0.0104167)" />
                                    </pattern>
                                    <image id="image0_119_345" width="96" height="96"
                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAADX0lEQVR4nO2dzU4UQRDHSw+iQtSDifoy4ov48QpK1DfQxAuJYiTxwAsgEA/GoxfBJ1A8LSHBZdj6z+ry4bFMZYfEkJ01BGGqauqXdEI4dddvuqd6pqeWKEmSJEmSJEmSJEmSJEmOSb/fv8bMDwAsA1gHsAdAjLW9qm9LzHxf++xedKfTuQjgCTP3DQRYjtOYuQTwWEQmyCM7Ozu3AHxpOpA4eVsriuImeQs+M28YCJ78p9mw4UaCTtkgV74ckbDqYjkC8LTpYOH02gw5yHbG3XAXy7Kc7na7k2SMbrc7qX3TLGjMLEBZllfJKlWqWdf5h+QEADNjxnGPrFLl+aM6/o6cAY9jAfB9VKfLsrxNziiHy9EoAetkFQC7ozpdFMUUOaMoiqkaAbtklbp1k5zCIxIK3SGTVaIJADA3YjwvySrRBGxubl5i5nkA+9qY+Y3+j6wSTcAhInJOG1knqgA3pICGSQENkwIaJmgW9LbKgJQXph9JRxPAw+Af3Yh9MCshkgAROV93eMCshEgCFACDMY+l7UkIKGC2bkwmJUQTICITGmQ3EqIJUETkAjO//4eEj3oGipomogBXEqIKcCMhsgAXEqILMC+hDQJMS2iLALMS2iTApISTCtja2rrMzK+Z+ee4QXlrZ7ZZO6mA6gV44wHD6Uh4blpA9fTxoOlA4fTajxSAFNDaJQjAM9Mz4PAVIIBXHj/qQ4SbsDckWhrqCbEW/DYJEIvBb4sAsRr8NggQy8GPLkCsBz+yAPEQ/KgCxEvwIwqQPJbSLLorN7HDbeMMkOHT2X03wQ8q4Leb4EcToABYcBP8iAKK4dfyC9VM0CoAs2aDH1HAIS4+UY0swA0poGFSQMNEFSBZqqAZqoNi89VxmQP9O4t1nCF6Sm/EjJ4jq0RbgthhwaYwJcuY+UrNBfWLHBbtmyZn9Hq9Ox6L9tUVPV0iZwBYqRnLIllF6+67Lfv7F1q2vm4cvV7vLhkvXVyOkbCsU9tq6eLecNlZcVu6+F9Xj/fGHsovV+Xr1wIG/7O+oCcP6I8dMHMnUPA729vbN8gTg8HgOjN/ChD8VTe/nnEUnbKa/ejNy2HgAeCRm2VnHJo5aN19Lf0O4Fvdjrnhtgvgq/ZRU03z2U6SJEmSJEmSJEmSJElCkfgDeHE5v7F7BaMAAAAASUVORK5CYII=" />
                                </defs>
                            </svg>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </aside>
