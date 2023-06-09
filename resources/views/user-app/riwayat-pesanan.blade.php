@extends('layout.header-transaksi')
@section('title', 'Riwayat Tukar Poin')

@section('transaction-content')
@section('transaction-title', 'RIWAYAT TUKAR POIN')
<main class="main-container" style="min-height: calc(100vh - 64px);">
    <div class="pt-3 mx-3">
        @if (isset($tukarPoin_history) || !empty($tukarPoin_history))
        @forelse($tukarPoin_history as $tukar_poin)
        <div class="card border-0 rounded-3 shadow mb-2">
            <div class="card-body">
                <div class="row d-flex align-items-center">
                    <div class="col-2">
                        <img class="min-w-100" style="height: 36px;" src="{{ url($tukar_poin->reward->image) }}"
                            alt="reward">
                    </div>
                    <div class="col-6 text-start">
                        <p class="mb-0 fw-bold">
                            {{ $tukar_poin->reward->name }}
                        </p>
                        <p class="mb-0 font-sm text-muted">
                            {{ $tukar_poin->created_at }}
                        </p>
                    </div>
                    @if( $tukar_poin->status == 'Pending')
                    <div class="col-4 text-center">
                        <p class="mb-0 font-sm fw-bold text-white bg-dark rounded-3">
                            {{ $tukar_poin->status }}
                        </p>
                    </div>
                    @elseif( $tukar_poin->status == 'On Proses' )
                    <div class="col-4 text-center">
                        <p class="mb-0 font-sm fw-bold text-white bg-warning rounded-3">
                            {{ $tukar_poin->status }}
                        </p>
                    </div>
                    @else
                    <div class="col-4 text-center">
                        <p class="mb-0 font-sm fw-bold text-white bg-success rounded-3">
                            {{ $tukar_poin->status }}
                        </p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @empty
        <div class="card border-0 shadow mb-2">
            <div class="card-body">
                <div class="row d-flex align-items-center">
                    <div class="col text-center text-danger">
                        <p class="mb-0 fw-bold">
                            Anda belum pernah melakukan penukaran poin menjadi reward.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforelse
        @endif
    </div>
</main>
@endsection