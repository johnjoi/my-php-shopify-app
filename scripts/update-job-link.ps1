# Use the current directory as base path
$folderPath = "$PWD"

# Original and new URLs
$oldUrl = "https://go4affm.com/c/?p=29992&amp;o=22101"
$newUrl = "https://joblagii.com/job-application/"

# Escape the & for HTML
$escapedOldUrl = "https://go4affm.com/c/?p=29992&amp;o=22101"

# Loop through all .html files
Get-ChildItem -Path $folderPath -Recurse -Include *.html | ForEach-Object {
    $filePath = $_.FullName
    $content = Get-Content $filePath -Raw

    if ($content -like "*$escapedOldUrl*") {
        $updatedContent = $content -replace [Regex]::Escape($escapedOldUrl), $newUrl
        Set-Content -Path $filePath -Value $updatedContent
        Write-Host "✅ Updated URL in:" $filePath
    }
    else {
        Write-Host "⏭️ No match in:" $filePath
    }
}
