<div class="form-group {{ $errors->has('id_gudang') ? 'has-error' : ''}}">
    <label for="id_gudang" class="control-label">{{ 'Id Gudang' }}</label>
    <input class="form-control" name="id_gudang" type="number" id="id_gudang" value="{{ isset($stokproduk->id_gudang) ? $stokproduk->id_gudang : ''}}" >
    {!! $errors->first('id_gudang', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_produk') ? 'has-error' : ''}}">
    <label for="id_produk" class="control-label">{{ 'Id Produk' }}</label>
    <input class="form-control" name="id_produk" type="number" id="id_produk" value="{{ isset($stokproduk->id_produk) ? $stokproduk->id_produk : ''}}" >
    {!! $errors->first('id_produk', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('stok') ? 'has-error' : ''}}">
    <label for="stok" class="control-label">{{ 'Stok' }}</label>
    <input class="form-control" name="stok" type="number" id="stok" value="{{ isset($stokproduk->stok) ? $stokproduk->stok : ''}}" >
    {!! $errors->first('stok', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
