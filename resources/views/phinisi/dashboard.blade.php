<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Undangan | Fadhillah & Aiman</title>

  <!-- Tailwind CSS v3 -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Google Fonts: Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" xintegrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Alpine.js untuk Interaktivitas -->
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f4f7f6;
    }

    /* Styling untuk scrollbar yang lebih halus */
    ::-webkit-scrollbar {
      width: 8px;
    }

    ::-webkit-scrollbar-track {
      background: #f1f1f1;
    }

    ::-webkit-scrollbar-thumb {
      background: #888;
      border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: #555;
    }
  </style>
</head>

<body x-data="{ 
    isModalOpen: false, 
    modalGuestName: '', 
    modalGuestPhone: '', 
    modalInvitationLink: '',
    whatsappMessage: '' 
}">

  <!-- Header -->
  <header class="bg-white shadow-sm sticky top-0 z-40">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <div class="flex items-center gap-3">
          <i class="fa-solid fa-ship text-2xl text-indigo-600"></i>
          <h1 class="text-xl font-bold text-gray-800">Dashboard Undangan</h1>
        </div>
        <div class="text-right">
          <p class="font-semibold text-gray-700">Fadhillah & Aiman</p>
          <p class="text-xs text-gray-500">Admin Panel</p>
        </div>
      </div>
    </div>
  </header>

  <main class="container mx-auto p-4 sm:p-6 lg:p-8">

    <!-- Grid Utama -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

      <!-- Kolom Kiri: Daftar Tamu & Form -->
      <div class="lg:col-span-2 space-y-8">
        <!-- Kelola Tamu -->
        <section id="guest-management" class="bg-white rounded-xl shadow-md">
          <div class="p-6 border-b border-gray-200">
            <h2 class="text-lg font-bold text-gray-800 flex items-center gap-3">
              <i class="fa-solid fa-address-book text-indigo-500"></i>
              Kelola Daftar Tamu
            </h2>
            <p class="text-sm text-gray-500 mt-1">Tambah tamu baru untuk menghasilkan link undangan personal.</p>
          </div>
          <div class="p-6">
            <form method="POST" action="{{ route('tamu.store') }}" class="grid grid-cols-1 sm:grid-cols-6 gap-4 items-end">
              @csrf
              <div class="sm:col-span-2">
                <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Tamu</label>
                <input type="text" name="nama" id="nama" placeholder="Contoh: John Doe" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
              </div>
              <div class="sm:col-span-2">
                <label for="wa" class="block text-sm font-medium text-gray-700 mb-1">No. WhatsApp</label>
                <input type="text" name="wa" id="wa" placeholder="628123456789" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
              </div>
              <div class="sm:col-span-2">
                <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 flex items-center justify-center gap-2">
                  <i class="fa-solid fa-user-plus"></i> Tambah
                </button>
              </div>
            </form>
          </div>
          <div class="overflow-x-auto">
            <table class="min-w-full text-left text-sm">
              <thead class="bg-gray-50 border-b border-t border-gray-200">
                <tr>
                  <th class="px-6 py-3 font-semibold text-gray-600">Nama Tamu</th>
                  <th class="px-6 py-3 font-semibold text-gray-600">Link & Aksi</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                @forelse($tamus as $tamu)
                <tr class="hover:bg-gray-50 transition" x-data="{ copied: false }">
                  <td class="px-6 py-4">
                    <p class="font-semibold text-gray-900">{{ $tamu->nama }}</p>
                    <p class="text-gray-500">{{ $tamu->wa }}</p>
                  </td>
                  <td class="px-6 py-4">
                    <div class="flex flex-col sm:flex-row gap-2 items-start sm:items-center">
                      <input type="text" value="{{ url('/undangan/phinisi?to='.urlencode($tamu->nama)) }}" class="w-full sm:w-auto flex-grow border-gray-300 rounded-md shadow-sm text-xs" readonly id="link-{{ $tamu->id }}">
                      <div class="flex gap-2 flex-shrink-0">
                        <button @click="navigator.clipboard.writeText(document.getElementById('link-{{ $tamu->id }}').value); copied = true; setTimeout(() => copied = false, 2000)"
                          class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-3 py-1.5 rounded-md text-xs font-semibold flex items-center gap-1.5 transition">
                          <i class="fa-solid" :class="copied ? 'fa-check' : 'fa-copy'"></i>
                          <span x-text="copied ? 'Tersalin!' : 'Salin'"></span>
                        </button>
                        <!-- Tombol Kirim WA yang memicu Modal -->
                        <button @click="
                                                    isModalOpen = true; 
                                                    modalGuestName = '{{ addslashes($tamu->nama) }}';
                                                    modalGuestPhone = '{{ $tamu->wa }}';
                                                    modalInvitationLink = document.getElementById('link-{{ $tamu->id }}').value;
                                                    whatsappMessage = `Kepada Yth. {{ addslashes($tamu->nama) }}.\n\nAssalamualaikum Warahmatullahi Wabarakatuh.\nTanpa mengurangi rasa hormat, perkenankan kami mengundang Anda untuk menghadiri acara pernikahan kami, Fadhillah & Aiman.\n\nBerikut link undangan lengkapnya:\n${document.getElementById('link-{{ $tamu->id }}').value}\n\nMerupakan suatu kehormatan dan kebahagiaan bagi kami apabila Anda berkenan hadir untuk memberikan doa restu.\n\nWassalamualaikum Warahmatullahi Wabarakatuh.`;
                                                " class="bg-green-600 hover:bg-green-700 text-white px-3 py-1.5 rounded-md text-xs font-semibold flex items-center gap-1.5 transition">
                          <i class="fa-brands fa-whatsapp"></i>
                          <span>Kirim</span>
                        </button>
                        <form method="POST" action="{{ route('tamu.destroy', $tamu->id) }}" onsubmit="return confirm('Apakah Anda yakin ingin menghapus tamu ini?');">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="bg-red-100 hover:bg-red-200 text-red-600 px-3 py-1.5 rounded-md text-xs font-semibold flex items-center gap-1.5 transition">
                            <i class="fa-solid fa-trash"></i>
                          </button>
                        </form>
                      </div>
                    </div>
                  </td>
                </tr>
                @empty
                <tr>
                  <td colspan="2" class="text-center text-gray-500 py-8">Belum ada tamu yang ditambahkan.</td>
                </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </section>
      </div>

      <!-- Kolom Kanan: Daftar RSVP -->
      <div class="lg:col-span-1">
        <section id="rsvp-list" class="bg-white rounded-xl shadow-md">
          <div class="p-6 border-b border-gray-200">
            <h2 class="text-lg font-bold text-gray-800 flex items-center gap-3">
              <i class="fa-solid fa-clipboard-check text-indigo-500"></i>
              Konfirmasi & Ucapan Masuk
            </h2>
            <p class="text-sm text-gray-500 mt-1">Total: {{ $rsvps->count() }} ucapan</p>
          </div>
          <div class="p-4 space-y-4 max-h-[600px] overflow-y-auto">
            @forelse($rsvps as $rsvp)
            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
              <div class="flex justify-between items-start">
                <p class="font-semibold text-gray-800">{{ $rsvp->nama }}</p>
                <span class="text-xs font-bold {{ $rsvp->kehadiran == 'Hadir' ? 'text-green-600 bg-green-100' : 'text-gray-600 bg-gray-200' }} px-2 py-1 rounded-full">{{ $rsvp->kehadiran }}</span>
              </div>
              <p class="text-gray-600 mt-2 italic">"{{ $rsvp->ucapan }}"</p>
              <p class="text-xs text-gray-400 text-right mt-2">{{ $rsvp->created_at->diffForHumans() }}</p>
            </div>
            @empty
            <div class="text-center text-gray-500 py-8">
              <i class="fa-solid fa-comment-slash text-4xl text-gray-300"></i>
              <p class="mt-4">Belum ada ucapan yang masuk.</p>
            </div>
            @endforelse
          </div>
        </section>
      </div>
    </div>
  </main>

  <!-- Modal Kirim WhatsApp -->
  <div x-show="isModalOpen"
    x-transition:enter="ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 p-4"
    @click.away="isModalOpen = false">

    <div class="bg-white rounded-xl shadow-2xl w-full max-w-lg" @click.stop>
      <div class="p-6 border-b border-gray-200">
        <h3 class="text-lg font-bold text-gray-800">Kirim Undangan via WhatsApp</h3>
        <p class="text-sm text-gray-500">Kirim ke: <span x-text="modalGuestName" class="font-semibold"></span></p>
      </div>
      <div class="p-6">
        <label for="whatsapp-message" class="block text-sm font-medium text-gray-700 mb-2">Template Pesan (bisa diedit)</label>
        <textarea id="whatsapp-message" x-model="whatsappMessage" rows="10" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"></textarea>
      </div>
      <div class="p-4 bg-gray-50 rounded-b-xl flex justify-end gap-3">
        <button @click="isModalOpen = false" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded-lg transition">Batal</button>
        <a :href="'https://wa.me/' + modalGuestPhone + '?text=' + encodeURIComponent(whatsappMessage)"
          target="_blank"
          @click="isModalOpen = false"
          class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg transition flex items-center gap-2">
          <i class="fa-brands fa-whatsapp"></i> Kirim Sekarang
        </a>
      </div>
    </div>
  </div>

</body>

</html>