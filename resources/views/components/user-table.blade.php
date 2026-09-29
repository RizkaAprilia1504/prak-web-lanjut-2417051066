@props(['users'])

<style>
    .user-table-card {
        background-color: #ffffff;
        border: none;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(55, 85, 67, 0.10);
    }

    .user-table {
        margin-bottom: 0;
    }

    .user-table thead {
        background-color: #315b45;
    }

    .user-table thead th {
        color: #ffffff;
        font-weight: 600;
        font-size: 0.9rem;
        padding: 16px;
        border: none;
    }

    .user-table tbody td {
        padding: 15px 16px;
        color: #34463b;
        border-color: #edf1ee;
        font-size: 0.9rem;
    }

    .user-table tbody tr {
        background-color: #ffffff;
        transition: 0.2s;
    }

    .user-table tbody tr:hover {
        background-color: #f4f8f5;
    }

    .id-number {
        font-weight: 700;
        color: #557060;
    }

    .student-name {
        font-weight: 600;
        text-align: left;
        color: #34463b;
    }

    .npm-badge {
        display: inline-block;
        background-color: #edf4ef;
        color: #4d7259;
        padding: 7px 14px;
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.8rem;
    }

    .class-badge {
        display: inline-block;
        background-color: #dfece3;
        color: #41664d;
        padding: 7px 14px;
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.8rem;
    }
</style>


<div class="user-table-card">

    <div class="table-responsive">

        <table class="table user-table align-middle text-center">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Mahasiswa</th>
                    <th>NPM</th>
                    <th>Kelas</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($users as $user)

                <tr>

                    <td>
                        <span class="id-number">
                            {{ $user->id }}
                        </span>
                    </td>

                    <td>
                        <div class="student-name">
                            {{ $user->nama }}
                        </div>
                    </td>

                    <td>
                        <span class="npm-badge">
                            {{ $user->nim }}
                        </span>
                    </td>

                    <td>
                        <span class="class-badge">
                            {{ $user->nama_kelas }}
                        </span>
                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>