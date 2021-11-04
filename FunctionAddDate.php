<?php
function AddDate($format, $timestamp)
{
    return date('Y-m-d', strtotime($format . $timestamp));
}

echo AddDate(date('Y-m-d'), '+ 1 days');
?>