<?PHP
$data =  '{ res: whatever youre serializing}';
header('Content-Type: application/json');
echo json_encode($data);
?>