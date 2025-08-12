<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Univs</title>
    <!-- In resources/views/layouts/app.blade.php or similar -->
  <link rel="stylesheet" href="{{ asset('style.css') }}?v=2">
    <!-- Bootstrap CDN -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('image/favi.webp') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('image/favi.webp') }}" />
    <link rel="shortcut icon" href="{{ asset('image/favi.webp') }}" />
    <link rel="stylesheet" href="/css/style.css">
<script src="/js/app.js?v=20250811"></script>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="row align-items-center">
                    <a class="profileImg" href="">
                        SA
                    </a>
                    <div class="studentPortal">
                        <h3>Student Study Portal</h3>
                        <h3>Student Dashboard</h3>
                    </div>
                </div>
                <div class="d-flex align-items-center profileIcon">
                    <svg class="mr-10" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bell" aria-hidden="true"><path d="M10.268 21a2 2 0 0 0 3.464 0"></path><path d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326"></path></svg>
                    <span class="mr-10">Welcome, Aditya</span>
                    <div class="profile">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user text-gray-600" aria-hidden="true"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>