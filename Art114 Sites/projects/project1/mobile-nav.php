<!-- Mobile Navigation Overlay -->
<div id="mobileNav" class="fixed inset-0 bg-white z-50 transform translate-x-full transition-transform duration-200 ease-in-out lg:hidden overflow-y-auto">
    <div class="p-4">
        <!-- Close Button and User Info -->
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center space-x-2">
                <img src="images/ProfIcon-01.png" alt="Profile" class="w-8 h-8 rounded-full object-cover">
                <span class="text-gray-700">Name</span>
            </div>
            <button id="closeMobileNav" class="text-red-500 p-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        
        <!-- Mobile Navigation Menu -->
        <nav class="space-y-8">
            <!-- Discover Section -->
            <div>
                <h3 class="text-lg font-medium mb-3">Discover</h3>
                <ul class="space-y-3">
                    <li>
                        <a href="#" class="text-gray-600 hover:text-blue-700 flex items-center py-2">
                            Featured
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-600 hover:text-blue-700 flex items-center py-2">
                            Categories
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-600 hover:text-blue-700 flex items-center py-2">
                            Skill Groups
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-600 hover:text-blue-700 flex items-center py-2">
                            Trending
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Upload Section -->
            <div>
                <h3 class="text-lg font-medium mb-3">Upload</h3>
                <div class="border-2 border-dashed border-gray-300 p-4 text-center rounded">
                    <div class="text-red-500 mb-2">↑</div>
                    <p class="text-sm text-gray-500">Drag and drop or Upload</p>
                </div>
            </div>

            <!-- Saved Section -->
            <div>
                <h3 class="text-lg font-medium mb-3">Saved</h3>
                <ul class="space-y-3">
                    <li>
                        <a href="#" class="text-gray-600 hover:text-blue-700 flex items-center py-2">
                            Posts
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-600 hover:text-blue-700 flex items-center py-2">
                            Comments
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-600 hover:text-blue-700 flex items-center py-2">
                            Skill Groups
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Messages Preview -->
            <div>
                <h3 class="text-lg font-medium mb-3">Messages</h3>
                <div class="space-y-4">
                    <div class="flex items-center space-x-2">
                        <img src="images/ProfIcon-01.png" alt="Profile" class="w-10 h-10 rounded-full object-cover">
                        <div>
                            <div class="font-medium">Sarah Wilson</div>
                            <div class="text-sm text-gray-500">Great trick! How long did it...</div>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <img src="images/ProfIcon-01.png" alt="Profile" class="w-10 h-10 rounded-full object-cover">
                        <div>
                            <div class="font-medium">Mike Johnson</div>
                            <div class="text-sm text-gray-500">Just shared your latest post!</div>
                        </div>
                    </div>
                    <!-- View All Messages Link -->
                    <a href="#" class="text-red-500 hover:text-red-600 block text-center py-2">
                        View All Messages
                    </a>
                </div>
            </div>

            <!-- Additional Navigation -->
            <div class="space-y-3">
                <a href="#" class="text-gray-600 hover:text-blue-700 block py-2">Notifications</a>
                <a href="#" class="text-gray-600 hover:text-blue-700 block py-2">Settings</a>
            </div>
        </nav>
    </div>
</div>