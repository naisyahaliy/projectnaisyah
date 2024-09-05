    @extends('template')
    @section('content')
        
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        Create Produk
                    </div>
                    <div class="card-body">
                        <form action="/produk/create" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group pt-2">
                                <label for="productName">Nama</label>
                                <input type="text" class="form-control" id="productName" placeholder="Masukkan nama produk" name="nama">
                            </div>
                            <div class="form-group pt-2">
                                {{-- <form action="submit_selection.php" method="POST"> --}}
                                    <label for="kategori">Kategori</label>
                                    <select id="form-control" name="kategori">
                                        <option value="" disabled selected>Pilih kategori</option>
                                        <option value="men">Parfum men</option>
                                        <option value="women">Parfum women</option>
                                        <option value="women">Parfum baby</option>
                                    </select>
                                {{-- </form> --}}
                            </div>
                            <div class="form-group pt-2">
                                <label for="price">Harga</label>
                                <input type="number" class="form-control" id="price" placeholder="Masukkan harga produk"  name="harga">
                            </div>
                            <div class="form-group pt-2">
                                <label for="quantity">Jumlah</label>
                                <input type="number" class="form-control" id="quantity" placeholder="Masukkan jumlah produk"  name="jumlah">
                            </div>
                            <div class="form-group pt-2">
                                <label for="stock">Stok</label>
                                <input type="number" class="form-control" id="quantity" placeholder="Masukkan stock produk"  name="stok">
                            </div>
                            <div class="form-group pt-2">
                                <label for="image">Gambar</label>
                                <input type="file" class="form-control-file" name="foto" id="image">
                            </div>
                            <input type="submit" class="btn btn w-100 btn-block mt-5" style="background-color:rgb(177, 159, 138);" value="Simpan">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
@endsection
