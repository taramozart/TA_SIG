<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Baru Dokter</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
</head>

<body class="bg-[#FAF1E4]">
    <x-sidebar-admin />
    <div class="pl-[280px] min-h-screen pt-2 pr-5 pb-[85px] full-height">
        <div class="flex justify-between gap-5">
            <div class="w-[60%]">
                <div class="text-black text-[26px] font-bold">Peta Kota Bandar Lampung</div>
                <div class=" items-center justify-center w-full mt-5">
                    <div class="rounded-lg border-4 border-[#BCB3A3]">
                        {{-- maps nya disini --}}
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d36109.04876489097!2d105.30253506576533!3d-5.423438410791156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40db6740f7a5c5%3A0x5c4cfe9f85ca1b0a!2sBukit%20AsLan!5e0!3m2!1sen!2sid!4v1710555947290!5m2!1sen!2sid"
                            class="w-full" height="630" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="w-[40%]">
                <div class="text-black text-[26px] font-bold mb-5">Peta Kota Bandar Lampung</div>
                <div class="w-full mb-1">
                    <label htmlFor="name" class="text-black font-bold">Nama Dokter</label>
                    <input type="text" id="name"
                        class="border border-[#84A584] text-gray-900 text-sm rounded-md focus:ring-[#84A584] focus:border-[#84A584] px-2 w-full bg-transparent"
                        placeholder="Masukkan Nama" required />
                </div>
                <div class="w-full mb-1">
                    <label htmlFor="name" class="text-black font-bold">Bidang Spesialisasi</label>
                    <input type="text" id="name"
                        class="border border-[#84A584] text-gray-900 text-sm rounded-md focus:ring-[#84A584] focus:border-[#84A584] px-2 w-full bg-transparent"
                        placeholder="Masukkan Bidang Spesialisasi" required />
                </div>
                <div class="w-full mb-1">
                    <label htmlFor="name" class="text-black font-bold">Nomor Kontak</label>
                    <input type="text" id="name"
                        class="border border-[#84A584] text-gray-900 text-sm rounded-md focus:ring-[#84A584] focus:border-[#84A584] px-2 w-full bg-transparent"
                        placeholder="Masukkan Nomor Kontak" required />
                </div>
                <div class="w-full mb-1">
                    <label htmlFor="name" class="text-black font-bold">Jadwal Praktik</label>
                    <input type="text" id="name"
                        class="border border-[#84A584] text-gray-900 text-sm rounded-md focus:ring-[#84A584] focus:border-[#84A584] px-2 w-full bg-transparent"
                        placeholder="Masukkan Jadwal Praktik" required />
                </div>
                <div class="w-full mb-1">
                    <label htmlFor="name" class="text-black font-bold">Kecamatan</label>
                    <input type="text" id="name"
                        class=" border border-[#84A584] text-gray-900 text-sm rounded-md focus:ring-[#84A584] focus:border-[#84A584] px-2 w-full bg-transparent"
                        placeholder="Masukkan Kecamatan" required />
                </div>
                <div class="w-full mb-1 flex flex-col">
                    <label for="name" class="text-black font-bold mb-1">Alamat</label>
                    <textarea id="message" rows="4"
                        class="border border-[#84A584] text-gray-900 text-sm rounded-md focus:ring-[#84A584] focus:border-[#84A584] px-2 w-full h-[70px] bg-transparent"
                        placeholder="Masukkan Alamat"></textarea>
                </div>
                <div class="flex justify-between gap-5 mb-1">
                    <div class="div">
                        <label htmlFor="name"class="text-black font-bold">Latitude</label>
                        <input type="number" id="name"
                            class="border border-[#84A584] text-gray-900 text-sm rounded-md focus:ring-[#84A584] focus:border-[#84A584] px-2 w-full bg-transparent"
                            placeholder="Masukkan Latitude" required />
                    </div>
                    <div class="div">
                        <label htmlFor="name" class="text-black font-bold">Longitude</label>
                        <input type="number" id="name"
                            class="border border-[#84A584] text-gray-900 text-sm rounded-md focus:ring-[#84A584] focus:border-[#84A584] px-2 w-full bg-transparent"
                            placeholder="Masukkan Longitude" required />
                    </div>
                </div>
                <div class="w-full mb-1">
                    <label htmlFor="image" class="mb-1 text-black font-bold">Gambar</label>
                    <div class="relative">
                        <input type="file" id="image" accept="image/*" class="hidden" required
                            onchange="displayFileName()" />
                        <label for="image"
                            class="cursor-pointer bg-[#6C806C] text-white py-2 px-4 rounded-lg inline-block">
                            Unggah Gambar
                        </label>
                        <span id="file-name" class="text-[#8F8F8F] text-sm ml-2">Tidak ada gambar.</span>
                    </div>
                    <script>
                        function displayFileName() {
                            const fileInput = document.getElementById('image');
                            const fileNameSpan = document.getElementById('file-name');
                            if (fileInput.files.length > 0) {
                                fileNameSpan.textContent = fileInput.files[0].name;
                            } else {
                                fileNameSpan.textContent = 'Tidak ada gambar.';
                            }
                        }
                    </script>
                </div>
                <div class="mb-4 flex mt-5 m-auto justify-center">
                    <a href="">
                        <div
                            class="w-[145px]  text-center m-auto cursor-pointer bg-[#6C806C] text-white py-2 px-4 rounded-lg inline-block">
                            Simpan
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
