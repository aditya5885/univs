<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Univs</title>
  <link rel="stylesheet" href="{{ asset('style.css') }}?v=2">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('image/favi.webp') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('image/favi.webp') }}" />
    <link rel="shortcut icon" href="{{ asset('image/favi.webp') }}" />
    <link rel="stylesheet" href="/css/style.css">
<script src="/js/app.js?v=20250811"></script>
</head>
<body>
    <header class="header">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-between">
                <div class="row align-items-center">
                    <div class="hamBurger">
                        <button class="hamburger mr-10" id="menuToggle" aria-label="Toggle Menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                    <a class="profileImg mr-10" href="">SA</a>
                    <div class="studentPortal">
                        <h3>Student Study Portal</h3>
                        <h3>Student Dashboard</h3>
                    </div>
                </div>
                <div class="d-flex align-items-center profileIcon">
                    <a href="">
                        <svg class="mr-10" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bell" aria-hidden="true"><path d="M10.268 21a2 2 0 0 0 3.464 0"></path><path d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326"></path></svg>
                    </a>
                        <span class="mr-10 welcomE">Welcome, Aditya</span>
                    <a href="">
                        <div class="profile">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user text-gray-600" aria-hidden="true"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <section class="com60 pt-0">
        <div class="row">
            <div class="row-five">
                <div class="NavLeft">
                    <h3>Student Menu</h3>
                    <ul class="no-list ml-0 mt-15 navMenu d-block">
                        <li>
                            <a class="d-flex align-items-center" href="#">
                                <svg class="mr-10" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house text-blue-600" aria-hidden="true"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>
                                <span>Home</span></a>
                        </li>
                        <li>
                            <a class="d-flex align-items-center" href="#">
                                <svg class="mr-10" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-graduation-cap text-gray-500" aria-hidden="true"><path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"></path><path d="M22 10v6"></path><path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path></svg>
                                <span>Study Abroad Apply</span></a>
                        </li>
                        <li>
                            <a class="d-flex align-items-center" href="#">
                               <svg class="mr-10" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text text-gray-500" aria-hidden="true"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg>
                                <span>My Applications</span></a>
                        </li>
                        <li>
                            <a class="d-flex align-items-center" href="#">
                                <svg class="mr-10" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-settings text-gray-500" aria-hidden="true"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                <span>Services</span></a>
                        </li>
                        <li>
                            <a class="d-flex align-items-center" href="#">
                                <svg class="mr-10" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle text-gray-500" aria-hidden="true"><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path></svg>
                                <span>Support Ticket</span></a>
                        </li>
                        <li>
                            <a class="d-flex align-items-center" href="#">
                                <svg class="mr-10" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-credit-card text-gray-500" aria-hidden="true"><rect width="20" height="14" x="2" y="5" rx="2"></rect><line x1="2" x2="22" y1="10" y2="10"></line></svg>
                                <span>Payment</span></a>
                        </li>
                        <li>
                            <a class="d-flex align-items-center" href="#">
                                <svg class="mr-10" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-bag text-gray-500" aria-hidden="true"><path d="M16 10a4 4 0 0 1-8 0"></path><path d="M3.103 6.034h17.794"></path><path d="M3.4 5.467a2 2 0 0 0-.4 1.2V20a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6.667a2 2 0 0 0-.4-1.2l-2-2.667A2 2 0 0 0 17 2H7a2 2 0 0 0-1.6.8z"></path></svg>
                                <span>My Orders</span></a>
                        </li>
                        <li>
                            <a class="d-flex align-items-center" href="#">
                                <svg class="mr-10" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user text-gray-500" aria-hidden="true"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <span>My Account</span></a>
                        </li>
                        <li>
                            <a class="d-flex align-items-center" href="#">
                                <svg class="mr-10" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-open text-gray-500" aria-hidden="true"><path d="M12 7v14"></path><path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"></path></svg>
                                <span>Course Suggestions</span></a>
                        </li>
                        <li>
                            <a class="d-flex align-items-center" href="#">
                                <svg class="mr-10" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-check text-gray-500" aria-hidden="true"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="m9 15 2 2 4-4"></path></svg>
                                <span>Document Requests</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row-e">
                <div class="MainContent mb-20">
                    <div class="WelcomeTab">
                        <h2 class="">Welcome back, Aditya!</h2>
                        <p>Track your study abroad journey and manage your applications all in one place.</p>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between DashBMainTab dashIcon mb-20">
                    <div class="row-four">
                        <div class="dashboardContent">
                            <div class="dashBIcon mb-15">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#fff" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text text-white" aria-hidden="true"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg>
                            </div>
                            <h3 class="mb-5">3</h3>
                            <span>Active Applications</span>
                        </div>
                    </div>
                    <div class="row-four">
                        <div class="dashboardContent">
                            <div class="dashBIcon mb-15">
                                <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-credit-card text-white" aria-hidden="true"><rect width="20" height="14" x="2" y="5" rx="2"></rect><line x1="2" x2="22" y1="10" y2="10"></line></svg>
                            </div>
                            <h3 class="mb-5">$100</h3>
                            <span>Pending Payments</span>
                        </div>
                    </div>
                    <div class="row-four">
                        <div class="dashboardContent">
                            <div class="dashBIcon mb-15">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#fff" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text text-white" aria-hidden="true"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg>
                            </div>
                            <h3 class="mb-5">4</h3>
                            <span>Course Suggestions</span>
                        </div>
                    </div>
                    <div class="row-four">
                        <div class="dashboardContent">
                            <div class="dashBIcon mb-15">
                                <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle text-white" aria-hidden="true"><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path></svg>
                            </div>
                            <h3 class="mb-5">1</h3>
                            <span>Support Tickets</span>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between  DashBMainTab mb-20">
                    <div class="row-half pr-15">
                        <div class="dashboardContent recentActivity">
                            <h3 class="mb-20">Recent Activity</h3>
                            <div class="mb-30 recentDashboard">
                                <div class="row justify-content-between activityEnd">
                                    <div class="row">
                                        <div class="comIcon mr-15">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#fff" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text text-gray-600" aria-hidden="true"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg>
                                        </div>
                                        <div class="dashBoardTitle">
                                            <h3>Application submitted SEO University</h3>
                                            <span>3 hours ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="mb-30 recentDashboard">
                                <div class="row justify-content-between activityEnd">
                                    <div class="row">
                                        <div class="comIcon mr-15">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#fff" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text text-gray-600" aria-hidden="true"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg>
                                        </div>
                                        <div class="dashBoardTitle">
                                            <h3>Approval waiting</h3>
                                            <span>3 hours ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-20 recentDashboard">
                                <div class="row justify-content-between activityEnd">
                                    <div class="row">
                                        <div class="comIcon mr-15">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#fff" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text text-gray-600" aria-hidden="true"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg>
                                        </div>
                                        <div class="dashBoardTitle">
                                            <h3>Ticket No: #21 issued</h3>
                                            <span>3 hours ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-half">
                        <div class="dashboardContent docTitle newAction">
                            <h3 class="mb-15">Quick Actions</h3>
                            <div class="applicationQ row">
                                <div class="row-half">
                                    <div class="eachApplicant" data-color="orange">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-file-text">
                                            <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                            <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                            <path d="M10 9H8"></path>
                                            <path d="M16 13H8"></path>
                                            <path d="M16 17H8"></path>
                                        </svg>
                                        <h3>New Application</h3>
                                    </div>
                                </div>
                                <div class="row-half">
                                    <div class="eachApplicant" data-color="green">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-file-check">
                                            <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                            <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                            <path d="m9 15 2 2 4-4"></path>
                                        </svg>
                                        <h3>Approved</h3>
                                    </div>
                                </div>
                                <div class="row-half">
                                    <div class="eachApplicant" data-color="blue">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-message-circle">
                                            <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                                        </svg>
                                        <h3>Messages</h3>
                                    </div>
                                </div>
                                <div class="row-half">
                                    <div class="eachApplicant" data-color="purple">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-credit-card">
                                            <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                                            <line x1="2" x2="22" y1="10" y2="10"></line>
                                        </svg>
                                        <h3>Payments</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between  DashBMainTab align-items-center">
                    <div class="row-three">
                        <div class="dashboardContent recentActivity">
                            <h3 class="mb-30">My Course Suggestions</h3>
                            <div class="d-block mx-auto text-center CourseContent">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d1d5db" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-open text-gray-300 mx-auto mb-4" aria-hidden="true"><path d="M12 7v14"></path><path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"></path></svg>
                                <h3 class="mb-20">No course suggestions found</h3>
                                <a class="comBtn" href="#">Browse Courses</a>
                            </div>
                        </div>
                    </div>
                    <div class="row-three">
                        <div class="dashboardContent recentActivity">
                            <h3 class="mb-30">Latest Document Requested</h3>
                            <div class="d-block mx-auto text-center CourseContent">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d1d5db" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-open text-gray-300 mx-auto mb-4" aria-hidden="true"><path d="M12 7v14"></path><path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"></path></svg>
                                <h3 class="mb-20">No document requests found</h3>
                                <a class="comBtn" href="#">Request Documents</a>
                            </div>
                        </div>
                    </div>
                    <div class="row-three">
                        <div class="dashboardContent recentActivity">
                            <h3 class="mb-30">My Course Suggestions</h3>
                            <div class="d-block mx-auto text-center CourseContent">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d1d5db" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-open text-gray-300 mx-auto mb-4" aria-hidden="true"><path d="M12 7v14"></path><path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"></path></svg>
                                <h3 class="mb-20">No applications found</h3>
                                <a class="comBtn" href="#">Start Application</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <nav class="NavLeft" id="mobileMenu">
    <div class="mobNav">
        <h4>Student Study Portal</h4>
        <h4>Student Dashboard</h4>
    </div>
    <ul class="no-list ml-0 mt-15  d-block">
    <li>
        <a class="d-flex align-items-center" href="#">
            <svg class="mr-10" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house text-blue-600" aria-hidden="true"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>
            <span>Home</span></a>
    </li>
    <li>
        <a class="d-flex align-items-center" href="#">
            <svg class="mr-10" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-graduation-cap text-gray-500" aria-hidden="true"><path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"></path><path d="M22 10v6"></path><path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path></svg>
            <span>Study Abroad Apply</span></a>
    </li>
    <li>
        <a class="d-flex align-items-center" href="#">
            <svg class="mr-10" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text text-gray-500" aria-hidden="true"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg>
            <span>My Applications</span></a>
    </li>
    <li>
        <a class="d-flex align-items-center" href="#">
            <svg class="mr-10" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-settings text-gray-500" aria-hidden="true"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"></path><circle cx="12" cy="12" r="3"></circle></svg>
            <span>Services</span></a>
    </li>
    <li>
        <a class="d-flex align-items-center" href="#">
            <svg class="mr-10" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle text-gray-500" aria-hidden="true"><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path></svg>
            <span>Support Ticket</span></a>
    </li>
    <li>
        <a class="d-flex align-items-center" href="#">
            <svg class="mr-10" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-credit-card text-gray-500" aria-hidden="true"><rect width="20" height="14" x="2" y="5" rx="2"></rect><line x1="2" x2="22" y1="10" y2="10"></line></svg>
            <span>Payment</span></a>
    </li>
    <li>
        <a class="d-flex align-items-center" href="#">
            <svg class="mr-10" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-bag text-gray-500" aria-hidden="true"><path d="M16 10a4 4 0 0 1-8 0"></path><path d="M3.103 6.034h17.794"></path><path d="M3.4 5.467a2 2 0 0 0-.4 1.2V20a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6.667a2 2 0 0 0-.4-1.2l-2-2.667A2 2 0 0 0 17 2H7a2 2 0 0 0-1.6.8z"></path></svg>
            <span>My Orders</span></a>
    </li>
    <li>
        <a class="d-flex align-items-center" href="#">
            <svg class="mr-10" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user text-gray-500" aria-hidden="true"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
            <span>My Account</span></a>
    </li>
    <li>
        <a class="d-flex align-items-center" href="#">
            <svg class="mr-10" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-open text-gray-500" aria-hidden="true"><path d="M12 7v14"></path><path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"></path></svg>
            <span>Course Suggestions</span></a>
    </li>
    <li>
        <a class="d-flex align-items-center" href="#">
            <svg class="mr-10" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-check text-gray-500" aria-hidden="true"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="m9 15 2 2 4-4"></path></svg>
            <span>Document Requests</span></a>
    </li>
