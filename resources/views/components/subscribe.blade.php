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
        <form id="subscribeForm" class="space-y-3" method="POST" action="{{ route('subscribe') }}">
            @csrf
            <div class="flex flex-col gap-3">
                <input type="email" name="email" placeholder="name@yourmail.com"
                    class="w-[90%] px-4 py-3 bg-white text-black placeholder-black/50 border border-white/20 rounded-xl focus:outline-none focus:ring-2 focus:ring-peachy-orange font-ttNorms mb-1"
                    required>
                <button id="subscribeButton" type="submit"
                    class="relative flex items-center justify-center w-[90%] px-6 py-3 bg-peachy-orange text-white rounded-full font-bold hover:bg-peachy-orange-hover transition duration-200 font-ttNorms">
                    <span id="buttonText">Subscribe</span>
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

<script>
    document.getElementById('subscribeForm').addEventListener('submit', async function (e) {
        e.preventDefault();

        const button = document.getElementById('subscribeButton');
        const buttonText = document.getElementById('buttonText');
        const successMessage = document.getElementById('success-message');
        const emailInput = document.querySelector('input[name="email"]');
        const originalText = 'Subscribe';

        buttonText.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Please wait...';

        try {
            const response = await fetch(this.action, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    email: emailInput.value
                })
            });

            if (!response.ok) {
                const errorData = await response.json();
                throw new Error(errorData.message || 'Failed to subscribe');
            }

            buttonText.textContent = originalText;
            successMessage.classList.remove('hidden');
            emailInput.value = '';

        } catch (error) {
            alert(error.message);
            buttonText.textContent = originalText;
        }
    });
</script>
