<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Undangan Pernikahan | {{ $namaPria ?? 'Aiman' }} & {{ $namaWanita ?? 'Fadhillah' }}</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,600;1,400&family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <script>
    document.addEventListener('alpine:init', () => {
      Alpine.store('music', {
        isPlaying: false,
        toggle() {
          const musicEl = document.getElementById('bg-music');
          if (this.isPlaying) {
            musicEl.pause();
          } else {
            musicEl.play();
          }
          this.isPlaying = !this.isPlaying;
        },
        playOnOpen() {
          const musicEl = document.getElementById('bg-music');
          musicEl.play().then(() => {
            this.isPlaying = true;
          }).catch(error => {
            console.log("Autoplay musik diblokir oleh browser.");
            this.isPlaying = false;
          });
        }
      });
    });
  </script>

  <style>
    :root {
      --bg-color: #FFFFFF;
      --soft-bg: #F9F6F2;
      --text-color: #5C5450;
      --heading-color: #3D3531;
      --primary-color: #B38B86;
      --accent-color: #8C9A85;
    }

    body {
      font-family: 'Montserrat', sans-serif;
      background-color: var(--bg-color);
      color: var(--text-color);
    }

    .font-serif {
      font-family: 'Lora', serif;
    }

    .reveal {
      opacity: 0;
      transform: translateY(30px);
      transition: opacity 1.2s, transform 1.2s;
      transition-timing-function: cubic-bezier(0.5, 0, 0, 1);
    }

    .reveal.active {
      opacity: 1;
      transform: translateY(0);
    }

    .btn-primary {
      background-color: var(--primary-color);
      color: white;
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #a17a75;
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(179, 139, 134, 0.3);
    }

    .petal {
      position: absolute;
      background-color: var(--primary-color);
      border-radius: 50% 0;
      opacity: 0.7;
      animation: fall linear infinite;
    }

    @keyframes fall {
      to {
        transform: translateY(105vh) rotate(360deg);
      }
    }
  </style>
</head>

