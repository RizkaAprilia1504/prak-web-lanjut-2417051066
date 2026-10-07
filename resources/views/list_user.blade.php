@extends('layouts.app')

@section('content')

<style>
    .user-list-page {
        max-width: 1200px;
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

    .btn-add-user {
        background-color: #5b866b;
        color: white;
        border: none;
        border-radius: 10px;
        padding: 11px 18px;
        font-weight: 600;
        box-shadow: 0 4px 10px rgba(91, 134, 107, 0.20);
        transition: 0.2s;
    }

    .btn-add-user:hover {
        background-color: #4b755b;
        color: white;
        transform: translateY(-1px);
    }
</style>

<div class="user-list-page">

    {{-- Alert Notifikasi Sukses --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert" style="border-radius: 10px; background-color: #d4edda; border-color: #c3e6cb; color: #155724;">
            <i class="fa-solid fa-circle-check me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div class="d-flex align-items-center">

            <div class="title-icon">
                <i class="fa-solid fa-users fs-5"></i>
            </div>

            <div class="ms-3">
                <h3 class="page-title mb-1">
                    Daftar Pengguna
                </h3>

                <p class="page-subtitle mb-0">
                    Kelola data pengguna mahasiswa.
                </p>
            </div>

        </div>

        <a href="{{ route('user.create') }}" class="btn btn-add-user">
            <i class="fa-solid fa-plus me-2"></i>
            Tambah User Baru
        </a>

    </div>

    <!-- Tabel User -->
    <div class="card border-0 shadow-sm" style="border-radius: 14px; overflow: hidden;">
        <div class="card-body p-0">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="py-3 px-4">ID</th>
                        <th class="py-3">Nama</th>
                        <th class="py-3">NPM</th>
                        <th class="py-3">Kelas</th>
                        <th class="py-3 px-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                    <tr>
                        <td class="px-4 text-muted small">{{ $user->id }}</td>
                        <td class="fw-semibold text-dark">{{ $user->nama }}</td>
                        <td>{{ $user->nim }}</td>
                        <td>{{ $user->kelas->nama_kelas ?? '-' }}</td>
                        <td class="px-4 text-center">
                            <!-- Tombol Edit -->
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-warning text-white me-1 px-3" style="border-radius: 8px; font-weight: 500;">
                                <i class="fa-solid fa-pen-to-square me-1"></i> Edit
                            </a>
                            
                            <!-- Form Tombol Hapus -->
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger px-3" onclick="return confirm('Yakin ingin menghapus data user ini?')" style="border-radius: 8px; font-weight: 500;">
                                    <i class="fa-solid fa-trash-can me-1"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-4 text-muted">Belum ada data pengguna.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection