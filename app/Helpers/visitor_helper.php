<?php

function countOnlineVisitors()
{
    $session = session();
    $ip_address = $_SERVER['REMOTE_ADDR'];

    // Periksa apakah pengunjung dengan IP address ini ada dalam 5 menit terakhir
    $model = new \App\Models\OnlineVisitorModel();
    $existingVisitor = $model->where('ip_address', $ip_address)
                             ->where('timestamp >= NOW() - INTERVAL 15 MINUTE')
                             ->first();

    if (!$existingVisitor) {
        // Jika pengunjung tidak ada dalam 5 menit terakhir, tambahkan ke database
        $model->insert(['ip_address' => $ip_address]);
    }

    // Hitung jumlah pengunjung online saat ini
    $count = $model->where('timestamp >= NOW() - INTERVAL 15 MINUTE')
                   ->countAllResults();

    return $count;
}

function countVisitorsToday()
{
    $model = new \App\Models\OnlineVisitorModel();

    $todayStart = date('Y-m-d 00:00:00');
    $todayEnd = date('Y-m-d 23:59:59');

    $model->where('timestamp >=', $todayStart);
    $model->where('timestamp <=', $todayEnd);

    return $model->countAllResults();
}

function countVisitorsThisMonth()
{
    $model = new \App\Models\OnlineVisitorModel();

    $firstDayOfMonth = date('Y-m-01 00:00:00');
    $lastDayOfMonth = date('Y-m-t 23:59:59');

    $model->where('timestamp >=', $firstDayOfMonth);
    $model->where('timestamp <=', $lastDayOfMonth);

    return $model->countAllResults();
}

function countTotalVisitors()
{
    $model = new \App\Models\OnlineVisitorModel();

    return $model->countAll();
}