</ul>
</nav>
</body>
  
<script>
document.querySelectorAll('.NavLeft a').forEach(link => {
  link.addEventListener('click', function(e) {
    e.preventDefault(); // remove if you want real navigation
    document.querySelectorAll('.NavLeft a').forEach(item => item.classList.remove('active'));
    this.classList.add('active');
  });
});
document.querySelectorAll('.eachApplicant').forEach(item => {
    item.addEventListener('click', () => {
        document.querySelectorAll('.eachApplicant').forEach(el => el.classList.remove('active'));
        item.classList.add('active');
    });
});
/* keep your existing listeners above if you like; this is a drop-in */

document.querySelectorAll('.NavLeft a').forEach(link => {
  link.addEventListener('click', function(e) {
    e.preventDefault();
    document.querySelectorAll('.NavLeft a').forEach(item => item.classList.remove('active'));
    this.classList.add('active');
  });
});
document.querySelectorAll('.eachApplicant').forEach(item => {
  item.addEventListener('click', () => {
    document.querySelectorAll('.eachApplicant').forEach(el => el.classList.remove('active'));
    item.classList.add('active');
  });
});
const btn = document.getElementById('menuToggle');
const menu = document.getElementById('mobileMenu');
const backdrop = Object.assign(document.body.appendChild(document.createElement('div')), { id: 'menuBackdrop' });
let scrollPos = 0;

const openMenu = () => {
  scrollPos = window.scrollY;
  menu.classList.add('show');
  backdrop.classList.add('show');
  btn.classList.add('active');
  document.body.style.position = 'fixed';
  document.body.style.top = `-${scrollPos}px`;
};

const closeMenu = () => {
  menu.classList.remove('show');
  backdrop.classList.remove('show');
  btn.classList.remove('active');
  menu.addEventListener('transitionend', function handler() {
    document.body.style.position = '';
    document.body.style.top = '';
    window.scrollTo(0, scrollPos); // restore scroll
    menu.removeEventListener('transitionend', handler);
  });
};

btn.onclick = () => menu.classList.contains('show') ? closeMenu() : openMenu();
backdrop.onclick = closeMenu;
menu.querySelectorAll('a').forEach(a => a.onclick = closeMenu);
</script>
</html>