@props(['name'])
<div class="mb-6">
    <label for="{{ $name }}" class="block mb-2 uppercase font-bold text-xs text-gray-700">
        {{ ucwords($name)  }}
    </label>

    <input class="border border-gray-200 p-2 w-full rounded" name="{{ $name }}" id="{{ $name }}" {{ $attributes(['value' => old($name)]) }}>

    @error($name)
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
    @enderror
</div>
