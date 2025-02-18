<?php include 'includes/header.php'; ?>
<?php include 'includes/mobile-nav.php'; ?>

<header class="bg-white border-b">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            <!-- Mobile menu button -->
            <button id="mobileMenuBtn" class="lg:hidden text-red-500">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            <!-- Left side - hidden on mobile -->
            <div class="hidden lg:flex items-center space-x-4">
    <a href="account.php" class="flex items-center space-x-2">
        <img src="images/ProfIcon-01.png" alt="Profile" class="w-8 h-8 rounded-full object-cover">
        <span class="text-gray-700">Name</span>
    </a>
    <button class="text-red-500 hover:text-red-600">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg>
    </button>
    <a href="settings.php" class="text-red-500 hover:text-red-600">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
        </svg>
    </a>
</div>

            <!-- Center - Logo -->
            <div class="flex-1 flex justify-center">
                <a href="feed.php" class="text-2xl lg:text-4xl font-bold text-blue-700 hover:text-blue-800">Skill Spot</a>
            </div>

            <!-- Right side -->
            <div class="flex items-center space-x-4">
            <a href="chat.php" class="text-red-500 hover:text-red-600 hidden lg:block">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
            </svg>
            </a>
            <div class="h-6 w-px bg-gray-300 hidden lg:block"></div>
            <a href="index.php" class="text-red-500 hover:text-red-600">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
            </svg>
            </a>
        </div>
    </div>
</header>
<div class="flex flex-col lg:flex-row min-h-screen bg-gray-100">
    <!-- Left Sidebar - Hidden on mobile -->
    <div class="hidden lg:block w-64 bg-white shadow-lg">
        <div class="p-4">
            <!-- Navigation -->
            <nav class="space-y-6">
                <div>
                    <h3 class="text-lg font-medium mb-2">Discover</h3>
                    <ul class="space-y-2">
                        <li><a href="featured.php" class="text-gray-600 hover:text-blue-700">Featured</a></li>
                        <li><a href="categories.php" class="text-gray-600 hover:text-blue-700">Categories</a></li>
                        <li><a href="skillgroups.php" class="text-gray-600 hover:text-blue-700">Skill Groups</a></li>
                        <li><a href="trending.php" class="text-gray-600 hover:text-blue-700">Trending</a></li>
                    </ul>
                </div>
                
                <!-- Upload Section -->
                <div>
                    <h3 class="text-lg font-medium mb-2">Upload</h3>
                    <div class="border-2 border-dashed border-gray-300 p-4 text-center rounded">
                        <div class="text-red-500 mb-2">↑</div>
                        <p class="text-sm text-gray-500">Drag and drop or Upload</p>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-4 lg:p-8">
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg">
            <!-- Profile Header -->
            <div class="p-6 border-b">
                <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between">
                    <div class="flex items-center mb-4 lg:mb-0">
                        <img src="images/ProfIcon-01.png" alt="Profile" class="w-16 h-16 rounded-full object-cover">
                        <div class="ml-4">
                            <h2 class="text-xl font-bold">Name</h2>
                            <p class="text-gray-600">Username</p>
                        </div>
                    </div>
                    <div class="flex space-x-8">
                        <div class="text-center">
                            <div class="font-bold">999</div>
                            <div class="text-gray-600">Followers</div>
                        </div>
                        <div class="text-center">
                            <div class="font-bold">999</div>
                            <div class="text-gray-600">Following</div>
                        </div>
                    </div>
                    <button class="text-gray-400 hover:text-gray-600">•••</button>
                </div>

                <!-- Bio Section -->
                <div class="mt-6">
                    <h3 class="text-lg font-medium mb-2">Personal Info</h3>
                    <p class="text-gray-600 mb-4">........................................................................................................................</p>
                    <h3 class="text-lg font-medium mb-2">Bio</h3>
                    <p class="text-gray-600">........................................................................................................................</p>
                </div>
            </div>

            <!-- Content Tabs -->
            <div class="border-b">
                <div class="flex">
                    <button class="px-6 py-3 text-red-500 border-b-2 border-red-500">Posts</button>
                    <button class="px-6 py-3 text-gray-500 hover:text-gray-700">Showcases</button>
                </div>
            </div>

            <!-- Posts Grid -->
            <div class="p-6">
                <div class="grid grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Post Items -->
                    <?php for ($i = 0; $i < 6; $i++): ?>
                    <div class="relative group">
                        <div class="bg-gray-200 aspect-square rounded-lg"></div>
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-200 rounded-lg flex items-center justify-center gap-4">
                            <div class="text-white opacity-0 group-hover:opacity-100 flex items-center">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"></path>
                                </svg>
                                <span class="ml-1">99</span>
                            </div>
                            <div class="text-white opacity-0 group-hover:opacity-100 flex items-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                                <span class="ml-1">99</span>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Sidebar - Messages -->
    <div class="hidden lg:block w-64 bg-white shadow-lg p-4">
        <h3 class="font-medium mb-4">Messages</h3>
        <div class="space-y-4">
            <!-- Message items -->
            <div class="flex items-center space-x-2">
                <img src="images/ProfIcon-01.png" alt="Profile" class="w-10 h-10 rounded-full object-cover">
                <div>
                    <div class="font-medium">Sarah Wilson</div>
                    <div class="text-sm text-gray-500">Great trick! How long did it...</div>
                </div>
            </div>
            <!-- More message items... -->
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>