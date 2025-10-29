<?php
include 'db.php';
$table = $_GET['table'] ?? '';
$id = $_GET['id'] ?? null;
$allowedTables = ['pre_school', 'nursery_1', 'nursery_2', 'basic1', 'basic2', 'basic3', 'basic4', 'basic5'];
if (!in_array($table, $allowedTables)) {
    die("Invalid table");
}

$fields = [
    'name' => '',
    'tuition_fee' => 0,
    'transport' => 0,
    'language' => 0,
    'exam_fee' => 0,
    'form' => 0,
    'activity' => 0,
    'dev_levy' => 0,
    'uniform' => 0,
    'sport_wear' => 0,
    'friday_wear' => 0,
    'cardigan' => 0,
    'others' => 0,
    'total' => 0,
    'amount_paid' => 0,
    'balance' => 0,
    'comment' => ''
];
if ($id) {
    $stmt = $pdo->prepare("SELECT * FROM `$table` WHERE id = ?");
    $stmt->execute([$id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$row) {
        die("Record not found");
    }
    foreach ($fields as $k => $v) {
        if (isset($row[$k])) $fields[$k] = $row[$k];
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $id ? 'Edit' : 'Add' ?> record - <?= htmlspecialchars(str_replace('_', ' ', $table)) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background: #f7f7f7;
    }

    .card {
        max-width: 900px;
        margin: 1.5rem auto;
    }

    .grid-cols {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 0.5rem 1rem;
    }

    @media (max-width: 768px) {
        .grid-cols {
            grid-template-columns: 1fr;
        }
    }
    </style>
</head>

<body>
    <div class="card shadow-sm">
        <div class="card-body">
            <h4 class="card-title mb-3"><?= $id ? 'Edit' : 'Add' ?> Record
                (<?= ucfirst(str_replace('_', ' ', $table)) ?>)</h4>

            <form method="POST" action="save.php" id="feeForm">
                <input type="hidden" name="table" value="<?= htmlspecialchars($table) ?>">
                <?php if ($id): ?>
                <input type="hidden" name="id" value="<?= htmlspecialchars($id) ?>">
                <?php endif; ?>

                <div class="mb-3">
                    <label class="form-label">Student Name</label>
                    <input type="text" name="name" class="form-control" required
                        value="<?= htmlspecialchars($fields['name']) ?>">
                </div>

                <div class="grid-cols">
                    <div>
                        <label class="form-label">Tuition Fee</label>
                        <input type="number" step="0.01" min="0" name="tuition_fee" id="tuition_fee"
                            class="form-control number-input" value="<?= htmlspecialchars($fields['tuition_fee']) ?>">
                    </div>
                    <div>
                        <label class="form-label">Transport</label>
                        <input type="number" step="0.01" min="0" name="transport" id="transport"
                            class="form-control number-input" value="<?= htmlspecialchars($fields['transport']) ?>">
                    </div>

                    <div>
                        <label class="form-label">Language</label>
                        <input type="number" step="0.01" min="0" name="language" id="language"
                            class="form-control number-input" value="<?= htmlspecialchars($fields['language']) ?>">
                    </div>
                    <div>
                        <label class="form-label">Exam Fee</label>
                        <input type="number" step="0.01" min="0" name="exam_fee" id="exam_fee"
                            class="form-control number-input" value="<?= htmlspecialchars($fields['exam_fee']) ?>">
                    </div>

                    <div>
                        <label class="form-label">Form </label>
                        <input type="number" step="0.01" min="0" name="form" id="form" class="form-control number-input"
                            value="<?= htmlspecialchars($fields['form']) ?>">
                    </div>
                    <div>
                        <label class="form-label">Activity</label>
                        <input type="number" step="0.01" min="0" name="activity" id="activity"
                            class="form-control number-input" value="<?= htmlspecialchars($fields['activity']) ?>">
                    </div>

                    <div>
                        <label class="form-label">Dev Levy</label>
                        <input type="number" step="0.01" min="0" name="dev_levy" id="dev_levy"
                            class="form-control number-input" value="<?= htmlspecialchars($fields['dev_levy']) ?>">
                    </div>
                    <div>
                        <label class="form-label">Uniform</label>
                        <input type="number" step="0.01" min="0" name="uniform" id="uniform"
                            class="form-control number-input" value="<?= htmlspecialchars($fields['uniform']) ?>">
                    </div>

                    <div>
                        <label class="form-label">Sport Wear</label>
                        <input type="number" step="0.01" min="0" name="sport_wear" id="sport_wear"
                            class="form-control number-input" value="<?= htmlspecialchars($fields['sport_wear']) ?>">
                    </div>
                    <div>
                        <label class="form-label">Friday Wear</label>
                        <input type="number" step="0.01" min="0" name="friday_wear" id="friday_wear"
                            class="form-control number-input" value="<?= htmlspecialchars($fields['friday_wear']) ?>">
                    </div>

                    <div>
                        <label class="form-label">Cardigan</label>
                        <input type="number" step="0.01" min="0" name="cardigan" id="cardigan"
                            class="form-control number-input" value="<?= htmlspecialchars($fields['cardigan']) ?>">
                    </div>
                    <div>
                        <label class="form-label">Others</label>
                        <input type="number" step="0.01" min="0" name="others" id="others"
                            class="form-control number-input" value="<?= htmlspecialchars($fields['others']) ?>">
                    </div>

                    <div>
                        <label class="form-label">Total (auto)</label>
                        <input type="number" step="0.01" min="0" name="total" id="total" class="form-control" readonly
                            value="<?= htmlspecialchars($fields['total']) ?>">
                    </div>
                    <div>
                        <label class="form-label">Amount Paid</label>
                        <input type="number" step="0.01" min="0" name="amount_paid" id="amount_paid"
                            class="form-control number-input" value="<?= htmlspecialchars($fields['amount_paid']) ?>">
                    </div>

                    <div>
                        <label class="form-label">Balance (auto)</label>
                        <input type="number" step="0.01" min="0" name="balance" id="balance" class="form-control"
                            readonly value="<?= htmlspecialchars($fields['balance']) ?>">
                    </div>
                    <div>
                        <label class="form-label">Comment</label>
                        <input type="text" name="comment" id="comment" class="form-control"
                            value="<?= htmlspecialchars($fields['comment']) ?>">
                    </div>
                </div>

                <div class="mt-4 d-flex gap-2">
                    <button type="submit" class="btn btn-success"><?= $id ? 'Update Record' : 'Save Record' ?></button>
                    <a class="btn btn-secondary" href="index.php#<?= htmlspecialchars($table) ?>">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
    function toNum(v) {
        v = parseFloat(v);
        return isNaN(v) ? 0 : v;
    }

    function recalc() {
        const fields = ['tuition_fee', 'transport', 'language', 'exam_fee', 'form', 'activity', 'dev_levy',
            'uniform', 'sport_wear', 'friday_wear', 'cardigan', 'others'
        ];
        let total = 0;
        fields.forEach(function(f) {
            total += toNum(document.getElementById(f).value);
        });
        document.getElementById('total').value = total.toFixed(2);

        let paid = toNum(document.getElementById('amount_paid').value);
        let balance = total - paid;
        document.getElementById('balance').value = balance.toFixed(2);
    }
    document.querySelectorAll('.number-input').forEach(function(el) {
        el.addEventListener('input', recalc);
    });
    document.getElementById('amount_paid').addEventListener('input', recalc);
    recalc();
    document.getElementById('feeForm').addEventListener('submit', function(e) {
        recalc();
    });
    </script>
</body>

</html>