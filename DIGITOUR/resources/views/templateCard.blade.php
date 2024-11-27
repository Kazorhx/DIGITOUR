<style>
    .cabin-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        margin-bottom: 20px;
        padding: 15px;
        display: flex;
        align-items: center;
        gap: 20px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .cabin-image-container {
        width: 300px;
        height: 200px;
        border-radius: 10px;
        overflow: hidden;
        flex-shrink: 0;
    }

    .cabin-image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .cabin-content {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .cabin-title {
        color: #333;
        font-size: 20px;
        font-weight: bold;
    }

    .cabin-description {
        color: #666;
        font-size: 14px;
        line-height: 1.5;
    }

    .btn-como-llegar {
        display: inline-block;
        background: #2ea843;
        color: white;
        padding: 8px 20px;
        border-radius: 20px;
        text-decoration: none;
        font-size: 14px;
        align-self: flex-start;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .btn-como-llegar:hover {
        background: #239336;
    }
</style>

<div class="cabin-card">
    <div class="cabin-image-container">
        <img src="{{ $image ?? asset('images/default_cabin.jpg') }}" alt="{{ $nombre}}">
    </div>
    <div class="cabin-content">
        <h3 class="cabin-title">{{ $nombre }}</h3>
        <p class="cabin-description">{{ $profile->descripcion }}</p>
        @if (!empty($url_geolocalizacion))
            <a href="{{$url_geolocalizacion }}" class="btn-como-llegar" target="_blank">¿Cómo llegar?</a>
        @endif
    </div>
</div>

