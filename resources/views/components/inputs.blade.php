<div>
    <div class="mb-3">
        <label for="{{ $id }}" class="form-label">{{ $name }}</label>
        <input 
            type="{{ $type }}" 
            name="{{ $name }}" 
            id="{{ $id }}" 
            value="{{ old($name, $value) }}" 
            placeholder="{{ $placeholder }}" 
            class="{{ $class }}" 
        >
    </div>    
</div>