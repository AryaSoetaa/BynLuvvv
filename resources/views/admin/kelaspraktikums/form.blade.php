<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nama_praktikum" class="form-label">{{ __('Nama Praktikum  :') }}</label>
            <input type="text" name="nama_praktikum" class="form-control @error('nama_praktikum') is-invalid @enderror" value="{{ old('nama_praktikum', $kelaspraktikum?->nama_praktikum) }}" id="nama_praktikum" placeholder="Nama Praktikum">
            {!! $errors->first('nama_praktikum', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="dosen" class="form-label">{{ __('Dosen  :') }}</label>
            <input type="text" name="dosen" class="form-control @error('dosen') is-invalid @enderror" value="{{ old('dosen', $kelaspraktikum?->dosen) }}" id="dosen" placeholder="Dosen">
            {!! $errors->first('dosen', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="asisten_praktikum" class="form-label">{{ __('Asisten Praktikum :') }}</label>
            <input type="text" name="asisten_praktikum" class="form-control @error('asisten_praktikum') is-invalid @enderror" value="{{ old('asisten_praktikum', $kelaspraktikum?->asisten_praktikum) }}" id="asisten_praktikum" placeholder="Asisten Praktikum">
            {!! $errors->first('asisten_praktikum', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="kepala_laboratorium" class="form-label">{{ __('Kepala Laboratorium :') }}</label>
            <input type="text" name="kepala_laboratorium" class="form-control @error('kepala_laboratorium') is-invalid @enderror" value="{{ old('kepala_laboratorium', $kelaspraktikum?->kepala_laboratorium) }}" id="kepala_laboratorium" placeholder="Kepala Laboratorium">
            {!! $errors->first('kepala_laboratorium', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="tanggal_dibuka" class="form-label">{{ __('Tanggal Dibuka :') }}</label>
            <input type="text" name="tanggal_dibuka" class="form-control @error('tanggal_dibuka') is-invalid @enderror" value="{{ old('tanggal_dibuka', $kelaspraktikum?->tanggal_dibuka) }}" id="tanggal_dibuka" placeholder="Tanggal Dibuka">
            {!! $errors->first('tanggal_dibuka', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="tanggal_ditutup" class="form-label">{{ __('Tanggal Ditutup  :') }}</label>
            <input type="text" name="tanggal_ditutup" class="form-control @error('tanggal_ditutup') is-invalid @enderror" value="{{ old('tanggal_ditutup', $kelaspraktikum?->tanggal_ditutup) }}" id="tanggal_ditutup" placeholder="Tanggal Ditutup">
            {!! $errors->first('tanggal_ditutup', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="flex justify-end mt-4">
        <button type="submit" class="bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
            {{ __('Submit') }}
        </button>
    </div>
</div>
