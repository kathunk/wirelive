@if(isset($attributes['pink']))
    <svg {{ $attributes->except('pink') }} viewBox="0 0 247 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 0H202L247 48H0V0Z" fill="none"/>
    </svg>
@else
    <svg {{ $attributes }} viewBox="0 0 247 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 0H202L247 48H0V0Z" fill="#d2d2d2"/>
    </svg>
@endif
