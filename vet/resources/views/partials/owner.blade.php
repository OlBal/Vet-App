
<div class="card">
    <h2 class="card-header">
        {{ $owner->fullName() }}
    </h2> 
    <article class="card-body">
        {{ $owner->fullAddress() }} 
    </article>
    <h2 class="card-body">
        {{ $owner->animal}}
    </h2>
    {{-- <article class="card-body">
        {{ $owner->fullAddress() }} 
    </article> --}}
</div>
