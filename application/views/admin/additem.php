<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Add Item</h3>
              <hr>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

    <form class="form-horizontal form-label-left" action="" enctype="multipart/form-data" method="post">

         <div class="form-group">
            <label class="control-label col-md-2 col-sm-2 col-xs-12" >Nama Item
            </label>
            <div class="col-md-7 col-sm-6 col-xs-12">
               <input type="text" class="form-control col-md-7 col-xs-12" name="nama_produk" value="">
            </div>
         </div>


         <div class="form-group">
            <label class="control-label col-md-2 col-sm-2 col-xs-12">Harga Item
            </label>
            <div class="col-md-4 col-sm-6">
               <input class="form-control col-md-7 col-xs-12" type="number" name="harga" value="">
            </div>
         </div>

         <div class="form-group">
            <label class="control-label col-md-2 col-sm-2 col-xs-12">Stok Item
            </label>
            <div class="col-md-4 col-sm-6">
               <input class="form-control col-md-7 col-xs-12" type="number" name="stok" value="">
            </div>
         </div>

         <div class="form-group">
            <label class="control-label col-md-2 col-sm-2 col-xs-12">Berat Item</label>
            <div class="col-md-4 col-sm-6">
               <input class="form-control col-md-7" type="number" name="berat" value="">
               <p class="help-text">* Berat dalam satuan Gram</p>
            </div>
         </div>

         <div class="form-group">
            <label class="control-label col-md-2 col-sm-2 col-xs-12">Kategori</label>
            <div class="col-md-4 col-sm-6">
               <select name="kategori" class="form-control">
                  <option value="">--Pilih Kategori--</option>
                  <option value="1" >Processor</option>
                  <option value="2" >VGA</option>
               </select>
            </div>
         </div>

         <div class="form-group">
            <label class="control-label col-md-2 col-sm-2 col-xs-12">Status</label>
            <div class="col-md-4 col-sm-6">
               <select name="status" class="form-control">
                  <option value="">--Pilih Status--</option>
                  <option value="1" >Aktif</option>
                  <option value="2" >Tidak Aktif</option>
               </select>
            </div>
         </div>

         <div class="form-group">
            <label class="control-label col-md-2 col-sm-2 col-xs-12" >Gambar
            </label>
            <div class="col-md-5 col-sm-12 col-xs-12">
            <input type="file" class="form-control col-md-7 col-xs-12" name="foto">
               <p class="help-text">* Ukuran Gambar Maximal 400 px x 400 px</p>
            </div>
         </div>

         <div class="form-group">
            <label class="control-label col-md-2 col-sm-2 col-xs-12">Deskripsi</label>
            <div class="col-md-9 col-sm-6">
               <textarea class="form-control" rows="4" name="deskripsi"></textarea>
            </div>
         </div>

         <hr>

         <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
               <button type="submit" class="btn btn-success" name="submit" value="Submit">Submit</button>
              <button type="button" class="btn btn-primary" >Kembali</button>
            </div>
         </div>

     </form>
     </div>
          </div>
        </div>
</div>