<body class="opacity-0" x-data="{ copied: null }">

  <div id="splash-screen" class="fixed inset-0 z-50 flex flex-col items-center justify-center text-center p-4 bg-[var(--soft-bg)] overflow-hidden">
    <div class="absolute inset-0 pointer-events-none">
      <div class="petal" style="width: 15px; height: 10px; left: 10%; animation-duration: 10s; animation-delay: 0s;"></div>
      <div class="petal" style="width: 20px; height: 15px; left: 20%; animation-duration: 8s; animation-delay: 2s;"></div>
      <div class="petal" style="width: 10px; height: 8px; left: 35%; animation-duration: 12s; animation-delay: 4s;"></div>
      <div class="petal" style="width: 25px; height: 18px; left: 50%; animation-duration: 7s; animation-delay: 1s;"></div>
      <div class="petal" style="width: 18px; height: 12px; left: 65%; animation-duration: 9s; animation-delay: 3s;"></div>
      <div class="petal" style="width: 12px; height: 9px; left: 80%; animation-duration: 11s; animation-delay: 5s;"></div>
      <div class="petal" style="width: 22px; height: 16px; left: 90%; animation-duration: 8s; animation-delay: 0.5s;"></div>
    </div>
    <div class="relative z-10 text-[var(--heading-color)] reveal active">
      <p class="text-sm tracking-widest">THE WEDDING OF</p>
      <h1 class="text-5xl md:text-6xl font-serif my-4">{{ $namaPria ?? 'Aiman' }} &amp; {{ $namaWanita ?? 'Fadhillah' }}</h1>
      <div class="mt-8">
        <p class="text-sm">Kepada Yth. Bapak/Ibu/Saudara/i</p>
        <p class="font-semibold text-xl mt-1">{{ $namaTamu ?? 'Tamu Undangan' }}</p>
      </div>
      <button id="open-invitation" class="btn-primary font-bold py-3 px-8 rounded-full shadow-lg mt-8 text-lg flex items-center justify-center gap-3 mx-auto">
        <i class="fa-solid fa-envelope-open"></i> Buka Undangan
      </button>
    </div>
  </div>

  <main id="main-content" class="hidden relative z-10">

    <section id="hero" class="relative min-h-screen flex items-center justify-center text-center bg-cover bg-center" style="background-image: url('/img/foto_utama.jpg');">
      <div class="absolute inset-0 bg-black/30"></div>
      <div class="relative z-10 text-white p-4 reveal">
        <h1 class="text-6xl md:text-8xl font-serif">{{ $namaPria ?? 'Aiman' }} &amp; {{ $namaWanita ?? 'Fadhillah' }}</h1>
        <p class="text-xl mt-4">Dengan tulus kami mengundang Anda untuk merayakan cinta kami.</p>
      </div>
    </section>

    <section id="couple" class="py-24 px-4 bg-[var(--soft-bg)]">
      <div class="text-center max-w-4xl mx-auto reveal">
        <p class="italic text-lg">"Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang."</p>
        <p class="font-semibold mt-2">(QS. Ar-Rum: 21)</p>
        <div class="grid grid-cols-1 md:grid-cols-2 items-start justify-center gap-12 mt-16">
          <div class="flex flex-col items-center reveal">
            <div class="relative w-52 h-52">
              <svg class="absolute -top-4 -left-4 w-20 h-20 text-[var(--accent-color)] opacity-50" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 15a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm0-1.5a3.5 3.5 0 1 1 0-7 3.5 3.5 0 0 1 0 7z" />
                <path d="M10 0a1 1 0 0 1 1 1v1.5a1 1 0 1 1-2 0V1a1 1 0 0 1 1-1zM10 17.5a1 1 0 1 1-2 0V19a1 1 0 1 1 2 0v-1.5zM3.07 4.48a1 1 0 0 1 0-1.41l1.06-1.06a1 1 0 0 1 1.41 1.41L4.48 4.48a1 1 0 0 1-1.41 0zM14.48 15.52a1 1 0 0 1 0 1.41l-1.06 1.06a1 1 0 0 1-1.41-1.41l1.06-1.06a1 1 0 0 1 1.41 0zM1 10a1 1 0 0 1 1-1h1.5a1 1 0 1 1 0 2H2a1 1 0 0 1-1-1zM17.5 10a1 1 0 1 1 0 2H19a1 1 0 1 1 0-2h-1.5zM4.48 15.52a1 1 0 0 1-1.41 0l-1.06-1.06a1 1 0 1 1 1.41-1.41l1.06 1.06a1 1 0 0 1 0 1.41zM15.52 4.48a1 1 0 0 1 1.41 0l1.06 1.06a1 1 0 0 1-1.41 1.41l-1.06-1.06a1 1 0 0 1 0-1.41z" />
              </svg>
              <img src="/img/pria_profil.jpg" alt="Mempelai Pria" class="w-48 h-48 object-cover rounded-full shadow-xl absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
            </div>
            <h3 class="text-4xl font-serif text-[var(--heading-color)] mt-4">{{ $namaPria ?? 'Aiman' }}</h3>
            <div class="text-center mt-2">
              <p>Putra kesatu dari:</p>
              <p class="font-bold">Bapak Loremipsum</p>
              <p class="font-bold">Ibu Loremipsum</p>
              <a href="https://www.instagram.com/anastasiayasmeen/" target="_blank" class="text-sm text-[var(--primary-color)] hover:underline mt-1 inline-block"><i class="fa-brands fa-instagram"></i> @instagram_keluarga_pria</a>
            </div>
          </div>
          <div class="flex flex-col items-center reveal">
            <div class="relative w-52 h-52">
              <svg class="absolute -bottom-4 -right-4 w-20 h-20 text-[var(--accent-color)] opacity-50 transform rotate-180" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 15a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm0-1.5a3.5 3.5 0 1 1 0-7 3.5 3.5 0 0 1 0 7z" />
                <path d="M10 0a1 1 0 0 1 1 1v1.5a1 1 0 1 1-2 0V1a1 1 0 0 1 1-1zM10 17.5a1 1 0 1 1-2 0V19a1 1 0 1 1 2 0v-1.5zM3.07 4.48a1 1 0 0 1 0-1.41l1.06-1.06a1 1 0 0 1 1.41 1.41L4.48 4.48a1 1 0 0 1-1.41 0zM14.48 15.52a1 1 0 0 1 0 1.41l-1.06 1.06a1 1 0 0 1-1.41-1.41l1.06-1.06a1 1 0 0 1 1.41 0zM1 10a1 1 0 0 1 1-1h1.5a1 1 0 1 1 0 2H2a1 1 0 0 1-1-1zM17.5 10a1 1 0 1 1 0 2H19a1 1 0 1 1 0-2h-1.5zM4.48 15.52a1 1 0 0 1-1.41 0l-1.06-1.06a1 1 0 1 1 1.41-1.41l1.06 1.06a1 1 0 0 1 0 1.41zM15.52 4.48a1 1 0 0 1 1.41 0l1.06 1.06a1 1 0 0 1-1.41 1.41l-1.06-1.06a1 1 0 0 1 0-1.41z" />
              </svg>
              <img src="/img/wanita_profil.jpg" alt="Mempelai Wanita" class="w-48 h-48 object-cover rounded-full shadow-xl absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
            </div>
            <h3 class="text-4xl font-serif text-[var(--heading-color)] mt-4">{{ $namaWanita ?? 'Fadhillah' }}</h3>
            <div class="text-center mt-2">
              <p>Putri kedua dari:</p>
              <p class="font-bold">Bapak Loremipsum</p>
              <p class="font-bold">Ibu Loremipsum</p>
              <a href="https://www.instagram.com/anastasiayasmeen/" target="_blank" class="text-sm text-[var(--primary-color)] hover:underline mt-1 inline-block"><i class="fa-brands fa-instagram"></i> @instagram_keluarga_wanita</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="event" class="py-24 px-4">
      <div class="relative z-10 max-w-4xl mx-auto text-center">
        <h2 class="text-5xl md:text-6xl font-serif reveal text-[var(--heading-color)]">Save The Date</h2>
        <div id="countdown" class="flex justify-center gap-4 md:gap-8 my-8 text-3xl md:text-4xl font-light text-[var(--heading-color)] reveal">
          <div><span id="days">00</span>
            <p class="text-xs font-normal">Hari</p>
          </div>
          <div><span id="hours">00</span>
            <p class="text-xs font-normal">Jam</p>
          </div>
          <div><span id="minutes">00</span>
            <p class="text-xs font-normal">Menit</p>
          </div>
          <div><span id="seconds">00</span>
            <p class="text-xs font-normal">Detik</p>
          </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <div class="bg-white rounded-lg shadow-lg p-8 reveal">
            <i class="fa-solid fa-gem text-4xl text-[var(--accent-color)] mb-4"></i>
            <h3 class="text-3xl font-serif text-[var(--heading-color)]">Akad Nikah</h3>
            <p class="mt-4 font-semibold text-lg">Sabtu, 10 Agustus 2025</p>
            <p>09:00 WIB - Selesai</p>
            <p class="mt-2 text-gray-600">Masjid Agung, Kota Contoh</p>
            <a href="https://goo.gl/maps/2Qe4Qw2Qe4Qw2Qe4A" target="_blank" class="btn-primary font-bold py-2 px-6 rounded-full shadow-lg mt-6 inline-block text-sm"><i class="fa-solid fa-location-dot mr-2"></i>Lihat Peta</a>
          </div>
          <div class="bg-white rounded-lg shadow-lg p-8 reveal">
            <i class="fa-solid fa-champagne-glasses text-4xl text-[var(--accent-color)] mb-4"></i>
            <h3 class="text-3xl font-serif text-[var(--heading-color)]">Resepsi</h3>
            <p class="mt-4 font-semibold text-lg">Sabtu, 10 Agustus 2025</p>
            <p>11:00 - 14:00 WIB</p>
            <p class="mt-2 text-gray-600">Gedung Serbaguna, Kota Contoh</p>
            <a href="https://goo.gl/maps/2Qe4Qw2Qe4Qw2Qe4A" target="_blank" class="btn-primary font-bold py-2 px-6 rounded-full shadow-lg mt-6 inline-block text-sm"><i class="fa-solid fa-location-dot mr-2"></i>Lihat Peta</a>
          </div>
        </div>
      </div>
    </section>

    <section id="gallery" class="py-24 px-4 bg-[var(--soft-bg)]">
      <div class="max-w-6xl mx-auto text-center">
        <h2 class="text-5xl md:text-6xl font-serif reveal text-[var(--heading-color)]">Our Moments</h2>
        <div class="columns-2 md:columns-3 gap-4 mt-12 space-y-4">
          <div class="reveal"><img src="/img/galeri1.jpg" alt="Galeri 1" class="rounded-lg shadow-lg w-full break-inside-avoid cursor-pointer" onclick="openLightbox(this.src)"></div>
          <div class="reveal"><img src="/img/galeri2.jpg" alt="Galeri 2" class="rounded-lg shadow-lg w-full break-inside-avoid cursor-pointer" onclick="openLightbox(this.src)"></div>
          <div class="reveal"><img src="/img/galeri5.jpg" alt="Galeri 5" class="rounded-lg shadow-lg w-full break-inside-avoid cursor-pointer" onclick="openLightbox(this.src)"></div>
          <div class="reveal"><img src="/img/galeri3.jpg" alt="Galeri 3" class="rounded-lg shadow-lg w-full break-inside-avoid cursor-pointer" onclick="openLightbox(this.src)"></div>
          <div class="reveal"><img src="/img/galeri4.jpg" alt="Galeri 4" class="rounded-lg shadow-lg w-full break-inside-avoid cursor-pointer" onclick="openLightbox(this.src)"></div>
          <div class="reveal"><img src="/img/galeri6.jpg" alt="Galeri 6" class="rounded-lg shadow-lg w-full break-inside-avoid cursor-pointer" onclick="openLightbox(this.src)"></div>
        </div>
      </div>
    </section>

    <section id="gift" class="py-24 px-4">
      <div class="max-w-2xl mx-auto text-center" x-data="{ tab: 'digital' }">
        <h2 class="text-5xl md:text-6xl font-serif reveal text-[var(--heading-color)]">Wedding Gift</h2>
        <p class="mt-4 text-gray-600 reveal">Doa restu Anda merupakan karunia yang sangat berarti bagi kami. Namun, jika memberi adalah tanda kasih, kami dengan senang hati menerimanya.</p>
        <div class="mt-8 reveal">
          <div class="border-b border-gray-200">
            <nav class="-mb-px flex justify-center gap-6" aria-label="Tabs">
              <button @click="tab = 'digital'" :class="{ 'border-[var(--primary-color)] text-[var(--primary-color)]': tab === 'digital', 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': tab !== 'digital' }" class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">Amplop Digital</button>
              <button @click="tab = 'fisik'" :class="{ 'border-[var(--primary-color)] text-[var(--primary-color)]': tab === 'fisik', 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': tab !== 'fisik' }" class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">Kirim Hadiah</button>
            </nav>
          </div>
        </div>
        <div class="mt-8 text-left">
          <div x-show="tab === 'digital'" x-transition class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow-sm border">
              <p class="font-semibold">Bank BCA</p>
              <p id="bca-rek" class="text-lg">1234567890</p>
              <p class="text-sm">a.n. Fadhillah</p><button @click="copied = 'bca'; navigator.clipboard.writeText('1234567890'); setTimeout(() => copied = null, 2000)" class="text-xs bg-gray-200 hover:bg-gray-300 px-2 py-1 rounded mt-2"><span x-show="copied !== 'bca'">Salin Rekening</span><span x-show="copied === 'bca'">Tersalin!</span></button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-sm border">
              <p class="font-semibold">DANA / E-Wallet</p>
              <p id="dana-num" class="text-lg">081234567890</p>
              <p class="text-sm">a.n. Aiman</p><button @click="copied = 'dana'; navigator.clipboard.writeText('081234567890'); setTimeout(() => copied = null, 2000)" class="text-xs bg-gray-200 hover:bg-gray-300 px-2 py-1 rounded mt-2"><span x-show="copied !== 'dana'">Salin Nomor</span><span x-show="copied === 'dana'">Tersalin!</span></button>
            </div>
          </div>
          <div x-show="tab === 'fisik'" x-transition class="bg-white p-4 rounded-lg shadow-sm border">
            <p class="font-semibold">Alamat Pengiriman</p>
            <p id="alamat" class="text-sm">Jl. Kenangan Indah No. 10, Komplek Pindad, Bandung, Jawa Barat, 40284</p>
            <p class="text-sm mt-1">Penerima: Fadhillah / Aiman</p><button @click="copied = 'alamat'; navigator.clipboard.writeText(document.getElementById('alamat').innerText); setTimeout(() => copied = null, 2000)" class="text-xs bg-gray-200 hover:bg-gray-300 px-2 py-1 rounded mt-2"><span x-show="copied !== 'alamat'">Salin Alamat</span><span x-show="copied === 'alamat'">Tersalin!</span></button>
          </div>
        </div>
      </div>
    </section>

    <section id="rsvp" class="py-24 px-4 bg-[var(--soft-bg)]">
      <div class="max-w-2xl mx-auto text-center">
        <h2 class="text-5xl md:text-6xl font-serif reveal text-[var(--heading-color)]">Buku Tamu</h2>
        <p class="mt-4 text-gray-600 reveal">Kirimkan doa dan ucapan terbaik Anda untuk kami.</p>
        <div class="bg-white rounded-xl shadow-lg p-8 mt-10 text-left reveal">
          <form id="rsvp-form" method="POST" action="{{ route('rsvp.store') }}">
            @csrf
            <div class="mb-4"><label for="nama" class="block mb-2 font-semibold">Nama Anda</label><input type="text" name="nama" placeholder="Tulis nama Anda" class="w-full p-3 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--primary-color)] transition" required></div>
            <div class="mb-4"><label for="kehadiran" class="block mb-2 font-semibold">Konfirmasi Kehadiran</label><select name="kehadiran" class="w-full p-3 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--primary-color)] transition" required>
                <option value="Hadir">Insya Allah, Hadir</option>
                <option value="Tidak Hadir">Maaf, Berhalangan</option>
              </select></div>
            <div class="mb-4"><label for="ucapan" class="block mb-2 font-semibold">Ucapan & Doa</label><textarea name="ucapan" placeholder="Tulis ucapan terbaik Anda..." rows="5" class="w-full p-3 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--primary-color)] transition" required></textarea></div>
            <button type="submit" class="btn-primary w-full font-bold py-3 rounded-full shadow-lg text-lg flex items-center justify-center gap-2"><i class="fa-solid fa-paper-plane"></i> Kirim</button>
            <div id="rsvp-success" class="text-green-600 mt-4 text-center hidden">Terima kasih, ucapan Anda berhasil dikirim!</div>
          </form>
        </div>
        <div class="mt-16 reveal">
          <div id="rsvp-list" class="space-y-4 max-h-96 overflow-y-auto p-2 text-left">
            <div class="text-center text-gray-500">Memuat ucapan...</div>
          </div>
        </div>
      </div>
    </section>

    <footer class="py-16 text-center text-[var(--heading-color)]">
      <div class="relative z-10 reveal">
        <p class="italic">Merupakan suatu kehormatan bagi kami, apabila Anda berkenan hadir untuk memberikan doa restu.</p>
        <h2 class="text-4xl font-serif my-4">{{ $namaPria ?? 'Aiman' }} &amp; {{ $namaWanita ?? 'Fadhillah' }}</h2>
        <p class="text-sm mt-8">&copy; {{ date('Y') }}</p>
      </div>
    </footer>
  </main>

  <div id="bottom-nav" class="fixed bottom-0 left-0 right-0 z-40 hidden">
    <div class="max-w-lg mx-auto bg-white/90 backdrop-blur-md rounded-t-2xl shadow-2xl">
      <div class="flex justify-around items-center p-2">
        <a href="#couple" class="text-gray-600 hover:text-[var(--primary-color)] p-2 text-center"><i class="fa-solid fa-user-group text-xl"></i><span class="block text-xs">Mempelai</span></a>
        <a href="#event" class="text-gray-600 hover:text-[var(--primary-color)] p-2 text-center"><i class="fa-solid fa-calendar-check text-xl"></i><span class="block text-xs">Acara</span></a>
        <a href="#gift" class="text-gray-600 hover:text-[var(--primary-color)] p-2 text-center"><i class="fa-solid fa-gift text-xl"></i><span class="block text-xs">Hadiah</span></a>
        <a href="#rsvp" class="text-gray-600 hover:text-[var(--primary-color)] p-2 text-center"><i class="fa-solid fa-book-open-reader text-xl"></i><span class="block text-xs">Tamu</span></a>
        <button @click="$store.music.toggle()" class="text-gray-600 hover:text-[var(--primary-color)] p-2 text-center">
          <i class="fa-solid text-xl" :class="$store.music.isPlaying ? 'fa-volume-high' : 'fa-volume-off'"></i>
          <span class="block text-xs">Musik</span>
        </button>
      </div>
    </div>
  </div>
  <audio id="bg-music" src="/audio/bg-music.mp3" loop></audio>

  <div id="lightbox" class="fixed inset-0 bg-black/90 flex items-center justify-center z-50 p-4 hidden" onclick="closeLightbox()">
    <img id="lightbox-img" src="" class="max-h-[90vh] max-w-[90vw] rounded-lg shadow-lg">
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const splashScreen = document.getElementById('splash-screen');
      const openButton = document.getElementById('open-invitation');
      const mainContent = document.getElementById('main-content');
      const bottomNav = document.getElementById('bottom-nav');

      document.body.style.overflow = 'hidden';
      document.body.classList.remove('opacity-0');

      openButton.addEventListener('click', () => {
        splashScreen.style.transition = 'opacity 1s ease-out';
        splashScreen.style.opacity = '0';

        setTimeout(() => {
          splashScreen.classList.add('hidden');
          mainContent.classList.remove('hidden');
          bottomNav.classList.remove('hidden');
          document.body.style.overflow = 'auto';

          // Memutar musik menggunakan store Alpine
          Alpine.store('music').playOnOpen();
        }, 1000);
      });

      const revealElements = document.querySelectorAll('.reveal');
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('active');
            observer.unobserve(entry.target);
          }
        });
      }, {
        threshold: 0.1
      });
      revealElements.forEach(el => observer.observe(el));

      const eventDate = new Date('2025-08-10T09:00:00').getTime();
      const countdownInterval = setInterval(() => {
        const now = new Date().getTime();
        const distance = eventDate - now;
        if (distance > 0) {
          const d = Math.floor(distance / (1000 * 60 * 60 * 24));
          const h = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          const m = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          const s = Math.floor((distance % (1000 * 60)) / 1000);
          document.getElementById('days').innerText = d < 10 ? '0' + d : d;
          document.getElementById('hours').innerText = h < 10 ? '0' + h : h;
          document.getElementById('minutes').innerText = m < 10 ? '0' + m : m;
          document.getElementById('seconds').innerText = s < 10 ? '0' + s : s;
        } else {
          document.getElementById('countdown').innerHTML = "<p>Acara Telah Berlangsung</p>";
          clearInterval(countdownInterval);
        }
      }, 1000);

      const rsvpForm = document.getElementById('rsvp-form');
      rsvpForm.addEventListener('submit', async function(e) {
        e.preventDefault();
        const form = e.target;
        const data = new FormData(form);
        const successMsg = document.getElementById('rsvp-success');
        try {
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
            successMsg.classList.remove('hidden');
            setTimeout(() => successMsg.classList.add('hidden'), 3000);
            loadRsvp();
          } else {
            alert('Gagal mengirim ucapan.');
          }
        } catch (error) {
          console.error('RSVP Error:', error);
          alert('Terjadi kesalahan.');
        }
      });

      async function loadRsvp() {
        const listContainer = document.getElementById('rsvp-list');
        listContainer.innerHTML = '<div class="text-center text-gray-500">Memuat ucapan...</div>';
        try {
          const res = await fetch("{{ route('rsvp.index') }}");
          if (res.ok) {
            const data = await res.json();
            if (data.length === 0) {
              listContainer.innerHTML = '<div class="text-center text-gray-500">Jadilah yang pertama mengirim ucapan.</div>';
            } else {
              listContainer.innerHTML = data.map(u => `<div class="bg-white p-4 rounded-lg shadow-sm border"><div class="flex items-center mb-2"><span class="font-bold text-[var(--heading-color)]">${u.nama}</span><span class="ml-2 text-xs font-semibold ${u.kehadiran === 'Hadir' ? 'text-green-800 bg-green-100' : 'text-gray-800 bg-gray-200'} px-2 py-0.5 rounded-full">${u.kehadiran}</span></div><p class="text-gray-600 italic">"${u.ucapan}"</p></div>`).join('');
            }
          } else {
            listContainer.innerHTML = '<div class="text-center text-red-500">Gagal memuat ucapan.</div>';
          }
        } catch (error) {
          console.error('Load RSVP Error:', error);
          listContainer.innerHTML = '<div class="text-center text-red-500">Terjadi kesalahan.</div>';
        }
      }
      loadRsvp();
    });

    function openLightbox(src) {
      document.getElementById('lightbox-img').src = src;
      document.getElementById('lightbox').classList.replace('hidden', 'flex');
    }

    function closeLightbox() {
      document.getElementById('lightbox').classList.replace('flex', 'hidden');
    }
  </script>
</body>

</html>