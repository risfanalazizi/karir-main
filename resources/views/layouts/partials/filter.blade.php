<div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class=" modal-content p-3">
            <div class="modal-header p-2 align-items-start">
                <div class="d-flex flex-column align-items-left" style="padding: 0px;">
                    <p>Daftar Lowongan Pekerjaan</p>
                    <h3 class="text-bold">Filter</h3>
                </div>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="jenis" class="col-form-label">Lokasi</label>
                        <select class="form-select" id="jenis">
                            <option selected style="color: grey;" disabled>Pilih lokasi</option>
                            <option value="1">Bandung</option>
                            <option value="2">Bekasi</option>
                            <option value="3">Karawang</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="col-form-label">Type</label>
                        <select class="form-select" id="jenis">
                            <option selected style="color: grey;" disabled>Pilih type</option>
                            <option value="1">UI & UX</option>
                            <option value="2">Progammer Back End Developer</option>
                            <option value="">Progammer Front End Developer</option>
                            <option value="">Data Analysis</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer d-flex justify-content-left">
                <button type="button" class="btn bg-white w-40 text-primary py-2 mt-3">Batal</button>
                <button type="button" class="btn bg-primary w-40 text-white py-2 mt-3">Simpan</button>
            </div>
        </div>
    </div>
</div>