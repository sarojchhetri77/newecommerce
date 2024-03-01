<p>Dear Super Admin,</p>

<p>A new store '{{ $store->name }}' has been created and is pending approval. Please review and take action.</p>
<a class="btn btn-primary btn-sm" href="{{ route('stores.approve', ['store' => $store->id]) }}">Approve Store</a>


