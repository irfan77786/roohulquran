@php
    $rounded = $rounded ?? false;
    $inputClass = $rounded ? 'form-control rounded-pill' : 'form-control';
    $textareaClass = $rounded ? 'form-control rounded-pill w-100' : 'form-control';
@endphp

<div class="mb-3">
    <input type="text" class="{{ $inputClass }}" name="name" placeholder="Enter your full name" required>
</div>
<div class="mb-3">
    <input type="text" class="{{ $inputClass }}" name="phone" placeholder="Enter your phone number" required>
</div>
<div class="mb-3">
    <textarea class="{{ $textareaClass }}" name="message" rows="{{ $rounded ? 2 : 4 }}" placeholder="Your message"></textarea>
</div>
