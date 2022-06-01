@include ('navbar')

<html>
    <div class="flex font-poppins font-regular pt-6 pl-8">
        <a href="booking.php"> <button class="pt-1">    
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
            </svg>
        </button></a>
        <span class="px-8 text-4xl">Payment</span>
    </div>
    <div class="font-poppins font-semibold pt-8 px-60">
        <div class="flex text-xl justify-between">
            <span>ID Transaksi</span>
            <span>1C3219577</span>
        </div>
        <div class="flex text-xl justify-between pt-1">
            <span>Tanggal Transaksi</span>
            <span>15 Mei 2022</span>
        </div>
    </div>
    <div class="font-poppins pt-8 px-60">
        <div class="box-border h-40 w-100 px-4 pt-3 rounded-b-lg border-main shadow-md bg-sec" style="border-width: 1px;">
            <div class="flex justify-between font-semibold">
                <span class="text-xl">Personal Space</span>
                <span class="text-l pt-1">Rp270.000</span>
            </div>
            <div class="flex flex-wrap text-l justify-between w-100 pb-2">
                <div class="flex text-l justify-between pt-1 w-96">
                    <span>Price (/hari)</span>
                    <span>Rp90.000</span>
                </div>
                <div class="flex text-l justify-between w-96">
                    <span>Book for</span>
                    <span>3 Hari</span>
                </div>
                <a href="voucher.php"><button class="text-sm border-main rounded-md py-1 px-1 shadow" style="border-width: 1px;">
                    Voucher
                </button></a>
            </div>
            <hr class="border-main">
            <div class="flex text-xl justify-end font-semibold pt-2">
                <span>Rp270.000</span>
            </div>
        </div>
    </div>
    <div class="font-poppins font-semibold pt-6 px-60">
        <div class="flex text-xl justify-between">
            <span>Metode Pembayaran</span>
            <span>Unggah Bukti Pembayaran</span>
        </div>
        <div class="flex text-sm justify-between pt-2">
            <button id="choose" class="border-sec rounded-md py-1 px-3 shadow" style="border-width: 1px;">
                Choose
            </button>
            <form method="post" enctype="multipart/form-data">
            <input type="file" class="border-sec rounded-md py-1 px-3 shadow" style="border-width: 1px;">
            </input>
            </form>
        </div>
    </div>
    <div class="flex justify-end pt-8 px-60 pb-8">
        <a href="pembayaranfin.php"><button class="bg-main text-[color:white] text-lg font-semibold border-sec rounded-md py-1 px-8 shadow" style="border-width: 1px;">
            Confirm
        </button></a>
    </div>
    <div id="modal" tabindex="-1" aria-hidden="true" class="px-96 hidden overflow-y-auto overflow-x-hidden fixed z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center" style="background-color: rgba(128, 128, 128, 0.7)">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <div class="relative rounded-lg shadow" style="background-color: white;">
                <button type="button" class="close absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <div class="py-4 px-6 rounded-t border-b">
                <h3 class="text-base font-semibold text-gray-900 lg:text-xl">
                Pilih Metode
                </h3>
                </div>

                <div class="px-6 pb-2">
                    <ul class="my-4 space-y-1">
                    <li>
                        <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow ">
                        <span class="flex-1 ml-3 whitespace-nowrap">BCA</span>
                        <span class="inline-flex items-center justify-center px-2 py-0.5 ml-3 text-xs font-medium text-gray-500 bg-gray-200 rounded ">Popular</span>
                        </a>
                    </li><hr class="border-sec">
                    <li>
                        <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow ">
                        <span class="flex-1 ml-3 whitespace-nowrap">BNI</span>
                        </a>
                    </li><hr class="border-sec">
                    <li>
                        <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow ">
                        <span class="flex-1 ml-3 whitespace-nowrap">BRI</span>
                        </a>
                    </li><hr class="border-sec">
                    <li>
                        <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow ">
                        <span class="flex-1 ml-3 whitespace-nowrap">Mandiri</span>
                        </a>
                    </li><hr class="border-sec">
                    <li>
                        <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow ">
                        <span class="flex-1 ml-3 whitespace-nowrap">GoPay</span>
                        </a>
                    </li><hr class="border-sec">
                    <li>
                        <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow ">
                        <span class="flex-1 ml-3 whitespace-nowrap">OVO</span>
                        </a>
                    </li><hr class="border-sec">
                    <li>
                        <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow ">
                        <span class="flex-1 ml-3 whitespace-nowrap">DANA</span>
                        </a>
                    </li><hr class="border-sec">
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        var modal = document.getElementById("modal");
        var btn = document.getElementById("choose");
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
        modal.style.display = "block";
        }

        span.onclick = function() {
        modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        }
    </script>
</html>