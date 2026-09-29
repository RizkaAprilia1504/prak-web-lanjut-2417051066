@extends('layouts.app')

@section('content')

<style>
    .create-user-page {
        max-width: 850px;
        margin: 0 auto;
    }

    .page-title {
        color: #315b45;
        font-weight: 700;
    }

    .page-subtitle {
        color: #718078;
        font-size: 0.9rem;
    }

    .title-icon {
        width: 52px;
        height: 52px;
        background-color: #5b866b;
        color: white;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 5px 12px rgba(63, 102, 78, 0.18);
    }

    .form-card {
        background: #ffffff;
        border: none;
        border-radius: 20px;
        padding: 35px 40px;
        box-shadow: 0 8px 25px rgba(55, 85, 67, 0.10);
    }

    .form-title {
        color: #315b45;
        font-weight: 700;
        font-size: 1.15rem;
        margin-bottom: 25px;
        position: relative;
        padding-bottom: 10px;
    }

    .form-title::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 45px;
        height: 3px;
        background-color: #6f9b7d;
        border-radius: 5px;
    }

    .form-label {
        color: #34463b;
        font-weight: 600;
        font-size: 0.9rem;
        margin-bottom: 8px;
    }

    .form-control,
    .form-select {
        border: 1px solid #d7e1da;
        border-radius: 10px;
        padding: 11px 14px;
        color: #34463b;
        transition: all 0.2s ease;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #6f9b7d;
        box-shadow: 0 0 0 3px rgba(111, 155, 125, 0.15);
    }

    .form-control::placeholder {
        color: #a1aaa4;
    }

    .btn-cancel {
        border: 1px solid #cbd8cf;
        color: #557060;
        background-color: #ffffff;
        border-radius: 10px;
        padding: 11px;
        font-weight: 600;
        transition: 0.2s;
    }

    .btn-cancel:hover {
        background-color: #f1f6f2;
        color: #3f604b;
    }

    .btn-save {
        border: none;
        background-color: #5b866b;
        color: white;
        border-radius: 10px;
        padding: 11px;
        font-weight: 600;
        transition: 0.2s;
        box-shadow: 0 4px 10px rgba(91, 134, 107, 0.20);
    }

    .btn-save:hover {
        background-color: #4b755b;
        color: white;
        transform: translateY(-1px);
    }

    .auto-id {
        background-color: #f4f7f5;
        color: #8a958e;
    }
</style>

<div class="create-user-page">

    <div class="d-flex align-items-center mb-4">
        <div class="title-icon">
            <i class="fa-solid fa-user-plus fs-5"></i>
        </div>

        <div class="ms-3">
            <h3 class="page-title mb-1">Tambah User Baru</h3>
            <p class="page-subtitle mb-0">
                Lengkapi data pengguna baru pada form di bawah ini.
            </p>
        </div>
    </div>


    <div class="form-card">

        <h5 class="form-title">
            Form Tambah User
        </h5>

        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <!-- ID -->
            <div class="mb-3">
                <label class="form-label">ID</label>

                <input
                    type="text"
                    class="form-control auto-id"
                    placeholder="ID dibuat otomatis"
                    disabled
                >
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Mahasiswa</label>

                <input
                    type="text"
                    name="nama"
                    class="form-control"
                    placeholder="Masukkan nama mahasiswa"
                    required
                >
            </div>

            <div class="mb-3">
                <label class="form-label">NPM</label>

                <input
                    type="text"
                    name="npm"
                    class="form-control"
                    placeholder="Masukkan NPM mahasiswa"
                    required
                >
            </div>

            <div class="mb-4">
                <label class="form-label">Kelas</label>

                <select
                    name="kelas_id"
                    class="form-select"
                    required
                >
                    <option value="" disabled selected>
                        Pilih kelas
                    </option>

                    @foreach($kelas as $k)
                        <option value="{{ $k->id }}">
                            {{ $k->nama_kelas }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <div class="d-flex gap-3 mt-4">

                <a
                    href="/user"
                    class="btn btn-cancel w-50 d-flex align-items-center justify-content-center"
                >
                    <i class="fa-solid fa-xmark me-2"></i>
                    Batal
                </a>

                <button
                    type="submit"
                    class="btn btn-save w-50 d-flex align-items-center justify-content-center"
                >
                    <i class="fa-regular fa-floppy-disk me-2"></i>
                    Simpan User
                </button>

            </div>

        </form>

    </div>

</div>

@endsection