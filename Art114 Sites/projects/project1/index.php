<?php include 'includes/header.php'; ?>

<div class="container mx-auto p-4 flex justify-center items-center min-h-screen">
  <div class="w-full max-w-4xl bg-white rounded-lg shadow-lg p-8 flex">
    <!-- Left side with logo and images -->
    <div class="w-1/2 pr-8">
      <h1 class="text-4xl font-bold text-blue-700 mb-8">Skill Spot</h1>
      <div class="relative">
        <!-- Stacked images from the design -->
        <img src="https://placeimg.com/400/300/sport" alt="Skater" class="rounded-lg mb-4">
        <img src="https://placeimg.com/300/200/sport" alt="Winter sports" class="rounded-lg mb-4 ml-8">
        <img src="https://placeimg.com/250/200/sport" alt="Motorcycle" class="rounded-lg ml-16">
      </div>
    </div>

    <!-- Right side with forms -->
    <div class="w-1/2">
      <!-- Register Form -->
      <div class="mb-8">
        <h2 class="text-2xl text-red-500 mb-4">Register</h2>
        <form id="registerForm" class="space-y-4">
          <div>
            <label class="block text-gray-700">Email</label>
            <input type="email" class="w-full p-2 border rounded" placeholder="Email">
          </div>
          <div>
            <label class="block text-gray-700">Password</label>
            <input type="password" class="w-full p-2 border rounded" placeholder="Password">
          </div>
          <div>
            <label class="flex items-center">
              <input type="checkbox" class="mr-2">
              <span>I agree to terms</span>
            </label>
          </div>
          <button type="submit" class="w-full bg-gray-800 text-white p-2 rounded">Register</button>
        </form>
      </div>

      <!-- Login Form -->
      <div>
        <h2 class="text-2xl text-red-500 mb-4">Login</h2>
        <form id="loginForm" class="space-y-4">
          <div>
            <label class="block text-gray-700">Email</label>
            <input type="email" class="w-full p-2 border rounded" placeholder="Email">
          </div>
          <div>
            <label class="block text-gray-700">Password</label>
            <input type="password" class="w-full p-2 border rounded" placeholder="Password">
          </div>
          <button type="submit" class="w-full bg-gray-800 text-white p-2 rounded">Sign in</button>
          <a href="#" class="block text-center text-sm text-gray-600">Forgot password?</a>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>