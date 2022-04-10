@if (session('message'))
    <div {{ $attributes }} class="mb-3">
        <div class="font-medium text-green-600">
            {{ __('Yash!') }}
        </div>

        <ul class="mb-3 list-disc list-inside text-sm text-green-600">
            {{ session('message') }}
        </ul>
    </div>
@endif
