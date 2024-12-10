@extends('templateViews')
@section('contenido')
<div class="container mt-4">
    <h1>Ofertas de {{ $profile->nombre }}</h1>
    <div class="row">
        @foreach ($profile->offers as $offer)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $offer->descripcion }}</h5>
                    <p class="card-text">Vigencia: {{ $offer->fecha_inicio }} - {{ $offer->fecha_vencimiento }}</p>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#generateVoucherModal"
                        data-offer-id="{{ $offer->id }}">Generar Voucher</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="generateVoucherModal" tabindex="-1" aria-labelledby="generateVoucherModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('voucher.store') }}" method="POST">
                @csrf
                <input type="hidden" name="oferta_id" id="modalOfferId">
                <div class="modal-body">
                    <label for="rut">RUT</label>
                    <input type="text" name="rut" id="rut" class="form-control">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                </div>
                <div class="modal-footer">
                   <a href="{{ route('voucher.downloadPdf', $offer->id) }}" class="btn btn-success mt-2">Descargar PDF</a>

                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const modal = document.getElementById('generateVoucherModal');
    modal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const offerId = button.getAttribute('data-offer-id');
        document.getElementById('modalOfferId').value = offerId;
    });
</script>
@endsection
