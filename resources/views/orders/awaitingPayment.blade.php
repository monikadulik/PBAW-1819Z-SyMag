@extends('layout')

@section('content')
    <div class="btn-group m-3">
        <a class="btn btn-dark" type="button" href="{{ route('awaitingPayment') }}">Oczekuje na płatność</a>
        <a class="btn btn-secondary" type="button" href="{{ route('inProgress') }}">W realizacji</a>
        <a class="btn btn-secondary" type="button" href="{{ route('awaitingIssue') }}">Oczekuje na wydanie</a>
        <a class="btn btn-secondary" type="button" href="{{ route('issued') }}">Wydano</a>
    </div>

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ID</th>
            <th scope="col">Data zamówienia</th>
            <th scope="col">Wartość zamówienia</th>
            <th scope="col">Status realizacj</th>
            <th scope="col">Szczegóły zamówienia</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td scope="row">{{ $loop->iteration }}</td>
                <td>{{ $order->id }}</td>
                <td>{{ $order->data_zamowienia }}</td>
                <td>{{ $order->wartosc_zamowienia }}</td>
                <td>{{ $order->status_realizacji }}</td>
                <td><a class="btn btn-outline-primary btn-sm disp-on-hov" href="/orders/{{ $order->id }}">Szczegóły
                        zamówienia</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
