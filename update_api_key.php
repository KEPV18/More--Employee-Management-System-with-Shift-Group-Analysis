<?php
// تحديد مسار الملف الذي يحتوي على API Key
$targetFile = 'path/to/your/script.php'; // عدل هذا المسار إلى الملف الذي يحتوي على API Key

// الحصول على البيانات القادمة من الطلب
$inputData = json_decode(file_get_contents('php://input'), true);

// التأكد من وجود مفتاح جديد
if (isset($inputData['apiKey'])) {
    $newApiKey = $inputData['apiKey'];

    // قراءة محتوى الملف
    $fileContent = file_get_contents($targetFile);

    // البحث عن السطر الذي يحتوي على الـ API Key وتحديثه
    $updatedContent = preg_replace(
        "/(let currentApiKey\s*=\s*)\"[^\"]+\";/",
        "$1\"$newApiKey\";",
        $fileContent
    );

    // كتابة التحديثات إلى نفس الملف
    if (file_put_contents($targetFile, $updatedContent)) {
        // إرسال استجابة نجاح
        echo json_encode(['status' => 'success', 'message' => 'API Key updated successfully']);
    } else {
        // إرسال استجابة فشل
        http_response_code(500);
        echo json_encode(['status' => 'error', 'message' => 'Failed to update the API Key']);
    }
} else {
    // إرسال استجابة خطأ لعدم وجود الـ API Key
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'No API Key provided']);
}
?>
