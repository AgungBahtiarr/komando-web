 <dialog id="modalDisposisi" class="modal">
     <div class="modal-box">
         <h3 class="font-bold text-lg mb-4">Form Disposisi Surat</h3>
         <form method="dialog">
             <div class="form-control mb-4">
                 <label class="label">
                     <span class="label-text">Tujuan Disposisi</span>
                 </label>
                 <select class="select select-bordered w-full">
                     <option disabled selected>Pilih Tujuan</option>
                     <option>Kepala Bagian</option>
                     <option>Sekretaris</option>
                     <option>Staff</option>
                 </select>
             </div>
             <div class="form-control mb-4">
                 <label class="label">
                     <span class="label-text">Catatan Disposisi</span>
                 </label>
                 <textarea class="textarea textarea-bordered" placeholder="Tulis catatan..."></textarea>
             </div>
             <div class="form-control mb-4">
                 <label class="label">
                     <span class="label-text">Tingkat Urgensi</span>
                 </label>
                 <select class="select select-bordered w-full">
                     <option disabled selected>Pilih Urgensi</option>
                     <option>Segera</option>
                     <option>Normal</option>
                     <option>Tidak Urgent</option>
                 </select>
             </div>
             <div class="modal-action">
                 <button class="btn btn-error">Batal</button>
                 <button class="btn btn-success">Kirim Disposisi</button>
             </div>
         </form>
     </div>
 </dialog>
