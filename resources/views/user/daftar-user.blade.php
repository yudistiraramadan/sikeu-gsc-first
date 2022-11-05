@extends('layouts.main')
@section('content')
    <a href="#">
        <button type="button" class="btn btn-success tambah mb-2">Tambah User</button>
    </a>
    <div class="table-responsive">
        <table id="dt-user" class="table table-striped table-hover" style="width: 100%">
            <thead>
                <tr>
                    <th>Nama Relawan</th>
                    <th>Email</th>
                    <th>Whatsapp/Hp</th>
                    <th>Ditambahkan</th>
                    <th>Status</th>
                    <th style="text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            var table = $('#dt-user').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('index') }}",
                columns: [{
                        data: 'nama',
                        name: 'nama'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'tlpn',
                        name: 'tlpn'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        "data": function(data) {
                            if (data.status == 'aktif') {
                                return `<span class="btn btn-sm btn-success align-content-center">Aktif</span>`;
                            } else {
                                return `<span class="btn btn-sm btn-danger align-content-center">Nonaktif</span>`;
                            }
                        }
                    },
                    {
                        data: 'action',
                        name: 'action'
                    }
                ],
                order: [],
                responsive: true,
                language: {
                    search: "Cari Data :",
                    searchPlaceholder: "",
                    emptyTable: "Tidak ada data pada tabel ini",
                    info: "Menampilkan _START_ s/d _END_ dari _TOTAL_ data",
                    infoFiltered: "(difilter dari _MAX_ total data)",
                    infoEmpty: "Tidak ada data pada tabel ini",
                    lengthMenu: "Menampilkan _MENU_ data",
                    zeroRecords: "Tidak ada data pada tabel ini"
                },
            });
        });
    </script>
@endpush
