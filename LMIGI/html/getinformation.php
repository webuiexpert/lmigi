<?php

$lmname =  $_POST["lmname"];
$lmemail = $_POST["lmemail"];
$lmmessage = $_POST["lmmessage"];
$to = "enquiries@lmigi.com.au";
$subject = "A New Contact Request";

$message = "
<html>
<head>
<title>A New Contact Request</title>
</head>
<body>
<style>
    table.blueTable {
        border: 1px solid #1C6EA4;
        background-color: #EEEEEE;

        text-align: left;
        border-collapse: collapse;
    }

    table.blueTable td, table.blueTable th {
        border: 1px solid #AAAAAA;
        padding: 6px 4px;
    }

    table.blueTable tbody td {
        font-size: 16px;
    }

    table.blueTable tr:nth-child(even) {
        background: #d7e8c4;
    }

    table.blueTable thead {
        background: #8ac646;
      
        border-bottom: 2px solid #444444;
    }

    table.blueTable thead th {
        font-size: 15px;
        font-weight: bold;
        color: #FFFFFF;
        text-align: left;
        border-left: 2px solid #D0E4F5;
    }

    table.blueTable thead th:first-child {
        border-left: none;
    }

    table.blueTable tfoot {
        font-size: 14px;
        font-weight: bold;
        color: #FFFFFF;
        background: #D0E4F5;
        background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
        background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
        background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
        border-top: 2px solid #444444;
    }

    table.blueTable tfoot td {
        font-size: 14px;
    }

    table.blueTable tfoot .links {
        text-align: right;
    }

    table.blueTable tfoot .links a {
        display: inline-block;
        background: #1C6EA4;
        color: #FFFFFF;
        padding: 2px 8px;
        border-radius: 5px;
    }
</style>
<table  class=\"blueTable\" border=\"1\" cellpadding=\"10\">
<tr>
<th>Name: </th>
<td >$lmname</td>
</tr>
<tr>
<th>Email: </th>
<td>$lmemail</td>
</tr>
<tr>
<th>Message: </th>
<td>$lmmessage</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= "From: $lmemail" . "\r\n";


$result = mail($to,$subject,$message,$headers);
if(!$result) {   
     echo "<p class='red'>Error.</p>";   
} else {
    echo "<p class='green'>Thank you. Your enquiry has been received and someone will be in touch shortly.</p>";
}
 
?>

