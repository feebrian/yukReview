@extends('auth.dashboard.layouts.main')

@section('container')
    <div class="row">
        <div class="row justify-content-between">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">

                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                    <span data-feather="calendar" class="align-text-bottom"></span>
                    This week
                </button>
            </div>
        </div>

        <h2>Section title</h2>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Header</th>
                        <th scope="col">Header</th>
                        <th scope="col">Header</th>
                        <th scope="col">Header</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1,001</td>
                        <td>random</td>
                        <td>data</td>
                        <td>placeholder</td>
                        <td>text</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
