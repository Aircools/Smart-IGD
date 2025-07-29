<?php include '../includes/header.php'; ?>
<form action="result.php" method="post">
    <label>Usia: <input type="number" name="age" required></label>
    <label>Tekanan Darah Sistolik: <input type="number" name="bp_systolic" required></label>
    <label>GCS: <input type="number" name="gcs" min="3" max="15" required></label>
    <label><input type="checkbox" name="chest_pain"> Nyeri Dada?</label>
    <button type="submit">Prediksi</button>
</form>
<?php include '../includes/footer.php'; ?>