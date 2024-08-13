<div>
    <label for='{{ $name }}' class="mb-1 flex items-centered">
        <input type='radio' name='{{ $name }}' value='' @checked(!request($name)) />
        <span class='ml-2'>All</span>
    </label>

    @foreach ($options as $option)
        <label for='{{ $name }}' class="mb-1 flex items-centered">
            <input type='radio' name='{{ $name }}' value='{{ $option }}' @checked(request($name) === $option) />
            <span class='ml-2'>{{ Str::ucfirst($option) }}</span>
        </label>
    @endforeach
</div>
