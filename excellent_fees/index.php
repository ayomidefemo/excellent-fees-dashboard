<?php
include 'db.php';

$tables = ['pre_school', 'nursery_1', 'nursery_2', 'basic1', 'basic2', 'basic3', 'basic4', 'basic5'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Excellent Fees Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

    <style>
    :root {
        --green-dark: #006400;
        --green-medium: #228B22;
        --green-darker: #004d00;
    }

    body {
        background-color: var(--green-medium);
        color: #000;
        font-size: 0.95rem;
    }

    .school-header {
        width: 100%;
        border-bottom: 4px solid #165b33;
        background-color: white;
        padding: 10px 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .header-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .school-logo {
        height: 120px;
        width: auto;
        margin-right: 20px;
    }

    .school-info {
        flex: 1;
        text-align: right;
        color: #165b33;
    }

    .school-info h1 {
        margin: 0;
        font-size: 28px;
        font-weight: 800;
    }

    .school-info h2 {
        margin: 0;
        font-size: 20px;
        font-weight: 600;
    }

    .motto {
        color: #b02a37;
        font-style: italic;
        margin: 5px 0;
        font-size: 15px;
    }

    .rc-number {
        color: #b02a37;
        font-size: 13px;
        font-weight: bold;
    }

    .address-bar {
        width: 100%;
        background-color: #165b33;
        color: white;
        text-align: center;
        padding: 6px 0;
        font-size: 15px;
        margin-top: 10px;
        font-weight: 500;
    }


    h1,
    h3,
    .nav-link,
    .alert-info {
        color: #fff;
    }

    .nav-link.active,
    .alert-info {
        background-color: #000;
        border-color: var(--green-dark);
    }

    .btn-primary {
        background-color: var(--green-dark);
        border-color: var(--green-dark);
    }

    .btn-primary:hover,
    .btn-warning:hover,
    .btn-danger:hover {
        background-color: var(--green-darker);
    }

    .table-dark {
        background-color: var(--green-dark);
        color: #fff;
    }

    .table-dark th {
        border: 2px solid #004d00;
        padding: 10px;
    }

    .container-fluid {
        max-width: 1400px;
        padding-left: 12px;
        padding-right: 12px;
    }

    .table-responsive {
        overflow-x: auto;
    }

    .dataTables_wrapper {
        overflow-x: auto;
    }

    table.dataTable {
        white-space: nowrap;
    }

    @media (max-width: 900px) {

        table.dataTable td,
        table.dataTable th {
            font-size: 0.78rem;
            white-space: nowrap;
        }
    }

    @media (max-width: 576px) {
        .modal-dialog {
            max-width: 100%;
            margin: 0.5rem;
        }

        .modal-content {
            height: 92vh;
            overflow: auto;
        }
    }
    </style>
</head>

<body>
    <div class="container-fluid my-4">
        <div class="text-center mb-4">
            <header class="school-header">
                <div class="header-content">
                    <img src="EFBS.jpg" alt="Excellent Foundation Basic School Logo" class="school-logo">
                    <div class="school-info">
                        <h1>EXCELLENT FOUNDATION BASIC SCHOOL</h1>
                        <h2>NURSERY AND PRIMARY</h2>
                        <p class="motto"><strong>Motto:</strong> Raising Excellent Leaders</p>
                        <p class="rc-number">RC: 942810</p>
                    </div>
                </div>
                <div class="address-bar">
                    Excellent Foundation Fees Database
                </div>
            </header>


            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <?php foreach ($tables as $index => $table): ?>
                <li class="nav-item">
                    <a class="nav-link <?= $index === 0 ? 'active' : '' ?>" id="<?= $table ?>-tab" data-bs-toggle="tab"
                        href="#<?= $table ?>" role="tab"><?= ucfirst(str_replace('_', ' ', $table)) ?></a>
                </li>
                <?php endforeach; ?>
            </ul>

            <div class="tab-content" id="myTabContent">
                <?php foreach ($tables as $index => $table): ?>
                <div class="tab-pane fade <?= $index === 0 ? 'show active' : '' ?>" id="<?= $table ?>" role="tabpanel">
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <h3><?= ucfirst(str_replace('_', ' ', $table)) ?></h3>
                        <a href="form.php?table=<?= $table ?>" class="btn btn-primary">Add New Record</a>
                    </div>

                    <?php
                    $totalFees = (float) ($pdo->query("SELECT SUM(total) FROM `$table`")->fetchColumn() ?? 0);
                    $totalPaid = (float) ($pdo->query("SELECT SUM(amount_paid) FROM `$table`")->fetchColumn() ?? 0);
                    $balance = $totalFees - $totalPaid;
                ?>
                    <div class="alert alert-info my-3">
                        <strong>Summary:</strong> Total Fees: <?= number_format($totalFees) ?>,
                        Total Paid: <?= number_format($totalPaid) ?>, Balance: <?= number_format($balance) ?>
                    </div>

                    <div class="mb-3">
                        <input type="text" id="search<?= $table ?>" class="form-control"
                            placeholder="Search by name or any field">
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped dt-table" id="table<?= $table ?>"
                            style="width:100%">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Tuition Fee</th>
                                    <th>Transport</th>
                                    <th>Language</th>
                                    <th>Exam Fee</th>
                                    <th>Form</th>
                                    <th>Activity</th>
                                    <th>Dev Levy</th>
                                    <th>Uniform</th>
                                    <th>Sport Wear</th>
                                    <th>Friday Wear</th>
                                    <th>Cardigan</th>
                                    <th>Others</th>
                                    <th>Total</th>
                                    <th>Amount Paid</th>
                                    <th>Balance</th>
                                    <th>Comment</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
try {
    $stmt = $pdo->query("SELECT * FROM `$table`");
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    echo "<tr><td colspan='19'>Error fetching data: " . htmlspecialchars($e->getMessage()) . "</td></tr>";
    $rows = [];
}

$serial = 1;

$colsOrdered = [
    'name', 'tuition_fee', 'transport', 'language', 'exam_fee', 'form',
    'activity', 'dev_levy', 'uniform', 'sport_wear', 'friday_wear',
    'cardigan', 'others', 'total', 'amount_paid', 'balance', 'comment'
];

foreach ($rows as $row): ?>
                                <tr data-id="<?= htmlspecialchars($row['id'] ?? '') ?>">
                                    <td><?= $serial++; ?></td>
                                    <?php foreach ($colsOrdered as $c): ?>
                                    <td><?= htmlspecialchars($row[$c] ?? '') ?></td>
                                    <?php endforeach; ?>
                                    <td>
                                        <a href="form.php?table=<?= htmlspecialchars($table) ?>&id=<?= htmlspecialchars($row['id'] ?? '') ?>"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <a href="delete.php?table=<?= htmlspecialchars($table) ?>&id=<?= htmlspecialchars($row['id'] ?? '') ?>"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure?')">Delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>

                        </table>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="modal fade" id="detailModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Student Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modalContent"></div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script>
        $(document).ready(function() {
            // Initialize DataTables for each tab
            $('.dt-table').each(function() {
                $(this).DataTable({
                    responsive: false, // Disable the green (+) expand button
                    scrollX: true, // Enable horizontal scrolling
                    autoWidth: true,
                    pageLength: 10,
                    lengthMenu: [10, 25, 50, 100],
                    columnDefs: [{
                        targets: -1,
                        orderable: false
                    }],
                });
            });

            // Search functionality per table
            $('input[id^="search"]').on('keyup', function() {
                var tabPane = $(this).closest('.tab-pane');
                var table = tabPane.find('.dt-table').DataTable();
                table.search(this.value).draw();
            });

            // Preserve tab on page reload
            let hash = window.location.hash;
            if (hash) {
                var tabLink = $('#myTab a[href="' + hash + '"]');
                if (tabLink.length) {
                    var trigger = new bootstrap.Tab(tabLink[0]);
                    trigger.show();
                }
            }

            $('#myTab a').on('shown.bs.tab', function(e) {
                window.location.hash = e.target.hash;
            });

            // Modal view handling
            $(document).on('click', '.btn-view', function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                $('#modalContent').load('details.php?id=' + id);
                var modal = new bootstrap.Modal(document.getElementById('detailModal'));
                modal.show();
            });
        });
        </script>
</body>

</html>