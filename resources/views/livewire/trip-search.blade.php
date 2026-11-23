<div class="rounded-2xl bg-white p-5 shadow-[0_12px_40px_rgba(83,30,52,0.12)] sm:p-6">
    <div class="mb-5 flex items-center gap-3"><span class="flex h-10 w-10 items-center justify-center rounded-full bg-blush text-xl text-rose-ink" aria-hidden="true">✳</span><div><h2 class="font-bold text-gray-900">Where will you go?</h2><p class="text-sm text-gray-500">Start planning your next trip</p></div></div>
    <form wire:submit="search" class="grid gap-4 md:grid-cols-[1fr_1fr_auto] md:items-end">
        <div><label for="pickup" class="mb-2 block text-sm font-semibold text-gray-700">Pick-up date</label><input id="pickup" type="date" wire:model="pickup" class="w-full rounded-lg border border-[#F3D3E0] px-4 py-3 text-gray-700" aria-describedby="pickup-error"><p id="pickup-error" class="mt-1 text-sm text-rose-ink">@error('pickup') {{ $message }} @enderror</p></div>
        <div><label for="return" class="mb-2 block text-sm font-semibold text-gray-700">Return date</label><input id="return" type="date" wire:model="return" class="w-full rounded-lg border border-[#F3D3E0] px-4 py-3 text-gray-700" aria-describedby="return-error"><p id="return-error" class="mt-1 text-sm text-rose-ink">@error('return') {{ $message }} @enderror</p></div>
        <button class="rounded-lg bg-rose-ink px-7 py-3 font-semibold text-white transition hover:bg-[#9D174D]" type="submit">Check dates <span aria-hidden="true">→</span></button>
    </form>
    @if ($searched)<p role="status" class="mt-4 rounded-lg bg-blush p-3 text-sm text-gray-700">Your dates look good! Vehicle availability and booking are coming soon.</p>@endif
</div>
