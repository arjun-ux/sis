<h1>halaman siswa</h1>
{{-- Selamat Datang, <strong>{{ auth()->guard('siswa') }}</strong> --}}
Welcome, {{ Auth::guard('siswa')->user()->nama }} <br>
Alamat, {{ Auth::guard('siswa')->user()->alamat }}
<a href="{{ route('logout.santri') }}">Logout</a>
