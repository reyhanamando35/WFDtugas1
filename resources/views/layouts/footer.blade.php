<style>
    .footer-bg {
        position: relative;
        background-image: url('{{ asset('footer-bangunan3.jpg') }}');
        background-size: cover;
        background-position: center;
    }
    
    .footer-bg::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.60); /* Mengatur transparansi dengan warna hitam */
        z-index: 0; /* Agar overlay berada di atas gambar */
    }
    
    .footer-content {
        position: relative;
        z-index: 1; /* Teks dan konten berada di atas overlay */
    }
    
    </style>
    
    <footer class="footer-bg text-white py-8 mt-12 bottom-0">
        {{-- <div class="inset-0 bg-black bg-opacity-75"></div> --}}
        <div class="footer-content max-w-6xl mx-auto px-6 md:flex md:justify-between">
            <div>
                <h4 class="text-lg font-semibold">Customer Service</h4>
                <p class="text-sm text-gray-300">📞 +62 812-3456-7890</p>
                <p class="text-sm text-gray-300">📧 support@hanhome.com</p>
                <p class="text-sm text-gray-300">🕘 08:00 - 17:00 WIB</p>
            </div>
    
            <div class="mt-6 md:mt-0">
                <h4 class="text-lg font-semibold">Store Location 🏬</h4>
                <div class="col-12 col-md-4 ">
                    <p class="text-sm text-gray-300 mb-2">
                        <a href="https://goo.gl/maps/JRZV5Mi5x3wuZB238">
                            Jl. Dharmahusada Indah Timur 15 / Blok V 305,<br>
                            Surabaya 60115<br>
    
                        </a>
    
                        <a href="tel:0315954103">Ph. (031) 5954103</a><br>
                        fax. 59175350<br>
                    </p>
                    <p class="text-sm text-gray-300 mb-2">
                        <a href="https://maps.app.goo.gl/jeuFcSgA468JbeCF6">
                            Jl. Graha Famili R-62, Surabaya 60228
                            <br>
                        </a>
    
                        <a href="tel:+62895710448888">Ph. 0895710448888</a>
                    </p>
                    <p class="text-sm text-gray-300 mb-2">
                        <a href="https://goo.gl/maps/iGXxeeww5uCjxC6S7">
                            Northwest Boulevard NV - 1 / 60, Surabaya, 60196
                            <br>
                        </a>
    
                        <a href="tel:+6281348881711">Ph. (081) 34 888 1711</a>
                    </p>
                    <p class="text-sm text-gray-300 mb-2">
                        <a href="https://goo.gl/maps/b86SubdytV8fEvnK6">
                            Jl. Untung Suropati No.42-A, Surabaya 60264<br>
                        </a>
    
                        <a href="tel:59175350">Ph. (031) 5917 5350</a>
    
                    </p>
                </div>
            </div>
    
            <div class="mt-6 md:mt-0">
                <h4 class="text-lg font-semibold">Follow Us</h4>
                <div class="flex gap-4 mt-2">
                    <a href="https://www.instagram.com/" class="hover:opacity-75">
                        <img src="{{ asset('ig.jpg') }}" alt="Instagram" class="w-8 h-8">
                    </a>
                    <a href="https://x.com/home" class="hover:opacity-75">
                        <img src="{{ asset('x.jpg') }}" alt="X" class="w-8 h-8">
                    </a>
                    <a href="https://www.tiktok.com" class="hover:opacity-75" target="_blank">
                        <img src="{{ asset('tiktok.png') }}" alt="TikTok" class="w-8 h-8">
                    </a>                
                </div>
            </div>
        </div>
    </footer>