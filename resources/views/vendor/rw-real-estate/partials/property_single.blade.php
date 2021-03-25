<div class="c-properties-grid__item">
    <h3 class="c-properties-grid-item__title">{!! $property->name !!}</h3>
    <p>{!! $property->description !!}</p>
    <ul class="c-properties-grid-item__list">
        <li>Property type: {!! $property->property_type !!}</li>
        <li>Price: {!! $property->price !!} €</li>
        <li>Location: {!! $property->location_name !!}</li>
        <li>Rooms: {!! $property->bedrooms !!}</li>
        <li>Bathrooms: {!! $property->bathrooms !!}</li>
        <li>Private Pools: {!! $property->private_pool !!}</li>
        <li>Community Pools: {!! $property->community_pool !!}</li>
        <li>Garden: {!! $property->garden !!}</li>
        <li>Garaje: {!! $property->garaje !!}</li>
        <li>Built Area: {!! $property->built_area !!} m2</li>
        <li>Land Area: {!! $property->land_area !!} m2</li>
        <li>Agent: {!! $property->agent_name !!}</li>
    </ul>
</div>