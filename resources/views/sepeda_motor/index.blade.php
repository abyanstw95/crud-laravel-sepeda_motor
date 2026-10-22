<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Sepeda Motor</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body{
            background-color:#f5f7fa;
        }

        .card-custom{
            border:none;
            border-radius:15px;
            box-shadow:0 4px 15px rgba(0,0,0,0.1);
        }

        .table th{
            background:#0d6efd;
            color:white;
            text-align:center;
            vertical-align:middle;
        }

        .table td{
            vertical-align:middle;
        }

        .header-title{
            font-weight:bold;
            color:#0d6efd;
        }

        .harga{
            font-weight:bold;
            color:green;
        }

        .qty{
            font-weight:bold;
        }
    </style>
</head>
<body>

<div class="container mt-5">

    <div class="card card-custom">
        <div class="card-body">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="header-title">
                    <i class="bi bi-bicycle"></i>
                    Data Sepeda Motor
                </h2>

                <a href="#" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i>
                    Tambah Data
                </a>
            </div>

            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="25%">Nama Produk</th>
                        <th width="40%">Spesifikasi</th>
                        <th width="15%">Harga</th>
                        <th width="5%">Qty</th>
                        <th width="10%">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                @forelse($data as $item)
                    <tr>
                        <td class="text-center">
                            {{ $loop->iteration }}
                        </td>

                        <td>
                            <strong>{{ $item->NAMA_PRODUK }}</strong>
                        </td>

                        <td>
                            {{ $item->SPESIFIKASI }}
                        </td>

                        <td class="harga text-center">
                            Rp {{ number_format($item->HARGA_PRODUK,0,',','.') }}
                        </td>

                        <td class="text-center qty">
                            {{ $item->JUMLAH_PRODUK }}
                        </td>

                        <td class="text-center">

                            <a href="#" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil-square"></i>
                            </a>

                            <a href="#" class="btn btn-danger btn-sm">
                                <i class="bi bi-trash"></i>
                            </a>

                        </td>
                    </tr>
                @empty

                    <tr>
                        <td colspan="6" class="text-center text-muted">
                            Data tidak ditemukan
                        </td>
                    </tr>

                @endforelse

                </tbody>
            </table>

        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>