@include ('navbar')

<html>
    <div class="flex font-poppins font-regular pt-6 pl-8">
        <a href="payment"> <button class="pt-1">    
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
        <div class="flex text-xl justify-between pt-1">
            <span>Metode Pembayaran</span>
            <span>BCA</span>
        </div>
    </div>
    <div class="font-poppins pt-4 px-60">
        <div class="box-border h-12 w-100 px-4 pt-2 rounded-lg border-main shadow-md bg-sec" style="border-width: 1px;">
            <div class="flex justify-between font-semibold">
                <span class="text-xl">Personal Space</span>
                <span class="text-l pt-1">Rp270.000</span>
            </div>
        </div>
    </div>
    <div class="absolute h-10 w-10" style="left: 920px; top: 312px;">
        <img src="pic/paid.png">
    </div>
    <div class="flex justify-end pt-8 px-60 pb-8">
        <a href="home.php"><button class="bg-main text-[color:white] text-lg font-semibold border-sec rounded-md py-1 px-8 shadow" style="border-width: 1px;">
            Close
        </button></a>
    </div>
</html>