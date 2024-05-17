<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OTP</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/landing/prov-lampung2.svg">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
    <style>
        .center-input {
            text-align: center;
        }

        .center-input::placeholder {
            text-align: center;
            letter-spacing: 0px;
        }

        #otp {
            letter-spacing: 10px;
        }
    </style>
</head>

<body>
    <div class="m-0 box-border md:flex h-screen w-full bg-[#84A584]">
        <div
            class="left w-full md:w-1/2 lg:w-1/2 flex-col bg-white items-center justify-center lg:flex relative hidden">
            <div class="absolute top-5 right-5 text-end">
                <span class="font-bold text-[30px]">WebGIS <br></span>
                <span class="font-bold text-[30px]">Dokter Spesialis <br></span>
                <span class="text-[#534B3C] text-[20px]">Bandar Lampung <br></span>
            </div>
            <div class="">
                <Image
                    src="/Images/logo-login.svg"
                    alt="logo-dashboard" width={500} height={500} />
            </div>
        </div>
        <div class="w-full md:w-1/2 relative">
            <div class="h-screen flex flex-col items-center justify-center">
                <div
                    class="text-center z-10 bg-white pl-7 pr-7 pt-5 pb-5 w-[90%] md:w-[70%] rounded-xl drop-shadow-2xl">
                    <div class="mb-7">
                        <div class="mb-7 text-[30px] font-medium">Kode OTP</div>
                    </div>
                    <div class="text-black">
                        <div class="mb-[20px]">
                            <input type="text" name="otp" id="otp" placeholder="Masukkan Kode OTP 6 digit"
                                class="mt-1 p-2 w-full border rounded-md border-[#566356] dark:focus:ring-[#6C806C] focus:ring-[#6C806C] center-input"
                                pattern="\d{6}" title="Masukkan 6 digit angka" required>
                        </div>
                    </div>
                    <button type="button" onClick={handleFormSubmit}
                        class="text-white w-[40%] bg-[#6C806C] hover:bg-[#566356] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 mt-2 dark:bg-[#6C806C] dark:hover:bg-[#566356] focus:outline-none">
                        Kirim
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script>
        document.getElementById('otp').addEventListener('input', function() {
            var inputValue = this.value;
            if (inputValue.length > 6) {
                this.value = inputValue.slice(0, 6);
            }
        });
    </script>
</body>

</html>