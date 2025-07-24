<?php
require 'config.php';

// Load the HTML file content
$html = file_get_contents("about.html");

$pageData = [
    'page' => [
        'title' => 'About Our Store',
        'body_html' => $html,
        'published' => true
    ]
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://$shopify_shop_domain/admin/api/2024-01/pages.json");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($pageData));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json",
    "X-Shopify-Access-Token: $shopify_access_token"
]);

$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpcode === 201) {
    echo "<p>✅ HTML page uploaded successfully to Shopify!</p>";
} else {
    echo "<p>❌ Failed to upload. HTTP status: $httpcode</p>";
    echo "<pre>$response</pre>";
}
?>
