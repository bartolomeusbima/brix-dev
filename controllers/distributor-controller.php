<?php
require 'config/db_config.php';

$stmt = $pdo->prepare("
    SELECT 
        msd.msd_code, 
        msd.msd_name, 
        msd.msd_type, 
        msd.msd_contact, 
        msd.msd_address, 
        msd.msd_map_embed, 
        msp.msp_name 
    FROM 
        ms_distributors AS msd
    JOIN 
        ms_province AS msp ON msd.msd_msp_code = msp.msp_code 
    WHERE 
        msd.msd_status = 'T' 
    ORDER BY 
        msd.msd_join_date DESC, 
        msd.msd_code DESC;
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