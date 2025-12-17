<!doctype html>
<html lang="km">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Khmer Date</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<?php
// Days in Khmer
$days = [
    "Monday" => "ចន្ទ",
    "Tuesday" => "អង្គារ",
    "Wednesday" => "ពុធ",
    "Thursday" => "ព្រហស្បតិ៍",
    "Friday" => "សុក្រ",
    "Saturday" => "សៅរ៍",
    "Sunday" => "អាទិត្យ"
];

// Months in Khmer
$months = [
    1 => "មករា", 2 => "កុម្ភៈ", 3 => "មីនា", 4 => "មេសា",
    5 => "ឧសភា", 6 => "មិថុនា", 7 => "កក្កដា", 8 => "សីហា",
    9 => "កញ្ញា", 10 => "តុលា", 11 => "វិច្ឆិកា", 12 => "ធ្នូ"
];

$dayName = $days[date("l")];
$day     = date("d");
$month   = $months[date("n")];
$year    = date("Y");

echo "<h1 class='text-light m-1 p-5 bg-primary border rounded-5 text-center'>";
echo "ថ្ងៃ$dayName ទី$day ខែ$month ឆ្នាំ$year";
echo "</h1>";
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
