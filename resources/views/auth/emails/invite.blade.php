<p>
    Halo {{ $member->name }}
</p>

<p>
    Jika Anda ingin mengubah password, silahkan kunjungi <a href="{{ $reset = url('password/reset') }}">{{ $reset }}</a> dan masukan email Anda.
</p>