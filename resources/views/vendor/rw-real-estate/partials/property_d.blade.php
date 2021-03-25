<div class="c-properties-grid__item">
    <h3 class="c-properties-grid-item__title">{!! $property->name !!}</h3>
    <p>{!! $property->description !!}</p>
    <ul class="c-properties-grid-item__list">
        <li>Price: {!! $property->price !!} €</li>
        <li>Location: {!! $property->location_name !!}</li>
        <li>Rooms: {!! $property->bedrooms !!}</li>
        <li>Bathrooms: {!! $property->bathrooms !!}</li>
        <li>Built Area: {!! $property->built_area !!} m2</li>
    </ul>
</div>
