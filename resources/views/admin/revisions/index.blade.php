@extends('layouts.layoutbase')

@section('content')
@section('title','revisioni')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-uppercase">Coda Revisioni Sospensioni</h2>
    </div>


    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Ticket</th>
                        <th>Cliente</th>
                        <th>Sospensione</th>
                        <th>Intervallo</th>
                        <th>Stato</th>
                        <th class="text-center">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($revisions as $revision)
                        <tr>
                            <td class="fw-bold">{{ $revision->id }}</td>
                            <td>
                                {{ $revision->user_name }} <br>
                                <small class="text-muted">{{ $revision->user_email }}</small>
                            </td>
                            <td>{{ $revision->brand }} {{ $revision->model }}</td>
                            <td>{{ $revision->service_interval }} ore</td>
                            <td>
                                @if($revision->status == 'Inviata')
                                    <span class="badge bg-warning text-dark">Inviata</span>
                                @elseif($revision->status == 'Accettata')
                                    <span class="badge bg-info">Accettata</span>
                                @elseif($revision->status == 'Rifiutata')
                                    <span class="badge bg-danger">Rifiutata</span>
                                     @elseif($revision->status == 'Presa in carico')
                                    <span class="badge bg-black">Presa in carico</span>
                                     @elseif($revision->status == 'In Lavorazione')
                                    <span class="badge bg-primary">In Lavorazione</span>
                                     @elseif($revision->status == 'Completata')
                                    <span class="badge bg-success">Completata</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{ route('admin.revisions.edit', $revision) }}" class="btn btn-sm btn-outline-dark text-uppercase fw-bold">
                                    <i class="fas fa-edit"></i> Gestisci
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection