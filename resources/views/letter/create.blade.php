<dialog id="createLetter" class="modal">
    <div class="modal-box w-11/12 max-w-4xl">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>

        <h3 class="font-bold text-lg mb-6">Tambah Surat Masuk</h3>

        <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text font-medium">Nomor Surat</span>
                            <span class="label-text-alt text-error">*</span>
                        </label>
                        <input type="text" name="nomor_surat" class="input input-bordered w-full"
                            placeholder="Masukkan nomor surat" required />
                    </div>

                    <div class="form-control w-full mt-4">
                        <label class="label">
                            <span class="label-text font-medium">Tanggal Surat</span>
                            <span class="label-text-alt text-error">*</span>
                        </label>
                        <input type="date" name="tanggal_surat" class="input input-bordered w-full" required />
                    </div>

                    <div class="form-control w-full mt-4">
                        <label class="label">
                            <span class="label-text font-medium">Perihal</span>
                            <span class="label-text-alt text-error">*</span>
                        </label>
                        <input type="text" name="perihal" class="input input-bordered w-full"
                            placeholder="Masukkan perihal surat" required />
                    </div>

                    <div class="form-control w-full mt-4">
                        <label class="label">
                            <span class="label-text font-medium">Dari Instansi</span>
                            <span class="label-text-alt text-error">*</span>
                        </label>
                        <input type="text" name="instansi" class="input input-bordered w-full"
                            placeholder="Masukkan nama instansi" required />
                    </div>
                </div>

                <div>
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text font-medium">Klasifikasi</span>
                            <span class="label-text-alt text-error">*</span>
                        </label>
                        <select name="klasifikasi" class="select select-bordered w-full" required>
                            <option value="" disabled selected>Pilih Klasifikasi</option>
                            <option value="R">Rahasia (R)</option>
                            <option value="B">Biasa (B)</option>
                            <option value="P">Penting (P)</option>
                        </select>
                    </div>

                    <div class="form-control w-full mt-4">
                        <label class="label">
                            <span class="label-text font-medium">File Surat</span>
                            <span class="label-text-alt text-error">*</span>
                        </label>
                        <input type="file" name="file_surat" class="file-input file-input-bordered w-full"
                            accept=".pdf,.doc,.docx" required />
                        <label class="label">
                            <span class="label-text-alt text-info">Format: PDF, DOC, DOCX (Max: 2MB)</span>
                        </label>
                    </div>

                    <div class="form-control w-full mt-4">
                        <label class="label">
                            <span class="label-text font-medium">Catatan</span>
                        </label>
                        <textarea name="catatan" class="textarea textarea-bordered h-24" placeholder="Masukkan catatan tambahan (opsional)"></textarea>
                    </div>
                </div>
            </div>

            <div class="form-control mt-6">
                <label class="label cursor-pointer justify-start gap-4">
                    <input type="checkbox" name="perlu_disposisi" class="checkbox checkbox-primary" />
                    <span class="label-text">Surat ini perlu disposisi segera</span>
                </label>
            </div>

            <div class="modal-action mt-8">
                <button type="button" class="btn" onclick="my_modal_1.close()">
                    <i class="fas fa-times mr-2"></i>Batal
                </button>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save mr-2"></i>Simpan Surat
                </button>
            </div>
        </form>
    </div>
    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>
