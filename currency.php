<?php
// JSON faylini yuklash
$json_data = file_get_contents('currency.json'); // Yoki manbangizni kiriting

// JSON ma'lumotni arrayga o'girish
$data = json_decode($json_data, true);

// Agar JSON kodida xatolik bo'lsa, uni tekshirish
if (json_last_error() !== JSON_ERROR_NONE) {
    echo "JSON formatda xato bor!";
    exit;
}

// Ma'lumotlarni chiroyli ko'rinishda chiqarish
echo "<pre>";
print_r($data);
echo "</pre>";
?>
