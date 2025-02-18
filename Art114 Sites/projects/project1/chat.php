<?php include 'includes/header.php'; ?>
<?php include 'includes/mobile-nav.php'; ?>

<!-- Main Header -->
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
</div>

            <!-- Center - Logo -->
            <div class="flex-1 flex justify-center">
                <a href="feed.php" class="text-2xl lg:text-4xl font-bold text-blue-700 hover:text-blue-800">Skill Spot</a>
            </div>

            <!-- Right side -->
            <            <div class="flex items-center space-x-4">
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

    <!-- Main Content - Full Width -->
    <div class="flex-1 flex">
        <!-- Chat List -->
        <div class="w-80 bg-white border-r">
            <div class="p-4">
                <h2 class="text-xl font-medium mb-4">Messages</h2>
                <!-- Search Bar -->
                <div class="mb-4">
                    <input type="text" placeholder="Search messages..." class="w-full p-2 border rounded-lg">
                </div>
                <!-- Chat List -->
                <div class="space-y-4">
                    <!-- Active Chat -->
                    <div class="flex items-center space-x-3 p-2 bg-red-50 rounded-lg">
                        <img src="images/ProfIcon-01.png" alt="Profile" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex-1">
                            <div class="font-medium">Sarah Wilson</div>
                            <div class="text-sm text-gray-500 truncate">Great trick! How long did it...</div>
                        </div>
                    </div>
                    
                    <!-- Other Chats -->
                    <div class="flex items-center space-x-3 p-2 hover:bg-gray-50 rounded-lg">
                        <img src="images/ProfIcon-01.png" alt="Profile" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex-1">
                            <div class="font-medium">Mike Johnson</div>
                            <div class="text-sm text-gray-500 truncate">Just shared your latest post!</div>
                        </div>
                    </div>
                    
                    <!-- More chat items... -->
                </div>
            </div>
        </div>

        <!-- Chat Window -->
        <div class="flex-1 flex flex-col bg-white">
            <!-- Chat Header -->
            <div class="p-4 border-b flex items-center space-x-3">
                <img src="images/ProfIcon-01.png" alt="Profile" class="w-10 h-10 rounded-full object-cover">
                <div>
                    <div class="font-medium">Sarah Wilson</div>
                    <div class="text-sm text-gray-500">Online</div>
                </div>
            </div>

            <!-- Chat Messages -->
            <div class="flex-1 p-4 space-y-4 overflow-y-auto">
                <!-- Their Message -->
                <div class="flex items-start space-x-2">
                    <img src="images/ProfIcon-01.png" alt="Profile" class="w-8 h-8 rounded-full object-cover">
                    <div class="bg-gray-100 rounded-lg p-3 max-w-md">
                        <p>That trick was amazing! How long did it take you to learn?</p>
                    </div>
                </div>

                <!-- Your Message -->
                <div class="flex items-start justify-end space-x-2">
                    <div class="bg-red-500 text-white rounded-lg p-3 max-w-md">
                        <p>Thanks! It took about 2 months of practice. Still working on landing it smoother.</p>
                    </div>
                </div>

                <!-- Their Message -->
                <div class="flex items-start space-x-2">
                    <img src="images/ProfIcon-01.png" alt="Profile" class="w-8 h-8 rounded-full object-cover">
                    <div class="bg-gray-100 rounded-lg p-3 max-w-md">
                        <p>That's dedication! Would you be up for a session this weekend?</p>
                    </div>
                </div>
            </div>

            <!-- Message Input -->
            <div class="p-4 border-t">
                <div class="flex space-x-2">
                    <input type="text" placeholder="Type a message..." class="flex-1 p-2 border rounded-lg">
                    <button class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">
                        Send
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>