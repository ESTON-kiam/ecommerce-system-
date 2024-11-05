@foreach($products as $product)
    <div class="product">
        <h2>{{ $product->name }}</h2>
        <p>{{ $product->description }}</p>
        <p>Price: ${{ $product->price }}</p>
        @if($product->image)
            <img src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $product->name }}">
        @endif
    </div>
@endforeach
