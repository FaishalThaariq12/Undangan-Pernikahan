<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Undangan Pernikahan | {{ $namaPria ?? 'Nama Pria' }} & {{ $namaWanita ?? 'Nama Wanita' }}</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Great+Vibes&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
    }

    .font-greatvibes {
      font-family: 'Great Vibes', cursive;
    }

    [x-cloak] {
      display: none !important;
    }
  </style>
</head>

<body class="bg-gradient-to-br from-amber-50 via-white to-emerald-50 min-h-screen">
  <!-- Splash Screen -->
  <div id="splash" class="fixed inset-0 flex flex-col items-center justify-center bg-white z-50 transition-opacity duration-700" style="background: linear-gradient(135deg, #fef3c7 0%, #f0fdf4 100%);">
    <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=facearea&w=400&q=80" alt="Pasangan" class="w-36 h-36 object-cover rounded-full shadow-lg mb-6 border-4 border-amber-300">
    <h1 class="text-4xl md:text-5xl font-greatvibes text-emerald-700 mb-2 animate-bounce">{{ $namaPria ?? 'Nama Pria' }} &amp; {{ $namaWanita ?? 'Nama Wanita' }}</h1>
    <button onclick="document.getElementById('splash').style.display='none'; document.body.style.overflow='auto';" class="mt-6 px-8 py-3 bg-gradient-to-r from-amber-400 to-emerald-500 text-white rounded-full shadow-lg font-bold text-lg flex items-center gap-2 hover:scale-105 transition"><i class="fa-solid fa-paper-plane"></i> Buka Undangan</button>
  </div>

  <script>
    document.body.style.overflow = 'hidden';
  </script>
  <div id="main" class="relative z-10">
    <!-- Profil Mempelai -->
    <section class="py-10 px-4 text-center bg-white/90 shadow-lg rounded-2xl max-w-2xl mx-auto mt-10 animate-fade-in">
      <p class="text-lg mb-2 text-emerald-700 font-semibold">Assalamualaikum Warahmatullahi Wabarakatuh</p>
      <p class="mb-4 text-gray-700">Dengan memohon rahmat dan ridho Allah SWT, kami bermaksud mengundang Bapak/Ibu/Saudara/i ke acara pernikahan kami.</p>
      <div class="flex flex-col md:flex-row items-center justify-center gap-8 mt-6">
        <div class="flex flex-col items-center">
          <img src="https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91?auto=format&fit=facearea&w=200&q=80" alt="Mempelai Pria" class="w-28 h-28 object-cover rounded-full shadow border-2 border-amber-300 mb-2">
          <span class="block text-xl font-greatvibes text-amber-700">{{ $namaPria ?? 'Nama Pria' }}</span>
          <span class="block text-xs text-gray-500">Putra dari</span>
          <span class="block font-bold text-sm">Bpk. Nama Ayah Pria & Ibu Nama Ibu Pria</span>
        </div>
        <span class="text-3xl font-greatvibes text-emerald-500">&</span>
        <div class="flex flex-col items-center">
          <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=facearea&w=200&q=80" alt="Mempelai Wanita" class="w-28 h-28 object-cover rounded-full shadow border-2 border-amber-300 mb-2">
          <span class="block text-xl font-greatvibes text-amber-700">{{ $namaWanita ?? 'Nama Wanita' }}</span>
          <span class="block text-xs text-gray-500">Putri dari</span>
          <span class="block font-bold text-sm">Bpk. Nama Ayah Wanita & Ibu Nama Ibu Wanita</span>
        </div>
      </div>
    </section>

    <!-- Detail Acara -->
    <section class="py-10 px-4 mt-10 max-w-2xl mx-auto animate-fade-in">
      <h2 class="text-xl font-bold mb-6 text-center text-amber-700 flex items-center justify-center gap-2"><i class="fa-solid fa-calendar-days text-amber-400"></i> Informasi Acara</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center border border-amber-100">
          <span class="text-amber-600 text-lg font-bold mb-2 flex items-center gap-2"><i class="fa-solid fa-ring"></i> Akad Nikah</span>
          <span class="mb-1">Sabtu, 10 Januari 2026</span>
          <span class="mb-1">08.00 WIB</span>
          <span class="mb-1">Masjid Agung, Kota Contoh</span>
          <a href="https://goo.gl/maps/2Qe4Qw2Qe4Qw2Qe4A" target="_blank" class="mt-2 px-4 py-2 bg-amber-400 hover:bg-amber-500 text-white rounded-full text-sm font-bold flex items-center gap-2 shadow"><i class="fa-solid fa-location-dot"></i> Lihat Lokasi</a>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center border border-amber-100">
          <span class="text-amber-600 text-lg font-bold mb-2 flex items-center gap-2"><i class="fa-solid fa-champagne-glasses"></i> Resepsi</span>
          <span class="mb-1">Sabtu, 10 Januari 2026</span>
          <span class="mb-1">11.00 WIB - Selesai</span>
          <span class="mb-1">Gedung Serbaguna, Kota Contoh</span>
          <a href="https://goo.gl/maps/2Qe4Qw2Qe4Qw2Qe4A" target="_blank" class="mt-2 px-4 py-2 bg-emerald-500 hover:bg-emerald-600 text-white rounded-full text-sm font-bold flex items-center gap-2 shadow"><i class="fa-solid fa-location-dot"></i> Lihat Lokasi</a>
        </div>
      </div>
    </section>

    {{-- 4. Cerita Cinta (Love Story) --}}
    <section class="py-10 px-4 mt-10 max-w-2xl mx-auto animate-fade-in">
      <h2 class="text-xl font-bold mb-6 text-center">Our Journey</h2>
      <div class="relative border-l-2 border-amber-400 ml-4">
        <div class="mb-8 ml-6 animate-slide-down">
          <div class="absolute w-4 h-4 bg-amber-400 rounded-full -left-2 top-2"></div>
          <h3 class="font-bold">Pertemuan Pertama</h3>
          <p class="text-gray-600">2018 - Bertemu di kampus</p>
        </div>
        <div class="mb-8 ml-6 animate-slide-down">
          <div class="absolute w-4 h-4 bg-amber-400 rounded-full -left-2 top-2"></div>
          <h3 class="font-bold">Lamaran</h3>
          <p class="text-gray-600">2025 - Melamar di hadapan keluarga</p>
        </div>
        <div class="mb-8 ml-6 animate-slide-down">
          <div class="absolute w-4 h-4 bg-amber-400 rounded-full -left-2 top-2"></div>
          <h3 class="font-bold">Tunangan</h3>
          <p class="text-gray-600">2025 - Resmi bertunangan</p>
        </div>
      </div>
    </section>

    <!-- Galeri Prewedding -->
    <section class="py-10 px-4 mt-10 max-w-2xl mx-auto animate-fade-in">
      <h2 class="text-xl font-bold mb-6 text-center text-emerald-700 flex items-center justify-center gap-2"><i class="fa-solid fa-image text-amber-400"></i> Galeri Prewedding</h2>
      <!-- Ganti nama file sesuai gambar yang kamu upload ke /public/img/ -->
      <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <img src="/img/galeri1.jpg" alt="Galeri 1" class="rounded-xl shadow-lg cursor-pointer object-cover h-40 w-full" onclick="openLightbox(this.src)">
        <img src="/img/galeri2.jpg" alt="Galeri 2" class="rounded-xl shadow-lg cursor-pointer object-cover h-40 w-full" onclick="openLightbox(this.src)">
        <img src="/img/galeri3.jpg" alt="Galeri 3" class="rounded-xl shadow-lg cursor-pointer object-cover h-40 w-full" onclick="openLightbox(this.src)">
        <img src="/img/galeri4.jpg" alt="Galeri 4" class="rounded-xl shadow-lg cursor-pointer object-cover h-40 w-full" onclick="openLightbox(this.src)">
        <img src="/img/galeri5.jpg" alt="Galeri 5" class="rounded-xl shadow-lg cursor-pointer object-cover h-40 w-full" onclick="openLightbox(this.src)">
        <img src="/img/galeri6.jpg" alt="Galeri 6" class="rounded-xl shadow-lg cursor-pointer object-cover h-40 w-full" onclick="openLightbox(this.src)">
      </div>
      <div id="lightbox" class="fixed inset-0 bg-black bg-opacity-80 items-center justify-center z-50 hidden" onclick="closeLightbox()">
        <img id="lightbox-img" src="" class="max-h-[80vh] rounded shadow-lg">
      </div>
      <script>
        function openLightbox(src) {
          var lb = document.getElementById('lightbox');
          lb.classList.remove('hidden');
          lb.classList.add('flex');
          document.getElementById('lightbox-img').src = src;
        }

        function closeLightbox() {
          var lb = document.getElementById('lightbox');
          lb.classList.remove('flex');
          lb.classList.add('hidden');
        }
      </script>
    </section>

    <!-- Audio Background & Mute Button -->
    <div class="fixed bottom-6 right-6 z-50 flex flex-col items-end">
      <!-- Ganti nama file sesuai audio yang kamu upload ke /public/audio/ -->
      <audio id="bg-music" src="/audio/bg-music.mp3" autoplay loop></audio>
      <button id="music-btn" onclick="toggleMusic()" class="bg-white border-2 border-emerald-400 hover:bg-emerald-100 text-emerald-600 rounded-full shadow-lg p-4 flex items-center justify-center text-2xl transition">
        <i id="music-icon" class="fa-solid fa-volume-up"></i>
      </button>
    </div>
    <script>
      var music = document.getElementById('bg-music');
      var icon = document.getElementById('music-icon');

      function toggleMusic() {
        if (music.paused) {
          music.play();
          icon.classList.remove('fa-volume-mute');
          icon.classList.add('fa-volume-up');
        } else {
          music.pause();
          icon.classList.remove('fa-volume-up');
          icon.classList.add('fa-volume-mute');
        }
      }
    </script>

    <!-- RSVP / Ucapan Doa -->
    <section class="py-10 px-4 mt-10 max-w-2xl mx-auto animate-fade-in">
      <h2 class="text-xl font-bold mb-6 text-center text-amber-700 flex items-center justify-center gap-2"><i class="fa-solid fa-envelope-open-text text-emerald-400"></i> RSVP & Ucapan</h2>
      <form id="rsvp-form" method="POST" action="{{ route('rsvp.store') }}" class="mb-6 bg-white/90 rounded-xl shadow-lg p-6">
        @csrf
        <input type="text" name="nama" placeholder="Nama" class="w-full mb-2 p-2 border border-amber-200 rounded focus:ring-2 focus:ring-amber-400" required>
        <select name="kehadiran" class="w-full mb-2 p-2 border border-amber-200 rounded focus:ring-2 focus:ring-amber-400" required>
          <option value="">Kehadiran</option>
          <option value="Hadir">Hadir</option>
          <option value="Tidak Hadir">Tidak Hadir</option>
        </select>
        <textarea name="ucapan" placeholder="Ucapan untuk mempelai" class="w-full mb-2 p-2 border border-amber-200 rounded focus:ring-2 focus:ring-amber-400" required></textarea>
        <button type="submit" class="w-full bg-gradient-to-r from-amber-400 to-emerald-500 hover:from-amber-500 hover:to-emerald-600 text-white py-2 rounded-full font-bold flex items-center justify-center gap-2 text-lg shadow"><i class="fa-solid fa-paper-plane"></i> Kirim RSVP</button>
        <div id="rsvp-success" class="text-green-600 mt-2 hidden">Ucapan berhasil dikirim!</div>
      </form>
      <div class="bg-white/90 rounded-xl shadow p-4 max-h-60 overflow-y-auto" id="rsvp-list">
        <div class="text-center text-gray-400">Memuat ucapan...</div>
      </div>
      <script>
        document.getElementById('rsvp-form').addEventListener('submit', async function(e) {
          e.preventDefault();
          const form = e.target;
          const data = new FormData(form);
          const res = await fetch(form.action, {
            method: 'POST',
            headers: {
              'X-Requested-With': 'XMLHttpRequest',
              'X-CSRF-TOKEN': data.get('_token')
            },
            body: data
          });
          if (res.ok) {
            form.reset();
            document.getElementById('rsvp-success').classList.remove('hidden');
            setTimeout(() => document.getElementById('rsvp-success').classList.add('hidden'), 2000);
            loadRsvp();
          }
        });
        async function loadRsvp() {
          const list = document.getElementById('rsvp-list');
          list.innerHTML = '<div class="text-center text-gray-400">Memuat ucapan...</div>';
          const res = await fetch('/rsvp');
          if (res.ok) {
            const data = await res.json();
            if (data.length === 0) {
              list.innerHTML = '<div class="text-center text-gray-400">Belum ada ucapan.</div>';
            } else {
              list.innerHTML = data.map(u => `<div class='mb-2'><span class='font-bold text-emerald-700'>${u.nama}</span> <span class='text-xs text-gray-500'>(${u.kehadiran})</span><p class='text-gray-700'>${u.ucapan}</p></div>`).join('');
            }
          }
        }
        loadRsvp();
      </script>
    </section>

    {{-- 8. Amplop Digital (Opsional) --}}
    <section class="py-10 px-4 mt-10 max-w-2xl mx-auto animate-fade-in">
      <h2 class="text-xl font-bold mb-6 text-center">Amplop Digital</h2>
      <div class="bg-white rounded-lg shadow p-6 text-center">
        <p class="mb-2">Bagi yang ingin mengirimkan tanda kasih, dapat melalui rekening berikut:</p>
        <div class="font-bold text-lg">BCA 1234567890 a.n. Aiman</div>
        <img src="/img/qrcode.png" alt="QR Code" class="mx-auto mt-4 w-32 h-32">
      </div>
    </section>

    {{-- 9. Informasi Tambahan --}}
    <section class="py-10 px-4 mt-10 max-w-2xl mx-auto animate-fade-in">
      <h2 class="text-xl font-bold mb-6 text-center">Informasi Tambahan</h2>
      <div class="bg-white rounded-lg shadow p-6 text-center">
        <p class="mb-2">Dresscode: Batik</p>
        <p class="mb-2">Countdown ke hari H:</p>
        <!-- Countdown akan otomatis update setiap detik -->
        <div id="countdown" class="font-bold text-2xl"></div>
      </div>
      <!-- Script Countdown ke hari H (ubah tanggal sesuai kebutuhan) -->
      <script>
        // Tanggal dan waktu acara (format: YYYY-MM-DDTHH:MM:SS)
        var eventDate = new Date('2026-01-10T08:00:00');
        var countdown = document.getElementById('countdown');
        setInterval(function() {
          var now = new Date();
          var diff = eventDate - now;
          if (diff > 0) {
            var days = Math.floor(diff / (1000 * 60 * 60 * 24));
            var hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
            var mins = Math.floor((diff / (1000 * 60)) % 60);
            countdown.textContent = days + ' hari ' + hours + ' jam ' + mins + ' menit';
          } else {
            countdown.textContent = 'Hari ini!';
          }
        }, 1000);
      </script>
    </section>

    <!-- Bagikan Undangan (Share Section) -->
    <section class="py-10 px-4 mt-10 max-w-2xl mx-auto animate-fade-in text-center">
      <h2 class="text-xl font-bold mb-6 text-emerald-700 flex items-center justify-center gap-2">
        <i class="fa-solid fa-share-nodes text-amber-400"></i> Bagikan Undangan
      </h2>
      <div class="flex flex-wrap justify-center gap-4">
        <!-- Tombol share ke WhatsApp -->
        <a href="https://wa.me/?text={{ urlencode('Kepada Yth.\nBapak/Ibu/Saudara/i\n'.($namaTamu ?? '').'\n\nAssalamualaikum Warahmatullahi Wabarakatuh\nTanpa mengurangi rasa hormat, perkenankan kami mengundang Bapak/Ibu/Saudara/i, teman sekaligus sahabat, untuk menghadiri acara pernikahan kami. Berikut link undangan kami, untuk info lengkap dari acara, bisa kunjungi :\n'.url()->full().'\nMerupakan suatu kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan untuk hadir dan memberikan doa restu.\nWassalamualaikum Warahmatullahi Wabarakatuh\nTerima Kasih\nHormat kami,\nAiman dan Fadhillah') }}"
          target="_blank"
          class="bg-emerald-500 hover:bg-emerald-600 text-white px-5 py-2 rounded-full font-bold flex items-center gap-2 shadow">
          <i class="fa-brands fa-whatsapp"></i> WhatsApp
        </a>
        <!-- Tombol share ke Telegram -->
        <a href="https://t.me/share/url?url={{ urlencode(url()->full()) }}"
          target="_blank"
          class="bg-blue-400 hover:bg-blue-600 text-white px-5 py-2 rounded-full font-bold flex items-center gap-2 shadow">
          <i class="fa-brands fa-telegram"></i> Telegram
        </a>
        <!-- Tombol copy link undangan -->
        <button onclick="navigator.clipboard.writeText(window.location.href);alert('Link disalin!')"
          class="bg-amber-400 hover:bg-amber-500 text-white px-5 py-2 rounded-full font-bold flex items-center gap-2 shadow">
          <i class="fa-solid fa-link"></i> Copy Link
        </button>
      </div>
    </section>
  </div>
</body>

</html>