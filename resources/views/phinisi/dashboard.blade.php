<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin Undangan</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
    }

    h1,
    h2 {
      font-family: 'Playfair Display', serif;
    }
  </style>
</head>

<body class="bg-gradient-to-br from-amber-100 via-white to-amber-200 min-h-screen">
  <header class="sticky top-0 z-40 bg-gradient-to-r from-amber-200 via-white to-amber-100/80 backdrop-blur-md shadow-md py-4 mb-10">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 gap-2">
      <h1 class="text-3xl md:text-4xl font-extrabold text-amber-700 tracking-wide flex items-center gap-3">
        <i class="fa-solid fa-clipboard-list text-amber-500"></i>
        Dashboard Undangan
      </h1>
      <span class="text-xs md:text-sm text-gray-500 italic tracking-wide flex items-center gap-1"><i class="fa-solid fa-ship text-amber-400"></i> Fadhillah & Aiman Weeding</span>
    </div>
  </header>

  <main class="container mx-auto px-2 md:px-4 pb-10">
    <!-- RSVP Section -->
    <section class="mb-12">
      <div class="bg-white/95 rounded-2xl shadow-2xl p-4 md:p-8 border border-amber-100">
        <h2 class="text-xl md:text-2xl font-semibold mb-6 text-amber-700 flex items-center gap-3">
          <i class="fa-solid fa-users text-amber-400"></i>
          Daftar RSVP & Ucapan
        </h2>
        <div class="overflow-x-auto rounded-xl">
          <table class="min-w-full text-left table-auto">
            <thead class="bg-amber-50">
              <tr>
                <th class="px-4 py-3 font-semibold text-amber-700">Nama</th>
                <th class="px-4 py-3 font-semibold text-amber-700">Kehadiran</th>
                <th class="px-4 py-3 font-semibold text-amber-700">Ucapan</th>
                <th class="px-4 py-3 font-semibold text-amber-700">Waktu</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-amber-50">
              @forelse($rsvps as $rsvp)
              <tr class="hover:bg-amber-100/60 transition">
                <td class="px-4 py-2 font-semibold text-gray-800">{{ $rsvp->nama }}</td>
                <td class="px-4 py-2">
                  <span class="inline-flex items-center gap-1 px-2 py-1 rounded-full text-xs font-semibold {{ $rsvp->kehadiran == 'Hadir' ? 'bg-green-100 text-green-700' : 'bg-gray-200 text-gray-500' }}">
                    <i class="fa-solid {{ $rsvp->kehadiran == 'Hadir' ? 'fa-check-circle' : 'fa-minus-circle' }}"></i>
                    {{ $rsvp->kehadiran }}
                  </span>
                </td>
                <td class="px-4 py-2 text-gray-700 max-w-md break-words">{{ $rsvp->ucapan }}</td>
                <td class="px-4 py-2 text-xs text-gray-500">{{ $rsvp->created_at->format('d-m-Y H:i') }}</td>
              </tr>
              @empty
              <tr>
                <td colspan="4" class="text-center text-gray-400 py-4">Belum ada RSVP.</td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- Guest Management -->
    <section>
      <div class="bg-white/95 rounded-2xl shadow-2xl p-4 md:p-8 border border-amber-100">
        <h2 class="text-xl md:text-2xl font-semibold mb-6 text-amber-700 flex items-center gap-3">
          <i class="fa-solid fa-address-book text-amber-400"></i>
          Kelola Tamu &amp; Generate Link
        </h2>
        <form method="POST" action="{{ route('tamu.store') }}" class="flex flex-col md:flex-row gap-3 mb-6">
          @csrf
          <input type="text" name="nama" placeholder="Nama Tamu" class="flex-1 border border-amber-300 bg-white rounded-lg px-3 py-2 focus:ring-2 focus:ring-amber-400 shadow-sm" required>
          <input type="text" name="wa" placeholder="No. WhatsApp (628xxxxxxxxxx)" class="flex-1 border border-amber-300 bg-white rounded-lg px-3 py-2 focus:ring-2 focus:ring-amber-400 shadow-sm" required>
          <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg shadow flex items-center gap-2">
            <i class="fa-solid fa-user-plus"></i> Tambah
          </button>
        </form>
        <div class="overflow-x-auto rounded-xl">
          <table class="min-w-full text-left table-auto">
            <thead class="bg-amber-50">
              <tr>
                <th class="px-4 py-3 font-semibold text-amber-700">Nama Tamu</th>
                <th class="px-4 py-3 font-semibold text-amber-700">Link Undangan</th>
                <th class="px-4 py-3 font-semibold text-amber-700">Aksi</th>
                <th class="px-4 py-3 font-semibold text-amber-700">Kirim WA</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-amber-50">
              @forelse($tamus as $tamu)
              <tr class="hover:bg-amber-100/60 transition">
                <td class="px-4 py-2 font-semibold text-gray-800">{{ $tamu->nama }}<br><span class="text-xs text-gray-500">{{ $tamu->wa }}</span></td>
                <td class="px-4 py-2">
                  <input type="text" value="{{ url('/undangan/phinisi?to='.urlencode($tamu->nama)) }}" class="w-full border border-amber-200 rounded-lg px-2 py-1 text-xs bg-amber-50 focus:bg-white shadow-sm" readonly id="link-{{ $tamu->id }}">
                </td>
                <td class="px-4 py-2 flex gap-2 items-center">
                  <button onclick="event.preventDefault(); copyLink('link-{{ $tamu->id }}')" class="bg-blue-500 hover:bg-blue-700 text-white px-3 py-1 rounded-lg text-xs shadow flex items-center gap-1"><i class="fa-solid fa-copy"></i> Copy</button>
                  <form method="POST" action="{{ route('tamu.destroy', $tamu->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white px-3 py-1 rounded-lg text-xs shadow flex items-center gap-1"><i class="fa-solid fa-trash"></i> Hapus</button>
                  </form>
                </td>
                <td class="px-4 py-2">
                  @if($tamu->wa)
                  <a
                    href="https://wa.me/{{ $tamu->wa }}?text={{ rawurlencode('Kepada Yth. '.$tamu->nama.'.%0AAssalamualaikum Warahmatullahi Wabarakatuh.%0ATanpa mengurangi rasa hormat, perkenankan kami mengundang Anda untuk menghadiri acara pernikahan kami. Berikut link undangan lengkapnya:%0A'.url('/undangan/phinisi?to='.urlencode($tamu->nama)).'%0AWassalamualaikum Warahmatullahi Wabarakatuh.') }}"
                    target="_blank"
                    class="bg-green-700 hover:bg-green-800 text-white px-4 py-2 rounded-lg text-sm shadow flex items-center gap-2 font-bold outline-2 outline-white">
                    <i class="fa-brands fa-whatsapp text-white text-lg"></i> Kirim WA
                  </a>
                  @endif
                </td>
              </tr>
              @empty
              <tr>
                <td colspan="4" class="text-center text-gray-400 py-4">Belum ada tamu.</td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </main>

  <script>
    function copyLink(inputId) {
      const input = document.getElementById(inputId);
      input.select();
      input.setSelectionRange(0, 99999);
      document.execCommand('copy');
      alert('Link undangan telah disalin!');
    }
  </script>
</body>

</html>