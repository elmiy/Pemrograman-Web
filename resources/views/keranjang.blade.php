@section('container')
<div class="container">
    <h1 class="my-3">Keranjang Kamu</h1>
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        Data Berhasil {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Barang</th>
                <th scope="col">jumlah</th>
                <th scope="col">Harga</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
          @php
              $i = 1;
              $total = 0;
          @endphp
          @foreach ($beli as $b)
          <tr>
            <th scope="row">{{$i}}</th>
            <td>{{$b->nama_barang}}</td>
            <td>{{$b->jumlah}}</td>
            <td>@php
                $jumlah = $b->jumlah * $b->harga_barang;
                echo $jumlah;
            @endphp</td>
            <td><a href="/keranjang/hapus/{{$b->id}}" class="btn btn-danger">Delete</a></td>
          </tr>
          @php
              $i++;
              $total += $jumlah;
          @endphp
          @endforeach
          <td colspan="3" class="text-center">Jumlah</td> 
          <td colspan="1" class="text-start">{{$total}}</td> 
          <td colspan="1"><button onclick="bayar()" class="btn btn-primary">Bayar</button></td> 
        </tbody>
    </table>
</div>
@endsection