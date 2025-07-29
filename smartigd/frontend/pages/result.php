<?php
require '../api_client.php';

$data = [
    'age' => $_POST['age'],
    'bp_systolic' => $_POST['bp_systolic'],
    'bp_diastolic' => 80,  // Default
    'heart_rate' => 70,    // Default
    'temperature' => 36.5,
    'gcs' => $_POST['gcs'],
    'oxygen_saturation' => 98.0,
    'chest_pain' => isset($_POST['chest_pain']) ? 1 : 0
];

$result = callFastAPI($data);
?>
<p>Konsul diperlukan: <?= $result['referral_needed'] ? 'Ya' : 'Tidak' ?></p>