@if (isset($formSubmitted))
<script>
    const formSubmitted = {!! json_encode($formSubmitted) !!};
    window.onload = function() {
        if (formSubmitted) {
            var element = document.getElementById('formContact');
            var rect = element.getBoundingClientRect();
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            window.scrollTo(0, rect.top + scrollTop - 300);
        }
    }
</script>
<div id="formContact" class="flex justify-center items-center h-full">
    <div class=" flex flex-col gap-4 text-center my-6">

        <span class="text-5xl font-bold mb-2 font-handwriting">Dziękujemy za wiadomość!</span>
        <span class="text-xl font-bold">Odpowiemy najszybciej jak to możliwe!</span>
    </div>
</div>
@else
<form method="post" action="{{ route('contact_form') }}" id="contactForm" {{-- <form method="post" action="#" id="contactForm" --}}
    class="max-w-md mx-auto flex flex-col justify-start items-start">
    @csrf
    <x-base.input type='text' name='name' id='name' for='name' required>Imię
        i
        nazwisko</x-base.input>
    <x-base.input type='email' name='email' id='email' for='email'
        required>Email</x-base.input>
    <x-base.input type='tel' name='tel' id='tel' for='tel'>Numer
        telefonu</x-base.input>
    @error('tel')
        <p class="text-red-600 text-xs">Numer telefonu nie może zawierać liter</p>
    @enderror
    <x-base.textarea name='content' id='content' for='content'
        required>Wiadomość</x-base.textarea>



    <button type="submit"  class="border py-4 px-10 uppercase text-sm font-semibold  duration-300 border-secondary-400 bg-secondary-400 text-fontLight hover:bg-secondary-200 mt-6">Wyślij</button>

</form>
</div>
@endif