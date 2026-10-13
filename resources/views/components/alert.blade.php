@props(['tipe'=>'info'])

<div {{$attributes->merge(['class'=>"alert alert-$tipe"])}}>
    {{$slot}}
</div>

<x-alert tipe="success">Data Berhasil Disimpan!</x-alert>
<x-harga-produk :nilai="$p['harga']" :diskon="true" />
Named slot, component/kartu.blade.php: 

<div class="kartu">
    @isset($judul)<h3>{{$judul}}</h3>@endisset
    {{$slot}}
</div>

<x-kartu>
    <x-slot:judul>Keyboard</x-slot:judul>
    Harga Rp150.000
</x-kartu>  
