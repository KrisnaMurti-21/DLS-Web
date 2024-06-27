<!-- di dalam view -->
<!DOCTYPE html>
<html>

<head>
    <title>Counter Visitor Online</title>
</head>

<body>
    <h1>Jumlah Pengunjung Online Saat Ini: <?= countOnlineVisitors(); ?></h1>
    <h1>Jumlah Pengunjung Hari Ini: <?= countVisitorsToday(); ?></h1>
    <h1>Jumlah Pengunjung Bulan Ini: <?= countVisitorsThisMonth(); ?></h1>
    <h1>Total Pengunjung: <?= countTotalVisitors(); ?></h1>
</body>

</html>