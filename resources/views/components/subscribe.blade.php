<div class="relative z-10 mx-auto max-w-7xl">
    <!-- Left-aligned content container -->
    <div class="max-w-xs">
        <!-- Newsletter heading -->
        <h3 class="text-lg font-bold text-white sm:text-xl font-calimate">
            Subscribe to our newsletter.
        </h3>
        <p class="mb-6 text-white/80 font-ttNorms">
            Stay updated with our fresh news!
        </p>

        <!-- Email form -->
        <form class="space-y-3" method="POST" action="#">
            <div class="flex flex-col gap-3">
                <input type="email" placeholder="name@yourmail.com"
                    class="w-[90%] px-4 py-3 bg-white text-black placeholder-black/50 border border-white/20 rounded-xl focus:outline-none focus:ring-2 focus:ring-peachy-orange font-ttNorms mb-1"
                    required>
                <button type="submit"
                    class="w-[90%] px-6 py-3 bg-peachy-orange text-white rounded-full font-bold hover:bg-peachy-orange-hover transition duration-200 font-ttNorms">
                    Subscribe
                </button>
            </div>
        </form>

        <!-- Success message -->
        <div class="mt-2 hidden" id="success-message">
            <p class="text-white font-ttNorms bg-green-600 py-3 rounded-xl">
                You're subscribed! 🎉<br>Thank you for joining our newsletter.
            </p>
        </div>
    </div>
</div>
