<?php include 'includes/header.php'; ?>
<?php include 'includes/mobile-nav.php'; ?>

<!-- Main Header -->
<header class="bg-white border-b">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            <!-- Left side -->
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
                        <li><a href="skillgroups.php" class="text-red-500 hover:text-red-600">Skill Groups</a></li>
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
        <!-- Skill Groups Title -->
        <h2 class="text-2xl lg:text-3xl font-medium mb-6 text-center">Skill Groups</h2>

        <!-- Groups Grid -->
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Group Card 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="w-full h-48 bg-gray-200"></div>
                    <div class="p-4">
                        <h3 class="text-red-500 font-medium mb-1">Group Name</h3>
                        <p class="text-gray-600 text-sm mb-1">Description</p>
                        <p class="text-gray-500 text-sm mb-3">Member Count</p>
                        <button class="w-full bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition-colors">
                            Join Group
                        </button>
                    </div>
                </div>

                <!-- Repeat for 11 more cards -->
                <!-- Cards 2-12 with same structure -->
                <?php
                // Generate 11 more identical cards
                for ($i = 0; $i < 11; $i++) {
                    echo '<div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="w-full h-48 bg-gray-200"></div>
                        <div class="p-4">
                            <h3 class="text-red-500 font-medium mb-1">Group Name</h3>
                            <p class="text-gray-600 text-sm mb-1">Description</p>
                            <p class="text-gray-500 text-sm mb-3">Member Count</p>
                            <button class="w-full bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition-colors">
                                Join Group
                            </button>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Right Sidebar - Messages - Hidden on mobile -->
    <div class="hidden lg:block w-64 bg-white shadow-lg p-4">
        <h3 class="font-medium mb-4">Messages</h3>
        <div class="space-y-4">
        <div class="flex items-center space-x-2">
                <img src="images/ProfIcon-01.png" alt="Profile" class="w-10 h-10 rounded-full object-cover">
                <div>
                    <div class="font-medium">Jeffery Schmooley</div>
                    <div class="text-sm text-gray-500">Great trick!</div>
                </div>
            </div>
            <div class="flex items-center space-x-2">
                <img src="images/ProfIcon-01.png" alt="Profile" class="w-10 h-10 rounded-full object-cover">
                <div>
                    <div class="font-medium">Bobby Shoenfelt</div>
                    <div class="text-sm text-gray-500">Yo check out this video</div>
                </div>
            </div>
            <div class="flex items-center space-x-2">
                <img src="images/ProfIcon-01.png" alt="Profile" class="w-10 h-10 rounded-full object-cover">
                <div>
                    <div class="font-medium">Shblevin Shblevin</div>
                    <div class="text-sm text-gray-500">Start a conversation...</div>
                </div>
            </div>
            <div class="flex items-center space-x-2">
                <img src="images/ProfIcon-01.png" alt="Profile" class="w-10 h-10 rounded-full object-cover">
                <div>
                    <div class="font-medium">John Thiggle</div>
                    <div class="text-sm text-gray-500">Start a conversation..</div>
                </div>
            </div>
            <div class="flex items-center space-x-2">
                <img src="images/ProfIcon-01.png" alt="Profile" class="w-10 h-10 rounded-full object-cover">
                <div>
                    <div class="font-medium">Jimothey Stevens</div>
                    <div class="text-sm text-gray-500">Start a conversation..</div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>