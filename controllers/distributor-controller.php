<?php
require 'config/db_config.php';

$stmt = $pdo->prepare("
    SELECT d.msd_name, d.msd_type, d.msd_contact, d.msd_address, d.msd_map_embed, p.msp_name
    FROM ms_distributors d
    JOIN ms_province p ON d.msd_msp_code = p.msp_code
    WHERE d.msd_status = 'T'
    ORDER BY d.msd_code
");
$stmt->execute();
$raw = $stmt->fetchAll();

$distributors = array();

foreach ($raw as $row) {
    $distributors[] = array(
        'name'    => $row['msd_name'],
        'region'  => 'filter-' . strtolower(str_replace(' ', '-', $row['msp_name'])),
        'type'    => $row['msd_type'],
        'contact' => $row['msd_contact'],
        'address' => $row['msd_address'],
        'map'     => '<iframe src="' . $row['msd_map_embed'] . '" frameborder="0" style="border:0; width: 100%; height: 250px; border-radius: 8px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
    );
}

return $distributors;