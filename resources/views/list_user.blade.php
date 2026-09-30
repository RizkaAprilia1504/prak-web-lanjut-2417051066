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

    <x-user-table :users="$users" />

</div>

@endsection